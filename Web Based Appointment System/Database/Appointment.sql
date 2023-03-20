-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 03:33 PM
-- Server version: 5.2.3
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appointment`
--
CREATE DATABASE `appointment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `appointment`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MailID` varchar(25) NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Name`, `Gender`, `MailID`, `MobileNo`, `Address`, `Designation`, `Salary`) VALUES
(1, 'prakash', 'Male', 'prakash@gmail.com', '9003543800', 'Trichy', 'Manager', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `CID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Proprietor` varchar(20) NOT NULL,
  `Production` varchar(20) NOT NULL,
  `MobileNo` varchar(25) NOT NULL,
  `MailID` varchar(25) NOT NULL,
  `PInfo` varchar(255) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`CID`, `Name`, `Address`, `Proprietor`, `Production`, `MobileNo`, `MailID`, `PInfo`, `Password`) VALUES
(10010, 'Prime Solution', 'Gandhi Puram\r\nCbe', 'Vijay', 'Project', '9003543800', 'Vijay@gmail.com', 'Project Training and Development', '111');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestID` int(11) NOT NULL,
  `CompanyID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Proprietor` varchar(20) NOT NULL,
  `Production` varchar(20) NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `A_For` varchar(255) NOT NULL,
  `A_Date` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RequestID`, `CompanyID`, `Name`, `Address`, `Proprietor`, `Production`, `MobileNo`, `A_For`, `A_Date`, `Status`, `Comments`) VALUES
(1, '10010', 'Prime Solution', 'Gandhi Puram\r\nCbe', 'Vijay', 'Project', '9003543800', 'join with you as a vendor', '21-01-2019', 'Approve', 'Meet me.');
