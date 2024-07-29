<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Guru/TambahData') ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_guru">Kode Guru</label>
                <input type="number" inputmode="numeric" name="kode_guru" class="form-control"
                    placeholder="Masukkan Kode Guru" required>
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" inputmode="numeric" name="nip" class="form-control" placeholder="Masukkan NIP Guru"
                    required>
            </div>

            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" name="nama_guru" class="form-control" placeholder="Masukkan Nama Guru" required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jenis_kel">Jenis Kelamin</label>
                <select name="jenis_kel" class="form-control" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telp_guru">Telepon Guru</label>
                <input type="number" inputmode="numeric" name="telp_guru" class="form-control"
                    placeholder="Masukkan Nomor Telepon Guru" required>
            </div>

            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="Masukkan Pendidikan Guru"
                    required>
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
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Masukkan Password Guru" required>
            </div>

            <div class="form-group">
                <label for="level"></label>
                <input type="hidden" name="level" id="levelInput" class="form-control" required readonly>
            </div>

            <div class="form-group">
                <label for="foto_guru">Foto Guru</label>
                <input type="file" name="foto_guru" class="form-control" required>
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
levelInput.value = '1';
</script>