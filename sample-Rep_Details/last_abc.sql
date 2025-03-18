-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 06:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abccompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `rep`
--

CREATE TABLE `rep` (
  `repid` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rep`
--

INSERT INTO `rep` (`repid`, `name`, `startdate`) VALUES
('S001', 'madhusanka', '2020-11-08'),
('S003', 'thisara', '2023-10-17'),
('S004', 'thisara', '2020-10-10'),
('S005', 'theee', '2020-12-23'),
('S006', 'thisara', '2020-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `itemno` varchar(10) NOT NULL,
  `description` varchar(10) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `soldquantity` varchar(10) NOT NULL,
  `repid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`itemno`, `description`, `unitprice`, `soldquantity`, `repid`) VALUES
('A001', 'keybord', '1233', '12', 'S006'),
('A002', 'mouse', '1200', '10', 'S003'),
('A005', 'moniters', '30000', '5', 'S003'),
('A006', 'hard drive', '6990', '6', 'S001'),
('A007', 'printer', ' 50000', '30', 'S001'),
('A008', 'ssss', '12', '30', 'S006'),
('A010', 'aa', 'aa', 'aa', 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `repid` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`repid`, `username`, `password`) VALUES
('S001', '', '202cb962ac59075b964b07152d234b70'),
('S002', 'thisara', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rep`
--
ALTER TABLE `rep`
  ADD PRIMARY KEY (`repid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`itemno`),
  ADD KEY `repid` (`repid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`repid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`repid`) REFERENCES `rep` (`repid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
