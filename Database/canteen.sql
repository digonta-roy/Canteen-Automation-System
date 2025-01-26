-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 07:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`) VALUES
(2, 'Pizza  ', '650', 'pizza.jpg'),
(3, 'Biryani', '120', 'biriani.jpg'),
(4, 'Noodles', '80', 'noodles.jpg'),
(5, 'Mutton Teheri', '200', 'muttob.jpg'),
(6, 'Soft Drinks', '120', 'drinks.jpg'),
(7, 'Chicken Fry', '160', 'chickenfry.jpg'),
(8, 'Tea', '10', 'tea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `product`, `feedback`) VALUES
('Susmita  Saha', 'piu679506@gmail.com', '1', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`name`, `email`, `pass`) VALUES
('Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `loginseller`
--

CREATE TABLE `loginseller` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `con_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginseller`
--

INSERT INTO `loginseller` (`id`, `email`, `name`, `contact`, `address`, `pass`, `con_pass`) VALUES
(12345, 'saha06571@gmail.com', 'Priya   ', '01766829712    ', 'Dhaka', '$2y$10$QVlVWI5lMoVm21Y315dl5e2tsuiaoZlzvkd1Z6L8VJqRYDgiSzPNe', '$2y$10$YQng0obxQeXFXuoT6t2IQeMBMKOLDTAAjblynsjDNka2RLh6iPT2O');

-- --------------------------------------------------------

--
-- Table structure for table `loginstu`
--

CREATE TABLE `loginstu` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginstu`
--

INSERT INTO `loginstu` (`name`, `email`, `phn`, `id`, `gender`, `pass`, `pass1`, `status`, `token`) VALUES
('Susmita  Saha', 'piu679506@gmail.com', '01766829719    ', 'B180305047  ', 'Female', '$2y$10$s8mAedAAKUjpUqO0IZ4AOuzzG.q6YzpkNGNXNG9gAt8G7zp2ci3ym', '$2y$10$Vu2R6zzLMxnPsmC9hxMqm.vyqlscoFJTGzEaB7Hjac0HczjIE0syO', 'active', '3daec8b543333e263700cec3b750f1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `username`, `bank`, `number`, `transaction_id`, `product_id`, `amount`, `status`) VALUES
(1, 'piu679506@gmail.com', 'Susmita  Saha', 'Bkash', '01766829719    ', '12344567889', '1,', '120', 'Cooking food'),
(2, 'piu679506@gmail.com', 'Susmita  Saha', 'Bkash', '01766829719    ', '12344567856', '3,2,', '770', 'Queue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginseller`
--
ALTER TABLE `loginseller`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `loginstu`
--
ALTER TABLE `loginstu`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
