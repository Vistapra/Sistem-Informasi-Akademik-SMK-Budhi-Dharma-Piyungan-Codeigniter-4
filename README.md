# Sistem Informasi Akademik SMK Budhi Dharma Piyungan

## Deskripsi Proyek

Sistem Informasi Akademik SMK Budhi Dharma Piyungan adalah aplikasi berbasis web yang dikembangkan menggunakan framework CodeIgniter 4. Proyek ini bertujuan untuk mengotomatisasi dan mengoptimalkan proses manajemen akademik di SMK Budhi Dharma Piyungan, meningkatkan efisiensi administratif, dan memfasilitasi komunikasi yang lebih baik antara staf, guru, dan siswa.

## Fitur Utama

1. **Manajemen Pengguna dan Autentikasi (Auth)**
   - Registrasi pengguna baru (admin, guru, siswa)
   - Login dengan verifikasi peran
   - Manajemen sesi dan keamanan
   - Pemulihan kata sandi
   - Pengaturan profil pengguna

2. **Dashboard (Dashboard)**
   - Tampilan yang disesuaikan berdasarkan peran pengguna
   - Ringkasan statistik akademik
   - Pemberitahuan dan pengingat penting
   - Akses cepat ke fungsi-fungsi utama

3. **Manajemen Guru (Guru)**
   - Pendaftaran dan pengelolaan data guru
   - Penugasan mata pelajaran
   - Manajemen jadwal mengajar
   - Pencatatan kehadiran guru
   - Evaluasi kinerja guru

4. **Manajemen Siswa (Siswa)**
   - Pendaftaran dan pengelolaan data siswa
   - Penempatan kelas dan jurusan
   - Pencatatan kehadiran siswa
   - Manajemen prestasi dan catatan perilaku
   - Laporan perkembangan siswa

5. **Akademik**
   - **Jurusan (Jurusan)**
     - Pengelolaan data jurusan
     - Kurikulum per jurusan
     - Statistik jurusan
   
   - **Kelas (Kelas)**
     - Pembuatan dan manajemen kelas
     - Penempatan siswa ke kelas
     - Penugasan wali kelas
   
   - **Mata Pelajaran (Mapel)**
     - Pendaftaran mata pelajaran baru
     - Pengaturan bobot dan kriteria penilaian
     - Penugasan guru pengajar
   
   - **Jadwal Pelajaran (Jadwalpelajaran)**
     - Pembuatan jadwal otomatis dan manual
     - Pengelolaan konflik jadwal
     - Notifikasi perubahan jadwal
   
   - **Nilai (Nilai)**
     - Input nilai per mata pelajaran
     - Perhitungan nilai akhir dan rata-rata
     - Generasi rapor siswa
     - Analisis performa akademik
   
   - **Tugas (Tugas)**
     - Pembuatan dan distribusi tugas
     - Pengumpulan tugas online
     - Penilaian dan umpan balik tugas
     - Pengingat tenggat waktu tugas

6. **Kegiatan Ekstrakurikuler (Ekstrakurikuller)**
   - Pendaftaran kegiatan ekstrakurikuler
   - Manajemen jadwal dan peserta
   - Pencatatan prestasi ekstrakurikuler
   - Laporan kegiatan ekstrakurikuler

7. **Informasi dan Komunikasi**
   - **Berita (Berita)**
     - Publikasi berita sekolah
     - Kategori berita (akademik, prestasi, umum)
     - Arsip berita
   
   - **Pengumuman (Pengumuman)**
     - Pembuatan pengumuman targetted
     - Notifikasi pengumuman penting
     - Sistem komentar untuk diskusi

8. **Halaman Utama (Home)**
   - Tampilan informasi umum sekolah
   - Integrasi dengan media sosial sekolah
   - Galeri foto dan video kegiatan sekolah
   - Formulir kontak untuk pengunjung

## Teknologi yang Digunakan

