<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'guru'; // Menentukan nama tabel yang akan digunakan oleh model ini

    public function LoginGuru($nip, $password)
    {
        $user = $this->where('nip', $nip)->first(); // Mencari baris dalam tabel 'guru' dengan kolom 'nip' yang sama dengan nilai $nip

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Mengembalikan $user jika password cocok dengan password yang tersimpan dalam baris tersebut
        }

        return null; // Mengembalikan null jika tidak ada kecocokan atau $user tidak ada
    }

    public function LoginSiswa($nisn, $password)
    {
        $user = $this->db->table('siswa') // Mengakses tabel 'siswa' menggunakan objek $this->db
            ->where('nisn', $nisn) // Mencari baris dalam tabel dengan kolom 'nisn' yang sama dengan nilai $nisn
            ->get() // Menjalankan query dan mendapatkan hasilnya
            ->getRowArray(); // Mengambil hasil query sebagai array asosiatif dari baris pertama yang sesuai

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Mengembalikan $user jika password cocok dengan password yang tersimpan dalam baris tersebut
        }

        return null; // Mengembalikan null jika tidak ada kecocokan atau $user tidak ada
    }

    public function LoginAdmin($username, $password)
    {
        $user = $this->db->table('admin') // Mengakses tabel 'admin' menggunakan objek $this->db
            ->where('username', $username) // Mencari baris dalam tabel dengan kolom 'username' yang sama dengan nilai $username
            ->get() // Menjalankan query dan mendapatkan hasilnya
            ->getRowArray(); // Mengambil hasil query sebagai array asosiatif dari baris pertama yang sesuai

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Mengembalikan $user jika password cocok dengan password yang tersimpan dalam baris tersebut
        }

        return null; // Mengembalikan null jika tidak ada kecocokan atau $user tidak ada
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT); // Mengembalikan hash password menggunakan algoritma default yang ditentukan oleh PASSWORD_DEFAULT
    }
}