<?php
$images = [
    "gambarsekolah/sekolah1.jpg",
    "gambarsekolah/sekolah2.jpg",
    "gambarsekolah/sekolah3.jpg",
];
?>

<section id="slider-part" class="slider-active">
    <?php foreach ($images as $image) : ?>
    <div class="single-slider bg_cover pt-150" style="background-image: url(<?php echo $image; ?>)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">SMK BUDHI DHARMA BOARDING SCHOOL PIYUNGAN</h1>
                        <div class="button float-left">
                            <a href="<?= base_url('Home/Berita') ?>" class="main-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>