<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMapel extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('mapel')->get()->getResultArray();
    }
    public function DetailData($id_mapel)
    {
        return $this->db
            ->table('mapel')->where('id_mapel', $id_mapel)->get()->getRowArray();
    }
    public function TambahData($data)
    {
        return $this->db->table('mapel')->insert($data);
    }
    public function UbahData($data)
    {
        return $this->db
            ->table('mapel')->where('id_mapel', $data['id_mapel'])->update($data);
    }

    public function HapusData($id_mapel)
    {
        return $this->db
            ->table('mapel')->where('id_mapel', $id_mapel)->delete();
    }
}