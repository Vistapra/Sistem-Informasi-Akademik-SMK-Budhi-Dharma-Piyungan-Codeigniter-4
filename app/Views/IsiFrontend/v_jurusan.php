<section id="page-banner" class="pt-10 pb-10 bg_cover" data-overlay="8"
    style="background-image: url(<?= base_url('gambarsekolah/sekolah2.jpg') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Jurusan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Jurusan</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $jurusan['jurusan'] ?></li>
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