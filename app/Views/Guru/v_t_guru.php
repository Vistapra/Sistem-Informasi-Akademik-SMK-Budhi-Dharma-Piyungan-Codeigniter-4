<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-newspaper"></i> <?= $subjudul ?></h3>
            <div class="card-tools">
                <?php if ($level === '3') { ?>
                <a href="<?= base_url('Guru/Tambah') ?>" class="btn btn-primary">
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
                            <?php if ($level === '3') { ?>
                            <th width="30px">Kode Guru</th>
                            <th>NIP</th>
                            <?php } ?>
                            <th>Nama Guru</th>
                            <th>Tanggal Lahir</th>
                            <th width="10px">Jenis Kelamin</th>
                            <th>Telepon Guru</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Foto</th>
                            <?php if ($level === '3') { ?>
                            <th width="70px">Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($guru as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <?php if ($level === '3') { ?>
                            <td><?= $data['kode_guru'] ?></td>
                            <td><?= $data['nip'] ?></td>
                            <?php } ?>
                            <td><?= $data['nama_guru'] ?></td>
                            <td><?= $data['tgl_lahir'] ?></td>
                            <td><?= $data['jenis_kel'] ?></td>
                            <td><?= $data['telp_guru'] ?></td>
                            <td><?= $data['pendidikan'] ?></td>
                            <td><?= $data['jurusan'] ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('fotoguru/' . $data['foto_guru']) ?>" width="100px" height="auto"
                                    alt="Gambar Guru">
                            </td>
                            <?php if ($level === '3') { ?>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?= base_url('Guru/View/' . $data['id_guru']) ?>" class="btn btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?= base_url('Guru/edit/' . $data['id_guru']) ?>" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('Guru/hapusData/' . $data['id_guru']) ?>"
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