-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 10:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbuckscoffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `ID` int(10) NOT NULL,
  `Name` varchar(130) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Size` char(5) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`ID`, `Name`, `Price`, `Size`, `Image`) VALUES
(1, 'Cà phê Americano', '30000', 'M', 'https://www.starbucks.vn/media/Caffe-Americano_tcm90-2059_w1024_n.jpg'),
(2, 'Cà Phê Mocha', '50000', 'M', 'https://www.starbucks.vn/media/caffee-mocha_tcm90-24781_w1024_n.jpg'),
(3, 'Caramel Macchiato', '45000', 'L', 'https://www.starbucks.vn/media/caramel-macchiato-thumb_tcm90-11384_w1024_n.jpg'),
(4, 'Caramel Macchiato Đá', '50000', 'L', 'https://www.starbucks.vn/media/IcedCaramelMacchiato-pt_tcm90-11270_w1024_n.jpg'),
(5, 'Cappuccino', '40000', 'M', 'https://www.starbucks.vn/media/Cappuccino_tcm90-2066_w1024_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
