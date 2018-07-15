-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2018 pada 19.02
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
(1, 10, 'Pengetahuan', 'A', 'Mempunyai pengetahuan sangat baik dalam membangun sikap kritis terhadap perannya dalam masyarakat untuk menunjukkan diri sebagai orang yang sudah diselamatkan');

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
(2, 'Deskripsi Spiritual', 'A', 'smemiliki sikap spiritual yang baik dlam hal taat beribadah, berdoa, bersyukur,tawakal,memberi salam, toleransi, ukhuwah, pengendalian diri, terus ditingkatkan'),
(3, 'Deskripsi Sosial', 'B', 'memiliki sikap sosial  yang   baik dalam hal  kejujuran, kedisiplinan,  tanggung jawab,  kepedulian,  toleransi,  gotong royong,  kesantunan,  percaya diri,   terus ditingkatkan.'),
(5, 'Deskripsi Spiritual', 'A', 'memiliki sikap spiritual yang sangat baik dlam hal taat beribadah, berdoa, bersyukur,tawakal,memberi salam, toleransi, ukhuwah, pengendalian diri, terus ditingkatkan'),
(6, 'Deskripsi Sosial', 'A', 'memiliki sikap sosial  yang  sangat baik dalam hal  kejujuran, kedisiplinan,  tanggung jawab,  kepedulian,  toleransi,  gotong royong,  kesantunan,  percaya diri,   terus ditingkatkan.');

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
  `id_deskripsi_mapel` int(11) DEFAULT NULL,
  `id_siswa_pertahun` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_wali_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_ketrampilan`
--

INSERT INTO `tb_detail_ketrampilan` (`id_detail_ketrampilan`, `id_mapel`, `id_siswa`, `nilai_praktek`, `nilai_folio`, `nilai_proyek`, `nilai_akhir`, `id_deskripsi_mapel`, `id_siswa_pertahun`, `id_kelas`, `id_wali_kelas`) VALUES
(1, 1, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(2, 2, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(3, 3, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(4, 4, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(5, 5, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(6, 6, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(7, 7, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(8, 8, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(9, 9, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(10, 10, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(11, 11, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(12, 12, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(13, 13, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(14, 14, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(15, 15, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(16, 16, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(17, 17, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(18, 18, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(19, 19, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(20, 20, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(21, 21, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(22, 22, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(23, 23, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(24, 24, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(25, 25, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(26, 26, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(27, 27, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(28, 28, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(29, 29, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(30, 30, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(31, 31, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(32, 32, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(33, 33, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(34, 34, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(35, 35, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(36, 36, 32, 0, 0, 0, 0, 0, 31, 4, 3),
(193, 1, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(194, 4, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(195, 7, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(196, 10, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(197, 13, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(198, 16, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(199, 19, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(200, 22, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(201, 25, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(202, 28, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(203, 31, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(204, 34, 3, 0, 0, 0, 0, 0, 37, 1, 1),
(205, 1, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(206, 4, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(207, 7, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(208, 10, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(209, 13, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(210, 16, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(211, 19, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(212, 22, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(213, 25, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(214, 28, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(215, 31, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(216, 34, 8, 0, 0, 0, 0, 0, 38, 3, 2),
(217, 37, 8, 0, 0, 0, 0, 0, 38, 3, 2);

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
  `id_siswa_pertahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pengetahuan`
--

INSERT INTO `tb_detail_pengetahuan` (`id_detail_pengetahuan`, `id_mapel`, `id_siswa`, `id_deskripsi_mapel`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `uts`, `uas`, `ulangan_harian`, `id_wali_kelas`, `id_kelas`, `id_siswa_pertahun`) VALUES
(37, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(38, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(39, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(40, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(41, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(42, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(43, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(44, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(45, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(46, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(47, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(48, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(49, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(50, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(51, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(52, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(53, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(54, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(55, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(56, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(57, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(58, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(59, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(60, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(61, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(62, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(63, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(64, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(65, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(66, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(67, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(68, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(69, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(70, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(71, 35, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(72, 36, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 32),
(73, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(74, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(75, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(76, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(77, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(78, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(79, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(80, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(81, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(82, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(83, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(84, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(85, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(86, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(87, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(88, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(89, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(90, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(91, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(92, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(93, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(94, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(95, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(96, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(97, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(98, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(99, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(100, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(101, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(102, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(103, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(104, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(105, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(106, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(107, 35, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(108, 36, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 33),
(193, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(194, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(195, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(196, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(197, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(198, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(199, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(200, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(201, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(202, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(203, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(204, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 37),
(205, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(206, 4, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(207, 7, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(208, 10, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(209, 13, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(210, 16, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(211, 19, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(212, 22, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(213, 25, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(214, 28, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(215, 31, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(216, 34, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38),
(217, 37, 3, 0, 0, 0, 0, 0, 0, 0, 0, 2, 8, 38);

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
(1, 14, 'Basket'),
(2, 13, 'Voly');

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
(5, '234567890876', 'agra', 'perempuan', '1996-09-14', 'IV A', 'Guru Muda', '-'),
(6, '195301101984032002', 'Trimanto', 'laki-laki', '1958-11-09', 'IV. A', 'Guru Pembina', 'Wakil Kepala Sekolah'),
(7, '195303281979031003', 'Mulyono, BA', 'laki-laki', '1951-07-30', 'IV. A', 'Guru Pembina', '-'),
(8, '196501171986032005', 'Hesty Arry Artati, S.pd.', 'perempuan', '1976-03-17', 'III A', 'Guru Muda', '-'),
(9, '196812302007012009', 'Avica Octaviani,S.Kom', 'perempuan', '1977-03-17', 'III A', 'Guru Muda', 'Pembinaan Ketrampilan'),
(10, '198409202010012008', 'Ratnawati Marfu''ah, S.pd.', 'perempuan', '1977-03-15', 'III A', 'Guru Muda', '-'),
(11, '195301101984032001', 'Hj. SUBIASTUTI, BA.', 'perempuan', '1951-12-24', 'IV A', 'Guru Pembina', 'Pembinaan Ketaqwaan'),
(12, '195710181979032011', 'Fatma Eva Yuliastri,S.Pd.', 'perempuan', '1970-12-09', 'III A', 'Guru Muda', '-'),
(13, '198409202010012055', 'Wahmad,S.Pd.', 'laki-laki', '1967-07-13', 'III A', 'Guru Muda', '-'),
(14, '196812302007012055', 'Trisno Sugiyanto, S.Pd.', 'laki-laki', '1970-12-13', 'III A', 'Guru Muda', '-');

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
(1, 6, 1, 1, 'genap', 1),
(2, 6, 1, 3, 'genap', 1),
(3, 6, 2, 4, 'genap', 1),
(4, 10, 5, 1, 'genap', 1),
(5, 10, 4, 3, 'genap', 1),
(6, 10, 5, 4, 'genap', 1),
(7, 9, 7, 1, 'genap', 1),
(8, 9, 7, 3, 'genap', 1),
(9, 12, 7, 4, 'genap', 1),
(10, 13, 25, 1, 'genap', 1),
(11, 14, 25, 3, 'genap', 1),
(12, 14, 25, 4, 'genap', 1),
(13, 11, 34, 1, 'genap', 1),
(14, 11, 34, 3, 'genap', 1),
(15, 11, 34, 4, 'genap', 1);

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
('agra', 'agra', 'Agra Laksmi', 'kurikulum', 1);

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
(1, 'A', '7'),
(3, 'B', '7'),
(4, 'C', '7');

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
(1, 6, 1, 'IPA', 'A', 78),
(37, NULL, 3, 'IPA', 'A', 78),
(38, NULL, 4, 'IPA', 'A', 78),
(39, NULL, 1, 'Bahasa Inggris', 'A', 78),
(40, NULL, 3, 'Bahasa Inggris', 'A', 78),
(41, NULL, 4, 'Bahasa Inggris', 'A', 78);

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
  `ket` text,
  `id_kelas` int(11) NOT NULL,
  `id_siswa_pertahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_sikap`
--

CREATE TABLE `tb_nilai_sikap` (
  `id_nilai_sikap` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai_akhir` enum('A','B','C','D') DEFAULT NULL,
  `id_deskripsi_sikap` int(11) DEFAULT NULL,
  `id_siswa_pertahun` int(11) NOT NULL,
  `id_wali_kelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jenis_deskripsi_sikap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_sikap`
