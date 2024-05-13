<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function badgeData(){
        $html = '';
        if($this->status == Status::PUBLISH){
            $html = '<span class="badge rounded-pill bg-success">Publish</span>';
        }
        elseif($this->status == Status::ARCHIVE){
            $html = '<span class="badge rounded-pill bg-danger">Archive</span>';
        }

        return $html;
    }
}
