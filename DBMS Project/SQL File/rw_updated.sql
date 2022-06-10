-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw_updated`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` varchar(50) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_task`
--

CREATE TABLE `employee_task` (
  `Task_ID` int(11) NOT NULL,
  `Task_Title` varchar(50) NOT NULL,
  `Task_Details` varchar(500) NOT NULL,
  `Task_City` varchar(20) NOT NULL,
  `Task_Road` varchar(50) NOT NULL,
  `Task_Bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_contact`
--

CREATE TABLE `emp_contact` (
  `ID` int(11) NOT NULL,
  `Emp_Id` int(11) NOT NULL,
  `emp_email` varchar(200) DEFAULT NULL,
  `Comment` varchar(500) NOT NULL,
  `Reply` varchar(500) NOT NULL,
  `Emp_name` varchar(100) NOT NULL,
  `Time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist_data`
--

CREATE TABLE `orderlist_data` (
  `Order_No` int(11) NOT NULL,
  `Order_Bill` int(11) NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Gallons` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Purification_ID` varchar(10) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `Order_No` int(11) NOT NULL,
  `Order_Bill` double NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Gallons` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Purification_ID` varchar(10) DEFAULT 'C0001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purification`
--

CREATE TABLE `purification` (
  `Purification_ID` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Available_Gallons` int(11) NOT NULL,
  `Purification_Date` date NOT NULL,
  `Purification_Cost` float NOT NULL,
  `City` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `id` int(11) NOT NULL,
  `Water_Type` varchar(20) NOT NULL,
  `Quality` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `Road_ID` int(11) NOT NULL,
  `Street_No` varchar(20) NOT NULL,
  `Street_Length` float NOT NULL,
  `City` varchar(50) NOT NULL,
  `Machine_Availability` varchar(20) NOT NULL,
  `No_of_Machines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE `tasklist` (
  `Unique_ID` int(11) NOT NULL,
  `Task_ID` int(11) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Task_Title` varchar(50) NOT NULL,
  `Task_Details` varchar(500) NOT NULL,
  `Task_City` varchar(20) NOT NULL,
  `Task_Road` varchar(50) NOT NULL,
  `Task_Bill` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `User_ID` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `User_Password` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `employee_task`
--
ALTER TABLE `employee_task`
  ADD PRIMARY KEY (`Task_ID`);

--
-- Indexes for table `emp_contact`
--
ALTER TABLE `emp_contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderlist_data`
--
ALTER TABLE `orderlist_data`
  ADD PRIMARY KEY (`Order_No`),
  ADD KEY `Purification_ID` (`Purification_ID`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`Order_No`),
  ADD KEY `fk_purification_id` (`Purification_ID`);

--
-- Indexes for table `purification`
--
ALTER TABLE `purification`
  ADD PRIMARY KEY (`Purification_ID`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`Road_ID`);

--
-- Indexes for table `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`Unique_ID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_task`
--
ALTER TABLE `employee_task`
  MODIFY `Task_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_contact`
--
ALTER TABLE `emp_contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderlist_data`
--
ALTER TABLE `orderlist_data`
  MODIFY `Order_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `Order_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `road`
--
ALTER TABLE `road`
  MODIFY `Road_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `Unique_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderlist_data`
--
ALTER TABLE `orderlist_data`
  ADD CONSTRAINT `orderlist_data_ibfk_1` FOREIGN KEY (`Purification_ID`) REFERENCES `purification` (`Purification_ID`);

--
-- Constraints for table `order_data`
--
ALTER TABLE `order_data`
  ADD CONSTRAINT `fk_purification_id` FOREIGN KEY (`Purification_ID`) REFERENCES `purification` (`Purification_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
