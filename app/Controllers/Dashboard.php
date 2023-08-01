<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDashboard;
use App\Models\ModelSiswa;

class Dashboard extends BaseController
{
    protected $ModelDashboard;
    protected $ModelSiswa;

    public function __construct()
    {
        $this->ModelDashboard = new ModelDashboard();
        $this->ModelSiswa = new ModelSiswa();
    }

    public function index()
    {
        $level = session()->get('level');

        if ($level == 1) {
            $nip = session()->get('nip');
            $guru = $this->ModelDashboard->getBiodataGuru($nip);
            $jadwalpelajaran = $this->ModelDashboard->getJadwalPelajaran($guru['id_guru']);

            $data = [
                'judul' => 'Dashboard Guru',
                'subjudul' => 'Data Dashboard Guru',
                'page' => 'Dashboard/v_t_DashboardGuru',
                'level' => $level,
                'guru' => $guru,
                'jadwal_pelajaran' => $jadwalpelajaran,
            ];

            return view('Frontend/v_halaman_admin', $data);
        } else if ($level == 2) {
            $nisn = session()->get('nisn');
            $siswa = $this->ModelDashboard->getBiodataSiswa($nisn);
            $jadwal_siswa = $this->ModelDashboard->getJadwalPelajaranSiswa($nisn);
            $nilai_siswa = $this->ModelDashboard->getNilaiSiswa($siswa['id_siswa']);
    
            $data = [
                'judul' => 'Dashboard Siswa',
                'subjudul' => 'Data Dashboard Siswa',
                'page' => 'Dashboard/v_t_DashboardSiswa',
                'level' => $level,
                'siswa' => $siswa,
                'jadwal_siswa' => $jadwal_siswa,
                'nilai_siswa' => $nilai_siswa,
            ];
    
            return view('Frontend/v_halaman_admin', $data);
        }
    }
}