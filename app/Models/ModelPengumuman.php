<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengumuman extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('pengumuman')
            ->join('guru', 'guru.id_guru = pengumuman.id_guru')
            ->get()
            ->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('pengumuman')->insert($data);
    }

    public function DetailData($id_pengumuman)
    {
        return $this->db
            ->table('pengumuman')
            ->where('id_pengumuman', $id_pengumuman)
            ->join('guru', 'guru.id_guru = pengumuman.id_guru')
            ->get()
            ->getRowArray();
    }
    public function GetLatestPengumuman($limit = 5)
    {
        return $this->db
            ->table('pengumuman')
            ->join('guru', 'pengumuman.id_guru = guru.id_guru')
            ->orderBy('tgl_pengumuman', 'DESC')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }

    public function UbahData($data)
    {
        return $this->db
            ->table('pengumuman')
            ->where('id_pengumuman', $data['id_pengumuman'])
            ->update($data);
    }

    public function HapusData($id_pengumuman)
    {
        return $this->db
            ->table('pengumuman')
            ->where('id_pengumuman', $id_pengumuman)
            ->delete();
    }
}