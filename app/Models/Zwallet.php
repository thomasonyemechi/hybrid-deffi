<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zwallet extends Model
{
    use HasFactory;


    protected $guarded;
    

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    function slot()
    {
        if($this->slot_ref > 0)
        {
            return $this->belongsTo(Zone::class, 'slot_ref');
        }
    }



}
