-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 05:17 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `name` varchar(200) DEFAULT NULL,
  `RegNumber` varchar(200) NOT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `Expertise` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Organization` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `RegNumber`, `Qualification`, `Expertise`, `Email`, `Organization`, `Password`) VALUES
('Nahian Ahmed', '0000', 'MBBS ', 'php', 'diu', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Nahian', '111', 'bsc', 'php', 'diu', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Nahian Ahmed', '112', 'MBBS ', 'php', 'diu', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Professor Dr. Khandker Mahbubar Rahman', '18926', 'MBBS,MD (Neurology)', 'Neuromedicine', 'Apollo Hospitals Dhaka', 'Khandker@gamil.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
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

INSERT INTO `patient` (`name`, `username`, `email`, `nid`, `phone_no`, `password`) VALUES
('samrat', 'samrat01', 'nahianahmedcse@gmail.com', '1010', '090', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Nahian Ahmed', 'nahian', 'nahianahmedcse@gmail.com', '19965425404000057', '090', 'f54f2d90218260458011d60ef4bace9164149982b27a8828a14245425d246542');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
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

INSERT INTO `pharmacy` (`name`, `RegNumber`, `owner`, `address`, `Email`, `password`) VALUES
('Bug Free ', '1010', 'Nahian Ahmed', 'dhaka', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('nahian', '111', 'nahian', 'dhaka', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Bug Free Inc', '112', 'Nahian Ahmed', 'dhaka', 'nahianahmedcse@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
('Shafiq Medicin corner', '5439', 'Monsur Ahmed Shafiq', '30/1,sukrabad,dhanmondi,dhaka, charpara,karimgonj,kishoregonj', 'monsurahmedshafiq@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `MedicinName` varchar(500) NOT NULL,
  `Disease_info` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Describtion` varchar(500) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `DoctorID` varchar(100) NOT NULL,
  `PatientNID` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`MedicinName`, `Disease_info`, `Date`, `Describtion`, `dname`, `DoctorID`, `PatientNID`, `pid`) VALUES
('Napa perday 2 Time and take After Eating for 2 day. ', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 7),
('Napa perday 1 Time and take After Eating for 1 day. <br>SASA perday 2 Time and take After Eating for  day. <br>', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 8),
('Napa perday 2 Time and take After Eating for 1 day. <br>ee perday 2 Time and take After Eating for 1 day. <br>', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 9),
('Napa perday 2 Time and take After Eating for 3 day. <br>SASA perday 2 Time and take After Eating for 2 day. <br>ee perday 2 Time and take After Eating for 1 day. <br>ee perday 2 Time and take After Eating for 1 day. <br>ee perday 2 Time and take After Eating for 1 day. <br>', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 10),
('Napa perday 1 Time and take After Eating for 1 day. <br>SASA perday 2 Time and take After Eating for 1 day. <br>ee perday 2 Time and take After Eating for  day. <br>', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 11),
('Napa perday 1 Time and take Before Eating for 1 day. <br>', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '1010', 12),
('Napa perday 1 Time and take After Eating for 1 day. \nSASA perday 1 Time and take After Eating for 1 day. \nee perday 1 Time and take After Eating for 1 day. \n', 'cold fever', '2018/03/31', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 13),
('Napa perday 1 Time and take After Eating for 2 day. <br>', 'cold fever', '2018/04/01', 'stay wram', 'Professor Dr. Khandker Mahbubar Rahman', '18926', '19965425404000057', 14),
('Napa perday 1 Time and take Before Eating for 1 day. <br>', 'cold fever', '2018/04/01', 'stay wram', 'Nahian', '111', '1010', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sell_history`
--

CREATE TABLE `sell_history` (
  `PatientNID` varchar(100) NOT NULL,
  `pharma_id` varchar(100) NOT NULL,
  `MedicinName` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_history`
--

INSERT INTO `sell_history` (`PatientNID`, `pharma_id`, `MedicinName`, `date`, `price`, `quantity`) VALUES
('1010', '1010', 'dd', 'dd', 'dd', 0),
('1010', '1010', '', '', '', 0),
('19965425404000057', '111', 'Napa', '2018/03/31', '12', 6),
('1010', '111', 'NapaExpo', '2018/03/31', '12', 6),
('1010', '111', 'Napa', '2018/03/31', '12', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`RegNumber`),
  ADD UNIQUE KEY `RegNumber` (`RegNumber`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`RegNumber`),
  ADD UNIQUE KEY `RegNumber` (`RegNumber`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `DoctorID` (`DoctorID`),
  ADD KEY `PatientNID` (`PatientNID`);

--
-- Indexes for table `sell_history`
--
ALTER TABLE `sell_history`
  ADD KEY `PatientNID` (`PatientNID`),
  ADD KEY `pharma_id` (`pharma_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`DoctorID`) REFERENCES `doctor` (`RegNumber`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`PatientNID`) REFERENCES `patient` (`nid`);

--
-- Constraints for table `sell_history`
--
ALTER TABLE `sell_history`
  ADD CONSTRAINT `sell_history_ibfk_1` FOREIGN KEY (`PatientNID`) REFERENCES `patient` (`nid`),
  ADD CONSTRAINT `sell_history_ibfk_2` FOREIGN KEY (`pharma_id`) REFERENCES `pharmacy` (`RegNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
