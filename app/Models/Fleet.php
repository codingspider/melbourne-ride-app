<?php

namespace App\Models;

use App\Models\Service;
use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fleet extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function badgeData(){
        $html = '';
        if($this->status == Status::ENABLE){
            $html = '<span class="badge rounded-pill bg-success">Enabled</span>';
        }
        elseif($this->status == Status::DISABLE){
            $html = '<span class="badge rounded-pill bg-danger">Disabled</span>';
        }
        elseif($this->status == Status::BOOKED){
            $html = '<span class="badge rounded-pill bg-warning">Booked</span>';
        }
        return $html;
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
