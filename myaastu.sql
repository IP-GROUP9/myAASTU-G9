-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 08:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myaastu`
--j

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `servicegiver` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `servetime` varchar(255) NOT NULL,
  `firstproduct` varchar(255) NOT NULL,
  `price1` varchar(255) NOT NULL,
  `secondproduct` varchar(255) NOT NULL,
  `price2` varchar(255) NOT NULL,
  `prod_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `servicegiver`, `prod_description`, `servetime`, `firstproduct`, `price1`, `secondproduct`, `price2`, `prod_address`) VALUES
(1, 'Teacher\'s Lounge', '', 'BreakFast, Lunch and Dinner', 'Yesinde Kinche,Dabo Firfr,Dirkosh Firfr,Pasta,Enkulal Firfr,Firfr', '25,30,30,30,30,35', 'Ater kik,Dinich Bealcha,Shiro,Pasta,Tibs,Minchet', '30,25,30,30,60,50', ''),
(2, 'Kibnesh Lounge', '', 'BreakFast, Lunch and Dinner', 'Ful,Sandwich,Firfr,Macaroni,Chechebsa,Rice', '22,20,22,22,21,22', 'keyWet,Minchet,Misto,Misr,Timatim Lebleb,Tegabino', '33,33,33,25,25,26', ''),
(3, 'KK', '', 'Food And Drinks', 'Pancake,Pasta,Soya,Rice,Dinich Firfr,Avocado Juice,Special Sandwich', '25,30,25,25,25,25,35', '', '', ''),
(4, 'Juice House', '', 'Food And Drinks', 'Pancake,Pasta,Soya,Rice,Chechebsa,Avocado Juice,Special Sandwich', '25,30,25,25,30,25,35', '', '', '');




