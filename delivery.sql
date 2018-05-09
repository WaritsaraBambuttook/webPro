-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 03:39 PM
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
-- Database: `delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `DessertID` int(11) NOT NULL,
  `Dessert_name` varchar(30) NOT NULL,
  `PriceDessert` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`DessertID`, `Dessert_name`, `PriceDessert`, `img`) VALUES
(1, 'Smoothie', 69, 'image/dessert/21.jpg'),
(2, 'Pancake', 79, 'image/dessert/22.jpg'),
(3, 'Crepescake', 79, 'image/dessert/23.jpg'),
(4, 'BrownieCake', 49, 'image/dessert/24.jpg'),
(5, 'Strawberrycheesecake', 69, 'image/dessert/25.jpg'),
(6, 'DonutCake', 59, 'image/dessert/26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FoodID` int(11) NOT NULL,
  `Food_name` varchar(30) NOT NULL,
  `PriceFood` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FoodID`, `Food_name`, `PriceFood`, `img`) VALUES
(1, 'HealthySalad', 79, 'image/food/11.jpg'),
(2, 'Friedrice', 89, 'image/food/12.jpg'),
(3, 'soup', 79, 'image/food/13.jpg'),
(4, 'JapaneseCurryRice', 99, 'image/food/16.jpg'),
(5, 'Mixedsalad', 79, 'image/food/14.jpg'),
(6, 'Ricetopped ', 69, 'image/food/15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_ID` int(10) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_ID`, `Firstname`, `Lastname`, `Telephone`, `Email`, `Address`, `Username`, `Password`, `Status`) VALUES
(100001, 'nano', 'barbu', '0823722103', 'gg@hotmail.com', '135 M.4 UBon', 'nano', '123456', '1'),
(100002, 'fourry', 'bambut', '0837205339', 'four@hotmail.com', '136 M.4 UBon', 'fournukiz', '123789', '1'),
(100007, 'warit', 'charlee', '0856425897', 'ggfh@hotmail.com', 'hfdhdfhdfhdh', 'warit', '159951', '0');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ReportID` int(11) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Login_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ReportID`, `Product_name`, `Price`, `Count`, `Total`, `Login_ID`) VALUES
(59, 'BrownieCake', 49, 1, 49, 100007),
(60, 'BrownieCake', 49, 1, 49, 100007),
(61, 'DonutCake', 59, 1, 59, 100007),
(62, 'BrownieCake', 49, 1, 49, 100007),
(63, 'Ricetopped ', 69, 10, 690, 100007);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`DessertID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ReportID`),
  ADD KEY `Login_ID` (`Login_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `DessertID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `FoodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`Login_ID`) REFERENCES `login` (`Login_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
