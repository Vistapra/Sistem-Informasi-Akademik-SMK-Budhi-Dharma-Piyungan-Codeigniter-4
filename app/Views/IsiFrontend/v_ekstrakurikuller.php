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

    #teachers-page .singel-teachers {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    #teachers-page .singel-teachers .image {
        position: relative;
        overflow: hidden;
        border-radius: 50%;
        margin-bottom: 15px;
        transition: transform 0.3s;
    }

    #teachers-page .singel-teachers .image img {
        max-width: 100%;
        height: auto;
    }

    #teachers-page .singel-teachers .cont {
        padding: 10px 0;
        transition: background-color 0.3s;
    }

    #teachers-page .singel-teachers:hover {
        transform: translateY(-5px);
        /* Lift up on hover */
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    #teachers-page .singel-teachers:hover .image {
        transform: scale(1.1);
        /* Enlarge image on hover */
    }

    #teachers-page .singel-teachers:hover .cont {
        background-color: rgba(0, 0, 0, 0.5);
        /* Change background color on hover */
    }

    #teachers-page .singel-teachers .cont a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s;
    }

    #teachers-page .singel-teachers .cont a:hover {
        color: #ccc;
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

    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <?php foreach ($ekstra as $data) { ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="<?= base_url('fotoekstra/' . $data['foto_ekstra']) ?>" alt="Foto ekstra">
                        </div>
                        <div class="cont">
                            <a href="<?= base_url('Home/TampilEkstra/' . $data['nama_ekstra']) ?>">
                                <h6><?= $data['nama_ekstra'] ?></h6>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script>
    // Reveal the teachers section with animation when the page is loaded
    document.addEventListener("DOMContentLoaded", function() {
        const teachersSection = document.querySelector("#teachers-page");
        teachersSection.style.opacity = 1;
        teachersSection.style.transform = "translateY(0)";
    });
    </script>
</body>

</html>