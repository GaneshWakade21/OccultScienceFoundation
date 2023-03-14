-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:44 PM
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_type` varchar(100) NOT NULL,
  `course_duration` varchar(100) NOT NULL,
  `enrollement_date` date NOT NULL,
  `end_date` date NOT NULL,
  `course_fee` int(255) NOT NULL,
  `date_of_payment` date NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `total_fees` bigint(20) NOT NULL,
  `monthly_emi` int(255) NOT NULL,
  `remaining_fee` int(255) NOT NULL,
  `no_of_classes` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_type`, `course_duration`, `enrollement_date`, `end_date`, `course_fee`, `date_of_payment`, `payment_mode`, `payment_type`, `total_fees`, `monthly_emi`, `remaining_fee`, `no_of_classes`, `status`) VALUES
('FBB400020230221200223011124', 'fjhgsdg', 'basic', 'basic', '2023-02-21', '2023-02-26', 142, '2023-02-20', 'Offiline', 'UPI', 4000, 2000, 3000, 'one', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
