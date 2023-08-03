<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!empty($siswa['foto_siswa']) && file_exists('fotosiswa/' . $siswa['foto_siswa'])) { ?>
                    <div class="foto-siswa">
                        <img src="<?= base_url('fotosiswa/' . $siswa['foto_siswa']) ?>"
                            style="width: 100%; max-height: auto;" alt="Foto siswa">
                    </div>
                    <?php } else { ?>
                    <p class="foto-siswa">Tidak ada foto</p>
                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>NISN:</strong></td>
                                <td><?= $siswa['nisn']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nama Siswa:</strong></td>
                                <td><?= $siswa['nama_siswa']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Tempat Lahir:</strong></td>
                                <td><?= $siswa['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Lahir:</strong></td>
                                <td><?= $siswa['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Kelamin:</strong></td>
                                <td><?= $siswa['jk'] === 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jurusan:</strong></td>
                                <td><?= $siswa['jurusan']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Kelas:</strong></td>
                                <td><?= $siswa['kelas']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* CSS untuk mengatur card */
.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

/* CSS untuk mengatur header card */
.card-header {
    background-color: #f8f9fa;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

/* CSS untuk mengatur tabel */
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: #fff;
}

.table td,
.table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

/* CSS untuk mengatur foto siswa */
.foto-siswa {
    text-align: center;
    margin-bottom: 20px;
}
</style>