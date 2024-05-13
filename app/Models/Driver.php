<?php

namespace App\Models;

use App\Constants\Status;
use App\Models\DriverTransportDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
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

    public function driver_detail()
    {
        return $this->hasOne(DriverDetails::class);
    }
    
    public function driver_transport_detail()
    {
        return $this->hasOne(DriverTransportDetails::class);
    }

    public function badgeData(){
        $html = '';
        if($this->status == Status::USER_VERIFIED){
            $html = '<span class="badge rounded-pill bg-success">Verified</span>';
        }
        elseif($this->status == Status::USER_UNVERIFIED){
            $html = '<span class="badge rounded-pill bg-info">Unverified</span>';
        }
        elseif($this->status == Status::USER_BAN){
            $html = '<span class="badge rounded-pill bg-danger">Banned</span>';
        }

        return $html;
    }
}
