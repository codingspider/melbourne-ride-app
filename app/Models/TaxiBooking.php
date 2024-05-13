<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaxiBooking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    public function vehicleBooked()
    {
        return $this->belongsTo(Fleet::class, 'fleet_id', 'id');
    }
    
    public function payment()
    {
        return $this->hasMany(BookingPayment::class, 'booking_id', 'id');
    }

    public function badgeData(){
        $html = '';
        if($this->status == Status::PENDING){
            $html = '<span class="badge rounded-pill bg-info">Pending</span>';
        }
        elseif($this->status == Status::ACCEPTED){
            $html = '<span class="badge rounded-pill bg-primary">Accepted</span>';
        }

        elseif($this->status == Status::COMPLETED){
            $html = '<span class="badge rounded-pill bg-success">Completed</span>';
        }
        elseif($this->status == Status::CANCELLED){
            $html = '<span class="badge rounded-pill bg-danger">Cancelled</span>';
        }
        return $html;
    }
    
}
