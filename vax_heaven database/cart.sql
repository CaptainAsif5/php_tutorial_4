-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:08 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `qty` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `qty`) VALUES
('VjLQKYr9vHmuMgZ1u7wx', '8JO5kHPaYKIorax4a4Uv', 'XjLlsK4y6iFBmjSOlqr6', '1'),
('V9PSJSGYZiuNsevioGZ2', '8JO5kHPaYKIorax4a4Uv', '9SbRjIhrh8tRXegbndKx', '5'),
('g9CFwCOD4Cf5nRDNI8sO', 'xsaOQSapmoBOWL5OzNvi', 's3U50IfjGr34DgQcvDM0', '1'),
('h00Uu6xQnIbQWZAq7KII', 'xsaOQSapmoBOWL5OzNvi', '5ad13HO06SLZIrNuFTl5', '1'),
('nuE2czHb0ZZnZPVmvZiS', 'xsaOQSapmoBOWL5OzNvi', 'JNWXpHiW7jYWOEPJWoNc', '1'),
('hXlqkre3ksROKnPhHvcv', 'xsaOQSapmoBOWL5OzNvi', '9A8klw12j3U6XDP8CNZc', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
