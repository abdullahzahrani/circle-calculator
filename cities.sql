-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 10:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cities`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ID` int(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ID`, `city_name`, `latitude`, `longitude`) VALUES
(1, 'Sydney', '-33.87', '-151.22'),
(2, 'Darwin', '-12.47', '-130.83'),
(3, 'Hong Kong', '22.28', '-114.15'),
(4, 'Darwin', '-12.47', '-130.83'),
(5, 'Hong Kong', '22.28', '-114.15'),
(6, 'Mumbai', '19', '-72.8'),
(7, 'Shanghai', '31.23', '-121.47'),
(8, 'Seoul', '37.55', '-126.97'),
(9, 'Copenhagen', '55.67', '-12.58'),
(10, 'Paris', '42.87', '-2.33'),
(11, 'Cairo', '30.05', '-31.25'),
(12, 'Cape Town', '-33.92', '-18.22'),
(13, 'Washington', '38.9', '77.03'),
(14, 'San Francisco', '37.78', '122.42'),
(15, 'Santiago', '-33.45', '70.67'),
(16, 'Recife', '-8.05', '34.87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
