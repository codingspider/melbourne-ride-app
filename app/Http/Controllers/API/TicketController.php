<?php

namespace App\Http\Controllers\API;

use App\Constants\Status;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\SupportAttachment;
use App\Models\SupportMessage;
use App\Models\SupportTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{

    protected $files;
    protected $maxSize;
    protected $allowedExtension = ['jpg', 'png', 'jpeg', 'pdf', 'doc', 'docx'];
    protected $user = null;
    protected $userType;
    protected $column;

    /**
     * @method
     * Ticket List
     *
     * This endpoint is used to get all Ticket List.
     * 
     * @authenticated
     * 
     * @response scenario="Request Successful" {
     *       "status": true,
     *       "message": "Request Successfull",
     *       "data": {
     *           "current_page": 1,
     *           "data": [
     *               {
     *                   "id": 1,
     *                   "user_id": 16,
     *                   "name": "Abdul",
     *                   "email": "lotif@mail.com",
     *                   "ticket": "640788",
     *                   "subject": "Booking Problem",
     *                   "status": 0,
     *                   "priority": 3,
     *                   "last_reply": "2023-12-02 10:15:18",
     *                   "created_at": "2023-12-02T10:15:18.000000Z",
     *                   "updated_at": "2023-12-02T10:15:18.000000Z"
     *               }
     *           ],
     *           "first_page_url": "http://127.0.0.1:8000/api/tickets?page=1",
     *           "from": 1,
     *           "last_page": 1,
     *           "last_page_url": "http://127.0.0.1:8000/api/tickets?page=1",
     *           "links": [
     *               {
     *                   "url": null,
     *                   "label": "&laquo; Previous",
     *                   "active": false
     *               },
     *               {
     *                   "url": "http://127.0.0.1:8000/api/tickets?page=1",
     *                   "label": "1",
     *                   "active": true
     *               },
     *               {
     *                   "url": null,
     *                   "label": "Next &raquo;",
     *                   "active": false
     *               }
     *           ],
     *           "next_page_url": null,
     *           "path": "http://127.0.0.1:8000/api/tickets",
     *           "per_page": 20,
     *           "prev_page_url": null,
     *           "to": 1,
     *           "total": 1
     *       }
     *   }
     */
    public function index()
    {
        $user = auth()->user();
        $supports = SupportTicket::where('user_id', $user->id)->orderBy('id', 'desc')->paginate(getPaginate(20));
        
        return ApiResponse::success($supports, null, Status::SUCCESS);
    }

    /**
     * @method
     * 
     * Create New Ticket
     *
     * This endpoint is used to create a new support ticket.
     *
     * @bodyParam subject string required Example: Booking Problem
     * @bodyParam priority integer required Example: 1
     * @bodyParam message string required Example: I have a problem with booking a taxi.
     * @bodyParam attachments array nullable Example: 
     *
     * @response scenario="Request Successful" {
     *       "status": true,
     *       "message": "Ticket opened successfully.",
     *       "data": null
     *   }
     *
     * @response 417 scenario="Failed Login"{
     * "status": false,
     * "message": "Error occured."
     * }
     *
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);

        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
        }

        DB::beginTransaction();
        try {

            $ticket  = new SupportTicket();
            $message = new SupportMessage();

            $column             = 'user_id';
            $user               = auth()->user();
            
            $ticket->$column    = $user->id;
            $ticket->ticket     = rand(100000, 999999);
            $ticket->name       = $user->name;
            $ticket->email      = $user->email;
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
                if ($uploadAttachments != 200) return ApiResponse::error('File upload failed.', Status::VALIDATION_ERROR);;
            }

            DB::commit();
            return ApiResponse::success(null, 'Ticket opened successfully.', Status::SUCCESS);

        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponse::error($e->getMessage(), Status::ERROR);
        }
    }

    /**
     * @method
     * 
     * Ticket Message Reply
     * 
     *
     * This endpoint is used to reply a support ticket message.
     *
     * @urlParam ticket_id required Example: 1
     * @bodyParam message string required Example: Booking Problem message reply
     * @bodyParam attachments files[] optional 
     *
     * @response scenario="Request Successful" {
     *       "status": true,
     *       "message": "Message Sent.",
     *       "data": null
     *   }
     *
     * @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error occured."
     * }
     *
     */
    public function messageReply(Request $request, $id)
    {
        $user = auth()->user();
        $ticket = SupportTicket::where('id', $id)->firstOrFail();
        if ($user->id != $ticket->user_id) {
            return ApiResponse::error('Message not found', Status::ERROR);
        }
        $message = new SupportMessage();

        DB::beginTransaction();
        try {
            $ticket->status = ($user->user_type != 0) ? Status::TICKET_REPLY : Status::TICKET_ANSWER;
            $ticket->last_reply = Carbon::now();
            $ticket->save();
            $message->support_ticket_id = $ticket->id;
            if ($user->user_type == 0) {
                $message->user_id = $user->id;
            }

            $message->message   = $request->message;
            $message->user_id   = $user->id;
            $message->save();

            if ($request->hasFile('attachments')) {
                $uploadAttachments = $this->storeSupportAttachments($message->id);
                if ($uploadAttachments != 200) return ApiResponse::error('File upload failed.', Status::VALIDATION_ERROR);
            }

            DB::commit();
            return ApiResponse::success(null, 'Message Sent.', Status::SUCCESS);
        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponse::error($e->getMessage(), Status::ERROR);
        }
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

    /**
     * @method
     * 
     * Close Ticket
     *
     * This endpoint is used to close a support ticket.
     *
     * @urlParam ticket_id required Example: 1
     *
     * @response scenario="Request Successful" {
     *       "status": true,
     *       "message": "Ticket Closed successfully",
     *       "data": {
     *           "id": 1,
     *           "user_id": 16,
     *           "name": "Abdul",
     *           "email": "lotif@mail.com",
     *           "ticket": "640788",
     *           "subject": "Booking Problem",
     *           "status": 3,
     *           "priority": 3,
     *           "last_reply": "2023-12-03 07:07:49",
     *           "created_at": "2023-12-02T10:15:18.000000Z",
     *           "updated_at": "2023-12-03T07:16:36.000000Z"
     *       }
     *   }
     *
     * @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error occured."
     * }
     *
     */
    public function closeTicket($id)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();
            $ticket = SupportTicket::where('id', $id)->firstOrFail();
            $ticket->status = Status::TICKET_CLOSE;
            $ticket->save();
            DB::commit();
            return ApiResponse::success($ticket, 'Ticket Closed successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponse::error($e->getMessage(), Status::VALIDATION_ERROR);
        }
    }
}
