-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2023 pada 19.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisbudhi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_user` int(2) DEFAULT NULL,
  `tgl_berita` date DEFAULT current_timestamp(),
  `jam_berita` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar`, `id_user`, `tgl_berita`, `jam_berita`) VALUES
(1, 'Peningkatan Ekonomi di Tengah Pandemi', 'peningkatan-ekonomi-di-tengah-pandemi', 'Perekonomian dunia mengalami peningkatan yang signifikan meskipun terdampak pandemi. Para ahli ekonomi menyatakan bahwa perbaikan ini diakibatkan oleh berbagai faktor, termasuk tingkat vaksinasi yang tinggi dan kebijakan stimulus pemerintah. Meskipun begitu, masih ada tantangan yang harus dihadapi dalam pemulihan perekonomian secara menyeluruh.', 'gambar1.jpg', 101, '2023-07-27', '08:00:00'),
(2, 'Inovasi Teknologi Terbaru dalam Industri Otomotif', 'inovasi-teknologi-terbaru-dalam-industri-otomotif', 'Industri otomotif terus berinovasi untuk menciptakan kendaraan yang lebih efisien dan ramah lingkungan. Beberapa teknologi terbaru yang diperkenalkan termasuk kendaraan listrik mandiri dan fitur keamanan canggih. Para produsen mobil bersaing untuk memberikan pengalaman berkendara yang lebih baik bagi para konsumen.', 'gambar2.jpg', 102, '2023-07-26', '14:30:00'),
(3, 'Penemuan Spesies Baru di Hutan Amazon', 'penemuan-spesies-baru-di-hutan-amazon', 'Para peneliti telah menemukan spesies baru yang menakjubkan di dalam hutan Amazon. Spesies-spesies ini termasuk hewan-hewan langka dan tanaman eksotis yang belum pernah ditemukan sebelumnya. Penemuan ini menjadi bukti penting akan keanekaragaman hayati yang tinggi di wilayah hutan hujan ini.', 'gambar3.jpg', 103, '2023-07-25', '10:45:00'),
(4, 'Misi Luar Angkasa Menuju Planet Mars', 'misi-luar-angkasa-menuju-planet-mars', 'Para ilmuwan sedang mempersiapkan misi ambisius untuk menerbangkan manusia ke planet Mars. Proyek ini akan menjadi tonggak sejarah dalam eksplorasi luar angkasa dan membuka peluang baru bagi manusia untuk hidup di planet lain. Namun, misi ini juga dihadapkan pada berbagai risiko dan tantangan yang harus diatasi.', 'gambar4.jpg', 104, '2023-07-24', '12:15:00'),
(5, 'Pencapaian Gemilang dalam Olimpiade Musim Panas', 'pencapaian-gemilang-dalam-olimpiade-musim-panas', 'Olimpiade musim panas tahun ini menyaksikan beberapa pencapaian gemilang dari atlet-atlet dunia. Rekor-rekor baru telah tercipta dalam berbagai cabang olahraga, dan beberapa negara berhasil meraih medali emas untuk pertama kalinya. Semangat persaingan dan keberhasilan ini menginspirasi generasi muda untuk mengejar impian mereka.', 'gambar5.jpg', 105, '2023-07-23', '17:20:00'),
(6, 'Inisiatif Baru untuk Pengelolaan Limbah Plastik', 'inisiatif-baru-untuk-pengelolaan-limbah-plastik', 'Dalam upaya untuk mengurangi dampak negatif limbah plastik terhadap lingkungan, banyak negara dan perusahaan telah mengambil langkah-langkah baru. Beberapa inisiatif termasuk penggunaan bahan plastik ramah lingkungan, daur ulang limbah plastik, dan kampanye kesadaran publik. Ini adalah langkah maju yang penting dalam menghadapi masalah polusi plastik global.', 'gambar6.jpg', 106, '2023-07-22', '09:10:00'),
(7, 'Kegembiraan di Festival Musik Internasional', 'kegembiraan-di-festival-musik-internasional', 'Festival musik internasional telah kembali diadakan setelah absen selama beberapa tahun terakhir. Ribuan penggemar musik berkumpul untuk menikmati penampilan dari berbagai musisi terkenal di seluruh dunia. Festival ini menjadi momen yang menggembirakan bagi pecinta musik untuk bersatu kembali dan menikmati sajian musik live.', 'gambar7.jpg', 107, '2023-07-21', '11:50:00'),
(8, 'Perjalanan Petualang Mengarungi Samudra Atlantik', 'perjalanan-petualang-mengarungi-samudra-atlantik', 'Seorang petualang berani telah berhasil mengarungi samudra Atlantik dengan perahu layar kecil. Perjalanan yang berlangsung selama berbulan-bulan ini menghadirkan berbagai tantangan, termasuk badai laut dan isolasi total. Namun, keberanian dan ketekunan petualang ini menginspirasi orang banyak untuk mengejar impian-impian mereka.', 'gambar8.jpg', 108, '2023-07-20', '16:00:00'),
(9, 'Rahasia Kehidupan Bawah Laut Terbongkar', 'rahasia-kehidupan-bawah-laut-terbongkar', 'Peneliti telah menemukan rahasia kehidupan bawah laut yang mengejutkan. Terumbu karang yang indah mengandung keanekaragaman hayati yang luar biasa, dan spesies-spesies yang belum diketahui sebelumnya ditemukan dalam ekspedisi ini. Penemuan ini meningkatkan pemahaman kita tentang ekosistem laut dan pentingnya menjaga kelestarian laut.', 'gambar9.jpg', 109, '2023-07-19', '19:25:00'),
(10, 'Inspirasi dari Kisah Perjuangan Seorang Seniman', 'inspirasi-dari-kisah-perjuangan-seorang-seniman', 'Kisah hidup seorang seniman yang menghadapi berbagai rintangan dalam mengejar passion-nya telah menjadi sumber inspirasi bagi banyak orang. Melalui seni, dia mengungkapkan perasaan dan gagasan yang sulit diungkapkan dengan kata-kata. Kisahnya menjadi bukti bahwa ketekunan dan imajinasi dapat membawa perubahan positif dalam hidup seseorang.', 'gambar10.jpg', 110, '2023-07-18', '22:40:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE `ekstra` (
  `id_ekstra` int(11) NOT NULL,
  `nama_ekstra` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `guru_pembimbing` varchar(100) DEFAULT NULL,
  `jadwal_kegiatan` varchar(100) DEFAULT NULL,
  `jumlah_peserta` int(11) DEFAULT NULL,
  `foto_ekstra` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `nama_ekstra`, `deskripsi`, `guru_pembimbing`, `jadwal_kegiatan`, `jumlah_peserta`, `foto_ekstra`) VALUES
