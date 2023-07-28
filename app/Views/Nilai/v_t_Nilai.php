<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
            <div class="card-tools">
                <?php if ($level === '1') { ?>
                <a href="<?= base_url('Nilai/Tambah') ?>" class="btn btn-primary">
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
                            <th>Nama Siswa</th>
                            <th>Mata Pelajaran</th>
                            <th>Nilai</th>
                            <th>Semester</th>
                            <th>Tahun Akademik</th>
                            <?php if ($level === '1') { ?>
                            <th width="100px">Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nilai as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <td><?= $data['nama_siswa']; ?></td>
                            <td><?= $data['mapel']; ?></td>
                            <td><?= $data['nilai_angka']; ?></td>
                            <td><?= $data['semester']; ?></td>
                            <td><?= $data['tahun_akademik']; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <?php if ($level === '1') { ?>
                                    <a href="<?= base_url('Nilai/Edit/' . $data['id_nilai']) ?>"
                                        class="btn btn-warning">
                                        <i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('Nilai/HapusData/' . $data['id_nilai']) ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i></a>
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