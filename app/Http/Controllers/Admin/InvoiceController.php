<?php

namespace App\Http\Controllers\Admin;

use PDF;
use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Service;
use App\Mail\InvoiceMail;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
    public function invoiceCreate(){
        $services = Service::whereStatus(1)->get();
        return view('admin.invoice.create', compact('services'));
    }
    
    public function edit($id){
        $invoice = TaxiBooking::find($id);
        $services = Service::whereStatus(1)->get();
        $passanger = json_decode($invoice->passanger_infos);
        return view('admin.invoice.edit', compact('invoice', 'services', 'passanger'));
    }
    
    public function show($id){
        $invoice = Invoice::find($id);
        return view('admin.invoice.show', compact('invoice'));
    }

    public function invoiceStore(Request $request){
        try {
            $general = gs();
            $inputs = $request->all();
            $inputs['passanger_infos'] = json_encode($request->passanger);
            $inputs['stops'] = json_encode($request->stops);
            $inputs['return_service'] = json_encode($request->return);
            $inputs['user_id'] = 2;
            $data = TaxiBooking::create($inputs);

            return redirect()->back()->withSuccess('Invoice created successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function invoiceUpdate(Request $request, $id){
        try {
            $inputs = $request->all();
            $invoice = Invoice::find($id);
            $invoice->update($inputs);
            return redirect()->back()->withSuccess('Invoice updated successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function manualInvoices(Request $request){
        try {
            $datas = Invoice::all();
            return view('admin.invoice.list', compact('datas'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function print($id){
        try {
            $invoiceItem = TaxiBooking::with(['service', 'vehicleBooked'])->where('id',$id)->first();
            $today = $invoiceItem->created_at;
            $twoDaysLater = $today->addDays(2);
            $formattedDate = $twoDaysLater->toDateString();

            return view('invoice', compact('invoiceItem', 'formattedDate'));

        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }


}
