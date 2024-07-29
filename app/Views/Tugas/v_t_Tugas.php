<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
            <div class="card-tools">
                <?php if ($level === '3' || $level === '1') { ?>
                <a href="<?= base_url('Tugas/tambah') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
                <?php } ?>
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
                <table id="example2" class="table table-bordered table-sm">
                    <thead class="bg-primary text-center">
                        <tr>
                            <th width="50px">No</th>
                            <th>Judul Tugas</th>
                            <th>Kelas</th>
                            <th>Mapel</th>
                            <th>Deadline</th>
                            <th>File Tugas</th>
                            <?php if ($level === '3' || $level === '1') { ?>
                            <th width="100px">Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tugas as $key => $t) { ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <td><?= $t['judul_tugas'] ?></td>
                            <td><?= $t['kelas'] ?></td>
                            <td><?= $t['mapel'] ?></td>
                            <td><?= $t['tgl_deadline'] ?></td>
                            <td class="text-center">
                                <?php if ($t['file_tugas']) { ?>
                                <a href="<?= base_url('filetugas/' . $t['file_tugas']) ?>" target="_blank">
                                    <?= $t['file_tugas'] ?>
                                </a>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?= base_url('Tugas/View/' . $t['id_tugas']) ?>" class="btn btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <?php if ($level === '3' || $level === '1') { ?>
                                    <a href="<?= base_url('Tugas/edit/' . $t['id_tugas']) ?>" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('Tugas/HapusData/' . $t['id_tugas']) ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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