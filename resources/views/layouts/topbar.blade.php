<!--  Header Start -->
<header class="topbar">
    <div class="with-vertical"><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Header -->
        <!-- ---------------------------------- -->
        <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                        <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                @endauth
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
            </ul>

            <div class="d-block d-lg-none py-4">
                <a href="../main/index.html" class="text-nowrap logo-img">
                    <img src="{{ url('/') }}/assets/images/logos/dark-logo.png" class="dark-logo"
                        alt="Logo-Dark" />
                    <img src="{{ url('/') }}/assets/images/logos/light-logo.png" class="light-logo"
                        alt="Logo-light" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="ti ti-dots fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end overflow-scroll" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)"
                        class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                        aria-controls="offcanvasWithBothOptions">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <!-- ------------------------------- -->
                        <!-- start language Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                <i class="ti ti-moon moon"></i>
                            </a>
                            <a class="nav-link sun light-layout" href="javascript:void(0)">
                                <i class="ti ti-sun sun"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <img src="{{ url('/') }}/assets/images/flags/flag-{{ LaravelLocalization::getCurrentLocale() }}.png"
                                    alt="modernize-img" width="20px" height="20px"
                                    class="rounded-circle object-fit-cover round-20" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="{{ url('/') }}/assets/images/flags/flag-{{ $localeCode }}.png"
                                                    alt="modernize-img" width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">{{ $properties['native'] }}</p>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end language Dropdown -->
                        <!-- ------------------------------- -->

                        @if (Auth::check())
                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2"
                                    aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                            new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-2.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate
                                                    him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-3.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you
                                                    new message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-4.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your
                                                    earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-5.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new
                                                    tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-6.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted
                                                    from account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-7.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate
                                                    him</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{ url('/') }}/assets/images/profile/user-1.jpg"
                                                class="rounded-circle" width="35" height="35"
                                                alt="modernize-img" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{ url('/') }}/assets/images/profile/user-1.jpg"
                                                class="rounded-circle" width="80" height="80"
                                                alt="modernize-img" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                                <span class="mb-1 d-block">Designer</span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-wallet fs-4"></i> Rp. 120.000
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="../main/page-user-profile.html"
                                                class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-account.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Account
                                                        Settings</span>
                                                </div>
                                            </a>
                                            <a href="../main/app-email.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-inbox.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Messages &
                                                        Emails</span>
                                                </div>
                                            </a>
                                            <a href="../main/app-notes.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-tasks.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                    <span class="fs-2 d-block text-body-secondary">To-do and
                                                        Daily Tasks</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                            <div
                                                class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access
                                                        </h5>
                                                        <button class="btn btn-primary">Upgrade</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="m-n4 unlimited-img">
                                                            <img src="{{ url('/') }}/assets/images/backgrounds/unlimited-bg.png"
                                                                alt="modernize-img" class="w-100" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="../main/authentication-login.html"
                                                class="btn btn-outline-primary">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        @else
                            <li class="nav-item">
                                <a class="nav-link position-relative pe-0" href="javascript:void(0)">
                                    <div class="btn btn-outline-primary d-flex align-items-center">
                                        <i class="ti ti-user"></i>
                                        {{ __('menu.Login') }}
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="javascript:void(0)">
                                    <div class="btn btn-primary d-flex align-items-center">
                                        <i class="ti ti-logout"></i>
                                        {{ __('menu.Register') }}
                                    </div>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
        <!-- ---------------------------------- -->
        <!-- End Vertical Layout Header -->
        <!-- ---------------------------------- -->

        <!-- ------------------------------- -->
        <!-- apps Dropdown in Small screen -->
        <!-- ------------------------------- -->
        <!--  Mobilenavbar -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
                <div class="offcanvas-header justify-content-between">
                    <img src="{{ url('/') }}/assets/images/logos/favicon.png" alt="modernize-img"
                        class="img-fluid" />
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span>
                                    <i class="ti ti-apps"></i>
                                </span>
                                <span class="hide-menu">{{ __('menu.Apps') }}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level my-3">
                                <li class="sidebar-item py-2">
                                    <a href="../main/app-chat.html" class="d-flex align-items-center">
                                        <div
                                            class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ url('/') }}/assets/images/svgs/icon-dd-chat.svg"
                                                alt="modernize-img" class="img-fluid" width="24"
                                                height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                            <span class="fs-2 d-block text-muted">New messages
                                                arrived</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../main/app-chat.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-message-dots"></i>
                                </span>
                                <span class="hide-menu">{{ __('menu.Chat') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="app-header with-horizontal">
        <nav class="navbar navbar-expand-xl container-fluid p-0">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                    <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-xl-block">
                    <a href="../main/index.html" class="text-nowrap nav-link">
                        <img src="{{ url('/') }}/assets/images/logos/dark-logo.png" class="dark-logo"
                            width="180" alt="modernize-img" />
                        <img src="{{ url('/') }}/assets/images/logos/light-logo.png" class="light-logo"
                            width="180" alt="modernize-img" />
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                <!-- ------------------------------- -->
                <!-- start apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                    <div class="hover-dd">
                        <a class="nav-link" href="javascript:void(0)">
                            {{ __('menu.Apps') }}
                            <span class="mt-1">
                                <i class="ti ti-chevron-down fs-3"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="position-relative">
                                                        <a href="../main/app-chat.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="{{ url('/') }}/assets/images/svgs/icon-dd-chat.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Chat Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New
                                                                    messages arrived</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="position-relative">
                                                        {{-- other --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold d-flex align-items-center lh-1"
                                                    href="javascript:void(0)">
                                                    <i
                                                        class="ti ti-help fs-6 me-2"></i>{{ __('menu.Frequently Asked Questions') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ------------------------------- -->
                <!-- end apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="../main/app-chat.html">{{ __('menu.Chat') }}</a>
                </li>
            </ul>
            <div class="d-block d-xl-none">
                <a href="../main/index.html" class="text-nowrap nav-link">
                    <img src="{{ url('/') }}/assets/images/logos/dark-logo.png" width="180"
                        alt="modernize-img" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                    <a href="javascript:void(0)"
                        class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                        aria-controls="offcanvasWithBothOptions">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <!-- ------------------------------- -->
                        <!-- start language Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                <i class="ti ti-moon moon"></i>
                            </a>
                            <a class="nav-link sun light-layout" href="javascript:void(0)">
                                <i class="ti ti-sun sun"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <img src="{{ url('/') }}/assets/images/flags/flag-{{ LaravelLocalization::getCurrentLocale() }}.png"
                                    alt="modernize-img" width="20px" height="20px"
                                    class="rounded-circle object-fit-cover round-20" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="{{ url('/') }}/assets/images/flags/flag-{{ $localeCode }}.png"
                                                    alt="modernize-img" width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">{{ $properties['native'] }}</p>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end language Dropdown -->
                        <!-- ------------------------------- -->

                        @if (Auth::check())
                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2"
                                    aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                            new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-2.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate
                                                    him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-3.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you
                                                    new message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-4.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your
                                                    earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-5.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new
                                                    tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-6.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted
                                                    from account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ url('/') }}/assets/images/profile/user-7.jpg"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate
                                                    him</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{ url('/') }}/assets/images/profile/user-1.jpg"
                                                class="rounded-circle" width="35" height="35"
                                                alt="modernize-img" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{ url('/') }}/assets/images/profile/user-1.jpg"
                                                class="rounded-circle" width="80" height="80"
                                                alt="modernize-img" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                                <span class="mb-1 d-block">Designer</span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> info@modernize.com
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="../main/page-user-profile.html"
                                                class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-account.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Account
                                                        Settings</span>
                                                </div>
                                            </a>
                                            <a href="../main/app-email.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-inbox.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Messages &
                                                        Emails</span>
                                                </div>
                                            </a>
                                            <a href="../main/app-notes.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{ url('/') }}/assets/images/svgs/icon-tasks.svg"
                                                        alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                    <span class="fs-2 d-block text-body-secondary">To-do and
                                                        Daily Tasks</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                            <div
                                                class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access
                                                        </h5>
                                                        <button class="btn btn-primary">Upgrade</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="m-n4 unlimited-img">
                                                            <img src="{{ url('/') }}/assets/images/backgrounds/unlimited-bg.png"
                                                                alt="modernize-img" class="w-100" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="../main/authentication-login.html"
                                                class="btn btn-outline-primary">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        @else
                            <li class="nav-item">
                                <a class="nav-link position-relative pe-0" href="javascript:void(0)">
                                    <div class="btn btn-outline-primary d-flex align-items-center">
                                        <i class="ti ti-user"></i>
                                        {{ __('menu.Login') }}
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="javascript:void(0)">
                                    <div class="btn btn-primary d-flex align-items-center">
                                        <i class="ti ti-logout"></i>
                                        {{ __('menu.Register') }}
                                    </div>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--  Header End -->
