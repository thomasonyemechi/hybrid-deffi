<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hybridcoin</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('mobile/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet"type="text/css" href="{{ asset('mobile/css/styles.css') }}" />
</head>

<body class=" ">

    @php
        $announcement = \App\Models\Announcment::orderby('id', 'desc')->get();
    @endphp


    <style>
        .box-noti::after {
            content: " {{ count($announcement) }} ";
        }
    </style>


    {{-- <div class="preload preload-container">
        <div class="preload-logo" style="background-image: url('images/logo/144.png')">
            <div class="spinner"></div>
        </div>
    </div> --}}



    <div class="header-style2 fixed-top bg-menuDark">
        <div class="d-flex justify-content-between align-items-center gap-14">
            <div class="box-account style-2">




                <a class="box-account toggle_nav" href="javascript:;">
                    <img src="{{ Avatar::create(substr(auth()->user()->wallet, 0, 1) . ' ' . substr(auth()->user()->wallet, -1))->toBase64() }}"
                        alt="img" class="avt">
                    <div class="info">
                        <p class="text-xsmall text-secondary">Welcome back!</p>
                        <h5 class="mt-4">
                            @if (auth()->user()->wallet)
                                {{ substr(auth()->user()->wallet, 0, 6) . '...' . substr(auth()->user()->wallet, -6) }}
                            @else
                                {{ auth()->user()->username }}
                            @endif
                        </h5>

                    </div>
                </a>
            </div>
            <div class="d-flex align-items-center gap-8">
                <a href="#notification" class="icon-noti box-noti" data-bs-toggle="modal"></a>
            </div>
        </div>
    </div>

    @yield('page_content')

    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li class="active">
                <a href="/dashboard">
                    <i class="icon icon-home2"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="/trade">
                    <i class="icon icon-exchange"></i>
                    Exchange
                </a>
            </li>
            <li>
                <a href="/earnings">
                    <i class="icon icon-earn"></i>
                    Earn
                </a>
            </li>
            <li>
                <a href="/zone/landing2">
                    <i class="icon icon-wallet"></i>
                    Hybrid Zone
                </a>
            </li>
        </ul>
    </div>






    <div class="modal fade modalRight" id="notification">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                    <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                    <h3>Announcement</h3>
                </div>
                <div class="overflow-auto pt-45 pb-16">
                    <div class="tf-container">
                        <ul class="mt-12">


                            @foreach ($announcement as $ann)
                                <li>
                                    <a href="#" class="noti-item bg-menuDark">
                                        <div class="pb-8 line-bt d-flex">
                                            <p class="text-button fw-6">
                                                {{ $ann->announcement }}
                                            </p>
                                            <i class="dot-lg bg-primary"></i>
                                        </div>
                                        <span class="d-block mt-8">{{ formatDate($ann->created_at) }} </span>
                                    </a>
                                </li>
                            @endforeach




                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade modalRight" id="navigator">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                    <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                    <h3>

                    </h3>
                </div>
                <div class="overflow-auto pt-45 pb-16">
                    <div class="tf-container">

                        <div class="bg-menuDark tf-container">
                            <a href="javascript:;"
                                class="pt-12 pb-12 mt-4 d-flex justify-content-between align-items-center">
                                <div class="box-account">
                                    <img src="{{ Avatar::create(substr(auth()->user()->wallet, 0, 1) . ' ' . substr(auth()->user()->wallet, -1))->toBase64() }}"
                                        alt="img" class="avt">
                                    <div class="info">
                                        <h5>
                                            {{ substr(auth()->user()->wallet, 0, 6) . '...' . substr(auth()->user()->wallet, -6) }}
                                        </h5>

                                    </div>
                                </div>
                                <span class="arr-right"><i class="icon-arr-right"></i></span>
                            </a>

                        </div>
                        <div class="bg-menuDark tf-container">
                            <div class="pt-12 pb-12 mt-4">
                                <h5>Exchange & Buy </h5>
                                <ul class="mt-16 grid-3 gap-12">
                                    <li>
                                        <a href="/convert
                                            "
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-swap"></i>
                                            Buy Hybrid Coin
                                        </a>
                                    </li>


                                    <li>
                                        <a href="/trade"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-convert"></i>
                                            Convert SHC/USDT
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="bg-menuDark tf-container">
                            <div class="pt-12 pb-12 mt-4">
                                <h5>Others</h5>
                                <ul class="mt-16 grid-3 gap-12">
                                    <li>
                                        <a href="/deposit"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-bank"></i>
                                            Deposit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/transfer"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-metalogo"></i>
                                            Transfer Funds
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/earnings"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-fileText"></i>
                                            Earnings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/invite"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-graph"></i>
                                            Invite Others
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/withdrawal"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-way2"></i>
                                            Funds Withdrawal
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                        <div class="bg-menuDark tf-container">
                            <div class="pt-12 pb-12 mt-4">
                                <h5>Help center</h5>
                                <ul class="mt-16 grid-3 gap-12">
                                    <li>
                                        <a href="#"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center">
                                            <i class="icon icon-globe"></i>
                                            Community
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="bg-menuDark tf-container">
                            <div class="pt-12 pb-12 mt-4">
                                <ul class="mt-16 grid-3 gap-12">

                                    <li>
                                        <a href="/wallet"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-grid-nine"></i>
                                            Wallet Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout"
                                            class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                            <i class="icon icon-arr-down"></i>
                                            Disconnect
                                        </a>
                                    </li>


                                    @if (in_array(auth()->user()->id, admins()))
                                    
                                        <li>
                                            <a href="/admin/dashboard"
                                                class="tf-list-item d-flex flex-column gap-8 align-items-center text-break text-center">
                                                <img src="{{ asset('assets/images/coins/00.png') }}" style="width: 30px;"
                                                class="img-fluid">
                                                Other Settings
                                            </a>
                                        </li>
                                    @endif
                                      
                                </ul>
                            </div>
                        </div>


                        <div class="bg-menuDark tf-container">
                            <a href="#"
                                class="pt-12 pb-12 mt-4 d-flex justify-content-between align-items-center">
                                <h5>About Hybrid Deffi</h5>
                                <span class="arr-right"><i class="icon-arr-right"></i></span>
                            </a>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>








    <script type="text/javascript" src="{{ asset('mobile/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/apexcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/chart.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/line-chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mobile/js/main.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



    @if (session('error'))
        <script>
            Toastify({
                text: "<?= session('error') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #b04300, #ff0000)",
                },
            }).showToast();
        </script>
    @endif


    @if (session('success'))
        <script>
            Toastify({
                text: "<?= session('success') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #01ff01)",
                },
            }).showToast();
        </script>
    @endif


    <script>
        $(function() {
            setTimeout(() => {
                $('#refresh').hide('slow');
            }, 5000);
        })
    </script>

    <script>
        $(function() {
            $('.toggle_nav').on('click', function() {
                $('#navigator').modal('show')
            })
        })
    </script>



    @stack('scripts')

</body>

</html>
