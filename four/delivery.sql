-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 05:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(6) NOT NULL,
  `FirstnameAD` varchar(30) NOT NULL,
  `LastnameAD` varchar(30) NOT NULL,
  `AddressAD` varchar(60) NOT NULL,
  `TelephoneAD` int(10) NOT NULL,
  `EmailAD` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstnameAD`, `LastnameAD`, `AddressAD`, `TelephoneAD`, `EmailAD`) VALUES
(1, 'waritsara', 'bambuttook', '135 M.4 Banbungwai Warimchamrap UBon', 823722103, 'four_nukiz@hotmail.com'),
(2, 'nano', 'gg', '134 M.5 holtel', 856493156, 'gg_ht@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(6) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Firstname`, `Lastname`, `DOB`, `address`, `Telephone`, `Email`) VALUES
(100001, 'four', 'kartly', '2017-12-27', '135/4 Ubon', 823722103, 'four_kk@hotmail.com'),
(100002, 'nano', 'naruto', '2017-10-17', '159/61 Bangkok', 856425361, 'hotgirl@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `DessertID` int(6) NOT NULL,
  `Dessert_name` varchar(25) NOT NULL,
  `PriceDessert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`DessertID`, `Dessert_name`, `PriceDessert`) VALUES
(400001, 'cake', 75),
(400002, 'coco', 55);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FoodID` int(6) NOT NULL,
  `Foodname` varchar(25) NOT NULL,
  `PriceFood` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FoodID`, `Foodname`, `PriceFood`) VALUES
(300001, 'seafood', 500),
(300002, 'PadThai', 120);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ReportID` int(11) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Customer_Fname` varchar(30) NOT NULL,
  `Customer_Lname` varchar(30) NOT NULL,
  `Address_Customer` varchar(30) NOT NULL,
  `Telephone_Customer` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

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
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ReportID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
