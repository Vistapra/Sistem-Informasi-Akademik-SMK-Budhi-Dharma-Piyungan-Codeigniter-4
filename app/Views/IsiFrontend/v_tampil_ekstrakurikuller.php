<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Styling untuk bagian konten berita */
    #blog-page {
        padding-top: 90px;
        padding-bottom: 120px;
        background-color: #f9f9f9;
    }

    .gray-bg {
        background-color: #f9f9f9;
    }

    .singel-blog {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
    }

    .blog-thum {
        position: relative;
    }

    .blog-thum .image img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .blog-thum .cont {
        padding: 20px;
    }

    .blog-thum a {
        text-decoration: none;
        color: #333;
    }

    .blog-thum h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-thum hr {
        border: 0;
        border-top: 1px solid #eee;
        margin-bottom: 15px;
    }

    .blog-thum span {
        display: block;
        margin-bottom: 10px;
    }

    /* Styling responsif */
    @media (min-width: 992px) {
        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-lg-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
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
                                <li class="breadcrumb-item active" aria-current="page"><?= $ekstra['nama_ekstra'] ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <div class="image">
                                <img src="<?= base_url('fotoekstra/' . $ekstra['foto_ekstra']) ?>" alt="Foto Ekstra">
                            </div>
                            <div class="cont">
                                <a>
                                    <h1><?= $ekstra['nama_ekstra'] ?></h1>
                                </a>
                                <hr>
                                <span><?= $ekstra['jadwal_kegiatan'] ?></span>
                                <span><?= $ekstra['deskripsi'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>