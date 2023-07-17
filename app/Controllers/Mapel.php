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
            'page' => 'mapel/v_t_mapel',
            'mapel' => $this->ModelMapel->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    
    public function tambahData()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'kode_mapel' => $this->request->getPost('kode_mapel'),
                'mapel' => $this->request->getPost('mapel'),
            ];
            $this->ModelMapel->tambahData($data);
            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
            return redirect()->to('/Mapel');
        }
    }

    public function ubahData()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'id_mapel' => $this->request->getPost('id_mapel'),
                'kode_mapel' => $this->request->getPost('kode_mapel'),
                'mapel' => $this->request->getPost('mapel'),
            ];
            $this->ModelMapel->ubahData($data);
            session()->setFlashdata('ubah', 'Data Berhasil Diubah');
            return redirect()->to('/Mapel');
        }
    }

    public function hapusData($id_mapel)
    {
        $this->ModelMapel->hapusData($id_mapel);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Mapel');
    }
}