<?php

namespace App\Http\Controllers;

use App\Models\CoinInfo;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    function makeDeposit(Request $request)
    {

        Validator::make($request->all(), [
            'amount' => 'required|integer|min:2',
        ])->validate();

        //first check for pending transactions.....
        $check = Deposit::where(['user_id' => auth()->user()->id, 'status' => 'pending'])->count();
        // if($check > 0) {
        //     return back()->with('error', 'You have a pending transaction, wait till it is resolved');
        // }
        
        Deposit::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'wallet' => auth()->user()->wallet,
            'status' => 'pending',
        ]);
        ///qeue mail to send to admin and users
        return back()->with('success', 'USDT deposit request has been logged, transfer token to the specified wallet address ');
    }


    function buyPrimeCoin(Request $request)
    {

    }

    function rewardSponsor()
    {
        
    }



    function fetchCoinPriceApi()
    {
        return response(CoinInfo::first());
    }

}
