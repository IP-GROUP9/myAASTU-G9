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
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `user` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(80) UNIQUE NOT NULL,
    email VARCHAR(80) UNIQUE NOT NULL,
    profile_pic VARCHAR(255) DEFAULT 'https://picsum.photos/400/250';
    password VARCHAR(80) NOT NULL
);

CREATE TABLE `post` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    author_id  INT NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    profile_pic VARCHAR(80) DEFAULT '/images/profile/placeholder.png',
    FOREIGN KEY (author_id) REFERENCES user (id)
);
CREATE TABLE `events` (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    eventHost VARCHAR(255) NOT NULL,
    descriptions TEXT NOT NULL,
    eventData VARCHAR(255) NOT NULL,
    locations VARCHAR(255) NOT NULL
);


 CREATE TABLE `images` (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    imageName VARCHAR(128) NOT NULL,
    imgDir VARCHAR(128) NOT NULL
);

CREATE TABLE `password_reset_temp` (
  email varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  expDate datetime NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `servicegiver` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `servetime` varchar(255) NOT NULL,
  `firstproduct` varchar(255) NOT NULL,
  `price1` varchar(255) NOT NULL,
  `secondproduct` varchar(255) NOT NULL,
  `price2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `servicegiver`, `description`, `servetime`, `firstproduct`, `price1`, `secondproduct`, `price2`, `address`) VALUES
(1, 'Teacher\'s Lounge', '', 'BreakFast, Lunch and Dinner', 'Yesinde Kinche,Dabo Firfr,Dirkosh Firfr,Pasta,Enkulal Firfr,Firfr', '25,30,30,30,30,35', 'Ater kik,Dinich Bealcha,Shiro,Pasta,Tibs,Minchet', '30,25,30,30,60,50', ''),
(2, 'Kibnesh Lounge', '', 'BreakFast, Lunch and Dinner', 'Ful,Sandwich,Firfr,Macaroni,Chechebsa,Rice', '22,20,22,22,21,22', 'keyWet,Minchet,Misto,Misr,Timatim Lebleb,Tegabino', '33,33,33,25,25,26', ''),
(3, 'KK', '', 'Food And Drinks', 'Pancake,Pasta,Soya,Rice,Dinich Firfr,Avocado Juice,Special Sandwich', '25,30,25,25,25,25,35', '', '', ''),
(4, 'Juice House', '', 'Food And Drinks', 'Pancake,Pasta,Soya,Rice,Chechebsa,Avocado Juice,Special Sandwich', '25,30,25,25,30,25,35', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
