-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2024 at 04:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IUTA`
--
CREATE DATABASE IF NOT EXISTS `IUTA` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `IUTA`;

-- --------------------------------------------------------

--
-- Table structure for table `mat1`
--

CREATE TABLE `mat1` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mat1`
--

INSERT INTO `mat1` (`id`, `title`, `description`, `date`) VALUES
(26, 'Fundamentos de Redes', 'Examen / Infografia', '2024-10-14'),
(27, 'Dispositivos / Topologías', 'Expo / Trabajo', '2024-10-28'),
(28, 'Modelo TCP / IP', 'Defensa / Video', '2024-11-11'),
(29, 'Direccionamiento y Subredes', 'Ejercicio Grupal / Examen', '2024-11-25'),
(30, 'Tecnología de Redes', 'Expo / Trabajo', '2024-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mat1`
--
ALTER TABLE `mat1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mat1`
--
ALTER TABLE `mat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
