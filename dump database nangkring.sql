-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 08:00 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nangkring`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama`, `email`, `userid`, `password`) VALUES
('agus', 'agus@ymail.com', 'agus', 'agus'),
('agusman', 'agusman@mail.com', 'agusman', 'agusman'),
('ganjiludin', 'ganjiludin@gmail.com', 'ganjil', 'ganjil'),
('kanjirudin', 'kanjirudin@GMAIL.COM', 'kanjir', 'kanjir'),
('wildan', 'wildan@gmail.com', 'wildan', 'wildan');

-- --------------------------------------------------------

--
-- Table structure for table `laporkan_post`
--

CREATE TABLE IF NOT EXISTS `laporkan_post` (
  `id_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(11) NOT NULL,
  `isi_laporan` text NOT NULL,
  `pelapor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `laporkan_post`
--

INSERT INTO `laporkan_post` (`id_laporan`, `id_topik`, `isi_laporan`, `pelapor`) VALUES
(2, 7, 'Tidak Sopan', 'agus'),
(3, 8, 'Tidak Sopan', 'wildan');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `username`, `email`, `kelamin`, `password`) VALUES
(22, 'Agusman Riyadi', 'agusman', 'strongdeathpeople@gmail.com', 'laki-laki', 'agusman'),
(23, 'ade pratama', 'ade', 'adePratama@gmail.com', 'laki-laki', 'ade'),
(25, 'Agus Andriyanto', 'agus', 'agus@gmail.com', 'laki-laki', 'agus'),
(26, 'Wildan Aulia Zakki', 'wildan', 'wildan@gmail.com', 'laki-laki', 'wildan'),
(27, 'admin', 'admin', 'admin@gmail.com', 'laki-laki', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE IF NOT EXISTS `tabel_komentar` (
  `id_balasan` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(25) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `penjawab` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_balasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tabel_komentar`
--

INSERT INTO `tabel_komentar` (`id_balasan`, `id_topik`, `topik`, `penjawab`, `isi`, `tanggal`) VALUES
(14, 7, 'Cara', 'wildan', 'Ini Gua Banget', '2015-01-11 22:47:44'),
(15, 8, 'Aku', 'wildan', 'Raksah Galau gus, gawe bareng wae..', '2015-01-21 16:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE IF NOT EXISTS `tabel_pesan` (
  `id_pesan` int(5) NOT NULL AUTO_INCREMENT,
  `isi_pesan` text NOT NULL,
  `id_pengirim` int(5) NOT NULL,
  `id_penerima` int(5) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`id_pesan`, `isi_pesan`, `id_pengirim`, `id_penerima`, `tgl_pesan`) VALUES
(2, 'koe edan', 26, 23, '2015-01-15 01:06:14'),
(3, 'Wil pie kabare?', 25, 26, '2015-01-17 04:04:12'),
(4, 'Sombong ya saiki', 25, 26, '2015-01-19 07:28:44'),
(6, 'Apik2-apik gus', 26, 25, '2015-01-19 09:53:20'),
(7, 'Maaf Thread Anda dengan topik "Hijau", Kami Hapus Karena Mungkin Mengganggu atau tidak sopan atau berbau pornografi.', 27, 22, '2015-01-19 18:10:33'),
(8, 'Maaf Thread Anda dengan topik "asu", Kami Hapus Karena Mungkin Mengganggu atau tidak sopan atau berbau pornografi.', 27, 26, '2015-01-19 18:18:34'),
(9, 'De ayo tugas PI ne garap..', 25, 23, '2015-01-21 11:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_saran`
--

CREATE TABLE IF NOT EXISTS `tabel_saran` (
  `id_saran` int(11) NOT NULL AUTO_INCREMENT,
  `isi_saran` text NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tabel_saran`
--

INSERT INTO `tabel_saran` (`id_saran`, `isi_saran`, `id_pengirim`, `tanggal`) VALUES
(1, 'proses verifikasi atau validasi belum ada', 26, '2015-01-21 12:39:03'),
(3, 'Notifikasi belum ada', 26, '2015-01-21 15:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_topik`
--

CREATE TABLE IF NOT EXISTS `tabel_topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(20) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(255) NOT NULL,
  `total_balasan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tabel_topik`
--

INSERT INTO `tabel_topik` (`id_topik`, `pengirim`, `topik`, `isi`, `dilihat`, `total_balasan`, `tanggal`) VALUES
(7, 'wildan', 'Cara Menjadi Mahasiswa Yang Baik Dan Benar', '1. Ngerjain Tugas Tepat Waktu\r\n2. Tidak menyotek saat responsi, uts dan uas\r\n3. Baik dan sopan', 37, 1, '2015-01-04 21:30:20'),
(8, 'agus', 'Aku Galau Dengan Tugas PI', 'Tugas PI bikin galau mana uda mau deadline belum jadi juga.. ', 16, 1, '2015-01-21 11:49:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
