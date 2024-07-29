<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Ekstrakurikuller/TambahData') ?>
        <div class="card-body">
            <!-- Nama Ekstrakurikuller -->
            <div class="form-group">
                <label for="nama_ekstra">Nama Ekstrakurikuller</label>
                <input type="text" name="nama_ekstra" class="form-control" placeholder="Masukkan Nama Ekstrakurikuller"
                    required>
            </div>

            <!-- Deskripsi -->
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Ekstrakurikuller"
                    required>
            </div>

            <div class="row">
                <!-- Guru Pengajar -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_guru">Guru Pengajar</label>
                        <select name="id_guru" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Guru Pembimbing --</option>
                            <?php foreach ($guru as $g) { ?>
                            <option value="<?= $g['id_guru']; ?>"><?= $g['nama_guru']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <!-- Jadwal Kegiatan -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jadwal_kegiatan">Jadwal Kegiatan</label>
                        <input type="text" name="jadwal_kegiatan" class="form-control"
                            placeholder="Masukkan Jadwal Kegiatan" required>
                    </div>
                </div>

                <!-- Jumlah Peserta -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jumlah_peserta">Jumlah Peserta</label>
                        <input type="text" name="jumlah_peserta" class="form-control" maxlength="2"
                            placeholder="Masukkan Jumlah Peserta" required>
                    </div>
                </div>

                <!-- Foto Ekstrakurikuller -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="foto_ekstra">Foto Ekstrakurikuller</label>
                        <input type="file" name="foto_ekstra" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Submission -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?= form_close() ?>
    </div>
</div>