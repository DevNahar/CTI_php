-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_price`, `p_quantity`) VALUES
(1, 'Shirt', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `status`) VALUES
(2, 'Nafim', 'nafim@gmail.com', '345', 0),
(8, 'Sade Melendez', 'dibow@mailinator.com', 'Pa$$w0rd!', 0),
(12, 'Mona Robertson', 'xiluj@mailinator.com', 'Pa$$w0rd!', 1),
(13, 'Kenyon Dorsey', 'rucogaz@mailinator.com', 'Pa$$w0rd!', 1),
(16, 'SuMI', 'simi@gmail.com', '147', 0),
(17, 'Phelan Conley', 'mokudyhe@mailinator.com', 'Pa$$w0rd!', 1),
(19, 'Brenden Ellis', 'lebuf@mailinator.com', 'Pa$$w0rd!', 0),
(22, 'Macaulay Pearson', 'kyce@mailinator.com', 'Pa$$w0rd!', 1),
(23, 'Macaulay son', 'kyce@mailinator.com', 'Pa$$w0rd!', 0),
(24, 'Angelica Simmons', 'venaciwo@mailinator.com', 'Pa$$w0rd!', 1),
(27, 'Blaze Clark', 'dazisic@mailinator.com', '', 1),
(28, 'Carlos Howe', 'xazygyde@mailinator.com', '', 0),
(29, 'Lawrence David', 'rejigaqu@mailinator.com', 'Pa$$w0rd!', 1),
(30, 'Angela Cantrell', 'hojome@mailinator.com', 'Pa$$w0rd!', 1),
(31, 'Shannon Hanson', 'gihucep@mailinator.com', '$2y$10$uDZP.lOb0fCccwlRkCwjUegkQpAeEZKywlGPUGpCyUUXeHf99J3M.', 1),
(32, 'Evan Richard', 'coqup@mailinator.com', '$2y$10$Ig3AkaQpmpRGKQhHWTgVX.M4JpJnC4lg8zVxJnwaQyJHtt55ybDpy', 1),
(33, 'Dahlia Davis', 'sidirabury@mailinator.com', '$2y$10$jVgsUP5aqUWSEXsDUOh8ru1oNOl03h8x1OqEXVzK1ysx495wtxB/m', 1),
(34, 'Kasimir Munoz', 'qamoparo@mailinator.com', '$2y$10$AOP0MM6lFFDbNQjNG2xh3ulR5Hl3jTaambP4vei3jKgob6IFCM59.', 1),
(36, 'Tara Reilly', 'gizumebake@mailinator.com', '$2y$10$UX7BwDBWdxJ4zLDR2/XtCO7MVwMUZEOkn30HM6HQa1sqf6eHSk8mO', 1),
(37, 'Philip Oneil', 'migaxicix@mailinator.com', '$2y$10$nJ6EVjQs4NKfHdjv067NtuotQCRNH8x.1GKkeKevGyk8ArZ.oNM42', 1),
(38, 'Rebecca Day', 'venex@mailinator.com', '$2y$10$IXd857PWLvR253U.5ZdO4.VbGFuOq0znjGdHT.5ymx1jPNU7U0YQW', 1),
(39, 'Kameko Potter', 'qiwys@mailinator.com', '$2y$10$j8Jy.Z6ShVSb1SDSMiP4EOekqf9z8yFdwefRjZLugPNFKAqvQOV5q', 1),
(40, 'Jaime Berry', 'nyqoj@mailinator.com', '$2y$10$fXByw02ZSHA7i7EIDvKMyugrLfuEhXAHhJT.1USGU5FYECOF.Qi.q', 1),
(41, 'Walter Baird', 'jotir@mailinator.com', '$2y$10$7YTLhQiu/w0BG04BzS6/B.Q4/RKynBXKs.rbmlQ4jmd6PE2g3YDea', 1),
(42, 'Ruby Morton', 'qoqozoc@mailinator.com', '$2y$10$pg/uOwRedODQGnyNfDPuSuAGva14t510LIlRp6seKtEZDe14F9Pyu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
