<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboard extends Model
{
    public function getBiodataGuru($nip)
    {
        return $this->db->table('guru')
            ->where('nip', $nip)
            ->get()
            ->getRowArray();
    }

    public function getBiodataSiswa($nisn)
    {
        return $this->db->table('siswa')
            ->where('nisn', $nisn)
            ->get()
            ->getRowArray();
    }

    public function getBiodataAdmin($username)
    {
        return $this->db->table('admin')
            ->where('username', $username)
            ->get()
            ->getRowArray();
    }

    public function getJadwalPelajaran($id_guru)
    {
        $uruthari = [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu'
        ];
    
        return $this->db->table('jadwalpelajaran')
            ->join('kelas', 'kelas.id_kelas = jadwalpelajaran.id_kelas')
            ->join('mapel', 'mapel.id_mapel = jadwalpelajaran.id_mapel')
            ->where('id_guru', $id_guru)
            ->orderBy('FIELD(hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")')
            ->get()
            ->getResultArray();
    }

    public function getJadwalPelajaranSiswa($nisn)
{
    $siswa = $this->db->table('siswa')
        ->where('nisn', $nisn)
        ->get()
        ->getRow();

    if ($siswa) {
        $id_kelas = $siswa->id_kelas;

        return $this->db->table('jadwalpelajaran')
            ->join('kelas', 'kelas.id_kelas = jadwalpelajaran.id_kelas')
            ->join('mapel', 'mapel.id_mapel = jadwalpelajaran.id_mapel')
            ->join('guru', 'guru.id_guru = jadwalpelajaran.id_guru')
            ->where('jadwalpelajaran.id_kelas', $id_kelas)
            ->orderBy('FIELD(hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")') 
            ->get()
            ->getResultArray();
    }
}



    public function getNilaiSiswa($id_siswa)
    {
        return $this->db->table('nilai')
            ->join('mapel', 'mapel.id_mapel = nilai.id_mapel')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getResultArray();
    }
    public function getTugasSiswa($id_kelas)
{
    return $this->db->table('tugas')
        ->join('kelas AS k', 'k.id_kelas = tugas.id_kelas', 'left')
        ->join('mapel AS m', 'm.id_mapel = tugas.id_mapel', 'left')
        ->where('tugas.id_kelas', $id_kelas)
        ->get()
        ->getResultArray();
}




}