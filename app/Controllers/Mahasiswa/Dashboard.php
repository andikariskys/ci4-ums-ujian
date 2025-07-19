<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        // nanti pada prdocution, data ini akan diambil dari database/rest api
        $events = [
            [
            'kode' => 'TIF3221319',
            'title' => 'Algoritma dan Struktur Data',
            'ruang' => 'J0408, 3',
            'nomor_kursi' => 15,
            'start' => '2025-07-16T09:00:00',
            'session' => 'Sesi 1',
            'pengampu' => 'Ihsan Cahyo Utomo',
            'username' => 'abcdefgh',
            'password' => '12345678',
            ],
            [
            'kode' => 'TIF3221320',
            'title' => 'Pemrograman Web',
            'ruang' => 'Lab Komputer, 2',
            'nomor_kursi' => 22,
            'start' => '2025-07-18T13:00:00',
            'session' => 'Sesi 3',
            'pengampu' => 'Dewi Lestari',
            'username' => 'ijklmn',
            'password' => null,
            ],
            [
            'kode' => 'TIF3221321',
            'title' => 'Rekayasa Perangkat Lunak',
            'ruang' => 'JSEM2, 10',
            'nomor_kursi' => 8,
            'start' => '2025-07-22T10:00:00',
            'session' => 'Sesi 2',
            'pengampu' => 'Budi Santoso',
            'username' => 'opqrstu',
            'password' => 'abcdefgh',
            ],
        ];

        return view('mahasiswa/dashboard', [
            'active' => 'Dashboard',
            'calendarEventsList' => $events
        ]);
    }
}
