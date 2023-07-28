<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Nilai/UbahData/' . $nilai['id_nilai']) ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_siswa">Nama Siswa</label>
                        <select name="id_siswa" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Siswa --</option>
                            <?php foreach ($siswa as $data_siswa) { ?>
                            <option value="<?= $data_siswa['id_siswa']; ?>"
                                <?= ($data_siswa['id_siswa'] == $nilai['id_siswa']) ? 'selected' : ''; ?>>
                                <?= $data_siswa['nama_siswa']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_mapel">Mata Pelajaran</label>
                        <select name="id_mapel" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Mata Pelajaran --</option>
                            <?php foreach ($mapel as $data_mapel) { ?>
                            <option value="<?= $data_mapel['id_mapel']; ?>"
                                <?= ($data_mapel['id_mapel'] == $nilai['id_mapel']) ? 'selected' : ''; ?>>
                                <?= $data_mapel['mapel']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nilai_angka">Nilai</label>
                <input type="number" step="0.01" name="nilai_angka" class="form-control"
                    value="<?= $nilai['nilai_angka']; ?>" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control" required>
                    <option value="Ganjil" <?= ($nilai['semester'] == 'Ganjil') ? 'selected' : ''; ?>>Ganjil</option>
                    <option value="Genap" <?= ($nilai['semester'] == 'Genap') ? 'selected' : ''; ?>>Genap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun_akademik">Tahun Akademik</label>
                <select name="tahun_akademik" class="form-control" required>
                    <?php
                    $currentYear = date("Y");
                    for ($year = $currentYear + 3; $year >= $currentYear - 3; $year--) {
                        $academicYear = $year . "/" . ($year + 1);
                        $selected = ($academicYear == $nilai['tahun_akademik']) ? 'selected' : '';
                        echo '<option value="' . $academicYear . '" ' . $selected . '>' . $academicYear . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            <a href="<?= base_url('Nilai') ?>" class="btn btn-success btn-flat">Kembali</a>
        </div>
        <?= form_close() ?>
    </div>
</div>