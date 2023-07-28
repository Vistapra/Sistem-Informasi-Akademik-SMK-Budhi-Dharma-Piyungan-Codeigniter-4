<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Guru/UbahData/' . $guru['id_guru']); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_guru">Kode Guru</label>
                <input type="text" name="kode_guru" maxlength="4" class="form-control"
                    value="<?= $guru['kode_guru']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" name="nip" maxlength="18" class="form-control" value="<?= $guru['nip']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" name="nama_guru" class="form-control" value="<?= $guru['nama_guru']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $guru['tgl_lahir']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kel">Jenis Kelamin</label>
                <select name="jenis_kel" class="form-control" required>
                    <option value="L" <?= $guru['jenis_kel'] === 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="P" <?= $guru['jenis_kel'] === 'P' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telp_guru">Telepon Guru</label>
                <input type="text" name="telp_guru" maxlength="12" class="form-control"
                    value="<?= $guru['telp_guru']; ?>" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" value="<?= $guru['pendidikan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Jurusan --</option>
                    <?php foreach ($jurusan as $j) { ?>
                    <option value="<?= $j['id_jurusan']; ?>"
                        <?= ($j['id_jurusan'] == $guru['id_jurusan']) ? 'selected' : ''; ?>>
                        <?= $j['jurusan']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password Guru</label>
                <input type="text" name="password" class="form-control" value="<?= $guru['password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="foto_guru">Foto</label>
                <input type="file" name="foto_guru" class="form-control-file">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('Guru'); ?>" class="btn btn-success">Kembali</a>
        </div>
        <?= form_close(); ?>
    </div>
</div>