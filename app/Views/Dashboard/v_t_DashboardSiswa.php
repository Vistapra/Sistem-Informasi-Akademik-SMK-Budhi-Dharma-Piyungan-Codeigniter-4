<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card bg-info">
                    <img src="<?= base_url('fotosiswa/' . $siswa['foto_siswa']) ?>" alt="Profile Picture"
                        class="card-img-top img-fluid" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h3>Nama: <?= $siswa['nama_siswa']; ?></h3>
                        <h4>NISN: <?= $siswa['nisn']; ?></h4>
                        <a href="<?= base_url('Siswa/View/' . $siswa['id_siswa']) ?>" class="btn btn-primary">Profil
                            Lengkap
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Pelajaran Siswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Waktu Mulai</th>
                                    <th scope="col">Waktu Selesai</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_siswa as $jadwal) { ?>
                                <tr>
                                    <td><?= $jadwal['hari']; ?></td>
                                    <td><?= $jadwal['waktu_mulai']; ?></td>
                                    <td><?= $jadwal['waktu_selesai']; ?></td>
                                    <td><?= $jadwal['kelas']; ?></td>
                                    <td><?= $jadwal['mapel']; ?></td>
                                    <td><?= $jadwal['nama_guru']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nilai Siswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Tahun Akademik</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($nilai_siswa as $nilai) { ?>
                    <tr>
                        <td><?= $nilai['mapel']; ?></td>
                        <td><?= $nilai['nilai_angka']; ?></td>
                        <td><?= $nilai['semester']; ?></td>
                        <td><?= $nilai['tahun_akademik']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>