(1, 'Futsal Club', 'Klub futsal sekolah yang berfokus pada peningkatan skill dan strategi bermain.', 'David Taylor', 'Setiap Senin dan Rabu pukul 15.00 - 17.00', 20, 'ekstrakurikuller1.jpg'),
(2, 'Photography Club', 'Klub fotografi yang mengajarkan teknik-teknik fotografi kepada anggotanya.', 'Jessica Brown', 'Setiap Kamis pukul 14.00 - 16.00', 15, 'ekstrakurikuller2.jpg'),
(3, 'Basketball Team', 'Tim bola basket sekolah yang berkompetisi di tingkat regional.', 'Michael Johnson', 'Setiap Selasa dan Jumat pukul 15.30 - 17.30', 12, 'ekstrakurikuller3.jpg'),
(4, 'Art Workshop', 'Workshop seni untuk mengembangkan bakat seni siswa dalam berbagai bidang seni.', 'Sarah Miller', 'Setiap Rabu pukul 13.30 - 15.30', 18, 'ekstrakurikuller4.jpg'),
(5, 'English Club', 'Klub bahasa Inggris untuk meningkatkan kemampuan berbicara dalam bahasa Inggris.', 'Emily Williams', 'Setiap Kamis pukul 15.00 - 16.30', 25, 'ekstrakurikuller5.jpg'),
(6, 'Science Olympiad', 'Persiapan dan latihan untuk mengikuti olimpiade sains tingkat nasional.', 'William Lee', 'Setiap Senin dan Kamis pukul 16.00 - 18.00', 10, 'ekstrakurikuller6.jpg'),
(7, 'Music Ensemble', 'Kelompok musik sekolah yang tampil dalam berbagai acara sekolah.', 'Daniel White', 'Setiap Rabu pukul 16.30 - 18.30', 8, 'ekstrakurikuller7.jpg'),
(8, 'Robotics Club', 'Klub robotika yang membuat dan memprogram robot untuk berbagai keperluan.', 'Olivia King', 'Setiap Jumat pukul 14.00 - 16.00', 15, 'ekstrakurikuller8.jpg'),
(9, 'Journalism Club', 'Klub jurnalistik untuk mengasah keterampilan menulis dan menyampaikan berita.', 'Mia Green', 'Setiap Selasa pukul 14.30 - 16.00', 12, 'ekstrakurikuller9.jpg'),
(10, 'Chess Club', 'Klub catur sekolah untuk berlatih dan bermain catur.', 'Christopher Harris', 'Setiap Kamis pukul 13.30 - 15.00', 10, 'ekstrakurikuller10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `kode_guru` varchar(4) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kel` varchar(1) DEFAULT NULL,
  `telp_guru` varchar(12) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `jurusan` varchar(200) DEFAULT NULL,
  `foto_guru` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `kode_guru`, `nip`, `nama_guru`, `tgl_lahir`, `jenis_kel`, `telp_guru`, `pendidikan`, `jurusan`, `foto_guru`, `password`, `level`) VALUES
