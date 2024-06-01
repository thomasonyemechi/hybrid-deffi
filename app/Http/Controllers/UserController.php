<?php

namespace App\Http\Controllers;

use App\Models\AdminCredit;
use App\Models\Announcment;
use App\Models\CoinInfo;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\PriceChange;
use App\Models\Purchase;
use App\Models\Trade;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletAddress;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


use function Symfony\Component\String\b;

class UserController extends Controller
{
    public function howToIndex()
    {
        return view('users.how_to');
    }


    public function depositIndex()
    {
        $deposits = AdminCredit::where(['user_id' => auth()->user()->id, 'remark' => 'usdt deposit'])->orderby('id', 'desc')->paginate(10);
        $coin = CoinInfo::first();
        return view('users.deposit', compact(['deposits', 'coin']));
    }

    function indexU()
    {
        $user_id = auth()->user()->id;
        $pc_balance = pcBalance($user_id);

        $rate = PriceChange::latest()->first()->price;
        $pc_total =  $pc_balance / $rate;

        $usdt_balance = usdtBalance($user_id);

        $spc_balance = spcBalance($user_id);

        $total = $pc_total + $usdt_balance + $spc_balance;

        $announcement = Announcment::get();


        $transactions = Wallet::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->limit(10)->get();
        return view('users.index', compact(['transactions', 'pc_balance', 'user_id', 'rate', 'pc_total', 'total', 'usdt_balance', 'spc_balance', 'announcement']));
    }

