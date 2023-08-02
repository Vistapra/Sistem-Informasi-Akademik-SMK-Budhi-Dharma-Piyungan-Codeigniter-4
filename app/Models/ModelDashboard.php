<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboard extends Model
{
    // Mendefinisikan kelas ModelDashboard yang merupakan turunan dari kelas Model di CodeIgniter

    public function getBiodataGuru($nip)
    {
        // Fungsi untuk mendapatkan biodata seorang guru berdasarkan NIP

        return $this->db->table('guru')->where('nip', $nip)->get()->getRowArray();
        // Mengambil data dari tabel 'guru' berdasarkan NIP menggunakan query builder.
        // where('nip', $nip) digunakan untuk melakukan seleksi berdasarkan NIP.
        // get() mengirimkan query ke database dan mendapatkan hasilnya.
        // getRowArray() mengambil satu baris hasil sebagai array asosiatif.
    }

    public function getBiodataSiswa($nisn)
    {
        // Fungsi untuk mendapatkan biodata seorang siswa berdasarkan NISN

        return $this->db->table('siswa')->where('nisn', $nisn)->get()->getRowArray();
        // Mengambil data dari tabel 'siswa' berdasarkan NISN menggunakan query builder.
        // where('nisn', $nisn) digunakan untuk melakukan seleksi berdasarkan NISN.
        // get() mengirimkan query ke database dan mendapatkan hasilnya.
        // getRowArray() mengambil satu baris hasil sebagai array asosiatif.
    }
    public function getBiodataAdmin($username)
    {
        // Fungsi untuk mendapatkan biodata seorang admin berdasarkan userna$username

        return $this->db->table('admin')->where('username', $username)->get()->getRowArray();
        // Mengambil data dari tabel 'admin' berdasarkan admin_id menggunakan query builder.
        // where('admin_id', $admin_id) digunakan untuk melakukan seleksi berdasarkan admin_id.
        // get() mengirimkan query ke database dan mendapatkan hasilnya.
        // getRowArray() mengambil satu baris hasil sebagai array asosiatif.
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
            ->get()->getResultArray();
    }

    public function getJadwalPelajaranSiswa($nisn)
{

    $siswa = $this->db->table('siswa')
        ->where('nisn', $nisn)
        ->get()->getRow();

    if ($siswa) {

        $id_kelas = $siswa->id_kelas;

        return $this->db->table('jadwalpelajaran')
            ->join('kelas', 'kelas.id_kelas = jadwalpelajaran.id_kelas')
            ->join('mapel', 'mapel.id_mapel = jadwalpelajaran.id_mapel')
            ->join('guru', 'guru.id_guru = jadwalpelajaran.id_guru')
            ->where('jadwalpelajaran.id_kelas', $id_kelas)
            ->orderBy('FIELD(hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")') 
            ->get()->getResultArray();
    }
}

    public function getNilaiSiswa($id_siswa)
    {

        return $this->db->table('nilai')
            ->join('mapel', 'mapel.id_mapel = nilai.id_mapel')
            ->where('id_siswa', $id_siswa)
            ->get()->getResultArray();
    }
}