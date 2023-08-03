<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Pengumuman/UbahData/' . $pengumuman['id_pengumuman']) ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_guru">Guru Pengajar</label>
                        <select name="id_guru" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Guru --</option>
                            <?php foreach ($guru as $g) { ?>
                            <option value="<?= $g['id_guru']; ?>"
                                <?= $g['id_guru'] === $pengumuman['id_guru'] ? 'selected' : ''; ?>>
                                <?= $g['nama_guru']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengumuman">Judul Pengumuman</label>
                        <input type="text" name="judul_pengumuman" class="form-control"
                            value="<?= $pengumuman['judul_pengumuman']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="isi_pengumuman">Isi Pengumuman</label>
                        <textarea name="isi_pengumuman" class="form-control" rows="4"
                            required><?= $pengumuman['isi_pengumuman']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pengumuman">Tanggal Pengumuman</label>
                        <input type="datetime-local" name="tgl_pengumuman" class="form-control"
                            value="<?= date('Y-m-d\TH:i:s', strtotime($pengumuman['tgl_pengumuman'])); ?>" required>
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