--

INSERT INTO `tb_nilai_sikap` (`id_nilai_sikap`, `id_siswa`, `nilai_akhir`, `id_deskripsi_sikap`, `id_siswa_pertahun`, `id_wali_kelas`, `id_kelas`, `jenis_deskripsi_sikap`) VALUES
(5, 5, '', 0, 3, 0, 1, 'Deskripsi Sosial'),
(6, 5, '', 0, 3, 0, 1, 'Deskripsi Spiritual'),
(7, 6, '', 0, 4, 0, 1, 'Deskripsi Sosial'),
(8, 6, '', 0, 4, 0, 1, 'Deskripsi Spiritual'),
(11, 8, '', 0, 6, 0, 1, 'Deskripsi Sosial'),
(12, 8, '', 0, 6, 0, 1, 'Deskripsi Spiritual'),
(15, 10, '', 0, 8, 0, 1, 'Deskripsi Sosial'),
(16, 10, '', 0, 8, 0, 1, 'Deskripsi Spiritual'),
(17, 12, '', 0, 9, 0, 1, 'Deskripsi Sosial'),
(18, 12, '', 0, 9, 0, 1, 'Deskripsi Spiritual'),
(19, 13, '', 0, 10, 0, 1, 'Deskripsi Sosial'),
(20, 13, '', 0, 10, 0, 1, 'Deskripsi Spiritual'),
(21, 14, '', 0, 11, 0, 3, 'Deskripsi Sosial'),
(22, 14, '', 0, 11, 0, 3, 'Deskripsi Spiritual'),
(25, 16, '', 0, 13, 0, 3, 'Deskripsi Sosial'),
(26, 16, '', 0, 13, 0, 3, 'Deskripsi Spiritual'),
(27, 17, '', 0, 14, 0, 3, 'Deskripsi Sosial'),
(28, 17, '', 0, 14, 0, 3, 'Deskripsi Spiritual'),
(29, 18, '', 0, 15, 0, 3, 'Deskripsi Sosial'),
(30, 18, '', 0, 15, 0, 3, 'Deskripsi Spiritual'),
(31, 19, '', 0, 16, 0, 3, 'Deskripsi Sosial'),
(32, 19, '', 0, 16, 0, 3, 'Deskripsi Spiritual'),
(33, 20, '', 0, 17, 0, 3, 'Deskripsi Sosial'),
(34, 20, '', 0, 17, 0, 3, 'Deskripsi Spiritual'),
(35, 21, '', 0, 18, 0, 3, 'Deskripsi Sosial'),
(36, 21, '', 0, 18, 0, 3, 'Deskripsi Spiritual'),
(37, 22, '', 0, 19, 0, 3, 'Deskripsi Sosial'),
(38, 22, '', 0, 19, 0, 3, 'Deskripsi Spiritual'),
(39, 11, '', 0, 20, 0, 1, 'Deskripsi Sosial'),
(40, 11, '', 0, 20, 0, 1, 'Deskripsi Spiritual'),
(41, 23, '', 0, 21, 0, 4, 'Deskripsi Sosial'),
(42, 23, '', 0, 21, 0, 4, 'Deskripsi Spiritual'),
(43, 24, '', 0, 22, 0, 4, 'Deskripsi Sosial'),
(44, 24, '', 0, 22, 0, 4, 'Deskripsi Spiritual'),
(45, 25, '', 0, 23, 0, 4, 'Deskripsi Sosial'),
(46, 25, '', 0, 23, 0, 4, 'Deskripsi Spiritual'),
(47, 26, '', 0, 24, 0, 4, 'Deskripsi Sosial'),
(48, 26, '', 0, 24, 0, 4, 'Deskripsi Spiritual'),
(49, 27, '', 0, 25, 0, 4, 'Deskripsi Sosial'),
(50, 27, '', 0, 25, 0, 4, 'Deskripsi Spiritual'),
(51, 28, '', 0, 26, 0, 4, 'Deskripsi Sosial'),
(52, 28, '', 0, 26, 0, 4, 'Deskripsi Spiritual'),
(53, 29, '', 0, 27, 0, 4, 'Deskripsi Sosial'),
(54, 29, '', 0, 27, 0, 4, 'Deskripsi Spiritual'),
(55, 30, '', 0, 28, 0, 4, 'Deskripsi Sosial'),
(56, 30, '', 0, 28, 0, 4, 'Deskripsi Spiritual'),
(57, 31, '', 0, 29, 0, 4, 'Deskripsi Sosial'),
(58, 31, '', 0, 29, 0, 4, 'Deskripsi Spiritual'),
(61, 32, '', 0, 31, 3, 4, 'Deskripsi Sosial'),
(62, 32, '', 0, 31, 3, 4, 'Deskripsi Spiritual'),
(73, 3, 'B', 3, 37, 1, 1, 'Deskripsi Sosial'),
(74, 3, '', 0, 37, 1, 1, 'Deskripsi Spiritual'),
(75, 8, '', 0, 38, 2, 3, 'Deskripsi Sosial'),
(76, 8, '', 0, 38, 2, 3, 'Deskripsi Spiritual');

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
  `tanpa_ket` int(3) DEFAULT NULL,
  `id_siswa_pertahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `id_wali_kelas`, `id_siswa`, `id_kelas`, `sakit`, `ijin`, `tanpa_ket`, `id_siswa_pertahun`) VALUES
(1, 0, 1, 3, 0, 0, 0, 1),
(2, 0, 1, 4, 0, 0, 0, 2),
(3, 0, 1, 5, 0, 0, 0, 3),
(4, 0, 1, 6, 0, 0, 0, 4),
(5, 0, 1, 7, 0, 0, 0, 5),
(6, 0, 1, 8, 0, 0, 0, 6),
(7, 0, 1, 9, 0, 0, 0, 7),
(8, 0, 1, 10, 0, 0, 0, 8),
(9, 0, 1, 12, 0, 0, 0, 9),
(10, 0, 1, 13, 0, 0, 0, 10),
(11, 0, 3, 14, 0, 0, 0, 11),
(12, 0, 3, 15, 0, 0, 0, 12),
(13, 0, 3, 16, 0, 0, 0, 13),
(14, 0, 3, 17, 0, 0, 0, 14),
(15, 0, 3, 18, 0, 0, 0, 15),
(16, 0, 3, 19, 0, 0, 0, 16),
(17, 0, 3, 20, 0, 0, 0, 17),
(18, 0, 3, 21, 0, 0, 0, 18),
(19, 0, 3, 22, 0, 0, 0, 19),
(20, 0, 1, 11, 0, 0, 0, 20),
(21, 0, 4, 23, 0, 0, 0, 21),
(22, 0, 4, 24, 0, 0, 0, 22),
(23, 0, 4, 25, 0, 0, 0, 23),
(24, 0, 4, 26, 0, 0, 0, 24),
(25, 0, 4, 27, 0, 0, 0, 25),
(26, 0, 4, 28, 0, 0, 0, 26),
(27, 0, 4, 29, 0, 0, 0, 27),
(28, 0, 4, 30, 0, 0, 0, 28),
(29, 0, 4, 31, 0, 0, 0, 29),
(30, 0, 4, 32, 0, 0, 0, 30),
(31, 3, 32, 4, 0, 0, 0, 31),
(32, 1, 3, 1, 0, 0, 0, 32),
(33, 1, 7, 1, 0, 0, 0, 33),
(34, 2, 9, 3, 0, 0, 0, 34),
(35, 3, 15, 4, 0, 0, 0, 35),
(36, 2, 4, 3, 0, 0, 0, 36),
(37, 1, 3, 1, 0, 0, 0, 37),
(38, 2, 8, 3, 0, 0, 0, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rapor`
--

