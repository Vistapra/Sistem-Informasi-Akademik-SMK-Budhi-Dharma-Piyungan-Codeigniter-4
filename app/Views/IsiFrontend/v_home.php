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

<section id="category-part">
    <div class="container">
        <div class="category pt-40 pb-80">
            <div class="row">
                <div class="col-lg-4">
                    <div class="category-text pt-40">
                        <h2>Sekolah Terbaik DiJogja</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="row category-slied mt-40">
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-1.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Multi Bahasa</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-2.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Entrepreneur</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-3.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Studi Pustaka</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-1.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Bahasa</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-2.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Entrepreneur</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="<?= base_url('smkbudhi') ?>/images/all-icon/ctg-3.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Perpustakaan</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Profil Sekolah</h5>
                    <h2>SMK Budhi Dharma Piyungan Bantul</h2>
                </div>
                <div class="about-cont">
                    <p>SMK Budhi Dharma Piyungan adalah lembaga pendidikan menengah kejuruan yang terletak di Kabupaten
                        Bantul, Provinsi Daerah Istimewa Yogyakarta. Tujuan utama sekolah ini adalah memberikan
                        pendidikan dan pelatihan kejuruan kepada siswa-siswi agar siap memasuki dunia kerja setelah
                        lulus. Dengan visi menjadi lembaga pendidikan kejuruan unggul dalam pembentukan karakter dan
                        keterampilan berbasis teknologi, serta misi untuk menyelenggarakan pendidikan kejuruan
                        berkualitas sesuai perkembangan teknologi, mengembangkan kompetensi siswa dalam bidang akademik
                        dan praktik, mendorong pembentukan karakter berlandaskan nilai-nilai keagamaan dan kebajikan,
                        serta menjalin kemitraan dengan dunia industri guna meningkatkan peluang kerja bagi lulusan.</p>
                    <a href="#" class="main-btn mt-55">Profil Sekolah</a>
                </div>
            </div>
            <!-- <div class="col-lg-6 offset-lg-1">
                <div class="about-event mt-50">
                    <div class="event-title">
                        <h3>Upcoming events</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="events-singel.html">
                                    <h4>Campus clean workshop</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="events-singel.html">
                                    <h4>Tech Summit</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="events-singel.html">
                                    <h4>Enviroement conference</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
            <div class="about-bg">
                <img src="<?= base_url('smkbudhi') ?>/images/sekolah3.jpg" alt="About">
            </div>
</section>