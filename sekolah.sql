-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2018 pada 21.25
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
(1, 1, 'Pengetahuan', 'A', 'Sangat memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(2, 8, 'Pengetahuan', 'A', 'Sangat memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(3, 13, 'Pengetahuan', 'A', 'Sangat memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(4, 1, 'Pengetahuan', 'B', 'Memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(5, 8, 'Pengetahuan', 'B', 'Memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(6, 13, 'Pengetahuan', 'B', 'Memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(7, 1, 'Pengetahuan', 'C', 'Cukup memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(8, 8, 'Pengetahuan', 'C', 'Cukup memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(9, 13, 'Pengetahuan', 'C', 'Cukup memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(10, 1, 'Pengetahuan', 'D', 'Kurang memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(11, 8, 'Pengetahuan', 'D', 'Kurang memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(12, 13, 'Pengetahuan', 'D', 'Kurang memahami teks lisan tulis, fungsional iklan, surat pribadi dan monolog pendek sederhana berbentuk naratif dan report dalam konteks kehidupan sehari hari.'),
(13, 3, 'Pengetahuan', 'A', 'Sangat memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(14, 12, 'Pengetahuan', 'A', 'Sangat memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(15, 15, 'Pengetahuan', 'A', 'Sangat memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(16, 3, 'Pengetahuan', 'B', 'Memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(17, 12, 'Pengetahuan', 'B', 'Memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(18, 15, 'Pengetahuan', 'B', 'Memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(19, 3, 'Pengetahuan', 'C', 'Cukup memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(20, 12, 'Pengetahuan', 'C', 'Cukup memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(21, 15, 'Pengetahuan', 'C', 'Cukup memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(22, 3, 'Pengetahuan', 'D', 'Kurang memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(23, 12, 'Pengetahuan', 'D', 'Kurang memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(24, 15, 'Pengetahuan', 'D', 'Kurang memahami dengan kurang baik sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(25, 6, 'Pengetahuan', 'A', 'Mempunyai  pengetahuan yang sangat baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(26, 10, 'Pengetahuan', 'A', 'Mempunyai  pengetahuan yang sangat baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(27, 16, 'Pengetahuan', 'A', 'Mempunyai  pengetahuan yang sangat baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(28, 6, 'Pengetahuan', 'B', 'Mempunyai  pengetahuan yang baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(29, 10, 'Pengetahuan', 'B', 'Mempunyai  pengetahuan yang baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(30, 10, 'Pengetahuan', 'B', 'Mempunyai  pengetahuan yang baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(31, 16, 'Pengetahuan', 'B', 'Mempunyai  pengetahuan yang baik tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(32, 6, 'Pengetahuan', 'C', 'Mempunyai  pengetahuan yang cukup tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(33, 10, 'Pengetahuan', 'C', 'Mempunyai  pengetahuan yang cukup tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(34, 16, 'Pengetahuan', 'C', 'Mempunyai  pengetahuan yang cukup tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(35, 6, 'Pengetahuan', 'D', 'Mempunyai  pengetahuan yang Kurang tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(36, 10, 'Pengetahuan', 'D', 'Mempunyai  pengetahuan yang Kurang tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(37, 16, 'Pengetahuan', 'D', 'Mempunyai  pengetahuan yang Kurang tentang perangkat lunak untuk mengakses internet, mengidentifikasi layanan informasi yang ada di intrnet.'),
(38, 7, 'Pengetahuan', 'A', 'Mempunyai pengetahuan sangat baik tentang sesorah, pranatacara dan menulis berita.'),
(39, 9, 'Pengetahuan', 'A', 'Mempunyai pengetahuan sangat baik tentang sesorah, pranatacara dan menulis berita.'),
(40, 17, 'Pengetahuan', 'A', 'Mempunyai pengetahuan sangat baik tentang sesorah, pranatacara dan menulis berita.'),
(41, 7, 'Pengetahuan', 'B', 'Mempunyai pengetahuan  baik tentang sesorah, pranatacara dan menulis berita.'),
(42, 9, 'Pengetahuan', 'B', 'Mempunyai pengetahuan  baik tentang sesorah, pranatacara dan menulis berita.'),
(43, 17, 'Pengetahuan', 'B', 'Mempunyai pengetahuan  baik tentang sesorah, pranatacara dan menulis berita.'),
(44, 7, 'Pengetahuan', 'C', 'Mempunyai pengetahuan  cukup tentang sesorah, pranatacara dan menulis berita.'),
(45, 9, 'Pengetahuan', 'C', 'Mempunyai pengetahuan  cukup tentang sesorah, pranatacara dan menulis berita.'),
(46, 17, 'Pengetahuan', 'C', 'Mempunyai pengetahuan  cukup tentang sesorah, pranatacara dan menulis berita.'),
(47, 7, 'Pengetahuan', 'D', 'Mempunyai pengetahuan kurang tentang sesorah, pranatacara dan menulis berita.'),
(48, 9, 'Pengetahuan', 'D', 'Mempunyai pengetahuan kurang tentang sesorah, pranatacara dan menulis berita.'),
(49, 17, 'Pengetahuan', 'D', 'Mempunyai pengetahuan kurang tentang sesorah, pranatacara dan menulis berita.'),
(50, 5, 'Pengetahuan', 'A', 'Mempunyai kemampuan sangat   baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(51, 11, 'Pengetahuan', 'A', 'Mempunyai kemampuan sangat   baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(52, 14, 'Pengetahuan', 'A', 'Mempunyai kemampuan sangat   baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(53, 5, 'Pengetahuan', 'B', 'Mempunyai kemampuan  baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(54, 11, 'Pengetahuan', 'B', 'Mempunyai kemampuan  baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(55, 14, 'Pengetahuan', 'B', 'Mempunyai kemampuan  baik dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(56, 5, 'Pengetahuan', 'C', 'Mempunyai kemampuan cukup dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(57, 11, 'Pengetahuan', 'C', 'Mempunyai kemampuan cukup dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(58, 14, 'Pengetahuan', 'C', 'Mempunyai kemampuan cukup dalam  menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(59, 5, 'Pengetahuan', 'D', 'Mempunyai kemampuan kurang dalam menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(60, 11, 'Pengetahuan', 'D', 'Mempunyai kemampuan kurang dalam menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(62, 14, 'Pengetahuan', 'D', 'Mempunyai kemampuan kurang dalam menyimpulkan dan menemukan isi pidato, gagasan utama, sifat tokoh, dalam novel, dan menulis surat pembaca, karya tulis, membaca tabel dan grafik.'),
(63, 1, 'Ketrampilan', 'A', 'Sangat terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(64, 8, 'Ketrampilan', 'A', 'Sangat terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(65, 14, 'Ketrampilan', 'A', 'Sangat terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(66, 1, 'Ketrampilan', 'B', 'Terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(67, 8, 'Ketrampilan', 'B', 'Terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(68, 13, 'Ketrampilan', 'B', 'Terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(69, 1, 'Ketrampilan', 'C', 'Cukup terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(70, 8, 'Ketrampilan', 'C', 'Cukup terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(71, 13, 'Ketrampilan', 'C', 'Cukup terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(72, 1, 'Ketrampilan', 'D', 'Kurang terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(73, 8, 'Ketrampilan', 'D', 'Kurang terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(74, 13, 'Ketrampilan', 'D', 'Kurang terampil dalam menulis kalimat pendek dan sederhana terkait dengan iklan, surat pribadi serta menyusun kalimat acak menjadi teks naratif dan report.'),
(75, 6, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(76, 10, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(77, 16, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(78, 6, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(79, 10, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(80, 16, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(81, 6, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(82, 10, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(83, 16, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(84, 16, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(85, 6, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(86, 10, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(87, 16, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam mendemonstrasikan akses internet, menggunakan search engine, dan penggunaan e-mail.'),
(88, 3, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(89, 12, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(90, 15, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(91, 3, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(92, 12, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(93, 15, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang baik dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(94, 3, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(95, 12, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(96, 15, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang cukup dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(97, 3, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(98, 12, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(99, 15, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam menyelesaikan soal yang berhubungan dengan  sifat bilangan berpangkat, bentuk akar, pola dan barisan bilangan aritmatika dan geometri.'),
(100, 5, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(101, 11, 'Pengetahuan', 'A', 'Mempunyai keterampilan sangat baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(102, 14, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(103, 5, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(104, 11, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(105, 14, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(106, 5, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(107, 11, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(108, 14, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(109, 5, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang  kurang dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(110, 11, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang  kurang dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(111, 14, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang  kurang dalam menulis naskah pidato, drama, praktik berpidato dan memberi komentar dalam diskusi.'),
(112, 7, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(113, 9, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(114, 17, 'Ketrampilan', 'A', 'Mempunyai keterampilan sangat baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(115, 7, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(116, 9, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(117, 17, 'Ketrampilan', 'B', 'Mempunyai keterampilan yang  baik dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(118, 7, 'Ketrampilan', 'A', 'Mempunyai keterampilan yang  cukup dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(119, 9, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(120, 17, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(121, 17, 'Ketrampilan', 'C', 'Mempunyai keterampilan yang  cukup dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(122, 7, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(123, 9, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.'),
(124, 17, 'Ketrampilan', 'D', 'Mempunyai keterampilan yang kurang dalam:  pidato dan menulis karangan tentang etika berlalu lintas, dalam Bahasa Jawa.');

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
(1, 'Deskripsi Sosial', 'B', ' memiliki sikap sosial yang baik dalam hal kejujuran, kedisiplinan, tanggung jawab, kepedulian, toleransi, gotong royong, kesantunan, percaya diri, terus ditingkatkan.'),
(2, 'Deskripsi Sosial', 'A', ' memiliki sikap sosial yang sangat baik dalam hal kejujuran, kedisiplinan, tanggung jawab, kepedulian, toleransi, gotong royong, kesantunan, percaya diri, terus ditingkatkan.'),
(3, 'Deskripsi Spiritual', 'A', 'memiliki sikap spiritual yang sangat baik dalam hal taat beribadah, berdoa, bersyukur, tawakal, memberi salam, toleransi, ukhuwah, pengendalian diri, terus ditingkatkan.'),
(4, 'Deskripsi Spiritual', 'B', 'memiliki sikap spiritual yang baik dalam hal taat beribadah, berdoa, bersyukur, tawakal, memberi salam, toleransi, ukhuwah, pengendalian diri, terus ditingkatkan.');

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
(1, 1, 5, 0, 0, 0, 0, 0, 1, 1, 1),
(2, 3, 5, 0, 0, 0, 0, 0, 1, 1, 1),
(3, 5, 5, 90, 90, 90, 90, 1, 1, 1, 1),
(4, 6, 5, 0, 0, 0, 0, 0, 1, 1, 1),
(5, 7, 5, 0, 0, 0, 0, 0, 1, 1, 1),
(6, 1, 7, 0, 0, 0, 0, 0, 2, 1, 1),
(7, 3, 7, 0, 0, 0, 0, 0, 2, 1, 1),
(8, 5, 7, 80, 80, 90, 83, 4, 2, 1, 1),
(9, 6, 7, 0, 0, 0, 0, 0, 2, 1, 1),
(10, 7, 7, 0, 0, 0, 0, 0, 2, 1, 1),
(11, 1, 8, 89, 90, 89, 89, 1, 3, 1, 1),
(12, 3, 8, 0, 0, 0, 0, 0, 3, 1, 1),
(13, 5, 8, 80, 90, 90, 87, 1, 3, 1, 1),
(14, 6, 8, 0, 0, 0, 0, 0, 3, 1, 1),
(15, 7, 8, 0, 0, 0, 0, 0, 3, 1, 1),
(16, 1, 9, 0, 0, 0, 0, 0, 4, 1, 1),
(17, 3, 9, 0, 0, 0, 0, 0, 4, 1, 1),
(18, 5, 9, 80, 90, 0, 57, 10, 4, 1, 1),
(19, 6, 9, 0, 0, 0, 0, 0, 4, 1, 1),
(20, 7, 9, 0, 0, 0, 0, 0, 4, 1, 1),
(21, 1, 10, 0, 0, 0, 0, 0, 5, 1, 1),
(22, 3, 10, 0, 0, 0, 0, 0, 5, 1, 1),
(23, 5, 10, 90, 80, 0, 57, 10, 5, 1, 1),
(24, 6, 10, 0, 0, 0, 0, 0, 5, 1, 1),
(25, 7, 10, 0, 0, 0, 0, 0, 5, 1, 1),
(26, 1, 11, 0, 0, 0, 0, 0, 6, 1, 1),
(27, 3, 11, 0, 0, 0, 0, 0, 6, 1, 1),
(28, 5, 11, 90, 0, 0, 30, 10, 6, 1, 1),
(29, 6, 11, 0, 0, 0, 0, 0, 6, 1, 1),
(30, 7, 11, 0, 0, 0, 0, 0, 6, 1, 1),
(31, 1, 12, 0, 0, 0, 0, 0, 7, 1, 1),
(32, 3, 12, 0, 0, 0, 0, 0, 7, 1, 1),
(33, 5, 12, 0, 0, 0, 0, 0, 7, 1, 1),
(34, 6, 12, 0, 0, 0, 0, 0, 7, 1, 1),
(35, 7, 12, 0, 0, 0, 0, 0, 7, 1, 1),
(36, 1, 13, 0, 0, 0, 0, 0, 8, 1, 1),
(37, 3, 13, 0, 0, 0, 0, 0, 8, 1, 1),
(38, 5, 13, 0, 0, 0, 0, 0, 8, 1, 1),
(39, 6, 13, 0, 0, 0, 0, 0, 8, 1, 1),
(40, 7, 13, 0, 0, 0, 0, 0, 8, 1, 1),
(41, 1, 14, 0, 0, 0, 0, 0, 9, 1, 1),
(42, 3, 14, 0, 0, 0, 0, 0, 9, 1, 1),
(43, 5, 14, 0, 0, 0, 0, 0, 9, 1, 1),
(44, 6, 14, 0, 0, 0, 0, 0, 9, 1, 1),
(45, 7, 14, 0, 0, 0, 0, 0, 9, 1, 1),
(46, 1, 15, 0, 0, 0, 0, 0, 10, 1, 1),
(47, 3, 15, 0, 0, 0, 0, 0, 10, 1, 1),
(48, 5, 15, 0, 0, 0, 0, 0, 10, 1, 1),
(49, 6, 15, 0, 0, 0, 0, 0, 10, 1, 1),
(50, 7, 15, 0, 0, 0, 0, 0, 10, 1, 1),
(51, 8, 16, 0, 0, 0, 0, 0, 11, 2, 2),
(52, 9, 16, 0, 0, 0, 0, 0, 11, 2, 2),
(53, 10, 16, 0, 0, 0, 0, 0, 11, 2, 2),
(54, 11, 16, 0, 0, 0, 0, 0, 11, 2, 2),
(55, 12, 16, 0, 0, 0, 0, 0, 11, 2, 2),
(56, 8, 17, 0, 0, 0, 0, 0, 12, 2, 2),
(57, 9, 17, 0, 0, 0, 0, 0, 12, 2, 2),
(58, 10, 17, 0, 0, 0, 0, 0, 12, 2, 2),
(59, 11, 17, 0, 0, 0, 0, 0, 12, 2, 2),
(60, 12, 17, 0, 0, 0, 0, 0, 12, 2, 2),
(61, 8, 18, 0, 0, 0, 0, 0, 13, 2, 2),
(62, 9, 18, 0, 0, 0, 0, 0, 13, 2, 2),
(63, 10, 18, 0, 0, 0, 0, 0, 13, 2, 2),
(64, 11, 18, 0, 0, 0, 0, 0, 13, 2, 2),
(65, 12, 18, 0, 0, 0, 0, 0, 13, 2, 2),
(66, 8, 19, 0, 0, 0, 0, 0, 14, 2, 2),
(67, 9, 19, 0, 0, 0, 0, 0, 14, 2, 2),
(68, 10, 19, 0, 0, 0, 0, 0, 14, 2, 2),
(69, 11, 19, 0, 0, 0, 0, 0, 14, 2, 2),
(70, 12, 19, 0, 0, 0, 0, 0, 14, 2, 2),
(71, 8, 20, 0, 0, 0, 0, 0, 15, 2, 2),
(72, 9, 20, 0, 0, 0, 0, 0, 15, 2, 2),
(73, 10, 20, 0, 0, 0, 0, 0, 15, 2, 2),
(74, 11, 20, 0, 0, 0, 0, 0, 15, 2, 2),
(75, 12, 20, 0, 0, 0, 0, 0, 15, 2, 2),
(76, 8, 21, 0, 0, 0, 0, 0, 16, 2, 2),
(77, 9, 21, 0, 0, 0, 0, 0, 16, 2, 2),
(78, 10, 21, 0, 0, 0, 0, 0, 16, 2, 2),
(79, 11, 21, 0, 0, 0, 0, 0, 16, 2, 2),
(80, 12, 21, 0, 0, 0, 0, 0, 16, 2, 2),
(81, 8, 22, 0, 0, 0, 0, 0, 17, 2, 2),
(82, 9, 22, 0, 0, 0, 0, 0, 17, 2, 2),
(83, 10, 22, 0, 0, 0, 0, 0, 17, 2, 2),
(84, 11, 22, 0, 0, 0, 0, 0, 17, 2, 2),
(85, 12, 22, 0, 0, 0, 0, 0, 17, 2, 2),
(86, 8, 23, 0, 0, 0, 0, 0, 18, 2, 2),
(87, 9, 23, 0, 0, 0, 0, 0, 18, 2, 2),
(88, 10, 23, 0, 0, 0, 0, 0, 18, 2, 2),
(89, 11, 23, 0, 0, 0, 0, 0, 18, 2, 2),
(90, 12, 23, 0, 0, 0, 0, 0, 18, 2, 2),
(91, 8, 24, 0, 0, 0, 0, 0, 19, 2, 2),
(92, 9, 24, 0, 0, 0, 0, 0, 19, 2, 2),
(93, 10, 24, 0, 0, 0, 0, 0, 19, 2, 2),
(94, 11, 24, 0, 0, 0, 0, 0, 19, 2, 2),
(95, 12, 24, 0, 0, 0, 0, 0, 19, 2, 2),
(96, 8, 25, 0, 0, 0, 0, 0, 20, 2, 2),
(97, 9, 25, 0, 0, 0, 0, 0, 20, 2, 2),
(98, 10, 25, 0, 0, 0, 0, 0, 20, 2, 2),
(99, 11, 25, 0, 0, 0, 0, 0, 20, 2, 2),
(100, 12, 25, 0, 0, 0, 0, 0, 20, 2, 2),
(101, 13, 26, 0, 0, 0, 0, 0, 21, 3, 3),
(102, 14, 26, 0, 0, 0, 0, 0, 21, 3, 3),
(103, 15, 26, 0, 0, 0, 0, 0, 21, 3, 3),
(104, 16, 26, 0, 0, 0, 0, 0, 21, 3, 3),
(105, 17, 26, 77, 90, 88, 85, 4, 21, 3, 3),
(106, 13, 27, 0, 0, 0, 0, 0, 22, 3, 3),
(107, 14, 27, 0, 0, 0, 0, 0, 22, 3, 3),
(108, 15, 27, 0, 0, 0, 0, 0, 22, 3, 3),
(109, 16, 27, 0, 0, 0, 0, 0, 22, 3, 3),
(110, 17, 27, 0, 0, 0, 0, 0, 22, 3, 3),
(111, 13, 28, 0, 0, 0, 0, 0, 23, 3, 3),
(112, 14, 28, 0, 0, 0, 0, 0, 23, 3, 3),
(113, 15, 28, 0, 0, 0, 0, 0, 23, 3, 3),
(114, 16, 28, 0, 0, 0, 0, 0, 23, 3, 3),
(115, 17, 28, 0, 0, 0, 0, 0, 23, 3, 3),
(116, 13, 29, 0, 0, 0, 0, 0, 24, 3, 3),
(117, 14, 29, 0, 0, 0, 0, 0, 24, 3, 3),
(118, 15, 29, 0, 0, 0, 0, 0, 24, 3, 3),
(119, 16, 29, 0, 0, 0, 0, 0, 24, 3, 3),
(120, 17, 29, 0, 0, 0, 0, 0, 24, 3, 3),
(121, 13, 30, 0, 0, 0, 0, 0, 25, 3, 3),
(122, 14, 30, 0, 0, 0, 0, 0, 25, 3, 3),
(123, 15, 30, 0, 0, 0, 0, 0, 25, 3, 3),
(124, 16, 30, 0, 0, 0, 0, 0, 25, 3, 3),
(125, 17, 30, 0, 0, 0, 0, 0, 25, 3, 3),
(126, 13, 31, 0, 0, 0, 0, 0, 26, 3, 3),
(127, 14, 31, 0, 0, 0, 0, 0, 26, 3, 3),
(128, 15, 31, 0, 0, 0, 0, 0, 26, 3, 3),
(129, 16, 31, 0, 0, 0, 0, 0, 26, 3, 3),
(130, 17, 31, 0, 0, 0, 0, 0, 26, 3, 3),
(131, 13, 32, 0, 0, 0, 0, 0, 27, 3, 3),
(132, 14, 32, 0, 0, 0, 0, 0, 27, 3, 3),
(133, 15, 32, 0, 0, 0, 0, 0, 27, 3, 3),
(134, 16, 32, 0, 0, 0, 0, 0, 27, 3, 3),
(135, 17, 32, 0, 0, 0, 0, 0, 27, 3, 3),
(136, 13, 33, 0, 0, 0, 0, 0, 28, 3, 3),
(137, 14, 33, 0, 0, 0, 0, 0, 28, 3, 3),
(138, 15, 33, 0, 0, 0, 0, 0, 28, 3, 3),
(139, 16, 33, 0, 0, 0, 0, 0, 28, 3, 3),
(140, 17, 33, 0, 0, 0, 0, 0, 28, 3, 3),
(141, 13, 34, 0, 0, 0, 0, 0, 29, 3, 3),
(142, 14, 34, 0, 0, 0, 0, 0, 29, 3, 3),
(143, 15, 34, 0, 0, 0, 0, 0, 29, 3, 3),
(144, 16, 34, 0, 0, 0, 0, 0, 29, 3, 3),
(145, 17, 34, 0, 0, 0, 0, 0, 29, 3, 3);

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
(1, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
(2, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
(3, 5, 5, 1, 70, 80, 100, 100, 70, 100, 86, 1, 1, 1),
(4, 6, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
(5, 7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
(6, 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2),
(7, 3, 7, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2),
(8, 5, 7, 1, 100, 100, 90, 90, 90, 100, 95, 1, 1, 2),
(9, 6, 7, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2),
(10, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2),
(11, 1, 8, 4, 67, 90, 78, 55, 89, 90, 84, 1, 1, 3),
(12, 3, 8, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3),
(13, 5, 8, 1, 78, 90, 78, 66, 90, 90, 86, 1, 1, 3),
(14, 6, 8, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3),
(15, 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3),
(16, 1, 9, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 4),
(17, 3, 9, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 4),
(18, 5, 9, 1, 90, 90, 80, 80, 90, 90, 88, 1, 1, 4),
(19, 6, 9, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 4),
(20, 7, 9, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 4),
(21, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5),
(22, 3, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5),
(23, 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5),
(24, 6, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5),
(25, 7, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5),
(26, 1, 11, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 6),
(27, 3, 11, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 6),
(28, 5, 11, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 6),
(29, 6, 11, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 6),
(30, 7, 11, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 6),
(31, 1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 7),
(32, 3, 12, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 7),
(33, 5, 12, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 7),
(34, 6, 12, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 7),
(35, 7, 12, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 7),
(36, 1, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 8),
(37, 3, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 8),
(38, 5, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 8),
(39, 6, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 8),
(40, 7, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 8),
(41, 1, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 9),
(42, 3, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 9),
(43, 5, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 9),
(44, 6, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 9),
(45, 7, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 9),
(46, 1, 15, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10),
(47, 3, 15, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10),
(48, 5, 15, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10),
(49, 6, 15, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10),
(50, 7, 15, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10),
(51, 8, 16, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 11),
(52, 9, 16, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 11),
(53, 10, 16, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 11),
(54, 11, 16, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 11),
(55, 12, 16, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 11),
(56, 8, 17, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 12),
(57, 9, 17, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 12),
(58, 10, 17, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 12),
(59, 11, 17, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 12),
(60, 12, 17, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 12),
(61, 8, 18, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 13),
(62, 9, 18, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 13),
(63, 10, 18, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 13),
(64, 11, 18, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 13),
(65, 12, 18, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 13),
(66, 8, 19, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 14),
(67, 9, 19, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 14),
(68, 10, 19, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 14),
(69, 11, 19, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 14),
(70, 12, 19, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 14),
(71, 8, 20, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15),
(72, 9, 20, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15),
(73, 10, 20, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15),
(74, 11, 20, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15),
(75, 12, 20, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15),
(76, 8, 21, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 16),
(77, 9, 21, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 16),
(78, 10, 21, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 16),
(79, 11, 21, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 16),
(80, 12, 21, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 16),
(81, 8, 22, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 17),
(82, 9, 22, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 17),
(83, 10, 22, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 17),
(84, 11, 22, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 17),
(85, 12, 22, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 17),
(86, 8, 23, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 18),
(87, 9, 23, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 18),
(88, 10, 23, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 18),
(89, 11, 23, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 18),
(90, 12, 23, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 18),
(91, 8, 24, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 19),
(92, 9, 24, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 19),
(93, 10, 24, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 19),
(94, 11, 24, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 19),
(95, 12, 24, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 19),
(96, 8, 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 20),
(97, 9, 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 20),
(98, 10, 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 20),
(99, 11, 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 20),
(100, 12, 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 20),
(101, 13, 26, 7, 80, 0, 0, 0, 100, 100, 73, 3, 3, 21),
(102, 14, 26, 0, 0, 0, 0, 0, 0, 100, 0, 3, 3, 21),
(103, 15, 26, 0, 0, 0, 0, 0, 0, 100, 0, 3, 3, 21),
(104, 16, 26, 0, 0, 0, 0, 0, 0, 100, 0, 3, 3, 21),
(105, 17, 26, 4, 89, 90, 77, 56, 89, 100, 78, 3, 3, 21),
(106, 13, 27, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 22),
(107, 14, 27, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 22),
(108, 15, 27, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 22),
(109, 16, 27, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 22),
(110, 17, 27, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 22),
(111, 13, 28, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 23),
(112, 14, 28, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 23),
(113, 15, 28, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 23),
(114, 16, 28, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 23),
(115, 17, 28, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 23),
(116, 13, 29, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24),
(117, 14, 29, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24),
(118, 15, 29, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24),
(119, 16, 29, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24),
(120, 17, 29, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24),
(121, 13, 30, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 25),
(122, 14, 30, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 25),
(123, 15, 30, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 25),
(124, 16, 30, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 25),
(125, 17, 30, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 25),
(126, 13, 31, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 26),
(127, 14, 31, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 26),
(128, 15, 31, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 26),
(129, 16, 31, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 26),
(130, 17, 31, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 26),
(131, 13, 32, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 27),
(132, 14, 32, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 27),
(133, 15, 32, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 27),
(134, 16, 32, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 27),
(135, 17, 32, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 27),
(136, 13, 33, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 28),
(137, 14, 33, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 28),
(138, 15, 33, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 28),
(139, 16, 33, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 28),
(140, 17, 33, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 28),
(141, 13, 34, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 29),
(142, 14, 34, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 29),
(143, 15, 34, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 29),
(144, 16, 34, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 29),
(145, 17, 34, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 29);

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
(1, 6, 'Sepak Bola'),
(2, 9, 'basket');

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
(1, '195107301982031003', ' MULYONO, BA.', 'laki-laki', '2018-05-01', 'III A', 'Guru Pembina', '-'),
(2, '195112241984032001', ' Hj. SUBIASTUTI, BA.', 'perempuan', '2018-05-01', 'III A', 'Guru Pembina', '-'),
(3, '195404231981031004', 'Drs.DJUNDAM SUWARSO', 'laki-laki', '2018-04-30', 'IV A', 'Guru Pembina', '-'),
(4, '195407181979112001', ' SUMARNI, S.Pd.', 'laki-laki', '2018-05-01', 'IV A', 'Guru Pembina', '-'),
(5, '195411031980032002', ' Hj. SITI NGAISAH, S.Pd.', 'perempuan', '2018-05-01', 'IV A', 'Guru Pembina', '-'),
(6, '195508011977031005', ' SUPARMAN, A.Md.', 'laki-laki', '2018-05-01', 'III. D', 'Guru Muda', '-'),
(7, '195704131979031005', ' SUHARJO, S.Pd.', 'laki-laki', '2018-05-02', 'IV A', 'Guru Dewasa Tk.I', '-'),
(8, '195705191981032003', ' Dra.Hj. IIN SRI HARYATI', 'laki-laki', '2018-05-01', 'IV A', 'Guru Pembina', '-'),
(9, '195708181979031006', ' A.D. GUSTYARTO, S.Pd.', 'laki-laki', '2018-05-01', 'IV A', 'Guru Pembina', '-'),
(10, '195710181979032003', ' MARLIA NURROCHMA, S.Pd.', 'perempuan', '2018-05-01', 'IV A', 'Guru Dewasa Tk.I', '-');

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
(1, 1, 1, 1, 'ganjil', 1),
(2, 2, 3, 1, 'ganjil', 1),
(3, 3, 5, 1, 'ganjil', 1),
(4, 4, 6, 1, 'ganjil', 1),
(5, 5, 7, 1, 'ganjil', 1),
(6, 1, 8, 2, 'ganjil', 1),
(8, 2, 12, 2, 'ganjil', 1),
(9, 3, 11, 2, 'ganjil', 1),
(11, 9, 10, 2, 'ganjil', 1),
(12, 5, 9, 2, 'ganjil', 1),
(13, 10, 13, 3, 'ganjil', 1),
(14, 2, 15, 3, 'ganjil', 1),
(15, 3, 14, 3, 'ganjil', 1),
(16, 9, 16, 3, 'ganjil', 1),
(17, 5, 17, 3, 'ganjil', 1);

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
('agra', 'agra', 'Agra Laksmi', 'kurikulum', 1),
('wakil', 'wakil', 'ggggggggggggggg', 'wali_kelas', 1);

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
(2, 'B', '7'),
(3, 'C', '7');

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
(1, 1, 1, 'Bahasa Inggris', 'A', 78),
(3, 2, 1, 'Matematika', 'A', 78),
(5, 3, 1, 'Bahasa Indonesia', 'A', 78),
(6, 4, 1, 'Teknologi Informasi dan Komunikasi', 'B', 78),
(7, 5, 1, 'Bahasa Jawa', 'B', 78),
(8, 1, 2, 'Bahasa Inggris', 'A', 78),
(9, 5, 2, 'Bahasa Jawa', 'B', 78),
(10, 9, 2, 'Teknologi Informasi dan Komunikasi', 'B', 78),
(11, 3, 2, 'Bahasa Indonesia', 'A', 78),
(12, 2, 2, 'Matematika', 'A', 78),
(13, 10, 3, 'Bahasa Inggris', 'A', 78),
(14, 3, 3, 'Bahasa Indonesia', 'A', 78),
(15, 2, 3, 'Matematika', 'A', 78),
(16, 9, 3, 'Teknologi Informasi dan Komunikasi', 'B', 78),
(17, 5, 3, 'Bahasa Jawa', 'B', 78);

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

--
-- Dumping data untuk tabel `tb_nilai_ekskul`
--

INSERT INTO `tb_nilai_ekskul` (`id_nilai_ekskul`, `id_ekskul`, `id_siswa`, `nilai`, `predikat`, `ket`, `id_kelas`, `id_siswa_pertahun`) VALUES
(1, 1, 4, 'A', 'C', 'Baik Sekali', 1, 2),
(2, 1, 8, 'A', 'C', 'bagus sekali kali kali', 1, 3),
(3, 2, 8, 'B', 'C', 'baik ajah', 1, 3);

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
(1, 5, 'B', 1, 1, 1, 1, 'Deskripsi Sosial'),
(2, 5, '', 0, 1, 1, 1, 'Deskripsi Spiritual'),
(3, 7, 'A', 2, 2, 1, 1, 'Deskripsi Sosial'),
(4, 7, '', 0, 2, 1, 1, 'Deskripsi Spiritual'),
(5, 8, 'A', 2, 3, 1, 1, 'Deskripsi Sosial'),
(6, 8, '', 0, 3, 1, 1, 'Deskripsi Spiritual'),
(7, 9, 'B', 1, 4, 1, 1, 'Deskripsi Sosial'),
(8, 9, '', 0, 4, 1, 1, 'Deskripsi Spiritual'),
(9, 10, 'A', 2, 5, 1, 1, 'Deskripsi Sosial'),
(10, 10, '', 0, 5, 1, 1, 'Deskripsi Spiritual'),
(11, 11, 'A', 2, 6, 1, 1, 'Deskripsi Sosial'),
(12, 11, '', 0, 6, 1, 1, 'Deskripsi Spiritual'),
(13, 12, 'B', 1, 7, 1, 1, 'Deskripsi Sosial'),
(14, 12, '', 0, 7, 1, 1, 'Deskripsi Spiritual'),
(15, 13, '', 0, 8, 1, 1, 'Deskripsi Sosial'),
(16, 13, '', 0, 8, 1, 1, 'Deskripsi Spiritual'),
(17, 14, '', 0, 9, 1, 1, 'Deskripsi Sosial'),
(18, 14, '', 0, 9, 1, 1, 'Deskripsi Spiritual'),
(19, 15, '', 0, 10, 1, 1, 'Deskripsi Sosial'),
(20, 15, '', 0, 10, 1, 1, 'Deskripsi Spiritual'),
(21, 16, '', 0, 11, 2, 2, 'Deskripsi Sosial'),
(22, 16, '', 0, 11, 2, 2, 'Deskripsi Spiritual'),
(23, 17, '', 0, 12, 2, 2, 'Deskripsi Sosial'),
(24, 17, '', 0, 12, 2, 2, 'Deskripsi Spiritual'),
(25, 18, '', 0, 13, 2, 2, 'Deskripsi Sosial'),
(26, 18, '', 0, 13, 2, 2, 'Deskripsi Spiritual'),
(27, 19, '', 0, 14, 2, 2, 'Deskripsi Sosial'),
(28, 19, '', 0, 14, 2, 2, 'Deskripsi Spiritual'),
(29, 20, '', 0, 15, 2, 2, 'Deskripsi Sosial'),
(30, 20, '', 0, 15, 2, 2, 'Deskripsi Spiritual'),
(31, 21, '', 0, 16, 2, 2, 'Deskripsi Sosial'),
(32, 21, '', 0, 16, 2, 2, 'Deskripsi Spiritual'),
(33, 22, '', 0, 17, 2, 2, 'Deskripsi Sosial'),
(34, 22, '', 0, 17, 2, 2, 'Deskripsi Spiritual'),
(35, 23, '', 0, 18, 2, 2, 'Deskripsi Sosial'),
(36, 23, '', 0, 18, 2, 2, 'Deskripsi Spiritual'),
(37, 24, '', 0, 19, 2, 2, 'Deskripsi Sosial'),
(38, 24, '', 0, 19, 2, 2, 'Deskripsi Spiritual'),
(39, 25, '', 0, 20, 2, 2, 'Deskripsi Sosial'),
(40, 25, '', 0, 20, 2, 2, 'Deskripsi Spiritual'),
(41, 26, 'B', 1, 21, 3, 3, 'Deskripsi Sosial'),
(42, 26, '', 0, 21, 3, 3, 'Deskripsi Spiritual'),
(43, 27, '', 0, 22, 3, 3, 'Deskripsi Sosial'),
(44, 27, '', 0, 22, 3, 3, 'Deskripsi Spiritual'),
(45, 28, '', 0, 23, 3, 3, 'Deskripsi Sosial'),
(46, 28, '', 0, 23, 3, 3, 'Deskripsi Spiritual'),
(47, 29, '', 0, 24, 3, 3, 'Deskripsi Sosial'),
(48, 29, '', 0, 24, 3, 3, 'Deskripsi Spiritual'),
(49, 30, '', 0, 25, 3, 3, 'Deskripsi Sosial'),
(50, 30, '', 0, 25, 3, 3, 'Deskripsi Spiritual'),
(51, 31, '', 0, 26, 3, 3, 'Deskripsi Sosial'),
(52, 31, '', 0, 26, 3, 3, 'Deskripsi Spiritual'),
(53, 32, '', 0, 27, 3, 3, 'Deskripsi Sosial'),
(54, 32, '', 0, 27, 3, 3, 'Deskripsi Spiritual'),
(55, 33, '', 0, 28, 3, 3, 'Deskripsi Sosial'),
(56, 33, '', 0, 28, 3, 3, 'Deskripsi Spiritual'),
(57, 34, '', 0, 29, 3, 3, 'Deskripsi Sosial'),
(58, 34, '', 0, 29, 3, 3, 'Deskripsi Spiritual');

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
(1, 5, 2, 2, 0, 0, 0, 2),
(2, 4, 1, 1, 0, 0, 0, 3),
(3, 6, 3, 3, 0, 0, 0, 4),
(4, 4, 1, 1, 0, 0, 0, 5),
(5, 5, 2, 2, 0, 0, 0, 6),
(6, 4, 1, 1, 0, 0, 0, 7),
(7, 5, 2, 2, 0, 0, 0, 8),
(8, 6, 3, 3, 0, 0, 0, 9),
(9, 4, 4, 1, 0, 0, 0, 10),
(10, 5, 5, 2, 0, 0, 0, 11),
(11, 6, 6, 3, 0, 0, 0, 12),
(12, 4, 4, 1, 0, 0, 0, 13),
(13, 5, 5, 2, 0, 0, 0, 14),
(14, 6, 6, 3, 0, 0, 0, 15),
(15, 4, 4, 1, 0, 0, 0, 19),
(16, 5, 5, 2, 0, 0, 0, 20),
(17, 4, 4, 1, 0, 0, 0, 21),
(18, 5, 5, 2, 0, 0, 0, 22),
(19, 4, 4, 1, 0, 0, 0, 23),
(20, 8, 5, 2, 0, 0, 0, 24),
(21, 9, 6, 3, 0, 0, 0, 25),
(22, 7, 4, 1, 0, 0, 0, 1),
(23, 8, 5, 2, 0, 0, 0, 2),
(24, 9, 7, 3, 0, 0, 0, 3),
(25, 7, 5, 1, 0, 0, 0, 5),
(26, 7, 7, 1, 0, 0, 0, 6),
(27, 7, 8, 1, 0, 0, 0, 7),
(28, 7, 9, 1, 0, 0, 0, 8),
(29, 7, 10, 1, 0, 0, 0, 9),
(30, 7, 11, 1, 0, 0, 0, 10),
(31, 7, 12, 1, 0, 0, 0, 11),
(32, 7, 13, 1, 0, 0, 0, 12),
(33, 7, 14, 1, 0, 0, 0, 13),
(34, 8, 15, 2, 0, 0, 0, 14),
(35, 8, 16, 2, 0, 0, 0, 15),
(36, 8, 17, 2, 0, 0, 0, 16),
(37, 8, 18, 2, 0, 0, 0, 17),
(38, 8, 19, 2, 0, 0, 0, 18),
(39, 8, 20, 2, 0, 0, 0, 19),
(40, 8, 21, 2, 0, 0, 0, 20),
(41, 8, 22, 2, 0, 0, 0, 21),
(42, 8, 23, 2, 0, 0, 0, 22),
(43, 8, 24, 2, 0, 0, 0, 23),
(44, 9, 25, 3, 0, 0, 0, 24),
(45, 9, 26, 3, 0, 0, 0, 25),
(46, 9, 27, 3, 0, 0, 0, 26),
(47, 9, 28, 3, 0, 0, 0, 27),
(48, 9, 29, 3, 0, 0, 0, 28),
(49, 9, 30, 3, 0, 0, 0, 29),
(50, 9, 31, 3, 0, 0, 0, 30),
(51, 9, 32, 3, 0, 0, 0, 31),
(52, 9, 33, 3, 0, 0, 0, 32),
(53, 9, 34, 3, 0, 0, 0, 33),
(54, 7, 4, 1, 0, 0, 0, 1),
(55, 7, 4, 1, 0, 0, 0, 2),
(56, 7, 5, 1, 0, 0, 0, 3),
(57, 7, 7, 1, 0, 0, 0, 4),
(58, 7, 8, 1, 0, 0, 0, 5),
(59, 7, 9, 1, 0, 0, 0, 6),
(60, 7, 10, 1, 0, 0, 0, 7),
(61, 7, 11, 1, 0, 0, 0, 8),
(62, 7, 12, 1, 0, 0, 0, 9),
(63, 7, 13, 1, 0, 0, 0, 10),
(64, 7, 14, 1, 0, 0, 0, 11),
(65, 8, 15, 2, 0, 0, 0, 12),
(66, 8, 16, 2, 0, 0, 0, 13),
(67, 8, 17, 2, 0, 0, 0, 14),
(68, 8, 18, 2, 0, 0, 0, 15),
(69, 8, 19, 2, 0, 0, 0, 16),
(70, 8, 20, 2, 0, 0, 0, 17),
(71, 8, 21, 2, 0, 0, 0, 18),
(72, 8, 22, 2, 0, 0, 0, 19),
(73, 8, 23, 2, 0, 0, 0, 20),
(74, 8, 24, 2, 0, 0, 0, 21),
(75, 9, 25, 3, 0, 0, 0, 22),
(76, 9, 26, 3, 0, 0, 0, 23),
(77, 9, 27, 3, 0, 0, 0, 24),
(78, 9, 28, 3, 0, 0, 0, 25),
(79, 9, 29, 3, 0, 0, 0, 26),
(80, 9, 30, 3, 0, 0, 0, 27),
(81, 9, 31, 3, 0, 0, 0, 28),
(82, 9, 32, 3, 0, 0, 0, 29),
(83, 9, 33, 3, 0, 0, 0, 30),
(84, 9, 34, 3, 0, 0, 0, 31),
(85, 3, 7, 4, 0, 0, 0, 32),
(86, 7, 5, 1, 0, 0, 0, 33),
(87, 3, 7, 4, 0, 0, 0, 34),
(88, 9, 11, 3, 0, 0, 0, 35),
(89, 1, 5, 1, 0, 0, 0, 1),
(90, 1, 7, 1, 0, 0, 0, 2),
(91, 1, 8, 1, 0, 0, 0, 3),
(92, 1, 9, 1, 0, 0, 0, 4),
(93, 1, 10, 1, 0, 0, 0, 5),
(94, 1, 11, 1, 0, 0, 0, 6),
(95, 1, 12, 1, 0, 0, 0, 7),
(96, 1, 13, 1, 0, 0, 0, 8),
(97, 1, 14, 1, 0, 0, 0, 9),
(98, 1, 15, 1, 0, 0, 0, 10),
(99, 2, 16, 2, 0, 0, 0, 11),
(100, 2, 17, 2, 0, 0, 0, 12),
(101, 2, 18, 2, 0, 0, 0, 13),
(102, 2, 19, 2, 0, 0, 0, 14),
(103, 2, 20, 2, 0, 0, 0, 15),
(104, 2, 21, 2, 0, 0, 0, 16),
(105, 2, 22, 2, 0, 0, 0, 17),
(106, 2, 23, 2, 0, 0, 0, 18),
(107, 2, 24, 2, 0, 0, 0, 19),
(108, 2, 25, 2, 0, 0, 0, 20),
(109, 3, 26, 3, 0, 0, 0, 21),
(110, 3, 27, 3, 0, 0, 0, 22),
(111, 3, 28, 3, 0, 0, 0, 23),
(112, 3, 29, 3, 0, 0, 0, 24),
(113, 3, 30, 3, 0, 0, 0, 25),
(114, 3, 31, 3, 0, 0, 0, 26),
(115, 3, 32, 3, 0, 0, 0, 27),
(116, 3, 33, 3, 0, 0, 0, 28),
(117, 3, 34, 3, 0, 0, 0, 29);

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
(1, 1, '');

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
(5, 41011199, 'Adelia Cristyana Dewanti', 'perempuan', '-', '2010-05-01', 'kristen', '-', '-', '-', '-', '-', 6578, '-', '-', '-@gmail.com'),
(7, 40393377, 'Alya Khairunisa', 'perempuan', 'Yogyakarta', '2011-05-01', 'islam', '-', '-', '-', '-', '-', 6439, '-', '-', 'ggg@gmail.com'),
(8, 42130836, 'ALDI MAULANA IFAN', 'laki-laki', 'Magelang', '2011-05-01', 'islam', '-', '-', '-', '-', '-', 6541, '-', '-', '@gmail.com'),
(9, 46044182, 'Adetio Gilang Pamungkas', 'laki-laki', 'Sleman', '2012-05-01', 'islam', '-', '-', '-', '-', '-', 6789, '-', '-', '@gmail.com'),
(10, 35718096, 'Adisti Hana Rania', 'perempuan', 'Yogyakarta', '2012-05-01', 'islam', '-', '-', '-', '-', '-', 6783, '-', '-', '@gmail.com'),
(11, 42152984, 'Afif Dwi Saputra', 'laki-laki', 'Yogyakarta', '2013-05-01', 'islam', '-', '-', '-', '-', '-', 6142, '-', '-', '@gmail.com'),
(12, 41154255, 'Alden Hersusanto', 'laki-laki', 'Yogyakarta', '2013-05-01', 'islam', '-', '-', '-', '-', '-', 6243, '-', '-', '@gmail.com'),
(13, 45122487, 'Alifa Febby Rachmanita', 'perempuan', 'Gunungkidul', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6244, '-', '-', '@gmail.com'),
(14, 28671593, 'Anastasia Sandi Asmara', 'perempuan', 'Yogyakarta', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6245, '-', '-', '@gmail.com'),
(15, 30351632, 'Andrias Wahyu Saputra', 'laki-laki', 'Yogyakarta', '2018-05-01', 'katolik', '-', '-', '-', '-', '-', 6246, '-', '-', '@gmail.com'),
(16, 33711659, 'Aryanti Putri Utami', 'perempuan', 'Magelang', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6247, '-', '-', '@gmail.com'),
(17, 40455876, 'Athallah Ferrel Maheswara', 'laki-laki', 'Surabaya', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6268, '-', '-', '@gmail.com'),
(18, 35111371, 'Anis Novi Safitri', 'perempuan', 'Yogyakarta', '2018-05-01', 'islam', 'Bumijo Kulon , Bumijo, Jetis, ', '37', '8', '-', 'Bumijo', 6249, 'Bersama orang tua', '-', '@gmail.com'),
(19, 40730943, 'Annisa Dwi Maharani Putri', 'perempuan', 'Yogyakarta', '2018-05-01', 'islam', 'Sutodirjan GT II/886', '71', '21', 'Pringgokusuman', 'Bumijo', 6260, 'Bersama orang tua', '087719877872', '-'),
(20, 40334100, 'ANTONIO BENTAR SUAREZ', 'laki-laki', 'Cilacap', '2005-02-20', 'katolik', 'COKRODININGRATAN JT 2/133', '27', '6', 'COKRODININGRATA', 'Bumijo', 2147483647, 'Bersama orang tua', '087719877872', '-'),
(21, 38111802, 'Arayan Fathir Ramadhan', 'laki-laki', 'Yogyakarta', '2003-02-22', 'islam', 'Karangwaru Lor TR II/0261', '4', '2', 'KARANGWARU', 'Bumijo', 2147483647, 'Bersama orang tua', '088783970901', '-'),
(22, 41154264, 'ARNETA SALMA INANDA', 'laki-laki', 'BANDUNG', '2004-06-11', 'islam', 'PRINGGOKUSUMAN GT II/600', '28', '8', 'PRINGGOKUSUMAN ', 'Bumijo', 2147483647, 'Bersama orang tua', '087839166116', '-'),
(23, 42493836, 'Aswim Hakam Maulana', 'perempuan', 'klaten', '2004-06-29', 'islam', 'Jombor Baru Blokl 8/160', '8', '2', 'Sendangadi', 'Bumijo', 78998, 'Bersama orang tua', '08164228521', '-'),
(24, 43156111, 'ATALIE SAFA DANELLA LAKSITA KHAIRAH', 'perempuan', 'Yogyakarta', '2004-12-04', 'islam', 'TIMURAN MG III/72 YOGYAKARTA', '5', '2', 'BRONTOKUSUMAN', 'Bumijo', 2147483647, 'Bersama orang tua', '08122952003', '-'),
(25, 43539753, 'Bella Putriana', 'perempuan', 'Yogyakarta', '2018-05-01', 'islam', 'PRINGGOKUSUMAN GT II/600', '26', '03', 'KARANGWARU', 'Bumijo', 6276, 'Bersama orang tua', '-', '@gmail.com'),
(26, 40376465, 'Bintang Kresna Adelard', 'laki-laki', 'Yogyakarta', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6275, '-', '-', '@gmail.com'),
(27, 40497211, 'Budi Setyawan', 'laki-laki', 'Gunungkidul', '2018-05-01', 'islam', '-', '-', '-', '-', '-', 6278, '-', '-', '@gmail.com'),
(28, 44454730, 'Chesna Ganendra Putra Prabowo', 'perempuan', 'Yogyakarta', '2018-05-01', 'katolik', '-', '-', '-', '-', '-', 6290, '-', '-', '@gmail.com'),
(29, 123121, 'Cinta Chantika Lestari', 'perempuan', 'Yogyakarta', '2004-03-04', 'islam', '-', '-', '-', '-', '-', 121314, '-', '-', '-'),
(30, 44454594, 'Claudia Endang Januwar', 'perempuan', 'Magelang', '2004-02-10', 'kristen', '-', '-', '-', '-', '-', 3212, '-', '-', '-'),
(31, 40992050, 'Daffa Zimraan Hassan', 'laki-laki', 'Selong', '2004-12-02', 'kristen', '-', '-', '-', '-', '-', 987, '-', '-', '-'),
(32, 35131279, 'David Sabrani', 'laki-laki', 'Magelang', '2004-02-03', 'kristen', '-', '-', '-', '-', '-', 986, '-', '-', '-'),
(33, 35174889, 'Decky Setiawan', 'laki-laki', 'Yogyakarta', '2002-12-10', 'katolik', '-', '-', '-', '-', '-', 9865, '-', '-', '-'),
(34, 35898087, 'DESYA AULIA CHAERUNISA', 'perempuan', 'Jakarta', '2003-12-03', 'kristen', '-', '-', '-', '-', '-', 8654, '-', '-', '-');

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
(1, 5, 1, 1),
(2, 7, 1, 1),
(3, 8, 1, 1),
(4, 9, 1, 1),
(5, 10, 1, 1),
(6, 11, 1, 1),
(7, 12, 1, 1),
(8, 13, 1, 1),
(9, 14, 1, 1),
(10, 15, 1, 1),
(11, 16, 2, 1),
(12, 17, 2, 1),
(13, 18, 2, 1),
(14, 19, 2, 1),
(15, 20, 2, 1),
(16, 21, 2, 1),
(17, 22, 2, 1),
(18, 23, 2, 1),
(19, 24, 2, 1),
(20, 25, 2, 1),
(21, 26, 3, 1),
(22, 27, 3, 1),
(23, 28, 3, 1),
(24, 29, 3, 1),
(25, 30, 3, 1),
(26, 31, 3, 1),
(27, 32, 3, 1),
(28, 33, 3, 1),
(29, 34, 3, 1);

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
(1, '2017/2018', 'aktif');

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
(1, 8, 1, 1),
(2, 4, 2, 1),
(3, 6, 3, 1);

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
  MODIFY `id_deskripsi_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `tb_deskripsi_sikap`
--
ALTER TABLE `tb_deskripsi_sikap`
  MODIFY `id_deskripsi_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_detail_ketrampilan`
--
ALTER TABLE `tb_detail_ketrampilan`
  MODIFY `id_detail_ketrampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `tb_detail_pengetahuan`
--
ALTER TABLE `tb_detail_pengetahuan`
  MODIFY `id_detail_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_guru_ampu`
--
ALTER TABLE `tb_guru_ampu`
  MODIFY `id_guru_ampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_nilai_ekskul`
--
ALTER TABLE `tb_nilai_ekskul`
  MODIFY `id_nilai_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `tb_rapor`
--
ALTER TABLE `tb_rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb_siswa_pertahun`
--
ALTER TABLE `tb_siswa_pertahun`
  MODIFY `id_siswa_pertahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_wali_kelas`
--
ALTER TABLE `tb_wali_kelas`
  MODIFY `id_wali_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
