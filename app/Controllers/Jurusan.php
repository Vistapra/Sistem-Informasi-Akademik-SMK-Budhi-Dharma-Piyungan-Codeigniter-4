<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJurusan;

class Jurusan extends BaseController
{
    protected $ModelJurusan;

    public function __construct()
    {
        $this->ModelJurusan = new ModelJurusan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Jurusan',
            'subjudul' => 'Data Jurusan',
            'page' => 'jurusan/v_t_jurusan',
            'level' => session()->get('level'),
            'jurusan' => $this->ModelJurusan->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Jurusan',
            'subjudul' => 'Tambah Jurusan',
            'page' => 'jurusan/v_tambah',
            'jurusan' => $this->ModelJurusan->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
   
    public function Edit($id_jurusan)
    {
        $data = [
            'judul' => 'Jurusan',
            'subjudul' => 'Edit Jurusan',
            'page' => 'jurusan/v_edit',
            'jurusan' => $this->ModelJurusan->DetailData($id_jurusan),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    public function View($id_jurusan)
    {
        $data = [
            'judul' => 'Detail Jurusan',
            'subjudul' => '',
            'page' => 'jurusan/v_view',
            'jurusan' => $this->ModelJurusan->DetailData($id_jurusan),
        ];
    
        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        $data = [
            'kode_jurusan' => $this->request->getPost('kode_jurusan'),
            'jurusan' => $this->request->getPost('jurusan'),
            'visi_misi' => $this->request->getPost('visi_misi'),
        ];

        $this->ModelJurusan->TambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('/Jurusan');
    }

    public function UbahData($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
            'kode_jurusan' => $this->request->getPost('kode_jurusan'),
            'jurusan' => $this->request->getPost('jurusan'),
            'visi_misi' => $this->request->getPost('visi_misi'),
        ];
        $this->ModelJurusan->UbahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('/Jurusan');
    }

    public function HapusData($id_jurusan)
    {
        $this->ModelJurusan->HapusData($id_jurusan);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Jurusan');
    }
}