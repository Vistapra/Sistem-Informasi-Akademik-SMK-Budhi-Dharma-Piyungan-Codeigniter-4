<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'guru';

    public function LoginGuru ($nip, $password)
    {
        return $this->where('nip', $nip)
                    ->where('password', $password)
                    ->get()
                    ->getRowArray();
    }
    public function LoginSiswa($nisn, $password)
    {
        return $this->db->table('siswa')
                        ->where('nisn', $nisn)
                        ->where('password', $password)
                        ->get()
                        ->getRowArray();
    }
}