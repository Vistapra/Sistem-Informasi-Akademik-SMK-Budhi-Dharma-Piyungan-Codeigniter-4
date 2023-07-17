<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Jurusan/ubahData/'.$jurusan['id_jurusan']) ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="kode_jurusan">Kode Jurusan</label>
                        <input type="text" maxlength="3" name="kode_jurusan" value="<?= $jurusan['kode_jurusan'] ?>"
                            maxlength="3" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" value="<?= $jurusan['jurusan'] ?>" class="form-control"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="visi_misi">Visi Misi</label>
                <textarea id="summernote" name="visi_misi" required><?= $jurusan['visi_misi'] ?></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                <a href="<?= base_url('Jurusan') ?>" class="btn btn-success btn-flat">Kembali</a>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>

<script>
$(function() {
    $('#summernote').summernote({
        height: '350px'
    });
});
</script>