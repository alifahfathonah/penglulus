-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 08:48 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengumuman_lulus`
--

-- --------------------------------------------------------

--
-- Table structure for table `un_konfigurasi`
--

CREATE TABLE `un_konfigurasi` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tgl_pengumuman` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `un_konfigurasi`
--

INSERT INTO `un_konfigurasi` (`id`, `sekolah`, `tahun`, `tgl_pengumuman`, `status`) VALUES
(1, 'SMKN 1 Tapaktuan', 2019, '2019-05-13 09:00:00', '0'),
(2, 'SMKN 1 Tapaktuan', 2020, '2020-05-13 09:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `un_siswa`
--

CREATE TABLE `un_siswa` (
  `no_ujian` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komli` varchar(50) NOT NULL,
  `n_bin` double NOT NULL,
  `n_mat` double NOT NULL,
  `n_big` double NOT NULL,
  `n_kejuruan` double NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `un_siswa`
--

INSERT INTO `un_siswa` (`no_ujian`, `nama`, `komli`, `n_bin`, `n_mat`, `n_big`, `n_kejuruan`, `status`) VALUES
('23-101-463-2', 'Benjamin', 'Multi Media', 7, 8, 6, 8.5, 1),
('23-101-464-9', 'Daniel', 'Multi Media', 8.5, 6.4, 8.3, 9, 1),
('23-101-465-8', 'Emily', 'Multi Media', 3.8, 2.2, 3.5, 2, 0),
('23-101-466-7', 'Emma', 'Multi Media', 7, 8, 3, 2, 0),
('23-101-467-6', 'Georgia', 'Multi Media', 5, 6, 4, 5, 1),
('23-101-468-5', 'Grace', 'Multi Media', 7, 3, 4, 8, 1),
('23-101-469-4', 'Hannah', 'Multi Media', 3, 3, 4, 4, 1),
('23-101-470-3', 'Jack', 'Multi Media', 6, 4, 2, 4, 0),
('23-101-471-2', 'Jacob', 'Multi Media', 5, 4, 6, 5, 1),
('23-101-472-9', 'James', 'Multi Media', 7, 4, 4, 6, 1),
('23-101-473-8', 'Jessica', 'Multi Media', 6, 4, 2, 5, 0),
('23-101-474-7', 'Joshua', 'Multi Media', 8, 6, 5, 2, 0),
('23-101-475-6', 'Liam', 'Multi Media', 7, 7, 6, 4, 1),
('23-101-476-5', 'Matthew', 'Multi Media', 6, 2, 8, 8, 0),
('23-101-477-4', 'Olivia', 'Multi Media', 7, 4, 7, 7, 1),
('23-101-478-3', 'Samantha', 'Multi Media', 6, 7, 6, 8, 1),
('23-101-479-2', 'Samuel', 'Multi Media', 4, 8, 6, 3, 1),
('23-101-480-9', 'Sarah', 'Multi Media', 5, 5, 4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `un_user`
--

CREATE TABLE `un_user` (
  `UID` tinyint(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `un_user`
--

INSERT INTO `un_user` (`UID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `un_konfigurasi`
--
ALTER TABLE `un_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `un_siswa`
--
ALTER TABLE `un_siswa`
  ADD PRIMARY KEY (`no_ujian`);

--
-- Indexes for table `un_user`
--
ALTER TABLE `un_user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `un_konfigurasi`
--
ALTER TABLE `un_konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `un_user`
--
ALTER TABLE `un_user`
  MODIFY `UID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
