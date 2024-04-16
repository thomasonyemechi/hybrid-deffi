<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="/admin/dashboard">
            {{ env('APP_NAME') }}
            {{-- <img src="{{ asset('admin/images/brand/logo/logo-inverse.svg') }}" alt="" /> --}}
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="/admin/dashboard">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/manage_user">
                    <i class="nav-icon fe fe-users me-2"></i> Manage Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navCourses"
                    aria-expanded="false" aria-controls="navCourses">
                    <i class="nav-icon fe fe-book me-2"></i> Manage Deposit
                </a>
                <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/deposit/history">
                                Deposits History
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/deposit/pending">
                                Pending Deposit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/deposit/approved">
                                Approved Deposits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/deposit/rejected">
                                Rejected Deposits
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navCourses2"
                    aria-expanded="false" aria-controls="navCourses2">
                    <i class="nav-icon fe fe-book me-2"></i> Manage Withdrawal
                </a>
                <div id="navCourses2" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/withdrawal/history">
                                Withdrawal History
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/admin/withdrawal/pending">
                                Pending Withdrawals
                            </a>
                        </li>
                    </ul>
                </div>
            </li>




            <li class="nav-item">
                <a class="nav-link  " href="/admin/set_price">
                    <i class="nav-icon fe fe-settings me-2"></i> Set Coin Price
                </a>
            </li>

        </ul>

    </div>
</nav>
