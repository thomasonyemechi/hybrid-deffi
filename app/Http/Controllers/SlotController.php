<?php

namespace App\Http\Controllers;

use App\Models\MySlot;
use App\Models\PriceChange;
use App\Models\Zone;
use App\Models\Zwallet;
use App\Models\ZEarning;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SlotController extends Controller
{
    function zoneIndex()
    {
        $slots = Zone::get();
        $user = Auth::user();
        $rate = PriceChange::latest()->first()->price;
        $usdt_balance = usdtBalance($user->id);

        return view('users.zone_index', compact(['slots', 'user', 'rate', 'usdt_balance']));
    }

    function zoneIndex2()
    {
        $slots = Zone::get();
        $user = Auth::user();
        $rate = PriceChange::latest()->first()->price;
        $usdt_balance = usdtBalance($user->id);
        $transactions = Zwallet::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->limit(15)->get();

        return view('mobile.zone_index', compact(['slots', 'user', 'rate', 'usdt_balance', 'transactions']));
    }


    function zoneTransactions()
    {
        $transactions = Zwallet::where(['user_id' => auth()->user()->id])->orderby('id', 'desc')->paginate(40); 
        return view('mobile.zone_transactions', compact(['transactions']));
    }
    
    
    function fetchSpilled()
    {
        
        
        
        // $users = User::whereBetween('id', [1000, 1500])->orderby('id', 'asc')->get();
        // $zone_clients = 0;
        
        // $total_error = [];
        
        // foreach($users as $user)
        // {
        //     $usdt_balance = $user->total_usdt_deposit = zoneUsdtDeposit($user->id);
        //     if($usdt_balance > 0)
        //     {
        //         $total_purchase = MySlot::where(['user_id' => $user->id])->sum('amount');
        //         $new_balance = $usdt_balance-$total_purchase;
        //         $last_purchased_slot = MySlot::where(['user_id' => $user->id])->orderby('zone_id', 'desc')->first();
                
        //         if($last_purchased_slot) 
        //         {
        //             $next_slot = $last_purchased_slot->zone_id + 1;
        //         }else {
        //             $next_slot = 1;
        //         }
                
                
        //         if($next_slot <= 11) 
        //         {
        //             $slot = Zone::find($next_slot);
                    
        //             $str = $slot->price.'-------'. $next_slot .'--------'.$user->id;
                           
        //             $check = MySlot::where(['user_id' => $user->id, 'zone_id' => $slot->id])->count();
            
        //             if($check == 0)
        //             {
        //                 if($new_balance > $slot->price)
        //                 {
        //                     $amount = $slot->price;
        //                     // purchase slot here, deduct money and register slot im my slot 
        //                     Zwallet::create([
        //                         'currency' => 'usdt',
        //                         'amount' => -$amount,
        //                         'type' => 1,
        //                         'user_id' => $user->id,
        //                         'remark' => $slot->id.' purchase',
        //                         'slot_ref' => $slot->id,
        //                         'ref_id' => 0,
        //                         'action' => 'debit'
        //                     ]);
                    
        //                     MySlot::create(['user_id' => $user->id, 'zone_id' => $slot->id, 'amount' => $slot->price]);
        //                     // share money here
        //                     shareComission($user, $slot, $slot->price);
        //                       $total_error[] = 'success '.$str;
        //                 }else {
        //                           $total_error[] = 'no money to buy '.$str;
        //                 }
                  
        //             }else{
        //                 $total_error[] = 'already have slot '.$str;
        //             }
                     
        //         }else{
        //               $total_error[] = 'purchased all slot '.$str;
        //         }
              
        //     }
        // }
        
        
        
        // return $total_error;
        
        // return $zone_clients;
        
        
        
        
        
        
        // $wallet = ZWallet::where(['remark' => 'USDT                                        DEPOSIT'])->get() ;
        // foreach($wallet as $wall)
        // {
        //     $wall->update([
        //         'remark' => 'USDT DEPOSIT'    
        //     ]);
        // }
        // return $wallet;
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        // $transactions = Zwallet::where(['remark' => 'spillover'])->orderby('id', 'desc')->get();
        // foreach($transactions as $trno)
        // {
        //     $earn = ZEarning::find($trno->ref_id);
        //     echo $earn->user_id.' ---->'.$trno->user_id.'<br>';
            
        //     $trno->update([
        //         'user_id' => $earn->user_id    
        //     ]);
        // }
        // return $transactions;
    }




    function SetCollectCurrency(Request $request)
    {
        User::where(['id' => auth()->user()->id])->update([
            'zone_collect' => $request->type
        ]);

        return back()->with('success', 'Operation sucessful');
    }


    public function purchaseSlot(Request $request, $zone_id)
    {
        $slot = Zone::find($zone_id); $amount = $slot->price;
        $user = Auth::user();

        // first check if user has enough money to purchase slot

        if(zoneUsdtBalance($user->id) < $slot->price )
        {
            return back()->with('error', 'You don\'t have enough USDT to complete this transaction');
        }
    
        // check if user has bought package before

        $check = MySlot::where(['user_id' => $user->id, 'zone_id' => $slot->id])->count();

        if($check > 0)
        {
            return back()->with('error', 'You already own this slot, purchase another');
        }


        // purchase slot here, deduct money and register slot im my slot 

        Zwallet::create([
            'currency' => 'usdt',
            'amount' => -$amount,
            'type' => 1,
            'user_id' => $user->id,
            'remark' => $slot->id.' purchase',
            'slot_ref' => $slot->id,
            'ref_id' => 0,
            'action' => 'debit'
        ]);

        MySlot::create(['user_id' => $user->id, 'zone_id' => $slot->id, 'amount' => $slot->price]);
        
        // share money here

        shareComission($user, $slot, $slot->price);
        
        return back()->with('success', 'Slot purchase has been completed');
        


        return back()->with('error', 'An error occured while purchasing slot');
    }



 



    /*
        slot purchase rules


        you must have the required amount of usdt
        only 90% of the money is shared 10% goes to the admin except for the first and second slots
        you cannot earn for slots you have not activated losses will be recoreded as missed_commsion

    */
    
    
    
    
        function make_withdrawal(Request $request)
        {
            Validator::make($request->all(), [
                'amount' => 'required|min:10',
                'currency' => 'required'
            ]);
            ///logg withdrwal
            $user = auth()->user();
            if($request->amount > (zoneUsdtBalance($user->id, $request->currency)) ){
                return back()->with('error', 'Insufficient fund');
            }
            
            // debit z wallet 
                
                $wallet = Zwallet::create([
                    'ref_id' => 0,
                    'currency' => $request->currency,
                    'amount' => -$request->amount,
                    'user_id' => $user->id,
                    'remark' => 'withdrawal',
                    'action' => 'debit',
                    'type' => 0, 
                ]);
                
                
        
        
        ///credit coin wallet
            
                Wallet::create([
                    'ref_id' => $wallet->id,
                    'currency' => $request->currency,
                    'amount' => $request->amount,
                    'type' => ($request->currency == 'usdt') ? 1 : 2,
                    'remark' => 'withdrawal from zone wallet',
                    'user_id' => $wallet->user_id,
                    'action' => 'credit'
                ]);
            
            
            return back()->with('success', 'funds have been sucessfully sent to your hybridcoin wallet. Proceed to fund withdrawal page to withdraw');
        }

}
