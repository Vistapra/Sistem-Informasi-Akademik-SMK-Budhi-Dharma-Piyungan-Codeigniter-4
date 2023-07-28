<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelNilai;
use App\Models\ModelSiswa;
use App\Models\ModelMapel;

class Nilai extends BaseController
{
    protected $ModelNilai;
    protected $ModelSiswa;
    protected $ModelMapel;
    protected $logged_in_nisn;

    public function __construct()
    {
        $this->ModelNilai = new ModelNilai();
        $this->ModelSiswa = new ModelSiswa();
        $this->ModelMapel = new ModelMapel();
        $this->logged_in_nisn = session()->get('nisn');
    }

    public function index()
    {
        $data = [
            'judul' => 'Nilai',
            'subjudul' => 'Data Nilai',
            'page' => 'Nilai/v_t_Nilai',
            'level' => session()->get('level'),
            'nilai' => $this->ModelNilai->AllData(),
            'logged_in_nisn' => $this->logged_in_nisn,
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Nilai',
            'subjudul' => 'Tambah Nilai',
            'page' => 'Nilai/v_tambah',
            'siswa' => $this->ModelSiswa->AllData(),
            'mapel' => $this->ModelMapel->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Edit($id_nilai)
    {
        $data = [
            'judul' => 'Nilai',
            'subjudul' => 'Edit Nilai',
            'page' => 'Nilai/v_edit',
            'nilai' => $this->ModelNilai->DetailData($id_nilai),
            'siswa' => $this->ModelSiswa->AllData(),
            'mapel' => $this->ModelMapel->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function View($id_nilai)
    {
        $data = [
            'judul' => 'Detail Nilai',
            'subjudul' => '',
            'page' => 'Nilai/v_view',
            'nilai' => $this->ModelNilai->DetailData($id_nilai),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        // Ambil data dari form tambah dan simpan dalam variabel $data
        $data = [
            'id_siswa' => $this->request->getPost('id_siswa'),
            'id_mapel' => $this->request->getPost('id_mapel'),
            'nilai_angka' => $this->request->getPost('nilai_angka'),
            'semester' => $this->request->getPost('semester'),
            'tahun_akademik' => $this->request->getPost('tahun_akademik'),
        ];

        $this->ModelNilai->TambahData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to('Nilai');
    }

    public function UbahData($id_nilai)
    {
        // Ambil data dari form ubah dan simpan dalam variabel $data
        $data = [
            'id_nilai' => $id_nilai,
            'id_siswa' => $this->request->getPost('id_siswa'),
            'id_mapel' => $this->request->getPost('id_mapel'),
            'nilai_angka' => $this->request->getPost('nilai_angka'),
            'semester' => $this->request->getPost('semester'),
            'tahun_akademik' => $this->request->getPost('tahun_akademik'),
        ];

        $this->ModelNilai->UbahData($data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('Nilai');
    }

    public function HapusData($id_nilai)
    {
        $this->ModelNilai->HapusData($id_nilai);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('Nilai');
    }
}