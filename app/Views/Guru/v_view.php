<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!empty($guru['foto_guru']) && file_exists('fotoguru/' . $guru['foto_guru'])) { ?>
                    <div class="foto-guru">
                        <img src="<?= base_url('fotoguru/' . $guru['foto_guru']) ?>"
                            style="width: 100%; max-height: auto;" alt="foto guru">
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>NiP :</strong></td>
                                <td><?= $guru['nip']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nama Guru :</strong></td>
                                <td><?= $guru['nama_guru']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Lahir :</strong></td>
                                <td><?= $guru['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Kelamin :</strong></td>
                                <td><?= $guru['jenis_kel']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Telepon :</strong></td>
                                <td><?= $guru['telp_guru']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Pendidikan :</strong></td>
                                <td><?= $guru['pendidikan']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jurusan :</strong></td>
                                <td><?= $guru['jurusan']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>