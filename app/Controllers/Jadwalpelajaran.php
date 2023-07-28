<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJadwalpelajaran;
use App\Models\Modelkelas;
use App\Models\ModelMapel;
use App\Models\ModelGuru;

class Jadwalpelajaran extends BaseController
{
    protected $ModelJadwalpelajaran;
    protected $Modelkelas;
    protected $ModelMapel;
    protected $ModelGuru;

    public function __construct()
    {
        $this->ModelJadwalpelajaran = new ModelJadwalpelajaran();
        $this->Modelkelas = new Modelkelas();
        $this->ModelMapel = new ModelMapel();
        $this->ModelGuru = new ModelGuru();
    }

    public function index()
    {
        $data = [
            'judul' => 'Jadwal Pelajaran',
            'subjudul' => 'Data Jadwal',
            'page' => 'Japel/v_t_jadwalpelajaran',
            'level' => session()->get('level'),
            'jadwalpelajaran' => $this->ModelJadwalpelajaran->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Jadwal Pelajaran',
            'subjudul' => 'Tambah Jadwal',
            'page' => 'Japel/v_tambah',
            'kelas' => $this->Modelkelas->AllData(), // Menambahkan data kelas ke view
            'mapel' => $this->ModelMapel->AllData(), // Menambahkan data mapel ke view
            'guru' => $this->ModelGuru->AllData(), // Menambahkan data guru ke view
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Edit($id_jadwal)
    {
        $data = [
            'judul' => 'Jadwal Pelajaran',
            'subjudul' => 'Edit Jadwal',
            'page' => 'Japel/v_edit',
            'jadwalpelajaran' => $this->ModelJadwalpelajaran->DetailData($id_jadwal),
            'kelas' => $this->Modelkelas->AllData(), // Menambahkan data kelas ke view
            'mapel' => $this->ModelMapel->AllData(), // Menambahkan data mapel ke view
            'guru' => $this->ModelGuru->AllData(), // Menambahkan data guru ke view
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        $data = [
            'id_kelas' => $this->request->getPost('id_kelas'), // Assuming you have a form field named 'id_kelas'
            'id_mapel' => $this->request->getPost('id_mapel'), // Assuming you have a form field named 'id_mapel'
            'id_guru' => $this->request->getPost('id_guru'), // Assuming you have a form field named 'id_guru'
            'hari' => $this->request->getPost('hari'), // Assuming you have a form field named 'hari'
            'waktu_mulai' => $this->request->getPost('waktu_mulai'), // Assuming you have a form field named 'waktu_mulai'
            'waktu_selesai' => $this->request->getPost('waktu_selesai'), // Assuming you have a form field named 'waktu_selesai'
        ];

        $this->ModelJadwalpelajaran->TambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('Jadwalpelajaran');
    }

    public function UbahData($id_jadwal)
    {
        $data = [
            'id_jadwal' => $id_jadwal,
            'id_kelas' => $this->request->getPost('id_kelas'), // Assuming you have a form field named 'id_kelas'
            'id_mapel' => $this->request->getPost('id_mapel'), // Assuming you have a form field named 'id_mapel'
            'id_guru' => $this->request->getPost('id_guru'), // Assuming you have a form field named 'id_guru'
            'hari' => $this->request->getPost('hari'), // Assuming you have a form field named 'hari'
            'waktu_mulai' => $this->request->getPost('waktu_mulai'), // Assuming you have a form field named 'waktu_mulai'
            'waktu_selesai' => $this->request->getPost('waktu_selesai'), // Assuming you have a form field named 'waktu_selesai'
        ];

        $this->ModelJadwalpelajaran->UbahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('Jadwalpelajaran');
    }

    public function HapusData($id_jadwal)
    {
        $this->ModelJadwalpelajaran->HapusData($id_jadwal);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Jadwalpelajaran');
    }
}