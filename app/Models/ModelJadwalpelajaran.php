<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwalpelajaran extends Model
{
    public function AllData()
    {
        return $this->db
            ->table('jadwalpelajaran')
            ->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas', 'left')
            ->join('mapel', 'jadwalpelajaran.id_mapel = mapel.id_mapel', 'left')
            ->join('guru', 'jadwalpelajaran.id_guru = guru.id_guru', 'left')
            ->get()
            ->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('jadwalpelajaran')->insert($data);
    }

    public function DetailData($id_jadwal)
    {
        return $this->db
            ->table('jadwalpelajaran')
            ->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas', 'left')
            ->join('mapel', 'jadwalpelajaran.id_mapel = mapel.id_mapel', 'left')
            ->join('guru', 'jadwalpelajaran.id_guru = guru.id_guru', 'left')
            ->where('jadwalpelajaran.id_jadwal', $id_jadwal)
            ->get()->getRowArray();
    }

    public function UbahData($data)
    {
        return $this->db
            ->table('jadwalpelajaran')
            ->where('id_jadwal', $data['id_jadwal'])
            ->update($data);
    }

    public function HapusData($id_jadwal)
    {
        return $this->db
            ->table('jadwalpelajaran')
            ->where('id_jadwal', $id_jadwal)
            ->delete();
    }
}