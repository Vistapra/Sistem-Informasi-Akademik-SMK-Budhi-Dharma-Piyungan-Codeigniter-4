<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Mata Pelajaran</th>
                    <td><?= $tugas['mapel']; ?></td>
                </tr>
                <tr>
                    <th>Judul Tugas</th>
                    <td><?= $tugas['judul_tugas']; ?></td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td><?= $tugas['deskripsi']; ?></td>
                </tr>
                <tr>
                    <th>File Tugas</th>
                    <td>
                        <?php if ($tugas['file_tugas']) { ?>
                        <a href="<?= base_url('filetugas/' . $tugas['file_tugas']); ?>"
                            target="_blank"><?= $tugas['file_tugas']; ?></a>
                        <?php } else { ?>
                        Tidak ada file tugas
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Deadline</th>
                    <td><?= $tugas['tgl_deadline']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>