<?php

namespace App\Controllers;

use App\Models\ModelJurusan;

class Home extends BaseController
{
    protected $modelJurusan;

    public function __construct()
    {
        $this->modelJurusan = new ModelJurusan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'page' => 'Frontend/v_home',
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
    public function DetailJurusan($id_jurusan)
    {
        $data = [
            'judul' => 'Jurusan',
            'subjudul' => '',
            'page' => 'Home/v_detail_jurusan',
            'jurusan' => $this->modelJurusan->DetailData($id_jurusan),
        ];
        return view('Frontend/v_halaman_depan', $data);
    }
}