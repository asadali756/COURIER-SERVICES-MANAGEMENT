-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 06:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriers`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `courierid_fk` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `courierid_fk`, `amount`, `payment_method`, `payment_status`, `transaction_date`) VALUES
(1, 9, '2000', 'Cash 2000', 'Authorization Successful', '2024-10-10'),
(3, 24, '1000', 'online', 'Authorization Successful', '2024-12-05'),
(4, 24, '500', 'cash', 'pending', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Parcel` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `Tracking_Id` int(11) NOT NULL,
  `parcel_status` int(255) NOT NULL DEFAULT 1,
  `customer_id` int(255) NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `Customer_Name`, `Parcel`, `contact`, `vehicle_type`, `Tracking_Id`, `parcel_status`, `customer_id`, `courier_name`, `date`) VALUES
(46, 'Asad Ali', 'book', '034567890', 'bike', 632536, 1, 2, 'Pcl services', '2024-11-09'),
(47, 'Shabbir', 'watch', '03042559601', 'bike', 558245, 1, 2, 'TCS', '2024-10-09'),
(48, 'Shabbir', 'watch', '03042559601', 'bike', 741996, 1, 2, 'TCS', '2024-10-09'),
(49, 'yasir', 'car', '034567890', 'bike', 168620, 1, 2, 'Pia Speedex', '2024-10-09'),
(50, 'affan', 'watch', '03037890', 'car', 496984, 1, 1, 'Burak', '2024-10-10'),
(51, 'Affan', 'watch', '034567890', 'mini bus', 193017, 1, 1, 'Tcs', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `recipient_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `deliver_date` date NOT NULL,
  `deliver_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `recipient_name`, `contact`, `deliver_date`, `deliver_time`) VALUES
(2, 'Haider Ali', '0987654321', '2024-10-10', '10:10'),
(3, 'Haider Ali', '0987654321', '2024-10-10', '10:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `nameid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `feedback`, `nameid_fk`) VALUES
(1, 'ASAD', 'ALI', 'asad@gmail.com', 'NICE SITE SO WAR.\r\n', 0),
(2, 'ASAD', 'ALI', 'asad@gmail.com', 'NICE SITE SO WAR.\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Asad', '$2y$10$blXEgWvb4CHkxyVkc.WIpOwDRw/qPnqY9t8ZLRlMvcY26plbjn/Mi'),
(2, 'ABBAS', '$2y$10$lwZFjP5pbv2BUnH9U98vJO/vmcv.ER47nshxRTsVctFY0PemB2CN2'),
(3, 'HARRY', '$2y$10$vhBXSiWrydMAJ5PXkFYObu9UL.wyB5JA2L0DpuumqkPBXMXNt1Iru'),
(4, 'Asad', '$2y$10$4KSaFf8kAIVJTIU4czScjuOBmGLwwiPuANywubFYrWQRbFakJKTvi'),
(5, 'HARRY', '12345'),
(6, 'asad', '$2y$10$leEtQ/2.8W7Udbs9Bhamu.Qs3Cs2Tap8NDHMR5zgWdaFF5zxFvsly'),
(7, 'asad', '123456'),
(8, 'HARRY', '123456'),
(9, 'HARRY', '123456789'),
(10, 'Asad ali', 'asd1234566'),
(11, 'babar', '123456'),
(12, 'HARRY', '1234567890'),
(13, 'harris', '7777'),
(14, 'HARRY', '7878789'),
(15, 'admin', '909090'),
(16, 'asad', 'asad'),
(17, 'ZAHID', '123456'),
(18, 'asad', 'asadali123'),
(19, 'admin', '123'),
(20, 'dexter', '12345'),
(21, 'abc', '12345'),
(22, 'alex', '7575'),
(23, 'HARRY', '12345'),
(24, 'asad', '12345'),
(25, 'admin', '7575'),
(26, 'admin', '404505'),
(27, 'admin', '7575'),
(28, 'admin', '7575');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sufiyan', 'sufiyan@gmail.com', '123456'),
(2, 'Wasayali', 'wasay@gmail.com', '12345'),
(3, 'yasirminhas', 'yasir@gmail.com', '$2y$10$PsIuzumdzV./IV5Rg4eG0.MZI4EB.UOb2kaHqWc.3hdU8Cg.k3KYm');

--
-- Triggers `registered`
--
DELIMITER $$
CREATE TRIGGER `getname` AFTER INSERT ON `registered` FOR EACH ROW BEGIN 
    INSERT INTO user_trigger (message) VALUES ('New User Has Been Registered');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `send_from`
--

CREATE TABLE `send_from` (
  `id` int(11) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `send_from`
--

INSERT INTO `send_from` (`id`, `from`, `to`, `nop`, `weight`, `length`) VALUES
(3, 'Lahore main gt road', 'Karachi north nazimabad', '3', '3.5kg', '10cm'),
(4, 'sukkur', 'multan', '2', '25kg', '10cm');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'pending'),
(2, 'Delivered'),
(3, 'On The Way!');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`) VALUES
(1, 'Bilal@gmail.com', 'bilal@gmail.com', '$2y$10$m0irIXOOZt.w4egz.jUAXu8rN5ydflCy.c15m6TDErBIVi8EUTPkG'),
(2, 'rafay', 'rafay@gmail.com', '$2y$10$m0irIXOOZt.w4egz.jUAXu8rN5ydflCy.c15m6TDErBIVi8EUTPkG'),
(4, 'zain', 'zain@gmail.com', '$2y$10$m0irIXOOZt.w4egz.jUAXu8rN5ydflCy.c15m6TDErBIVi8EUTPkG'),
(5, 'asadali', 'asad@gmail.com', '$2y$10$m0irIXOOZt.w4egz.jUAXu8rN5ydflCy.c15m6TDErBIVi8EUTPkG'),
(6, 'asadali', 'asad@gmail.com', '12345'),
(7, 'haseeb', 'haseeb@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courierid_fk` (`courierid_fk`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parcel_status` (`parcel_status`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_from`
--
ALTER TABLE `send_from`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `send_from`
--
ALTER TABLE `send_from`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `couriers`
--
ALTER TABLE `couriers`
  ADD CONSTRAINT `couriers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `usertable` (`id`),
  ADD CONSTRAINT `fk_parcel_status` FOREIGN KEY (`parcel_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
