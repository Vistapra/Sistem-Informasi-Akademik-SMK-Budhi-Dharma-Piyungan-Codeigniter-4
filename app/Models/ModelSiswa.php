<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    public function AllData()
    {
        return $this->db->table('siswa')
            ->select('siswa.*, jurusan.jurusan, kelas.kelas')
            ->join('jurusan', 'jurusan.id_jurusan = siswa.id_jurusan', 'left')
            ->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left')
            ->orderBy('siswa.nama_siswa', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function TambahData($data)
    {
        return $this->db->table('siswa')->insert($data);
    }

    public function DetailData($id_siswa)
    {
        return $this->db->table('siswa')
            ->select('siswa.*, jurusan.jurusan, kelas.kelas')
            ->join('jurusan', 'jurusan.id_jurusan = siswa.id_jurusan', 'left')
            ->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left')
            ->where('siswa.id_siswa', $id_siswa)
            ->get()
            ->getRowArray();
    }

    public function UbahData($id_siswa, $data)
    {
        return $this->db->table('siswa')->where('id_siswa', $id_siswa)->update($data);
    }

    public function HapusData($id_siswa)
    {
        return $this->db->table('siswa')->where('id_siswa', $id_siswa)->delete();
    }
}
