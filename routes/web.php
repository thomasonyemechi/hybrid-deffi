<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ZoneController;
use App\Models\Zone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/access', 'login')->name('login');
Route::view('/launch', 'signup');
Route::get('/login', function(){
    return redirect('/access');
});



Route::get('/pick_gen', function(){
    $user = auth()->user(); 
    $slot = Zone::find(3); 
    return shareSpillOver(1, $slot->price, $slot, 2);
});


Route::get('/signup', function(){
    return redirect('/launch');
});
Route::view('/404', 'errors.notfound');

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/create-account', [AuthController::class, 'createAccount'])->name('create-account');
Route::post('/access-account', [AuthController::class, 'userLogin'])->name('access-account');
Route::post('/change_email', [AuthController::class, 'changeEmail'])->middleware('auth');
Route::view('/email', 'users.change_email');

Route::get('/validate_wallet', [WalletController::class, 'validateWallet']);

Route::get('/get_price', [TransactionController::class, 'fetchCoinPriceApi']);
Route::get('/dorate', [AdminController::class, 'dorate']);
Route::view('/prime/info', 'info' );

Route::view('/name', 'main' );


Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('password.request');


Route::get('/count_down', function () {
    return view('users.count_down');
});


Route::post('/forgot-password', [AuthController::class, 'forgotPassword'] )->name('password.email');

Route::get('/get_user', [AuthController::class, 'get_user']);
Route::get('/ren_has', [UserController::class, 'updateRef']);



Route::get('/wallet', [UserController::class, 'walletSettingIndex'])->middleware('auth');
Route::post('/wallet_update', [UserController::class, 'updateWallet'])->middleware('auth');

Route::group(['middleware' => ['auth', 'wallet']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::view('/copy', 'users.copy');
    Route::get('/dashboard', [UserController::class, 'indexU']);
    Route::get('/how-to-earn', [UserController::class, 'howToIndex']);
    Route::get('/info/zone', [UserController::class, 'zoneInfo']);
    Route::get('/deposit', [UserController::class, 'depositIndex'])->middleware('wallet');


    Route::get('/withdrawal', [UserController::class, 'withdrwal']);
    Route::post('/update_collect_currency', [UserController::class, 'update_collect_currency']);
    Route::post('/withdrawal', [UserController::class, 'make_withdrawal']);
    Route::post('/transfer', [UserController::class, 'transfer'])->name('transfer');
    Route::post('/transfer_tozone', [UserController::class, 'transfer_tozone'])->name('transfer_tozone');


    Route::get('/transfer', [UserController::class, 'transferIndex']);
    Route::get('/received', [UserController::class, 'rIndex']);
    Route::get('/earnings', [UserController::class, 'earningsIndex']);
    Route::get('/invite', [UserController::class, 'inviteIndex']);
    Route::get('/convert', [UserController::class, 'convertIndex']); //
    Route::get('/trade', [UserController::class, 'tradeIndex']); //
    Route::post('/trade_spc', [UserController::class, 'tradeSpc'])->name('trade_spc'); //
    Route::post('/buy_primecoin', [UserController::class, 'buyPrimeCoin'])->name('buy_hybridcoin');


    Route::view('/change_password', 'users.change_password'); //
    Route::post('/change_password', [AuthController::class, 'changePassword']); //


    
    Route::group(['prefix' => 'zone/' ], function () {
        Route::get('/landing', [SlotController::class, 'zoneIndex']);
        Route::post('/landing', [SlotController::class, 'zoneIndex']);
        Route::get('/purchase_slot/{id}', [SlotController::class, 'purchaseSlot']);
        Route::post('/set_cur', [SlotController::class, 'SetCollectCurrency']);
    });


    Route::post('/make_deposit', [TransactionController::class, 'makeDeposit'])->name('make_deposit');    
});



Route::group(['prefix' => 'admin/', 'as' => 'admin.' ,'middleware' => ['auth','admin']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);  set_price
    Route::get('/dashboard',[AdminController::class, 'adminIndex']);
    Route::view('/deposit/pending', 'admin.all_users');
    Route::view('/manage_deposit', 'admin.manage_deposit');
    Route::get('/credit/royalty', [AdminController::class, 'creditroyaltyIndex']);
    Route::get('/credit', [AdminController::class, 'credit']);
    Route::post('/credit', [AdminController::class, 'creditUser']);
    Route::post('/debit', [AdminController::class, 'debitUser']);
    Route::get('/debit', [AdminController::class, 'debit']);
    Route::get('/users', [AdminController::class, 'usersIndex']);
    Route::get('/users/royalty', [AdminController::class, 'royalusersIndex']);

    Route::get('/set_price', [SettingsController::class, 'setPriceIndex']);
    Route::post('/set_price', [SettingsController::class, 'updateCoinPrice']);
    Route::post('/set_wallet', [SettingsController::class, 'setReceivingWalletAddress']);


    Route::group(['prefix' => 'deposit/' ], function () {
        Route::get('/pending', [AdminController::class, 'managePendingDepositIndex']);
        Route::post('/reject_deposit', [AdminController::class, 'rejectDeposit']);
        Route::post('/approve_deposit', [AdminController::class, 'approveDeposit']);
        Route::get('/history', [AdminController::class, 'depositHistoryIndex']);
        Route::get('/approved', [AdminController::class, 'approvedDepositIndex']);
        Route::get('/rejected', [AdminController::class, 'rejectedDepositIndex']);
    });



    Route::get('/credit', [AdminController::class, 'credit']);
    Route::post('/credit', [AdminController::class, 'creditUser']);



    Route::get('/announcement', [AdminController::class, 'announcementIndex']);
    Route::post('/announcement', [AdminController::class, 'createAccouncement']);
    Route::get('/delete-announcement/{id}', [AdminController::class, 'deleteAnnouncement']);



    Route::get('/manage-wallet', [WalletController::class, 'walletIndex']);
    Route::post('/add-wallet', [WalletController::class, 'createWallet']);
    Route::get('/delete-wallet/{wallet_id}', [WalletController::class, 'deleteAddres']);

    Route::group(['prefix' => 'withdrawal/' ], function () {
        Route::get('/pending', [AdminController::class, 'withdrawPendingIndex']);
        Route::get('/history', [AdminController::class, 'withdrawHistoryIndex']);
        Route::post('/approve_withdrawal', [AdminController::class, 'approveWithdrawal']); //approve_withdrawal
        Route::post('/reject_withdrawal', [AdminController::class, 'rejectWithdrawal']); //approve_withdrawal
    });


    Route::get('/zone', [ZoneController::class, 'zoneOverviewIndex']);
    Route::get('/zone/transactions', [ZoneController::class, 'zoneTransactionIndex']);
    Route::get('/slot_info', [ZoneController::class, 'slot_infoIndex']);
    Route::get('/slot/{id}', [ZoneController::class, 'slotIndex']);
    Route::get('/slot_owners/{id}', [ZoneController::class, 'ownersIndex']);
    Route::get('/slot_earnings/{id}', [ZoneController::class, 'earningIndex']);
    Route::get('/slot_missed_earnings/{id}', [ZoneController::class, 'missedEarningIndex']);
    Route::get('/credit_zone', [ZoneController::class, 'creditZoneIndex']);
    Route::post('/credit_zone_client', [ZoneController::class, 'creditZoneUser']);

});
