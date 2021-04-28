-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 08:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE `acts` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acts`
--

INSERT INTO `acts` (`id`, `username`, `activity`, `time`) VALUES
(8, 'phiam123', 'LogIn', '2021-04-20 18:05:39'),
(9, 'phiam123', 'LogIn', '2021-04-20 20:20:20'),
(10, 'phiam123', 'LogIn', '2021-04-21 18:10:27'),
(11, 'ADMIN', 'LogIn', '2021-04-21 18:27:10'),
(12, 'phiam123', 'LogIn', '2021-04-22 17:30:56'),
(13, 'phiam123', 'ChangePassword', '2021-04-22 17:31:43'),
(14, 'phiam123', 'LogIn', '2021-04-22 17:32:12'),
(15, 'sophia', 'ChangePassword', '2021-04-22 17:43:48'),
(16, 'sophia', 'LogIn', '2021-04-22 17:50:04'),
(17, 'sophia', 'LogIn', '2021-04-22 17:50:20'),
(18, 'sophia', 'LogIn', '2021-04-22 17:51:15'),
(19, 'sophia', 'LogIn', '2021-04-22 17:52:10'),
(20, 'ADMIN', 'LogIn', '2021-04-22 17:53:13'),
(21, 'ADMIN', 'LogOut', '2021-04-22 17:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `authent`
--

CREATE TABLE `authent` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL,
  `curdate` varchar(50) NOT NULL,
  `endate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`id`, `username`, `otp`, `curdate`, `endate`) VALUES
(15, 'phiam123', 53329, '2021-04-20 18:05:33', '2021-04-20 18:10:33'),
(16, 'phiam123', 496196, '2021-04-20 20:20:15', '2021-04-20 20:25:15'),
(17, 'phiam123', 951688, '2021-04-21 18:10:21', '2021-04-21 18:15:21'),
(18, 'ADMIN', 519611, '2021-04-21 18:27:03', '2021-04-21 18:32:03'),
(19, 'phiam123', 521783, '2021-04-22 17:30:50', '2021-04-22 17:35:50'),
(20, 'phiam123', 265976, '2021-04-22 17:32:07', '2021-04-22 17:37:07'),
(21, 'sophia', 135039, '2021-04-22 17:44:38', '2021-04-22 17:49:38'),
(22, 'sophia', 493969, '2021-04-22 17:51:00', '2021-04-22 17:56:00'),
(23, 'ADMIN', 667759, '2021-04-22 17:53:08', '2021-04-22 17:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(44, 'phiam123', 'Phiam123456.', 'sophiamarie.guevarra@cvsu.edu.ph'),
(45, 'ADMIN', 'Admin123456.', 'admin@yahoo.com'),
(46, 'sophia', 'Sophia123456.', 'sophiamarieguevarra2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acts`
--
ALTER TABLE `acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authent`
--
ALTER TABLE `authent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acts`
--
ALTER TABLE `acts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `authent`
--
ALTER TABLE `authent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
