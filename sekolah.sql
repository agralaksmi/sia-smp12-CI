-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2018 pada 13.32
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi_mapel`
--

CREATE TABLE `tb_deskripsi_mapel` (
  `id_deskripsi_mapel` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `jenis_deskripsi` enum('Pengetahuan','Ketrampilan','','') DEFAULT NULL,
  `nilai` enum('A','B') NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_deskripsi_mapel`
--

INSERT INTO `tb_deskripsi_mapel` (`id_deskripsi_mapel`, `id_mapel`, `jenis_deskripsi`, `nilai`, `deskripsi`) VALUES
(1, 1, 'Pengetahuan', 'B', 'Memahami Teks Lisan tulis, fungsional iklan, surat pribadi, dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(3, 1, 'Pengetahuan', 'A', 'Memahami dengan baik bahasa asing dan fasih berbicara'),
(4, 17, 'Pengetahuan', 'A', 'Memahami dengan Baik sifat bilangan perangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(5, 17, 'Pengetahuan', 'B', 'Memahami dengan baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(6, 10, 'Pengetahuan', 'A', 'Memahami sangat Baik dalam Seni budaya '),
(7, 10, 'Ketrampilan', 'B', 'memahami dengan baik dalam hal seni '),
(8, 15, 'Pengetahuan', 'A', 'Mempunyai kemampuan yang baik dalam  permainan  bola besar dan bola kecil serta aktivitas kebugaran jasmani.'),
(9, 15, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang baik dalam  permainan  bola besar dan bola kecil serta aktivitas kebugaran jasmani.'),
(10, 16, 'Pengetahuan', 'A', 'Mempunyai pengetahuan sangat baik tentang sesorah, pranatacara dan menulis berita.'),
(11, 16, 'Pengetahuan', 'B', 'Mempunyai pengetahuan baik tentang sesorah, pranatacara dan menulis berita.'),
(12, 16, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(13, 16, 'Ketrampilan', 'B', 'Mempunyai keterampilan baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(14, 1, 'Ketrampilan', 'A', 'Sangat terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(15, 1, 'Ketrampilan', 'B', 'Terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(16, 10, 'Pengetahuan', 'B', 'Mempunyai kemampuan baik dalam mengaransir secara sederhana, karya seni musik, atau lagu Asia dan menggambar flora, fauna, ragam hias pada bahan tekstil dan kayu.'),
(17, 10, 'Ketrampilan', 'A', 'Sangat Memahami dengan baik dalam mengaransir secara sederhana, karya seni musik, atau lagu Asia dan menggambar flora, fauna, ragam hias pada bahan tekstil dan kayu.'),
(19, 17, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(20, 17, 'Ketrampilan', 'B', 'Mempunyai keterampilan baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi_sikap`
--

CREATE TABLE `tb_deskripsi_sikap` (
  `id_deskripsi_sikap` int(11) NOT NULL,
  `jenis_deskripsi` enum('Deskripsi Spiritual','Deskripsi Sosial') DEFAULT NULL,
  `nilai` enum('A','B') NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_deskripsi_sikap`
--

INSERT INTO `tb_deskripsi_sikap` (`id_deskripsi_sikap`, `jenis_deskripsi`, `nilai`, `deskripsi`) VALUES
(4, 'Deskripsi Spiritual', 'A', 'Baik Sekali'),
(8, 'Deskripsi Sosial', 'A', 'Baik Sekali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_ketrampilan`
--

CREATE TABLE `tb_detail_ketrampilan` (
  `id_detail_ketrampilan` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai_praktek` int(11) DEFAULT NULL,
  `nilai_folio` int(11) DEFAULT NULL,
  `nilai_proyek` int(11) DEFAULT NULL,
  `nilai_akhir` int(11) NOT NULL,
  `id_deskripsi_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_ketrampilan`
--

INSERT INTO `tb_detail_ketrampilan` (`id_detail_ketrampilan`, `id_mapel`, `id_siswa`, `nilai_praktek`, `nilai_folio`, `nilai_proyek`, `nilai_akhir`, `id_deskripsi_mapel`) VALUES
(1, 1, 1, 89, 90, 89, 89, 12),
(5, 10, 1, 89, 78, 67, 78, 7),
(6, 15, 1, 78, 78, 78, 78, 7),
(7, 16, 1, 89, 89, 78, 85, 7),
(8, 17, 1, 78, 90, 90, 86, 12),
(9, 15, 6, 78, 90, 78, 82, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pengetahuan`
--

CREATE TABLE `tb_detail_pengetahuan` (
  `id_detail_pengetahuan` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_deskripsi_mapel` int(11) DEFAULT NULL,
  `tugas1` int(11) DEFAULT NULL,
  `tugas2` int(11) DEFAULT NULL,
  `tugas3` int(11) DEFAULT NULL,
  `tugas4` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `ulangan_harian` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pengetahuan`
--

INSERT INTO `tb_detail_pengetahuan` (`id_detail_pengetahuan`, `id_mapel`, `id_siswa`, `id_deskripsi_mapel`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `uts`, `uas`, `ulangan_harian`) VALUES
(3, 1, 1, 1, 86, 87, 86, 60, 60, 70, 70),
(9, 10, 1, 1, 67, 89, 56, 45, 90, 67, 74),
(10, 15, 1, 1, 90, 67, 89, 56, 78, 90, 81),
(11, 16, 1, 1, 89, 67, 56, 78, 90, 45, 69),
(12, 17, 1, 3, 90, 90, 89, 78, 89, 90, 89),
(13, 1, 6, 1, 67, 89, 67, 90, 67, 78, 74);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekskul`
--

CREATE TABLE `tb_ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `nama_ekskul` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ekskul`
--

INSERT INTO `tb_ekskul` (`id_ekskul`, `id_guru`, `nama_ekskul`) VALUES
(1, 5, 'bola'),
(2, 11, 'tari'),
(4, 6, 'basket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `golongan_ruang` varchar(50) DEFAULT NULL,
  `tingkatan` varchar(50) DEFAULT NULL,
  `tugas_tertentu` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `jenis_kelamin`, `tanggal_lahir`, `golongan_ruang`, `tingkatan`, `tugas_tertentu`, `foto`) VALUES
(3, '195301101984032002', 'Hj. SUBIASTUTI, BA.', 'perempuan', '1951-12-24', 'IV A', 'Guru Pembina', ' Pembinaan Ketaqwaan', ''),
(4, ' 195301101984032002', ' RR. MURHADIYATI, S.Pd.', 'perempuan', '0953-10-11', 'IV A', 'Guru Pembina', ' Wakil Kepala Sekolah Urs.Humas', ''),
(5, '195710181979032003', ' MARLIA NURROCHMA, S.Pd.', 'perempuan', '1959-10-18', 'IV A', 'Guru Pembina', '-', ''),
(6, '196812302007012009', ' SRI RETNO KUMOLO, S.Pd.', 'perempuan', '1970-12-30', 'III A', 'Guru Muda', 'Sosial dan Kekeluargaan', ''),
(8, '19591129 198103 2 00', 'MUHAMMAD FAHRUL STYAWAN,S.Pd.', 'laki-laki', '1989-12-27', 'III A', 'Guru Muda', '-', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru_ampu`
--

CREATE TABLE `tb_guru_ampu` (
  `id_guru_ampu` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `tahun_ajaran` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru_ampu`
--

INSERT INTO `tb_guru_ampu` (`id_guru_ampu`, `id_guru`, `id_mapel`, `id_kelas`, `semester`, `tahun_ajaran`) VALUES
(1, 2, 2, 1, NULL, NULL),
(9, 3, 1, 12, 'Ganjil', '2017/2018'),
(10, 5, 10, 2, 'Ganjil', '2018/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hak_akses` enum('kurikulum','guru','siswa','ortu','wali_kelas') DEFAULT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`username`, `password`, `nama`, `hak_akses`, `id_guru`) VALUES
('agra', 'agra', 'agra laksmi', 'kurikulum', 0),
('iseng', 'iseng', 'a', 'guru', 4),
('jambret', 'jambret', 'aa', 'guru', 0),
('suyud', 'suyud', 'suyud', 'kurikulum', 3),
('tata', 'tata', 'yyy', 'wali_kelas', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `nama_kelas` varchar(5) DEFAULT NULL,
  `tingkat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_guru`, `nama_kelas`, `tingkat`) VALUES
(2, 6, 'A', 'VIII'),
(11, 6, 'A', 'VII'),
(12, 3, 'B', 'VII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `kelompok` enum('A','B') NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `id_guru`, `id_kelas`, `nama_mapel`, `kelompok`, `kkm`) VALUES
(1, 3, 2, 'inggris', 'A', 78),
(10, 4, 2, 'seni budaya', 'B', 78),
(15, 6, 2, 'Jasmani, Olah Raga dan Kesehatan', 'B', 78),
(16, 5, 2, 'Bahasa Jawa', 'B', 78),
(17, 8, 2, 'Matematika', 'A', 78);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_ekskul`
--

CREATE TABLE `tb_nilai_ekskul` (
  `id_nilai_ekskul` int(11) NOT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai` varchar(3) DEFAULT NULL,
  `predikat` varchar(2) NOT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_ekskul`
--

INSERT INTO `tb_nilai_ekskul` (`id_nilai_ekskul`, `id_ekskul`, `id_siswa`, `nilai`, `predikat`, `ket`) VALUES
(1, 3, 4, '90', 'A', 'baik'),
(3, 3, 1, '89', 'A', 'Bagus'),
(4, 1, 6, '80', 'A', 'Baik Sekali'),
(5, 4, 1, '89', 'A', 'Melakukan dengan Benar'),
(6, 1, 1, '78', 'B', 'Melakukan dengan benar sekali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_sikap`
--

CREATE TABLE `tb_nilai_sikap` (
  `id_nilai_sikap` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai_akhir` enum('A','B','','') DEFAULT NULL,
  `id_deskripsi_sikap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_sikap`
--

INSERT INTO `tb_nilai_sikap` (`id_nilai_sikap`, `id_siswa`, `nilai_akhir`, `id_deskripsi_sikap`) VALUES
(6, 1, 'B', 4),
(8, 1, 'A', 8),
(9, 6, 'A', 8),
(13, 6, 'A', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `id_ortu` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `status` enum('Ayah','Ibu','Wali') DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `tahun_lahir` int(11) DEFAULT NULL,
  `jenjang_pendidikan` enum('SD','SMP','SMA','D3','S1','S2','S3') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `penghasilan` enum('Kurang dari Rp. 500,000','Rp. 500,000 - Rp. 999,999','Rp. 1,000,000 - Rp. 1,999,999','Rp. 2,000,000 - Rp. 4,999,999','Lebih dari Rp. 5,000,000') DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ortu`
--

INSERT INTO `tb_ortu` (`id_ortu`, `id_siswa`, `status`, `nama_ortu`, `tahun_lahir`, `jenjang_pendidikan`, `pekerjaan`, `penghasilan`, `nik`) VALUES
(2, 1, 'Ayah', 'hakim', 1984, 'SMA', 'guru', 'Rp. 1,000,000 - Rp. 1,999,999', '65466758758'),
(3, 4, 'Ayah', 'Januar', 1970, 'D3', 'Guru', 'Rp. 1,000,000 - Rp. 1,999,999', '456789897657'),
(4, 10, NULL, 'Hasyim Afandi', 1970, 'S1', 'wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '56787978654678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `sakit` int(3) DEFAULT NULL,
  `ijin` int(3) DEFAULT NULL,
  `tanpa_ket` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `id_siswa`, `id_kelas`, `sakit`, `ijin`, `tanpa_ket`) VALUES
(3, 6, 2, 1, 1, 0),
(6, 1, 0, 1, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rapor`
--

CREATE TABLE `tb_rapor` (
  `id_rapor` int(11) NOT NULL,
  `id_nilai_sikap` int(11) DEFAULT NULL,
  `id_detail_pengetahuan` int(11) DEFAULT NULL,
  `id_detail_ketrampilan` int(11) DEFAULT NULL,
  `id_nilai_ekskul` int(11) DEFAULT NULL,
  `id_presensi` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_guru` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rapor`
--

INSERT INTO `tb_rapor` (`id_rapor`, `id_nilai_sikap`, `id_detail_pengetahuan`, `id_detail_ketrampilan`, `id_nilai_ekskul`, `id_presensi`, `id_siswa`, `id_guru`, `catatan`) VALUES
(1, 6, 3, 1, 3, 3, 1, 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `agama` enum('islam','kristen','katolik','hindu','budha') DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `dusun` varchar(15) DEFAULT NULL,
  `kelurahan` varchar(15) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `jenis_tinggal` varchar(30) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_kelas`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `umur`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kode_pos`, `jenis_tinggal`, `telepon`, `email`, `foto`) VALUES
(1, 12, 28115865, 'RISKA ELISAPUTRI', 'perempuan', 'Sleman', '2002-11-04', 6264, 'kristen', 'Jl. Magelang', '08', '10', 'Kutu wates', 'Sinduadi', 55213, 'Bersama orang tua', '-', '-', ''),
(2, 1, 123456789, 'agra laksmi', 'perempuan', 'temanggung', '1996-09-14', 21, 'islam', 'Parakan', '01', '07', 'hahaha', 'hahahaha', 56456, 'rumah orang tua', '057839638', 'gshdjsdkhsk', ''),
(4, 12, 2147483647, 'Rivaldo Bima Pratama', 'laki-laki', 'Kuningan', '2001-12-21', 6265, 'hindu', 'jakarta', '05', '09', 'Sinduadi', 'Sleman', 52345, 'Bersama orang tua', '-', '-', ''),
(5, 1, 2147483647, 'mufid bodo cupu bego nilainya E', 'laki-laki', 'selokan mataram', '1989-10-17', 11, 'islam', 'trini', '09', '07', 'rere', 'wewe', 234566, 'sendiri', '24354657567', 'mufid_bego@gmail.comagr', ''),
(6, 12, 46044182, 'Adetio Gilang Pamungkas', 'laki-laki', 'sleman', '2004-12-20', 6269, 'islam', 'JOGOYUDAN JT 3/601 GOWONGAN YO', '33', '08', 'SOSRODIPURAN ', 'SOSROMENDURAN', 55271, 'Bersama orang tua', '081802657295', '-', ''),
(10, 12, 21195245, 'Mochmad Raka Rangga Trengginas', 'laki-laki', 'Yogyakarta', '2001-04-24', 6263, 'islam', 'Jl. Layur No. 105 Perum Nogoti', '05', '35', 'Mlangi', 'Nogptirto', 55292, 'Bersama orang tua', '081328813957', '-', ''),
(11, 2, 2345676, 'Rahina Birana', 'perempuan', 'Tangerang', '2004-12-03', 6260, 'hindu', 'Sleman', '01', '09', 'Sleman', 'Sleman', 56488, 'Bersama orang tua', '0853456789', '-', ''),
(12, 12, 2147483647, 'agra laksmi maitri', 'perempuan', 'hahahaha', '2013-12-09', 5667, 'islam', 'gagagaga', '01', '08', 'gagaga', 'jahajja', 56767, 'Bersama orang tua', '085453453', 'sfgdhjhghsdj', ''),
(13, 12, 2147483647, 'agra laksmi maitri', 'perempuan', 'hahahaha', '2013-12-09', 5667, 'islam', 'gagagaga', '01', '08', 'gagaga', 'jahajja', 56767, 'Bersama orang tua', '085453453', 'sfgdhjhghsdj', ''),
(14, 12, 2147483647, 'agra laksmi maitri', 'perempuan', 'hahahaha', '2013-12-09', 5667, 'islam', 'gagagaga', '01', '08', 'gagaga', 'jahajja', 56767, 'Bersama orang tua', '085453453', 'sfgdhjhghsdj', ''),
(15, 12, 2147483647, 'agra laksmi maitri', 'perempuan', 'hahahaha', '2013-12-09', 5667, 'islam', 'gagagaga', '01', '08', 'gagaga', 'jahajja', 56767, 'Bersama orang tua', '085453453', 'sfgdhjhghsdj', ''),
(16, 12, 2147483647, 'agra laksmi maitri', 'perempuan', 'hahahaha', '2013-12-09', 5667, 'islam', 'gagagaga', '01', '08', 'gagaga', 'jahajja', 56767, 'Bersama orang tua', '085453453', 'sfgdhjhghsdj', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_deskripsi_mapel`
--
ALTER TABLE `tb_deskripsi_mapel`
  ADD PRIMARY KEY (`id_deskripsi_mapel`);

--
-- Indexes for table `tb_deskripsi_sikap`
--
ALTER TABLE `tb_deskripsi_sikap`
  ADD PRIMARY KEY (`id_deskripsi_sikap`);

--
-- Indexes for table `tb_detail_ketrampilan`
--
ALTER TABLE `tb_detail_ketrampilan`
  ADD PRIMARY KEY (`id_detail_ketrampilan`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_detail_pengetahuan`
--
ALTER TABLE `tb_detail_pengetahuan`
  ADD PRIMARY KEY (`id_detail_pengetahuan`);

--
-- Indexes for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_guru_ampu`
--
ALTER TABLE `tb_guru_ampu`
  ADD PRIMARY KEY (`id_guru_ampu`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `tb_nilai_ekskul`
--
ALTER TABLE `tb_nilai_ekskul`
  ADD PRIMARY KEY (`id_nilai_ekskul`),
  ADD KEY `id_ekstra` (`id_ekskul`);

--
-- Indexes for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  ADD PRIMARY KEY (`id_nilai_sikap`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `tb_nilai_sikap_ibfk_1` (`id_deskripsi_sikap`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_rapor`
--
ALTER TABLE `tb_rapor`
  ADD PRIMARY KEY (`id_rapor`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_deskripsi_mapel`
--
ALTER TABLE `tb_deskripsi_mapel`
  MODIFY `id_deskripsi_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_deskripsi_sikap`
--
ALTER TABLE `tb_deskripsi_sikap`
  MODIFY `id_deskripsi_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_detail_ketrampilan`
--
ALTER TABLE `tb_detail_ketrampilan`
  MODIFY `id_detail_ketrampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_detail_pengetahuan`
--
ALTER TABLE `tb_detail_pengetahuan`
  MODIFY `id_detail_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_guru_ampu`
--
ALTER TABLE `tb_guru_ampu`
  MODIFY `id_guru_ampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_nilai_ekskul`
--
ALTER TABLE `tb_nilai_ekskul`
  MODIFY `id_nilai_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_rapor`
--
ALTER TABLE `tb_rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
