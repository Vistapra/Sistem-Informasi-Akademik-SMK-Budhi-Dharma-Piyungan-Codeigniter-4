<?php
namespace App\Controllers;

use App\Models\ModelJurusan;
use App\Models\ModelBerita;
use App\Models\ModelGuru;
use App\Models\ModelEkstrakurikuller;

class Home extends BaseController
{
    protected $ModelJurusan;
    protected $ModelBerita;
    protected $ModelGuru;
    protected $ModelEkstrakurikuller;

    public function __construct()
    {
        $this->ModelJurusan = new ModelJurusan();
        $this->ModelBerita = new ModelBerita();
        $this->ModelGuru = new ModelGuru();
        $this->ModelEkstrakurikuller = new ModelEkstrakurikuller();
    }

    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'page' => 'IsiFrontend/v_home',
        ];
        return view('Frontend/v_halaman_depan', $data);
    }

    public function Jurusan($id_jurusan)
    {
        $data = [
            'judul' => 'Jurusan',
            'subjudul' => '',
            'page' => 'IsiFrontend/v_jurusan',
            'jurusan' => $this->ModelJurusan->DetailData($id_jurusan),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }

    public function Berita()
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Berita Terbaru',
            'page' => 'IsiFrontend/v_berita',
            'berita' => $this->ModelBerita->paginate(5, 'berita'),
            'pager' => $this->ModelBerita->pager,
        ];
        return view('Frontend/v_halaman_depan', $data);
    }

    public function TampilBerita($slug_berita)
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => '',
            'page' => 'IsiFrontend/v_tampil_berita',
            'berita' => $this->ModelBerita->TampilBerita($slug_berita),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }

    public function Guru()
    {
        $data = [
            'judul' => 'Guru',
            'subjudul' => 'Guru Sekolah',
            'page' => 'IsiFrontend/v_guru',
            'guru' => $this->ModelGuru->AllData(),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
    public function Ekstrakurikuller ()
    {
        $data = [
            'judul' => 'Ekstrakurikuller',
            'subjudul' => 'Ekstrakurikuller Sekolah',
            'page' => 'IsiFrontend/v_ekstrakurikuller',
            'ekstra' => $this->ModelEkstrakurikuller->AllData(),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
    public function TampilEkstra($nama_ekstra)
    {
        $data = [
            'judul' => 'Ekstrakurikuller',
            'subjudul' => 'Ekstrakurikuller Sekolah',
            'page' => 'IsiFrontend/v_tampil_ekstrakurikuller',
            'ekstra' => $this->ModelEkstrakurikuller->TampilEkstra($nama_ekstra),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
}