<!-- Sidebar Start -->
<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->

        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="../main/index.html" class="text-nowrap logo-img">
                <img src="{{ url('/') }}/assets/images/logos/dark-logo.png" class="dark-logo" alt="Logo-Dark" />
                <img src="{{ url('/') }}/assets/images/logos/light-logo.png" class="light-logo" alt="Logo-light" />
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ---------------------------------- -->
                <!-- Home -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{ __('Home') }}</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                        <span>
                            <i class="ti ti-aperture"></i>
                        </span>
                        <span class="hide-menu">Modern</span>
                    </a>
                </li>
            </ul>
        </nav>

        @isset($user)
            <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
                <div class="hstack gap-3">
                    <div class="john-img">
                        <img src="{{ url('/') }}/assets/images/profile/user-1.jpg" class="rounded-circle"
                            width="40" height="40" alt="modernize-img" />
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">{{ $user->name }}</h6>
                        <span class="fs-2">{{ $user->role }}</span>
                    </div>
                    <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                        aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
        @endisset

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
    </div>
</aside>
<!--  Sidebar End -->
