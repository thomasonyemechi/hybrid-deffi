@extends('layout.main')

@section('page_content')
    <style>
        .action-btn {
            border-radius: 20px;
            border: 2px dotted;
        }


        .package_card:hover {
            box-shadow: 8px 8px 8px white;
            border: 2px solid white !important;
            transform: scale(1.01);
        }
    </style>



    <style>
        a {
            text-decoration: none;
            color: #371894;
        }


        .countdown {
            width: 720px;
            margin: 0 auto;
        }

        .countdown .bloc-time {
            float: left;
            margin-right: 45px;
            text-align: center;
        }

        .countdown .bloc-time:last-child {
            margin-right: 0;
        }

        .countdown .count-title {
            display: block;
            margin-bottom: 15px;
            font: normal 0.94em "Lato";
            color: #f1f5f6;
            text-transform: uppercase;
        }

        .countdown_figure {

            border-radius: 8px;
            margin: auto;
            font: normal 30px "Lato";
            font-weight: 700;
            color: #1b4799;
        }
    </style>



    @php
        $last_pack = \App\Models\MySlot::where(['user_id' => $user->id])
            ->orderby('id', 'desc')
            ->first();
        $next_pack = ($last_pack->zone_id ?? 0) + 1;

        function pickNewWallet()
        {
            $arr = [
                'TKRPeuUATPiKUGFCzQ6Qyd5LPNdL8Z7FRQ',
                'TKWewD2XkHEgUggJWHv8E9rAGp8zz8rs9e',
                'TMm2wUhHxFBhJP4sdon3H7WFeeHTTfegHV',
                'TU6QHNaro3rQGZDo4SMo9Wxn3d6MyFzVPK',
            ];
            return $arr[rand(0, count($arr) - 1)];
        }
    @endphp

    <div class=" pb-0">
        <div class="row">

            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-body mb-0">

                        <span>Zone Wallet </span>
                        <h2>{{ number_format($user->zoneUsdtBalance(), 2) }} USDT </h2>


                        <div class="d-flex justify-content-between ">
                            <div>
                                <i class="fe fe-send"></i>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col-lg-3">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/01.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a href="#"
                                                        class="text-white">USDT </a> <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fw-bold">$
                                                    {{ number_format($user->zoneUsdtBalance(), 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/00.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">Hybrid <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1 / $rate, 4) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">
                                                    {{ number_format($user->zoneHbcBalance(), 3) }} HBC <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format($user->zoneHbcBalance() / $rate, 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/01.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                        href="javascript:;" class="text-white">Earnings </a> <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fw-bold">$
                                                    {{ number_format(zoneEarnings($user->id), 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/energy.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                        href="javascript:;" class="text-white">Energy </a> <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fw-bold">$
                                                    {{ number_format($user->myEnergy(), 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card " style="box-shadow: 1px 1px #fc0;">
                    <div class="card-body mb-0">

                        <h4 class="fw-bold small mb-3">Quick Actions</h4>

                        <div class="d-flex  justify-content-start pb-2 " style="overflow-x: scroll;">

                            <div>
                                <i class="fe fe-send"></i>
                            </div>


                            <button class="btn btn-outline-primary depositModal me-2 text-white action-btn text-center">Fund
                                <br> Wallet</button>
                            <a href="/transfer" class="btn btn-outline-secondary  me-2 action-btn " data-bs-toggle="modal"
                                data-bs-target="#depositModalToZone"> Transfer <br>
                                USDT</a>
                            <a href="/zone/transactions" class="btn btn-outline-info me-2 action-btn ">View <br>
                                Transactions</a>
                            <button class="btn btn-dark me-2 action-btn ">Check <br> Downlines</button>
                            <button class="btn btn-outline-warning me-2 set_cur action-btn ">Control <br> Earnings</button>
                            <button class="btn btn-outline-danger me-2 withdrawal_fund action-btn ">Internal
                                <br>Transfer</button>

                        </div>




                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body mb-0">
                        <h4 class="fw-bold mb-3">Purchase Hybrid Zone</h4>


                        <div class="row">
                            @foreach ($slots as $slot)
                                @php
                                    $pack = checkPackage($user->id, $slot->id);
                                @endphp


                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="card shadow-lg package_card "
                                        style="border: 1px solid {{ $slot->color }}; ">
                                        <div class="card-body">
                                            <div class="d-flex  pb-2 justify-content-between">
                                                <div>
                                                    <span class="badge py-1"
                                                        style=" background-color: {{ $slot->color }}; font-size: 17px; border-radius: 17px">Zone
                                                        {{ $slot->id }}</span>
                                                </div>
                                                <div>
                                                    <h2 style="visibility: visible;">
                                                        {{ number_format($pack->amount ?? $slot->price) }} USDT
                                                    </h2>
                                                </div>
                                            </div>


                                            <div class="my-4">


                                                @if ($pack)
                                                    <div class="text-center text-success " style=" cursor: pointer; "
                                                        title="Activate slot now to earn from downline transactions">
                                                        <i class="fe fe-check-circle" style="font-size: 60px"></i>

                                                        <h3 class="fw-bold text-success  mt-3" style="font-size: 25px; ">
                                                            Earned: $

                                                            {{-- {{  App\Models\ZEarning::where(['user_id' => $user->id, 'zone_id' => $slot->id , 'currency' => 'usdt'])->sum('amount') }} --}}
                                                            {{ slotEarning($slot->id, $user->id, 'usdt') }}
                                                        </h3>
                                                    </div>
                                                @else
                                                    {{--  {{ $next_pack == $slot->id ? 'activate_slot' : 'error_slot' }}  --}}
                                                    <div class="text-center text-danger {{ $next_pack == $slot->id ? 'activate_slot' : 'error_slot' }} "
                                                        data-id="{{ $slot->id }}" style=" cursor: pointer; "
                                                        title="Activate slot now to earn from downline transactions">
                                                        <i class="fe fe-shopping-cart" style="font-size: 60px"></i>

                                                        <h3 class="fw-bold text-danger  mt-3" style="font-size: 25px; ">
                                                            Activate Zone</h3>
                                                    </div>
                                                @endif

                                            </div>

                                            <div class="d-flex pt-3 justify-content-between">
                                                <span class="fw-bold  rounded text-white px-3 py-1  "
                                                    style=" text-transform: uppercase;">
                                                    {{ $slot->name }} Zone
                                                </span>


                                                @if ($slot->type == 'straight')
                                                    <span class="fw-bold  rounded text-white px-3 py-1  "
                                                        style=" text-transform: uppercase;">
                                                        <i class="fe fe-user"></i>
                                                        {{ directDD($user->id, $slot->id) }}
                                                    </span>
                                                @else
                                                    <span class="fw-bold  rounded text-white px-3 py-1  "
                                                        style=" text-transform: uppercase;">
                                                        <i class="fe fe-users"></i>
                                                        {{ otherDD($user->id, $slot->id) }}
                                                    </span>
                                                @endif




                                                @if ($pack)
                                                    <div class="fw-bold">
                                                        {{ number_format(slotEarning($slot->id, $user->id, 'hbc')) }} HBC
                                                    </div>
                                                @else
                                                    <span class="fw-bold text-warning"
                                                        title="Cummulative missed earnings"> <i
                                                            class="fe fe-alert-octagon"></i>
                                                        $
                                                        {{ number_format(slotMissedEarning($slot->id, $user->id)) }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>




                {{-- 
                <div class="card border-bottom border-1 border-warning ">
                    <div class="card-body">
                        <span class="fw-bold mb-3">TEAM SIZE </span>

                        <div class="row">
                            @php
                                $total_team = 0;
                            @endphp
                            @for ($i = 1; $i <= 6; $i++)
                                <div class="col-12  col-md-4 ">
                                    <div class="card shadow-lg ">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">Team {{ $i }}
                                                        </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">

                                                        @php
                                                            if ($i == 1) {
                                                                $col = 'sponsor';
                                                            } else {
                                                                $col = 'sponsor_' . $i;
                                                            }

                                                            $count = App\Models\User::where([
                                                                $col => $user->id,
                                                            ])->count();
                                                            $total_team += $count;
                                                        @endphp
                                                        {{ $count }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>

                        <div class="badge bg-success">
                            <span class="fw-bold">Total Team:</span> {{ $total_team }}
                        </div>


                    </div>
                </div> --}}



            </div>
        </div>
    </div>




    <div id="depositModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="depositModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="d-flex justify-content-between mb-3 ">
                        <h5 class="modal-title">Deposit USDT</h5>
                        <button type="button" class="btn-close fw-bold btn-sm p-1"
                            style="border-radius: 20px; border: 1px solid white" data-bs-dismiss="modal"
                            aria-label="Close">
                        </button>
                    </div>



                    <div class="alert alert-warning shadow d-flex align-items-center" role="alert">
                        <div>
                            <p>
                                Send TRX (TRC20) tokens from the wallet you
                                registered with to the address below and our
                                system will automatically convert to USDT



                            </p>


                            <div class="wallet_area">

                                <div class="wallet_loader mb-3">
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i
                                        class="">Loading Deposit Wallet
                                        Address ... </i>
                                </div>
                                <div class="wallet_copy">

                                </div>
                            </div>


                            <p>

                                The above deposit address is been changed from
                                time to time to ensure an efficient
                                infrastructure and fund security for users.
                                Please always check before sending TRX.</p>

                        </div>
                    </div>



                    <div class="card mt-3 shadow-lg">

                        <div class="card-body">
                            <h4 class="fw-bold mb-3 small">Zone Deposit History
                            </h4>
                            <div class="table-responsive">
                                <table class="table  ">
                                    <thead>
                                        <tr>
                                            <td>Wallet</td>
                                            <td>Amount</td>
                                            <td>Remark</td>
                                            <td class="text-end">Date</td>
                                        </tr>
                                    </thead>



                                    @foreach (\App\Models\ZoneDeposit::where(['user_id' => $user->id])->get() as $trno)
                                        <tr>
                                            <td>
                                                <span class="title fw-bold">
                                                    {{ substr($user->wallet, 0, 6) . '...' . substr($user->wallet, -6) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-success">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42">
                                                        </path>
                                                    </svg>
                                                    {{ number_format($trno->amount, 2) }}
                                                    {{ $trno->currency }}

                                                </span>
                                            </td>
                                            <td> {{ $trno->remark }} </td>
                                            <td class="text-end">
                                                {{ $trno->created_at }} </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="q_order" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Confirm Purchase
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    USDT will be deducted from your Hybridzone wallet to purchase slot.
                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-primary">Deny</button>
                    <a href="" class="btn do_dd btn-primary">Allow</a>
                </div>

            </div>

        </div>
    </div>


    <div class="modal fade" id="set_cur" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Control Earnings
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card shadow-lg ">
                        <div class="card-body ">
                            <div class="alert alert-solid alert-warning d-flex align-items-center" role="alert">
                                <div>
                                    <b>Note:</b> Choose how you want your hybrid zone earnings to be
                                    paid
                                </div>
                            </div>

                            <form action="/zone/set_cur" method="post">
                                @csrf
                                @php
                                    $col = auth()->user()->zone_collect;
                                @endphp
                                <div class="alert alert-info">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="type"
                                                {{ $col == 'usdt' ? 'checked' : '' }} value="usdt">
                                            100 % USDT earning
                                        </label>
                                    </div>
                                </div>

                                <div class="alert alert-info">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="type"
                                                {{ $col == 'hbc' ? 'checked' : '' }} value="hbc">
                                            100 % Hybrid Coin
                                        </label>
                                    </div>
                                </div>



                                <!--<div class="alert alert-info">-->
                                <!--    <div class="form-check">-->
                                <!--        <label class="form-check-label">-->
                                <!--            <input class="form-check-input" type="radio" name="type"-->
                                <!--                {{ $col == 'both' ? 'checked' : '' }} value="both">-->
                                <!--            50% HBC, 50% usdt-->
                                <!--        </label>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="d-flex justify-content-end ">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="modal fade" id="order_erorr" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Purchase Error</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="alert alert-warning">
                        Slot cannot be activated, you need to activate previous slots before you can
                        activate a higher slot
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary " data-bs-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>






    <div class="modal fade" id="order_erorr" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Purchase Error</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="alert alert-warning">
                        Slot cannot be activated, you need to activate previous slots before you can
                        activate a higher slot
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary " data-bs-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>





    <div class="modal fade" id="withdrawal_fund" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Pour Funds</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="alert alert-warning">
                        Fund will be sent to your hybridcoin wallet
                    </div>



                    <form method="post" action="/zone_withdrawal">@csrf
                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/images/coins/01.png') }}"
                                            class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a href="#"
                                                class="text-white">USDT </a> <br>
                                            <span style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-bold">$
                                            {{ number_format($user->zoneUsdtBalance(), 2) }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                            class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a href="/convert"
                                                class="text-white">Hybridcoin</a> <br>
                                            <span
                                                style="font-weight: lighter">${{ number_format(1 / $rate, 4) }}</span></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-6 fw-bold me-2"
                                            style="line-height: 20px">{{ number_format($user->zoneHbcBalance(), 4) }}
                                            HBC <br>
                                            <span style="font-weight: lighter">$
                                                {{ number_format($user->zoneHbcBalance() / $rate, 4) }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="text"> Currency </label>
                            <select name="currency" class="form-control" id="">
                                <option selected disabled>... Select Currency .....</option>
                                <option value="hbc">Hybrid Coin</option>
                                <option value="usdt">USDT</option>
                            </select>
                            @error('currency')
                                <i class="text-danger ">{{ $message }} </i>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="text"> Amount </label>
                            <input type="number" name="amount" class="form-control" min="10"
                                placeholder="Minimum: 10 ">
                            @error('amount')
                                <i class="text-danger ">{{ $message }} </i>
                            @enderror
                        </div>

                        <div class="d-flex justif   y-content-end ">
                            <button type="submit" class="btn buypmcbtn btn-primary">Withdraw</button>
                        </div>
                    </form>


                </div>



            </div>

        </div>
    </div>



    @include('users.transfer_to_zone_modal');
@endsection


@push('scripts')
    <script>
        $(function() {

            $('.depositModal').on('click', function() {
                $('#depositModal').modal('show');
            })

            $('.withdrawal_fund').on('click', function() {
                $('#withdrawal_fund').modal('show');
            })

            $('.set_cur').on('click', function() {
                $('#set_cur').modal('show');
            })



            $('body').on('click', '.activate_slot', function() {
                id = $(this).data('id');
                modal = $('#q_order')
                modal.modal('show');
                modal.find(`.do_dd`).attr('href', `/zone/purchase_slot/${id}`);
            })



            $('body').on('click', '.error_slot', function() {
                modal = $('#order_erorr')
                modal.modal('show');
            })

        })
    </script>


    <script>
        var countDownDate = new Date("Nov 21, 2024 23:59:59").getTime();

        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            // document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            //     minutes + "m " + seconds + "s ";



            $('.days').html(days)
            $('.hours_def').html(hours)
            $('.minutes').html(minutes)
            $('.second').html(seconds)

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                // hide timer and reload
            }
        }, 1000);
    </script>


    <script>
        const input_field = document.getElementById('input_field')

        function yourFunction() {
            input_field.select(); // select the input field
            input_field.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(input_field.value)

        }




        function getStorage(key) {

            expire_time = localStorage.getItem('zone_wallet_expire');
            current_time = `{{ time() }}`

            console.log(current_time - expire_time);
            if (current_time > expire_time) {
                // expire time has reahed 
                //  get new key
                return walletnew();
            } else {
                // use old key
                var value = localStorage.getItem(key);
                return value;
            }
        }


        function walletnew() {

            new_wallet = '';
            new_wallet = `{{ pickNewWallet() }}`;
            setStorage('zone_wallet', new_wallet);
            loadWallet()
            return new_wallet;
        }


        function setStorage(key, value) {
            try {
                localStorage.setItem(key, value);
                localStorage.setItem('zone_wallet_expire', `{{ time() + 86400 }}`);
            } catch (e) {
                console.log('setStorage: Error setting key [' + key + '] in localStorage: ' + JSON.stringify(e));
                return false;
            }
            return true;
        }




        function loadWallet() {
            wallet = getStorage('zone_wallet')
            loadString(wallet);
        }


        function loadString(old_wallet) {
            wallet_area = $('.wallet_area');

            wallet_loader = $(wallet_area).find('.wallet_loader');
            wallet_loader.hide();

            wallet_copy = $(wallet_area).find('.wallet_copy');
            wallet_copy.html(`
                <span class="badge mb-2 bg-danger"> ${old_wallet} </span>
                <div class="d-flex mb-3 justify-content-lg-start">
                    <input type="text" id="input_field" readonly
                        class="form-control shadow text-danger bg-light form-control-sm fw-bold me-2"
                        style="border: 2px solid red;" value="${old_wallet}">
                    <button class="btn bg-light fw-bold text-danger shadow " onclick="yourFunction()"
                        style="border: 2px solid red;" type="submit">Copy</button>
                </div>
            `)
        }

        loadWallet();
    </script>
@endpush
