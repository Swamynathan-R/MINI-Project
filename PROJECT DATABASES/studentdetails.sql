-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 22, 2020 at 07:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `department` varchar(40) NOT NULL,
  `deptno` varchar(13) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `language` varchar(40) NOT NULL,
  `Nme` varchar(40) NOT NULL,
  `Activity` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`department`, `deptno`, `studentname`, `language`, `Nme`, `Activity`) VALUES
('BCA', 'ucaa1701', 'venkat', 'Tamil', 'Business Administration', 'NCC'),
('BCA', 'ucaa1702', 'varun', 'Sanskrit', 'AdvancedTamil', 'NSS'),
('BCA', 'ucaa1703', 'karan', 'Tamil', 'B.Com.(A&F)', 'ROTARACT'),
('BCA', 'ucaa1704', 'Manoj', 'Tamil', 'B.Com.(CS)', 'YRC'),
('BCA', 'ucaa1705', 'Tharun', 'Tamil', 'B.Com.(BM)', 'FineArts'),
('BCA', 'ucaa1706', 'Rajesh', 'Tamil', 'B.Com.(General)', 'NSS'),
('BCA', 'ucaa1707', 'Harish', 'Tamil', 'B.Com.(General)', 'NSS'),
('BCA', 'ucaa1708', 'Anand', 'Tamil', 'B.Com.(CA)', 'ROTARACT'),
('BCA', 'ucaa1709', 'Arjun', 'Tamil', 'B.Com.(ISM)', 'YRC'),
('BCA', 'ucaa1710', 'Arjun raj', 'Hindi', 'AdvancedTamil', 'YRC'),
('B.Com.(General)', 'ucga1701', 'Rahul', 'Tamil', 'Computer Science', 'NCC'),
('B.Com.(General)', 'ucga1702', 'Rio', 'Tamil', 'Computer Science', 'NCC'),
('B.Sc Computer Science', 'ucsa1701', 'Akshay', 'Tamil', 'B.Com.(A&F)', 'NSS'),
('B.Sc Computer Science', 'ucsa1702', 'srinivasan', 'Tamil', 'B.Com.(CS)', 'ROTARACT'),
('B.Sc Computer Science', 'ucsa1703', 'Mohan', 'Tamil', 'B.Com.(BM)', 'ROTARACT'),
('B.Sc Computer Science', 'ucsa1704', 'karthikeyan', 'Tamil', 'B.Com.(CA)', 'YRC'),
('B.Sc Computer Science', 'ucsa1705', 'karthik', 'Tamil', 'B.Com.(ISM)', 'ROTARACT'),
('B.Sc Computer Science', 'ucsa1706', 'hari prasad', 'Sanskrit', 'BasicTamil', 'ROTARACT'),
('B.Sc Computer Science', 'ucsa1707', 'swamynathan', 'Tamil', 'B.Com.(General)', 'NSS'),
('B.Sc Computer Science', 'ucsa1717', 'Dinesh', 'Tamil', 'Business Administration', 'NCC'),
('B.Sc Computer Science', 'ucsa1718', 'sanjay', 'Tamil', 'B.Com.(General)', 'YRC'),
('B.Sc Computer Science', 'ucsa1720', 'abishek', 'Hindi', 'AdvancedTamil', 'NSS'),
('B.Sc Computer Science', 'ucsa1732', 'jagannathan', 'Tamil', 'B.Com.(General)', 'YRC'),
('B.Sc Computer Science', 'ucsa1742', 'Surya', 'Tamil', 'B.Com.(BM)', 'YRC'),
('B.Sc Computer Science', 'ucsa1749', 'dilli ganesh', 'Tamil', 'B.Com.(BM)', 'YRC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`deptno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
