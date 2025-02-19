
<div class="modal fade modalRight" id="depositModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                <h3>Fund ZONE Wallet By deposit</h3>
            </div>
            <div class="overflow-auto pt-45 pb-16">
                <div class="tf-container">
                    <div>



                        <div class="swiper-slide swiper-slide-active mt-12">
                            <div class="accent-box-v5 bg-menuDark ">
                                <span class="icon-box bg-icon1"><i class="icon-book"></i></span>
                                <div class="mt-12">
                                    <a href="#" class="text-small">Before You Deposit !!</a>
                                    <p class="mt-4">
                                        Funds will be lost if sent from any wallet different from the wallet address you
                                        launched with
                                        <br>
                                        <span class="badge bg-success"> {{ auth()->user()->wallet }} </span>
                                        <br>

                                    </p>

                                    <a href="#" class="text-xs mt-10">Recommended wallet is Trust Wallet</a>
                                </div>
                            </div>
                        </div>



                        <div class="swiper-slide swiper-slide-active mt-12">
                            <div class="accent-box-v5 bg-menuDark ">
                                <span class="icon-box bg-icon1"><i class="icon-book"></i></span>
                                <div class="mt-12">
                                    <a href="#" class="text-small">Copy Transfer Wallet</a>
                                    <p>

                                        To fund your Hybrid Wallet, kindly send a minimum of 400 TRX (TRC20) to the
                                        address below. In
                                        less
                                        than 12 hours, when your deposit is confirmed, our system will automatically
                                        convert TRX
                                        to
                                        USDT into your Hybrid Wallet.


                                    </p>


                                    <div class="wallet_area">

                                        <div class="wallet_loader mb-0 mt-3">
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <i class="">Loading Deposit Wallet Address ... </i>
                                        </div>
                                        <div class="wallet_copy">

                                        </div>
                                    </div>


                                    <p>

                                        The above deposit address is been changed from time to time to ensure an
                                        efficient
                                        infrastructure and fund security for users. Please always check before sending
                                        TRX.</p>


                                </div>
                            </div>
                        </div>

                        <div class="mt-20">
                            <ul class="menu-tab-v3" role="tablist">
                                <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency"
                                    role="tab" aria-controls="cryptocurrency" aria-selected="true">
                                    Crypto Deposits
                                </li>
                            </ul>
                            <div class="tab-content mt-16 mb-16">
                                <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                                    <ul>
                                        @foreach (\App\Models\ZoneDeposit::where(['user_id' => $user->id])->get() as $trno)
                                            <li class="mt-16">
                                                <a href="javascript:;" class="coin-item style-2 gap-12">
                                                    <img src="{{ asset('assets/images/coins/01.png') }}"
                                                        class="img" alt="">

                                                    <div class="content">
                                                        <div class="title">
                                                            <p class="mb-4 text-button text-success "> +
                                                                {{ number_format($trno->amount) }} USDT</p>
                                                            <span
                                                                class="text-secondary">{{ date('j M Y, h:i a', strtotime($trno->created_at)) }}
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-12">
                                                            <span class="text-small"> successful </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade modalRight" id="controlEarnings">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                <h3>Control Earnings</h3>
            </div>
            <div class="overflow-auto pt-45 pb-16">
                <div class="tf-container">
                    <div>
                        <div class="mt-20">
                            <ul class="mt-16 pb-16 line-bt">
                                <li>
                                    <div class="swiper-slide swiper-slide-active mt-12">
                                        <div class="accent-box-v5 bg-menuDark ">
                                            <span class="icon-box bg-icon1"><i class="icon-wallet"></i></span>
                                            <a href="#" class="text-small">Take Note !!</a>
                                            <div class="mt-12">
                                                <p class="mt-4">
                                                    Choose how you want your hybrid zone earnings to be paid
                                                </p>

                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <form action="/zone/set_cur" method="post">
                                        @csrf
                                        <div class="mt-16 d-flex justify-content-between align-items-center">
                                            <p class="text-small">100 % USDT earning</p>
                                            <input class="tf-switch-check" type="checkbox" onchange="submit()"
                                                name="type"
                                                {{ auth()->user()->zone_collect == 'usdt' ? 'checked' : '' }}
                                                value="usdt">
                                        </div>
                                    </form>
                                </li>

                                <li>
                                    <form action="/zone/set_cur" method="post">
                                        @csrf
                                        <div class="mt-16 d-flex justify-content-between align-items-center">
                                            <p class="text-small">100 % Hybrid Coin</p>
                                            <input class="tf-switch-check" type="checkbox" onchange="submit()"
                                                name="type"
                                                {{ auth()->user()->zone_collect == 'hbc' ? 'checked' : '' }}
                                                value="hbc">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade modalRight" id="internalTransfer">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                <h3>Pour Funds</h3>
            </div>
            <div class="overflow-auto pt-45 pb-16">
                <div class="tf-container">
                    <div>
                        <div class="mt-20">


                            <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                                data-space-between="16" data-preview="3" data-tablet="3" data-desktop="3">
                                <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                                    style="transform: translate3d(0px, 0px, 0px);">

                                    <div class="swiper-slide">
                                        <a href="javascript:;" class="coin-box d-block">
                                            <div class="coin-logo">
                                                <img src="{{ asset('assets/images/coins/01.png') }}" alt="img"
                                                    class="logo">
                                                <div class="title">
                                                    <p>USDT </p>
                                                </div>
                                            </div>
                                            <div class="mt-8 mb-8 coin-chart">
                                                <div id="line-chart-5"></div>
                                            </div>
                                            <div class="coin-price d-flex justify-content-between">
                                                <span> {{ number_format($user->zoneUsdtBalance(), 2) }} USDT <br>
                                                    <small style="font-size: 10px; color: rgb(197, 186, 186)">
                                                        $ {{ number_format($user->zoneUsdtBalance(), 2) }}</small>
                                                </span>
                                                <span class="text-primary d-flex align-items-center gap-2">$
                                                    {{ number_format(1, 2) }}</span>
                                            </div>
                                            <div class="blur bg2">
                                            </div>
                                        </a>
                                    </div>


                                    <div class="swiper-slide">
                                        <a href="javascript:;" class="coin-box d-block">
                                            <div class="coin-logo">
                                                <img src="{{ asset('assets/images/coins/00.png') }}" alt="img"
                                                    class="logo">
                                                <div class="title">
                                                    <p>Hybrid Coin</p>
                                                    <span>HBC</span>
                                                </div>
                                            </div>
                                            <div class="mt-8 mb-8 coin-chart">
                                                <div id="line-chart-4"></div>
                                            </div>
                                            <div class="coin-price d-flex justify-content-between">
                                                <span> {{ number_format($user->zoneHbcBalance(), 3) }} HBC <br> <small
                                                        style="font-size: 10px; color: rgb(197, 186, 186)">
                                                        {{ number_format($user->zoneHbcBalance() / $rate, 2) }}
                                                        USDT</small> </span>
                                                <span class="text-primary d-flex align-items-center gap-2">
                                                    {{ number_format(1 / $rate, 2) }} USDT</span>
                                            </div>
                                            <div class="blur bg1">
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>

                            <form method="post" action="/zone_withdrawal">@csrf
                                <div class="form-group mt-8">
                                    <label class="label-ip">
                                        <p class="mb-8 text-small"> Currency</p>
                                        <select name="currency" id="">
                                            <option selected disabled>... Select Currency .....</option>
                                            <option value="hbc">Hybrid Coin</option>
                                            <option value="usdt">USDT</option>
                                        </select>
                                        @error('currency')
                                            <i class="text-danger ">{{ $message }} </i>
                                        @enderror
                                    </label>
                                </div>

                                <div class="form-group mt-8">
                                    <label class="label-ip">
                                        <p class="mb-8 text-small"> Amount</p>
                                        <input type="number" name="amount" min="10"
                                            placeholder="Minimum: 10 ">
                                        @error('amount')
                                            <i class="text-danger ">{{ $message }} </i>
                                        @enderror
                                    </label>
                                </div>
                                <button type="submit" class="mt-20  ">Pour Back to Hybrid Coin</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="modal fade modalCenter" id="order_erorr">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
            <div class="p-16 line-bt text-center">
                <h4 class="text-warning">Purchase Error</h4>
                <p class="mt-8 text-large">
                    Slot cannot be activated, you need to activate previous slots before you can
                    activate a higher slot .</p>
            </div>
            <div class="text-center mt-10 mb-2">
                <a href="#" class="text-center text-button fw-6 p-10 mx-3  btn-hide-modal"
                    data-bs-dismiss="modal" data-bs-target="#order_erorr"> Close</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modalCenter" id="q_order">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
            <div class="p-16 line-bt text-center">
                <h4 class="text-success">Confirm Purchase</h4>
                <p class="mt-8 text-large">
                    USDT will be deducted from your Hybridzone wallet to purchase slot.
                </p>
            </div>
            <div class="text-center grid-2">
                <a href="#" class=" text-center text-button line-r fw-6 p-10 text-secondary btn-hide-modal"
                    data-bs-dismiss="modal">Deny</a>
                <a href="" class="btn do_dd text-center text-button text-primary fw-6 p-10 mx-3  ">Allow</a>
            </div>
        </div>
    </div>
</div>

