<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <strong><?= $judul ?></strong></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Kode Jurusan:</strong></td>
                        <td><?= $jurusan['kode_jurusan'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jurusan:</strong></td>
                        <td><?= $jurusan['jurusan'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Visi Misi:</strong></td>
                        <td><?= $jurusan['visi_misi'] ?></td>
                    </tr>
                </tbody>
            </table>
            <div style="text-align: right;">
                <a href="<?= base_url('Jurusan') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>