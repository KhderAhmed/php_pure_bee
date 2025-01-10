-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 08:38 AM
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
-- Database: `bee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(56) NOT NULL,
  `password` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'khder.agmial.com', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `bee`
--

CREATE TABLE `bee` (
  `id` int(11) NOT NULL,
  `kind` varchar(110) NOT NULL,
  `pricee` int(11) NOT NULL,
  `imge` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bee`
--

INSERT INTO `bee` (`id`, `kind`, `pricee`, `imge`) VALUES
(2, 'krneole', 12, 'images\\cat-2.jpg'),
(3, 'syrin', 10, 'images\\cat-4.jpg'),
(4, 'hagin carnicaa', 14, 'images\\cat-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `type_produect` varchar(110) NOT NULL,
  `name` varchar(778) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `phone`, `address`, `type_produect`, `name`) VALUES
(7, 988, 'yahmour', 'queen carinca many 21queens in 14/4/2024', 'khder');

-- --------------------------------------------------------

--
-- Table structure for table `honey`
--

CREATE TABLE `honey` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `honey`
--

INSERT INTO `honey` (`id`, `name`, `price`, `img`) VALUES
(2, 'lemon', 12, 'images\\product-4.jpg'),
(3, 'yanson', 15, 'images\\product-5.jpg'),
(4, 'tayon', 10, 'images\\vendor-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queen`
--

CREATE TABLE `queen` (
  `id` int(11) NOT NULL,
  `type_f` varchar(80) NOT NULL,
  `description` varchar(800) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `country` varchar(80) NOT NULL,
  `price` int(11) NOT NULL,
  `imging` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `queen`
--

INSERT INTO `queen` (`id`, `type_f`, `description`, `country`, `price`, `imging`) VALUES
(23, 'krnelowei', 'هدوء  اثناء الكشف', 'slofikia', 123, 'images\\product-2.jpg'),
(24, 'logistca', 'مقاومه الامراض', 'itlay', 122, 'images\\product-3.jpg'),
(25, 'carinca', 'جمع العسل في ظروف باردة', 'grmany', 120, 'images\\product-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `pass`, `type`) VALUES
(1, 'khder', 'khderahmed', 'khder@gmail.com', '12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bee`
--
ALTER TABLE `bee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honey`
--
ALTER TABLE `honey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queen`
--
ALTER TABLE `queen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bee`
--
ALTER TABLE `bee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `honey`
--
ALTER TABLE `honey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queen`
--
ALTER TABLE `queen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
