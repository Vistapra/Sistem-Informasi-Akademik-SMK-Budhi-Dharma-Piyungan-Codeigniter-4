<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMapel;

class Mapel extends BaseController
{
    protected $ModelMapel;

    public function __construct()
    {
        $this->ModelMapel = new ModelMapel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Mata Pelajaran',
            'subjudul' => 'Data Mata Pelajaran',
            'page' => 'Mapel/v_t_mapel',
            'level' => session()->get('level'),
            'mapel' => $this->ModelMapel->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    public function TambahData()
    {
        $data = [
            'kode_mapel' => $this->request->getPost('kode_mapel'),
            'mapel' => $this->request->getPost('mapel'),
        ];
        $this->ModelMapel->TambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('/Mapel');
    }

    public function UbahData()
    {
        $data = [
            'id_mapel' => $this->request->getPost('id_mapel'),
            'kode_mapel' => $this->request->getPost('kode_mapel'),
            'mapel' => $this->request->getPost('mapel'),
        ];
        $this->ModelMapel->UbahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('/Mapel');
    }

    public function HapusData($id_mapel)
    {
        $this->ModelMapel->HapusData($id_mapel);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Mapel');
    }
}