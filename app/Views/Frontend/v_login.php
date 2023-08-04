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
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLte') ?>/dist/css/adminlte.min.css">
    <style>
    body {
        background-image: url('gambarsekolah/sekolah4.jpg');
        background-size: cover;
    }

    .login-box {
        margin: auto;
        max-width: 400px;
        background: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        background-color: transparent;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url('Home') ?>" class="h1"><b>SISBUDHI</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
                <?= form_open('Auth/cekLogin') ?>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="NISN/NIP" required>
                </div>
                <div class="form-group">
                    <select name="level" class="form-control" required>
                        <option value="">---Level---</option>
                        <option value="3">Admin</option>
                        <option value="1">Guru</option>
                        <option value="2">Siswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('AdminLte') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('AdminLte') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>