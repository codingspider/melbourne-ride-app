<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking(){
        return $this->belongsTo(TaxiBooking::class, 'booking_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
