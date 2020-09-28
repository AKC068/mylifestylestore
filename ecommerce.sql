-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2020 at 04:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `Price` bigint(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`, `Price`) VALUES
(1, 'cannon EOS', 36000),
(2, 'Sony DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 80000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'Johan Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `registration_timestamp` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `user_password`, `first_name`, `contact`, `city`, `address`, `registration_timestamp`) VALUES
(14, 'ayushchaudhary1002@outlook.com', 'ayush1234', 'Ayush', 9334882702, 'patna', 'kankarbagh, patna', '2020-07-06 07:56:05'),
(16, 'ayushkumac040@gmail.com', 'sfggkgfds', 'Ayush', 9334882702, 'patna', 'kankarbagh, patna', '2020-07-06 14:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`product_id`),
  KEY `users_products_ibfk_2` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `confirmation`, `purchase_timestamp`) VALUES
(26, 14, 2, 'Confirmed', '2020-07-12 14:59:05'),
(27, 14, 3, 'Confirmed', '2020-07-12 14:59:17'),
(31, 14, 4, 'Confirmed', '2020-07-14 07:02:02'),
(32, 14, 5, 'Confirmed', '2020-07-14 07:02:49'),
(33, 14, 6, 'Confirmed', '2020-07-14 07:02:53'),
(36, 14, 8, 'Confirmed', '2020-07-17 14:27:39');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
