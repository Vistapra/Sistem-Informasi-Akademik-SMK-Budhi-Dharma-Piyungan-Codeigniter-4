<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKelas;

class Kelas extends BaseController
{
    protected $modelKelas;

    public function __construct()
    {
        $this->modelKelas = new ModelKelas();
    }

    public function index()
    {
        $data = [
            'judul' => 'Kelas',
            'subjudul' => 'Data Kelas',
            'page' => 'kelas/v_t_kelas',
            'kelas' => $this->modelKelas->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    
    public function tambahData()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'kelas' => $this->request->getPost('kelas'),
            ];
            $this->modelKelas->tambahData($data);
            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
            return redirect()->to('/Kelas');
        }
    }

    public function ubahData()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'id_kelas' => $this->request->getPost('id_kelas'),
                'kelas' => $this->request->getPost('kelas'),
            ];
            $this->modelKelas->ubahData($data);
            session()->setFlashdata('ubah', 'Data Berhasil Diubah');
            return redirect()->to('/Kelas');
        }
    }

    public function hapusData($id_kelas)
    {
        $this->modelKelas->hapusData($id_kelas);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Kelas');
    }
}