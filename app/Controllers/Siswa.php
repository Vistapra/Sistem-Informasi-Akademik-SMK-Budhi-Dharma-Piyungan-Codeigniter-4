<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;

class Siswa extends BaseController
{
    private $ModelSiswa;

    public function __construct()
    {
        $this->ModelSiswa = new ModelSiswa();
    }

    public function index()
    {
        $data = [
            'judul' => 'Siswa',
            'subjudul' => 'Data Siswa',
            'page' => 'Siswa/v_t_siswa',
            'level' => session()->get('level'),
            'siswa' => $this->ModelSiswa->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Siswa',
            'subjudul' => 'Tambah Siswa',
            'page' => 'Siswa/v_tambah',
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Edit($id_siswa)
    {
        $data = [
            'judul' => 'Siswa',
            'subjudul' => 'Edit Siswa',
            'page' => 'Siswa/v_edit',
            'siswa' => $this->ModelSiswa->DetailData($id_siswa),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        $foto_siswa = $this->request->getFile('foto_siswa');

        if ($foto_siswa->isValid() && !$foto_siswa->hasMoved()) {
            $randomName = $foto_siswa->getRandomName();
            $foto_siswa->move('fotosiswa', $randomName);

            $data = [
                'nisn' => $this->request->getPost('nisn'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jk' => $this->request->getPost('jk'),
                'jurusan' => $this->request->getPost('jurusan'),
                'kelas' => $this->request->getPost('kelas'),
                'password' => $this->request->getPost('password'),
                'level' => $this->request->getPost('level'),
                'foto_siswa' => $randomName,
            ];

            $this->ModelSiswa->TambahData($data);

            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        } 

        return redirect()->to(base_url('Siswa'));
    }

    public function UbahData($id_siswa)
{
    $siswa = $this->ModelSiswa->DetailData($id_siswa);
    $data = [
        'id_siswa' => $id_siswa,
        'nisn' => $this->request->getPost('nisn'),
                'nama_siswa' => $this->request->getPost('nama_siswa'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jk' => $this->request->getPost('jk'),
                'jurusan' => $this->request->getPost('jurusan'),
                'kelas' => $this->request->getPost('kelas'),
                'password' => $this->request->getPost('password'),
                'level' => $this->request->getPost('level'),
    ];
    $foto_siswa = $this->request->getFile('foto_siswa');

    if ($this->request->getFile('foto_siswa')->getError() != 4) {
        if ($siswa['foto_siswa'] != "") {
            unlink('fotosiswa/' . $siswa['foto_siswa']);
        }

        $data['foto_siswa'] = $foto_siswa->getRandomName();
        $foto_siswa->move('fotosiswa', $data['foto_siswa']);
    }

    $this->ModelSiswa->UbahData($id_siswa, $data);
    session()->setFlashdata('ubah', 'Data Berhasil Diubah');
    return redirect()->to(base_url('Siswa'));
}


    public function HapusData($id_siswa)
    {
        $siswa = $this->ModelSiswa->DetailData($id_siswa);
        if ($siswa['foto_siswa'] != "") {
            unlink('fotosiswa/' . $siswa['foto_siswa']);
        }

        $this->ModelSiswa->HapusData($id_siswa);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Siswa'));
    }
}