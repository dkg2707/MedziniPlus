-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 11:31 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(40) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `deleted` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`, `deleted`) VALUES
(7, 'Baby Care', '1023', 'Aptamil Stage 2 Follow Up Formula Powder - 400gm Refill', 'Aptamil contains balanced, age appropriate nutrients to support overall growth and development.', 'Aptamil.jpg', 4, 10.00, 0),
(8, 'Vitamin', '10311', 'Benadon Vitamin B6 40mg Tablet 10\'s', 'Benadon Tablet is required by the body for utilization of energy in the foods you eat, production of red blood cells, and proper functioning of nerves.', 'Benadon.jpg', 5, 10.00, 0),
(9, 'Baby Care', '103245', 'Atogla Bottle Of 200ml Lotion', 'Atogla Lotion is a skin moisturiser which is specially formulated for the children. Formulated with Gamma Linolenic Acid, Ceramides, Aloe vera, Wheat Germ Oil, Glycerin, it helps in reducing the loss of water from the skin and provides intense hydration.', 'Agtola.jpg', 14, 10.00, 0),
(10, 'Baby Care', '483', 'Himalaya Baby Extra Moisturizing Baby Wash 100ml India', 'Extra moisturizing baby wash soothes and moisturizes baby’s skin what it does Himalaya extra moisturizing baby wash is designed to effectively cleanse baby’s skin and bring softness.', 'Hiamalya.jpg', 22, 10.00, 0),
(11, 'Baby Care', '1931', 'Babyganics Baby Sunscreen Spray 50 SPF and Bug Spray', 'Protect your child from the sun and annoying bugs with the Babyganics Mineral-based Sunscreen Spray + Natural Insect Repellent 2-Pack. Both the sunscreen and repellent are perfect for high exposure areas and targeted protection.', 'Babyganics.jpg', 20, 10.00, 0),
(12, 'Baby Care', '9358', 'Desitin Maximum Strength Baby Diaper Rash Cream with 40% Zin', 'Rich, thick diaper rash cream works on contact to treat and prevent diaper rash discomfort', 'Desitin.jpg', 6, 10.00, 0),
(13, 'Vitamin', '24379', 'One Daily Women\'s 50+ Iron Free Multivitamin & Multimineral ', 'One Daily Women\'s Multivitamin is a well-rounded supplement designed to help women fill nutritional gaps with essential vitamins, minerals, and nutrients.', 'women50.jpg', 11, 100.00, 0),
(14, 'Vitamin', '2793', 'Organic Whole Food Multivitamin for Women (120 Vegetarian Ca', 'Premium Formula with Natural Vitamins A, B, C, D, E, K ? Organic Fruit & Vegetable Blends', 'organic.jpg', 45, 10.00, 0),
(15, 'Vitamin', '7474', 'Fermented Vitamin C - 250 MG + Whole-Food Herbs for Better A', 'Unleash powerful antioxidant support with natural Vitamin C tablets that are fermented for better absorption.', 'fermentedc.jpg', 18, 10.00, 0),
(16, 'Vitamin', '279388', 'Vitamin B-Complex 100 (100 Vegetarian Capsules)', 'Vitamin B-100 Complex Caps are a blend of key B vitamins combined with other nutritional factors for enhanced synergism.', 'b100.jpg', 18, 10.00, 0),
(18, 'Health and Medicine', '1237', 'Seacod Cod Liver Oil Capsule', 'Helps to fortify the immune system Helps to promote a healthy heart Helps to enhance the brain and vision development Helps to toughen the bones, teeth, and muscles', 'seacod.jpg', 17, 10.00, 0),
(19, 'Health and Medicine', '12490', 'Calcimax Forte Plus Tablet', 'Useful in case of Osteoporosis, Osteopenia, Amenorrhea, Thyroid disorders, Diabetes, Pre-eclampsia in pregnancy', 'Calcimax.jpg', 13, 10.00, 0),
(20, 'Personal Care', '239875', 'Equate 4500 Series Wrist Blood Pressure Monitor', 'Allows you to make regular checks on your blood pressure and heartbeat by sliding this light-weight monitor on your wrist and starting it up', 'bloodpressuremonitor.jpg', 40, 10.00, 0),
(21, 'Health and Medicine', '41839', 'Equate Nighttime Flu & Severe Cold & Cough Packets, 650 mg, ', 'It is a hot liquid therapy for fast relief of nasal & sinus congestion, sore throat, runny nose, headache, body aches, fever, cough, and sneezing.', 'eqauteflu.jpg', 4, 10.00, 0),
(22, 'Health and Medicine', '38240', 'Equate Congestion Suphedrine PE Nasal Decongestant Tablets 1', 'Treat seasonal allergies and head colds with Equate Congestion Suphedrine PE Nasal Decongestant Tablets. ', 'suphedrine.jpg', 12, 10.00, 0),
(23, 'Personal Care', '28399', 'Polar Active Ice 3.0 Universal Cold Therapy System With 15 Q', 'The Active Ice ® 3.0 System is specifically designed for drug-free pain relief.', 'polar.jpg', 220, 10.00, 0),
(24, 'Personal Care', '20882', 'Biotrue Contact Lens Solution for Soft Contact Lenses, Multi', ' Biotrue contact lens solution makes lenses so comfortable, you\'ll almost forget you\'re wearing them.', 'Biotrue.jpg', 16, 10.00, 0),
(25, 'Personal Care', '832948', 'Push MetaGrip Thumb CMC Orthosis', 'The Push MetaGrip Thumb CMC Brace is most effective streamlined and durable brace for the relief of thumb CMC (basal joint) osteoarthritis.', 'metagrip.jpg', 76, 10.00, 0),
(26, 'Health Care', '2138', 'Eazol Cough Syrup 100ml', 'Eazol Cough Syrup is used for the temporary relief of cough, sneezing, or runny nose due to the common cold, hay fever or other upper respiratory allergies.', 'Eazol.jpg', 9, 10.00, 0),
(27, 'Health Care', '32749', 'Cofsils Gargle 100 Ml', 'Cofsils Experdine Gargle gives you quick relief from tonsilitis and pharyngitis, thanks to it’s 3-way action - antiviral, antibacterial, and antiinflammatory.', 'cofsils.jpg', 19, 10.00, 0),
(28, 'Health Care', '2347', 'Corcal Bone And Beauty Tab 10\'s', 'Helps to strengthen the bones, teeth and nails and helps to maintain healthy hair and skin', 'Corcal.jpg', 11, 10.00, 0),
(29, 'Health Care', '38485', 'Dettol Liquid Handwash Pump, Original- 200 Ml', 'Dettol Liquid Handwash (Original) - 200 ml with Free Dettol Liquid Handwash Refill- 175 ml', 'Dettol.jpg', 25, 10.00, 0),
(30, 'Beauty', '285985', 'POND\'S Dry Skin Cream', ' Rich hydrating skin cream. Deep hydration for smooth, soft, radiant skin', 'Ponds.jpg', 5, 10.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
