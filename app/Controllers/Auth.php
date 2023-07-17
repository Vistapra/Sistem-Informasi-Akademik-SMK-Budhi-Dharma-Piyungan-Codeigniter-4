<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    private $modelAuth;

    public function __construct()
    {
        $this->modelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = [
            'judul' => 'Login',
            'subjudul' => '',
        ];
        return view('Frontend/v_login', $data);
    }

    public function cekLogin()
    {
        $username = $this->request->getPost('username');
        $level = $this->request->getPost('level');
        $password = $this->request->getPost('password');

        if ($level == 1) {
            $cek = $this->modelAuth->LoginUser($username, $password);
            if ($cek) {
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                return redirect()->to('Berita');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Salah');
                return redirect()->to('Auth')->withInput();
            }
        } else {
            return redirect()->to('Auth');
        }
    }

    public function Logout()
    {
        session()->destroy();
        return redirect()->to('Auth');
    }
}