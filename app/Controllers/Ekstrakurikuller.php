<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelEkstrakurikuller;
use App\Models\ModelGuru;

class Ekstrakurikuller extends BaseController
{
    protected $ModelEkstrakurikuller;
    protected $ModelGuru;

    public function __construct()
    {
        $this->ModelEkstrakurikuller = new ModelEkstrakurikuller();
        $this->ModelGuru = new ModelGuru();
    }

    public function index()
    {
        $data = [
            'judul' => 'Ekstrakurikuller',
            'subjudul' => 'Data Ekstrakurikuller',
            'page' => 'Ekstrakurikuller/v_t_ekstra',
            'level' => session()->get('level'),
            'ekstra' => $this->ModelEkstrakurikuller->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Ekstrakurikuller',
            'subjudul' => 'Tambah Ekstrakurikuller',
            'page' => 'Ekstrakurikuller/v_tambah',
            'ekstra' => $this->ModelEkstrakurikuller->AllData(),
            'guru' => $this->ModelGuru->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
   
    public function Edit($id_ekstra)
    {
        $data = [
            'judul' => 'Ekstrakurikuller',
            'subjudul' => 'Edit Ekstrakurikuller',
            'page' => 'Ekstrakurikuller/v_edit',
            'ekstra' => $this->ModelEkstrakurikuller->DetailData($id_ekstra),
            'guru' => $this->ModelGuru->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    public function View($id_ekstra)
    {
        $data = [
            'judul' => 'Detail Ekstrakurikuller',
            'subjudul' => '',
            'page' => 'Ekstrakurikuller/v_view',
            'ekstra' => $this->ModelEkstrakurikuller->DetailData($id_ekstra),
        ];
    
        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        $foto_ekstra = $this->request->getFile('foto_ekstra');

        if ($foto_ekstra->isValid() && !$foto_ekstra->hasMoved()) {
            $randomName = $foto_ekstra->getRandomName();
            $foto_ekstra->move('fotoekstra', $randomName);

            $data = [
                'nama_ekstra' => $this->request->getPost('nama_ekstra'),
                'id_guru' => $this->request->getPost('id_guru'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'guru_pembimbing' => $this->request->getPost('guru_pembimbing'),
                'jadwal_kegiatan' => $this->request->getPost('jadwal_kegiatan'),
                'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
                'foto_ekstra' => $randomName,
            ];

            $this->ModelEkstrakurikuller->TambahData($data);
            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
            return redirect()->to('Ekstrakurikuller');
        }
    }

    public function UbahData($id_ekstra)
    {
        $ekstra = $this->ModelEkstrakurikuller->DetailData($id_ekstra);
        $data = [
            'id_ekstra' => $id_ekstra,
            'nama_ekstra' => $this->request->getPost('nama_ekstra'),
            'id_guru' => $this->request->getPost('id_guru'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'guru_pembimbing' => $this->request->getPost('guru_pembimbing'),
            'jadwal_kegiatan' => $this->request->getPost('jadwal_kegiatan'),
            'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
        ];

        $foto_ekstra = $this->request->getFile('foto_ekstra');

    if ($this->request->getFile('foto_ekstra')->getError() != 4) {
        if ($ekstra['foto_ekstra'] != "") {
            unlink('fotoekstra/' . $ekstra['foto_ekstra']);
        }

        $data['foto_ekstra'] = $foto_ekstra->getRandomName();
        $foto_ekstra->move('fotoekstra', $data['foto_ekstra']);
    }
    
        $this->ModelEkstrakurikuller->UbahData($id_ekstra, $data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('Ekstrakurikuller');
    }

    public function HapusData($id_ekstra)
    {
        $ekstra = $this->ModelEkstrakurikuller->DetailData($id_ekstra);
    if (!empty($ekstra['foto_ekstra']) && file_exists('fotoekstra/' . $ekstra['foto_ekstra'])) {
        unlink('fotoekstra/' . $ekstra['foto_ekstra']);
    }
        $this->ModelEkstrakurikuller->HapusData($id_ekstra);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Ekstrakurikuller');
    }
}