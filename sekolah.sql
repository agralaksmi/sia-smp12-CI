-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Apr 2018 pada 22.08
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
  `nilai` enum('A','B','C','D') NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_deskripsi_mapel`
--

INSERT INTO `tb_deskripsi_mapel` (`id_deskripsi_mapel`, `id_mapel`, `jenis_deskripsi`, `nilai`, `deskripsi`) VALUES
(22, 18, 'Pengetahuan', 'A', 'Baik Sekali'),
(23, 18, 'Pengetahuan', 'B', 'Baik'),
(24, 18, 'Pengetahuan', 'C', 'Cukup'),
(25, 18, 'Pengetahuan', 'D', 'Kurang'),
(26, 19, 'Ketrampilan', 'D', 'jjjjjjjj');

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
(8, 'Deskripsi Sosial', 'A', 'Baik Sekali Kali');

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
(17, 19, 30, 44, 45, 34, 41, NULL),
(18, 19, 30, 45, 67, 56, 56, 26),
(19, 18, 34, 80, 90, 90, 87, NULL),
(20, 19, 34, 50, 90, 45, 62, NULL);

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
  `ulangan_harian` int(15) DEFAULT NULL,
  `id_wali_kelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pengetahuan`
--

INSERT INTO `tb_detail_pengetahuan` (`id_detail_pengetahuan`, `id_mapel`, `id_siswa`, `id_deskripsi_mapel`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `uts`, `uas`, `ulangan_harian`, `id_wali_kelas`, `id_kelas`, `id_tahun_ajaran`) VALUES
(21, 18, 30, 25, 56, 45, 45, 34, 56, 89, 63, 0, 0, 0),
(22, 19, 30, 25, 78, 45, 34, 23, 45, 67, 52, 0, 0, 0),
(23, 19, 31, 25, 67, 78, 90, 90, 66, 55, 67, 0, 0, 0),
(24, 18, 34, 23, 70, 80, 80, 67, 90, 90, 85, 0, 0, 0),
(25, 18, 35, 25, 78, 56, 45, 34, 56, 78, 62, 0, 0, 0);

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
(5, 11, 'TAEKWONDO'),
(6, 8, 'Sepak Bola'),
(7, 6, 'balet');

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
  `tugas_tertentu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `jenis_kelamin`, `tanggal_lahir`, `golongan_ruang`, `tingkatan`, `tugas_tertentu`) VALUES
