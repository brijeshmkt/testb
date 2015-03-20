-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2015 at 07:08 PM
-- Server version: 5.5.38
-- PHP Version: 5.4.36-1+deb.sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bid`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_categories`
--

CREATE TABLE IF NOT EXISTS `auction_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `product_counts` int(4) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `auction_categories`
--

INSERT INTO `auction_categories` (`id`, `category`, `product_counts`, `status`, `created_at`) VALUES
(1, 'Electronics', 21, 'active', 0),
(17, 'Cars1', 0, 'active', 0),
(18, 'Books 1', 0, 'active', 0),
(19, 'Movies', 0, 'active', 0),
(20, 'my Cars', 0, 'active', 0),
(28, 'test', 0, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auction_products`
--

CREATE TABLE IF NOT EXISTS `auction_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(3) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `product_tags` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `shipping_amount` int(11) NOT NULL,
  `shipping_information` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `auction_products`
--

INSERT INTO `auction_products` (`id`, `name`, `category_id`, `tags`, `image`, `description`, `product_tags`, `shipping_amount`, `shipping_information`, `created_at`) VALUES
(14, 'test', 19, 'test', '', 'fasdf sdfs df', 'featured', 0, 'fs df', 1426657333),
(15, 'tet', 1, 'tet', '', 'tet', '', 25, 'fsadf asf', 1426657527),
(16, 'sdafd', 1, 'sadfds', '', 'asdfd sfsadf sd', 'normal', 15, 'fdasf', 1426657610),
(17, 'yrdy', 18, 'gdsfg', 'Barbados_Flag_Large.gif', 'gsfdg', 'normal', 15, '2314', 1426659241);

-- --------------------------------------------------------

--
-- Table structure for table `auction_users`
--

CREATE TABLE IF NOT EXISTS `auction_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `type` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `auction_users`
--

INSERT INTO `auction_users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `type`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin', 'active'),
(2, 'test', 'test@gmail.com', 'test', 'test first', 'test last', 'user', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `initialprice` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `ending_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `initialprice`, `created_at`, `ending_at`) VALUES
(13, 'Sample product', 50, 1425971912, 1425986312),
(14, 'New listing', 50, 1425972113, 1425990113),
(15, 'one more listing', 50, 1425972127, 1425993727);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
