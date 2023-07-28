<div class="col-md-12">
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <?= $subjudul ?>
            </h3>
        </div>
        <?= form_open('Nilai/TambahData') ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_siswa">Nama Siswa</label>
                        <select name="id_siswa" class="form-control" required>
                            <option value="" selected disabled>-- Pilih Siswa --</option>
                            <?php foreach ($siswa as $data_siswa) { ?>
                            <option value="<?= $data_siswa['id_siswa']; ?>"><?= $data_siswa['nama_siswa']; ?></option>
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
                            <option value="<?= $data_mapel['id_mapel']; ?>"><?= $data_mapel['mapel']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nilai_angka">Nilai Angka</label>
                <input type="number" step="0.01" name="nilai_angka" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nilai_huruf">Nilai Huruf</label>
                <select name="nilai_huruf" class="form-control" required>
                    <option value="" selected disabled>-- Pilih Nilai Huruf --</option>
                    <option value="A">A</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control" required>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun_akademik">Tahun Akademik</label>
                <select name="tahun_akademik" class="form-control" required>
                    <?php
        $currentYear = date("Y");
        for ($year = $currentYear + 3; $year >= $currentYear - 3; $year--) {
            $academicYear = $year . "/" . ($year + 1);
            echo '<option value="' . $academicYear . '">' . $academicYear . '</option>';
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