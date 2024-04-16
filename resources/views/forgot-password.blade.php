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
    <title>Prime Coin | Change E-Mail</title>
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

    <div class="wrapper login-page style-3" id="top">
        <div class="cp-container">
            <div class="form-part">
                <div class="cp-header text-center">
                    <div class="logo">
                        <h4>Forgot Password</h4>
                        <span>
                            Enter your email address to get password reset link
                        </span>
                    </div>
                </div>
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

                    <form method="post" action="/forgot-password">@csrf
                        <div class="form-group username-field">
                            <div class="form-field">
                                <input class="form-control" type="email" autocomplete="yhe" name="email"
                                    placeholder="Email address">
                                @error('email')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn text-white ">Forgot Password</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><a href="/login" class="forgot-link">Login</a></p>
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
        })
    </script>


</body>

</html>
