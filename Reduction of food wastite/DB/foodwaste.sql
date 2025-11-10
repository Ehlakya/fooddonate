-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2022 at 04:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodwaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE IF NOT EXISTS `addfood` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Donorid` varchar(100) NOT NULL,
  `Donorname` varchar(100) NOT NULL,
  `Food` varchar(100) NOT NULL,
  `Dateoffood` varchar(100) NOT NULL,
  `Qty` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`id`, `Donorid`, `Donorname`, `Food`, `Dateoffood`, `Qty`, `Location`) VALUES
(3, 'ravi', 'ravi', 'Dosa', '21/1/2022', '500', 'Saravanampattil'),
(4, 'ravi', 'ravi', 'idly', '21/1/2022', '300', 'Saravanampattil');

-- --------------------------------------------------------

--
-- Table structure for table `fooddonor`
--

CREATE TABLE IF NOT EXISTS `fooddonor` (
  `Donoruid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Dname` varchar(100) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooddonor`
--

INSERT INTO `fooddonor` (`Donoruid`, `Pwd`, `Dname`, `Addr`, `Mobile`, `Emailid`) VALUES
('ravi', 'ravi', 'ravi', '7th street', '9001231231', 'ravi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Donateid` varchar(100) NOT NULL,
  `Seekeruid` varchar(100) NOT NULL,
  `Seekername` varchar(100) NOT NULL,
  `Requestdate` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Donoruid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `Donateid`, `Seekeruid`, `Seekername`, `Requestdate`, `Status`, `Donoruid`) VALUES
(6, '3', 'nanda', 'nanda', '04/23/22', 'Accept', 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE IF NOT EXISTS `seeker` (
  `Seekeruid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`Seekeruid`, `Pwd`, `Sname`, `Addr`, `Mobile`, `Emailid`) VALUES
('nanda', 'nanda', 'nanda', '7th street', '9001231231', 'nanda@gmail.com');
