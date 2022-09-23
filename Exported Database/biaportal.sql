-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2020 at 09:36 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biaportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `adminname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminname`, `password`) VALUES
('admin1', '1234'),
('admin2', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `biaregistration`
--

DROP TABLE IF EXISTS `biaregistration`;
CREATE TABLE IF NOT EXISTS `biaregistration` (
  `First_Name` varchar(25) NOT NULL,
  `Middle_Name` varchar(25) NOT NULL,
  `Sur_Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(55) NOT NULL,
  `Country_Code` varchar(30) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Origin_Country` varchar(45) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Residential_Address` varchar(200) NOT NULL,
  `Validation_Reg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaregistration`
--

INSERT INTO `biaregistration` (`First_Name`, `Middle_Name`, `Sur_Name`, `Email`, `Username`, `Password`, `Country_Code`, `Phone_Number`, `Origin_Country`, `Gender`, `Residential_Address`, `Validation_Reg`) VALUES
('sufiyan', 'Bin', 'Mohammad', 'sufiyan@gmail.com', 'sufiyan1', '123', 'United States of America (+1)', '5678904', 'Malaysia', 'male', '53 Kuala KL Lumpur Malaysia.', 'I consented');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Full_Name` varchar(80) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Full_Name`, `Email`, `Subject`, `Message`) VALUES
('Sufiyan Bin Mohammad', 'sufiyan@gmail.com', 'Hi Organization.', 'I want to thank you for coming to our meeting as the senior supervisor, I am glad that you as a team of the organization is motivated.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Email`) VALUES
('adumekwebenedict@gmail.com'),
('sufiyan@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
