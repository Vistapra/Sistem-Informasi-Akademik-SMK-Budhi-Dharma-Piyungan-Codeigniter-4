<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <strong><?= $judul ?></strong></h3>
        </div>
        <div class="card-body">
            <hr> <!-- Garis pemisah -->
            <h4><strong>Kode Jurusan:</strong> <?= $jurusan['kode_jurusan'] ?></h4>
            <hr> <!-- Garis pemisah -->
            <p><strong>Jurusan:</strong> <?= $jurusan['jurusan'] ?></p>
            <hr> <!-- Garis pemisah -->
            <p><strong>Visi Misi:</strong> <?= $jurusan['visi_misi'] ?></p>
            <hr> <!-- Garis pemisah -->
            <a href="<?= base_url('Jurusan') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>