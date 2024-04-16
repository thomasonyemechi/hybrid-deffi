<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hybridcoin Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/coins/00.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/coinex.mine209.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.mine209.css?v=1.0.0') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body class=" ">

    @include('layout.inc.aside')



    <main class="main-content">

        <div class="position-relative">
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
                <div class="container-fluid navbar-inner">
                    <a href="/dashboard" class="navbar-brand">
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <a href="/dashboard">
                        <h6 class="title">
                            @if (auth()->user()->wallet)
                                {{ substr(auth()->user()->wallet, 0, 6) . '...'.substr(auth()->user()->wallet, -6) }}
                            @else
                                {{ auth()->user()->username }}
                            @endif
                        </h6>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1 mt-2"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                </div>
            </nav>
            <!--Nav End-->
        </div>


        @yield('page_content')

        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item"><a href="#" class="text-white">Privacy
                            Policy</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Terms of
                            Use</a></li>
                </ul>
                <div class="right-panel">
                    © {{ date('Y') }} {{ env('APP_NAME') }}
                </div>
            </div>
        </footer>
    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>

    <!-- widgetchart JavaScript -->
    <script src="{{ asset('assets/js/charts/widgetcharts.js') }}"></script>

    <!-- GSAP Animation JS-->
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>

    <!-- Mapchart JavaScript -->
    <script src="{{ asset('assets/js/charts/vector-chart.js') }}"></script>
    <script src="{{ asset('assets/js/charts/dashboard.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/coinex.js') }}"></script>

    <!-- apexchart JavaScript -->
    <script src="{{ asset('assets/js/charts/apexcharts.js') }}"></script>

    <!-- Gsap Animation Init -->
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
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


    @stack('scripts')

</body>

</html>
