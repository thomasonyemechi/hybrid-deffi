<?php 


// file contains all methods cast and helper function

use App\Models\Purchase;
use App\Models\Wallet;

function depositStatus($status)
{
    if($status == 'pending') {
        return '<div class="badge bg-secondary" > pending </div>';
    }elseif($status == 'rejected'){
        return '<div class="badge bg-danger" > rejected </div>';
    }elseif($status == 'approved'){
        return '<div class="badge bg-success" > approved </div>';
    }
}


function spcBalance($user_id)
{
    $balance = Wallet::where(['user_id' => $user_id, 'type' => '3' ])->sum('amount');
    return $balance;
}

function coinTotalPurchase($user_id)
{
    $total = Purchase::where(['user_id' => $user_id])->sum('amount');
    return $total;
}


function usdtBalance($user_id) 
{
    $balance = Wallet::where(['user_id' => $user_id, 'type' => '1' ])->sum('amount');
    return $balance;
}

function pcBalance($user_id)
{
    $balance = Wallet::where(['user_id' => $user_id, 'type' => '2' ])->sum('amount');
    return $balance;
}

function depositAmount($amount)
{
    return number_format($amount, 2).' USDT';
}


function dropError()
{
    if (session('success')){
        return '
            <div class="mb-2 val_err ">
                <i class="text-success fw-bold "> '.session('success') .' </i>
            </div>
        ';
    }else if (session('error')) {
    return '
        <div class="mb-2 val_err">
            <i class="text-danger fw-bold "> '. session('error') .' </i>
        </div>
    ';
}
}


function admins()
{
    return [1,4,7];
}