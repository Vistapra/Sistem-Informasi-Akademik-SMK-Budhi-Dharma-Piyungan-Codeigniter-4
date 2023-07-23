<?php
namespace App\Controllers;

use App\Models\ModelJurusan;
use App\Models\ModelBerita;

class Home extends BaseController
{
    protected $ModelJurusan;
    protected $ModelBerita;

    public function __construct()
    {
        $this->ModelJurusan = new ModelJurusan();
        $this->ModelBerita = new ModelBerita();
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
}