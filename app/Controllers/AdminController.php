<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Sistem Pengelolaan Penjualan Buku',
        ];
        return view('admin/template', $data);
    }
}
