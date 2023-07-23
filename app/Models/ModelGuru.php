<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    public function AllData()
    {
        return $this->db->table('guru')->orderBy('kode_guru', 'ASC')->get()->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('guru')->insert($data);
    }

    public function DetailData($id_guru)
    {
        return $this->db->table('guru')
            ->where('id_guru', $id_guru)->get()->getRowArray();
    }

    public function UbahData($id_guru, $data)
    {
        return $this->db->table('guru')->where('id_guru', $id_guru)->update($data);
    }

    public function HapusData($id_guru)
    {
        return $this->db->table('guru')->where('id_guru', $id_guru)->delete();
    }
}