-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2024 at 01:25 PM
-- Server version: 8.0.34
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient2_thakur`
--

-- --------------------------------------------------------

--
-- Table structure for table `thakur`
--

CREATE TABLE `thakur` (
  `id` bigint NOT NULL,
  `temp` varchar(120) NOT NULL,
  `ecg` varchar(120) NOT NULL,
  `fal` varchar(120) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `thakur`
--

INSERT INTO `thakur` (`id`, `temp`, `ecg`, `fal`, `createdat`) VALUES
(1, '30', '120', 'YES', '2024-03-21 08:47:35'),
(2, '59', '0', 'NO', '2024-03-21 11:11:37'),
(3, '37', '0', 'YES', '2024-03-21 11:14:05'),
(4, '53', '0', 'NO', '2024-03-22 06:59:39'),
(5, '45', '0', 'YES', '2024-03-22 07:00:28'),
(6, '59', '0', 'NO', '2024-03-22 07:22:44'),
(7, '48', '0', 'YES', '2024-03-22 07:23:32'),
(8, '40', '332', 'YES', '2024-03-22 07:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thakur`
--
ALTER TABLE `thakur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thakur`
--
ALTER TABLE `thakur`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
