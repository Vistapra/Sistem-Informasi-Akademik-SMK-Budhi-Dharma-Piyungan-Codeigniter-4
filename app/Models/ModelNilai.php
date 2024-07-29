<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('nilai')
            ->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'left')
            ->join('mapel', 'nilai.id_mapel = mapel.id_mapel', 'left')
            ->get()
            ->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('nilai')->insert($data);
    }

    public function DetailData($id_nilai)
    {
        return $this->db
            ->table('nilai')
            ->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'left')
            ->join('mapel', 'nilai.id_mapel = mapel.id_mapel', 'left')
            ->where('nilai.id_nilai', $id_nilai)
            ->get()
            ->getRowArray();
    }

    public function UbahData($data)
    {
        return $this->db
            ->table('nilai')
            ->where('id_nilai', $data['id_nilai'])
            ->update($data);
    }

    public function HapusData($id_nilai)
    {
        return $this->db
            ->table('nilai')
            ->where('id_nilai', $id_nilai)
            ->delete();
    }
}