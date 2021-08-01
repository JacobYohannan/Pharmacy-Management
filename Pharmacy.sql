-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 06:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LID` int(30) NOT NULL,
  `CID` int(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LID`, `CID`, `PASSWORD`, `TYPE`, `NAME`) VALUES
(3, 0, 'admin', 'admin', 'admin'),
(31, 1, 'ajil@1', 'staff', 'Ajil Baby'),
(32, 2, 'john@2', 'staff', 'John George'),
(33, 3, 'jacob@3', 'staff', 'Jacob Yohannan'),
(34, 4, 'a@1', 'staff', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(11) NOT NULL,
  `PCODE` varchar(15) NOT NULL,
  `PROD` varchar(30) NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `PHARMA` varchar(30) NOT NULL,
  `BASICUNIT` varchar(30) NOT NULL,
  `RACKNO` int(11) NOT NULL,
  `EXPDATE` date NOT NULL,
  `MRP` int(30) NOT NULL,
  `RATE` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PCODE`, `PROD`, `BRANCH`, `PHARMA`, `BASICUNIT`, `RACKNO`, `EXPDATE`, `MRP`, `RATE`) VALUES
(2, '100', 'Paracetamol', 'TABLETS', 'CIPLA', 'NO', 2, '2025-07-11', 3, 5),
(3, '101', 'Aspirin', 'TABLETS', 'CIPLA', 'NO', 8, '2023-07-14', 12, 10),
(4, '102', 'Acne', 'ANTIBIOTICS', 'MEDILIFE', 'NO', 8, '2024-07-12', 20, 20),
(5, '103', 'Cipro', 'ANTIBIOTICS', 'CIPLA', 'NO', 2, '2023-07-07', 35, 28),
(6, '104', 'Cofsils', 'SYRUPS', 'CIPLA', 'NO', 7, '2025-06-06', 90, 85),
(7, '105', 'Benadryl', 'SYRUPS', 'CIPLA', 'NO', 5, '2025-11-25', 120, 115);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SID` int(30) NOT NULL,
  `BILLID` int(11) NOT NULL,
  `PCODE` int(11) NOT NULL,
  `DATE` varchar(11) NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `DISCOUNT` int(30) NOT NULL,
  `SP` int(11) NOT NULL,
  `QUANTITY` int(30) NOT NULL,
  `TOTAL` varchar(30) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SID`, `BILLID`, `PCODE`, `DATE`, `TIME`, `DISCOUNT`, `SP`, `QUANTITY`, `TOTAL`, `STATUS`) VALUES
(17, 0, 102, '2021-02-28', '14:29:21', 0, 10, 10, '100', 'sold'),
(18, 0, 101, '2021-02-28', '14:29:30', 0, 2, 56, '112', 'sold'),
(19, 0, 101, '2021-02-28', '14:31:42', 2, 2, 10, '19.6', 'sold'),
(20, 0, 101, '2021-02-28', '14:35:51', 0, 2, 10, '20', 'sold'),
(21, 0, 103, '2021-02-28', '14:39:42', 0, 200, 10, '2000', 'sold'),
(22, 0, 103, '2021-02-28', '14:40:33', 0, 200, 10, '2000', 'sold'),
(23, 0, 123, '2021-03-01', '10:39:26', 0, 5, 10, '50', 'sold'),
(24, 0, 123, '2021-03-01', '13:31:52', 0, 5, 10, '50', 'sold'),
(29, 0, 101, '2021-03-05', '08:01:18', 2, 10, 2, '19.6', 'sold'),
(31, 0, 101, '2021-03-05', '08:14:40', 2, 10, 3, '29.4', 'sold'),
(33, 0, 103, '2021-03-06', '07:47:46', 0, 28, 3, '84', 'sold'),
(34, 0, 104, '2021-03-06', '07:48:00', 0, 85, 1, '85', 'sold'),
(35, 0, 104, '2021-03-06', '07:51:29', 0, 85, 2, '170', 'sold'),
(36, 0, 101, '2021-03-06', '09:18:12', 0, 10, 10, '100', 'sold'),
(37, 0, 105, '2021-03-06', '09:45:27', 0, 115, 10, '1150', 'sold'),
(38, 0, 101, '2021-03-06', '10:01:07', 0, 10, 2, '20', 'sold'),
(39, 0, 102, '2021-03-06', '10:01:38', 10, 20, 3, '54', 'sold'),
(40, 0, 101, '2021-03-06', '10:05:59', 0, 10, 10, '100', 'sold'),
(41, 0, 104, '2021-03-06', '10:10:57', 0, 85, 8, '680', 'sold');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staffid` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Place` varchar(15) NOT NULL,
  `Pincode` int(15) NOT NULL,
  `Mobile_No` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staffid`, `Name`, `Place`, `Pincode`, `Mobile_No`, `Email`, `Password`) VALUES
('1', 'Ajil Baby', 'Muvattupuzha', 686661, '9786756434', 'ajilbaby001@gmail.com', 'ajil@1'),
('2', 'John George', 'Kothamangalam', 686662, '8596621479', 'john002@gmail.com', 'john@2'),
('3', 'Jacob Yohannan', 'Muvattupuzha', 686671, '7560991848', 'jacob003@gmail.com', 'jacob@3'),
('4', 'A', 'Muvattupuzha', 686897, '7560991847', 'a1@gmail.com', 'a@1');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `PCODE` varchar(15) NOT NULL,
  `STID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `PRODUCT` varchar(30) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`PCODE`, `STID`, `PID`, `PRODUCT`, `QUANTITY`) VALUES
('100', 2, 2, 'Paracetamol', 1964),
('101', 3, 3, 'Aspirin', 973),
('102', 4, 4, 'Acne', 497),
('103', 5, 5, 'Cipro', 497),
('104', 6, 6, 'Cofsils', 89),
('105', 7, 7, 'Benadryl', 90);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `BILLID` int(11) NOT NULL,
  `DATE` varchar(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `TOT` int(11) NOT NULL,
  `DISCOUNT` int(11) NOT NULL,
  `BAL` int(11) NOT NULL,
  `PAID` int(11) NOT NULL,
  `CUSTOMER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`BILLID`, `DATE`, `NAME`, `TOT`, `DISCOUNT`, `BAL`, `PAID`, `CUSTOMER`) VALUES
(1, '2021-03-06', 'A', 170, 0, 0, 0, 'B'),
(2, '2021-03-06', 'Jacob Yohannan', 100, 0, 0, 0, 'A'),
(3, '2021-03-06', 'a', 1150, 0, 0, 0, 'b'),
(4, '2021-03-06', 'Jacob Yohannan', 74, 0, 0, 0, 'A'),
(5, '2021-03-06', 'Ajil Baby', 100, 0, 0, 0, 'Alwin'),
(6, '2021-03-06', 'ajj', 680, 0, 0, 0, 'err');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staffid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`STID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`BILLID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `STID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `BILLID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
