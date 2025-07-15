<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://star2.ums.ac.id/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Modernize Bootstrap Admin</title>
</head>

<body>
    <div class="preloader">
        <img src="https://star2.ums.ac.id/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <aside class="left-sidebar with-vertical">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="https://star2.ums.ac.id/" class="text-nowrap logo-img">
                        <img src="https://star2.ums.ac.id/assets/images/logos/logo-light.png" class="dark-logo" alt="Logo-Dark">
                        <img src="https://star2.ums.ac.id/assets/images/logos/logo-dark.png" class="light-logo" alt="Logo-light" style="display: none;">
                    </a>
                    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                                <span>
                                    <i class="ti ti-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link active" href="main/index2.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">eCommerce</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="main/index3.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-currency-dollar"></i>
                                </span>
                                <span class="hide-menu">NFT</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">PAGES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="main/page-pricing.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-currency-dollar"></i>
                                </span>
                                <span class="hide-menu">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="main/page-faq.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-help"></i>
                                </span>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="main/page-account-settings.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-circle"></i>
                                </span>
                                <span class="hide-menu">Account Setting</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
                    <div class="hstack gap-3">
                        <div class="john-img">
                            <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                        </div>
                        <div class="john-title">
                            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                            <span class="fs-2">Designer</span>
                        </div>
                        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                            <i class="ti ti-power fs-6"></i>
                        </button>
                    </div>
                </div>

            </div>
        </aside>
        <div class="page-wrapper">
            <header class="topbar">
                <div class="with-vertical">
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="d-block d-lg-none py-4">
                            <a href="main/index.html" class="text-nowrap logo-img">
                                <img src="https://star2.ums.ac.id/assets/images/logos/logo-light.png" class="dark-logo" alt="Logo-Dark">
                                <img src="https://star2.ums.ac.id/assets/images/logos/logo-dark.png" class="light-logo" alt="Logo-light" style="display: none;">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                        <i class="ti ti-moon moon"></i>
                                    </a>
                                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                                        <i class="ti ti-sun sun"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
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
                                <a href="main/index.html" class="text-nowrap nav-link">
                                    <img src="assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="modernize-img" />
                                    <img src="assets/images/logos/light-logo.svg" class="light-logo" width="180" alt="modernize-img" />
                                </a>
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="main/index.html" class="text-nowrap nav-link">
                                <img src="assets/images/logos/dark-logo.svg" width="180" alt="modernize-img" />
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                    </nav>
                </div>
            </header>

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card bg-primary-subtle shadow-none">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="round rounded text-bg-primary d-flex align-items-center justify-content-center">
                                            <i class="cc BTC text-white fs-7" title="BTC"></i>
                                        </div>
                                        <h6 class="mb-0 ms-3">BTC</h6>
                                        <div class="ms-auto text-primary d-flex align-items-center">
                                            <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                                            <span class="fs-2 fw-bold">+ 2.30%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <h3 class="mb-0 fw-semibold fs-7">0.1245</h3>
                                        <span class="fw-bold">$1,015.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card bg-danger-subtle shadow-none">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="round rounded text-bg-danger d-flex align-items-center justify-content-center">
                                            <i class="cc ETH text-white fs-7" title="ETH"></i>
                                        </div>
                                        <h6 class="mb-0 ms-3">ETH</h6>
                                        <div class="ms-auto text-danger d-flex align-items-center">
                                            <i class="ti ti-trending-up text-danger fs-6 me-1"></i>
                                            <span class="fs-2 fw-bold">+ 3.20%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <h3 class="mb-0 fw-semibold fs-7">0.5620</h3>
                                        <span class="fw-bold">$2,110.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card bg-success-subtle shadow-none">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="round rounded text-bg-success d-flex align-items-center justify-content-center">
                                            <i class="cc LTC text-white fs-7" title="LTC"></i>
                                        </div>
                                        <h6 class="mb-0 ms-3">LTC</h6>
                                        <div class="ms-auto text-info d-flex align-items-center">
                                            <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                                            <span class="fs-2 fw-bold text-success">+ 3.20%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <h3 class="mb-0 fw-semibold fs-7">1.200</h3>
                                        <span class="fw-bold">$1,100.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card bg-warning-subtle shadow-none">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="round rounded text-bg-warning d-flex align-items-center justify-content-center">
                                            <i class="cc XRP text-white fs-7" title="XRP"></i>
                                        </div>
                                        <h6 class="mb-0 ms-3">XRP</h6>
                                        <div class="ms-auto text-info d-flex align-items-center">
                                            <i class="ti ti-trending-down text-warning fs-6 me-1"></i>
                                            <span class="fs-2 fw-bold text-warning">+ 2.20%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <h3 class="mb-0 fw-semibold fs-7">1.150</h3>
                                        <span class="fw-bold">$2,150.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/js/theme/app.init.js"></script>
    <script src="assets/js/theme/theme.js"></script>
    <script src="assets/js/theme/app.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
