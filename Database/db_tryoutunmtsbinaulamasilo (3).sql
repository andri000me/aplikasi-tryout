-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2020 pada 10.49
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator Web', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(21, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `aktif`) VALUES
(13, 'matematika', 'Y'),
(15, 'Bahasa Indonesia', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(2) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
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
-- Dumping data untuk tabel `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_user`, `id_kategori`, `benar`, `salah`, `kosong`, `point`, `tanggal`) VALUES
(1, 32, 13, 2, 1, 0, 67, '2020-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_soal`
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
-- Dumping data untuk tabel `tabel_soal`
--

INSERT INTO `tabel_soal` (`id_soal`, `id_kategori`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `publish`, `tipe`) VALUES
(1, 13, 'Amran', 'A', 'B', 'C', 'D', 'A', 'yes', 1),
(2, 13, 'Hjskj', 'A', 'B', 'C', 'D', 'B', 'yes', 1),
(3, 13, 'Dfdsf', 'A', 'B', 'C', 'D', 'A', 'yes', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_soal_latihan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gambar_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `asalsekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `gambar_user`, `username`, `password`, `nisn`, `asalsekolah`, `alamat`, `Gambar`) VALUES
(30, 'Aldi', './gambar/user_online.jpg', 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', '1234', 'SMA N 4 KISARAN', 'Jalan Budi Utomo, Lk.IV', ''),
(31, 'Amran', './gambar/user_online.jpg', 'amran', 'ba5db6da8eca096fdde282d12a9833db', '141045', 'SMP', 'pinrang', ''),
(32, 'Amran', './gambar/user_online.jpg', 'admin', '21232f297a57a5a743894a0e4a801fc3', '141045', 'SMP', 'polman', ''),
(33, 'Adfa', './gambar/user_online.jpg', 'SGS', '7edb334372120e377bd56c8bde19263d', '3234', 'segse', 'srgsr', ''),
(34, 'amran', '', 'amran', '141045', '141045', '3431', 'adf', ''),
(35, 'Budi', './gambar/user_online.jpg', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '2131', '23423', 'segef', ''),
(36, 'Budi', './gambar/user_online.jpg', '123456', 'e10adc3949ba59abbe56e057f20f883e', '21321', '23443', 'sdfkjsdl', 'Chrysanthemum.jpg'),
(37, 'Mila', './gambar/user_online.jpg', '12', 'c20ad4d76fe97759aa27a0c99bff6710', '3424`', '324234', 'dfgds', 'Lighthouse.jpg'),
(39, 'Jdjdj', './gambar/user_online.jpg', 'aaaaa', '594f803b380a41396ed63dca39503542', '63636', '562627', 'kfdkfj', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timers`
--

CREATE TABLE `timers` (
  `id_timers` int(5) NOT NULL,
  `timers` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `timers`
--

INSERT INTO `timers` (`id_timers`, `timers`) VALUES
(1, 3600);

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
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  MODIFY `id_soal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_soal_latihan`
--
ALTER TABLE `tabel_soal_latihan`
  MODIFY `id_latihan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
