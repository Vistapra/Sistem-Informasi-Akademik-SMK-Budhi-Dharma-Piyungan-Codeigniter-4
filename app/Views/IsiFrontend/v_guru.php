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
            <?php foreach ($guru as $key => $data) { ?>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="<?= base_url('fotoguru/' . $data['foto_guru']) ?>" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="#">
                            <h6><?= $data['nama_guru'] ?></h6>
                        </a>
                        <span><?= $data['jurusan'] ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>