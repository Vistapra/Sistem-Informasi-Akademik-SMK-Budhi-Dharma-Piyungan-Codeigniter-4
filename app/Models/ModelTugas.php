<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTugas extends Model
{
    public function AllData()
    {
    return $this->db
        ->table('tugas')
        ->join('kelas AS k', 'k.id_kelas = tugas.id_kelas', 'left')
        ->join('mapel AS m', 'm.id_mapel = tugas.id_mapel', 'left')
        ->get()
        ->getResultArray();
    }

public function DetailData($id_tugas)
    {
    return $this->db
        ->table('tugas')
        ->join('kelas AS k', 'k.id_kelas = tugas.id_kelas', 'left')
        ->join('mapel AS m', 'm.id_mapel = tugas.id_mapel', 'left')
        ->where('id_tugas', $id_tugas)
        ->get()
        ->getRowArray();
    }
    public function TambahData($data)
    {
        return $this->db
            ->table('tugas')
            ->insert($data);
    }

    public function UbahData($id_tugas, $data)
    {
        return $this->db
            ->table('tugas')
            ->where('id_tugas', $id_tugas)
            ->update($data);
    }

    public function HapusData($id_tugas)
    {
        return $this->db
            ->table('tugas')
            ->where('id_tugas', $id_tugas)
            ->delete();
    }
}