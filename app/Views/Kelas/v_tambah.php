<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Kelas/TambahData') ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <a href="<?= base_url('Kelas') ?>" class="btn btn-success btn-flat">Kembali</a>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>