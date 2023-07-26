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
                        <a href="<?= base_url('Home/TampilEkstrakurikuller') ?>">
                            <h6><?= $data['nama_ekstra'] ?></h6>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>