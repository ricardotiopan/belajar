-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Okt 2017 pada 09.04
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_telepon`
--

CREATE TABLE `buku_telepon` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` longtext NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_telepon`
--

INSERT INTO `buku_telepon` (`id`, `nama`, `alamat`, `telepon`) VALUES
(1, 'Ricardo Tiopan', 'Kalideres, Jakarta Barat', '083896507993'),
(2, 'Evi Lusiany', 'Tanjung Duren, Jakarta Barat', '083814582487'),
(3, 'Nanang Sudrajat', 'Kedoya, Jakarta Barat', '083873419054'),
(4, 'Ujang Arisandi', 'Jelambar, Jakarta Barat', '089618051183'),
(5, 'Noviyanti', 'Palmerah, Jakarta Barat', '089622496827'),
(6, 'Evi Tiopan', 'Pucuk Dicinta Ulampun Tiba', '191218');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_telepon`
--
ALTER TABLE `buku_telepon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_telepon`
--
ALTER TABLE `buku_telepon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
