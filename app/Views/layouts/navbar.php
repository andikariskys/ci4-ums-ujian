<?php
$role = 'admin'; // This should be dynamically set based on the logged-in user's role
$menu = [];

if ($role == 'admin') {
    $menu = [
        [
            'label' => 'Dashboard',
            'url' => '/admin/dashboard',
            'icon' => 'ti ti-dashboard'
        ],
        [
            'label' => 'Manajemen Pengguna',
            'url' => '/admin/users',
            'icon' => 'ti ti-users'
        ],
        [
            'label' => 'Penjadwalan Ujian',
            'url' => '/admin/schedule',
            'icon' => 'ti ti-calendar-time'
        ],
        [
            'label' => 'Hasil Ujian',
            'url' => '/admin/results',
            'icon' => 'ti ti-file-check'
        ]
    ];
} elseif ($role == 'pengelola') {
    $menu = [
        [
            'label' => 'Dashboard',
            'url' => '/pengelola/dashboard',
            'icon' => 'ti ti-dashboard'
        ],
        [
            'label' => 'Kelola Tipe Soal',
            'url' => '/pengelola/tipe-soal',
            'icon' => 'ti ti-list-details'
        ],
        [
            'label' => 'Kelola Mata Kuliah',
            'url' => '/pengelola/mata-kuliah',
            'icon' => 'ti ti-book-2'
        ]
    ];
} elseif ($role == 'mahasiswa') {
    $menu = [
        [
            'label' => 'Dashboard',
            'url' => '/mahasiswa/dashboard',
            'icon' => 'ti ti-dashboard'
        ],
        [
            'label' => 'Jadwal Ujian',
            'url' => '/mahasiswa/jadwal',
            'icon' => 'ti ti-calendar'
        ],
        [
            'label' => 'Pre-Test SEB',
            'url' => '/mahasiswa/pretest',
            'icon' => 'ti ti-shield-check'
        ],
        [
            'label' => 'Reset Password SEB',
            'url' => '/mahasiswa/reset-seb',
            'icon' => 'ti ti-lock-reset'
        ],
        [
            'label' => 'Hasil Ujian',
            'url' => '/mahasiswa/hasil',
            'icon' => 'ti ti-file-description'
        ]
    ];
}
?>

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

                <?php foreach ($menu as $item): ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $active == $item['label'] ? 'active' : '' ?>" href="<?= base_url($item['url']) ?>">
                            <span>
                                <i class="<?= esc($item['icon']) ?>"></i>
                            </span>
                            <span class="hide-menu"><?= esc($item['label']) ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </nav>
        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">L200230023</h6>
                    <span class="fs-2 text-uppercase">Andika Risky Septiawan</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
    </div>
</aside>