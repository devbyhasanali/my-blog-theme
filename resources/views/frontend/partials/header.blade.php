<!-- ======================= Header Start  ============================ -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid">

                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/assets/images/logo2.png') }}"
                         class="img-fluid" alt="Blog">
                </a>

                <!-- Mobile Toggle -->
                <div class="d-flex align-items-center d-block d-lg-none">
                    <div class="me-2">
                        <button class="navbar-toggler" type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#mobilemenuOffcanvas">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                               href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                               href="{{ route('blog') }}">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item me-3">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                               href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>

                        <!-- Search -->
                        <li class="nav-item">
                            <form class="d-flex" action="{{ route('search') }}" method="GET">
                                <input class="form-control me-2"
                                       type="search"
                                       name="query"
                                       placeholder="Search">
                                <button class="btn btn-outline-success" type="submit">
                                    Search
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile_menu offcanvas offcanvas-start d-block d-lg-none"
             tabindex="-1" id="mobilemenuOffcanvas">

            <div class="offcanvas-header">
                <div class="offcanvas-title">
                    <img src="{{ asset('frontend/assets/images/logo2.png') }}"
                         width="120" class="img-fluid" alt="Blog">
                </div>
                <button type="button" class="btn-close"
                        data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- ======================= Header End  ============================ -->
