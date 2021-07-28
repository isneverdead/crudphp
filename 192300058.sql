-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 11:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `192300058`
--

-- --------------------------------------------------------

--
-- Table structure for table `73_dosen`
--

CREATE TABLE `73_dosen` (
  `id` int(11) NOT NULL,
  `nppy` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `73_dosen`
--

INSERT INTO `73_dosen` (`id`, `nppy`, `nama`, `nomor_hp`, `alamat`, `mata_kuliah`) VALUES
(2, '111', 'dosen', '123', 'pekalongan', 'Jaringan Komputer 1'),
(3, 'dadada', 'dawda', 'dadw', 'awdwad', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `73_mahasiswa`
--

CREATE TABLE `73_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `progdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `73_mahasiswa`
--

INSERT INTO `73_mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `progdi`) VALUES
(1, '12', 'akbar', 'Laki-laki', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `73_dosen`
--
ALTER TABLE `73_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `73_mahasiswa`
--
ALTER TABLE `73_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `73_dosen`
--
ALTER TABLE `73_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `73_mahasiswa`
--
ALTER TABLE `73_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
