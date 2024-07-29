<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK BUDHI DHARMA PIYUNGAN</title>
    <link rel="shortcut icon" href="<?= base_url('smkbudhi') ?>/images/logosmk.png" alt="Logo">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/animate.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/default.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/responsive.css">
    <link rel="stylesheet" href="path-to-your-font-awesome-css/font-awesome.min.css">
</head>

<body>
    <?php
    $db = \Config\Database::connect();
    $jurusan = $db->table('jurusan')->get()->getResultArray();
    ?>

    <header id="header-part">

        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="<?= base_url('smkbudhi') ?>/images/all-icon/map.png"
                                        alt="icon"><span>5F6H+MRJ, Jalan Nasional III
                                        No.Plesedan</span></li>
                                <li><img src="<?= base_url('smkbudhi') ?>/images/all-icon/email.png"
                                        alt="icon"><span>smkbdbs@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Jam Buka Sekolah : Senin sampai Sabtu - 7 Am to 4 Pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="<?= base_url('Home') ?>">
                                <img src="<?= base_url('smkbudhi') ?>/images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="<?= base_url('smkbudhi') ?>/images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Customer Service Sekolah</p>
                                    <span>088232324437</span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="<?= base_url('Auth') ?>" class="main-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="<?= base_url('Home') ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Jurusan</a>
                                        <ul class="sub-menu">
                                            <?php foreach ($jurusan as $key => $data) { ?>
                                            <li>
                                                <a href="<?= base_url('Home/Jurusan/' . $data['id_jurusan']) ?>">
                                                    <?= $data['jurusan'] ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('Home/Berita') ?>">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('Home/Guru') ?>">Guru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="<?= base_url('Home/Ekstrakurikuller') ?>">Ekstrakurikuller</a>
                                    </li>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li>
                                    <a href="<?= base_url('Auth') ?>" style="font-size: 1.5em;">
                                        <i class="fa fa-sign-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <section class="content">
        <?php if ($page) {
            echo view($page);
        } ?>
    </section>

    <footer class="header-top d-none d-lg-block">
        <div class="text-center p-3">
            <strong><a class="text-white">V1 2023-"SMK BUDHI DHARMA PIYUNGAN"</a></strong>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/slick.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/waypoints.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.nice-number.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/validator.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/ajax-contact.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/main.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/map-script.js"></script>
</body>

</html>