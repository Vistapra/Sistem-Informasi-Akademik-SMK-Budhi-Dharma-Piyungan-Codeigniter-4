<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .small-box {
        border-radius: .25rem;
        display: block;
        margin-bottom: 20px;
        position: relative;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .small-box-inner {
        padding: 10px;
    }

    .small-box h3 {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    .small-box-footer {
        position: relative;
        text-align: center;
        padding: 3px 0;
        color: #fff;
        background: rgba(0, 0, 0, 0.1);
        display: block;
        z-index: 10;
        text-decoration: none;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
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
            <?php
            $smallBoxes = [
                [
                    'bgClass' => 'bg-info',
                    'title' => 'Data Pengumuman',
                    'url' => base_url('Pengumuman')
                ],
                [
                    'bgClass' => 'bg-info',
                    'title' => 'Data Tugas',
                    'url' => base_url('Tugas')
                ],
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
                    'title' => 'Data Ekstrakurikuller',
                    'url' => base_url('Ekstrakurikuller')
                ],
                [
                    'bgClass' => 'bg-primary',
                    'title' => 'Data Jurusan',
                    'url' => base_url('Jurusan')
                ],
                [
                    'bgClass' => 'bg-secondary',
                    'title' => 'Data Jadwal Pelajaran',
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
                    <div class="inner small-box-inner">
                        <h3><?= $box['title'] ?></h3>
                    </div>
                    <a href="<?= $box['url'] ?>" class="small-box-footer">Tambah <?= $box['title'] ?> <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>