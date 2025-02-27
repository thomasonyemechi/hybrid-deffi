<?php 


// file contains all methods cast and helper function

use App\Models\AdminCredit;
use App\Models\CoinInfo;
use App\Models\Earning;
use App\Models\MissedEarning;
use App\Models\MySlot;
use App\Models\PriceChange;
use App\Models\Purchase;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Withdrawal;
use App\Models\ZEarning;
use App\Models\Zwallet;

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


function putwallet($wallet)
{
    return substr($wallet, 0, 6) . '...' . substr($wallet, -6);
}


function pendingWithAlert()
{
    $with = Withdrawal::where(['status' => 'pending'])->count();

    return $with;
}

function spcBalance($user_id)
{
    $balance = Wallet::where(['user_id' => $user_id, 'type' => '3' ])->sum('amount');
    return $balance;
}

function coinTotalPurchase($user_id)
{
    $total = Purchase::where(['user_id' => $user_id])->sum('amount');
    return $total + hbctotalDepost($user_id);
}



function updateCreditRef()
{
    $all = Wallet::where(['type' => 2, 'action' => 'credit'])->get();
    $rate = PriceChange::latest()->first()->price;

    foreach($all as $al) 
    {
        if($al->ref_id == 0) {
            $credit = AdminCredit::where(['user_id' => $al->user_id , 'amount' => $al->amount])->first();
            $al->update([
                'ref_id' => $credit->id
            ]);
        }
    }
}


function hbctotalDepost($user_id)
{
    $all = Wallet::where(['user_id' =>  $user_id, 'type' => 2, 'action' => 'credit'])->get();
    $total = 0;

    foreach($all as $al) 
    {
        $rate = $al->rate;
        if(isset($al->credit)) {
            if($al->credit->rate > 0) {
                       $total += ($al->amount/ $al->credit->rate);
            }
    
        }else {
            $total += 0;
        }
    }
    return $total;
}   


