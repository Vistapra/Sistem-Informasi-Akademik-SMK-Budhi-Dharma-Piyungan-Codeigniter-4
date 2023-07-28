<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    protected $table = 'guru'; // Tambahkan definisi tabel

    public function AllData()
    {
        return $this->db->table($this->table)
            ->join('jurusan', 'guru.id_jurusan = jurusan.id_jurusan', 'left')
            ->orderBy('guru.kode_guru', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function tambahData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function detailData($id_guru)
    {
        return $this->db->table($this->table)
            ->where('id_guru', $id_guru)
            ->join('jurusan', 'guru.id_jurusan = jurusan.id_jurusan', 'left')
            ->get()
            ->getRowArray();
    }

    public function ubahData($id_guru, $data)
    {
        return $this->db->table($this->table)
            ->where('id_guru', $id_guru)
            ->update($data);
    }

    public function hapusData($id_guru)
    {
        return $this->db->table($this->table)
            ->where('id_guru', $id_guru)
            ->delete();
    }
}