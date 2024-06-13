-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2024 at 10:07 AM
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
-- Database: `Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`product_id`, `name`, `description`, `type`, `amount`) VALUES
(1, 'Apple iPhone 15 128GB Black', 'Processor: Apple A16 Bionic  Memory: 6 GB  Disk SSD: 128 GB  Graphics Card: Apple GPU  Screen: 6,1\"  Operating system: iOS', 'Phone', 4),
(2, 'Google Pixel 8', 'Processor: Google Tensor G3\r\nMemory: 8 GB\r\nDisk SSD: 128 GB\r\nGraphics Card: Immortalis-G715s MC10\r\nScreen: 6,2\"\r\nOperating system: Android', 'Phone', 2),
(3, 'Samsung Galaxy A15', 'Processor: MediaTek Helio G99\r\nMemory: 4 GB\r\nDisk SSD: 128 GB\r\nGraphics Card: Mali-G57 MC2\r\nScreen: 6,5\"\r\nOperating system: Android & One UI', 'Phone', 6),
(15, 'Microsoft Surface Laptop Copilot+ PC 13\"C10/16GB/256GB (Platynowy)', 'Procesor:Qualcomm Snapdragon X Plus\r\nPamięć:16 GB\r\nGrafika:Qualcomm® Adreno™\r\nTyp ekranu:Błyszczący, LED', 'Laptop', 4),
(16, 'Apple MacBook Air M2/8GB/256/Mac OS Midnight', 'Procesor:Apple M2\r\nPamięć:8 GB\r\nGrafika:Apple M2 [8 rdzeni]\r\nTyp ekranu:Błyszczący, LED, IPS, Liquid Retina', 'Laptop', 2),
(17, 'Acer Chromebook Plus i5-1235U/8GB/512 ChromeOS', 'Procesor:Intel® Core™ i5-1235U\r\nPamięć:8 GB\r\nGrafika:Intel Iris Xe Graphics\r\nTyp ekranu:Matowy, LED, IPS', 'Laptop', 3),
(18, 'G4M3R HERO', 'System:Microsoft Windows 11 Home\r\nProcesor:Intel Core i5-14400F\r\nGrafika:NVIDIA GeForce RTX 4060 Ti\r\nPamięć RAM:32 GB', 'Computer', 5),
(19, 'Acer Nitro 50', 'System:Microsoft Windows 11 Home\r\nProcesor:Intel Core i5-12400F\r\nGrafika:NVIDIA GeForce GTX 1660 SUPER\r\nPamięć RAM:16 GB', 'Computer', 2),
(20, 'Dell Vostro 3020 MT', 'System:Microsoft Windows 11 Pro\r\nProcesor:Intel Core i5-13400\r\nGrafika:Intel UHD Graphics 730\r\nPamięć RAM:16 GB', 'Computer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `password`, `type`, `token`) VALUES
(1, 'admin', '$2y$10$MWzskZgPHRpDhQ.a9SlI9.s8Pb6KSdkSG6Wg2PuUKp66EWHD.N1eu', 'admin', '6c9a9a8d8205a1bc630d61bc68919efd22e1c517c9cacd3244f15d0f1f203df1'),
(2, 'user', '$2y$10$qNygCsIEPtxwRumfQfVTP.O8wwVCMsLnq7S8hezQ4/.2HtZPR.Md6', 'user', '2832bbb85ae7b5e8b8d84c8bb4eaf343b429f240297811b0992722bea26abbba'),
(12, 'test', '$2y$10$xZvj7fTellaYLaJ1D5E2GeCFtgDiQUYFyJ89Rpw0R4n2dSv1OA3oy', 'user', '579df7f036f8678179c61aace2dccba8328c63f3ba3baf3bdc30bd953a2c633a'),
(13, 'tff', '$2y$10$3RZDvpkRAZ0JqYcfiP28DOtwsd6aUATPqdcGPYlDR/Qg7c4H5E5bu', 'user', '296d9a0378eb6cee608b6f38ae4cbbdf1772c9deb1f74942d67e564932f5004c'),
(14, 'lol', '$2y$10$ua78J4JMhoVa2NcY2tjyNedxYcKqUo5FGUeQeS4x66F9DVLuMCVHu', 'user', 'a8768f86a40d13ee13bce6bfd4b60cbb657cfd70ec353c88562f63e59a2fda85'),
(15, 'awer', '$2y$10$KGqBQob7X5LYL2NbJYfjDuyO6uqAIEu5tE7slSn4Dg3.xsQyCRhN.', 'user', '4c87325b82a30de989880bab0aec231209cc9dd5134fd27df412b18a9dc64e0b'),
(16, 'test22', '$2y$10$RWDGY/.yT9qQ35WvqBRskelqpQ6ZhQ/w5WN5UTYgK59s/DCp7vi0i', 'user', '5f719cbac78d239e76a6ae38ba8c8758c860dc466cee0f15e49b73e8ba726256'),
(17, 'tsregesrg', '$2y$10$2KZd8LjuufEeEoL0q/q35efz7QJFyIMl/K7/bn8rJAZJtOSy7N2TS', 'user', '3debbdd524fdb8cf456257c87e54a70353a0207c8c4abcd4ba449386c03d9623');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
