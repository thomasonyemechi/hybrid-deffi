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





    @php
        $total_team = 0;
    @endphp
    @for ($i = 1; $i <= 6; $i++)
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
        {{-- {{ $count }} --}}
    @endfor




    <div class="pt-68 pb-80">
        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5><span class="text-primary">Wallet</span> - <a href="#" class="choose-account" data-bs-toggle="modal"
                        data-bs-target="#accountWallet"><span class="dom-text">Hybrid Zone </span>
                        &nbsp;<i class="icon-select-down"></i></a> </h5>
                <h1 class="mt-16"><a href="#"> $ {{ number_format($user->zoneUsdtBalance(), 2) }}</a></h1>
                <h4 class="mt-10"><i class="icon-user"></i> {{ $total_team }} </h4>


            </div>
        </div>










        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5>Purchase Hybrid Zone</h5>

                <div class="row">

                    @foreach ($slots as $slot)
                        @php
                            $pack = checkPackage($user->id, $slot->id);

                        @endphp


                        <div class="col-6">

                            <div class="accent-box-v5  mb-3 bg-menuDark 
                            @if (!$pack) {{ $next_pack == $slot->id ? 'activate_slot' : 'error_slot' }} @endif "
                                style="border: .5px solid {{ $slot->color }}" data-id="{{ $slot->id }}">
                                <div class="d-flex  justify-content-start " style="font-size: 10px; !important">
                                    <span class="icon-box bg-icon1"> <span class="fw-bold"
                                            style="color: white !important; font-weight: 600">
                                            @if ($slot->name == 'H4')
                                                H4
                                            @elseif($slot->name == 'H6')
                                                H6
                                            @else
                                                EN
                                            @endif

                                        </span> </span>
                                    <h4 class="ms-2 mt-2 pt-1" style="text-transform: uppercase">
                                        @if ($slot->name == 'entry')
                                            ENTRY
                                        @else
                                            ZONE {{ $slot->id }}
                                        @endif

                                    </h4>
                                </div>
                                <div class="mt-10">

                                    @if ($pack)
                                        <a href="javascript:;" class=" text-primary text-small"
                                            title="Activate slot now to earn from downline transactions"><i
                                                class="icon icon-check-circle "></i> Earnings : $
                                            {{ slotEarning($slot->id, $user->id, 'usdt') }} </a>
                                    @else
                                        <a href="javascript:;" class="fw-bold text-danger " data-id="{{ $slot->id }}"
                                            style=" cursor: pointer; "
                                            title="Activate slot now to earn from downline transactions">
                                            <i class="icon icon-cart "> </i>
                                            Activate
                                            Zone: {{ number_format($pack->amount ?? $slot->price) }} USDT</a>
                                    @endif
                                    <p class="mt-4 h-3">
                                        <span> <i class="icon icon-user "> </i>
                                            @if ($slot->type == 'straight')
                                                {{ directDD($user->id, $slot->id) }}
                                            @else
                                                {{ otherDD($user->id, $slot->id) }}
                                            @endif
                                        </span>
                                    </p>



                                    <p class="mt-4 h-3">
                                        @if ($pack)
                                            <a href="javascript:;" class="text-secondary  fw-bold "><i
                                                    class="icon icon-book " style="color: gray !important"> </i>
                                                Transactions</a>
                                        @else
                                            <a href="javascript:;" class=" text-warning text-small">
                                                <i class="icon " style="font-weight: 900"> X</i>
                                                Missed Earnings : $
                                                {{ slotEarning($slot->id, $user->id, 'usdt') }} </a>
                                        @endif
                                    </p>

                                </div>
                            </div>


                        </div>
                    @endforeach

                </div>

            </div>
        </div>



        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5> <a href="#" class="choose-account" data-bs-toggle="modal" data-bs-target="#accountWallet"><span
                            class="dom-text">Qucik Actions </span></a> </h5>
                <ul class="mt-16 grid-5  m--16 ">

                    <li>
                        <a href="javascript:;"
                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-center depositModal">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-bank"></i></span>
                            Fund <br> Wallet
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center"
                            data-bs-toggle="modal" data-bs-target="#depositModalToZone">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-way"></i></span>
                            Transfer <br> USDT
                        </a>
                    </li>


                    <li>
                        <a href="javascript:;" class="tf-list-item d-flex flex-column gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-exchange"></i></span>
                            Check <br> Downlines
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;"
                            class="tf-list-item d-flex flex-column controlEarnings gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-swap"></i></span>
                            Control <br> Earnings
                        </a>
                    </li>


                    <li>
                        <a href="javascript:;"
                            class="tf-list-item d-flex flex-column gap-8 internalTransfer align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-exchange"></i></span>
                            Internal <br> Trasnfer
                        </a>
                    </li>

                </ul>
            </div>
        </div>



        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5>Other Balance</h5>

                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-space-between="16" data-preview="2.2" data-tablet="2.2" data-desktop="3">
                    <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/00.png') }}" alt="img" class="logo">
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
                                            {{ number_format($user->zoneHbcBalance() / $rate, 2) }} USDT</small> </span>
                                    <span class="text-primary d-flex align-items-center gap-2">
                                        {{ number_format(1 / $rate, 2) }} USDT</span>
                                </div>
                                <div class="blur bg1">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/energy.png') }}" alt="img"
                                        class="logo">
                                    <div class="title">
                                        <p>Engery </p>
                                    </div>
                                </div>
                                <div class="mt-8 mb-8 coin-chart">
                                    <div id="line-chart-5"></div>
                                </div>
                                <div class="coin-price d-flex justify-content-between">
                                    <span> {{ number_format($user->myEnergy(), 2) }} USDT <br> <small
                                            style="font-size: 10px; color: rgb(197, 186, 186)">
                                            {{ number_format($user->myEnergy(), 2) }} USDT</small> </span>
                                    <span class="text-primary d-flex align-items-center gap-2">$
                                        {{ number_format(1, 2) }}</span>
                                </div>
                                <div class="blur bg3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

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
                            <a class="nav-link" aria-selected="false" href="/zone/transactions" tabindex="-1"
                                role="tab">All Transactions</a>
                        </li>


                    </ul>
                </div>
                <div class="tab-content pt-16 pb-16">
                    <div class="tab-pane fade active show" id="history" role="tabpanel">
                        <ul>


                            @foreach ($transactions as $trno)
                                <li class="mt-8">
                                    <a href="javascript:;" class="coin-item style-1 gap-12 bg-surface">

                                        @if ($trno->remark == 'withdrawal')
                                            <img src="{{ asset('mobile/images/coin/coin-2.jpg') }}" class="img"
                                                alt="">
                                        @else
                                            <img src="{{ $trno->currency == 'usdt' ? '../../assets/images/coins/01.png' : '../../assets/images/coins/00.png' }}"
                                                class="img" alt="">
                                        @endif

                                        <div class="content">
                                            <div class="title">
                                                <p
                                                    class="mb-4 text-large {{ $trno->amount > 0 ? 'text-success' : 'text-danger' }} ">
                                                    {{ number_format($trno->amount, 2) }} {{ $trno->currency }}</p>
                                                <span class="text-secondary">{{ formatDate($trno->created_at) }}</span>
                                            </div>
                                            <div class="box-price">
                                                <p class="text-end">{{ $trno->remark }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach





                        </ul>
                    </div>
                    <div class="tab-pane fade" id="market" role="tabpanel">
                        <ul>


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


    @include('mobile.zone_modal')
@endsection



@push('scripts')
    <script>
        $(function() {

            $('.depositModal').on('click', function() {
                $('#depositModal').modal('show');
            })

            $('.internalTransfer').on('click', function() {
                $('#internalTransfer').modal('show');
            })

            $('.controlEarnings').on('click', function() {
                $('#controlEarnings').modal('show');
            })



            $('body').on('click', '.activate_slot', function() {
                id = $(this).data('id');
                modal = $('#q_order')
                modal.modal('show');

                console.log('efefhnuehfui');
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
                       <div class="d-flex  mb-0 mt-3 justify-content-between">
                                <span class="badge mb-2 bg-danger"> ${old_wallet} </span>

                                <span onclick="yourFunction()">copy</span>
                    </div>
            `)
        }

        loadWallet();
    </script>
@endpush
