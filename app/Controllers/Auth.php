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
            $cek = $this->ModelAuth->LoginGuru($username, $password);

            if ($cek) {
                $data = [
                    'nip' => $cek['nip'],
                    'level' => $level,
                    'logged_in' => TRUE
                ];
                session()->set($data);
                session()->setFlashdata('pesan', 'Selamat Datang ' . $cek['nama_guru']);
                return redirect()->to('Dashboard');
            } else {
                session()->setFlashdata('pesan', 'NIP atau Password Salah');
                return redirect()->to('Auth');
            }
        } else if ($level == 2) {
            $cek = $this->ModelAuth->LoginSiswa($username, $password);

            if ($cek) {
                $data = [
                    'nisn' => $cek['nisn'],
                    'level' => $level,
                    'logged_in' => TRUE
                ];
                session()->set($data);
                session()->setFlashdata('pesan', 'Selamat Datang ' . $cek['nama_siswa']);
                return redirect()->to('Dashboard');
            } else {
                session()->setFlashdata('pesan', 'NISN atau Password Salah');
                return redirect()->to('Auth');
            }
        } else if ($level == 3) { // Penambahan untuk level 3 (Admin)
            $cek = $this->ModelAuth->LoginAdmin($username, $password);

            if ($cek) {
                $data = [
                    'username' => $cek['username'],
                    'level' => $level,
                    'logged_in' => TRUE
                ];
                session()->set($data);
                session()->setFlashdata('pesan', 'Selamat Datang Admin');
                return redirect()->to('Dashboard');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Admin Salah');
                return redirect()->to('Auth');
            }
        }
    }

    public function Logout()
    {
        session()->destroy();
        return redirect()->to('Auth');
    }
}