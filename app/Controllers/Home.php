<?php

namespace App\Controllers;

use App\Models\ModelJurusan;
use App\Models\ModelBerita;

class Home extends BaseController
{
    protected $modelJurusan;
    protected $modelBerita;

    public function __construct()
    {
        $this->modelJurusan = new ModelJurusan();
        $this->modelBerita = new ModelBerita();
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
            'jurusan' => $this->modelJurusan->DetailData($id_jurusan),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }

    public function Berita()
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => 'Berita Terbaru',
            'page' => 'IsiFrontend/v_berita',
            'berita' =>$this->modelBerita->paginate(5, 'berita'),
            'pager' => $this->modelBerita->pager,
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
    public function tampilBerita($slug_berita)
    {
        $data = [
            'judul' => 'Berita',
            'subjudul' => '',
            'page' => 'IsiFrontend/v_tampil_berita',
            'berita' =>$this->modelBerita->tampilBerita($slug_berita),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
}