    function convertIndex()
    {
        $user_id = auth()->user()->id;
        $usdt_balance = usdtBalance($user_id);
        $rate = PriceChange::latest()->first()->price;

        $purchases = Purchase::where(['user_id' => $user_id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.convert', compact(['usdt_balance', 'user_id', 'rate', 'purchases']));
    }

    function tradeIndex()
    {
        $user_id = auth()->user()->id;
        $spc_balance = spcBalance($user_id);

        $trades = Trade::where(['user_id' => $user_id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.trade', compact(['spc_balance', 'user_id', 'trades']));
    }

    function walletSettingIndex()
    {
        $wallets = WalletAddress::where(['user_id' => auth()->user()->id])->orderBy('id', 'desc')->get();
        return view('users.walletsettings', compact('wallets'));
    }


    function withdrwal()
    {
        $usdt_balance = usdtBalance(auth()->user()->id);
        $withdrawals = Withdrawal::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->limit(25)->get();
        return view('users.withdrwal', compact(['usdt_balance', 'withdrawals']));
    }


    function transferIndex()
    {
        $user_id = auth()->user()->id;
        $usdt_balance = usdtBalance($user_id);
        $transfers = Transfer::with(['receiver:id,username,wallet'])->where(['sender_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.transfer', compact(['transfers', 'usdt_balance']));
    }

    function rIndex()
    {
        $user_id = auth()->user()->id;
        $received = Transfer::with(['sender:id,username,wallet'])->where(['receiver_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.received', compact(['received']));
    }

    function earningsIndex()
    {
        $user_id = auth()->user()->id;
        $earnings = Earning::with(['downliner:id,username'])->where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->get();
        return view('users.earnings', compact(['earnings']));
    }

    function inviteIndex()
    {
        $user_id = auth()->user()->id;
        $direct_downlines = User::where(['sponsor' => $user_id])->orwhere(['sponsor_2' => $user_id])->orwhere(['sponsor_2' => $user_id])->orderby('id', 'desc')->get();
        // $indirect_downlines = User::where(['sponsor_2' => $user_id])->orwhere(['sponsor_2' => $user_id])->orderby('id', 'desc')->get();
        return view('users.invite', compact(['direct_downlines']));
    }

    function transfer(Request $request)
    {
        $val = Validator::make($request->all(), [
            'amount' => 'required|integer|min:10',
            'access_pin' => 'required|string'
        ])->validate();

        if(!password_verify($request->access_pin, auth()->user()->password)) {
            return back()->with('error', 'Invalid access pin');
        }

        if ($request->amount > usdtBalance(auth()->user()->id)) {
            return back()->with('error', 'You do not have up to this amount of USDT in your wallet, fund your wallet and try again ');
        }

        $tran = Transfer::create([
            'sender_id' => auth()->user()->id,
            'receiver_id' => $request->user_id,
            'amount' => $request->amount,
            'status' => 'successful'
        ]);

        ///debit sender
        Wallet::create([
            'currency' => 'usdt',
            'amount' => -$request->amount,
            'type' => 1,
            'user_id' => auth()->user()->id,
            'remark' => 'USDT Transfer',
            'ref_id' => $tran->id,
            'action' => 'debit'
        ]);

        ///credit receiver
        Wallet::create([
            'currency' => 'usdt',
            'amount' => $request->amount,
            'type' => 1,
            'user_id' => $request->user_id,
            'remark' => 'Received Fund',
            'ref_id' => $tran->id,
            'action' => 'credit'
        ]);
        return back()->with('success', 'Funds have been transfered!');
    }


    function updateWallet(Request $request)
    {
        $val = Validator::make($request->all(), [
            'wallet_address' => 'required|string|unique:users,wallet',
            'access_pin' => 'required|integer|min:6'
        ])->validate();

        if($request->confirm_access_pin != $request->access_pin){
            return back()->with('error', 'Access pin does not match');
        }

        if (strtolower(substr($request->wallet_address, 0, 1)) != 't' || strlen($request->wallet_address) < 20) {
            return back()->with('error', 'Please enter a valid TRX wallet address');
        }

        // if (!password_verify($request->access_pin, auth()->user()->password)) {
        //     return back()->with('error', 'You entered a wrong password');
        // }

        $wal = WalletAddress::create([
            'user_id' => auth()->user()->id,
            'wallet_address' => $request->wallet_address
        ]);

        User::where('id', auth()->user()->id)->update([
            'wallet' => $wal->wallet_address,
            'password' => Hash::make($request->access_pin),
        ]);

        return redirect('/dashboard')->with('success', 'You wallet address has been updated');
    }


    function buyPrimeCoin(Request $request)
    {
        $val = Validator::make($request->all(), [
            'usdt_amount' => 'required|integer|min:5'
        ])->validate();


        if ($request->usdt_amount > usdtBalance(auth()->user()->id)) {
            return back()->with('error', 'You don have up to this ammount of USDT in your wallet, fund your wallet and try again ');
        }

        

        $rate = $this->coin_current_price();

        ///////log purchase in purchase
        $purchase = Purchase::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->usdt_amount,
            'rate' => $rate,
            'currency' => 'hbc'
        ]);

        //debit user USDT beause of purchase
        Wallet::create([
            'currency' => 'usdt',
            'amount' => -$request->usdt_amount,
            'type' => 1,
            'user_id' => auth()->user()->id,
            'remark' => 'HybridCoin purchase',
            'ref_id' => $purchase->id,
            'action' => 'debit'
        ]);

        //credit user PC
        Wallet::create([
            'currency' => 'hbc',
            'amount' => ($request->usdt_amount * $rate) * 0.9,
            'type' => 2,
            'user_id' => auth()->user()->id,
            'remark' => 'HybridCoin Deposit',
            'ref_id' => $purchase->id,
            'action' => 'credit'
        ]);


        $sponsors = [ ['id' => auth()->user()->sponsor ?? 1, 'percent' => 6], ['id' => auth()->user()->sponsor_2 ?? 1, 'percent' => 2], ['id' => auth()->user()->sponsor_3 ?? 1, 'percent' => 2] ];
    
        foreach($sponsors as $spon) 
        {   

            $percent = ($request->usdt_amount * $spon['percent']) / 100; //caluclating percentage

            // log earnings 
            $earned = Earning::create([
                'user_id' => $spon['id'],
                'amount' => $percent,
                'downline' => auth()->user()->id
            ]);

            Wallet::create([
                'currency' => 'shc',
                'amount' => $percent,
                'type' => 3,
                'user_id' => $spon['id'],
                'remark' => 'Earning',
                'ref_id' => $earned->id,
                'action' => 'credit'
            ]);
        }
        return redirect('/dashboard')->with('success', 'Coin purchase was successful');
    }


    public function tradeSpc(Request $request)
    {
        $val = Validator::make($request->all(), [
            'amount' => 'integer|required'
        ])->validate();

        $user_id = auth()->user()->id;
        if($request->amount > spcBalance($user_id)) 
        {
            return back()->with('error', 'Insuffcient SHC balance');
        }

        /////////log trade
        $trade = Trade::create([
            'user_id' => $user_id,
            'amount' => $request->amount,
        ]);

        /////// remove spc from wallet        
        Wallet::create([
            'currency' => 'shc',
            'amount' => -$request->amount,
            'type' => 3,
            'user_id' => $user_id,
            'remark' => 'Trade',
            'ref_id' => $trade->id,
            'action' => 'debit'
        ]);

        //credit user with usdt
        Wallet::create([
            'currency' => 'usdt',
            'amount' => $request->amount,
            'type' => 1,
            'user_id' => $user_id,
            'remark' => 'shc converted',
            'ref_id' => $trade->id,
            'action' => 'debit'
        ]);

        return back()->with('success', 'SHC trade has been made');
    }


    function make_withdrawal(Request $request)
    {
        Validator::make($request->all(), [
            'amount' => 'required|min:20'
        ]);
        ///logg withdrwal
        if($request->amount > (usdtBalance(auth()->user()->id)-1) ){
            return back()->with('error', 'Insufficient fund');
        }
        $with = Withdrawal::create([
            'amount' => $request->amount,
            'status' => 'pending', 
            'user_id' => auth()->user()->id,
            'wallet_address' => auth()->user()->wallet,
        ]);
        return back()->with('success', 'Your withdrawal request has been logged, and would be reviewed');
    }


    function updateRef()
    {
        $users = User::get();

        foreach($users as $user)
        {
            $user->update([
                'ref' => sha1($user->id)
            ]);
        }

        return 'done';
    }
}
