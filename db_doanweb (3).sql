-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 03:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_doanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
`ID_Account` int(255) NOT NULL,
  `Username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ID_User` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Staff` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Right` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE IF NOT EXISTS `tbl_adminlogin` (
  `ID_admin` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`ID_admin`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `ID_Bill` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Shipping_date` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ID_User` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Sum_of_money` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
`id` int(11) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `user` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `totalCost` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE IF NOT EXISTS `tbl_color` (
  `ID_Color` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`ID_Color`, `Name`) VALUES
('1', 'black'),
('2', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details_of_bills`
--

CREATE TABLE IF NOT EXISTS `tbl_details_of_bills` (
  `ID_Product` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Bill` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duty`
--

CREATE TABLE IF NOT EXISTS `tbl_duty` (
  `ID_Duty` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
  `ID_Images` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`ID_Images`, `Name`) VALUES
('2', 'image/1.jpg'),
('3', 'image/3.jpg'),
('4', 'image/31.jpg'),
('5', 'image/13.jpg'),
('6', 'image/18.jpg'),
('7', 'image/22.jpg'),
('8', 'image/24.jpg'),
('9', 'image/15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `ID_Product` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Selling_price` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ID_Images` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Sex` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`ID_Product`, `Name`, `category`, `Selling_price`, `Status`, `ID_Images`, `ID_Sex`) VALUES
('1', 'ao thun nam den', '', '100000', 'Remain', '2', NULL),
('2', 'ao thun trang', '', '110000', 'Remain', '3', NULL),
('3', 'Ao Zoo', 'q1', '50000', 'Remain', '4', NULL),
('4', 'Quan Tam', '', '200000', 'Remain', '5', NULL),
('5', 'Quan Dai Den', '', '300000', 'Remain', '6', NULL),
('6', 'Quan 1', 'q1', '100000', 'Remain', '7', NULL),
('7', 'Quan thun nam trang', '', '300000', 'Remain', '8', NULL),
('8', 'Quan thun nam den', '', '300000', 'Remain', '9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_right`
--

CREATE TABLE IF NOT EXISTS `tbl_right` (
  `ID_Right` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_right`
--

INSERT INTO `tbl_right` (`ID_Right`, `Name`) VALUES
('1', 'Giám đốc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_right_of_duty`
--

CREATE TABLE IF NOT EXISTS `tbl_right_of_duty` (
  `ID_Right` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ID_Duty` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sex`
--

CREATE TABLE IF NOT EXISTS `tbl_sex` (
  `ID_Sex` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_sex`
--

INSERT INTO `tbl_sex` (`ID_Sex`, `Name`) VALUES
('1', 'nam'),
('2', 'nữ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE IF NOT EXISTS `tbl_size` (
  `ID_Size` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`ID_Size`, `Name`) VALUES
('1', 'S'),
('2', 'M'),
('3', 'L'),
('4', 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `ID_Staff` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`ID_Staff`, `Name`, `Phone`, `Email`) VALUES
('1', 'Staff1', '0206602206', 'longdeptrai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_of_products`
--

CREATE TABLE IF NOT EXISTS `tbl_type_of_products` (
  `ID_Product` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Color` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ID_Size` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `category` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_type_of_products`
--

INSERT INTO `tbl_type_of_products` (`ID_Product`, `ID_Color`, `ID_Size`, `category`, `Price`, `Quantity`) VALUES
('1', '1', '1', '', '100000', '100'),
('2', '2', '1', '', '110000', '100'),
('3', '2', '1', '', '50000', '100'),
('4', '2', '1', '', '200000', '100'),
('5', '2', '1', '', '300000', '100'),
('6', '2', '1', 'q1', '100000', '100'),
('7', '2', '1', '', '300000', '100'),
('8', '2', '1', '', '300000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID_User` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID_User`, `Name`, `Phone`, `Address`, `Email`) VALUES
('1', 'User1', '0508805508', 'Nghĩa trang thành phố', 'trangprovipultraxsmax@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
 ADD PRIMARY KEY (`ID_Account`), ADD KEY `fk_account_staff_id` (`ID_Staff`), ADD KEY `fk_account_user_id` (`ID_User`), ADD KEY `fk_account_right_id` (`ID_Right`);

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
 ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
 ADD PRIMARY KEY (`ID_Bill`), ADD KEY `fk_bill_user_id` (`ID_User`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
 ADD PRIMARY KEY (`ID_Color`);

--
-- Indexes for table `tbl_details_of_bills`
--
ALTER TABLE `tbl_details_of_bills`
 ADD KEY `fk_detailbill_bill_id` (`ID_Bill`), ADD KEY `fk_detailbill_product_id` (`ID_Product`);

--
-- Indexes for table `tbl_duty`
--
ALTER TABLE `tbl_duty`
 ADD PRIMARY KEY (`ID_Duty`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
 ADD PRIMARY KEY (`ID_Images`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
 ADD PRIMARY KEY (`ID_Product`), ADD KEY `fk_product_sex_id` (`ID_Sex`), ADD KEY `fk_product_img_id` (`ID_Images`), ADD FULLTEXT KEY `ID_Images` (`ID_Images`);

--
-- Indexes for table `tbl_right`
--
ALTER TABLE `tbl_right`
 ADD PRIMARY KEY (`ID_Right`);

--
-- Indexes for table `tbl_right_of_duty`
--
ALTER TABLE `tbl_right_of_duty`
 ADD KEY `fk_rightduty_right_id` (`ID_Right`), ADD KEY `fk_rightduty_duty_id` (`ID_Duty`);

--
-- Indexes for table `tbl_sex`
--
ALTER TABLE `tbl_sex`
 ADD PRIMARY KEY (`ID_Sex`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
 ADD PRIMARY KEY (`ID_Size`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
 ADD PRIMARY KEY (`ID_Staff`);

--
-- Indexes for table `tbl_type_of_products`
--
ALTER TABLE `tbl_type_of_products`
 ADD KEY `fk_typeproduct_product_id` (`ID_Product`), ADD KEY `fk_typeproduct_size_id` (`ID_Size`), ADD KEY `fk_typeproduct_color_id` (`ID_Color`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
MODIFY `ID_Account` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_account`
--
ALTER TABLE `tbl_account`
ADD CONSTRAINT `fk_account_right_id` FOREIGN KEY (`ID_Right`) REFERENCES `tbl_right` (`ID_Right`),
ADD CONSTRAINT `fk_account_staff_id` FOREIGN KEY (`ID_Staff`) REFERENCES `tbl_staff` (`ID_Staff`),
ADD CONSTRAINT `fk_account_user_id` FOREIGN KEY (`ID_User`) REFERENCES `tbl_users` (`ID_User`);

--
-- Constraints for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
ADD CONSTRAINT `fk_bill_user_id` FOREIGN KEY (`ID_User`) REFERENCES `tbl_users` (`ID_User`);

--
-- Constraints for table `tbl_details_of_bills`
--
ALTER TABLE `tbl_details_of_bills`
ADD CONSTRAINT `fk_detailbill_bill_id` FOREIGN KEY (`ID_Bill`) REFERENCES `tbl_bill` (`ID_Bill`),
ADD CONSTRAINT `fk_detailbill_product_id` FOREIGN KEY (`ID_Product`) REFERENCES `tbl_product` (`ID_Product`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
ADD CONSTRAINT `fk_product_img_id` FOREIGN KEY (`ID_Images`) REFERENCES `tbl_images` (`ID_Images`),
ADD CONSTRAINT `fk_product_sex_id` FOREIGN KEY (`ID_Sex`) REFERENCES `tbl_sex` (`ID_Sex`);

--
-- Constraints for table `tbl_right_of_duty`
--
ALTER TABLE `tbl_right_of_duty`
ADD CONSTRAINT `fk_rightduty_duty_id` FOREIGN KEY (`ID_Duty`) REFERENCES `tbl_duty` (`ID_Duty`),
ADD CONSTRAINT `fk_rightduty_right_id` FOREIGN KEY (`ID_Right`) REFERENCES `tbl_right` (`ID_Right`);

--
-- Constraints for table `tbl_type_of_products`
--
ALTER TABLE `tbl_type_of_products`
ADD CONSTRAINT `fk_typeproduct_color_id` FOREIGN KEY (`ID_Color`) REFERENCES `tbl_color` (`ID_Color`),
ADD CONSTRAINT `fk_typeproduct_product` FOREIGN KEY (`ID_Product`) REFERENCES `tbl_product` (`ID_Product`),
ADD CONSTRAINT `fk_typeproduct_product_id` FOREIGN KEY (`ID_Product`) REFERENCES `tbl_product` (`ID_Product`),
ADD CONSTRAINT `fk_typeproduct_size_id` FOREIGN KEY (`ID_Size`) REFERENCES `tbl_size` (`ID_Size`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
