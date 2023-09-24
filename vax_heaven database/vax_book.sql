-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:10 PM
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
-- Table structure for table `vax_book`
--

CREATE TABLE `vax_book` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vax_book`
--

INSERT INTO `vax_book` (`id`, `name`, `price`, `date`) VALUES
(2, 'admin', '500', '2023-08-08'),
(3, 'covid19', '20000', '2023-08-24'),
(4, 'Imran', '500', '2023-08-03'),
(5, 'Imran', '500', '2023-08-03'),
(15, 'gerg', '500', '2023-08-09'),
(16, 'Imran', '500', '2023-08-16'),
(17, 'T-Shirt', '50000', '2023-08-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vax_book`
--
ALTER TABLE `vax_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vax_book`
--
ALTER TABLE `vax_book`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
