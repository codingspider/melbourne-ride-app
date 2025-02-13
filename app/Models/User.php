<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }
    
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function hasPermission($permission)
    {
        // Check if the user has the specified permission
        return $this->hasPermissionTo($permission);
    }


    public function creditCard()
    {
        return $this->hasOne(CreditCard::class);
    }
}
