-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 04:14 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_computing`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(40) NOT NULL,
  `Book_no` int(11) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `edition` int(11) NOT NULL,
  `Pdf_Path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Name`, `Book_no`, `Author`, `edition`, `Pdf_Path`) VALUES
('Joy of Engineering', 123451, 'Surya', 9, ''),
('Java', 123452, 'peterson', 1, ''),
('Microprocessors and Interfacing', 123453, 'Doughas V Hall', 2, ''),
('Database Design', 123454, 'Clare Clurcher', 2, 'http://iips.icci.edu.iq/images/exam/databases-ramaz.pdf'),
('Cloud Computing', 123455, 'James F.Ransome', 2, ''),
('Introduction To Algorithms', 123456, 'Thomas H.Cormen', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Sname` varchar(30) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Book_name` varchar(30) NOT NULL,
  `Book_no` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Sname`, `ID`, `Book_name`, `Book_no`) VALUES
('Mohit Verma', '15B00210', 'Algorithm design', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('Mohit_khotani', '789'),
('mm', '123'),
('verma.15cse@bml.edu.in', '890'),
('abcd', '901'),
('Admin@bml.edu.in', '9001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_no`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Book_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
