-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 07:52 AM
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
-- Database: `gff`
--

-- --------------------------------------------------------

--
-- Table structure for table `abudabhievent_form_submissions`
--

CREATE TABLE `abudabhievent_form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `looking_for` enum('investment','expanding_business','other') NOT NULL,
  `investment_range` enum('2-20k-3-30k','3-30k-above') DEFAULT NULL,
  `details` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abudabhievent_form_submissions`
--

INSERT INTO `abudabhievent_form_submissions` (`id`, `name`, `email`, `phone`, `city`, `looking_for`, `investment_range`, `details`, `submitted_at`) VALUES
(1, 'abu', 'dabhi@e.com', '123', '23', 'investment', '2-20k-3-30k', 'sdsd', '2025-01-04 07:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qatarevent_form_submissions`
--

CREATE TABLE `qatarevent_form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `looking_for` enum('investment','expanding_business','other') NOT NULL,
  `investment_range` enum('2-20k-3-30k','3-30k-above') DEFAULT NULL,
  `details` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qatarevent_form_submissions`
--

INSERT INTO `qatarevent_form_submissions` (`id`, `name`, `email`, `phone`, `city`, `looking_for`, `investment_range`, `details`, `submitted_at`) VALUES
(1, 'qatar', 'event@g.cpm', '123', 'Greater Noida', 'expanding_business', '3-30k-above', 'as', '2025-01-04 07:32:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abudabhievent_form_submissions`
--
ALTER TABLE `abudabhievent_form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qatarevent_form_submissions`
--
ALTER TABLE `qatarevent_form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abudabhievent_form_submissions`
--
ALTER TABLE `abudabhievent_form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qatarevent_form_submissions`
--
ALTER TABLE `qatarevent_form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
