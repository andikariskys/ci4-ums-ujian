<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    private $users = [
        [
            'id' => '79626eb1-ac5d-440b-819f-2566abc41b48',
            'name' => 'Super Admin',
            'username' => 'admin',
            'email' => 'admin@ums.ac.id',
            'role' => 'admin',
            'role_badge' => 'text-bg-secondary',
            'status' => 'Aktif',
            'status_badge' => 'bg-success-subtle text-success',
            'gender' => 'Laki-laki',
        ],
        [
            'id' => 'b1c2d3e4-f5g6-7890-h1i2-j3k4l5m6n7o8',
            'name' => 'Andika Risky Septiawan',
            'username' => 'L200230023',
            'email' => 'l200230023@student.ums.ac.id',
            'role' => 'mahasiswa',
            'role_badge' => 'text-bg-secondary',
            'status' => 'Aktif',
            'status_badge' => 'bg-success-subtle text-success',
            'gender' => 'Laki-laki',
        ],
        [
            'id' => 'c1d2e3f4-g5h6-7890-i1j2-k3l4m5n6o7p8',
            'name' => 'Alta Moda Kristin Naro',
            'username' => 'altamoda',
            'email' => 'altamoda@ums.ac.id',
            'role' => 'pengelola',
            'role_badge' => 'text-bg-secondary',
            'status' => 'Nonaktif',
            'status_badge' => 'bg-danger-subtle text-danger',
            'gender' => 'Perempuan',
        ],
    ];

    public function index()
    {
        return view('admin/user/index', [
            'active' => 'Manajemen Pengguna',
            'users' => $this->users
        ]);
    }

    public function create()
    {
        return view('admin/user/create_edit', [
            'active' => 'Manajemen Pengguna'
        ]);
    }

    public function edit($id)
    {
        $index = array_search($id, array_column($this->users, 'id'));
        $user = [];

        if ($index !== false) {
            $user = $this->users[$index];
        } else {
            return redirect()->to(route_to('admin_users'))->with('error', 'Pengguna tidak ditemukan.');
        }

        return view('admin/user/create_edit', [
            'active' => 'Manajemen Pengguna',
            'user' => $user
        ]);
    }
}
