<?php

namespace App\Http\Controllers;

use App\Models\MySlot;
use App\Models\Zone;
use App\Models\Zwallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlotController extends Controller
{
    function zoneIndex()
    {
        $slots = Zone::get();
        $user = Auth::user();
        return view('users.zone_index', compact(['slots', 'user']));
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

        if(shareComission($user, $slot, $slot->price)){
            return back()->with('success', 'Slot purchase has been completed');
        }


        return back()->with('danger', 'An error occured whil purchasing slot');
    }



 



    /*
        slot purchase rules


        you must have the required amount of usdt
        only 90% of the money is shared 10% goes to the admin except for the first and second slots
        you cannot earn for slots you have not activated losses will be recoreded as missed_commsion

    */
}
