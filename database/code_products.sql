-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2020 at 01:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_Image` varchar(400) NOT NULL,
  `product_name` varchar(400) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_Image`, `product_name`, `description`, `price`) VALUES
(1, 'https://images-na.ssl-images-amazon.com/images/I/51n24DedexL._SL1024_.jpg', 'Apple iPhone XR (64GB internal storage) - Blue', '6.1-inch Liquid Retina display (LCD)\r\nIP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)\r\n12MP camera with OIS and 7MP TrueDepth front camera—Portrait mode, Portrait Lighting, Depth Control, and Smart HDR\r\nFace ID for secure authentication\r\nA12 Bionic with next-generation Neural Engine\r\nWireless charging—works with Qi chargers\r\niOS 12 with Memoji, Screen Time, Siri Shortcuts', '499000'),
(2, 'https://www.91-img.com/pictures/136305-v2-realme-5s-mobile-phone-large-1.jpg?tr=q-60', 'Redmi Note 8 (Neptune Blue, 6GB RAM, 128GB Storage)', '48MP AI Quad camera with portrait, ultra-wide lens, macro lens, LED flash, AI support, beautify support | 13MP front camera with AI portrait mode\r\n16.002 centimeters (6.3-inch) IPS LCD multi-touch capacitive touchscreen with 2280 x 1080 pixels resolution, 403 ppi pixel density and 19.5:9 aspect ratio | 2.5D curved glass\r\nMemory, Storage & SIM: 6GB RAM | 128GB internal memory expandable up to 512GB', '13999'),
(3, 'https://www.harshaindia.com/image/cache/data/Harsha/Cell%20Phone%20Image/CP%2057/IT00084856-300x400.jpg', 'Vivo Y91i (Ocean Blue, 2GB RAM, 32GB Storage)', '13MP rear camera | 5MP front camera\r\n15.80 centimeters (6.22-inch) multi-touch capacitive touchscreen with 1520 x 720 pixels resolution\r\nMemory, Storage & SIM: 2GB RAM | 32GB internal memory expandable up to 256GB | Dual SIM (nano+nano) dual-standby (4G+4G)\r\nAndroid Oreo v8.1 operating system with Helio P22 octa core processor\r\n4030mAH lithium-ion battery\r\n1 year manufacturer warranty for device a', '7898'),
(4, 'https://www.gizmochina.com/wp-content/uploads/2018/01/micromax-canvas1-mobile-phone-large-1-300x400.jpg', 'OPPO F11 (Fluorite Purple, 6GB RAM, 128GB Storage)', '48MP+5MP dual rear camera with normal, video, expert, time-lapse, panorama, portrait, slow-motion | 16MP front camera\r\n16.58 centimeters (6.5-inch) FHD+ multi-touch capacitive touchscreen with 2340 x 1080 pixels resolution, 394 ppi pixel density\r\nMemory, Storage & SIM: 6GB RAM | 128GB internal memory expandable up to 256GB | Dual SIM (nano+nano) dual-standby (4G+4G)\r\nAndroid ColorOS v6.0 operating', '14990'),
(5, 'https://www.gizmochina.com/wp-content/uploads/2018/08/Motorola-One-Power-300x400.jpg', '\r\nSamsung Galaxy M30 (Gradation Blue, 4GB RAM, 64GB Storage, 5000mAH Battery)', '13 MP + 5 MP + 5 MP Triple rear camera | 16MP front facing camera\r\n16.21 centimeters (6.4-inch) FHD+ multi-touch capacitive touchscreen with 2340 x 1080 pixels resolution and 16M color support\r\nMemory, Storage and SIM: 4GB RAM | 64GB internal memory expandable up to 512GB | Dual SIM (nano+nano) dual-standby (4G+4G)\r\nAndroid Oreo v8.1 operating system with 1.8GHz Exynos 7904 octa core processor\r\n50', '12999'),
(6, 'https://www.themobileinfo.com/wp-content/uploads/2019/07/Front-view-of-Apple-iPhone-X-300x400.jpg', 'Panasonic Eluga Ray 810 (4GB RAM, 64GB Storage) (Starry Black)', '16 MP & 2 MP Dual Primary Cameras with autofocus | 16 MP Front Camera with Flash\r\n6.2 inches (15.75 cm) 720 x 1500 pixels | Notch Display | Rear Fingerprint Sensor\r\n4GB RAM | 64GB internal memory expandable up to 128GB | Dual SIM dual-standby (4G+4G)', '9499');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `sNo` int(11) NOT NULL,
  `email` varchar(400) NOT NULL,
  `product_id` int(40) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`sNo`, `email`, `product_id`, `rating`) VALUES
(1, 'hanuman@gmail.com', 1, 4),
(2, 'hanuman@gmail.com', 2, 1),
(3, 'kalyan@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sNo` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sNo`, `Name`, `email`, `password`) VALUES
(1, 'hanuman', 'hanuman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'kalyan', 'hanuman@gmail.com', 'ece7f89ed99289d5692e47660b97a7ca'),
(3, 'kalyan', 'kalyan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
