-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 09:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banana_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `check_id` int(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`check_id`, `FullName`, `Contact`, `Email`, `Address`) VALUES
(1, 'Aura Lintang', '0283972093', 'auralintang4@gmail.com', 'Dasana Indah Blok UB 4/24'),
(2, 'Aura Lintang', '0283972093', 'auralintang4@gmail.com', 'Dasana Indah Blok UB 4/24');

-- --------------------------------------------------------

--
-- Table structure for table `regis_login`
--

CREATE TABLE `regis_login` (
  `id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `RePassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis_login`
--

INSERT INTO `regis_login` (`id`, `Username`, `Email`, `Telepon`, `Password`, `RePassword`) VALUES
(1, 'auraalntng', 'auralintang4@gmail.com', '081585475032', 'aura123', 'aura123'),
(2, 'user', 'user@gmail.com', '0827564980', 'user123', 'user123'),
(4, 'username', 'name@gmail.com', '081383825580', 'name123', 'name123'),
(5, 'acaaa', 'acaa@gmail.com', '086423719123', 'aca123', 'aca123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `regis_login`
--
ALTER TABLE `regis_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `check_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regis_login`
--
ALTER TABLE `regis_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
