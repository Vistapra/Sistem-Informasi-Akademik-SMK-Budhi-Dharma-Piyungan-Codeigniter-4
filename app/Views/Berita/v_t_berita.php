<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-newspaper"></i> <?= $subjudul ?></h3>
            <div class="card-tools">
                <a href="<?= base_url('Berita/tambah') ?>" class="btn btn-primary">
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

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-primary text-center">
                    <tr>
                        <th width="50px">No</th>
                        <th>Judul Berita</th>
                        <th>Gambar</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($berita as $key => $data): ?>
                    <tr>
                        <td class="text-center"><?= $key + 1 ?></td>
                        <td><?= $data['judul_berita'] ?></td>
                        <td class="text-center">
                            <img src="<?= base_url('gambarberita/' . $data['gambar']) ?>" width="100px" height="auto"
                                alt="Gambar Berita">
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?= base_url('Berita/view/' . $data['id_berita']) ?>" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="<?= base_url('Berita/edit/' . $data['id_berita']) ?>" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('Berita/hapusData/' . $data['id_berita']) ?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                    class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("#example1").DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
    });
});
</script>