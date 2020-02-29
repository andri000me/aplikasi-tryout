-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 11:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tryoutunmtsbinaulamasilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator Web', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(21, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `aktif`) VALUES
(18, 'Bahas Indonesia', 'N'),
(19, 'Bahasa Inggris', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(2) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id_nilai` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `benar` int(4) NOT NULL,
  `salah` int(4) NOT NULL,
  `kosong` int(4) NOT NULL,
  `point` int(4) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_user`, `id_kategori`, `benar`, `salah`, `kosong`, `point`, `tanggal`) VALUES
(15, 49, 19, 1, 0, 0, 100, '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_soal`
--

CREATE TABLE `tabel_soal` (
  `id_soal` int(4) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `publish` enum('yes','no') NOT NULL,
  `tipe` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_soal`
--

INSERT INTO `tabel_soal` (`id_soal`, `id_kategori`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `publish`, `tipe`) VALUES
(14, 18, 'Siapakah Pacar Dari Afianto ?', 'Dilla', 'Nova', 'Eka', 'Bams', 'D', 'yes', 1),
(15, 19, 'Where Do You Live ?', 'Mksr', 'Daya', 'Pk7', 'Perintis', 'B', 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_soal_latihan`
--

CREATE TABLE `tabel_soal_latihan` (
  `id_latihan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pilihan_a` varchar(11) NOT NULL,
  `pilihan_b` varchar(11) NOT NULL,
  `pilihan_c` varchar(11) NOT NULL,
  `pilihan_d` varchar(11) NOT NULL,
  `jawaban` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_soal_latihan`
--

INSERT INTO `tabel_soal_latihan` (`id_latihan`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`) VALUES
(2, 'Siapakah Pacarnya Dilla ?', 'Anto', 'Bams', 'ERwin', 'Lalu', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gambar_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `notlp` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `gambar_user`, `username`, `password`, `nisn`, `notlp`, `alamat`, `Gambar`) VALUES
(49, 'Lalu', './gambar/user_online.jpg', 'lalu', 'c0dbcf9974b4a1243efba680663431d3', '7897', '0989', 'pk7', 'previa (3).jpg'),
(50, 'Eka', './gambar/user_online.jpg', 'eka', '79ee82b17dfb837b1be94a6827fa395a', '9987515993', '0897776655', 'Kompleks Auri', 'IMG-20190813-WA0052.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timers`
--

CREATE TABLE `timers` (
  `id_timers` int(5) NOT NULL,
  `timers` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timers`
--

INSERT INTO `timers` (`id_timers`, `timers`) VALUES
(1, 7200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tabel_soal_latihan`
--
ALTER TABLE `tabel_soal_latihan`
  ADD PRIMARY KEY (`id_latihan`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  MODIFY `id_soal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_soal_latihan`
--
ALTER TABLE `tabel_soal_latihan`
  MODIFY `id_latihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
