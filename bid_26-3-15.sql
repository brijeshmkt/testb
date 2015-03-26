-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 07:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `auction_categories`
--

INSERT INTO `auction_categories` (`id`, `category`, `product_counts`, `status`, `created_at`) VALUES
(1, 'Electronics', 21, 'active', 0),
(17, 'Cars1', 0, 'active', 0),
(18, 'Books 1', 0, 'active', 0),
(19, 'Movies', 0, 'active', 0),
(20, 'my Cars', 0, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auction_lang`
--

CREATE TABLE IF NOT EXISTS `auction_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auction_products`
--

CREATE TABLE IF NOT EXISTS `auction_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(3) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `product_tags` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `opening_price` int(11) NOT NULL,
  `lowest_bid_price` int(11) NOT NULL,
  `bid_price` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `buy_now_price` int(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `shipping_amount` int(11) NOT NULL,
  `shipping_information` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `auction_products`
--

INSERT INTO `auction_products` (`id`, `name`, `category_id`, `short_description`, `image`, `description`, `product_tags`, `opening_price`, `lowest_bid_price`, `bid_price`, `start_date`, `end_date`, `buy_now_price`, `payment_method`, `shipping_amount`, `shipping_information`, `created_at`) VALUES
(26, '', 1, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427011832),
(27, '', 1, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427012039),
(28, '', 1, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427012358),
(29, '', 1, '', '', '', '', 0, 0, 0, '2015-03-10 00:00:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427012626),
(30, '', 1, '', '', '', '', 0, 0, 0, '2015-03-09 00:00:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427012674),
(31, '', 1, '', '', '', '', 0, 0, 0, '2015-03-25 11:51:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427012789),
(32, '', 1, '', '', '', '', 0, 0, 0, '2015-03-22 14:24:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427014498),
(33, '', 1, '', '', '', '', 0, 0, 0, '2015-03-24 06:21:00', '2015-03-22 22:58:00', 0, 'paypal', 0, '', 1427014595),
(34, '', 1, '', '', '', '', 0, 0, 0, '2015-03-17 06:29:00', '0000-00-00 00:00:00', 0, 'paypal', 0, '', 1427014646),
(35, 'dfsd', 17, 'gfdgsdfgf', 'logo.jpg', ' d ga ags ag', '', 150, 10, 10, '2015-03-17 07:11:00', '2015-03-19 09:42:00', 534, 'mailing', 0, 'gs fg dsfg', 1427014709),
(36, 'Cub with sign of Brijesh', 19, 'Very nice cup', '', 'Cub with sign of BrijeshCub with sign of BrijeshCub with sign of BrijeshCub with sign of BrijeshCub with sign of Brijesh', '', 450, 25, 25, '2015-03-26 22:24:00', '2015-03-26 22:36:00', 1050, 'paypal', 12, '', 1427388917),
(37, 'Cub with sign of Brijesh', 1, 'Very nice cup', 'hpz440.jpg', 'dfs sdf dsfads', '', 150, 10, 10, '2015-03-26 22:25:00', '2015-03-26 22:30:00', 500, 'paypal', 0, '', 1427388978),
(38, 'Cub with sign of Brijesh', 1, 'Very nice cup', '', 'asdfad sdf', '', 150, 10, 10, '2015-03-24 03:06:00', '2015-03-26 22:37:00', 500, 'paypal', 0, '', 1427389132),
(39, 'dfsd', 1, 'Very nice cup', 'logo.jpg', 'fsd fdsf', '', 150, 10, 10, '2015-03-26 22:29:00', '2015-03-30 12:33:00', 500, 'paypal', 0, '', 1427389228);

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
  `balance` double(9,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `auction_users`
--

INSERT INTO `auction_users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `type`, `status`, `balance`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin', 'active', 0.00),
(2, 'test', 'test@gmail.com', 'test', 'test first', 'test last', 'user', 'active', 0.00),
(3, 'test4', 'test4@mailinator.com', 'test4', 'test4', 'test4', 'user', 'active', 10000.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
