-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 01:26 PM
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
('0022172002', '0022172002', 'Manager', '0022172'),
('0085384002', '0085384002', 'Manager', '0085384'),
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
-- Table structure for table `form03`
--

CREATE TABLE `form03` (
  `id` int(7) NOT NULL,
  `jenis_mata_uang` varchar(15) NOT NULL,
  `posisi_awal` int(12) NOT NULL,
  `debet` int(12) NOT NULL,
  `kredit` int(12) NOT NULL,
  `lainnya` int(12) NOT NULL,
  `posisi_akhir` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form13`
--

CREATE TABLE `form13` (
  `id` int(11) NOT NULL,
  `jenis_penyediaan_dana` varchar(100) NOT NULL,
  `jenis_valuta` varchar(12) NOT NULL,
  `nilai_agunan` int(12) NOT NULL,
  `cadangan_kerugian_individual` int(12) NOT NULL,
  `cadangan_kerugian_kolektif` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form13`
--

INSERT INTO `form13` (`id`, `jenis_penyediaan_dana`, `jenis_valuta`, `nilai_agunan`, `cadangan_kerugian_individual`, `cadangan_kerugian_kolektif`, `disetujui`, `id_laporan`) VALUES
(1, 'Penempatan pada bank lain', 'Rupiah', 500000000, 250000000, 400000000, 1, 2),
(2, 'Surat Berharga', 'Rupiah', 375000000, 100000000, 250000000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form15`
--

CREATE TABLE `form15` (
  `id` int(7) NOT NULL,
  `jenis_aset` varchar(20) NOT NULL,
  `jenis_valuta` varchar(15) NOT NULL,
  `sumber_perolehan` varchar(60) NOT NULL,
  `metode_pengukuran` varchar(15) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `cadangan_kerugian` int(12) NOT NULL,
  `akumulasi_penyusutan` int(12) NOT NULL,
  `nilai_tercatat` int(12) NOT NULL,
  `status_aset` varchar(20) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
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
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form19`
--

INSERT INTO `form19` (`id`, `jenis`, `jenis_valuta`, `jumlah_perolehan`, `disetujui`, `id_laporan`) VALUES
(1, 'Giro', 'Rupiah', 1250000000, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `form39`
--

CREATE TABLE `form39` (
  `id` int(7) NOT NULL,
  `golongan_pemberi` varchar(50) NOT NULL,
  `hubungan_bank` varchar(25) NOT NULL,
  `status_pemberi` varchar(20) NOT NULL,
  `negara_pemberi` varchar(25) NOT NULL,
  `jenis_modal` varchar(25) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form43`
--

CREATE TABLE `form43` (
  `id` int(7) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `jenis_valuta` varchar(15) NOT NULL,
  `kualitas` varchar(25) NOT NULL,
  `jangka_waktu_mulai` date NOT NULL,
  `jangka_waktu_jatuh_tempo` date NOT NULL,
  `golongan_pemohon` varchar(50) NOT NULL,
  `hubungan_bank` varchar(25) NOT NULL,
  `status_pemohon` varchar(20) NOT NULL,
  `kategori_portofolio` varchar(80) NOT NULL,
  `negara_pemohon` varchar(25) NOT NULL,
  `lembaga_pemeringkat` varchar(25) NOT NULL,
  `peringkat_perusahaan` int(3) NOT NULL,
  `tanggal_pemeringkatan` date NOT NULL,
  `jumlah` int(12) NOT NULL,
  `jenis_agunan` varchar(35) NOT NULL,
  `sifat_agunan` varchar(15) NOT NULL,
  `jenis_valuta_agunan` varchar(15) NOT NULL,
  `jangka_waktu_mulai_agunan` date NOT NULL,
  `jangka_waktu_jatuh_tempo_agunan` date NOT NULL,
  `nilai_agunan` int(12) NOT NULL,
  `tanggal_penilaian_agunan` date NOT NULL,
  `penerbit_agunan` varchar(65) NOT NULL,
  `lembaga_pemeringkat_agunan` varchar(25) NOT NULL,
  `peringkat_agunan` int(3) NOT NULL,
  `tanggal_pemeringkatan_agunan` date NOT NULL,
  `nilai_agunan_diperhitungkan` int(12) NOT NULL,
  `cadangan_umum` int(12) NOT NULL,
  `cadangan_khusus` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(7) NOT NULL,
  `tahun_laporan` int(4) NOT NULL,
  `bulan_laporan` int(2) NOT NULL,
  `persentase` int(2) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tahun_laporan`, `bulan_laporan`, `persentase`, `status_validasi`, `deleted`, `kode_bank`) VALUES
(1, 2017, 5, 1, 0, 0, '0090764'),
(2, 2017, 4, 2, 0, 0, '0090764'),
(3, 2017, 5, 0, 0, 0, '0022172');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `nama` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(2, 'Manager'),
(1, 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `kode_bank` (`kode_bank`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `form03`
--
ALTER TABLE `form03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form13`
--
ALTER TABLE `form13`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `form15`
--
ALTER TABLE `form15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form19`
--
ALTER TABLE `form19`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `form39`
--
ALTER TABLE `form39`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form43`
--
ALTER TABLE `form43`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_bank` (`kode_bank`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form03`
--
ALTER TABLE `form03`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form13`
--
ALTER TABLE `form13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form15`
--
ALTER TABLE `form15`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form19`
--
ALTER TABLE `form19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form39`
--
ALTER TABLE `form39`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form43`
--
ALTER TABLE `form43`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_akun_role` FOREIGN KEY (`role`) REFERENCES `role` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form13`
--
ALTER TABLE `form13`
  ADD CONSTRAINT `fk_form13_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form19`
--
ALTER TABLE `form19`
  ADD CONSTRAINT `fk_form19_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
