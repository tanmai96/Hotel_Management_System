-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 05:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'tanmai', '1234'),
(2, 'sohel', '123456'),
(3, 'Siamul', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `salary` varchar(45) NOT NULL,
  `Rank` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_name` varchar(45) NOT NULL,
  `Hotel_type` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Phone_no` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_id`, `Hotel_name`, `Hotel_type`, `Address`, `Phone_no`) VALUES
(1, 'castle', '3 star', 'khulna', '014568522'),
(2, 'Royal international', '3 star', 'khulna', '01756893256'),
(3, 'city Inn', 'three star', 'khulna', '01456789123'),
(5, 'Tiger garden', '2 star', 'khulna', '01523456789');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `market_id` int(11) NOT NULL,
  `market_name` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_id`
--

CREATE TABLE `price_id` (
  `price_id` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `origin` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `price_id_idprice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `roomId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `isAccepted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `check_in`, `check_out`, `roomId`, `userId`, `isAccepted`) VALUES
(4, '2019-02-20', '2019-02-21', 16, 5, 1),
(5, '2019-02-21', '2019-02-22', 21, 6, 1),
(6, '2019-02-21', '2019-02-22', 20, 6, 1),
(9, '2019-02-24', '2019-02-25', 22, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `Room_type` varchar(45) NOT NULL,
  `Rate` varchar(45) NOT NULL,
  `Phone_no` varchar(45) NOT NULL,
  `isReserved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomId`, `Room_type`, `Rate`, `Phone_no`, `isReserved`) VALUES
(16, 101, 'Economy ', '2500', '45678', 0),
(17, 102, 'Economy ', '2500', '111', 0),
(18, 103, 'Economy ', '2500', '456', 0),
(20, 104, 'Economy ', '2500', '456', 0),
(21, 205, 'Business', '3500', '222', 0),
(22, 208, 'Business', '3500', '208', 0),
(23, 310, 'Business', '3500', '310', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `Market_market_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_has_product`
--

CREATE TABLE `shop_has_product` (
  `Shop_shop_id` int(11) NOT NULL,
  `Shop_Market_market_id` int(11) NOT NULL,
  `Product_product_id` int(11) NOT NULL,
  `Product_price_id_idprice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `address`, `gender`, `password`, `contact`) VALUES
(1, 'Rahim', 'ku', '1', 'a', '1234'),
(2, 'karim', 'khulna', '1', '123', '01756214863'),
(3, 'Latif', 'ku', '1', '1', '0123456788'),
(4, 'pranta', 'ku', '1', '4', '123456'),
(5, 'Tanmai', 'Khan Jahan Ali Hall, Khulna University', '1', '123', '1742676241'),
(6, 'pranta', 'Khan Jahan Ali Hall, Khulna University', '1', '12345', '01521518404');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`market_id`);

--
-- Indexes for table `price_id`
--
ALTER TABLE `price_id`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`,`price_id_idprice_id`),
  ADD KEY `fk_Product_price_id1_idx` (`price_id_idprice_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomId` (`roomId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roomId` (`roomId`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`,`Market_market_id`),
  ADD KEY `fk_Shop_Market1_idx` (`Market_market_id`);

--
-- Indexes for table `shop_has_product`
--
ALTER TABLE `shop_has_product`
  ADD PRIMARY KEY (`Shop_shop_id`,`Shop_Market_market_id`,`Product_product_id`,`Product_price_id_idprice_id`),
  ADD KEY `fk_Shop_has_Product_Product1_idx` (`Product_product_id`,`Product_price_id_idprice_id`),
  ADD KEY `fk_Shop_has_Product_Shop1_idx` (`Shop_shop_id`,`Shop_Market_market_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_Product_price_id1` FOREIGN KEY (`price_id_idprice_id`) REFERENCES `price_id` (`price_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`roomId`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `fk_Shop_Market1` FOREIGN KEY (`Market_market_id`) REFERENCES `market` (`market_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shop_has_product`
--
ALTER TABLE `shop_has_product`
  ADD CONSTRAINT `fk_Shop_has_Product_Product1` FOREIGN KEY (`Product_product_id`,`Product_price_id_idprice_id`) REFERENCES `product` (`product_id`, `price_id_idprice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Shop_has_Product_Shop1` FOREIGN KEY (`Shop_shop_id`,`Shop_Market_market_id`) REFERENCES `shop` (`shop_id`, `Market_market_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
