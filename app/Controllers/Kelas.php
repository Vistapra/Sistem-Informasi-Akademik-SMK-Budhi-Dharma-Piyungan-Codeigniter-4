<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKelas;

class Kelas extends BaseController
{
    protected $ModelKelas;

    public function __construct()
    {
        $this->ModelKelas = new ModelKelas();
    }
    public function index()
    {
        $data = [
            'judul' => 'Kelas',
            'subjudul' => 'Data Kelas',
            'page' => 'kelas/v_t_kelas',
            'kelas' => $this->ModelKelas->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    public function TambahData()
    {
        $data = [
            'kelas' => $this->request->getPost('kelas'),
        ];

        $this->ModelKelas->TambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('Kelas');
    }
    public function UbahData()
    {
        $data = [
                'id_kelas' => $this->request->getPost('id_kelas'),
                'kelas' => $this->request->getPost('kelas'),
            ];
            $this->ModelKelas->UbahData($data);
            session()->setFlashdata('ubah', 'Data Berhasil Diubah');
            return redirect()->to('Kelas');
        }
    public function HapusData($id_kelas)
    {
        $this->ModelKelas->HapusData($id_kelas);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Kelas');
    }
}