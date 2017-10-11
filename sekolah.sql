-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2017 pada 05.41
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `no_induk` int(10) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `nilai_uh` decimal(4,2) DEFAULT NULL,
  `nilai_uts` decimal(4,2) DEFAULT NULL,
  `nilai_uas` decimal(4,2) DEFAULT NULL,
  `nilai_akhir` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`no_induk`, `nama`, `kelas`, `nilai_uh`, `nilai_uts`, `nilai_uas`, `nilai_akhir`) VALUES
(1, 'Andre Septian', 'XII RPL', '90.00', '90.00', '95.00', '91.67'),
(2, 'Hera Herliana', 'XII AK', '90.00', '85.00', '93.00', '89.33'),
(3, 'Siska Widiyanti ', 'XII TKJ', '80.00', '95.00', '90.00', '88.33'),
(4, 'Dodo Rukanda', 'XII RPL', '75.00', '70.00', '70.00', '71.67'),
(5, 'Yoga Abdul Zaiz', 'XII AK', '70.00', '75.00', '75.00', '73.33'),
(6, 'Fajar Gumilar', 'XII TKJ', '80.00', '70.00', '75.00', '75.00'),
(7, 'Dodi Hendiana ', 'XII AK', '80.00', '70.00', '65.00', '71.67'),
(8, 'Asep Setiawan', 'XII AK', '80.00', '90.00', '75.00', '81.67'),
(9, 'Hesty Nuraeni ', 'XII AK', '80.00', '70.00', '75.00', '75.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_induk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
