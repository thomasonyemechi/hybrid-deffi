@extends('layout.mobile')

@section('page_content')
    <style>
        .icon-book:before {
            content: "\e913";
            color: #fc0;
        }
    </style>



    <div class="pt-68 pb-80">

        <div class="tf-container">



            <h5 class="mt-20">Deposit Crypto</h5>





            <div class="swiper-slide swiper-slide-active mt-12">
                <div class="accent-box-v5 bg-menuDark ">
                    <span class="icon-box bg-icon1"><i class="icon-book"></i></span>
                    <div class="mt-12">
                        <a href="#" class="text-small">Before You Deposit !!</a>
                        <p class="mt-4">
                            Funds will be lost if sent from any wallet different from the wallet address you launched with
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

                            To fund your Hybrid Wallet, kindly send a minimum of 400 TRX (TRC20) to the address below. In
                            less
                            than 12 hours, when your deposit is confirmed, our system will automatically convert TRX
                            to
                            USDT into your Hybrid Wallet.


                        </p>


                        <div class="wallet_area">

                            <div class="wallet_loader mb-0 mt-3">
                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i
                                    class="">Loading Deposit Wallet Address ... </i>
                            </div>
                            <div class="wallet_copy">

                            </div>
                        </div>


                        <p>

                            The above deposit address is been changed from time to time to ensure an efficient
                            infrastructure and fund security for users. Please always check before sending TRX.</p>


                    </div>
                </div>
            </div>

            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Crypto Deposits
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>
                            @foreach ($deposits as $dep)
                                <li class="mt-16">
                                    <a href="javascript:;" class="coin-item style-2 gap-12">
                                        <img src="{{ asset('assets/images/coins/01.png') }}" class="img" alt="">

                                        <div class="content">
                                            <div class="title">
                                                <p class="mb-4 text-button text-success "> +
                                                    {{ number_format($dep->amount) }} USDT</p>
                                                <span
                                                    class="text-secondary">{{ date('j M Y, h:i a', strtotime($dep->created_at)) }}
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
@endsection



@push('scripts')
    <script>
        const input_field = document.getElementById('input_field')

        function copyFunc(string) {
            // input_field.select();
            // input_field.setSelectionRange(0, 99999); 
            // navigator.clipboard.writeText(input_field.value)

            if (string) {
                navigator.clipboard.writeText(string)
                    .then(() => console.log("Copied: " + string))
                    .catch(err => console.error("Failed to copy text: ", err));
            } else {
                console.warn("Input element not found.");
            }



        }




        function getStorage(key) {

            expire_time = localStorage.getItem('dep_wallet_expire');
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
            // load wallet
            $.ajax({
                method: 'get',
                url: `/validate_wallet`
            }).done(function(res) {
                new_wallet = res.new_wallet
                console.log(res);
                setStorage('dep_wallet', res.new_wallet);
                loadWallet()
            }).fail(function(res) {
                console.log(res);
            })
            return new_wallet;
        }


        function setStorage(key, value) {
            try {
                localStorage.setItem(key, value);
                localStorage.setItem('dep_wallet_expire', `{{ time() + 86400 }}`);
            } catch (e) {
                console.log('setStorage: Error setting key [' + key + '] in localStorage: ' + JSON.stringify(e));
                return false;
            }
            return true;
        }




        function loadWallet() {
            wallet = getStorage('dep_wallet')
            loadString(wallet);
        }


        function loadString(old_wallet) {
            wallet_area = $('.wallet_area');

            wallet_loader = $(wallet_area).find('.wallet_loader');
            wallet_loader.hide();

            wallet_copy = $(wallet_area).find('.wallet_copy');
            wallet_copy.html(`invite
            
                    <div class="d-flex  mb-0 mt-3 justify-content-between">
                                <span class="badge mb-2 bg-danger"> ${old_wallet} </span>

                                <span class="bg-primary  mb-2 badge" onclick="copyFunc('${old_wallet}')">copy</span>
                    </div>
                `)
        }

        loadWallet();
    </script>
@endpush
