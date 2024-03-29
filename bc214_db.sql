-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 09:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc214_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `iddosen` char(10) NOT NULL,
  `namadosen` varchar(50) NOT NULL,
  `kelas` char(3) NOT NULL,
  `matakuliah` char(3) NOT NULL,
  `ruangkelas` char(3) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formmhs`
--

CREATE TABLE `formmhs` (
  `nim` char(10) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `kode_jurusan` char(3) NOT NULL,
  `gender` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formmhs`
--

INSERT INTO `formmhs` (`nim`, `nama_mhs`, `kode_jurusan`, `gender`, `alamat`, `no_hp`, `email`) VALUES
('', 'ba', '', 0, '', '', ''),
('210040033', 'asdsad', '002', 0, 'asukayang', 'pasdsad', 'gangsamba3@yahoo.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`iddosen`);

--
-- Indexes for table `formmhs`
--
ALTER TABLE `formmhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
