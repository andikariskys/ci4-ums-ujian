<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login', ['as' => 'login']);

$routes->post('login', 'Auth::checkLogin', ['as' => 'check_login']);
$routes->get('logout', 'Auth::logout', ['as' => 'logout']);

$routes->group('admin', ['filter' => ['auth', 'role:admin']], function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index', ['as' => 'admin_dashboard']);
    $routes->get('users', 'Admin\User::index', ['as' => 'admin_users']);
    $routes->get('reports', 'Admin\Reports::index', ['as' => 'admin_reports']);
});
$routes->group('adminps', ['filter' => ['auth', 'role:admin_ps']], function ($routes) {
    $routes->get('/', 'Adminps\Dashboard::index', ['as' => 'adminps_dashboard']);
    $routes->get('users', 'Admin\User::index', ['as' => 'adminps_users']);
    $routes->get('reports', 'Admin\Reports::index', ['as' => 'adminps_reports']);
    $routes->get('soal', 'Pengelola\Soal::index', ['as' => 'pengelola_soal']);
    $routes->get('ujian', 'Pengelola\Ujian::index', ['as' => 'pengelola_ujian']);
});
$routes->group('pengelola', ['filter' => ['auth', 'role:pengelola']], function ($routes) {
    $routes->get('/', 'Pengelola\Dashboard::index', ['as' => 'pengelola_dashboard']);
    $routes->get('soal', 'Pengelola\Soal::index', ['as' => 'pengelola_soal']);
    $routes->get('ujian', 'Pengelola\Ujian::index', ['as' => 'pengelola_ujian']);
});
$routes->group('mahasiswa', ['filter' => ['auth', 'role:mahasiswa']], function ($routes) {
    $routes->get('/', 'Mahasiswa\Dashboard::index', ['as' => 'mahasiswa_dashboard']);
    $routes->get('ujian', 'Mahasiswa\Ujian::index', ['as' => 'mahasiswa_ujian']);
    $routes->get('hasil', 'Mahasiswa\Hasil::index', ['as' => 'mahasiswa_hasil']);
});

$routes->set404Override(function () {
    return view('error_404');
});