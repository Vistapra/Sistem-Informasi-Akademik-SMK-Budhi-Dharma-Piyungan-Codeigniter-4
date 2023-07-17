<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
            <div class="card-tools">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <?php if (session()->getFlashdata('tambah')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('tambah') ?>
        </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('ubah')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('ubah') ?>
        </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('hapus')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('hapus') ?>
        </div>
        <?php endif; ?>
        <div class="card-body">
            <table class="table table-bordered table-sm">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Kelas</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelas as $key => $data): ?>
                    <tr>
                        <td class="text-center"><?= $key + 1 ?></td>
                        <td><?= $data['kelas'] ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-warning" data-toggle="modal"
                                    data-target="#edit<?= $data['id_kelas'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?= base_url('Kelas/hapusData/'.$data['id_kelas']) ?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- tambahData -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kelas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Kelas/tambahData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" class="form-control" placeholder="Kelas" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<!-- ubahData -->
<?php foreach ($kelas as $key => $data): ?>
<div class="modal fade" id="edit<?= $data['id_kelas'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Kelas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Kelas/ubahData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="hidden" name="id_kelas" value="<?= $data['id_kelas'] ?>">
                    <input name="kelas" value="<?= $data['kelas'] ?>" class="form-control" placeholder="Kelas" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?php endforeach; ?>