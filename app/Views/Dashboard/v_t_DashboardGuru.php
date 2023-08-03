<body>
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= base_url('fotoguru/' . $guru['foto_guru']) ?>" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $guru['nama_guru']; ?></h5>
                        <p class="text-muted mb-1"><?= $guru['nip']; ?></p>
                        <p class="text-muted mb-4"><?= $guru['jurusan']; ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= base_url('Guru/View/' . $guru['id_guru']) ?>" class="btn btn-primary">Profil
                                Guru <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pengumuman</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Pengumuman/Tambah') ?>" class="btn btn-primary">Tambah Pengumuman</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Nilai Siswa</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Nilai/Tambah') ?>" class="btn btn-primary">Tambah Nilai</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tugas</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Tugas/Tambah') ?>" class="btn btn-primary">Tambah Tugas</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Mengajar</h3>
                    </div>
                    <div class="card-body">
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
                                <?php foreach ($jadwal_pelajaran as $jadwal) { ?>
                                <tr>
                                    <td><?= $jadwal['hari']; ?></td>
                                    <td><?= $jadwal['waktu_mulai']; ?></td>
                                    <td><?= $jadwal['waktu_selesai']; ?></td>
                                    <td><?= $jadwal['kelas']; ?></td>
                                    <td><?= $jadwal['mapel']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>