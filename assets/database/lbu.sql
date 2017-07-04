-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 06:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` char(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(8) NOT NULL,
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `role`, `kode_bank`) VALUES
('0090764001', '0090764001', 'Operator', '0090764'),
('0090764002', '0090764002', 'Manager', '0090764');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `kode` char(7) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`kode`, `nama`) VALUES
('0022172', 'BRI KC Slamet Riyadi Solo'),
('0085384', 'Bank Mandiri KC Solo Sriwedari'),
('0090764', 'BNI KC Slamet Riyadi Solo'),
('0140148', 'BCA KC Solo'),
('2000325', 'BTN KC Solo');

-- --------------------------------------------------------

--
-- Table structure for table `form13`
--

CREATE TABLE `form13` (
  `id` int(11) NOT NULL,
  `jenis_penyediaan_dana` varchar(100) NOT NULL,
  `jenis_valuta` varchar(12) NOT NULL,
  `nilai_agunan` int(12) NOT NULL,
  `cadangan_kerugian_individial` int(12) NOT NULL,
  `cadangan_kerugian_kolektif` int(12) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form19`
--

CREATE TABLE `form19` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jenis_valuta` varchar(12) NOT NULL,
  `jumlah_perolehan` int(12) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `status_validasi` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal_pembuatan`, `status_validasi`, `deleted`, `kode_bank`) VALUES
(1, '2017-05-18', 0, 0, '0090764'),
(2, '2017-04-18', 0, 0, '0090764'),
(3, '2017-05-15', 0, 0, '0022172');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `kode_bank` (`kode_bank`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `form13`
--
ALTER TABLE `form13`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`),
  ADD KEY `kode_bank` (`kode_bank`);

--
-- Indexes for table `form19`
--
ALTER TABLE `form19`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`),
  ADD KEY `kode_bank` (`kode_bank`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_bank` (`kode_bank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form13`
--
ALTER TABLE `form13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form19`
--
ALTER TABLE `form19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form13`
--
ALTER TABLE `form13`
  ADD CONSTRAINT `fk_form13_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_form13_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form19`
--
ALTER TABLE `form19`
  ADD CONSTRAINT `fk_form19_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_form19_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
