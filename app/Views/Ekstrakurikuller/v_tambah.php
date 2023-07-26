<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open_multipart('Ekstrakurikuller/TambahData') ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_ekstra">Nama Ekstrakurikuller</label>
                <input type="text" name="nama_ekstra" class="form-control" placeholder="Masukkan Nama Ekstrakurikuller"
                    required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Ekstrakurikuller"
                    required>
            </div>

            <div class="form-group">
                <label for="guru_pembimbing">Guru Pembimbing</label>
                <input type="text" name="guru_pembimbing" class="form-control"
                    placeholder="Masukkan Nama Guru Pembimbing" required>
            </div>

            <div class="form-group">
                <label for="jadwal_kegiatan">Jadwal Kegiatan</label>
                <input type="text" name="jadwal_kegiatan" class="form-control" placeholder="Masukkan Jadwal Kegiatan"
                    required>
            </div>

            <div class="form-group">
                <label for="jumlah_peserta">Jumlah Peserta</label>
                <input type="text" name="jumlah_peserta" class="form-control" maxlength="2"
                    placeholder="Masukkan Jumlah Peserta" required>
            </div>

            <div class="form-group">
                <label for="foto_ekstra">Foto Ekstrakurikuller</label>
                <input type="file" name="foto_ekstra" class="form-control" required>
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