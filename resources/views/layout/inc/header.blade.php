<header>
    <div id="sticky-header" class="menu-area  menu-area-three transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                
                                <a class="d-flex justify-content-between "  href="/">
                                    <img class="img-fluid" style="width: 30px; height: 30px" src="{{ asset('assets/img/logo.png') }}" alt="Hybrid Coin">
                                    <h3 class="mb-0 align-middle ml-3 fw-bold " >HybridCoin</h3>
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="/">Home</a>
                                    </li>
                                    <li><a href="#">Hybrid Community</a></li>
                                    <li><a href="#">Safety Guide</a></li>

                                    @if (!auth()->user())
                                        <li><a href="/login">Login</a></li>
                                    @endif
                                    @if (auth()->user())
                                        <li class="menu-item-has-children"><a href="#">
                                                <i class="fa fa-user-alt "></i>
                                                {{ auth()->user()->username }} </a>
                                            <ul class="sub-menu">
                                                <li><a href="/dashboard">Dashboard</a></li>
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Make Transfer</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul class="list-wrap">
                                    @if (auth()->user())
                                        <li class="header-btn"><a href="/logout" class="btn">sign out </a></li>
                                    @else
                                        <li class="header-btn"><a href="/signup" class="btn">sign up </a></li>
                                    @endif
                                </ul>
                            </div>

                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="/"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
</header>
