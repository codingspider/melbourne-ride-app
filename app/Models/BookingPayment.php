<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingPayment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking()
    {
        return $this->belongsTo(TaxiBooking::class);
    }

    public function badgePaymentData(){
        $html = '';
        if($this->status == Status::PAYMENT_INITIATE){
            $html = '<span class="badge rounded-pill bg-primary">Initiated</span>';
        }
        elseif($this->status == Status::PAYMENT_SUCCESS){
            $html = '<span class="badge rounded-pill bg-success">Success</span>';
        }

        elseif($this->status == Status::PAYMENT_PENDING){
            $html = '<span class="badge rounded-pill bg-info">Pending</span>';
        }
        elseif($this->status == Status::PAYMENT_REJECT){
            $html = '<span class="badge rounded-pill bg-danger">Rejected</span>';
        }
        return $html;
    }
}
