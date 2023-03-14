-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrology`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` mediumtext NOT NULL,
  `response_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `message`, `response_time`) VALUES
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:40:15.000000'),
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:42:11.000000'),
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:42:43.000000'),
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:43:38.000000'),
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:43:43.000000'),
('PAWAN KUMAR JHA', 'pjha2186@gmail.com', 9152380358, 'hiii', '2023-02-01 09:44:37.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
