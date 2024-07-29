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
        'wallet',
        'ref'
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



}
