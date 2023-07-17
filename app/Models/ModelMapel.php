<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMapel extends Model
{
    protected $table = 'mapel';
    protected $primaryKey = 'id_mapel';
    protected $allowedFields = ['kode_mapel', 'mapel', 'visi_misi'];

    public function AllData()
    {
        return $this->findAll();
    }

    public function DetailData($id_mapel)
    {
        return $this->where('id_mapel', $id_mapel)
            ->first();
    }

    public function tambahData($data)
    {
        return $this->insert($data);
    }

    public function ubahData($data)
    {
        return $this->update($data['id_mapel'], $data);
    }

    public function hapusData($id_mapel)
    {
        return $this->delete($id_mapel);
    }
}