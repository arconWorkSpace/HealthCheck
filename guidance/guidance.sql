-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 12:13 PM
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
-- Database: `guidance`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `appointmentid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `student` varchar(25) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `attended` tinyint(1) DEFAULT NULL,
  `password` varchar(110) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `week` int(11) NOT NULL,
  `monday` timestamp(6) NULL DEFAULT NULL,
  `tuesday` timestamp(6) NULL DEFAULT NULL,
  `wednesday` timestamp(6) NULL DEFAULT NULL,
  `thursday` timestamp(6) NULL DEFAULT NULL,
  `friday` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`appointmentid`, `username`, `email`, `student`, `usertype`, `attended`, `password`, `date`, `week`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(1, 'mrs.xx', 'mrsxx@gmail.com', '', 'admin', NULL, '1234', '0000-00-00 00:00:00.000000', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'allan walker', 'allanwalker@gmail.com', 'mrs.xx', 'student', NULL, '1234', '2024-02-19 06:13:46.963006', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'doe', 'janedoe@gmail.com', '', 'student', NULL, '$2y$10$KDsa/pXdyq4IbCKy9jp2eOdXUYz1UR5IIOrPMGKKlwS4e2mynQY4y', '2024-02-19 08:29:59.301477', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, 'mike', 'mike@gmail.com', '', 'student', NULL, '1234', '2024-02-19 10:40:24.873908', 0, NULL, NULL, NULL, NULL, NULL),
(8, 'samantha', 'samantha@gmail.com', '', 'admin', NULL, '$2y$10$tvUOTv8bbcldOqrFYFhYq.Ry.WndGjFtVoBsDA4KZBR5uSkPhNz9u', '0000-00-00 00:00:00.000000', 0, NULL, NULL, NULL, NULL, NULL),
(14, 'mike', 'mike@gmail.com', '', '', NULL, '', '2024-02-19 11:11:46.190299', 0, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`appointmentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
