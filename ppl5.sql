-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 10:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dosenid` int(11) NOT NULL,
  `nidn` int(13) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mk1` varchar(50) DEFAULT NULL,
  `kdmk1` int(10) DEFAULT NULL,
  `mk2` varchar(150) DEFAULT NULL,
  `kdmk2` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosenid`, `nidn`, `name`, `mk1`, `kdmk1`, `mk2`, `kdmk2`, `username`, `password`, `avatar`, `email`) VALUES
(21, 1710511033, 'Ridwan Raafi\'udin', 'pemrograman web', 1, 'project prangkap lunak', 2, 'ridwan', '1234', 'images/dosens.png', 'dosen@upnvj.ac.id'),
(22, 1710511009, 'Harry Darmawan', 'sistem pakar', 3, '', 0, 'harry', '1234', 'images/dosen2.jpg', 'harry@upnvj.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `mkid` int(11) NOT NULL,
  `kdmk` int(11) NOT NULL,
  `dosenid` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `mk` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `pertemuan` varchar(150) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `absen` int(1) NOT NULL DEFAULT 1,
  `alasan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`mkid`, `kdmk`, `dosenid`, `name`, `mk`, `kelas`, `pertemuan`, `tanggal`, `absen`, `alasan`) VALUES
(7, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-1', '2019-12-17', 1, ''),
(8, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-2', '2019-12-18', 1, ''),
(9, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-3', '2019-12-19', 1, ''),
(10, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-4', '2019-12-20', 1, ''),
(11, 2, 21, 'Ridwan Raafi\'udin', 'project perangkat lunak', 'fik 201', 'pertemuan ke-1', '2019-12-18', 1, ''),
(12, 2, 21, 'Ridwan Raafi\'udin', 'project perangkat lunak', 'fik 201', 'pertemuan ke-2', '2019-12-19', 1, ''),
(13, 3, 22, 'harry', 'sistem pakar', 'fiklab 201', 'pertemuan ke-1', '2019-12-24', 1, ''),
(14, 3, 22, 'harry', 'sistem pakar', 'fiklab 201', 'pertemuan ke-2', '2019-12-28', 1, ''),
(15, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-5', '2019-12-21', 1, NULL),
(16, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-6', '2019-12-22', 1, NULL),
(17, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-7', '2019-12-23', 1, NULL),
(18, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-9', '2019-12-24', 1, ''),
(19, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-10', '2019-12-26', 1, NULL),
(20, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-11', '2019-12-27', 1, NULL),
(21, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-12', '2019-12-28', 1, NULL),
(22, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-13', '2019-12-29', 1, NULL),
(23, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-14', '2019-12-30', 1, NULL),
(24, 1, 21, 'Ridwan Raafi\'udin', 'pemrograman web', 'fik 301', 'pertemuan ke-15', '2019-12-31', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `NIDN` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `kdmk` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `pertemuan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`NIDN`, `nama`, `mk`, `kdmk`, `kelas`, `pertemuan`, `tanggal`, `status`, `alasan`) VALUES
('101', 'Ridwan', 'Projek Perangkat Lunak', 'ppl101', '', '1', '2019-08-14', 'absen', 'Lanjutkan Project'),
('101', 'Ridwan', 'Projek Perangkat Lunak', 'ppl101', '', '2', '2019-08-21', 'absen', 'Lanjutkan Project lagi ke dua'),
('101', 'Ridwan', 'Projek Perangkat Lunak', 'ppl101', 'A', '1', '2019-08-14', 'absen', 'Lanjutkan projek '),
('101', 'Ridwan', 'Projek Perangkat Lunak', 'ppl101', 'A', '2', '2019-08-21', 'absen', 'Lanjutkan lagi ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIDN` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'tutup',
  `komen` text NOT NULL,
  `pertemuan` varchar(15) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIDN`, `nama`, `username`, `password`, `level`, `komen`, `pertemuan`) VALUES
(101, 'Ridwan Raafiudin', 'ridwan', '1234', 'dosen', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosenid`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`mkid`),
  ADD KEY `dosen_id` (`dosenid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIDN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `mkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `NIDN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `dosen_fk` FOREIGN KEY (`dosenid`) REFERENCES `dosen` (`dosenid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
