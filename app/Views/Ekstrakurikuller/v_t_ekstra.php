<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-newspaper"></i> <?= $subjudul ?></h3>
            <div class="card-tools">
                <?php if ($level === '1') { ?>
                <a href="<?= base_url('Ekstrakurikuller/Tambah') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
                <?php } ?>
            </div>
        </div>

        <?php if (session()->getFlashdata('tambah')) { ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('tambah') ?>
        </div>
        <?php } ?>
        <?php if (session()->getFlashdata('ubah')) { ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('ubah') ?>
        </div>
        <?php }; ?>
        <?php if (session()->getFlashdata('hapus')) { ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('hapus') ?>
        </div>
        <?php } ?>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-sm">
                    <thead class="bg-primary text-center">
                        <tr>
                            <th width="20px">No</th>
                            <th>Nama Ekstra</th>
                            <th>Deskripsi</th>
                            <th>Guru Pembimbing</th>
                            <th>Jadwal Kegiatan</th>
                            <th>Jumlah Peserta</th>
                            <th>Foto</th>
                            <?php if ($level === '1') { ?>
                            <th width="70px">Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ekstra as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <td><?= $data['nama_ekstra'] ?></td>
                            <td><?= $data['deskripsi'] ?></td>
                            <td><?= $data['guru_pembimbing'] ?></td>
                            <td><?= $data['jadwal_kegiatan'] ?></td>
                            <td><?= $data['jumlah_peserta'] ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('fotoekstra/' . $data['foto_ekstra']) ?>" width="100px"
                                    height="auto" alt="Foto Ekstrakurikuller">
                            </td>
                            <?php if ($level === '1') { ?>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?= base_url('Ekstrakurikuller/View/' . $data['id_ekstra']) ?>"
                                        class="btn btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?= base_url('Ekstrakurikuller/edit/' . $data['id_ekstra']) ?>"
                                        class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('Ekstrakurikuller/hapusData/' . $data['id_ekstra']) ?>"
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