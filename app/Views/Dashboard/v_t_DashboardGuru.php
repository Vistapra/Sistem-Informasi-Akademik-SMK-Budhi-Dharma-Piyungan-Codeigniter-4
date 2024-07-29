<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .avatar {
        width: 150px;
    }

    .btn-icon {
        display: inline-flex;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= base_url('fotoguru/' . $guru['foto_guru']) ?>" alt="avatar"
                            class="rounded-circle avatar img-fluid">
                        <h5 class="my-3"><?= $guru['nama_guru']; ?></h5>
                        <p class="text-muted mb-1"><?= $guru['nip']; ?></p>
                        <p class="text-muted mb-4"><?= $guru['jurusan']; ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= base_url('Guru/View/' . $guru['id_guru']) ?>"
                                class="btn btn-primary btn-icon">Profil Guru <i
                                    class="fas fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Mengajar</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jadwal_pelajaran as $jadwal): ?>
                                    <?php if ($jadwal['hari'] == date('l')): ?>
                                    <tr>
                                        <td><?= $jadwal['hari']; ?></td>
                                        <td><?= $jadwal['waktu_mulai']; ?></td>
                                        <td><?= $jadwal['waktu_selesai']; ?></td>
                                        <td><?= $jadwal['kelas']; ?></td>
                                        <td><?= $jadwal['mapel']; ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pengumuman</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Pengumuman/Tambah') ?>" class="btn btn-primary">Tambah Pengumuman</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Nilai Siswa</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Nilai/Tambah') ?>" class="btn btn-primary">Tambah Nilai</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tugas</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Tugas/Tambah') ?>" class="btn btn-primary">Tambah Tugas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>