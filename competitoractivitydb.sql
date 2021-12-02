-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competitoractivitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `competitoractivity`
--

CREATE TABLE `competitoractivity` (
  `Competitor_Name` varchar(50) NOT NULL,
  `Brand_Name` varchar(50) NOT NULL,
  `Market_Activity` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitoractivity`
--

INSERT INTO `competitoractivity` (`Competitor_Name`, `Brand_Name`, `Market_Activity`) VALUES
('', '', ''),
('Wisynco', 'Flavour Splash', 'Prices have dropped'),
('Fosco', 'Fosco Oat Milk', 'Prices have dropped'),
('Grace', 'Grace Tomato Ketchup', 'The design of the bottle has been changed.'),
('Wisynco', 'Juice', 'The design has changed'),
('Lasco', 'Lasco Food Drink', 'They have a new flavour'),
('Grace', 'Maggi Seasoning', 'Added a new flavour.'),
('Pepsi', 'Pepsi Soda', 'Added a new flavour');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ID` int(20) UNSIGNED NOT NULL,
  `Product Name` varchar(70) NOT NULL,
  `Stock on Shelf` int(30) NOT NULL,
  `Expiry Date` date NOT NULL,
  `Lot Number` int(45) NOT NULL,
  `Picture of Shelf` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersUid`, `usersEmail`, `usersPwd`) VALUES
(1, 'Lejandru Richards', 'Manager2 ma', 'Lejandru13@gmail.com', '$2y$10$THXYv8mLrun.8BTs5thfrewXykXVNY3zoZ96I/MkOUiDVdoEjUGkC'),
(2, 'Alex Chin', 'Merchandiser2me', 'Alex@gmail.com', '$2y$10$THXYv8mLrun.8BTs5thfrewXykXVNY3zoZ96I/MkOUiDVdoEjUGkC'),
(3, 'Paul Young', 'Paulme', 'paul23@hotmail.com', '$2y$10$4xpIFMmC1JQOfsOJ3nJnV.vY8YPB/J9PWk6dn/ipcDLdC0Gi1M5tG'),
(4, 'Abegayle Williams', 'Abema', 'abegayle.williams@gmail.com', '$2y$10$v6pAtzi3TSqa2hHJEnkH3erhdoWP4522lXUir/U9xBNbwLN88kwdS'),
(5, 'Olivia Hibbert', 'Oliveme', 'olivebranch@gmail.com', '$2y$10$.KpYyYfNmOoTy.DFE3mfxuCPvnfa89U9X/nRCOb./IAzsVULSrGIa'),
(6, 'Lenroy Hinds', 'Lenme', 'lenroy@gmail.com', '$2y$10$Sb0dzLTk5dcCuUwjPcal.Oz9mVrZlRRHWFj.RR.fq/FqFsCP36FYS'),
(7, 'Sarah Paulson', 'Sarahme', 'sarah@gmail.com', '$2y$10$x9F4alO8lxRQlJiKk2T/uOqYdD8YN5L1/jF231rUa4eQL3djWQqXe'),
(8, 'Andrew Word', 'Andrewme', 'andrew@gmail.com', '$2y$10$vE1LIpxnVo/ZKqliTrvQGOMXYLi6agh97B/ze9nqzh3VSIJPSj8MW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competitoractivity`
--
ALTER TABLE `competitoractivity`
  ADD PRIMARY KEY (`Brand_Name`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
