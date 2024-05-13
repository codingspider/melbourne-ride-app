<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $guarded = ['id'];
    public function fullname(): Attribute
    {
        return new Attribute(
            get:fn () => $this->name,
        );
    }

    public function username(): Attribute
    {
        return new Attribute(
            get:fn () => $this->email,
        );
    }

    public function statusBadge(): Attribute
    {
        return new Attribute(
            get:fn () => $this->badgeData(),
        );
    }

    public function badgeData(){
        $html = '';
        if($this->status == Status::TICKET_OPEN){
            $html = '<span class="badge rounded-pill bg-success">Open</span>';
        }
        elseif($this->status == Status::TICKET_ANSWER){
            $html = '<span class="badge rounded-pill bg-primary">Answered</span>';
        }

        elseif($this->status == Status::TICKET_REPLY){
            $html = '<span class="badge rounded-pill bg-warning">Replied</span>';
        }
        elseif($this->status == Status::TICKET_CLOSE){
            $html = '<span class="badge rounded-pill bg-danger">Closed</span>';
        }
        return $html;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function supportMessage(){
        return $this->hasMany(SupportMessage::class);
    }

}