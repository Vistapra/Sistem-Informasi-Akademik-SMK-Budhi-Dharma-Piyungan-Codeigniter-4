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
    // Mendapatkan nilai 'username', 'level', dan 'password' dari POST data
    $username = $this->request->getPost('username');
    $level = $this->request->getPost('level');
    $password = $this->request->getPost('password');

    // Memeriksa nilai 'level'
    if ($level == 1) {
        // Jika 'level' adalah 1, maka melakukan proses login sebagai guru
        // Memanggil fungsi LoginGuru() dari ModelAuth untuk memeriksa kecocokan username dan password guru
        $cek = $this->ModelAuth->LoginGuru($username, $password);

        // Memeriksa apakah data guru berhasil ditemukan (login berhasil)
        if ($cek) {
            // Jika login berhasil, data guru disimpan ke dalam session dan level diatur sebagai 1 (guru)
            $data = [
                'nip' => $cek['nip'],
                'level' => $level,
                'logged_in' => TRUE
            ];

            // Menyimpan data ke dalam session
            session()->set($data);

            session()->setFlashdata('pesan', 'Anda Login Sebagai Guru');
            return redirect()->to('Berita');
        } else {
            // Jika login gagal, menampilkan pesan kesalahan dan mengarahkan kembali ke halaman 'Auth' (halaman login)
            session()->setFlashdata('pesan', 'NIP atau Password Salah');
            return redirect()->to('Auth');
        }
    } else if ($level == 2) {
        // Jika 'level' adalah 2, maka melakukan proses login sebagai siswa
        // Memanggil fungsi LoginSiswa() dari ModelAuth untuk memeriksa kecocokan username dan password siswa
        $cek = $this->ModelAuth->LoginSiswa($username, $password);

        // Memeriksa apakah data siswa berhasil ditemukan (login berhasil)
        if ($cek) {
            // Jika login berhasil, data siswa disimpan ke dalam session dan level diatur sebagai 2 (siswa)
            $data = [
                'nisn' => $cek['nisn'],
                'level' => $level,
                'logged_in' => TRUE
            ];

            // Menyimpan data ke dalam session
            session()->set($data);

            session()->setFlashdata('pesan', 'Anda Login Sebagai Siswa');
            return redirect()->to('Berita');
        } else {
            // Jika login gagal, menampilkan pesan kesalahan dan mengarahkan kembali ke halaman 'Auth' (halaman login)
            session()->setFlashdata('pesan', 'NISN atau Password Salah');
            return redirect()->to('Auth');
        }
    } else {
        // Jika 'level' tidak sesuai dengan nilai yang diharapkan (bukan 1 atau 2), menampilkan pesan kesalahan dan mengarahkan kembali ke halaman 'Auth' (halaman login)
        session()->setFlashdata('pesan', 'Username atau Password Salah');
        return redirect()->to('Auth');
    }
}


    public function Logout()
    {
        session()->destroy();
        return redirect()->to('Auth');
    }
}