(1, 'G001', '12345', 'John Doe', '1985-05-15', 'L', '081134567890', 'S1 Pendidikan Matematika', 'Matematika', 'foto1.jpg', 'guru', 1),
(2, 'G002', '0987654311', 'Jane Smith', '1980-10-10', 'P', '087654311098', 'S1 Pendidikan Bahasa Inggris', 'Bahasa Inggris', 'foto1.jpg', 'guru456', 1),
(3, 'G003', '1345678901', 'Michael Johnson', '1976-11-30', 'L', '089876543110', 'S1 Pendidikan Fisika', 'Fisika', 'foto3.jpg', 'guru789', 1),
(4, 'G004', '3456789011', 'Emily Williams', '1988-03-15', 'P', '081345678901', 'S1 Pendidikan Kimia', 'Kimia', 'foto4.jpg', 'guruabc', 1),
(5, 'G005', '4567890113', 'William Lee', '1979-09-05', 'L', '081134567890', 'S1 Pendidikan Biologi', 'Biologi', 'foto5.jpg', 'guruxyz', 1),
(6, 'G006', '5678901134', 'Jessica Brown', '1981-06-10', 'P', '087654311098', 'S1 Pendidikan Seni Rupa', 'Seni Rupa', 'foto6.jpg', 'guruvw', 1),
(7, 'G007', '6789011345', 'David Taylor', '1984-11-18', 'L', '089876543110', 'S1 Pendidikan Ekonomi', 'Ekonomi', 'foto7.jpg', 'gurustu', 1),
(8, 'G008', '7890113456', 'Sarah Miller', '1990-07-01', 'P', '081345678901', 'S1 Pendidikan Sejarah', 'Sejarah', 'foto8.jpg', 'gurumno', 1),
(9, 'G009', '8901134567', 'Richard Wilson', '1987-04-11', 'L', '081134567890', 'S1 Pendidikan Geografi', 'Geografi', 'foto9.jpg', 'gurapq', 1),
(10, 'G010', '9011345678', 'Elizabeth Clark', '1983-08-19', 'P', '087654311098', 'S1 Pendidikan Agama', 'Agama', 'foto10.jpg', 'gurirs', 1),
(11, 'G011', '1345678901', 'Daniel White', '1986-01-07', 'L', '089876543110', 'S1 Pendidikan Bahasa Indonesia', 'Bahasa Indonesia', 'foto11.jpg', 'guruwxy', 1),
(12, 'G012', '3456789011', 'Olivia King', '1991-11-14', 'P', '081345678901', 'S1 Pendidikan Kewarganegaraan', 'Kewarganegaraan', 'foto11.jpg', 'guruzab', 1),
(13, 'G013', '4567890113', 'Christopher Harris', '1989-05-16', 'L', '081134567890', 'S1 Pendidikan Jasmani', 'Jasmani', 'foto13.jpg', 'gurucde', 1),
(14, 'G014', '5678901134', 'Sophia Scott', '1995-09-09', 'P', '087654311098', 'S1 Pendidikan Komputer', 'Komputer', 'foto14.jpg', 'gurufgh', 1),
(15, 'G015', '6789011345', 'Matthew Turner', '1991-01-16', 'L', '089876543110', 'S1 Pendidikan Musik', 'Musik', 'foto15.jpg', 'guruijk', 1),
(16, 'G016', '7890113456', 'Isabella Martinez', '1985-07-11', 'P', '081345678901', 'S1 Pendidikan Bahasa Jepang', 'Bahasa Jepang', 'foto16.jpg', 'gurulmn', 1),
(17, 'G017', '8901134567', 'Andrew Robinson', '1983-04-01', 'L', '081134567890', 'S1 Pendidikan Bahasa Mandarin', 'Bahasa Mandarin', 'foto17.jpg', 'guruopq', 1),
(18, 'G018', '9011345678', 'Mia Green', '1987-11-11', 'P', '087654311098', 'S1 Pendidikan Sosiologi', 'Sosiologi', 'foto18.jpg', 'gururst', 1),
(19, 'G019', '1345678901', 'Ethan Lewis', '1990-06-05', 'L', '089876543110', 'S1 Pendidikan Antropologi', 'Antropologi', 'foto19.jpg', 'guruuvw', 1),
(20, 'G020', '3456789011', 'Ava Hall', '1994-01-30', 'P', '081345678901', 'S1 Pendidikan Psikologi', 'Psikologi', 'foto10.jpg', 'guruxyz', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `visi_misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `jurusan`, `visi_misi`) VALUES
(1, 'J01', 'Teknik Informatika', 'Visi: Menjadi program studi unggulan dalam bidang teknik informatika yang berorientasi pada pengembangan teknologi digital\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang teknik informatika yang berkualitas\n2. Menghasilkan lulusan yang berkompeten dan berkarakter dalam teknologi digital\n3. Melakukan penelitian dan pengembangan dalam bidang teknik informatika untuk kepentingan masyarakat dan industri'),
(2, 'J02', 'Teknik Elektro', 'Visi: Menjadi program studi yang unggul dalam bidang teknik elektro dengan orientasi pada peningkatan kualitas dan daya saing global\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang teknik elektro yang berkualitas\n2. Menghasilkan lulusan yang memiliki kompetensi dan profesionalisme dalam bidang teknik elektro\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu pengetahuan dan teknologi di bidang teknik elektro'),
(3, 'J03', 'Teknik Sipil', 'Visi: Menjadi program studi unggulan dalam bidang teknik sipil yang berorientasi pada pembangunan berkelanjutan\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang teknik sipil yang berkualitas\n2. Menghasilkan lulusan yang kompeten dan profesional dalam bidang teknik sipil\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu pengetahuan dan teknologi di bidang teknik sipil'),
(4, 'J04', 'Akuntansi', 'Visi: Menjadi program studi akuntansi yang unggul dalam menghasilkan lulusan yang kompeten dan berkarakter\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang akuntansi yang berkualitas\n2. Menghasilkan lulusan yang kompeten dan profesional dalam bidang akuntansi\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu pengetahuan dan praktik akuntansi'),
(5, 'J05', 'Manajemen', 'Visi: Menjadi program studi manajemen yang unggul dalam menghasilkan lulusan yang mampu beradaptasi di era global\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang manajemen yang berkualitas\n2. Menghasilkan lulusan yang berkompeten dan berkarakter dalam manajemen\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu pengetahuan dan praktik manajemen'),
(6, 'J06', 'Psikologi', 'Visi: Menjadi program studi psikologi yang unggul dalam menghasilkan lulusan yang berkontribusi pada kesejahteraan dan kebahagiaan masyarakat\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang psikologi yang berkualitas\n2. Menghasilkan lulusan yang memiliki pemahaman mendalam tentang psikologi dan mampu beradaptasi dalam berbagai konteks\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu psikologi dan kesejahteraan masyarakat'),
(7, 'J07', 'Ilmu Komunikasi', 'Visi: Menjadi program studi ilmu komunikasi yang unggul dalam menghasilkan lulusan yang berkompeten dalam komunikasi strategis\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang ilmu komunikasi yang berkualitas\n2. Menghasilkan lulusan yang memiliki kompetensi dalam komunikasi strategis\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu komunikasi dan penerapannya dalam berbagai bidang'),
(8, 'J08', 'Hukum', 'Visi: Menjadi program studi hukum yang unggul dalam menghasilkan lulusan yang berintegritas dan berkontribusi pada penegakan hukum\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang hukum yang berkualitas\n2. Menghasilkan lulusan yang memiliki pemahaman yang mendalam tentang hukum dan berintegritas\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk memajukan ilmu hukum dan mewujudkan keadilan'),
(9, 'J09', 'Kedokteran', 'Visi: Menjadi program studi kedokteran yang unggul dalam menghasilkan lulusan yang kompeten dan berkomitmen dalam pelayanan kesehatan\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang kedokteran yang berkualitas\n2. Menghasilkan lulusan yang memiliki kompetensi dan berkomitmen dalam pelayanan kesehatan\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk meningkatkan kesehatan dan kesejahteraan masyarakat'),
(10, 'J10', 'Farmasi', 'Visi: Menjadi program studi farmasi yang unggul dalam menghasilkan lulusan yang berdaya saing dan berkontribusi pada pelayanan kesehatan\n\nMisi: 1. Menyelenggarakan pendidikan tinggi bidang farmasi yang berkualitas\n2. Menghasilkan lulusan yang memiliki kompetensi dan profesionalisme dalam farmasi\n3. Melakukan penelitian dan pengabdian kepada masyarakat untuk meningkatkan kualitas pelayanan farmasi dan kesehatan masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(1) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X IPA 1'),
(2, 'X IPA 2'),
(3, 'X IPA 3'),
(4, 'X IPS 1'),
(5, 'X IPS 2'),
(6, 'X IPS 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(2) NOT NULL,
  `kode_mapel` varchar(4) DEFAULT NULL,
  `mapel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(1, 'M01', 'Matematika'),
(2, 'M02', 'Bahasa Indonesia'),
(3, 'M03', 'Bahasa Inggris'),
(4, 'M04', 'Fisika'),
(5, 'M05', 'Kimia'),
(6, 'M06', 'Biologi'),
(7, 'M07', 'Sejarah'),
(8, 'M08', 'Geografi'),
(9, 'M09', 'Ekonomi'),
(10, 'M10', 'Sosiologi'),
(11, 'M11', 'Seni Budaya'),
(12, 'M12', 'Pendidikan Jasmani'),
(13, 'M13', 'Matematika Tambahan'),
(14, 'M14', 'Informatika'),
(15, 'M15', 'Agama'),
(16, 'M16', 'Kewarganegaraan'),
(17, 'M17', 'Bahasa Jepang'),
(18, 'M18', 'Bahasa Mandarin'),
(19, 'M19', 'Psikologi'),
(20, 'M20', 'Antropologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangkelas`
--

CREATE TABLE `ruangkelas` (
  `id_ruang` int(2) NOT NULL,
  `ruang_kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `jurusan` varchar(200) DEFAULT NULL,
  `kelas` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `foto_siswa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jk`, `jurusan`, `kelas`, `password`, `level`, `foto_siswa`) VALUES
(1, '1234', 'Michael Johnson', 'Jakarta', '2005-05-15', 'L', 'IPA', 'XII IPA 1', 'siswa', 2, 'siswa1.png'),
(2, '2345678901', 'Emily Williams', 'Bandung', '2006-10-20', 'P', 'IPS', 'XI IPS 2', 'siswa456', 2, 'siswa2.png'),
(3, '3456789012', 'William Lee', 'Surabaya', '2004-12-30', 'L', 'IPA', 'XII IPA 2', 'siswa789', 2, 'siswa3.png'),
(4, '4567890123', 'Jessica Brown', 'Medan', '2007-03-25', 'P', 'IPS', 'XI IPS 1', 'siswaabc', 2, 'siswa4.png'),
(5, '5678901234', 'David Taylor', 'Semarang', '2005-09-05', 'L', 'IPA', 'XII IPA 3', 'siswaxyz', 2, 'siswa5.png'),
(6, '6789012345', 'Sarah Miller', 'Makassar', '2006-06-10', 'P', 'IPS', 'XI IPS 3', 'siswastu', 2, 'siswa6.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=961;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  MODIFY `id_ruang` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
