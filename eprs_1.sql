-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 06:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprs`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `RegNumber` varchar(200) DEFAULT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `Expertise` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Organization` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `RegNumber`, `Qualification`, `Expertise`, `Email`, `Organization`, `Password`) VALUES
(10, 'Nahian', '111', 'bsc', 'php', 'diu', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(11, 'Nahian Ahmed', '112', 'MBBS ', 'php', 'diu', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(12, 'Professor Dr. Khandker Mahbubar Rahman', '18926', 'MBBS,MD (Neurology)', 'Neuromedicine', 'Apollo Hospitals Dhaka', 'Khandker@gamil.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `username`, `email`, `nid`, `phone_no`, `password`) VALUES
(1, 'nahian', 'nahian', 'nahianahmedcse@gmail.com', '19965425404000057', '090', 'f54f2d90218260458011d60ef4bace9164149982b27a8828a14245425d246542');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `RegNumber` varchar(200) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `RegNumber`, `owner`, `address`, `Email`, `password`) VALUES
(3, 'nahian', '111', 'nahian', 'dhaka', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(4, 'Bug Free Inc', '112', 'Nahian Ahmed', 'dhaka', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(5, 'Shafiq Medicin corner', '5439', 'Monsur Ahmed Shafiq', '30/1,sukrabad,dhanmondi,dhaka, charpara,karimgonj,kishoregonj', 'monsurahmedshafiq@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `PatientNID` varchar(100) NOT NULL,
  `MedicinName` varchar(250) NOT NULL,
  `DogePerDay` int(10) NOT NULL,
  `TimeinaDay` varchar(100) NOT NULL,
  `Duration` int(10) NOT NULL,
  `BeforAfterEat` varchar(100) NOT NULL,
  `FileOrReport` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `DrName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `PatientNID`, `MedicinName`, `DogePerDay`, `TimeinaDay`, `Duration`, `BeforAfterEat`, `FileOrReport`, `Date`, `DrName`) VALUES
(2, '19965425404000057', 'Napa', 2, '2 Time a day', 3, 'Befor Eat', 'cold Fever ', '2018/03/16', 'Nahian'),
(3, '19965425404000057', 'Napa Extra', 2, '2 Time a day', 3, 'After Eat', 'Fever ', '2018/03/17', 'Nahian'),
(4, '123', 'Napa', 2, '1 Time a day', 3, 'After Eat', 'cold Fever ', '2018/03/17', 'Nahian Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `sell_history`
--

CREATE TABLE `sell_history` (
  `id` int(11) NOT NULL,
  `PatientNID` varchar(100) NOT NULL,
  `pharma_id` varchar(100) NOT NULL,
  `MedicineName` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_history`
--

INSERT INTO `sell_history` (`id`, `PatientNID`, `pharma_id`, `MedicineName`, `date`, `price`, `quantity`) VALUES
(4, '19965425404000057', '111', 'Napa', '2018/03/17', 12, 6),
(5, '123', '111', 'xyz', '2018/03/1', 10, 4),
(6, '19965425404000057', '111', 'NapaEx', '2018/03/18', 12, 6),
(7, '12345', '111', 'NapaExpo', '2018/03/17', 12, 6),
(8, '12345', '112', 'nc', '2018/03/18', 56, 13),
(9, '19965425404000057', '112', 'tab. nervo B', '2018/03/29', 240, 30),
(10, '19965425404000057', '5439', 'tab. Bost', '2018/03/29', 240, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RegNumber` (`RegNumber`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`,`username`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RegNumber` (`RegNumber`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_history`
--
ALTER TABLE `sell_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sell_history`
--
ALTER TABLE `sell_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
