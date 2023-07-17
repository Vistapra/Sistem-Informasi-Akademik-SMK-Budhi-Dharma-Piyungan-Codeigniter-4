<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJurusan extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('jurusan')
            ->get()
            ->getResultArray();
    }
    public function tambahData($data)
    {
        return $this->db->table('jurusan')->insert($data);
    }
    public function DetailData($id_jurusan)
    {
        return $this->db
            ->table('jurusan')
            ->where('id_jurusan', $id_jurusan)
            ->get()
            ->getRowArray();
    }
    public function ubahData($data)
    {
        return $this->db
            ->table('jurusan')
            ->where('id_jurusan', $data['id_jurusan'])
            ->update($data);
    }

    public function hapusData($id_jurusan)
    {
        return $this->db
            ->table('jurusan')
            ->where('id_jurusan', $id_jurusan)
            ->delete();
    }
}