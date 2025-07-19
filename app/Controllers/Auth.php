<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    private $users = [
        [
            'username' => 'admin',
            'password' => 'admin123',
            'name' => 'Admin User',
            'role' => 'admin'
        ],
        [
            'username' => 'adminps',
            'password' => 'adminps123',
            'name' => 'Admin + Pengelola',
            'role' => 'admin_ps'
        ],
        [
            'username' => 'pengelola',
            'password' => 'pengelola123',
            'name' => 'Pengelola Soal',
            'role' => 'pengelola'
        ],
        [
            'username' => 'mahasiswa',
            'password' => 'mahasiswa123',
            'name' => 'Mahasiswa A',
            'role' => 'mahasiswa'
        ],
    ];

    public function login()
    {
        return view('login');
    }

    public function checkLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $dataUser = null;
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                $dataUser = $user;
                break;
            }
        }

        if (!$dataUser) {
            return redirect()->back()->with('invalid_username', 'Username salah atau tidak ditemukan');
        }

        if ($dataUser['password'] !== $password) {
            return redirect()->back()->with('invalid_password', 'Password salah silakan coba lagi')->with('username', $username);
        }

        session()->set([
            'username' => $username,
            'name'  => $dataUser['name'],
            'role'  => $dataUser['role'],
            'isLoggedIn' => true
        ]);
        
        if (session()->get('role') === 'admin') {
            return redirect()->to(route_to('admin_dashboard'));
        } elseif (session()->get('role') === 'admin_ps') {
            return redirect()->to(route_to('adminps_dashboard'));
        } elseif (session()->get('role') === 'pengelola') {
            return redirect()->to(route_to('pengelola_dashboard'));
        } elseif (session()->get('role') === 'mahasiswa') {
            return redirect()->to(route_to('mahasiswa_dashboard'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('login'));
    }
}
