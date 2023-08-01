<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-12 mb-3">
                <div class="card bg-info">
                    <img src="<?= base_url('fotoguru/' . $guru['foto_guru']) ?>" alt="Profile Picture"
                        class="card-img-top img-fluid" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h3>Nama: <?= $guru['nama_guru']; ?></h3>
                        <h4>NIP: <?= $guru['nip']; ?></h4>
                        <a href="<?= base_url('Guru/View/' . $guru['id_guru']) ?>" class="btn btn-primary">Profil
                            Lengkap
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-12 mb-3">
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

        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Nilai Siswa</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Nilai') ?>" class="btn btn-primary">Tambah Nilai</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">File Assessment</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Assessment/Tambah') ?>" class="btn btn-primary">Tambah File
                            Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>