<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Sistem Ujian Online</title>
</head>

<body style="background-image: url('https://news.ums.ac.id/id/wp-content/uploads/sites/2/2025/04/fotoweb-2-13.jpg');">
    <!-- Preloader -->
    <div class="preloader">
        <img src="assets/images/backgrounds/bg-siti-walidah.webp" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="main/index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <img src="https://star2.ums.ac.id/assets/images/logos/logo-light.png" class="dark-logo" alt="Logo-Dark">
                                    <img src="https://star2.ums.ac.id/assets/images/logos/logo-dark.png" class="light-logo" alt="Logo-light" style="display: none;">
                                </a>
                                <h5 class="fs-5 text-body-secondary">Selamat datang di <span class="fw-bolder">Lorem</span>.</h5>
                                <form action="<?= route_to('check_login') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control <?php if (session()->getFlashdata('invalid_email')): ?>is-invalid<?php endif; ?>" id="exampleInputUsername1" aria-describedby="emailHelp" required autocomplete="off">
                                        <div class="invalid-feedback">
                                            <?= session()->getFlashdata('invalid_email') ?>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control <?php if (session()->getFlashdata('invalid_password')): ?>is-invalid<?php endif; ?>" id="exampleInputPassword1" required autocomplete="off">
                                        <div class="invalid-feedback">
                                            <?= session()->getFlashdata('invalid_password') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-outline btn-outline-danger bg-danger-subtle text-danger w-100 py-8 mb-4 rounded-2">Login</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" disabled>Login CAS</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="alert alert-warning mb-0" role="alert">
                                    <strong>Informasi Login!</strong> Berikut adalah informasi login yang dapat digunakan:
                                    <ol>
                                        <li>Admin: <strong>admin</strong> / <strong>admin123</strong></li>
                                        <li>Admin + Pengelola: <strong>adminps</strong> / <strong>adminps123</strong></li>
                                        <li>Pengelola Soal: <strong>pengelola</strong> / <strong>pengelola123</strong></li>
                                        <li>Mahasiswa A: <strong>mahasiswa</strong> / <strong>mahasiswa123</strong></li>
                                    </ol>
                                    <p class="mb-0">Silakan gunakan informasi tersebut untuk login ke sistem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function handleColorTheme(e) {
                document.documentElement.setAttribute("data-color-theme", e);
            }
        </script>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/js/theme/app.init.js"></script>
    <script src="assets/js/theme/theme.js"></script>
    <script src="assets/js/theme/app.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>