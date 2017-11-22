-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 04:40 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alifsatria`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `no_izin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `no_izin`, `username`, `password`, `nama_admin`) VALUES
(1, 991, 'jordan', 'jordan', 'jordan');

-- --------------------------------------------------------

--
-- Table structure for table `datascore`
--

CREATE TABLE `datascore` (
  `id_score` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_team1` int(11) NOT NULL,
  `nama_wasit` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `id_team2` int(11) NOT NULL,
  `point1` int(11) NOT NULL,
  `point2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datascore`
--

INSERT INTO `datascore` (`id_score`, `id_admin`, `id_team1`, `nama_wasit`, `tempat`, `waktu`, `id_team2`, `point1`, `point2`) VALUES
(1, 1, 1, 'sutan', 'Gor PCR', '14.00', 2, 50, 40);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `kelas_member` varchar(255) NOT NULL,
  `jurusan_member` varchar(255) NOT NULL,
  `prodi_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama_member`, `kelas_member`, `jurusan_member`, `prodi_member`) VALUES
(1, 'sdasfff', 'sda', 'a', '3 TI A', 'Ayam', 'TI'),
(7, 'c', 'c', 'c', 'c', 'c', 'c'),
(8, 'a', 'a', 'a', 'a', 'a', 'a'),
(9, 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `perbasi`
--

CREATE TABLE `perbasi` (
  `no_izin` int(11) NOT NULL,
  `penanggungjawab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perbasi`
--

INSERT INTO `perbasi` (`no_izin`, `penanggungjawab`) VALUES
(991, 'hercules'),
(992, 'zoro one'),
(993, 'budiono');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama_team`) VALUES
(1, 'ITSA BISA'),
(2, 'HIMASISTIFO'),
(3, 'HIMATRON'),
(4, 'HIMIKA'),
(5, 'HIMAKSI'),
(6, 'HIMAKOM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `no_izin` (`no_izin`);

--
-- Indexes for table `datascore`
--
ALTER TABLE `datascore`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_team1` (`id_team1`),
  ADD KEY `id_team2` (`id_team2`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `perbasi`
--
ALTER TABLE `perbasi`
  ADD PRIMARY KEY (`no_izin`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datascore`
--
ALTER TABLE `datascore`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `perbasi`
--
ALTER TABLE `perbasi`
  MODIFY `no_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=994;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`no_izin`) REFERENCES `perbasi` (`no_izin`);

--
-- Constraints for table `datascore`
--
ALTER TABLE `datascore`
  ADD CONSTRAINT `datascore_ibfk_1` FOREIGN KEY (`id_team1`) REFERENCES `team` (`id_team`),
  ADD CONSTRAINT `datascore_ibfk_2` FOREIGN KEY (`id_team2`) REFERENCES `team` (`id_team`),
  ADD CONSTRAINT `datascore_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
