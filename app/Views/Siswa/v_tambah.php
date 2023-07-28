<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Siswa/TambahData') ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" inputmode="numeric" name="nisn" class="form-control"
                    placeholder="Masukkan NISN Siswa" required>
            </div>

            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" placeholder="Masukkan Nama Siswa" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"
                    required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" class="form-control" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($jurusan as $j): ?>
                    <option value="<?= $j['id_jurusan'] ?>"><?= $j['jurusan'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="">Pilih kelas</option>
                    <?php foreach ($kelas as $k): ?>
                    <option value="<?= $k['id_kelas'] ?>"><?= $k['kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Masukkan Password Siswa" required>
            </div>

            <div class="form-group">
                <label for="level"></label>
                <input type="hidden" name="level" id="levelInput" class="form-control" required readonly>
            </div>

            <div class="form-group">
                <label for="foto_siswa">Foto Siswa</label>
                <input type="file" name="foto_siswa" class="form-control" required>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?= form_close() ?>
    </div>
</div>

<script>
const levelInput = document.getElementById('levelInput');
levelInput.value = '2';
</script>