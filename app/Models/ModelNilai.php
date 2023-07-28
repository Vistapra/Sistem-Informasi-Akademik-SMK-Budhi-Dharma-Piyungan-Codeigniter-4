<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function AllData()
    {
        // Mengambil semua data dari tabel 'nilai' dan melakukan JOIN dengan tabel 'siswa' dan 'mapel'
        return $this->db
            ->table('nilai')
            ->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'left') // LEFT JOIN dengan tabel 'siswa' berdasarkan kolom 'id_siswa'
            ->join('mapel', 'nilai.id_mapel = mapel.id_mapel', 'left') // LEFT JOIN dengan tabel 'mapel' berdasarkan kolom 'id_mapel'
            ->get()->getResultArray(); // Mengambil hasil dari query dan mengembalikan sebagai array
    }

    public function TambahData($data)
    {
        // Menambahkan data baru ke tabel 'nilai' berdasarkan data yang diberikan
        return $this->db->table('nilai')->insert($data); // Menggunakan metode 'insert' dari CI4 Model untuk menambahkan data
    }

    public function DetailData($id_nilai)
    {
        // Mengambil detail data dari tabel 'nilai' berdasarkan 'id_nilai' dan melakukan JOIN dengan tabel 'siswa' dan 'mapel'
        return $this->db
            ->table('nilai')
            ->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'left') // LEFT JOIN dengan tabel 'siswa' berdasarkan kolom 'id_siswa'
            ->join('mapel', 'nilai.id_mapel = mapel.id_mapel', 'left') // LEFT JOIN dengan tabel 'mapel' berdasarkan kolom 'id_mapel'
            ->where('nilai.id_nilai', $id_nilai) // Memfilter hasil query berdasarkan 'id_nilai' yang diberikan
            ->get()->getRowArray(); // Mengambil hasil dari query dan mengembalikan sebagai array dengan satu baris
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
        // Menghapus data dari tabel 'nilai' berdasarkan 'id_nilai' yang diberikan
        return $this->db
            ->table('nilai')
            ->where('id_nilai', $id_nilai) // Memfilter hasil query berdasarkan 'id_nilai' yang diberikan
            ->delete(); // Menggunakan metode 'delete' dari CI4 Model untuk menghapus data
    }
}