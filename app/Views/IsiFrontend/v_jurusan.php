<!DOCTYPE html>
<html>

<head>
    <style>
    /* Styling untuk tampilan jurusan */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Styling untuk bagian konten jurusan */
    #contact-page {
        padding-top: 90px;
        padding-bottom: 120px;
        background-color: #f9f9f9;
    }

    .section-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-title h5 {
        font-size: 18px;
        color: #333;
    }

    .section-title h2 {
        font-size: 36px;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .main-form {
        padding: 20px;
    }

    /* Styling responsif */
    @media (max-width: 767px) {
        #page-banner {
            height: 250px;
            padding: 10px;
        }
    }
    </style>
</head>

<body>
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url(<?= base_url('gambarsekolah/sekolah2.jpg') ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?= $judul ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><?= $judul ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $jurusan['jurusan'] ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Visi Dan Misi</h5>
                            <h2><?= $jurusan['jurusan'] ?></h2>
                        </div>
                        <div class="main-form pt-45">
                            <form id="contact-form" action="#" method="post" data-toggle="validator">
                                <div class="row">
                                    <?= $jurusan['visi_misi'] ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>