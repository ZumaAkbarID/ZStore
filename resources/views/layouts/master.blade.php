<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {!! seo($SEOData ?? null) !!}

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/styles.css" />

</head>

<body class="link-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ url('/') }}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        @includeWhen(Auth::check(), 'layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.topbar')

            @includeWhen(Auth::check(), 'layouts.horizontal-left-sidebar')

            <div class="body-wrapper">
                <div class="container">

                    {{-- <div class="card position-relative overflow-hidden"> --}}
                    <div class="position-relative overflow-hidden">
                        <div class="shop-part d-flex w-100">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center gap-6 mb-4">
                                    <h5 class="fs-5 mb-0 d-lg-block">{{ __('menu.Products') }}</h5>
                                    <form class="position-relative">
                                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                            placeholder="Search Product">
                                        <i
                                            class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                    </form>
                                </div>
                                <div class="row">

                                    @for ($i = 0; $i < 20; $i++)
                                        <div class="col-xs-6 col-sm-6 col-lg-4 col-xxl-3 col-6">
                                            <div class="card hover-img overflow-hidden">
                                                <a href="../main/eco-shop-detail.html">
                                                    <div class="position-relative">
                                                        <img src="https://static-src.vocagame.com/gopay/valorant-fe81-original.webp"
                                                            class="card-img-top rounded" alt="image item">
                                                    </div>
                                                    <div class="card-body pt-3 p-4">
                                                        <h6 class="fs-4 text-truncate">Super Gamesdsfdsfsdfsdf</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endfor

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @include('partials.settings') --}}

        </div>

        <!--  Search Bar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                    <div class="modal-header border-bottom">
                        <input type="search" class="form-control fs-3" placeholder="{{ __('menu.Search here') }}"
                            id="search" />
                        <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                            <i class="ti ti-x fs-5 ms-3"></i>
                        </a>
                    </div>
                    <div class="modal-body message-body" data-simplebar="">
                        <ul class="list mb-0 py-2">
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="javascript:void(0)">
                                    <span class="d-block">Modern</span>
                                    <span class="text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="{{ url('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ url('/') }}/assets/js/theme/app.init.js"></script>
    <script src="{{ url('/') }}/assets/js/theme/theme.js"></script>
    <script src="{{ url('/') }}/assets/js/theme/app.min.js"></script>
    <script src="{{ url('/') }}/assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
