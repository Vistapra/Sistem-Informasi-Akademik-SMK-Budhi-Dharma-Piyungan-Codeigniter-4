<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTugas;
use CodeIgniter\HTTP\RedirectResponse;
use App\Models\ModelKelas;
use App\Models\ModelMapel;
use App\Models\ModelGuru;

class Tugas extends BaseController
{
    protected $ModelTugas;
    protected $ModelKelas;
    protected $ModelMapel;
    protected $ModelGuru;

    public function __construct()
    {
        $this->ModelTugas = new ModelTugas();
        $this->ModelKelas = new ModelKelas();
        $this->ModelMapel = new ModelMapel();
        $this->ModelGuru = new ModelGuru();
    }

    public function index()
    {
        $data = [
            'judul' => 'Tugas',
            'subjudul' => 'Data Tugas',
            'page' => 'Tugas/v_t_Tugas',
            'level' => session()->get('level'),
            'tugas' => $this->ModelTugas->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Tugas',
            'subjudul' => 'Tambah Tugas',
            'page' => 'Tugas/v_tambah',
            'tugas' => $this->ModelTugas->AllData(),
            'kelas' => $this->ModelKelas->AllData(),
            'mapel' => $this->ModelMapel->AllData(),

        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function edit($id_tugas)
    {
        $data = [
            'judul' => 'Edit Tugas',
            'subjudul' => 'Edit Tugas',
            'page' => 'Tugas/v_edit',
            'tugas' => $this->ModelTugas->DetailData($id_tugas),
            'kelas' => $this->ModelKelas->AllData(),
            'mapel' => $this->ModelMapel->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function view($id_tugas)
    {
        $data = [
            'judul' => 'Detail Tugas',
            'subjudul' => '',
            'page' => 'Tugas/v_view',
            'tugas' => $this->ModelTugas->DetailData($id_tugas),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
{
    $file = $this->request->getFile('file_tugas');
    $namafile = $file->getName();
    $file->move('./filetugas', $namafile);

    $data = [
        'id_kelas' => $this->request->getPost('kelas'),
        'id_mapel' => $this->request->getPost('id_mapel'),
        'judul_tugas' => $this->request->getPost('judul_tugas'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'file_tugas' => $namafile,
        'tgl_deadline' => $this->request->getPost('tgl_deadline'),
    ];

    $this->ModelTugas->TambahData($data);
    session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
    return redirect()->to('Tugas');
}

public function UbahData()
{
    $id_tugas = $this->request->getPost('id_tugas');

    $data = [
        'id_kelas' => $this->request->getPost('kelas'),
        'id_mapel' => $this->request->getPost('id_mapel'),
        'judul_tugas' => $this->request->getPost('judul_tugas'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'tgl_deadline' => $this->request->getPost('tgl_deadline'),
    ];
    $file = $this->request->getFile('file_tugas');

    if ($file && $file->isValid() && !$file->hasMoved()) {
    $namafile = $file->getName();
    $file->move('./filetugas', $namafile);
    $data['file_tugas'] = $namafile;

    }

    $this->ModelTugas->UbahData($id_tugas, $data);
    session()->setFlashdata('ubah', 'Data Berhasil Diubah');
    return redirect()->to('Tugas');
}
    public function HapusData($id_tugas)
    {
        $this->ModelTugas->HapusData($id_tugas);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Tugas');
    }
}