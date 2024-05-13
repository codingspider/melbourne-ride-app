<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function badgeData(){
        $html = '';
        if($this->status == Status::ACTIVE){
            $html = '<span class="badge rounded-pill bg-success">Active</span>';
        }
        elseif($this->status == Status::INACTIVE){
            $html = '<span class="badge rounded-pill bg-danger">Inactive</span>';
        }

        return $html;
    }
}
