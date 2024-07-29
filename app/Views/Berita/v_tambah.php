<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Berita/TambahData') ?>
        <div class="card-body">
            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan judul berita"
                    required>
            </div>
            <div class="form-group">
                <label for="slug_berita">Slug Berita</label>
                <input type="text" name="slug_berita" class="form-control" placeholder="Masukkan slug berita" required>
            </div>

            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea name="isi_berita" class="form-control" rows="6" placeholder="Masukkan isi berita"
                    required></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control-file" required>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('Berita') ?>" class="btn btn-success">Kembali</a>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>