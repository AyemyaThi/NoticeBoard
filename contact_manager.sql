-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 08:32 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `address` text,
  `photo` varchar(155) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `address`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Nay Lin', '09790552779', 'naysumyat@gmail.com', 'No.95/96,', NULL, '2017-05-20 06:11:35', NULL),
(2, 'Hla Hla', '095114579', 'hlahla@gmail.com', 'EMS Centre, Hantharwaddy Circle, Yangon, Myanmar.', '1495261695_557477.jpg', '2017-05-20 01:58:15', '2017-05-20 01:58:15'),
(3, 'Mya Mya', '09790552779', 'naysumyat2012@gmail.com', '', '1495261763_895977.jpg', '2017-05-20 01:59:23', '2017-05-20 01:59:23'),
(4, 'Nyo Nyo', '09794665332', '', '', '1495261797_729762.jpg', '2017-05-20 01:59:57', '2017-05-20 01:59:57'),
(5, 'Maw Maw', '09794665332', '', '', NULL, '2017-05-20 02:01:47', '2017-05-20 02:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
