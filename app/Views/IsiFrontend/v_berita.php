<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
    style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipNLKjubUAntKpFlGmOAa2ZBFos24MvYXFHEwIKV=s1360-w1360-h1020)">
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

<section id="blog-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($berita as $key => $data) { ?>
                <div class="singel-blog mt-30">
                    <div class="blog-thum">
                        <img src="<?= base_url('gambarberita/' . $data['gambar']) ?>" alt="Blog">
                    </div>
                    <div class="blog-cont">
                        <a href="<?= base_url('Home/tampilBerita/' .$data['slug_berita']) ?>">
                            <h3><?= $data['judul_berita'] ?></h3>
                        </a>
                        <ul>
                            <li><i class="fa fa-calendar"></i><?= date('d M Y', strtotime($data['tgl_berita'])) ?></li>
                            <li><i class="fa fa-clock-o"></i><?= $data['jam_berita'] ?></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <?= $pager->links('berita', 'custom_pager') ?>
            </div>
        </div>
    </div>
</section>