<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Jadwalpelajaran/UbahData/' . $jadwalpelajaran['id_jadwal']) ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_kelas">Nama Kelas</label>
                        <select name="id_kelas" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Kelas --</option>
                            <?php foreach ($kelas as $k) { ?>
                            <option value="<?= $k['id_kelas']; ?>"
                                <?= $k['id_kelas'] === $jadwalpelajaran['id_kelas'] ? 'selected' : ''; ?>>
                                <?= $k['kelas']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_mapel">Mata Pelajaran</label>
                        <select name="id_mapel" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Mata Pelajaran --</option>
                            <?php foreach ($mapel as $data_mapel) { ?>
                            <option value="<?= $data_mapel['id_mapel']; ?>"
                                <?= $data_mapel['id_mapel'] === $jadwalpelajaran['id_mapel'] ? 'selected' : ''; ?>>
                                <?= $data_mapel['mapel']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_guru">Guru Pengajar</label>
                        <select name="id_guru" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Guru Pengajar --</option>
                            <?php foreach ($guru as $g) { ?>
                            <option value="<?= $g['id_guru']; ?>"
                                <?= $g['id_guru'] === $jadwalpelajaran['id_guru'] ? 'selected' : ''; ?>>
                                <?= $g['nama_guru']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Hari --</option>
                            <option value="Senin" <?= $jadwalpelajaran['hari'] === 'Senin' ? 'selected' : ''; ?>>Senin
                            </option>
                            <option value="Selasa" <?= $jadwalpelajaran['hari'] === 'Selasa' ? 'selected' : ''; ?>>
                                Selasa
                            </option>
                            <option value="Rabu" <?= $jadwalpelajaran['hari'] === 'Rabu' ? 'selected' : ''; ?>>Rabu
                            </option>
                            <option value="Kamis" <?= $jadwalpelajaran['hari'] === 'Kamis' ? 'selected' : ''; ?>>Kamis
                            </option>
                            <option value="Jumat" <?= $jadwalpelajaran['hari'] === 'Jumat' ? 'selected' : ''; ?>>Jumat
                            </option>
                            <option value="Sabtu" <?= $jadwalpelajaran['hari'] === 'Sabtu' ? 'selected' : ''; ?>>Sabtu
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="waktu_mulai">Waktu Mulai</label>
                        <input type="time" name="waktu_mulai" class="form-control" required
                            value="<?= $jadwalpelajaran['waktu_mulai']; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="waktu_selesai">Waktu Selesai</label>
                        <input type="time" name="waktu_selesai" class="form-control" required
                            value="<?= $jadwalpelajaran['waktu_selesai']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            <a href="<?= base_url('Jadwalpelajaran') ?>" class="btn btn-success btn-flat">Kembali</a>
        </div>
        <?= form_close() ?>
    </div>
</div>