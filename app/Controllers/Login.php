<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {

            $data = [
                'title' => 'Halaman Login | SMA Negeri 1 Bantarsari',
                'validation' => \Config\Services::validation()
            ];
            return view('login/a_login', $data);
        } else {
            view('home/site');
        }
    }
}
