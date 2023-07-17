<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('kelas')
            ->get()
            ->getResultArray();
    }
    public function tambahData($data)
    {
        return $this->db->table('kelas')->insert($data);
    }
    public function ubahData($data)
    {
        return $this->db
            ->table('kelas')
            ->where('id_kelas', $data['id_kelas'])
            ->update($data);
    }

    public function hapusData($id_kelas)
    {
        return $this->db
            ->table('kelas')
            ->where('id_kelas', $id_kelas)
            ->delete();
    }
}