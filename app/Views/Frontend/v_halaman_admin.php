<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISBUDHI V1 | <?= $judul ?></title>
    <link rel="shortcut icon" href="<?= base_url('smkbudhi') ?>/images/logosmk.png" alt="Logo">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('AdminLte') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/summernote/summernote-bs4.min.css">
    <script src="<?= base_url('AdminLte') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="hold-transition sidebar-collapse sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
                        <i class="fas fa-sign-out-alt"></i> LogOut
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="<?= base_url('Dashboard') ?>" class="brand-link text-center">
                <span class="brand-text font-weight-bold">SISBUDHI</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <?php if (session()->get('level') == 1): ?>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Dashboard Guru</p>
                            </a>
                        </li>
                        <?php elseif (session()->get('level') == 2): ?>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Dashboard Siswa</p>
                            </a>
                        </li>
                        <?php elseif (session()->get('level') == 3): ?>
                        <li class="nav-item">
                            <a href="<?= base_url('Pengumuman') ?>" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Dashboard Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Berita') ?>" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Ekstrakurikuller') ?>" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>Ekstrakurikuller</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Jurusan') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Kelas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Mapel') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Guru') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Siswa') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Penilaiantugas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Penilaian Tugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Nilai') ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Jadwalpelajaran') ?>" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Jadwal Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Tugas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Tugas</p>
                            </a>
                        </li>

                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $judul ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <?php if ($page) {
                    echo view($page);
                } ?>
            </section>
        </div>
    </div>
</body>

</html>