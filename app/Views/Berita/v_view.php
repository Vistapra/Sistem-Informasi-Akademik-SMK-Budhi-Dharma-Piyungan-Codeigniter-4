<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> Detail Berita</h3>
        </div>
        <div class="card-body">
            <hr> <!-- Garis pemisah -->
            <h4><strong>Judul Berita:</strong> <?= $berita['judul_berita'] ?></h4>
            <hr> <!-- Garis pemisah -->
            <p><strong>Tanggal Berita:</strong> <?= $berita['tgl_berita'] ?></p>
            <hr> <!-- Garis pemisah -->
            <p><strong>Jam Berita:</strong> <?= $berita['jam_berita'] ?></p>
            <hr> <!-- Garis pemisah -->
            <p><strong>Isi Berita:</strong> <?= $berita['isi_berita'] ?></p>
            <hr> <!-- Garis pemisah -->
            <p><strong>Slug Berita:</strong> <?= $berita['slug_berita'] ?></p>
            <hr> <!-- Garis pemisah -->
            <?php if (!empty($berita['gambar'])): ?>
            <strong>Gambar berita:</strong><br>
            <img src="<?= base_url('gambarberita/' . $berita['gambar']) ?>" style="width: 100%; height: auto;"
                alt="Gambar Berita">
            <hr> <!-- Garis pemisah -->
            <?php endif; ?>
            <a href="<?= base_url('Berita') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>