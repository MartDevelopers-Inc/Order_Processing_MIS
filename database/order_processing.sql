-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2021 at 10:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(200) NOT NULL,
  `admin_email` varchar(200) DEFAULT NULL,
  `admin_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'martdevelopers254@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(200) NOT NULL,
  `cus_name` varchar(200) DEFAULT NULL,
  `cus_mobile` varchar(200) DEFAULT NULL,
  `cus_email` varchar(200) DEFAULT NULL,
  `cus_password` varchar(200) DEFAULT NULL,
  `cus_adr` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_mobile`, `cus_email`, `cus_password`, `cus_adr`) VALUES
(1, 'James Doe', '0712380913', 'jamesdoe@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '90126 Localhost'),
(2, 'Jane Doe', '+1259002312', 'hello@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '120 Localhost'),
(3, 'Doe James ', '079876545678', 'doejames@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '90126 Localhost.');

-- --------------------------------------------------------

--
-- Table structure for table `mailer`
--

CREATE TABLE `mailer` (
  `id` int(11) NOT NULL,
  `mailer_mail_from_email` varchar(200) DEFAULT NULL,
  `mailer_mail_from_name` varchar(200) DEFAULT NULL,
  `mailer_protocol` varchar(200) DEFAULT NULL,
  `mailer_host` varchar(200) DEFAULT NULL,
  `mailer_port` varchar(200) DEFAULT NULL,
  `mailer_username` varchar(200) DEFAULT NULL,
  `mailer_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mailer`
--

INSERT INTO `mailer` (`id`, `mailer_mail_from_email`, `mailer_mail_from_name`, `mailer_protocol`, `mailer_host`, `mailer_port`, `mailer_username`, `mailer_password`) VALUES
(1, 'martdevelopers254@gmail.com', 'MartDevelopers', 'ssl', 'smtp.gmail.com', '465', 'martdevelopers254@gmail.com', '0704031263');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(200) NOT NULL,
  `o_p_id` int(200) DEFAULT NULL,
  `o_c_id` int(200) DEFAULT NULL,
  `o_s_id` int(200) DEFAULT NULL,
  `o_sa_id` int(200) DEFAULT NULL,
  `o_details` longtext DEFAULT NULL,
  `o_quantity` varchar(200) DEFAULT NULL,
  `o_date` varchar(200) DEFAULT NULL,
  `o_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_p_id`, `o_c_id`, `o_s_id`, `o_sa_id`, `o_details`, `o_quantity`, `o_date`, `o_status`) VALUES
(1, 1, 1, 1, 1, 'Deliver 200 Kgs Of PineApples At This Address.', '200 Kgs', '21 Sep 2021', 'Pending'),
(2, 2, 2, 2, 2, 'Deliver These Products On This Address.', '500 Kgs', '21 Sep 2021', 'Pending'),
(3, 1, 3, 1, 1, 'Deliver 200 kGS ', '200 Kgs', '21 Sep 2021', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(200) NOT NULL,
  `p_pc_id` int(200) DEFAULT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `p_details` longtext DEFAULT NULL,
  `p_quantity` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_pc_id`, `p_name`, `p_details`, `p_quantity`) VALUES
(1, 1, 'Pine Apples', 'In botany, a drupe is an indehiscent fruit in which an outer fleshy part surrounds a single shell of hardened endocarp with a seed inside. These fruits usually develop from a single carpel, and mostly from flowers with superior ovaries. Wikipedia', '50 Tonnes'),
(2, 1, 'Oranges', 'In botany, a drupe is an indehiscent fruit in which an outer fleshy part surrounds a single shell of hardened endocarp with a seed inside. These fruits usually develop from a single carpel, and mostly from flowers with superior ovaries. Wikipedia', '100 Tonnes');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `pc_id` int(200) NOT NULL,
  `pc_name` varchar(200) DEFAULT NULL,
  `pc_desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`pc_id`, `pc_name`, `pc_desc`) VALUES
(1, 'Citrus Fruits', 'Citrus is a genus of flowering trees and shrubs in the rue family, Rutaceae. Plants in the genus produce citrus fruits, including important crops such as oranges, lemons, grapefruits, pomelos, and limes. The genus Citrus is native to South Asia, East Asia, Southeast Asia, Melanesia, and Australia. '),
(2, 'Stone fruits', 'In botany, a drupe is an indehiscent fruit in which an outer fleshy part surrounds a single shell of hardened endocarp with a seed inside. These fruits usually develop from a single carpel, and mostly from flowers with superior ovaries. ');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` longtext NOT NULL,
  `tagline` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `tagline`) VALUES
('Kalamba Fruit Processing', 'Simply The Best');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_agent`
--

CREATE TABLE `shipping_agent` (
  `sa_id` int(200) NOT NULL,
  `sa_name` varchar(200) DEFAULT NULL,
  `sa_mobile` varchar(200) DEFAULT NULL,
  `sa_email` varchar(200) DEFAULT NULL,
  `sa_adr` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_agent`
--

INSERT INTO `shipping_agent` (`sa_id`, `sa_name`, `sa_mobile`, `sa_email`, `sa_adr`) VALUES
(1, 'Rapid Kate Logistics', '+25490038132', 'mail@rapidkate.com', '9023 - Nairobi'),
(2, 'DHL', '+2549001212', 'mail@dhl.com', '90126 Localhost');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(200) NOT NULL,
  `sup_name` varchar(200) NOT NULL,
  `sup_mobile` varchar(200) NOT NULL,
  `sup_email` varchar(200) NOT NULL,
  `sup_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `sup_mobile`, `sup_email`, `sup_password`) VALUES
(1, 'Yatta Grape Juice Inc', '+25478891312', 'mail@yattagrouop.com', 'a69681bcf334ae130217fea4505fd3c994f5683f'),
(2, 'Keroche Breweries', '+25490091232', 'hello@keroche.com', 'a69681bcf334ae130217fea4505fd3c994f5683f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `mailer`
--
ALTER TABLE `mailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `shipping_agent`
--
ALTER TABLE `shipping_agent`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mailer`
--
ALTER TABLE `mailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pc_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_agent`
--
ALTER TABLE `shipping_agent`
  MODIFY `sa_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
