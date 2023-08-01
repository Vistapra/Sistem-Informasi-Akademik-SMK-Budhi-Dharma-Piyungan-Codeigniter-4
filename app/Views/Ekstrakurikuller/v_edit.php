<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Ekstrakurikuller/UbahData/' . $ekstra['id_ekstra']); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_ekstra">Nama Ekstrakurikuller</label>
                <input type="text" name="nama_ekstra" class="form-control" value="<?= $ekstra['nama_ekstra']; ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Ekstrakurikuller"
                    value="<?= $ekstra['deskripsi'] ?>" required>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_guru">Guru Pengajar</label>
                        <select name="id_guru" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Guru Pembimbing --</option>
                            <?php foreach ($guru as $g) { ?>
                            <option value="<?= $g['id_guru']; ?>"
                                <?= $g['id_guru'] === $ekstra['id_guru'] ? 'selected' : ''; ?>>
                                <?= $g['nama_guru']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jadwal_kegiatan">Jadwal Kegiatan</label>
                    <input type="text" name="jadwal_kegiatan" class="form-control"
                        placeholder="Masukkan Jadwal Kegiatan" value="<?= $ekstra['jadwal_kegiatan'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_peserta">Jumlah Peserta</label>
                    <input type="text" name="jumlah_peserta" class="form-control" maxlength="2"
                        placeholder="Masukkan Jumlah Peserta" value="<?= $ekstra['jumlah_peserta'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="foto_ekstra">Foto</label>
                    <input type="file" name="foto_ekstra" class="form-control-file">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('Ekstrakurikuller'); ?>" class="btn btn-success">Kembali</a>
            </div>
            <?= form_close(); ?>
        </div>
    </div>