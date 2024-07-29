<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/styles.css">
    <style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Blog Styles */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
        margin-bottom: 40px;
        opacity: 0;
        /* Initially hidden */
        transform: translateY(20px);
        /* Slide down effect */
        transition: opacity 0.5s, transform 0.5s;
    }

    .blog-card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
        overflow: hidden;
    }

    .blog-card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1;
    }

    .blog-card:hover:before {
        opacity: 1;
    }

    .blog-card img {
        max-width: 100%;
        /* Adjust as needed */
        height: auto;
        margin-bottom: 20px;
        transition: transform 0.3s;
        z-index: 2;
    }

    .blog-card:hover img {
        transform: scale(1.1);
        /* Enlarge on hover */
    }

    .blog-content {
        text-align: center;
        position: relative;
        z-index: 2;
        color: #fff;
    }

    .blog-title {
        font-size: 24px;
        margin: 0;
    }

    .blog-meta {
        margin-top: 10px;
    }

    .blog-meta span {
        display: inline-block;
        margin-right: 10px;
        font-size: 14px;
    }

    /* Custom Pager Styles */
    .custom-pager {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }

    .custom-pager a,
    .custom-pager span {
        display: inline-block;
        padding: 5px 10px;
        margin: 0 2px;
        background-color: #f6f6f6;
        color: #333;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .custom-pager a:hover,
    .custom-pager .active {
        background-color: #333;
        color: #fff;
    }

    /* Read More Button Styles */
    .read-more {
        display: inline-block;
        padding: 10px 15px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .read-more:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url(<?= base_url('gambarsekolah/sekolah3.jpg') ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?= $judul ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><?= $judul ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $subjudul ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section id="blog-page-grid" class="blog-grid">
            <?php foreach ($berita as $key => $data) { ?>
            <div class="blog-card">
                <div class="blog-thumb">
                    <img src="<?= base_url('gambarberita/' . $data['gambar']) ?>" alt="Blog">
                </div>
                <div class="blog-content">
                    <h2 class="blog-title"><?= $data['judul_berita'] ?></h2>
                    <div class="blog-meta">
                        <span><i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($data['tgl_berita'])) ?></span>
                        <span><i class="fa fa-clock-o"></i> <?= $data['jam_berita'] ?></span>
                    </div>
                    <a href="<?= base_url('Home/tampilBerita/' . $data['slug_berita']) ?>" class="read-more">Baca
                        Selengkapnya</a>
                </div>
            </div>
            <?php } ?>

            <div class="custom-pager">
                <?= $pager->links('berita', 'custom_pager') ?>
            </div>
        </section>
    </div>

    <script>
    // Reveal the blog grid with animation when the page is loaded
    document.addEventListener("DOMContentLoaded", function() {
        const blogGrid = document.querySelector(".blog-grid");
        blogGrid.style.opacity = 1;
        blogGrid.style.transform = "translateY(0)";
    });
    </script>
</body>

</html>