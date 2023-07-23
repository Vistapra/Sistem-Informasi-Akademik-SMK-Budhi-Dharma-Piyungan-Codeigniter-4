<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <hr>
            <h4><strong>Judul Berita:</strong> <?= $berita['judul_berita'] ?></h4>
            <hr>
            <p><strong>Tanggal Berita:</strong> <?= $berita['tgl_berita'] ?></p>
            <hr>
            <p><strong>Jam Berita:</strong> <?= $berita['jam_berita'] ?></p>
            <hr>
            <p><strong>Isi Berita:</strong> <?= $berita['isi_berita'] ?></p>
            <hr>
            <p><strong>Slug Berita:</strong> <?= $berita['slug_berita'] ?></p>
            <hr>
            <?php if (!empty($berita['gambar']) && file_exists('gambarberita/' . $berita['gambar'])) { ?>
            <strong>Gambar berita:</strong><br>
            <img src="<?= base_url('gambarberita/' . $berita['gambar']) ?>" style="width: 100%; height: auto;"
                alt="Gambar Berita">
            <hr>
            <?php } ?>
            <a href="<?= base_url('Berita') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>