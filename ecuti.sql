-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:07 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_cuti_ecuti`
--

CREATE TABLE `form_cuti_ecuti` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `jenis_cuti` varchar(30) NOT NULL,
  `alasan_cuti` text NOT NULL,
  `lama_cuti` varchar(30) NOT NULL,
  `mulai_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  `tujuan_atasan` varchar(30) NOT NULL,
  `lokasi_atasan` varchar(60) DEFAULT NULL,
  `status_atasan_langsung` text DEFAULT NULL,
  `pertimbangan_atasan_langsung` varchar(25) DEFAULT NULL,
  `status_ktu` text DEFAULT NULL,
  `pertimbangan_kepala_tu` varchar(20) DEFAULT NULL,
  `status_kepala_balai` text DEFAULT NULL,
  `pertimbangan_kepala_balai` varchar(20) DEFAULT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_cuti_ecuti`
--

INSERT INTO `form_cuti_ecuti` (`id_form`, `nama`, `nip`, `jabatan`, `masa_kerja`, `unit_kerja`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `mulai_cuti`, `akhir_cuti`, `tujuan_atasan`, `lokasi_atasan`, `status_atasan_langsung`, `pertimbangan_atasan_langsung`, `status_ktu`, `pertimbangan_kepala_tu`, `status_kepala_balai`, `pertimbangan_kepala_balai`, `status`) VALUES
(26, 'user', '123981029388', 'Kasi Jaslit', 'Jaslit', 'Jaslit', 'cuti_tahunan', 'meles cape mo nikah ', '2 Hari', '2020-08-26', '2020-08-27', 'kepala_tu', 'user', '-', NULL, 'Disetujui Oleh Kepala TU', 'disetujui', 'Tidak Boleh KArena ada acara', 'ditangguhkan', 'Telah ditangguhkan Oleh Kepala Balai'),
(27, 'user', '123981029388', 'test', 'tets', 'test', 'cuti_tahunan', 'meles cape mo nikah', '2 hari', '2020-08-31', '2020-09-01', 'ppk', 'admin', 'Test', 'disetujui', 'setuju', 'disetujui', 'aklsdjaljsdla', 'disetujui', 'Telah disetujui Oleh Kepala Balai '),
(29, 'user', '123981029388', 'ceo', '1 th', 'asd', 'cuti_tahunan', 'capek', '1 th', '1998-05-12', '1997-05-15', 'kepala_tu', 'admin', '-', NULL, '                                                  ya silakan', 'disetujui', '', 'disetujui', 'Telah disetujui Oleh Kepala Balai ');

-- --------------------------------------------------------

--
-- Table structure for table `user_ecuti`
--

CREATE TABLE `user_ecuti` (
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ecuti`
--

INSERT INTO `user_ecuti` (`NIP`, `nama`, `username`, `password`, `role`) VALUES
('1111111111', 'rose', 'rose', 'rose', 'admin'),
('123456', 'test s', 'test123', '123456', 'user'),
('123981029388', 'user', 'user', 'user', 'user'),
('1731710047', 'Muhammad ', 'Test', '123', 'user'),
('kabalai', 'kabalai', 'kabalai', 'kabalai', 'ka_balai'),
('kepala_tu', 'kepala_tu', 'kepala_tu', 'kepala_tu', 'kepala_tu'),
('ppk', 'ppk', 'ppk', 'ppk', 'ppk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_cuti_ecuti`
--
ALTER TABLE `form_cuti_ecuti`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `user_ecuti`
--
ALTER TABLE `user_ecuti`
  ADD PRIMARY KEY (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_cuti_ecuti`
--
ALTER TABLE `form_cuti_ecuti`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