CREATE TABLE `tb_rapor` (
  `id_rapor` int(11) NOT NULL,
  `id_siswa_pertahun` int(11) DEFAULT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rapor`
--

INSERT INTO `tb_rapor` (`id_rapor`, `id_siswa_pertahun`, `catatan`) VALUES
(1, 1, 'hhdujudfk');

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
(3, 46752836, 'Abdullah Zuhdi Firmansyah', 'laki-laki', 'Yogyakarta', '2004-05-09', 'islam', 'Sanggrahan', '07', '17', 'Tlogadi Mlati', 'Mlati', 6767, 'Lainnya', '081802657295', 'abdul99@gmail.com'),
(4, 41011199, 'Adelia Cristyana Dewanti', 'perempuan', 'Yogyakarta', '2004-05-02', 'kristen', 'Klintren Lor GK 3 / 288', '14', '04', 'Klintren', 'Klintren', 6869, 'Bersama orang tua', '0853456789', 'cristyaa5@yahoo.co.id'),
(5, 40393377, 'Alya Khairunisa', 'perempuan', 'Yogyakarta', '2004-09-30', 'islam', 'Wirobrajan ', '14', '03', '-', 'Wirobrajan', 6565, 'Bersama orang tua', '08546789436', 'aylader55@gmail.com'),
(6, 42130836, 'Aldi Maulana Ifan', 'laki-laki', 'Magelang', '2004-05-03', 'islam', 'Jombor Lor', '05', '20', 'Jombor Lor', 'Sinduadi', 6364, 'Bersama orang tua', '08196734567', 'satyaui89@gmail.com'),
(7, 460044182, 'Adetio Gilang Pamungkas', 'laki-laki', 'Sleman', '2004-07-03', 'kristen', '-', '14', '09', 'Mayangan', 'Trihanggo', 6354, 'Bersama orang tua', '082345678902', 'bahar@gmail.com'),
(8, 35718096, 'Adisti Hana Rania', 'perempuan', 'Yogyakarta', '2004-08-17', 'islam', 'Sagan CT V/029', '03', '02', '-', 'CaturTunggal', 6262, 'Bersama orang tua', '0293596777', '-'),
(9, 42152984, 'Afif Dwi Saputra', 'laki-laki', 'Yogyakarta', '2004-04-05', 'islam', 'Sagan CT V/029', '03', '02', '-', 'CaturTunggal', 6261, 'Bersama orang tua', '0293596777', '-'),
(10, 41154255, 'Alden Hersusanto', 'laki-laki', 'Yogyakarta', '2004-04-11', 'islam', 'Sosrodipura GT I/478', '26', '06', 'SOSRODIPURAN ', 'SOSROMENDURAN', 6432, 'Bersama orang tua', '081236789500', '-'),
(11, 45122487, 'Alifa Febby Rachmanita', 'perempuan', 'Gunungkidul', '2004-02-20', 'islam', 'Aspol PathukNG I/606', '31', '06', 'Ngampilan', 'Ngampilan', 6363, 'Bersama orang tua', '085823459086', '-'),
(12, 28671593, 'Anastasia Sandi Asmara', 'perempuan', 'Yogyakarta', '2004-11-01', 'islam', 'Jogonegaraan GT I/888', '33', '08', 'Bumijo', 'Bumijo', 6222, 'Bersama orang tua', '-', '-'),
(13, 31178293, 'Andrias Wahyu Saputra', 'laki-laki', 'Yogyakarta', '2003-08-23', 'katolik', 'Terban GK V/569 Terban Yogyaka', '20', '04', 'Terban', 'Terban', 6, 'Bersama orang tua', '-', '-'),
(14, 33711659, 'Aryanti Putri Utami', 'perempuan', 'Magelang', '2003-01-22', 'islam', 'Bolong', '09', '03', 'Bolong', 'Tegalsari', 6459, 'Bersama orang tua', '085678954345', '-'),
(15, 40455876, 'Athallah Ferrel Maheswara', 'laki-laki', 'Surabaya', '2004-03-18', 'islam', 'Badran JT I/837', '44', '10', 'Bumijo', 'Bumijo', 6451, 'Bersama orang tua', '-', '-'),
(16, 35111371, 'Anis Novi Safitri', 'perempuan', 'Yogyakarta', '2003-11-16', 'islam', 'Bumijo Kulon', '37', '08', 'Bumijo', 'Bumijo', 5679, 'Bersama orang tua', '-', '-'),
(17, 4039352, 'Annnisa Dwi Maharani Putri', 'perempuan', 'Sleman', '2004-05-24', 'islam', 'Bedog Trihanggo Gamping', '-', '-', 'Prenggan', 'Kotagede', 5978, 'Bersama orang tua', '-', '-'),
(18, 40334100, 'Antonio Bentar Suarez', 'laki-laki', 'Cilacap', '2004-05-22', 'kristen', '-', '-', '-', '-', '-', 6271, '-', '-', '-'),
(19, 38111802, 'Arayan Fathir Ramadhan', 'laki-laki', 'Yogyakarta', '2003-11-22', 'islam', '-', '-', '-', '-', '-', 6289, '-', '-', '-'),
(20, 41154264, 'Arneta Salma Inanda', 'perempuan', 'Bandung', '2004-06-11', 'islam', '-', '-', '-', '-', '-', 6542, '-', '-', '-'),
(21, 42493836, 'Aswim Hakam Maulana', '', 'Klaten', '2004-06-29', 'islam', '-', '-', '-', '-', '-', 6780, '-', '-', '-'),
(22, 43156111, 'Atalie Safa Danella Laksanita K', 'perempuan', 'Yogyakarta', '2004-04-18', 'islam', '-', '-', '-', '-', '-', 5356, '-', '-', '-'),
(23, 43539754, 'Bella Putriana', 'perempuan', 'Yogyakarta', '2004-08-10', 'islam', '-', '-', '-', '-', '-', 6555, '-', '-', '-'),
(24, 40376465, 'Bintang Kresna Adelard', 'laki-laki', 'Yogyakarta', '2004-01-02', 'islam', '-', '-', '-', '-', '-', 6756, '-', '-', '-'),
(25, 40497211, 'Budi Setyawan', 'laki-laki', 'Gunungkidul', '2004-02-21', 'islam', '-', '-', '-', '-', '-', 6790, '-', '-', '-'),
(26, 39489506, 'Chesna Ganendra Putra Prabowo', 'laki-laki', 'Yogyakarta', '2003-06-09', 'islam', '-', '-', '-', '-', '-', 6689, '-', '-', '-'),
(27, 44454594, 'Cinta Chantika Lestari', 'perempuan', 'Sleman', '2004-07-13', 'katolik', '-', '-', '-', '-', '-', 6904, '-', '-', '-'),
(28, 2147483647, 'Claudia Endang Januwar', 'perempuan', 'Magelang', '2004-01-21', 'islam', '-', '-', '-', '-', '-', 6254, '-', '-', '-'),
(29, 40992050, 'Daffa Zimraan Hassan', 'laki-laki', 'Selong', '2004-12-02', 'islam', '-', '-', '-', '--', '-', 6783, '-', '-', '-'),
(30, 35131279, 'David Sabrani', 'laki-laki', 'Bantul', '2003-03-25', 'islam', '-', '-', '-', '-', '-', 6543, '-', '-', '-'),
(31, 35174889, 'Decky Setiawan', 'laki-laki', 'Yogyakarta', '2003-10-12', 'islam', '-', '-', '-', '-', '-', 6890, '-', '--', '-'),
(32, 35898087, 'Desya Aulia Chaerunisa', 'perempuan', 'Jakarta', '2003-03-12', 'islam', '-', '-', '-', '--', '-', 6457, '-', '-', '-');

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
(37, 3, 1, 1),
(38, 8, 3, 1);

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
(1, 7, 1, 1),
(2, 6, 3, 1),
(3, 12, 4, 1);

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
  ADD KEY `id_siswa` (`id_siswa_pertahun`);

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
  MODIFY `id_deskripsi_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_deskripsi_sikap`
--
ALTER TABLE `tb_deskripsi_sikap`
  MODIFY `id_deskripsi_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_detail_ketrampilan`
--
ALTER TABLE `tb_detail_ketrampilan`
  MODIFY `id_detail_ketrampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `tb_detail_pengetahuan`
--
ALTER TABLE `tb_detail_pengetahuan`
  MODIFY `id_detail_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_guru_ampu`
--
ALTER TABLE `tb_guru_ampu`
  MODIFY `id_guru_ampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tb_nilai_ekskul`
--
ALTER TABLE `tb_nilai_ekskul`
  MODIFY `id_nilai_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tb_rapor`
--
ALTER TABLE `tb_rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_siswa_pertahun`
--
ALTER TABLE `tb_siswa_pertahun`
  MODIFY `id_siswa_pertahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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
