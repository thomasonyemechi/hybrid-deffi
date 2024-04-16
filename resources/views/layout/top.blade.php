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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
