-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 10:29 PM
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
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `children` text DEFAULT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `kin_contact` varchar(20) DEFAULT NULL,
  `salvation_date` date DEFAULT NULL,
  `baptism_status` varchar(10) NOT NULL,
  `spiritual_gifts` text DEFAULT NULL,
  `preferred_service` varchar(50) DEFAULT NULL,
  `consent_notifications` tinyint(1) DEFAULT 0,
  `consent_media` tinyint(1) DEFAULT 0,
  `consent_data` tinyint(1) DEFAULT 0,
  `photo_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `full_name`, `dob`, `gender`, `marital_status`, `phone`, `email`, `spouse_name`, `children`, `next_of_kin`, `kin_contact`, `salvation_date`, `baptism_status`, `spiritual_gifts`, `preferred_service`, `consent_notifications`, `consent_media`, `consent_data`, `photo_path`) VALUES
(1, 'Thaddeaus Samuel', '2012-06-19', 'male', 'single', '08131993400', 'Sirunique2004@gmail.com', 'Love', 'Grace 17yrs', 'Theophilus', '09040014720', '2023-04-20', 'yes', 'Speaking in tongues', 'morning', 1, 1, 1, 'uploads/IMG-20241223-WA0030.jpg'),
(3, 'Thaddeaus Samuel', '2024-12-31', 'female', 'married', '08131993400', 'Binanceunique@gmail.com', 'Love', 'Gracw 78\r\nPeace 35', 'Theophilus', '09040014720', '2025-01-23', 'no', 'Healing, Word of Faith', 'youth', 1, 1, 1, 'uploads/IMG-20241223-WA0030.jpg'),
(4, 'Samuel Johnson', '1900-03-04', 'male', 'single', '08131993400', 'Sirunique2004@gmail.com', 'Gerrard', 'Mike 45\r\nBen 22', 'Daniel', '09040014720', '2003-03-04', 'yes', 'Prayer', 'youth', 1, 1, 1, 'uploads/IMG-20241223-WA0031.jpg'),
(5, 'Samuel Johnson', '1900-03-04', 'male', 'single', '08131993400', 'Sirunique2004@gmail.com', 'Gerrard', 'Mike 45\r\nBen 22', 'Daniel', '09040014720', '2003-03-04', 'yes', 'Prayer', 'youth', 1, 1, 1, 'uploads/IMG-20241223-WA0031.jpg'),
(6, 'Samuel Johnson', '0022-12-31', 'male', 'married', '08131993400', 'sirunique2004@gmail.com', 'Love', '23rr', 'Theophilus', '09040014720', '0022-02-04', 'no', '133', 'evening', 1, 1, 1, '0'),
(7, 'Samuel Johnson', '0022-12-31', 'male', 'married', '08131993400', 'sirunique2004@gmail.com', 'Love', '23rr', 'Theophilus', '09040014720', '0022-02-04', 'no', '133', 'evening', 1, 1, 1, '0'),
(8, 'Samuel Johnson', '2023-04-11', 'male', 'single', '33313e2', 'sirunique2004@gmail.com', '3r33', '3efdc', 'asdd', 'dfsd', '2121-12-04', 'yes', 'cddcd', 'morning', 1, 1, 1, '0'),
(9, 'Samuel Johnson', '0002-02-02', 'male', 'single', '08131993400', 'Binanceunique@gmail.com', '3r33', 'aaa', 'asas', '09933e', '0033-03-03', 'yes', 'none', 'morning', 1, 1, 1, '0'),
(10, 'Mara Clara', '2022-03-04', 'male', 'single', '08131993400', 'Sirunique2004@gmail.com', 'Love', 'Mercy 32\r\nJames 33', 'Lady Ok', '09040014720', '2010-04-10', 'yes', 'Tongueings', 'morning', 1, 1, 1, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
