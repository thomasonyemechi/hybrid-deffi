<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hybridcoin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/coins/00.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/coinex.mine209.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.mine209.css?v=1.0.0') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />


</head>

<body class=" ">

   @include('layout.aside')
    <main class="main-content">


        {{-- ////include top --}}

        @include('layout.top')

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
                    © {{ date('Y') }}  {{ env('APP_NAME') }}
                </div>
            </div>
        </footer>
    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="../assets/js/core/external.min.js"></script>

    <!-- widgetchart JavaScript -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- GSAP Animation JS-->
    <script src="../assets/vendor/gsap/gsap.min.js"></script>
    <script src="../assets/vendor/gsap/ScrollTrigger.min.js"></script>

    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>

    <!-- Mapchart JavaScript -->
    <script src="../assets/js/charts/vector-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/coinex.js"></script>

    <!-- apexchart JavaScript -->
    <script src="../assets/js/charts/apexcharts.js"></script>

    <!-- Gsap Animation Init -->
    <script src="../assets/js/gsap.js"></script>
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
