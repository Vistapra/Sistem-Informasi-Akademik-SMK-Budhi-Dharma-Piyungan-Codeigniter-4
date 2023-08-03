<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Pengumuman/TambahData') ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_guru">Nama Guru</label>
                        <select name="id_guru" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Guru --</option>
                            <?php foreach ($guru as $g) { ?>
                            <option value="<?= $g['id_guru']; ?>"><?= $g['nama_guru']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengumuman">Judul Pengumuman</label>
                        <input type="text" name="judul_pengumuman" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="isi_pengumuman">Isi Pengumuman</label>
                        <textarea name="isi_pengumuman" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pengumuman">Tanggal Pengumuman</label>
                        <input type="datetime-local" name="tgl_pengumuman" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            <a href="<?= base_url('Pengumuman') ?>" class="btn btn-success btn-flat">Kembali</a>
        </div>
        <?= form_close() ?>
    </div>
</div>