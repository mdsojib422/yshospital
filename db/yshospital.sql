-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 04:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yshospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `ys_users`
--

CREATE TABLE `ys_users` (
  `id` int(55) NOT NULL,
  `flname` varchar(55) NOT NULL,
  `uname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `images` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ys_users`
--

INSERT INTO `ys_users` (`id`, `flname`, `uname`, `email`, `pass`, `images`) VALUES
(1, 'Sojib Chowdhury', 'codestrom22', 'mdsojib422@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'Sojib Chowdhury', 'codestrom', 'mdsojib421@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ys_users`
--
ALTER TABLE `ys_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ys_users`
--
ALTER TABLE `ys_users`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
