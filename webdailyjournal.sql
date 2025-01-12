-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 02:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar_article` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar_article`, `tanggal`, `username`) VALUES
(1, 'Armada Kapal Perang', 'Penampakan Dari Armada Kapal Perang Rushia', '1276872178p.jpg', '2024-12-16 05:39:27', 'admin'),
(3, 'Tank Tempur', 'Penampakan Tank Tempur Andalan Prancis', '20241210052757.jpg', '2024-12-10 05:27:57', 'admin'),
(4, 'Pasukan Udara', 'Model Pesawat Yang Digunakan Untuk Kamikaze', '20241210053507.jpg', '2024-12-10 05:35:07', 'admin'),
(7, 'Partai Politik Jorki', 'Partai Jerman yang dibubarkan pada tahun 1945 karena bermasalah', '20250106195359.jpg', '2025-01-12 20:04:59', 'Caffu');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar_gallery` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar_gallery`, `username`, `tanggal`) VALUES
(16, '20250112155201.jpg', 'Rao', '2025-01-12 15:52:01'),
(17, '20250112155255.jpg', 'Rao', '2025-01-12 15:52:55'),
(18, '20250112155311.jpg', 'Rao', '2025-01-12 15:53:11'),
(19, '20250112194923.jpeg', 'admin', '2025-01-12 19:49:23'),
(20, '20250112195105.jpg', 'Caffu', '2025-01-12 19:51:05'),
(21, '20250112195149.jpg', 'Caffu', '2025-01-12 19:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'Rao', '0192023a7bbd73250516f069df18b500', ''),
(7, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(9, 'Sadjoeti', 'e4a5ef7c04c4cd0237130078250ae764', ''),
(10, 'Caffu', 'e97ab3d9bf80aa4431b0a56041da2a5e', ''),
(11, 'Wahyudi', 'b7f81eb62975c63ea39f2a01d528d931', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
