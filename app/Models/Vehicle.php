<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function badgeData(){
        $html = '';
        if($this->status == Status::ENABLE){
            $html = '<span class="badge rounded-pill bg-success">Enabled</span>';
        }
        elseif($this->status == Status::DISABLE){
            $html = '<span class="badge rounded-pill bg-danger">Disabled</span>';
        }

        return $html;
    }
}
