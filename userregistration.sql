-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 11:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `email`) VALUES
('a', 'ec6a6536ca304edf844d1d248a4f08dc', '12'),
('aa', '3a029f04d76d32e79367c4b3255dda4d', 'as'),
('ddf', 'dff', 'ddf'),
('ewer', '22334', ''),
('f', '8fa14cdd754f91cc6554c9e71929cce7', 'd'),
('r', 'ec6a6536ca304edf844d1d248a4f08dc', '1234'),
('ras1111', '2222222', ''),
('rasel', '1234', ''),
('rasel ansary remon', '123456', 'remonansary@gmail.com'),
('rasel12', '1234', ''),
('re', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('remon', '', ''),
('remon1', '1234', ''),
('remon2', '12333', ''),
('remon21', '1234', ''),
('remon2we', 'sddffd', ''),
('remonansary1', '81dc9bdb52d04dc20036dbd8313ed055', 'ea'),
('sd', '12222', ''),
('wreew', '23333', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `email` (`name`(233));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
