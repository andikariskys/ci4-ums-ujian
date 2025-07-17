<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    private $users = [
        // email => [password, name, role]
        'admin'      => ['admin123', 'Admin User', 'admin'],
        'adminps'    => ['adminps123', 'Admin + Pengelola', 'admin_ps'],
        'pengelola'  => ['pengelola123', 'Pengelola Soal', 'pengelola'],
        'mahasiswa'  => ['mahasiswa123', 'Mahasiswa A', 'mahasiswa'],
    ];

    public function login()
    {
        return view('login');
    }

    public function checkLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (!isset($this->users[$username])) {
            return redirect()->back()->with('invalid_username', 'Username salah atau tidak ditemukan');
        }

        if ($this->users[$username][0] !== $password) {
            return redirect()->back()->with('invalid_password', 'Password salah silakan coba lagi')->with('username', $username);
        }

        session()->set([
            'username' => $username,
            'name'  => $this->users[$username][1],
            'role'  => $this->users[$username][2],
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
