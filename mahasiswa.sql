-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 07:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nim` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Dicky Asqaelani', '099423421', 'dicky@gmail.com', 'RPL', 'gambar1.png'),
(2, 'Ahmad', '124234098', 'ahmad@gmail.com', 'TKJ', 'gambar2.jpg'),
(3, 'Rizal', '124234653', 'rizal@gmail.com', 'DKV', 'gambar3.png'),
(4, 'Jamaludin', '092311842', 'jamaludin@gmail.com', 'TKR', 'gambar4.jpg'),
(5, 'Asep', '051682769', 'asep@gmail.com', 'TKJ', 'gambar5.jpg'),
(6, 'Ilham', '957829486', 'ilham@gmail.com', 'RPL', 'gambar6.png'),
(7, 'Sumbul', '749275097', 'sumbul@gmail.com', 'TPL', 'gambar7.png'),
(8, 'Harry', '453423543', 'harry@gmail.com', 'TKJ', 'gambar8.jpg'),
(9, 'Rahmat', '932482343', 'rahmat@gmail.com', 'TP', 'gambar9.jpg'),
(10, 'Ali', '234132453', 'ali@gmail.com', 'TKR', 'gambar10.jpg'),
(11, 'aldi', '193738579', 'aldi@gmail.com', 'DKV', 'gambar4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;