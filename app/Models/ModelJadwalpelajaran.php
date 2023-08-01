<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwalpelajaran extends Model
{
    public function AllData()
    {
        // Mengambil semua data dari tabel 'jadwalpelajaran' dan melakukan JOIN dengan tabel 'kelas', 'mapel', dan 'guru'
        return $this->db
            ->table('jadwalpelajaran')
            ->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas', 'left') // LEFT JOIN dengan tabel 'kelas' berdasarkan kolom 'id_kelas'
            ->join('mapel', 'jadwalpelajaran.id_mapel = mapel.id_mapel', 'left') // LEFT JOIN dengan tabel 'mapel' berdasarkan kolom 'id_mapel'
            ->join('guru', 'jadwalpelajaran.id_guru = guru.id_guru', 'left') // LEFT JOIN dengan tabel 'guru' berdasarkan kolom 'id_guru'
            ->get()->getResultArray(); // Mengambil hasil dari query dan mengembalikan sebagai array
    }

    public function TambahData($data)
    {
        // Menambahkan data baru ke tabel 'jadwalpelajaran' berdasarkan data yang diberikan
        return $this->db->table('jadwalpelajaran')->insert($data); // Menggunakan metode 'insert' dari CI4 Model untuk menambahkan data
    }

    public function DetailData($id_jadwal)
    {
        // Mengambil detail data dari tabel 'jadwalpelajaran' berdasarkan 'id_jadwal' dan melakukan JOIN dengan tabel 'kelas', 'mapel', dan 'guru'
        return $this->db
            ->table('jadwalpelajaran')
            ->join('kelas', 'jadwalpelajaran.id_kelas = kelas.id_kelas', 'left') // LEFT JOIN dengan tabel 'kelas' berdasarkan kolom 'id_kelas'
            ->join('mapel', 'jadwalpelajaran.id_mapel = mapel.id_mapel', 'left') // LEFT JOIN dengan tabel 'mapel' berdasarkan kolom 'id_mapel'
            ->join('guru', 'jadwalpelajaran.id_guru = guru.id_guru', 'left') // LEFT JOIN dengan tabel 'guru' berdasarkan kolom 'id_guru'
            ->where('jadwalpelajaran.id_jadwal', $id_jadwal) // Memfilter hasil query berdasarkan 'id_jadwal' yang diberikan
            ->get()->getRowArray(); // Mengambil hasil dari query dan mengembalikan sebagai array dengan satu baris
    }

    public function UbahData($data)
    {
        // Mengubah data di tabel 'jadwalpelajaran' berdasarkan 'id_jadwal' yang diberikan
        return $this->db
            ->table('jadwalpelajaran')
            ->where('id_jadwal', $data['id_jadwal']) // Memfilter hasil query berdasarkan 'id_jadwal' yang diberikan
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