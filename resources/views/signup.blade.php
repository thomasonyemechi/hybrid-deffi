<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->

    <link rel="shortcut icon" href="images/favi-icon.ico" type="image/x-icon" />

    <!-- Website Title -->
    <title>Hybrid Coin</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{ asset('main/css/fontawesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/fancybox/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/my-style2.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/responsive2.css') }}" type="text/css" />
</head>

<body>

    <div class="wrapper login-page style-3 bg-dark" id="top">
        <div class="cp-container">
            <div class="form-part bg-dark">
                <div class="cp-header text-center">
                    <div class="logo">
                        <a href="/" class="d-flex justify-content-center">
                            <img src="{{ asset('assets/images/coins/00.png') }}" style="width: 34px; height:34px"
                                alt="">
                            <h4 class="text-white mt-1" style="font-size: 23px;">{{ strtoupper(env('APP_NAME')) }}</h4>
                        </a>
                    </div>
                </div>
                {{-- <div class="cp-heading text-center">
                    <h5 class="text-white" >Welcome to {{ env('APP_NAME') }}</h5>
                </div> --}}
                <div class="cp-body">
                    @if (session('success'))
                        <div class="mb-2 text-center refresh ">
                            <i class="text-success "> {{ session('success') }} </i>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="mb-2 text-center refresh">
                            <i class="text-danger"> {{ session('error') }} </i>
                        </div>
                    @endif
                    <form method="post" action=" {{ route('create-account') }} ">@csrf
                        <div class="form-group username-field">

                            <div class="form-field shadow-none" style="border: 1px solid white">
                                <input class="form-control text-white" type="text" placeholder="TRX Wallet Address (TRC20)"
                                    required="required" name="wallet_address" value="{{ old('wallet_address') }}">

                                    <input type="hidden" name="ref" value="{{  $_GET['ref'] ?? '' }}">

                            </div>
                            @error('wallet_address')
                                <i class="text-danger ">{{ $message }} </i>
                            @enderror
                        </div>

                        <div class="form-group password-field">

                            <div class="d-flex justify-content-end ">
                                <a href="javascript:;" class="toggle_show text-secondary ">
                                    <i class="fa fa-eye mb-2 mr-3 ml-2" style="text-align: right !important">Show
                                        Pin </i>
                                </a>
                            </div>
                            <div class="form-field shadow-none" style="border: 1px solid white">
                                <input class="form-control text-white" name="access_pin" type="password" inputmode="numeric"
                                    autocomplete="new-password" placeholder="Enter a six digit passcode" required="">

                            </div>

                            @error('access_pin')
                                <i class="text-danger fw-bold ">{{ $message }} </i>
                            @enderror

                            <small class="text-warning ">Access pin cannot start with zero</small>



                            
                            <input type="hidden" name="mode" value="password">

                        </div>

                        <div class="form-group">
                            <p class="text-center remember-me-checkbox"><label><input type="checkbox" name="remember"
                                        value="0" required>I agree with the website's <a href="#"
                                        class="forgot-link text-white">Terms and conditions</a></label></p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">LAUNCH</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><a href="/login" class="forgot-link text-primary">Access</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('main/js/jquery.min.js') }}"></script>
    <script src="{{ asset('main/js/circle-progress.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('main/js/onpagescroll.js') }}"></script>
    <script src="{{ asset('main/js/wow.min.js') }}"></script>
    <script src="{{ asset('main/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('main/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('main/js/slick.min.js') }}"></script>
    <script src="{{ asset('main/js/Chart.js') }}"></script>
    <script src="{{ asset('main/js/chart-function.js') }}"></script>
    <script src="{{ asset('main/js/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('main/js/script2.js') }}"></script>
    <script src="{{ asset('main/js/particles.js') }}"></script>
    <script src="{{ asset('main/js/gold-app2.js') }}"></script>

    <script>
        $(function() {
            setTimeout(() => {
                $('.refresh').hide('slow');
            }, 5000);

            $('.toggle_show').on('click', function() {
                input = $('input[name="access_pin"]');
                mode = $('input[name="mode"]')

                console.log(mode);

                if (mode.val() == 'password') {
                    input.removeAttr('type');
                    input.attr('type', 'text');
                    mode.val('text')
                    $(this).html(`  <i class="fa fa-eye-slash mb-2 mr-3 ml-2" style="text-align: right !important">Hide Pin </i>`)
                } else {
                    input.removeAttr('type');
                    input.attr('type', 'password');
                    mode.val('password')
                    $(this).html(`  <i class="fa fa-eye mb-2 mr-3 ml-2" style="text-align: right !important">Show Pin </i>`)

                }
            })
        })
    </script>

</body>

</html>
