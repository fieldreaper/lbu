-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 05:12 PM
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
('0090764', 'BNI KC Slamet Riyadi Solo');

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

--
-- Dumping data for table `form03`
--

INSERT INTO `form03` (`id`, `jenis_mata_uang`, `posisi_awal`, `debet`, `kredit`, `lainnya`, `posisi_akhir`, `disetujui`, `id_laporan`) VALUES
(1, 'Uang Kertas', 1000000000, 500000000, 375000000, 100000000, 1250000000, 0, 1),
(2, 'Uang Kertas', 1250000000, 400000000, 300000000, 100000000, 2000000000, 1, 2),
(3, 'Uang Logam', 300000000, 150000000, 75000000, 10000000, 450000000, 1, 3);

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
  `jumlah` int(3) NOT NULL,
  `cadangan_kerugian` int(12) NOT NULL,
  `akumulasi_penyusutan` int(12) NOT NULL,
  `nilai_tercatat` int(12) NOT NULL,
  `status_aset` varchar(20) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form15`
--

INSERT INTO `form15` (`id`, `jenis_aset`, `jenis_valuta`, `sumber_perolehan`, `metode_pengukuran`, `jumlah`, `cadangan_kerugian`, `akumulasi_penyusutan`, `nilai_tercatat`, `status_aset`, `disetujui`, `id_laporan`) VALUES
(1, 'Tanah', 'Rupiah', 'Bukan Sewa Pembiayaan Terkait dengan Bank', 'Model Biaya', 1, 0, 0, 500000000, 'Dijaminkan', 1, 1),
(2, 'Kendaraan Dinas', 'Valuta Asing', 'Sewa Pembiayaan (Finance Lease) Tidak terkait dengan Bank', 'Model Revaluasi', 1, 0, 0, 125000000, 'Dijaminkan', 1, 2),
(3, 'Perlengkapan Kantor', 'Rupiah', 'Bukan Sewa Pembiayaan Tidak terkait dengan Bank', 'Model Biaya', 10, 0, 0, 20000000, 'Tidak dijaminkan', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `form19`
--

CREATE TABLE `form19` (
  `id` int(7) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jenis_valuta` varchar(12) NOT NULL,
  `jumlah_perolehan` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form19`
--

INSERT INTO `form19` (`id`, `jenis`, `jenis_valuta`, `jumlah_perolehan`, `disetujui`, `id_laporan`) VALUES
(1, 'Giro', 'Rupiah', 1250000000, 0, 1),
(2, 'Dana Usaha', 'Rupiah', 750000000, 1, 2),
(3, 'Deposito berjangka', 'Valuta Asing', 200000000, 0, 3);

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

--
-- Dumping data for table `form39`
--

INSERT INTO `form39` (`id`, `golongan_pemberi`, `hubungan_bank`, `status_pemberi`, `negara_pemberi`, `jenis_modal`, `jumlah`, `disetujui`, `id_laporan`) VALUES
(1, 'BNI KC Slamet Riyadi Solo', 'Tidak terkait dengan bank', 'Perusahaan Induk', 'Indonesia', 'Tunai', 50000000, 0, 1),
(2, 'BNI KC Slamet Riyadi Solo', 'Terkait dengan bank', 'Perusahaan Induk', 'Indonesia', 'Saham Bank Sendiri', 100000000, 1, 2),
(3, 'BNI KC Slamet Riyadi Solo', 'Tidak terkait dengan bank', 'Perusahaan Induk', 'Indonesia', 'Tunai', 100000000, 1, 3);

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
  `jumlah` int(3) NOT NULL,
  `jenis_agunan` varchar(35) NOT NULL,
  `sifat_agunan` varchar(15) NOT NULL,
  `jenis_valuta_agunan` varchar(15) NOT NULL,
  `jangka_waktu_mulai_agunan` date NOT NULL,
  `jangka_waktu_jatuh_tempo_agunan` date NOT NULL,
  `nilai_agunan` int(12) NOT NULL,
  `tanggal_penilaian_agunan` date NOT NULL,
  `penerbit_agunan` varchar(65) NOT NULL,
  `lembaga_pemeringkat_agunan` varchar(25) NOT NULL,
  `peringkat_penerbit_agunan` int(3) NOT NULL,
  `tanggal_pemeringkatan_agunan` date NOT NULL,
  `nilai_agunan_diperhitungkan` int(12) NOT NULL,
  `cadangan_umum` int(12) NOT NULL,
  `cadangan_khusus` int(12) NOT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form43`
--

