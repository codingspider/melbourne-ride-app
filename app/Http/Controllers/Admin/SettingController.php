<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\TestEmail;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Spatie\Backup\Tasks\Backup\Backup;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Support\Renderable;
use Spatie\Backup\BackupDestination\BackupDestination;

class SettingController extends Controller
{
    public function index()
    {
        $general = gs();
        $timezone_list = allTimeZones();

        $months = [];
        $monthNames = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
        ];

        foreach ($monthNames as $monthNumber => $monthName) {
            $months[$monthNumber] = $monthName;
        }

        return view('admin.setting.index', compact('general', 'timezone_list', 'months'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function emailSetting()
    {
        $general = gs();
        return view('admin.setting.email_seeting', compact('general'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function emailSettingUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
            $general = gs();
            $general->mail_host = $request->mail_host;
            $general->mail_port = $request->mail_port;
            $general->mail_username = $request->mail_username;
            $general->mail_password = $request->mail_password;
            $general->mail_from_name = $request->mail_from_name;
            $general->mail_from_address = $request->mail_from_address;
            $general->mail_status = $request->mail_status;
            $general->mail_encryption = $request->mail_encryption;
            $general->save();

            $this->setEnv('MAIL_HOST', $request->mail_host);
            $this->setEnv('MAIL_PORT', $request->mail_port);
            $this->setEnv('MAIL_USERNAME', $request->mail_username);
            $this->setEnv('MAIL_PASSWORD', $request->mail_password);
            $this->setEnv('MAIL_FROM_ADDRESS', $request->mail_from_address);
            $this->setEnv('MAIL_FROM_NAME', $request->mail_from_name);
            $this->setEnv('MAIL_ENCRYPTION', $request->mail_encryption);

            \Artisan::call('config:clear');
            
            DB::commit();
            return redirect()->route('setting')->with('success','Setting saved Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('setting')->with('error', $e->getMessage());
        }
        
    }

    private function setEnv($key, $value)
    {

        $envFilePath = app()->environmentFilePath();
        $envContents = File::get($envFilePath);

        // Wrap the new value in double quotation marks
        $newValue = '"' . addslashes($value) . '"';

        // Use the new value in the replacement pattern
        $newEnvContents = preg_replace(
            "/^$key=.*/m",
            "$key=$newValue",
            $envContents
        );

        File::put($envFilePath, $newEnvContents);
    }
    

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function emailTesting()
    {
        try {
            Mail::to(gs()->business_email)->send(new TestEmail());
            return redirect()->route('setting')->with('success', 'Email send successfully');
        } catch (\Exception $e) {
            return redirect()->route('setting')->with('error', 'Error sending email: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function databaseBackup()
    {
        $databaseName = config('database.connections.mysql.database');
        $backupFileName = "backup-{$databaseName}-" . date('Y-m-d-His') . '.sql';
        $backupFilePath = storage_path("app/{$backupFileName}");
        $command = "mysqldump --user=".env('DB_USERNAME')." --password=".env('DB_PASSWORD')." --host=".env('DB_HOST')." $databaseName > $backupFilePath";
        exec($command);
        $headers = [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => "attachment; filename={$backupFileName}",
        ];
        return response()->file($backupFilePath, $headers);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'business_name' => 'required',
            'business_address' => 'required',
            'business_number' => 'required',
            'business_email' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();
        try {
            $general = gs();
            if ($request->hasFile('logo')) {
                $old = $general->logo;
                $logo = fileUploader($request->logo, getFilePath('logo'), getFileSize('logo'), $old);
                $general->logo = $logo;
            }

            if ($request->hasFile('favicon')) {
                $old = $general->favicon;
                $favicon = fileUploader($request->favicon, getFilePath('fav_icon'), getFileSize('fav_icon'), $old);
                $general->favicon = $favicon;
            }

            if($request->nab_transact && $request->merchant_id && $request->transaction_pass){
                $general->nab_transact = $request->nab_transact;
                $general->merchant_id = $request->merchant_id;
                $general->transaction_pass = $request->transaction_pass;
            }

            if($request->paypal_client_id &&  $request->paypal_secret){
                $general->paypal_client_id = $request->paypal_client_id;
                $general->paypal_secret = $request->paypal_secret;

                $this->setEnv('PAYPAL_LIVE_CLIENT_ID', $request->paypal_client_id);
                $this->setEnv('PAYPAL_LIVE_CLIENT_SECRET', $request->paypal_secret);
            }

            $this->setEnv('CLICKSEND_USERNAME', $request->clicksend_username);
            $this->setEnv('CLICKSEND_KEY', $request->clicksend_key);

            $general->business_name         = $request->business_name;
            $general->business_address      = $request->business_address;
            $general->business_number       = $request->business_number;
            $general->business_email        = $request->business_email;
            $general->time_zone             = $request->time_zone;
            $general->clicksend_username    = $request->clicksend_username;
            $general->clicksend_key         = $request->clicksend_key;
            $general->sms_status            = $request->sms_status;
            $general->gst                   = $request->gst;

            $general->subrub_charge_type    = $request->subrub_charge_type;
            $general->subrub_amount         = $request->subrub_amount;
            $general->admin_confirm_sms     = $request->admin_confirm_sms;
            $general->customer_confirm_sms  = $request->customer_confirm_sms;
            $general->admin_remind_sms      = $request->admin_remind_sms;
            $general->customer_remind_sms   = $request->customer_remind_sms;
            $general->save();
            
            DB::commit();
            return redirect()->route('setting')->with('success','Data updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('setting')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function cachClear(){
        Artisan::call('cache:clear');
        return redirect()->route('setting')->with('success','Cache Clear Successfully');
    }

    public function userLog(){
        $perPage = $request->input('perPage', 10);
        $items = ActivityLog::with('user')->paginate($perPage);

        return view('admin.setting.log', compact('items'));
    }

    public function getLogData(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $items = ActivityLog::with('user')->paginate($perPage);
        return view('admin.setting.log', compact('items'));
    }
    
}
