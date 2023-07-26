<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Judul Berita:</strong></td>
                        <td><?= $berita['judul_berita'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Berita:</strong></td>
                        <td><?= $berita['tgl_berita'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jam Berita:</strong></td>
                        <td><?= $berita['jam_berita'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Isi Berita:</strong></td>
                        <td><?= $berita['isi_berita'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Slug Berita:</strong></td>
                        <td><?= $berita['slug_berita'] ?></td>
                    </tr>
                </tbody>
            </table>

            <?php if (!empty($berita['gambar']) && file_exists('gambarberita/' . $berita['gambar'])) { ?>
            <strong>Gambar berita:</strong><br>
            <img src="<?= base_url('gambarberita/' . $berita['gambar']) ?>" style="width: 100%; height: auto;"
                alt="Gambar Berita">
            <?php } ?>

            <div style="text-align: right;">
                <a href="<?= base_url('Berita') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>