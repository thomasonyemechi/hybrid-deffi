<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'sponsor',
        'sponsor_2',
        'sponsor_3',
        'sponsor_4',
        'sponsor_5',
        'sponsor_6',
        'sponsor_7',
        'sponsor_8',
        'sponsor_9',
        'sponsor_10',
        'sponsor_11',
        'sponsor_12',
        'wallet',
        'ref',
        'last_login',
        'alt_dove'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function spon()
    {
        return $this->belongsTo(User::class, 'sponsor');
    }


    public function royalty()
    {
        return coinTotalPurchase($this->id);
    }

    public function downlines()
    {
        return $this->hasMany(User::class, 'sponsor');
    }


    function hybridTotal()
    {
        return pcBalance($this->id);
    }


    function zoneUsdtBalance()
    {
        return zoneUsdtBalance($this->id);
    }


    function zoneHbcBalance()
    {
        return zoneHbcBalance($this->id);
    }

    function myEnergy()
    {
        return myEnergy($this->id);
    }




}
