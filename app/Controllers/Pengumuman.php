<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPengumuman;
use App\Models\ModelGuru;

class Pengumuman extends BaseController
{
    protected $modelPengumuman;
    protected $modelGuru;

    public function __construct()
    {
        $this->modelPengumuman = new ModelPengumuman();
        $this->modelGuru = new ModelGuru();
    }

    public function index()
    {
        $data = [
            'judul' => 'Pengumuman',
            'subjudul' => 'Data Pengumuman',
            'page' => 'Pengumuman/v_t_pengumuman',
            'level' => session()->get('level'),
            'pengumuman' => $this->modelPengumuman->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Pengumuman',
            'subjudul' => 'Tambah Pengumuman',
            'page' => 'Pengumuman/v_tambah',
            'guru' => $this->modelGuru->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function edit($id_pengumuman)
    {
        $data = [
            'judul' => 'Pengumuman',
            'subjudul' => 'Edit Pengumuman',
            'page' => 'Pengumuman/v_edit',
            'pengumuman' => $this->modelPengumuman->DetailData($id_pengumuman),
            'guru' => $this->modelGuru->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function view($id_pengumuman)
    {
        $data = [
            'judul' => 'Detail Pengumuman',
            'subjudul' => '',
            'page' => 'Pengumuman/v_view',
            'pengumuman' => $this->modelPengumuman->DetailData($id_pengumuman),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function tambahData()
    {
        $data = [
            'id_guru' => $this->request->getPost('id_guru'),
            'judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
            'tgl_pengumuman' => $this->request->getPost('tgl_pengumuman'),
        ];

        $this->modelPengumuman->tambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('Pengumuman');
    }

    public function ubahData($id_pengumuman)
    {
        $data = [
            'id_pengumuman' => $id_pengumuman,
            'id_guru' => $this->request->getPost('id_guru'),
            'judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
            'tgl_pengumuman' => $this->request->getPost('tgl_pengumuman'),
        ];

        $this->modelPengumuman->ubahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('Pengumuman');
    }

    public function hapusData($id_pengumuman)
    {
        $this->modelPengumuman->hapusData($id_pengumuman);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Pengumuman');
    }
}