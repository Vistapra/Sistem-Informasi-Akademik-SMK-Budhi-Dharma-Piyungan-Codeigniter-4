<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'berita';
    public function AllData()
    {
        return $this->db->table('berita')->get()->getResultArray();
    }
    public function TambahData($data)
    {
        return $this->db->table('berita')->insert($data);
    }
    public function DetailData($id_berita)
    {
        return $this->db->table('berita')->where('id_berita', $id_berita)->get()->getRowArray();
    }
    public function TampilBerita($slug_berita)
    {
        return $this->db->table('berita')->where('slug_berita', $slug_berita)->get()->getRowArray();
    }
    public function UbahData($data)
    {
        return $this->db->table('berita')->where('id_berita', $data['id_berita'])->update($data);
    }

    public function HapusData($id_berita)
    {
        return $this->db->table('berita')->where('id_berita', $id_berita)->delete();
    }
}