<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://star2.ums.ac.id/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" />
    <title><?= $active ?? 'Sistem Ujian Online' ?></title>
</head>

<body>
    <div class="preloader">
        <img src="https://star2.ums.ac.id/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">

            <?= view('layouts/navbar', ['active' => $active]) ?>

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
                                    <img src="<?= base_url('assets/images/logos/dark-logo.svg') ?>" class="dark-logo" width="180" alt="modernize-img" />
                                    <img src="<?= base_url('assets/images/logos/light-logo.svg') ?>" class="light-logo" width="180" alt="modernize-img" />
                                </a>
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="main/index.html" class="text-nowrap nav-link">
                                <img src="<?= base_url('assets/images/logos/dark-logo.svg') ?>" width="180" alt="modernize-img" />
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

                    <?= $this->renderSection('content'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/theme/app.init.js') ?>"></script>
    <script src="<?= base_url('assets/js/theme/theme.js') ?>"></script>
    <script src="<?= base_url('assets/js/theme/app.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>