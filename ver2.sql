-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 11:07 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boleh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `has_item`
--

CREATE TABLE `has_item` (
  `quantity` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL,
  `namaItem` varchar(100) NOT NULL,
  `harga` int(25) NOT NULL,
  `stock` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`idItem`, `namaItem`, `harga`, `stock`, `pic`, `keterangan`) VALUES
(1, 'cimol', 50000, 0, '', ''),
(2, 'talasbogor', 400000, 1, '', ''),
(7, 'Gorengan', 2000, 100, 'inspiratofreak.jpg', 'enak'),
(8, 'gorengan', 2000001, 11, 'inspiratofreak.jpg', 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `price_total` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `code` int(11) DEFAULT '0',
  `updated_at` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userPass`, `userName`, `address`, `phone`, `userEmail`, `code`, `updated_at`, `created_at`) VALUES
(10, 'c8a93a035b4a942799132a295f7cc04353369ee920f5dd408cd20b4c357a9da4', 'dadwa', 'dadwada', '2412840182', 'admina@dadad.com', 0, '00:00:00', '2017-05-10 06:34:21'),
(11, '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'siapa', 'adw', '4125255', 'siapa@aja.com', 0, '00:00:00', '2017-05-10 08:04:14'),
(12, '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'hahaha', 'dramaga', '085723451234', 'ha@ha.com', 0, '00:00:00', '2017-05-10 08:21:42'),
(13, '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'haha', 'dramaga', '089731831183', 'ahaha@haha.com', 0, '00:00:00', '2017-05-10 08:55:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `has_item`
--
ALTER TABLE `has_item`
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idItem`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `has_item`
--
ALTER TABLE `has_item`
  ADD CONSTRAINT `has_item_id_item` FOREIGN KEY (`id_item`) REFERENCES `items` (`idItem`),
  ADD CONSTRAINT `has_item_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`userId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_item` FOREIGN KEY (`id_item`) REFERENCES `items` (`idItem`),
  ADD CONSTRAINT `orders_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
