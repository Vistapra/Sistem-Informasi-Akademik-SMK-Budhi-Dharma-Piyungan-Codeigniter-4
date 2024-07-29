<!-- views/detail_ekstra_view.php -->

<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Nama Ekstra :</strong></td>
                        <td><?= $ekstra['nama_ekstra']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Deskripsi :</strong></td>
                        <td><?= $ekstra['deskripsi']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Guru Pembimbing :</strong></td>
                        <td><?= $ekstra['guru_pembimbing']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jadwal Kegiatan :</strong></td>
                        <td><?= $ekstra['jadwal_kegiatan']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jumlah Peserta :</strong></td>
                        <td><?= $ekstra['jumlah_peserta']; ?></td>
                    </tr>
                </tbody>
            </table>

            <?php if (!empty($ekstra['foto_ekstra']) && file_exists('fotoekstra/' . $ekstra['foto_ekstra'])) { ?>
            <strong>Foto Ekstra:</strong><br>
            <img src="<?= base_url('fotoekstra/' . $ekstra['foto_ekstra']) ?>" style="width: 100%; height: auto;"
                alt="Foto Ekstrakurikuller">
            <?php } ?>

            <div>
                <a href="<?= base_url('Ekstrakurikuller') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>