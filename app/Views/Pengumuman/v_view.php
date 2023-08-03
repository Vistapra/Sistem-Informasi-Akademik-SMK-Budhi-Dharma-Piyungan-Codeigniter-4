<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h5 class="font-weight-bold"><?= $pengumuman['judul_pengumuman']; ?></h5>
                    <p class="mb-0 text-muted">Oleh: <?= $pengumuman['nama_guru']; ?></p>
                </div>
                <span class="text-muted"><?= date('d M Y H:i', strtotime($pengumuman['tgl_pengumuman'])); ?></span>
            </div>
            <p class="mt-3"><?= $pengumuman['isi_pengumuman']; ?></p>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('Pengumuman') ?>" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>