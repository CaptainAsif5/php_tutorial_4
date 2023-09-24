-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vax_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `stock` int(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `image`) VALUES
('quVDsNKfkgFvHsGenbCS', 'Covid-19', '899', 100, 'Og4SylRPEMWKsh8PXWR9.jfif'),
('z5IsM9zUMLlJqfwalyPY', 'Maleria Vaccine', '599', 100, 'O9o8OihhpptsuxF6kie3.jfif'),
('9A8klw12j3U6XDP8CNZc', 'M M R Vaccine', '599', 99, 'm m r2.jpg'),
('1SIdytpQoL3VXCkhg9UD', 'Hepatites Vaccine', '999', 100, 'hipaty.jpg'),
('Bpzx7BZkfLTQOpjhv5Cx', 'Ebola Virus Vaccine', '799', 100, 'img6.jpg'),
('gIsag4yKzVhJq2af7NH4', 'Influenza Virus', '699', 100, 'BbFwv2wvrZKZ5pZxLpeq.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