INSERT INTO `form43` (`id`, `jenis`, `tujuan`, `jenis_valuta`, `kualitas`, `jangka_waktu_mulai`, `jangka_waktu_jatuh_tempo`, `golongan_pemohon`, `hubungan_bank`, `status_pemohon`, `kategori_portofolio`, `negara_pemohon`, `lembaga_pemeringkat`, `peringkat_perusahaan`, `tanggal_pemeringkatan`, `jumlah`, `jenis_agunan`, `sifat_agunan`, `jenis_valuta_agunan`, `jangka_waktu_mulai_agunan`, `jangka_waktu_jatuh_tempo_agunan`, `nilai_agunan`, `tanggal_penilaian_agunan`, `penerbit_agunan`, `lembaga_pemeringkat_agunan`, `peringkat_penerbit_agunan`, `tanggal_pemeringkatan_agunan`, `nilai_agunan_diperhitungkan`, `cadangan_umum`, `cadangan_khusus`, `disetujui`, `id_laporan`) VALUES
(1, 'Acceptance L/C', 'L/C dalam negeri (SKBDN)', 'Rupiah', 'Lancar', '2017-01-03', '2017-01-27', 'Pemerintah Kota', 'Tidak terkait dengan bank', 'Lainnya', 'Tagihan Kepada Pemerintah Indonesia', 'Indonesia', 'ICRA Indonesia', 30, '2014-01-03', 1, 'Tabungan', 'Non Eligible', 'Rupiah', '2017-01-03', '2017-01-27', 175000000, '2017-01-05', 'Pemerintah Pusat Republik Indonesia', 'ICRA Indonesia', 50, '2017-01-01', 100000000, 50000000, 0, 1, 1),
(2, 'Negotiation L/C', 'L/C luar negeri', 'Valuta Asing', 'Lancar', '2017-02-07', '2017-02-25', 'Badan Urusan Logistik (BULOG)', 'Tidak terkait dengan bank', 'Perusahaan Induk', 'Tagihan Kepada Korporasi', 'Indonesia', 'Standard and Poor’s', 9, '2014-02-01', 1, 'Persediaan', 'Eligible', 'Valuta Asing', '2017-02-07', '2017-02-25', 100000000, '2017-02-08', 'Korporasi', 'Standard and Poor’s', 79, '2017-02-08', 50000000, 50000000, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(7) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_komentar` text NOT NULL,
  `id_akun` char(10) NOT NULL,
  `id_laporan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `tanggal`, `isi_komentar`, `id_akun`, `id_laporan`) VALUES
(1, '2017-12-26 21:44:31', 'Periksa kembali untuk form 15, jenis aset yang dimasukkan salah', '0090764002', 1),
(2, '2017-12-26 21:44:31', 'Periksa kembali untuk form 19, nilai jumlah perolehan yang dimasukkan salah', '0090764002', 2),
(3, '2017-12-26 21:47:34', 'Baik pak, segera saya perbaiki ..', '0090764001', 2),
(13, '2017-12-26 23:10:24', 'jangka waktu mulai pada form 43 salah', '0090764002', 2),
(14, '2017-12-26 23:11:33', 'nilai jumlah pada form 39 salah', '0090764002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(7) NOT NULL,
  `tahun_laporan` int(4) NOT NULL,
  `bulan_laporan` int(2) NOT NULL,
  `persentase` int(2) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `kode_bank` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tahun_laporan`, `bulan_laporan`, `persentase`, `deleted`, `kode_bank`) VALUES
(1, 2017, 1, 3, 0, '0090764'),
(2, 2017, 2, 5, 0, '0090764'),
(3, 2017, 1, 3, 0, '0022172');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `form15`
--
ALTER TABLE `form15`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `form43`
--
ALTER TABLE `form43`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_laporan` (`id_laporan`);

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form15`
--
ALTER TABLE `form15`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form19`
--
ALTER TABLE `form19`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form39`
--
ALTER TABLE `form39`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form43`
--
ALTER TABLE `form43`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- Constraints for table `form03`
--
ALTER TABLE `form03`
  ADD CONSTRAINT `fk_form03_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form15`
--
ALTER TABLE `form15`
  ADD CONSTRAINT `fk_form15_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form19`
--
ALTER TABLE `form19`
  ADD CONSTRAINT `fk_form19_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form39`
--
ALTER TABLE `form39`
  ADD CONSTRAINT `fk_form39_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form43`
--
ALTER TABLE `form43`
  ADD CONSTRAINT `fk_form43_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_komentar_laporan` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_bank` FOREIGN KEY (`kode_bank`) REFERENCES `bank` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
