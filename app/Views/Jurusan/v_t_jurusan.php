<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
            <div class="card-tools">
                <a href="<?= base_url('Jurusan/tambah') ?>" class="btn btn-primary">
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
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="bg-primary text-center">
                        <tr>
                            <th width="50px">No</th>
                            <th>Kode</th>
                            <th>Jurusan</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jurusan as $key => $data): ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <td><?= $data['kode_jurusan'] ?></td>
                            <td><?= $data['jurusan'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?= base_url('Jurusan/view/' . $data['id_jurusan']) ?>"
                                        class="btn btn-info">
                                        <i class="fas fa-eye"></i></a>
                                    <a href="<?= base_url('Jurusan/edit/' . $data['id_jurusan']) ?>"
                                        class="btn btn-warning">
                                        <i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('Jurusan/hapusData/' . $data['id_jurusan']) ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>