<!DOCTYPE html>
<html>

<head>
    <title>Sample Page</title>
    <!-- Include your CSS and JS files here -->
</head>

<body>
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://ik.imagekit.io/demo/medium_cafe_B1iTdD0C.jpg" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $admin['nama_admin']; ?></h5>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= base_url('admin/View/' . $admin['id_admin']) ?>" class="btn btn-primary">Profil
                                admin <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small boxes (Stat box) -->
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Data Guru</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url('Guru') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Data Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('Siswa') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Data Berita</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('Berita') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Data Kelas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?= base_url('Kelas') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Additional small boxes -->
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>28</h3>
                        <p>Ekstrakurikuller</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a href="<?= base_url('Ekstrakurikuller') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>28</h3>
                        <p>Jurusan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a href="<?= base_url('Jurusan') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Jadwal Pelajaran</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="<?= base_url('Jadwalpelajaran') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Data Nilai</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="<?= base_url('Nilai') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3>95</h3>
                        <p>Data Mata Pelajaran</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a href="<?= base_url('Mapel') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>