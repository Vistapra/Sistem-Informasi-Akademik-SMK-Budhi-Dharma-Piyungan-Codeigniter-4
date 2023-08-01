<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'FilterAdmin'   => \App\Filters\FilterAdmin::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    // Deklarasi array $globals yang merupakan konfigurasi filter sebelum dan sesudah pada suatu aplikasi atau sistem.
public array $globals = [
    // Filter yang diterapkan sebelum aliran program dijalankan.
    'before' => [
        // FilterAdmin adalah nama filter yang akan diterapkan.
        'FilterAdmin' => [
            // except adalah daftar pengecualian dari filter ini.
            // Artinya, filter ini tidak akan diterapkan pada route yang terdaftar dalam daftar pengecualian.
            'except' => [
                'Home', 'Home/*', // Pengecualian untuk rute yang memiliki awalan 'Home/'.
                'Auth', 'Auth/*', // Pengecualian untuk rute yang memiliki awalan 'Auth/'.
            ]
        ],
    ],
    // Filter yang diterapkan setelah aliran program dijalankan.
    'after' => [
        'toolbar', // Filter 'toolbar' akan diterapkan pada semua route tanpa pengecualian.
        'FilterAdmin' => [
            // except adalah daftar pengecualian dari filter ini.
            // Artinya, filter ini tidak akan diterapkan pada route yang terdaftar dalam daftar pengecualian.
            'except' => [
                'Home', 'Home/*', // Pengecualian untuk rute yang memiliki awalan 'Home/'.
                'Dashboard', 'Dashboard/*', // Pengecualian untuk rute yang memiliki awalan 'Home/'.
                'Auth', 'Auth/*', // Pengecualian untuk rute yang memiliki awalan 'Home/'.
                'Jurusan', 'Jurusan/*', // Pengecualian untuk rute yang memiliki awalan 'Jurusan/'.
                'Kelas', 'Kelas/*', // Pengecualian untuk rute yang memiliki awalan 'Kelas/'.
                'Mapel', 'Mapel/*', // Pengecualian untuk rute yang memiliki awalan 'Mapel/'.
                'Berita', 'Berita/*', // Pengecualian untuk rute yang memiliki awalan 'Berita/'.
                'Siswa', 'Siswa/*', // Pengecualian untuk rute yang memiliki awalan 'Siswa/'.
                'Nilai', 'Nilai/*', // Pengecualian untuk rute yang memiliki awalan 'Siswa/'.
                'Guru', 'Guru/*', // Pengecualian untuk rute yang memiliki awalan 'Guru/'.
                'Ekstrakurikuller', 'Ekstrakurikuller/*', // Pengecualian untuk rute yang memiliki awalan 'Ekstrakurikuller/'.
                'Jadwalpelajaran', 'Jadwalpelajaran/*', // Pengecualian untuk rute yang memiliki awalan 'Ekstrakurikuller/'.
            ]
        ],
    ],
];


    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}