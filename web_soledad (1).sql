-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 07:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_soledad`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Zone_Street` varchar(50) NOT NULL,
  `Name_Official` varchar(50) NOT NULL,
  `Appointment_for` varchar(50) NOT NULL,
  `Date_Appointment` date NOT NULL,
  `Time_Appointment` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Fullname`, `Zone_Street`, `Name_Official`, `Appointment_for`, `Date_Appointment`, `Time_Appointment`) VALUES
(1, 'asasda', 'mnas dmsan  ', 'sadsa', ' assa', '2022-11-22', '18:00:00.00000'),
(2, 'Jessie Perlora', 'Zone 6 Balintawak ', 'bjasbdasd', ' afafsd', '2022-11-22', '06:25:00.00000'),
(3, 'Jessie Perlora', 'Zone 6 Balintawak ', 'bjasbdasd', ' afafsd', '2022-11-22', '06:25:00.00000'),
(4, 'koy Versoza', 'Zone 5 Balintawak ', 's', ' s', '2022-11-22', '06:25:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Fullname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Fullname`, `Username`, `Password`) VALUES
('adrian', 'adr', '12345'),
('koy Versoza', 'jess', 'perlora'),
('Jessie Versoza Perlora', 'Jversoza', '12345678'),
('Jessie Versoza', 'JVersoza', 'perlora'),
('Jess Perlora', 'Zup', 'perlora');

-- --------------------------------------------------------

--
-- Table structure for table `soledad`
--

CREATE TABLE `soledad` (
  `Fullname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soledad`
--

INSERT INTO `soledad` (`Fullname`, `Username`, `Password`) VALUES
('Jessie Perlora', 'admin', 'soledad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
