<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Responsif Berita</title>
    <style>
    /* Styling untuk tampilan berita */
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

    .blog-thum img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .blog-cont {
        padding: 20px;
    }

    .blog-cont a {
        text-decoration: none;
        color: #333;
    }

    .blog-cont h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-cont ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .blog-cont ul li {
        display: flex;
        align-items: center;
        margin-right: 10px;
        color: #999;
    }

    .blog-cont ul li i {
        margin-right: 5px;
    }

    .blog-cont p {
        line-height: 1.6;
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
                                <li class="breadcrumb-item active" aria-current="page"><?= $berita['judul_berita'] ?>
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
                            <img src="<?= base_url('gambarberita/' . $berita['gambar']) ?>" alt="Blog">
                        </div>
                        <div class="blog-cont">
                            <a>
                                <h3><?= $berita['judul_berita'] ?></h3>
                            </a>
                            <ul>
                                <li><i class="fa fa-calendar"></i><?= date('d M Y', strtotime($berita['tgl_berita'])) ?>
                                </li>
                                <li><i class="fa fa-clock-o"></i><?= $berita['jam_berita'] ?></li>
                            </ul>
                            <p><?= $berita['isi_berita'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>