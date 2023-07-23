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
            <table id="example2" class="table table-bordered">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th width="100px">Kode</th>
                        <th>Mata Pelajaran</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mapel as $key => $data): ?>
                    <tr>
                        <td class="text-center"><?= $key + 1 ?></td>
                        <td><?= $data['kode_mapel'] ?></td>
                        <td><?= $data['mapel'] ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-warning" data-toggle="modal"
                                    data-target="#edit<?= $data['id_mapel'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?= base_url('Mapel/hapusData/'.$data['id_mapel']) ?>"
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
                <h4 class="modal-title">Tambah Mapel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Mapel/tambahData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="kode_mapel">Kode Mapel</label>
                    <input name="kode_mapel" maxlength="4" class="form-control" placeholder="Kode Mata Pelajaran"
                        required>
                </div>
                <div class="form-group">
                    <label for="mapel">Mapel</label>
                    <input name="mapel" class="form-control" placeholder="Mata Pelajaran" required>
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

<?php foreach ($mapel as $key => $data): ?>
<div class="modal fade" id="edit<?= $data['id_mapel'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Mata Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Mapel/ubahData') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="mapel">Kode Mapel</label>
                    <input type="hidden" name="id_mapel" value="<?= $data['id_mapel'] ?>">
                    <input name="kode_mapel" maxlength="4" value="<?= $data['kode_mapel'] ?>" class="form-control"
                        placeholder="Kode Mata Pelajaran" required>
                </div>
                <div class="form-group">
                    <label for="mapel">Mapel</label>
                    <input type="hidden" name="id_mapel" value="<?= $data['id_mapel'] ?>">
                    <input name="mapel" value="<?= $data['mapel'] ?>" class="form-control" placeholder="Mata Pelajaran"
                        required>
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

<script>
$(function() {
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
    });
});
</script>