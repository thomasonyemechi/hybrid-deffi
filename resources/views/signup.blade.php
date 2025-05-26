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



    <div class="pt-45 pb-20">
        <div class="tf-container">
            <div class="mt-32">

                <div class="cp-header text-center">
                    <div class="logo">
                        <a href="/" class="d-flex justify-content-center">
                            <img src="{{ asset('assets/images/coins/00.png') }}" style="width: 34px; height:34px"
                                alt="">
                            <h4 class="text-white mt-1" style="font-size: 23px;">{{ strtoupper(env('APP_NAME')) }}</h4>
                        </a>
                    </div>
                </div>

            </div>


            <form method="post" action=" {{ route('create-account') }} " id="signup_form">@csrf
                @csrf

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


                <fieldset class="mt-16">
                    <label class="label-ip">
                        <p class="mb-8 text-small"> Enter TRX Wallet Address</p>
                        <input class=" text-white" type="text" placeholder="TRX Wallet Address (TRC20) "
                            required="required" name="wallet_address" value="{{ old('wallet_address') }}">
                    </label>

                    @error('wallet_address')
                        <i class="text-danger ">{{ $message }} </i>
                    @enderror


                </fieldset>
                <fieldset class="mt-16 mb-12">

          

                    <label class="label-ip">
                        <p class="mb-8 text-small">Enter Access Pin</p>
                        <div class="box-auth-pass">
                            <input name="access_pin" type="password" placeholder="Access Pin" required="">
                            <span class="show-pass toggle_show  ">
                                <i class="icon-view"  style="color: blue !important" ></i>
                                <i class="icon-view-hide"  style="color: blue !important" ></i>
                            </span>


                            <input type="hidden" name="mode" value="password">
                            <input type="hidden" name="ref" value="{{ $_GET['ref'] ?? '' }}">

                        </div>
                    </label>
                </fieldset>
                <button class="mt-20">Launch</button>
                {{-- <p class="mt-20 text-center text-small">Already have a Account?  <a href="regi">Sign up</a></p> --}}
            </form>
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


    <script>
        $('.toggle_show').on('click', function() {
            input = $('input[name="access_pin"]');
            mode = $('input[name="mode"]')

            console.log(mode);

            if (mode.val() == 'password') {
                input.removeAttr('type');
                input.attr('type', 'text');
                mode.val('text')
            } else {
                input.removeAttr('type');
                input.attr('type', 'password');
                mode.val('password')
            }
        })
    </script>

</body>

</html>