function hybridTotalPurchase()
{
    return ;
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


function byCoinFunc($user_id, $amount)
{
    // buy coin login here 
    $rate = PriceChange::latest()->first()->price;

    ///////log purchase in purchase
    $purchase = Purchase::create([
        'user_id' => $user_id,
        'amount' => $amount,
        'rate' => $rate,
        'currency' => 'hbc'
    ]);

    //debit user USDT beause of purchase
    Wallet::create([
        'currency' => 'usdt',
        'amount' => -$amount,
        'type' => 1,
        'user_id' => $user_id,
        'remark' => 'HybridCoin purchase',
        'ref_id' => $purchase->id,
        'action' => 'debit'
    ]);

    //credit user with coin
    Wallet::create([
        'currency' => 'hbc',
        'amount' => ($amount * $rate) * 0.9,
        'type' => 2,
        'user_id' => $user_id,
        'remark' => 'HybridCoin Deposit',
        'ref_id' => $purchase->id,
        'action' => 'credit'
    ]);

    // i am multiplying by 0.9 because only 90 % of the money will be used to buy coin 10% will be spent of uplines
    // this function below share the 10%;
    shareProfit($user_id, $amount, 'usdt');
    return;
}


function shareProfit($user_id, $amount, $currency='usdt')
{
    $user = User::find($user_id);

    $rate = PriceChange::latest()->first()->price;
    if($currency == 'usdt') {
        $usdt_amount = $amount;
    }else {
        $usdt_amount = $amount / $rate;
    }

    $sponsors = [ ['id' => $user->sponsor ?? 1, 'percent' => 6], ['id' => $user->sponsor_2 ?? 1, 'percent' => 2], ['id' => $user->sponsor_3 ?? 1, 'percent' => 2] ];
    foreach($sponsors as $spon) 
    {   
        $percent = ($usdt_amount * $spon['percent']) / 100; //caluclating percentage
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

    return;
}




// zone level


function slotEarning($slot_id, $user_id, $currency='usdt')
{
    return ZEarning::where(['user_id' => $user_id, 'zone_id' => $slot_id , 'currency' => $currency])->sum('amount');
}

function slotMissedEarning($slot_id, $user_id, $currency='usdt')
{
    return MissedEarning::where(['user_id' => $user_id, 'zone_id' => $slot_id , 'currency' => $currency])->sum('amount');
}


function checkPackage($user_id, $slot_id)
{
    return MySlot::where(['user_id' => $user_id, 'zone_id' => $slot_id])->first();
}


function zoneUsdtBalance($user_id, $currency='usdt')
{
    $balance = Zwallet::where(['user_id' => $user_id, 'currency' => $currency ])->sum('amount');
    return $balance;
}


function zoneUsdtDeposit($user_id)
{
    $deposit = Zwallet::where(['user_id' => $user_id, 'currency' => 'usdt', 'remark' => 'usdt deposit'])->sum('amount');
    $transfer = Zwallet::where(['user_id' => $user_id, 'currency' => 'usdt', 'remark' => 'transfer to zone'])->sum('amount');
    $e_transfer = Zwallet::where(['user_id' => $user_id, 'currency' => 'usdt', 'remark' => 'external transfer to zone'])->sum('amount');
    return $transfer+$deposit+$e_transfer;
}


function zoneEarnings($user_id, $currency='usdt')
{
    return ZEarning::where(['user_id' => $user_id, 'currency' => $currency])->sum('amount');
}

function zoneHbcBalance($user_id)
{
    $balance = Zwallet::where(['user_id' => $user_id, 'currency' => 'hbc' ])->sum('amount');
    return $balance;
}


function directDD($user_id, $slot_id)
{
    $users = User::where(['sponsor' => $user_id])->get(['id']); $count = 0;
    foreach ($users as $user)
    {
        $check = MySlot::where(['user_id' => $user->id, 'zone_id' => $slot_id])->count();
        if($check > 0){ $count += 1; }
    }
    
    return $count;
}


function otherDD($user_id, $slot_id)
{
    $users = User::where(['sponsor' => $user_id])->orwhere(['sponsor_2' => $user_id])->orwhere(['sponsor_3' => $user_id])->orwhere(['sponsor_4' => $user_id])->get(['id']);
    $count = 0;
    foreach ($users as $user)
    {
        $check = MySlot::where(['user_id' => $user->id, 'zone_id' => $slot_id])->count();
        if($check > 0){ $count += 1; }
    }
    
    return $count;
}



function myEnergy($user_id)
{
    return MySlot::where(['user_id' => $user_id])->sum('amount');
}



function pickGen($user, $gen)
{
    $generations = []; 
    for ($i=1; $i <=$gen ; $i++) { 
        if($i ==1) {
            $generations[] = ['gen_1' => $user->sponsor, 'position' => $i, 'user_id'=> $user->sponsor];
        }else {
            $generations[] = ['gen_'.$i => $user['sponsor_'.$i], 'position' => $i, 'user_id'=> $user['sponsor_'.$i]];
        }
    }
    
    return $generations;
}




function checkPayType($user_id, $slot, $upline_percent, $buyer)
{
    $zone_collect = User::find($user_id)->zone_collect;

    if($zone_collect == 'usdt' || $zone_collect == 'hbc') {

        if($zone_collect == 'hbc'){
            $rate = PriceChange::latest()->first()->price;
            $upline_percent = $upline_percent * $rate; ///current rate
        }

        $earn = ZEarning::create([
            'user_id' => $user_id, 
            'zone_id' => $slot->id,
            'downline' => $buyer,
            'remark' => 'spillover',
            'amount' => $upline_percent,
            'currency' => $zone_collect,
        ]);

        $wallet = Zwallet::create([
            'ref_id' => $earn->id,
            'currency' => $zone_collect,
            'amount' => $upline_percent,
            'user_id' => $user_id,
            'remark' => 'spillover',
            'action' => 'credit',
            'slot_ref' => $slot->id,
            'type' => 0, 
        ]);

    }else if($zone_collect == 'both')  {
        // write code for both
        // use current rate to determin half the price

        // first cut money into two 
        $half_amount = $upline_percent / 2;

        // do for usdt 

        $earn = ZEarning::create([
            'user_id' => $user_id, 
            'zone_id' => $slot->id,
            'downline' => $buyer,
            'remark' => 'spillover',
            'amount' => $half_amount,
            'currency' => 'usdt',
        ]);

        $wallet = Zwallet::create([
            'ref_id' => $earn->id,
            'currency' => 'usdt',
            'amount' => $half_amount,
            'user_id' => $user_id,
            'remark' => 'spillover',
            'action' => 'credit',
            'slot_ref' => $slot->id,
            'type' => 0, 
        ]);


        // for hbc


        $rate = PriceChange::latest()->first()->price;
        $upline_percent = $half_amount * $rate; ///current rate


        $earn = ZEarning::create([
            'user_id' => $user_id, 
            'zone_id' => $slot->id,
            'downline' => $buyer,
            'remark' => 'spillover',
            'amount' => $upline_percent,
            'currency' => 'hbc',
        ]);

        $wallet = Zwallet::create([
            'ref_id' => $earn->id,
            'currency' => 'hbc',
            'amount' => $upline_percent,
            'user_id' => $user_id,
            'remark' => 'spillover',
            'action' => 'credit',
            'slot_ref' => $slot->id,
            'type' => 0, 
        ]);
    }

    return 'done';
}


function shareSpillOver($buyer_upline, $amount, $slot, $buyer)
{
 
    $spill_count = explode(',' , $slot->spillover);

    if(count($spill_count) > 1) {
        $users = User::where(['sponsor' => $buyer_upline])->orwhere(['sponsor_2' => $buyer_upline])->orwhere(['sponsor_3' => $buyer_upline])->orwhere(['sponsor_4' => $buyer_upline])->inrandomorder()->limit($spill_count)->get(['id']);

        foreach($spill_count as $index => $spil)
        {
            $upline_percent = ($amount * ($spil / 100));

            $user_id = $users[$index]->id ?? 1;
            $checkslot = checkPackage($user_id, $slot->id);

            if($checkslot) {
                ///credit client and regsiter the package 
                // downline is the person that bought the slot and user_id is the person gettng the reward
                checkPayType($user_id, $slot, $upline_percent, $buyer);
    
            }else {
                ///record missed oportunity
                $missed = MissedEarning::create([
                    'user_id' => $user_id,
                    'zone_id' => $slot->id,
                    'downline' => $buyer,
                    'remark' => 'spillover',
                    'amount' => $upline_percent,
                    'currency' => 'spc',
                ]);
                // credit admin with missed client earning
                $earn = Zwallet::create([
                    'ref_id' => $missed->id,
                    'currency' => 'usdt',
                    'amount' => $upline_percent,
                    'user_id' => 1,
                    'remark' => 'spillover missed earning',
                    'action' => 'credit',
                    'slot_ref' => $slot->id,
                    'type' => 0,
                ]);
            }
        }
    }
    return;
}





function shareComission($user, $slot, $main_amount) {

    $gens = pickGen($user, $slot->gens);



    $amount = $main_amount;
    // if($slot->id > 1) {
        // $amount = ($main_amount * 0.9);
        $amount = $main_amount;
    // }
    
    $percents = explode(',', $slot->percent);


    foreach($percents as $index => $per)
    {
        if($per) {
            @$pos = isset($gens[$index]) ? $gens[$index] : 1; 
            @$user_id = $pos['user_id'];
            $upline_percent = ($amount * ($per / 100));

            $checkslot = checkPackage($user_id, $slot->id);

            if($checkslot) {
                // credit client and regsiter the package 
                // downline is the person that bought the slot and user_id is the person gettng the reward
       
                // $user->id ----- the person who bought the zone
                // user_id -----  the upline of the person who bought the zone

                // check for payment type and pay according to zoen collect function 
                /*
                    100 % usdt 
                    100 % HBC 
                    50 % usdt and 50% Hbc
                */ 
                checkPayType($user_id, $slot, $upline_percent, $user->id);
    
    
            }else {
                ///record missed oportunity
                $missed = MissedEarning::create([
                    'user_id' => $user_id,
                    'zone_id' => $slot->id,
                    'downline' => $user->id,
                    'amount' => $upline_percent,
                    'currency' => 'spc',
                ]);
                // credit admin with missed client earning
                $earn = Zwallet::create([
                    'ref_id' => $missed->id,
                    'currency' => 'usdt',
                    'amount' => $upline_percent,
                    'user_id' => 1,
                    'remark' => 'missed earning',
                    'action' => 'credit',
                    'slot_ref' => $slot->id,
                    'type' => 0,
                ]);
            }
        }
    }

    if($slot->spillover)
    {
        // echo '3423';
        shareSpillOver($gens[0]['user_id'], $amount, $slot, $user->id);
    }
    
    // gives 10% of the price to the admin
    if($slot->id > 1) {
        $earn = Zwallet::create([
            'ref_id' => 0,
            'currency' => 'usdt',
            'amount' => $main_amount * 0.1,
            'user_id' => 1,
            'remark' => 'admin commision',
            'action' => 'credit',
            'type' => 0,
        ]);
    }


    return;
}



function formatDate($date)
{
    return date('j M Y , h:i: a', strtotime($date));
}

