<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    private $ModelAuth;

    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
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
            // Memanggil method LoginUser dari Model ModelAuth
            $cek = $this->ModelAuth->LoginUser($username, $password);

            if ($cek) {
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                return redirect()->to('Berita');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Salah');
                return redirect()->to('Auth')->withInput();
            }
        } else if ($level == 2) { // Menambahkan kondisi untuk level guru
            // Memanggil method LoginGuru dari Model ModelAuth
            $cek = $this->ModelAuth->LoginGuru($username, $password);

            if ($cek) {
                session()->set('nip', $cek['nip']); // Menyimpan nip di session
                session()->set('level', $cek['level']);
                return redirect()->to('Berita');
            } else {
                session()->setFlashdata('pesan', 'nip atau Password Salah');
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