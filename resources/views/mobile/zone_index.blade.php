@extends('layout.mobile')

@section('page_content')
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



    <div class="pt-68 pb-80">
        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5><span class="text-primary">Wallet</span> - <a href="#" class="choose-account" data-bs-toggle="modal"
                        data-bs-target="#accountWallet"><span class="dom-text">Hybrid Zone </span>
                        &nbsp;<i class="icon-select-down"></i></a> </h5>
                <h1 class="mt-16"><a href="#"> $ {{ number_format($user->zoneUsdtBalance(), 2) }}</a></h1>

            </div>
        </div>










        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5>Purchase Hybrid Zone</h5>

                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-space-between="16" data-preview="1.8" data-tablet="1.8" data-desktop="3">
                    <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">




                        @foreach ($slots as $slot)
                            @php
                                $pack = checkPackage($user->id, $slot->id);

                            @endphp


                            <div class="swiper-slide">
                                <a href="javascript:;" class="coin-box d-block"
                                    style="border: .5px solid {{ $slot->color }} ">
                                    <div class="coin-logo d-flex justify-content-between">
                                        <p>Zone {{ $slot->id }} </p>
                                        <span class="text-primary d-flex align-items-center gap-2 fw-bold ">
                                            <i class="icon-select-up"></i>
                                            {{ number_format($pack->amount ?? $slot->price) }} USDT</span>
                                    </div>
                                    <div class="mt-8 mb-8 coin-chart">
                                        <div id="line-chart-4"></div>
                                    </div>
                                    <div class="coin-price d-flex justify-content-between">



                                        @if ($pack)
                                            <span>Earned: $  {{ slotEarning($slot->id, $user->id, 'usdt') }} </span>




                                        @else
                                        
                                            <span class="fw-bold text-danger {{ $next_pack == $slot->id ? 'activate_slot' : 'error_slot' }} "
                                                data-id="{{ $slot->id }}" style=" cursor: pointer; "
                                                title="Activate slot now to earn from downline transactions">Activate Zone</span>

                                        @endif





                                    </div>


                                    <div class="d-flex pt-3 justify-content-between">
                                        <span class="fw-bold  " style=" text-transform: uppercase;">
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
                                            <span class="fw-bold text-warning" title="Cummulative missed earnings"> <i
                                                    class="fe fe-alert-octagon"></i>
                                                $
                                                {{ number_format(slotMissedEarning($slot->id, $user->id)) }}
                                            </span>
                                        @endif
                                    </div>



                                    <div class="blur "
                                        style="background-color: {{ $slot->color }} !important; opacity: 0.4">
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

            </div>
        </div>



        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5> <a href="#" class="choose-account" data-bs-toggle="modal" data-bs-target="#accountWallet"><span
                            class="dom-text">Qucik Actions </span></a> </h5>
                <ul class="mt-16 grid-5  m--16 ">

                    <li>
                        <a href="/deposit" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-bank"></i></span>
                            Fund <br> Wallet
                        </a>
                    </li>

                    <li>
                        <a href="/transfer" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-way"></i></span>
                            Transfer <br> USDT
                        </a>
                    </li>


                    <li>
                        <a href="/earnings" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-exchange"></i></span>
                            Check <br> Downlines
                        </a>
                    </li>

                    <li>
                        <a href="/convert" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-swap"></i></span>
                            Control <br> Earnings
                        </a>
                    </li>


                    <li>
                        <a href="/earnings" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-exchange"></i></span>
                            Internal <br> Trasnfer
                        </a>
                    </li>

                </ul>
            </div>
        </div>




        <div class="bg-menuDark tf-container">
            <div class="tf-tab pt-12 mt-4">
                <div class="tab-slide">
                    <ul class="nav nav-tabs wallet-tabs" role="tablist">
                        <li class="item-slide-effect"></li>
                        <li class="nav-item active" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#history"
                                aria-selected="true" role="tab">Transactions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#market" aria-selected="false"
                                tabindex="-1" role="tab">Market</button>
                        </li>


                    </ul>
                </div>
                <div class="tab-content pt-16 pb-16">
                    <div class="tab-pane fade active show" id="history" role="tabpanel">
                        <ul>

                            {{-- 
                            @foreach ($transactions as $trno)
                                <li class="mt-8">
                                    <a href="javascript:;" class="coin-item style-1 gap-12 bg-surface">
                                        <img src="{{ $trno->currency == 'usdt' ? '../../assets/images/coins/01.png' : '../../assets/images/coins/00.png' }}"
                                            class="img" alt="">
                                        <div class="content">
                                            <div class="title">
                                                <p
                                                    class="mb-4 text-large {{ $trno->amount > 0 ? 'text-success' : 'text-danger' }} ">
                                                    {{ number_format($trno->amount, 2) }} {{ $trno->currency }}</p>
                                                <span class="text-secondary">{{ formatDate($trno->created_at) }}</span>
                                            </div>
                                            <div class="box-price">
                                                <p class="text-small text-end mb-4"><span class="text-primary">+</span>
                                                    BTC 0.0056</p>
                                                <p class="text-end">{{ $trno->remark }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
 --}}



                        </ul>
                    </div>
                    <div class="tab-pane fade" id="market" role="tabpanel">
                        <ul>

                            {{-- <li class="mt-8">
                                <a href="choose-payment.html" class="coin-item style-1 gap-12 bg-surface">
                                    <img src="images/coin/coin-4.jpg" alt="img" class="img">
                                    <div class="content">
                                        <div class="title">
                                            <p class="mb-4 text-large">Anchor</p>
                                            <span class="text-secondary">12:00 AM</span>
                                        </div>
                                        <div class="box-price">
                                            <p class="text-small mb-4"><span class="text-primary">+</span> ETH 1,498</p>
                                            <p class="text-end"><span class="text-red">-</span> $12948,68</p>
                                        </div>
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="modal fade action-sheet" id="accountWallet">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span>Wallet</span>
                    <span class="icon-cancel" data-bs-dismiss="modal"></span>
                </div>
                <ul class="mt-20 pb-16">
                    <li data-bs-dismiss="modal">
                        <div
                            class="d-flex justify-content-between align-items-center gap-8 text-large item-check active dom-value">
                            Hybrid Coin Account <i class="icon icon-check-circle"></i> </div>
                    </li>
                    <li class="mt-4" data-bs-dismiss="modal">
                        <div class="d-flex  justify-content-between gap-8 text-large item-check dom-value">hybrid Zone
                            Account<i class="icon icon-check-circle"></i></div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    @include('mobile.transfer_to_zone_modal')
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
