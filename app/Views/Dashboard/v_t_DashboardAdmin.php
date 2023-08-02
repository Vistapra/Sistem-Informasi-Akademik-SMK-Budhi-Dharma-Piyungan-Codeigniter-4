<body>
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <?php
            $smallBoxes = [
                [
                    'bgClass' => 'bg-info',
                    'title' => 'Data Guru',
                    'url' => base_url('Guru')
                ],
                [
                    'bgClass' => 'bg-success',
                    'title' => 'Data Siswa',
                    'url' => base_url('Siswa')
                ],
                [
                    'bgClass' => 'bg-warning',
                    'title' => 'Data Berita',
                    'url' => base_url('Berita')
                ],
                [
                    'bgClass' => 'bg-danger',
                    'title' => 'Data Kelas',
                    'url' => base_url('Kelas')
                ],
                [
                    'bgClass' => 'bg-primary',
                    'title' => 'Ekstrakurikuller',
                    'url' => base_url('Ekstrakurikuller')
                ],
                [
                    'bgClass' => 'bg-primary',
                    'title' => 'Jurusan',
                    'url' => base_url('Jurusan')
                ],
                [
                    'bgClass' => 'bg-secondary',
                    'title' => 'Jadwal Pelajaran',
                    'url' => base_url('Jadwalpelajaran')
                ],
                [
                    'bgClass' => 'bg-secondary',
                    'title' => 'Data Nilai',
                    'url' => base_url('Nilai')
                ],
                [
                    'bgClass' => 'bg-dark',
                    'title' => 'Data Mata Pelajaran',
                    'url' => base_url('Mapel')
                ]
            ];
            ?>

            <?php foreach ($smallBoxes as $box) { ?>
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box <?= $box['bgClass'] ?>">
                    <div class="inner">
                        <h3><?= $box['title'] ?></h3>
                    </div>
                    <a href="<?= $box['url'] ?>" class="small-box-footer">Tambah <?= $box['title'] ?> <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>