-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 08:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `business_address` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `cordinates` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--


INSERT INTO `business` (`name`, `email`, `phone`, `business_name`, `logo`, `business_address`, `website`, `cordinates`) VALUES
('C:\\xampp\\htdocs\\rohan\\public', 'rohanrathod@test.com', '12345678', 'Telecom', '1672428084.jpg', 'admfhv', 'royal.com', 'test'),
('ROHAN RATHOD', 'rohanrathod@test.com', '12345678', 'Telecom', 'taisign(1).jpg', 'admfhv', 'ICICI.com', 'test'),
('rohan', 'rohan@test.com', '1234656', 'Telecom', 'test', 'cozy homes', 'amazon.com', 'test'),
('taisign(1)', 'rohansign@test.com', '12345678', 'Telecom', 'taisign(1).jpg', 'admfhv', 'paypal.com', 'test'),
('rohan', 'rohan@gmail.com', '12345678', 'Telecom', '1672429462.jpg', 'admfhv', 'flipcart.com', '18.5764256 73.9947449');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD UNIQUE KEY `name` (`name`,`email`,`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
