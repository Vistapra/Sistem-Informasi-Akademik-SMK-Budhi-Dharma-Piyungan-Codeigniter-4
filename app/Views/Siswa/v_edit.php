<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Siswa/UbahData/' . $siswa['id_siswa']); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" inputmode="numeric" name="nisn" class="form-control"
                    placeholder="Masukkan NISN Siswa" value="<?= $siswa['nisn']; ?>" required>
            </div>

            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" placeholder="Masukkan Nama Siswa"
                    value="<?= $siswa['nama_siswa']; ?>" required>
            </div>

            <div class=" form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"
                    value="<?= $siswa['tempat_lahir']; ?>" required>
            </div>

            <div class=" form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $siswa['tgl_lahir']; ?>" required>
            </div>
            <div class=" form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" class="form-control" required>
                    <option value="L" <?= $siswa['jk'] === 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="P" <?= $siswa['jk'] === 'P' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Jurusan --</option>
                    <?php foreach ($jurusan as $j) { ?>
                    <option value="<?= $j['id_jurusan']; ?>"
                        <?= ($j['id_jurusan'] == $siswa['id_jurusan']) ? 'selected' : ''; ?>>
                        <?= $j['jurusan']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Kelas --</option>
                    <?php foreach ($kelas as $k) { ?>
                    <option value="<?= $k['id_kelas']; ?>"
                        <?= ($k['id_kelas'] == $siswa['id_kelas']) ? 'selected' : ''; ?>>
                        <?= $k['kelas']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Masukkan Password Siswa"
                    value="<?= $siswa['password']; ?> " required>
            </div>
            <div class="form-group">
                <label for="foto_siswa">Foto</label>
                <input type="file" name="foto_siswa" class="form-control-file">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('Siswa'); ?>" class="btn btn-success">Kembali</a>
        </div>
        <?= form_close(); ?>
    </div>
</div>