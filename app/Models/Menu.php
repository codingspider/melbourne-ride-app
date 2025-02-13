<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
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

        return $html;
    }

    public function parent()
    {
        return $this->hasOne('App\Models\Menu', 'id', 'parent_id')->orderBy('sort_order');
    }
    
    public function children()
    {
    
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id')->orderBy('sort_order');
    }
    
    public static function tree()
    {
        return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('sort_order')->get();
    }
}
