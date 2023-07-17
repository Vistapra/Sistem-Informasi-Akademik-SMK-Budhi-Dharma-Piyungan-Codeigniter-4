<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBerita;

class Berita extends BaseController
{
    protected $ModelBerita;

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
            'berita' => $this->ModelBerita->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }        

    public function tambah()
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Tambah Berita',
            'page' => 'Berita/v_tambah',
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
   
    public function edit($id_berita)
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Edit Berita',
            'page' => 'Berita/v_edit',
            'berita' => $this->ModelBerita->DetailData($id_berita),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }
    public function view($id_berita)
{
    $data = [
        'judul' => 'Detail Berita',
        'subjudul' => '',
        'berita' => $this->ModelBerita->DetailData($id_berita),
    ];

    return view('Berita/v_view', $data);
}


    public function tambahData()
    {
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'slug_berita' => $this->request->getPost('slug_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
            'tgl_berita' => date('Y-m-d'), // Tanggal berita diisi otomatis dengan tanggal saat ini
            'jam_berita' => date('H:i') // Jam berita diisi otomatis dengan waktu saat ini
        ];

        // Mengambil gambar yang diunggah
        $gambar = $this->request->getFile('gambar');

        // Mengecek apakah gambar berhasil diunggah
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Menggunakan nama asli (original name) sebagai nama file
            $namaGambar = $gambar->getClientName();

            // Memindahkan gambar ke direktori yang diinginkan (public/gambarberita)
            $gambar->move(ROOTPATH . 'public/gambarberita', $namaGambar);

            // Menyimpan nama gambar ke dalam data
            $data['gambar'] = $namaGambar;

            // Simpan data ke dalam database menggunakan model
            $this->ModelBerita->tambahData($data);

            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
            return redirect()->to('/Berita');
        } else {
            session()->setFlashdata('error', 'Gagal mengunggah gambar');
            return redirect()->to('/Berita/tambah');
        }
    }

    public function ubahData($id_berita)
{
    // Mengambil detail data berita sebelum diubah
    $berita = $this->ModelBerita->DetailData($id_berita);

    $data = [
        'id_berita' => $id_berita,
        'judul_berita' => $this->request->getPost('judul_berita'),
        'slug_berita' => $this->request->getPost('slug_berita'),
        'isi_berita' => $this->request->getPost('isi_berita'),
    ];

    // Mengambil gambar yang diunggah
    $gambar = $this->request->getFile('gambar');

    // Mengecek apakah gambar berhasil diunggah
    if ($gambar->isValid() && !$gambar->hasMoved()) {
        // Menggunakan nama asli (original name) sebagai nama file
        $namaGambar = $gambar->getClientName();

        // Memindahkan gambar ke direktori yang diinginkan (public/gambarberita)
        $gambar->move(ROOTPATH . 'public/gambarberita', $namaGambar);

        // Menyimpan nama gambar ke dalam data
        $data['gambar'] = $namaGambar;

        // Menghapus gambar lama jika ada gambar baru yang diupload
        if (!empty($berita['gambar'])) {
            unlink(ROOTPATH . 'public/gambarberita/' . $berita['gambar']);
        }
    }

    // Update data di database menggunakan model ModelBerita
    $this->ModelBerita->ubahData($data);

    session()->setFlashdata('ubah', 'Data Berhasil Diubah');
    return redirect()->to('/Berita');
}
    public function hapusData($id_berita)
    {
        // Mengambil detail data berita
        $berita = $this->ModelBerita->DetailData($id_berita);

        // Menghapus gambar terkait jika ada
        if (!empty($berita['gambar'])) {
            unlink(ROOTPATH . 'public/gambarberita/' . $berita['gambar']);
        }

        // Menghapus data dari database
        $this->ModelBerita->hapusData($id_berita);

        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Berita');
    }
}