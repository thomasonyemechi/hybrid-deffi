<?php

namespace App\Http\Controllers;

use App\Models\MissedEarning;
use App\Models\MySlot;
use App\Models\User;
use App\Models\ZEarning;
use App\Models\Zone;
use App\Models\ZoneDeposit;
use App\Models\Zwallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
{
    function slot_infoIndex()

    {
        $slots = Zone::get();
        return view('admin.slot_info', compact(['slots']));
    }


    function slotIndex($id)
    {
        $slot = Zone::find($id);
        $slot_transactions = Zwallet::where(['slot_ref' => $id])->orderby('id', 'desc')->limit(20)->get();

        $total_purchase = MySlot::where(['zone_id' => $slot->id])->sum('amount');
        $clients = MySlot::where(['zone_id' => $slot->id])->count();
        $earnings = ZEarning::where(['zone_id' => $slot->id])->sum('amount');
        $missed_earnings = MissedEarning::where(['zone_id' => $slot->id])->sum('amount');

        return view('admin.slot', compact(['slot', 'slot_transactions', 'total_purchase', 'clients', 'missed_earnings', 'earnings']));
    }   


    function zoneOverviewIndex()
    {
        $slot_transactions = Zwallet::orderby('id', 'desc')->limit(20)->get();

        $total_purchase = MySlot::sum('amount'); //energy
        $clients = MySlot::get(['user_id']);
        $arr = [];
        foreach($clients as $c) { $arr[] =  $c->user_id; }
        $clients = count(array_unique($arr));
        $earnings = ZEarning::sum('amount');
        $missed_earnings = MissedEarning::sum('amount');

        $total_usdt = Zwallet::where(['currency' => 'usdt'])->sum('amount');
        $total_hbc = Zwallet::where(['currency' => 'hbc'])->sum('amount');

        return view('admin.zone_overview', compact(['slot_transactions', 'total_purchase', 'clients', 'missed_earnings', 'earnings', 'total_hbc', 'total_usdt']));
    }



    function zoneTransactionIndex()
    {
        $slot_transactions = Zwallet::orderby('id', 'desc')->paginate(30);
        return view('admin.zone_transactions', compact(['slot_transactions']));
    }





    function ownersIndex($slot)
    {
        $clients = MySlot::with(['user'])->where(['zone_id' => $slot])->paginate(50);
        $slot = Zone::find($slot);

        return view('admin.slot_owners', compact(['clients', 'slot']));
    }


    function earningIndex($slot)
    {
        $earnings = ZEarning::with(['user'])->where(['zone_id' => $slot])->paginate(50);
        $slot = Zone::find($slot);
        return view('admin.slot_earnings', compact(['earnings', 'slot']));
    }


    function missedEarningIndex($slot)
    {
        $earnings = MissedEarning::with(['user'])->where(['zone_id' => $slot])->paginate(50);
        $slot = Zone::find($slot);
        return view('admin.slot_missed_earnings', compact(['earnings', 'slot']));
    }


    function creditZoneIndex()
    {
        $credits = ZoneDeposit::with(['user'])->paginate(30);
        return view('admin.credit_zone', compact(['credits']));
    }

    function editZoneInfo(Request $request)
    {
        Validator::make($request->all(), [
            'color' => 'string',
        ])->validate();
    }
    
    
    function creditZoneUser(Request $request)
    {
        Validator::make($request->all(), [
            'wallet_address' => 'required|string|exists:users,wallet',
            'amount' => 'required',
            'access_pin' => 'required|string'
        ])->validate();


        
        if (!password_verify($request->access_pin, auth()->user()->password)) {
            return back()->with('error', 'You entered a wrong password');
        }

        $user = User::where(['wallet' => $request->wallet_address])->first();
        if (!$user) {
            abort(404);
        }


        $credit = ZoneDeposit::create([
            'amount' => $request->amount,
            'user_id' => $user->id,
            'currency' => $request->currency,
            'remark' => $request->remark ?? 'Deposit',
            'by' => auth()->user()->id
        ]);

        $wallet = Zwallet::create([
            'ref_id' => $credit->id,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'user_id' => $user->id,
            'remark' => $request->remark ?? 'Deposit',
            'action' => 'credit',
            'type' => 0, 
        ]);

        // auto purchase
        

        return back()->with('success', 'Wallet has been sucessfuly credited');
    }



}
