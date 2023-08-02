<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function loginGuru($nip, $password)
    {
        $user = $this->db->table('guru')
        ->where('nip', $nip)
            ->get()
            ->getRowArray();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    public function loginSiswa($nisn, $password)
    {
        $user = $this->db->table('siswa')
            ->where('nisn', $nisn)
            ->get()
            ->getRowArray();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    public function loginAdmin($username, $password)
    {
        $user = $this->db->table('admin')
            ->where('username', $username)
            ->get()
            ->getRowArray();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}