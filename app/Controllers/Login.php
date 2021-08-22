<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Login | SMA Negeri 1 Bantarsari'
        ];
        return view('login/a_login', $data);
    }
}
