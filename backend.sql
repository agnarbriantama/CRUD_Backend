-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 07:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputan`
--

CREATE TABLE `inputan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inputan`
--

INSERT INTO `inputan` (`id_makanan`, `nama_makanan`, `menu`, `alamat`, `foto`) VALUES
(1, 'Dapoenakk', '- Ayam Suwir    Rp 10.000\r\n- Ayam Pop      Rp. 10.000', 'Jl. Jayengan', 'WhatsApp Image 2021-05-19 at 12.59.08.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputan`
--
ALTER TABLE `inputan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputan`
--
ALTER TABLE `inputan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
