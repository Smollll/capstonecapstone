-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 11:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_creation`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `lessonid` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `coursename` varchar(165) NOT NULL,
  `lessons` int(6) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`lessonid`, `instructor`, `coursename`, `lessons`, `description`) VALUES
(7, 'Juan Dela Cruz', 'Paano mag Palaki ng Talong', 5, 'sadasdas'),
(8, 'Juan Dela Cruz', 'Paano mag Palaki ng Talong vol 1', 5, 'asdasdad'),
(9, 'John Doe', 'Paano alisin ang kuto sa mga talong', 10, 'asdasdasdas'),
(10, 'John Doe', 'Paano mag Palaki ng Talong', 5, 'ffvfdgfd'),
(11, 'John Doe', 'Paano mag Palaki ng Talong', 5, 'dfdsfdsf'),
(12, 'John Doe', 'Paano mag Palaki ng Talong', 2, 'gdfgdf'),
(13, 'Juan de la torre', 'Paano alisin ang kuto sa mga talong', 2, 'dsadas'),
(14, 'John Doe', 'Paano mag Palaki ng Talong', 2, 'sdasd'),
(15, 'John Doe', 'Paano alisin ang kuto sa mga talong', 5, 'sadasdasd'),
(16, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'sdasd'),
(17, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'dasdas'),
(18, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'sadasd'),
(19, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'sadasd'),
(20, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'sdasdda'),
(21, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'dsadasd'),
(22, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'sadasd'),
(23, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'asdasd'),
(24, 'John Doe', 'Paano mag pataba ng Pechay', 2, 'asdasd'),
(25, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'asdasd'),
(26, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'asdasd'),
(27, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'dsadasd'),
(28, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'saS'),
(29, 'John Doe', 'Paano mag Palaki ng Talong vol 1', 5, 'palalakihin pa natin lalo'),
(30, 'John Doe', 'Paano mag Palaki ng Talong', 5, 'Palakihin ang Talong Mo in Just 5 lessons'),
(31, 'John Doe', 'Paano mag pataba ng Pechay', 5, 'Makatas at matabang Pechay iyong matitikman ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`lessonid`),
  ADD KEY `instructor` (`instructor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `lessonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
