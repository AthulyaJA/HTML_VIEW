-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 01:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_apply`
--

CREATE TABLE `tb_apply` (
  `id` int(10) NOT NULL,
  `auction_id` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apply`
--

INSERT INTO `tb_apply` (`id`, `auction_id`, `loginid`, `date`) VALUES
(1, 2, 3, '2021-02-18'),
(2, 1, 3, '2021-02-18'),
(3, 3, 3, '2021-02-18'),
(4, 2, 9, '2021-02-18'),
(7, 1, 3, '2021-02-18'),
(8, 1, 3, '2021-02-22'),
(9, 1, 9, '2021-02-24'),
(10, 1, 9, '2021-02-24'),
(11, 1, 9, '2021-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_auction`
--

CREATE TABLE `tb_auction` (
  `id` int(10) NOT NULL,
  `crop_name` varchar(20) NOT NULL,
  `minprice` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_auction`
--

INSERT INTO `tb_auction` (`id`, `crop_name`, `minprice`, `quantity`, `date`) VALUES
(1, 'Tomato', 35, '1kg', '2021-02-02'),
(2, 'Chilly', 50, '2kg', '2021-02-04'),
(3, 'Beans', 100, '2kg', '2021-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buy`
--

CREATE TABLE `tb_buy` (
  `id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buy`
--

INSERT INTO `tb_buy` (`id`, `crop_id`, `loginid`, `buy_date`) VALUES
(1, 1, 2021, '0000-00-00'),
(2, 1, 9, '2021-02-18'),
(3, 1, 3, '2021-02-18'),
(4, 1, 3, '2021-02-18'),
(5, 2, 3, '2021-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buy_prdt`
--

CREATE TABLE `tb_buy_prdt` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_buy` date NOT NULL,
  `log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buy_prdt`
--

INSERT INTO `tb_buy_prdt` (`id`, `p_id`, `d_buy`, `log_id`) VALUES
(3, 1, '2021-02-18', 3),
(4, 1, '2021-02-18', 3),
(5, 1, '2021-02-24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_crop`
--

CREATE TABLE `tb_crop` (
  `id` int(11) NOT NULL,
  `crop_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `Filename` text NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_crop`
--

INSERT INTO `tb_crop` (`id`, `crop_name`, `quantity`, `price`, `Filename`, `loginid`) VALUES
(3, 'Tomato', 400, 300, 'tom.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_farmer`
--

CREATE TABLE `tb_farmer` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adar` varchar(100) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_farmer`
--

INSERT INTO `tb_farmer` (`id`, `fname`, `lname`, `dob`, `address`, `phno`, `email`, `adar`, `loginid`) VALUES
(2, 'Anisha', 'M', '2021-02-11', 'asdfghjk', '123456', 'ani@gmailcom', '1234567', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_loan`
--

CREATE TABLE `tb_loan` (
  `id` int(10) NOT NULL,
  `loanname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `cultivatedarea` varchar(30) NOT NULL,
  `loanamount` int(30) NOT NULL,
  `uploadfile` varchar(40) NOT NULL,
  `loginid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_loan`
--

INSERT INTO `tb_loan` (`id`, `loanname`, `name`, `place`, `cultivatedarea`, `loanamount`, `uploadfile`, `loginid`) VALUES
(1, 'agri', 'rubiyaz', 'kollam', '200sent', 1000, '1.jpg', 1),
(2, 'agri', 'rubi', 'kollam', '200sent', 1000, '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('0','1','2') NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `password`, `type`, `status`) VALUES
(1, 'admin', 'admin', '0', '1'),
(3, 'ani@gmailcom', '2', '1', '1'),
(9, 'athulya@gmail.com', '3', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notification`
--

CREATE TABLE `tb_notification` (
  `id` int(10) NOT NULL,
  `notification` varchar(20) NOT NULL,
  `loginid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_notification`
--

INSERT INTO `tb_notification` (`id`, `notification`, `loginid`) VALUES
(1, 'kisan loan available', 3),
(2, 'kisan loan available', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image_details` varchar(100) NOT NULL,
  `log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product`, `price`, `image_details`, `log_id`) VALUES
(3, 'Espoma Organic Garden', 500, 'es.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_seller`
--

CREATE TABLE `tb_seller` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `email` varchar(12) NOT NULL,
  `adar` int(20) NOT NULL,
  `loginid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_seller`
--

INSERT INTO `tb_seller` (`id`, `fname`, `lname`, `dob`, `address`, `phno`, `email`, `adar`, `loginid`) VALUES
(4, 'Athulya', 'A', '2021-02-04', 'mmmmmmmmm', '1234567', 'athulya@gmai', 123456755, '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_apply`
--
ALTER TABLE `tb_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buy`
--
ALTER TABLE `tb_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buy_prdt`
--
ALTER TABLE `tb_buy_prdt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_crop`
--
ALTER TABLE `tb_crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_farmer`
--
ALTER TABLE `tb_farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_loan`
--
ALTER TABLE `tb_loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_notification`
--
ALTER TABLE `tb_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_seller`
--
ALTER TABLE `tb_seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_apply`
--
ALTER TABLE `tb_apply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_buy`
--
ALTER TABLE `tb_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_buy_prdt`
--
ALTER TABLE `tb_buy_prdt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_crop`
--
ALTER TABLE `tb_crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_farmer`
--
ALTER TABLE `tb_farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_loan`
--
ALTER TABLE `tb_loan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_notification`
--
ALTER TABLE `tb_notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_seller`
--
ALTER TABLE `tb_seller`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
