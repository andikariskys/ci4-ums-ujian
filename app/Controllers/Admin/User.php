<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        return view('admin/user/index', [
            'active' => 'Manajemen Pengguna'
        ]);
    }

    // public function create()
    // {
    //     return view('admin/user/create', [
    //         'active' => 'Manajemen Pengguna'
    //     ]);
    // }
}
