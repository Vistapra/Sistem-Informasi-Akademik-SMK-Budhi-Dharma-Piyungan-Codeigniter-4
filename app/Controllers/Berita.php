<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBerita;

class Berita extends BaseController
{
    private $ModelBerita;

    public function __construct()
    {
        $this->ModelBerita = new ModelBerita();
    }

    public function index()
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Data Berita',
            'page' => 'Berita/v_t_berita',
            'level' => session()->get('level'),
            'berita' => $this->ModelBerita->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Tambah Berita',
            'page' => 'Berita/v_tambah',
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Edit($id_berita)
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Edit Berita',
            'page' => 'Berita/v_edit',
            'berita' => $this->ModelBerita->DetailData($id_berita),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function View($id_berita)
    {
        $data = [
            'judul' => 'Detail Berita',
            'page' => 'Berita/v_view',
            'berita' => $this->ModelBerita->DetailData($id_berita),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $randomName = $gambar->getRandomName();
            $gambar->move('gambarberita', $randomName);

            $data = [
                'judul_berita' => $this->request->getPost('judul_berita'),
                'slug_berita' => $this->request->getPost('slug_berita'),
                'isi_berita' => $this->request->getPost('isi_berita'),
                'tgl_berita' => date('Y-m-d'),
                'jam_berita' => date('H:i'),
                'gambar' => $randomName,
            ];

            $this->ModelBerita->TambahData($data);

            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('Berita'));
        }
    }

    public function UbahData($id_berita)
    {
        $berita = $this->ModelBerita->DetailData($id_berita);
        $data = [
            'id_berita' => $id_berita,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'slug_berita' => $this->request->getPost('slug_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
        ];

        $gambar = $this->request->getFile('gambar');

        if ($this->request->getFile('gambar')->getError() != 4) {
            $data['gambar'] = $this->request->getFile('gambar')->getRandomName();

            if ($berita['gambar'] != "") {
                unlink('gambarberita/' . $berita['gambar']);
            }

            $gambar->move('gambarberita', $data['gambar']);
        }

        $this->ModelBerita->UbahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to(base_url('Berita'));
    }

    public function HapusData($id_berita)
    {
        $berita = $this->ModelBerita->DetailData($id_berita);
        if ($berita['gambar'] != "") {
            unlink('gambarberita/' . $berita['gambar']);
        }

        $this->ModelBerita->HapusData($id_berita);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Berita'));
    }
}