<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstrakurikuller extends Model
{
    public function AllData()
    {
        return $this->db->table('ekstra')
        ->join('guru', 'ekstra.id_guru = guru.id_guru', 'left')
        ->orderBy('nama_ekstra', 'ASC')->get()->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('ekstra')->insert($data);
    }

    public function DetailData($id_ekstra)
    {
        return $this->db->table('ekstra')
            ->join('guru', 'ekstra.id_guru = guru.id_guru', 'left')
            ->where('id_ekstra', $id_ekstra)->get()->getRowArray();
    }

    public function UbahData($id_ekstra, $data)
    {
        return $this->db->table('ekstra')->where('id_ekstra', $id_ekstra)->update($data);
    }

    public function HapusData($id_ekstra)
    {
        return $this->db->table('ekstra')->where('id_ekstra', $id_ekstra)->delete();
    }
}