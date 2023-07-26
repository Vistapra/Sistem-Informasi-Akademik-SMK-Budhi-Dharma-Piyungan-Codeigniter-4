<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-newspaper"></i> <?= $subjudul ?></h3>
            <div class="card-tools">
                <a href="<?= base_url('Siswa/Tambah') ?>" class="btn btn-primary">
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
                <table id="example2" class="table table-bordered table-sm">
                    <thead class="bg-primary text-center">
                        <tr>
                            <th width="20px">No</th>
                            <th width="30px">NISN</th>
                            <th>Nama Siswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th width="10px">Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th width="70px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $key + 1 ?></td>
                            <td><?= $data['nisn'] ?></td>
                            <td><?= $data['nama_siswa'] ?></td>
                            <td><?= $data['tempat_lahir'] ?></td>
                            <td><?= $data['tgl_lahir'] ?></td>
                            <td><?= $data['jk'] ?></td>
                            <td><?= $data['jurusan'] ?></td>
                            <td><?= $data['kelas'] ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('fotosiswa/' . $data['foto_siswa']) ?>" width="100px"
                                    height="auto" alt="Gambar Siswa">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?= base_url('Siswa/edit/' . $data['id_siswa']) ?>"
                                        class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('Siswa/hapusData/' . $data['id_siswa']) ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
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