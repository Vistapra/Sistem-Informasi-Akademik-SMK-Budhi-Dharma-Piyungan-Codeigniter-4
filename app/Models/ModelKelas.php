<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('kelas')->get()->getResultArray();
    }
    public function DetailData($id_kelas)
    {
        return $this->db
            ->table('kelas')->where('id_kelas', $id_kelas)->get()->getRowArray();
    }
    public function TambahData($data)
    {
        return $this->db->table('kelas')->insert($data);
    }
    public function UbahData($data)
    {
        return $this->db
            ->table('kelas')->where('id_kelas', $data['id_kelas'])->update($data);
    }

    public function HapusData($id_kelas)
    {
        return $this->db
            ->table('kelas')->where('id_kelas', $id_kelas)->delete();
    }
}