-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_list`
--

CREATE TABLE `school_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_list`
--

INSERT INTO `school_list` (`id`, `name`, `location`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'APSCN', 'Nagothane', '2022-10-28 10:10:00', 1, NULL, NULL),
(5, 'AA', 'AA', '2022-10-28 10:10:00', 1, NULL, NULL),
(6, 'AASSD', 'DSD', '2022-10-28 10:10:00', 1, NULL, NULL),
(7, 'DDSDS', 'ASSAD', '2022-10-28 10:10:00', 1, NULL, NULL),
(8, 'DS', 'DSDSD', '2022-10-28 10:10:00', 1, NULL, NULL),
(9, 'DRef', 'dgdfgf', '2022-10-28 10:10:00', 1, NULL, NULL),
(10, 'gfgdg', 'fdgdgd', '2022-10-28 10:10:00', 1, NULL, NULL),
(11, 'fdgg', 'dfgdgdg', '2022-10-28 10:10:00', 1, NULL, NULL),
(12, 'gfgfdgd', 'dgfdgdg', '2022-10-28 10:10:00', 1, NULL, NULL),
(13, 'rtetet', 'trtete', '2022-10-28 10:10:00', 1, NULL, NULL),
(14, 'rttete', 'dfgdg', '2022-10-28 10:10:00', 1, NULL, NULL),
(15, 'Eeaef', 'gfgdfgd', '2022-10-28 10:10:00', 1, NULL, NULL),
(16, 'AHJKHD', 'SALKJLD', '2022-10-28 10:10:00', 1, NULL, NULL),
(17, 'DSDJIJDS', 'JHDJLSD', '2022-10-28 10:10:00', 1, NULL, NULL),
(18, 'THANE', 'THAne', '2022-10-28 10:10:00', 1, NULL, NULL),
(19, 'DSLJHDSJL', 'SJHDDL', '2022-10-28 10:10:00', 1, NULL, NULL),
(20, 'FDJFIDLJK', 'DJHLSD', '2022-10-28 10:10:00', 1, NULL, NULL),
(21, 'xfdlkfds', 'gffjgk', '2022-10-28 10:10:00', 1, NULL, NULL),
(22, 'fgdkl', 'gfkgdhg', '2022-10-28 10:10:00', 1, NULL, NULL),
(23, 'fgfdghh', 'jkhkljl', '2022-10-28 10:10:00', 1, NULL, NULL),
(24, 'fgfhf', 'jhjhgj', '2022-10-28 10:10:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'sumit', 'sumit@gmail.com', '123456', '2022-10-28 07:10:00', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_list`
--
ALTER TABLE `school_list`
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
-- AUTO_INCREMENT for table `school_list`
--
ALTER TABLE `school_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