- **Backend:** PHP 7.4+, CodeIgniter 4.2.0+
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap 5
- **Database:** MySQL 5.7+
- **Keamanan:** CSRF Protection, XSS Filtering, SQL Injection Prevention
- **Tambahan:** AJAX untuk interaksi dinamis, PDF Library untuk generasi dokumen

## Persyaratan Sistem

- PHP versi 7.4 atau lebih tinggi
- MySQL versi 5.7 atau lebih tinggi
- Web server (Apache/Nginx)
- Composer (untuk manajemen dependensi)
- Extension PHP yang dibutuhkan: intl, mbstring, json, mysql atau mysqli

## Instalasi

1. Clone repositori:
   ```
   git clone https://github.com/username/sistem-informasi-akademik-smk-budhi-dharma.git](https://github.com/Vistapra/Sistem-Informasi-Akademik-SMK-Budhi-Dharma-Piyungan-Codeigniter-4.git
   ```

2. Masuk ke direktori proyek:
   ```
   cd sistem-informasi-akademik-smk-budhi-dharma
   ```

3. Install dependensi menggunakan Composer:
   ```
   composer install
   ```

4. Salin file konfigurasi:
   ```
   cp env .env
   ```

5. Konfigurasi database dan pengaturan aplikasi di file `.env`:
   ```
   database.default.hostname = localhost
   database.default.database = siakad_smk_budhi_dharma
   database.default.username = root
   database.default.password = password
   database.default.DBDriver = MySQLi
   ```

6. Jalankan migrasi database:
   ```
   php spark migrate
   ```

7. (Opsional) Jalankan seeder untuk data awal:
   ```
   php spark db:seed InitialDataSeeder
   ```

## Penggunaan

1. Jalankan server development:
   ```
   php spark serve
   ```

2. Akses aplikasi melalui browser:
   ```
   http://localhost:8080
   ```

3. Login dengan kredensial default:
   - Admin: admin@example.com / password
   - Guru: guru@example.com / password
   - Siswa: siswa@example.com / password

## Panduan Kontribusi

1. Fork repositori ini.
2. Buat branch fitur baru: `git checkout -b fitur-baru`
3. Lakukan perubahan dan commit: `git commit -am 'Menambahkan fitur baru'`
4. Push ke branch: `git push origin fitur-baru`
5. Buat Pull Request dengan deskripsi detail perubahan.

### Standar Kode

- Ikuti PSR-12 untuk standar penulisan kode PHP.
- Gunakan camelCase untuk penamaan method dan variabel.
- Tulis docblock untuk setiap class dan method.
- Tulis unit test untuk setiap fitur baru.

## Troubleshooting

- **Issue:** Halaman tidak dapat diakses setelah instalasi.
  **Solusi:** Pastikan `mod_rewrite` diaktifkan di server Apache Anda.

- **Issue:** Error koneksi database.
  **Solusi:** Periksa konfigurasi database di file `.env` dan pastikan server MySQL berjalan.

## Changelog

- v1.0.0 (10 Juli 2023)
  - Rilis awal dengan fitur dasar
- v1.1.0 (15 Agustus 2023)
  - Penambahan modul ekstrakurikuler
  - Perbaikan bug pada sistem penilaian

## Roadmap

- Implementasi sistem pembayaran SPP
- Integrasi dengan LMS (Learning Management System)
- Pengembangan aplikasi mobile untuk akses mudah


## Kontak dan Dukungan

Untuk pertanyaan, saran, atau melaporkan bug, silakan hubungi:

- **Pengembang:** @vista_pramudya

## Penghargaan

Terima kasih kepada semua kontributor yang telah membantu dalam pengembangan sistem ini, termasuk:

- Tim Pengembang SMK Budhi Dharma Piyungan
- Komunitas CodeIgniter Indonesia
- Semua guru dan staf SMK Budhi Dharma Piyungan atas masukan berharganya