(3, '195301101984032002', 'Hj. SUBIASTUTI, BA.', 'perempuan', '1951-12-24', 'IV A', 'Guru Pembina', ' Pembinaan Ketaqwaan'),
(4, ' 195301101984032002', ' RR. MURHADIYATI, S.Pd.', 'perempuan', '0953-10-11', 'IV A', 'Guru Pembina', ' Wakil Kepala Sekolah Urs.Humas'),
(5, '195710181979032003', ' MARLIA NURROCHMA, S.Pd.', 'perempuan', '1959-10-18', 'IV B', 'Guru Pembina', '-'),
(6, '196812302007012009', ' SRI RETNO KUMOLO, S.Pd.', 'perempuan', '1970-12-30', 'III A', 'Guru Muda', 'Sosial dan Kekeluargaan'),
(8, '19591129 198103 200', 'MUHAMMAD FAHRUL STYAWAN,S.Pd.', 'perempuan', '1989-12-27', 'III A', 'Guru Muda', '-'),
(11, '195303281979031003', 'ABDUL MAJID', 'laki-laki', '1953-03-28', 'IV A', 'Honorer Daerah', '-'),
(12, '198409202010012008', 'BACHAR HERU LAKSONO', 'laki-laki', '1960-12-31', '-', 'Honorer Daerah', '-'),
(13, '196501171986032005', ' RUMIYATI, A.Ma.', 'perempuan', '1962-01-17', 'III. D', 'Guru Dewasa Tk.I', '-'),
(14, '19651006 200801200', 'Dra. KASMINAH', 'perempuan', '1972-02-16', 'III B', 'Guru Pertama', ' Pembinaan Pendidikan Bela Negara'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `id_tahun_ajaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru_ampu`
--

INSERT INTO `tb_guru_ampu` (`id_guru_ampu`, `id_guru`, `id_mapel`, `id_kelas`, `semester`, `id_tahun_ajaran`) VALUES
(19, 13, 19, 12, 'Ganjil', 3),
(20, 11, 17, 0, '1', NULL),
(21, 13, 18, 12, 'Genap', 1),
(22, 12, 18, 13, 'Ganjil', 1),
(23, 13, 18, 19, 'Genap', 1),
(24, 5, 20, 15, 'Genap', 1);

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
('seni', 'seni', 'Marlia', 'guru', 5),
('sri', 'sri', 'Sri Retno Kumolo', 'guru', 6),
('subiastuti', 'subiastuti', 'wooooooooooooooooooo', 'guru', 3),
('tata', 'tata', 'yyy', 'wali_kelas', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(5) DEFAULT NULL,
  `tingkat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `tingkat`) VALUES
(12, 'A', '7'),
(13, 'B', '7'),
(14, 'C', '7'),
(15, 'A', '8'),
(17, 'B', '8'),
(19, 'C', '8'),
(20, 'A', '9'),
(21, 'B', '9'),
(22, 'C', '9');

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
(18, 3, 12, 'bahasa indonesia', 'A', 78),
(19, 11, 12, 'Matematika', 'A', 78),
(20, NULL, 12, 'Bahasa Inggris', 'B', 78),
(22, NULL, 13, 'bahasa indonesia', 'A', 78);

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
(12, 6, 30, '78', 'A', 'Bagus '),
(13, 5, 30, '90', 'A', 'Bagus Sekali'),
(14, 6, 34, '89', 'A', 'dgfhdghkrg');

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
(1, 30, 'A', 4),
(2, 30, 'A', 4),
(3, 34, '', 4);

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
(4, 10, 'Wali', 'Hasyim Afandi', 1970, 'S1', 'wiraswasta', 'Rp. 2,000,000 - Rp. 4,999,999', '56787978654678'),
(5, 10, 'Ibu', 'Irwani Rahmawati', 1970, 'D3', 'Ibu Rumah Tangga', 'Kurang dari Rp. 500,000', '3456789765456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_wali_kelas` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `sakit` int(3) DEFAULT NULL,
  `ijin` int(3) DEFAULT NULL,
  `tanpa_ket` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `id_wali_kelas`, `id_siswa`, `id_kelas`, `sakit`, `ijin`, `tanpa_ket`) VALUES
(3, 0, 6, 2, 1, 1, 0),
(6, 0, 1, 0, 1, 5, 1),
(7, 0, 10, 0, 9, 0, 0),
(8, 1, 34, 12, 3, 0, 0),
(9, 14, 35, 12, 0, 2, 3),
(10, 14, 35, 12, 0, 0, 0),
(11, 14, 34, 12, 0, 0, 0),
(12, 14, 34, 12, 0, 0, 0),
(13, 14, 34, 12, 0, 0, 0);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('islam','kristen','katolik','hindu','budha') DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `dusun` varchar(15) DEFAULT NULL,
  `kelurahan` varchar(15) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `jenis_tinggal` varchar(30) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kode_pos`, `jenis_tinggal`, `telepon`, `email`) VALUES
(34, 46752836, 'Abdullah Zuhdi Firmansyah', 'laki-laki', 'Malang', '2002-11-12', 'islam', 'Jetis', '01', '09', 'Sleman', 'Sleman', 5454, 'Sleman', '0856789876', 'abdul99@gmail.com'),
(35, 44457907, 'Abigail Sufa', 'perempuan', 'Jakarta', '2003-02-12', 'kristen', 'Jl. Layur No. 105 Perum Nogoti', '09', '06', 'Sleman\\', 'Sleman', 5676, 'Bersama orang tua', '081802657295', 'abigail90@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa_pertahun`
--

CREATE TABLE `tb_siswa_pertahun` (
  `id_siswa_pertahun` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa_pertahun`
--

INSERT INTO `tb_siswa_pertahun` (`id_siswa_pertahun`, `id_siswa`, `id_kelas`, `id_tahun_ajaran`) VALUES
(2, 31, 20, 1),
(4, 31, 17, 1),
(6, 35, 12, 1),
(9, 34, 12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `status`) VALUES
(1, '2017/2018', 'aktif'),
(3, '2018/2019', 'nonaktif'),
(5, '2017/2018', 'nonaktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali_kelas`
--

CREATE TABLE `tb_wali_kelas` (
  `id_wali_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wali_kelas`
--

INSERT INTO `tb_wali_kelas` (`id_wali_kelas`, `id_guru`, `id_kelas`, `id_tahun_ajaran`) VALUES
(1, 14, 12, 1),
(2, 6, 15, 1),
(3, 12, 19, 1);

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
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_siswa_pertahun`
--
ALTER TABLE `tb_siswa_pertahun`
  ADD PRIMARY KEY (`id_siswa_pertahun`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `tb_wali_kelas`
--
ALTER TABLE `tb_wali_kelas`
  ADD PRIMARY KEY (`id_wali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_deskripsi_mapel`
--
ALTER TABLE `tb_deskripsi_mapel`
  MODIFY `id_deskripsi_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_deskripsi_sikap`
--
ALTER TABLE `tb_deskripsi_sikap`
  MODIFY `id_deskripsi_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_detail_ketrampilan`
--
ALTER TABLE `tb_detail_ketrampilan`
  MODIFY `id_detail_ketrampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_detail_pengetahuan`
--
ALTER TABLE `tb_detail_pengetahuan`
  MODIFY `id_detail_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_guru_ampu`
--
ALTER TABLE `tb_guru_ampu`
  MODIFY `id_guru_ampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_nilai_ekskul`
--
ALTER TABLE `tb_nilai_ekskul`
  MODIFY `id_nilai_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_rapor`
--
ALTER TABLE `tb_rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tb_siswa_pertahun`
--
ALTER TABLE `tb_siswa_pertahun`
  MODIFY `id_siswa_pertahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_wali_kelas`
--
ALTER TABLE `tb_wali_kelas`
  MODIFY `id_wali_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
