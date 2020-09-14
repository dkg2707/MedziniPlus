-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 11:32 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medizinplusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(18, '279388', 'Vitamin B-Complex 100 (100 Vegetarian Capsules)', 'Vitamin B-100 Complex Caps are a blend of key B vitamins combined with other nutritional factors for enhanced synergism.', 10, 2, 20, '2020-05-07 21:42:57', 'test@test.test'),
(19, '7474', 'Fermented Vitamin C - 250 MG + Whole-Food Herbs for Better A', 'Unleash powerful antioxidant support with natural Vitamin C tablets that are fermented for better absorption.', 10, 3, 30, '2020-05-07 21:43:21', 'test@test.test'),
(20, '483', 'Himalaya Baby Extra Moisturizing Baby Wash 100ml India', 'Extra moisturizing baby wash soothes and moisturizes baby’s skin what it does Himalaya extra moisturizing baby wash is designed to effectively cleanse baby’s skin and bring softness.', 10, 1, 10, '2020-05-07 23:15:27', 'test@test.test'),
(21, '103245', 'Atogla Bottle Of 200ml Lotion', 'Atogla Lotion is a skin moisturiser which is specially formulated for the children. Formulated with Gamma Linolenic Acid, Ceramides, Aloe vera, Wheat Germ Oil, Glycerin, it helps in reducing the loss of water from the skin and provides intense hydration.', 10, 1, 10, '2020-05-07 23:15:28', 'test@test.test'),
(22, '1023', 'Aptamil Stage 2 Follow Up Formula Powder - 400gm Refill', 'Aptamil contains balanced, age appropriate nutrients to support overall growth and development.', 10, 2, 20, '2020-05-07 23:18:00', 'test@test.test'),
(23, '1023', 'Aptamil Stage 2 Follow Up Formula Powder - 400gm Refill', 'Aptamil contains balanced, age appropriate nutrients to support overall growth and development.', 10, 3, 30, '2020-05-07 23:18:25', 'test@test.test'),
(24, '103245', 'Atogla Bottle Of 200ml Lotion', 'Atogla Lotion is a skin moisturiser which is specially formulated for the children. Formulated with Gamma Linolenic Acid, Ceramides, Aloe vera, Wheat Germ Oil, Glycerin, it helps in reducing the loss of water from the skin and provides intense hydration.', 10, 1, 10, '2020-05-07 23:18:41', 'test@test.test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
