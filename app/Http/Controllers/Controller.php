<?php

namespace App\Http\Controllers;

use App\Models\CoinInfo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function coin_current_price() 
    {
        return CoinInfo::first()->price;
    }
}
