<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Tugas/TambahData') ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="kelas">Nama Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Kelas --</option>
                            <?php foreach ($kelas as $k): ?>
                            <option value="<?= $k['id_kelas']; ?>"><?= $k['kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_mapel">Mata Pelajaran</label>
                        <select name="id_mapel" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Mata Pelajaran --</option>
                            <?php foreach ($mapel as $m): ?>
                            <option value="<?= $m['id_mapel']; ?>"><?= $m['mapel']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="judul_tugas">Judul Tugas</label>
                        <input type="text" name="judul_tugas" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="file_tugas">File Tugas</label>
                        <input type="file" name="file_tugas" class="form-control-file" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tgl_deadline">Tanggal Deadline</label>
                        <input type="date" name="tgl_deadline" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
        </div>
        <?= form_close() ?>
    </div>
</div>