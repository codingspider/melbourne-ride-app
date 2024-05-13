<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
