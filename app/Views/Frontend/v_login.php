<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISBUDHI V1 | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url('Home') ?>" class="h1"><b>SISBUDHI</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-danger">' . session()->getFlashdata('pesan') . '</div>';
                }
                ?>

                <?= form_open('Auth/cekLogin') ?>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username/NISN/NIP">
                </div>
                <div class="form-group">
                    <select name="level" class="form-control">
                        <option value="">Level</option>
                        <option value="1">Admin</option>
                        <option value="2">Guru</option>
                        <option value="3">Siswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="row">

                    <label class="col-8">
                        <a href="<?php echo base_url('home'); ?>" class="btn btn-primary">
                            <i class="fas fa-globe"></i> Website
                        </a>

                    </label>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('AdminLte') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLte') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>