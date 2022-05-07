-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonshine`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(2) NOT NULL,
  `categoryTitle` varchar(100) NOT NULL,
  `categoryStatus` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryTitle`, `deliveryTime`, `categoryStatus`, `createdDate`) VALUES
(1, 'Special Order', 40, 'on', '1651859134'),
(2, 'Foreign Meal', 40, 'on', '1651859134');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientId` varchar(50) NOT NULL,
  `clientNames` varchar(50) NOT NULL,
  `clientLocation` varchar(50) NOT NULL,
  `clientPhone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientNames`, `clientLocation`, `clientPhone`) VALUES
('1641290211', 'Keza Bite', 'Huye', '250789754425');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` bigint(100) NOT NULL,
  `itemTitle` varchar(100) NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemImage` varchar(100) NOT NULL,
  `itemDescription` varchar(255) NOT NULL,
  `itemCategory` int(2) NOT NULL,
  `itemStatus` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `itemTitle`, `itemPrice`, `itemImage`, `itemDescription`, `itemCategory`, `itemStatus`) VALUES
(1, 'Special Omelette', 6500, '1.jpg', 'Eggs with, Ham, or (strips of beef/chicken/fish), served with Fries (Chips)', 1, 'on'),
(2, 'Chapati Dish', 5500, '2.jpg', 'Chapati served with beans, Beef stew / (1/4) Chicken stew / Fish stew', 1, 'on'),
(3, 'Keza Burger', 5500, '3.jpg', 'Beef / Chicken / Fish served with fries + salad', 1, 'on'),
(4, 'Chicken Avocado', 5000, '1641290679.jpg', 'Ugali served with Isombe accompanied with Fish / (1/4) Chicken / Beef', 2, 'on'),
(5, 'Italiano Salad', 2300, '1641290752.jpg', 'WIth onions, tomatoes, acidic juice, Carrot soup, Celery,...', 2, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` varchar(50) NOT NULL,
  `orderToken` varchar(255) NOT NULL,
  `clientId` varchar(50) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `shippingAddress` varchar(50) NOT NULL,
  `orderStatus` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `paymentAccount` varchar(50) NOT NULL,
  `createdDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `orderToken`, `clientId`, `totalPrice`, `paymentStatus`, `shippingAddress`, `orderStatus`, `paymentMethod`, `paymentAccount`, `createdDate`) VALUES
('1641290211', '82f3b381cc77a2c40e1cd32548703f2e298223a4', '1641290211', 5500, 'Pending', '', 'Pending', 'MoMo', '250781350065', '1641290211');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userNames` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userNames`, `Email`, `Phone`, `Password`, `Status`) VALUES
(1, 'Keza Bite', 'keza@gmail.com', '0789754425', '123', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
