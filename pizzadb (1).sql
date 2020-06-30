-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 01:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(11) NOT NULL,
  `OUID` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `TEL` varchar(200) DEFAULT NULL,
  `DTREG` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ADDRESS` text,
  `STATUS` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OID`, `OUID`, `EMAIL`, `TEL`, `DTREG`, `ADDRESS`, `STATUS`) VALUES
(22, '4e029892a2d0c00e8bdda3dae9c658a5', NULL, '0032232323', '2020-06-30 00:24:01', NULL, 1),
(23, '934b0f38fca9e09e7fe757e07fd03cce', NULL, '1515458454', '2020-06-30 00:56:32', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `IDO` int(11) NOT NULL,
  `OUID` varchar(200) DEFAULT NULL,
  `PROD` varchar(200) DEFAULT NULL,
  `QTY` decimal(10,2) DEFAULT NULL,
  `PRICE` decimal(10,2) DEFAULT NULL,
  `DTREG` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`IDO`, `OUID`, `PROD`, `QTY`, `PRICE`, `DTREG`, `STATUS`) VALUES
(47, '4e029892a2d0c00e8bdda3dae9c658a5', 'SURPRISE', '1.00', '14.50', '2020-06-30 00:24:01', 1),
(48, '4e029892a2d0c00e8bdda3dae9c658a5', 'COLA', '1.00', '2.00', '2020-06-30 00:24:01', 1),
(49, '4e029892a2d0c00e8bdda3dae9c658a5', 'SPRITE', '1.00', '2.00', '2020-06-30 00:24:01', 1),
(50, '4e029892a2d0c00e8bdda3dae9c658a5', 'MARINARA', '1.00', '15.00', '2020-06-30 00:24:01', 1),
(51, '934b0f38fca9e09e7fe757e07fd03cce', 'COLA', '1.00', '2.00', '2020-06-30 00:56:31', 1),
(52, '934b0f38fca9e09e7fe757e07fd03cce', 'SPRITE', '1.00', '2.00', '2020-06-30 00:56:31', 1),
(53, '934b0f38fca9e09e7fe757e07fd03cce', 'SURPRISE', '2.00', '14.50', '2020-06-30 00:56:31', 1),
(54, '934b0f38fca9e09e7fe757e07fd03cce', 'MARINARA', '1.00', '15.00', '2020-06-30 00:56:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `IDPIZZA` int(11) NOT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `RECIPE` varchar(250) DEFAULT NULL,
  `PRICE` decimal(10,2) DEFAULT NULL,
  `CATEGORY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`IDPIZZA`, `NAME`, `RECIPE`, `PRICE`, `CATEGORY`) VALUES
(1, 'SURPRISE', 'HAM, MUSHROOM, CAPSICUM, SALAMI, OLIVES, ANCHOVIES, CHEESE', '14.50', 1),
(2, 'MARINARA', 'SEAFOOD MIX, MUSHROOM, OLIVES , CHEESE', '15.00', 1),
(3, 'CHICKEN', 'CHICKEN, ONION, MUSHROOM, CHEESE', '14.30', 1),
(4, 'MEATLOVERS', 'HAM, CHICKEN, SALAMI, CHEESE, BAcon', '14.60', 1),
(5, 'SWEET CHILLI CHICKEN', 'SWEET CHILLI SAUCE, CHICKEN , ONION, PINEAPPLE, CHEESE', '13.50', 1),
(6, 'TROPICAL', 'HAM, PINEAPPLE , CHEESE', '13.50', 1),
(7, 'VEGETARIAN', 'MUSHROOM, CAPSIUM, OLIVES, CHEESE', '13.50', 1),
(8, 'NAPOLI', 'OREGANO, ANCHOVIES, CHEESE', '12.50', 1),
(9, 'GARLIC', 'GARLIC  , CHEESE', '12.00', 1),
(10, 'ITALIANO', 'SALAMI, GARLIC, CHEESE, SUNDRIED TOMATOES, SPINACH, OLIVES  FETA CHEESE', '14.30', 1),
(11, 'LAMB', 'LAMB , GARLICM CHEESE , SPINACH, RED ONION, TOMATOES, FETA CHEESE  , TZATZIKI SAUCE', '14.60', 1),
(12, 'COLA', 'REGUAL COLA 0.75', '2.00', 2),
(13, 'SPRITE', 'REGULAR SPRITE 0.75', '2.00', 2),
(14, 'FANTA', 'REGULAR FANTA 0.75', '2.00', 2),
(15, 'COLA ZERO', 'COLA ZERO 0.75', '2.00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`IDO`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`IDPIZZA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `IDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `IDPIZZA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
