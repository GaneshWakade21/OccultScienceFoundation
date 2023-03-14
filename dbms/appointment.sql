-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 01:05 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` varchar(50) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `fathers_name` varchar(25) NOT NULL,
  `date_of_birth` date NOT NULL,
  `AGE` int(11) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `time_of_birth_hours` varchar(35) NOT NULL,
  `time_of_birth_min` varchar(35) NOT NULL,
  `time_of_birth_shift` varchar(25) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `time_of_booking` varchar(35) NOT NULL,
  `booking_slot` varchar(35) NOT NULL,
  `fee` int(255) NOT NULL,
  `upi` varchar(20) NOT NULL,
  `upi_phone_number` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_details` varchar(100) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `query_type` varchar(100) NOT NULL,
  `date_of_appointement` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `middle_name`, `last_name`, `fathers_name`, `date_of_birth`, `AGE`, `profession`, `gender`, `email`, `phone_number`, `time_of_birth_hours`, `time_of_birth_min`, `time_of_birth_shift`, `city`, `state`, `time_of_booking`, `booking_slot`, `fee`, `upi`, `upi_phone_number`, `amount`, `transaction_details`, `remarks`, `query_type`, `date_of_appointement`) VALUES
('PJF0915', 'PAWAN KUMAR', 'KUMAR', 'JHA', 'Jitender', '2023-02-09', 0, 'GovtEmployee', 'Female', 'pjha2186@gmail.com', 9152380358, '5:00', '03', 'PM', 'THANE', 'Maharashtra', '9:00AM - 10:00AM', '15min', 150, 'BharatPay', 9152380358, 3000, 'PJF0915996f82c8-0007-4ccf-8c66-465a4ee360f9.jpg', 'Hogaya', 'Relationships', '2023-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
