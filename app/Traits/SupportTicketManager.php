<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Constants\Status;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Models\SupportMessage;
use App\Models\AdminNotification;
use App\Models\SupportAttachment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

trait SupportTicketManager
{
    protected $files;
    protected $allowedExtension = ['jpg', 'png', 'jpeg', 'pdf', 'doc', 'docx'];
    protected $userType;
    protected $user = null;
    protected $column;

    public function supportTicket()
    {
        $user = $this->user;
        if (!$user) {
            abort(404);
        }
        $pageTitle = "Support Tickets";
        $supports = SupportTicket::where($this->column, $user->id)->orderBy('id', 'desc')->paginate(getPaginate());
        return view('customer.support.index', compact('supports', 'pageTitle'));
    }

    public function openSupportTicket()
    {
        $user = $this->user;
        if (!$user) {
            return to_route('customer-dashbaord');
        }
        $pageTitle = "Open Ticket";
        return view('customer.support.create', compact('pageTitle', 'user'));
    }

    public function storeSupportTicket(Request $request)
    {
        $ticket  = new SupportTicket();
        $message = new SupportMessage();

        $validator = $this->validation($request);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();
        try {

            $column             = $this->column;
            $user               = $this->user;
            $ticket->$column    = $user->id;
            $ticket->ticket     = rand(100000, 999999);
            $ticket->name       = $request->name;
            $ticket->email      = $request->email;
            $ticket->subject    = $request->subject;
            $ticket->last_reply = Carbon::now();
            $ticket->status     = Status::TICKET_OPEN;
            $ticket->priority   = $request->priority;
            $ticket->save();


            $message->support_ticket_id   = $ticket->id;
            $message->user_id   = $user->id;
            $message->message             = $request->message;
            $message->save();

            $adminNotification            = new AdminNotification();
            $adminNotification->$column   = $user->id;
            $adminNotification->title     = 'New support ticket has opened';
            $adminNotification->click_url = urlPath('admin.ticket.view', $ticket->id);
            $adminNotification->save();

            if ($request->hasFile('attachments')) {
                $uploadAttachments = $this->storeSupportAttachments($message->id);
                if ($uploadAttachments != 200) return back()->withNotify($uploadAttachments);;
            }

            DB::commit();
            return back()->withSuccess('Ticket opened successfully.');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function viewTicket($ticket)
    {
        $user      = $this->user;
        $column    = $this->column;
        $pageTitle = "View Ticket";
        $userId    = 0;

        $myTicket = SupportTicket::where('ticket', $ticket)->orderBy('id', 'desc')->firstOrFail();

        if ($myTicket->$column > 0) {
            if ($user) {
                $userId = $user->id;
            } else {
                return to_route($this->userType . '.login');
            }
        }

        $myTicket = SupportTicket::where('ticket', $ticket)->where($this->column, $userId)->orderBy('id', 'desc')->firstOrFail();
        $messages = SupportMessage::where('support_ticket_id', $myTicket->id)->with('ticket', 'admin', 'attachments')->orderBy('id', 'desc')->get();

        return view('customer.support.view', compact('myTicket', 'messages', 'pageTitle', 'user'));
    }


    public function replyTicket(Request $request, $id)
    {
        $user = $this->user;
        $userId = 0;
        if ($user) {
            $userId = $user->id;
        }
        $ticket = SupportTicket::where('id', $id)->firstOrFail();
        if (($this->userType == 'user') && ($userId != $ticket->user_id)) {
            abort(404);
        }
        $message = new SupportMessage();
        $request->merge(['ticket_reply' => 1]);

        $validator = $this->validation($request);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }
        DB::beginTransaction();
        try {
            $ticket->status = $this->userType != 'admin' ? Status::TICKET_REPLY : Status::TICKET_ANSWER;
            $ticket->last_reply = Carbon::now();
            $ticket->save();
            $message->support_ticket_id = $ticket->id;
            $message->message   = $request->message;
            $message->user_id   = $user->id;
            $message->save();

            if ($request->hasFile('attachments')) {
                $uploadAttachments = $this->storeSupportAttachments($message->id);
                if ($uploadAttachments != 200) return back()->withNotify($uploadAttachments);;
            }
            DB::commit();
            return back()->withSuccess('Replied successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    protected function storeSupportAttachments($messageId)
    {
        $path = getFilePath('ticket');

        foreach ($this->files as  $file) {
            try {
                $attachment = new SupportAttachment();
                $attachment->support_message_id = $messageId;
                $attachment->attachment = fileUploader($file, $path);
                $attachment->save();
            } catch (\Exception $exp) {
                $notify[] = ['error', 'File could not upload'];
                return $notify;
            }
        }

        return 200;
    }

    protected function validation($request)
    {
        $maxSize = substr(ini_get('upload_max_filesize'), 0, -1);
        $maxSize = 1;
        $this->maxSize = $maxSize;
        $this->files = $request->file('attachments');

        $validator = Validator::make($request->all(), [
            'attachments' => [
                'max:4096',
                function ($attribute, $value, $fail) {
                    foreach ($this->files as $file) {
                        $ext = strtolower($file->getClientOriginalExtension());
                        if (($file->getSize() / 1000000) > $this->maxSize) {
                            return $fail("Maximum $this->maxSize MB file size allowed!");
                        }
                        if (!in_array($ext, $this->allowedExtension)) {
                            return $fail("Only png, jpg, jpeg, pdf, doc, docx files are allowed");
                        }
                    }
                    if (count($this->files) > 5) {
                        return $fail("Maximum 5 files can be uploaded");
                    }
                },
            ],
            'subject'   => 'required_without:ticket_reply|max:255',
            'priority'  => 'required_without:ticket_reply|in:1,2,3',
            'message'   => 'required',
        ]);

        return $validator;
    }

    public function closeTicket($id)
    {
        DB::beginTransaction();
        try {
            $user = $this->user;
            $ticket = SupportTicket::where('id', $id)->firstOrFail();
            if ($this->userType != '0') {
                $column = $this->column;
                if ($user->id != $ticket->$column) {
                    abort(403);
                }
            }

            $ticket->status = Status::TICKET_CLOSE;
            $ticket->save();
            DB::commit();
            return back()->withSuccess('Ticket close succesfully');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    public function ticketDownload($ticket_id)
    {
        $attachment = SupportAttachment::findOrFail(decrypt($ticket_id));
        $file = $attachment->attachment;
        $path = getFilePath('ticket');
        $full_path = $path . '/' . $file;
        $title = slug($attachment->supportMessage->ticket->subject);
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $mimetype = mime_content_type($full_path);
        header('Content-Disposition: attachment; filename="' . $title . '.' . $ext . '";');
        header("Content-Type: " . $mimetype);
        return readfile($full_path);
    }
}
