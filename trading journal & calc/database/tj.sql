-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230125.6665289780
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tj`
--

CREATE TABLE `tj` (
  `id` int(11) NOT NULL,
  `profit` int(225) NOT NULL,
  `loss` int(255) NOT NULL,
  `setup` varchar(255) NOT NULL,
  `elee` varchar(255) NOT NULL,
  `afttpsl` varchar(255) NOT NULL,
  `estp` int(255) NOT NULL,
  `estl` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tj`
--

INSERT INTO `tj` (`id`, `profit`, `loss`, `setup`, `elee`, `afttpsl`, `estp`, `estl`) VALUES
(1, 10000, 0, 'y', 'n', 'none', 0, 0),
(2, 10000, 0, 'y', 'n', 'none', 0, 0),
(3, 10000, 0, 'y', 'n', 'none', 0, 0),
(4, 20000, 0, 'y', 'n', 'none', 0, 0),
(5, 0, -5000, 'y', 'n', 'none', 0, 0),
(6, 0, -5000, 'y', 'n', 'none', 0, 0),
(7, 0, -2500, 'n', 'n', 'none', 0, 0),
(8, 0, -2500, 'n', 'n', 'none', 0, 0),
(9, 0, -2500, 'y', 'y', 'tp', 5000, 0),
(10, 0, -2500, 'y', 'y', 'tp', 5000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tj`
--
ALTER TABLE `tj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tj`
--
ALTER TABLE `tj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
