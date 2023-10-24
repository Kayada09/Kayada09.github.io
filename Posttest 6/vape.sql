-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 12:40 PM
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
-- Database: `vape`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_vape`
--

CREATE TABLE `tb_vape` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_vape`
--

INSERT INTO `tb_vape` (`id`, `nama`, `harga`, `stock`, `foto`) VALUES
(1, 'koil', 11111, 1, 'koil.png'),
(3, 'sadsada', 10000, 1000, 'sadsada.png'),
(4, 'adsdada', 0, 200, 'adsdada.png'),
(5, 'dsadas', 90000, 1, 'dsadas.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_vape`
--
ALTER TABLE `tb_vape`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_vape`
--
ALTER TABLE `tb_vape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
