-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 10:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankq_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `fname`, `lname`) VALUES
('alibaffa@app.com', '5f4dcc3b5aa765d61d8327deb882cf', 'Aliyu', 'Baffa');

-- --------------------------------------------------------

--
-- Table structure for table `attendant`
--

CREATE TABLE `attendant` (
  `id` int(10) NOT NULL,
  `email` text NOT NULL,
  `attendant_name` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendant`
--

INSERT INTO `attendant` (`id`, `email`, `attendant_name`, `password`, `category_id`) VALUES
(1, 'admin@app.com', 'Williams bilal', 'password', 1),
(2, 'Bili@app.com', 'Williams Bilal', 'password', 1),
(3, 'bboard@app.com', 'bidal othman', '', 1),
(5, 'bashbaba@app.com', 'bashir ibrahim muhammad', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(6, 'lahms@app.com', 'lamboghini roboot', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(7, 'brokas@app.com', 'holland brokes', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(8, 'bala@app.com', 'bala', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(9, 'magaji@app.com', 'mal. magaji', '96d39c32a7d7288ebcfc0f847671c90c', 1),
(10, 'dod@app.com', 'dodo', '5f4dcc3b5aa765d61d8327deb882cf99', 3),
(11, 'falalu@app.com', 'falalu', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(12, 'hassan@app.com', 'bilal', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(13, 'bisola@app.com', 'maryam', '5f4dcc3b5aa765d61d8327deb882cf99', 4),
(14, 'isa@app.com', 'mansura', '5f4dcc3b5aa765d61d8327deb882cf99', 4),
(15, 'magaji@app.com', 'magaji', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Cash Deposit', 'this is the category for customers for wish to deposit cash into any desired account '),
(2, 'Customer Care', 'this is the category where customers are expected to table their complaining, request for special services and also get clarified about various services rendered in the bank  '),
(3, 'Bulk Withdrawal', 'This category cater for customers who might want to withdraw large amount of money'),
(4, 'Mint', 'customers who want to apply for mint currency are found under this category');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `qnumber` int(10) NOT NULL DEFAULT '0',
  `category_id` int(10) NOT NULL,
  `attendant_id` int(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `category_id` int(10) NOT NULL,
  `attendant_id` int(10) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `fname`, `lname`, `email`, `category_id`, `attendant_id`, `time`) VALUES
(1, 'kukky', 'bukola', 'bukky@app.com', 3, 8, '2018-05-18'),
(2, 'barda', 'baba', 'boda@app.com', 1, 8, '2018-05-18'),
(3, '', '', '', 0, 8, '2018-05-18'),
(4, 'banta', 'romio', 'romio@app.com', 4, 14, '2018-05-18'),
(5, 'mazi', 'okhafor', 'tontoh@app.com', 2, 12, '2018-05-18'),
(6, 'mazi', 'okwonkwo', 'okwonkwo@app.com', 2, 12, '2018-05-18'),
(7, 'fasasi', 'kunle', 'kuli@APP.COM', 2, 12, '2018-05-18'),
(8, 'temmy', 'belly', 'beky@app.com', 4, 12, '2018-05-18'),
(9, 'funky', 'lola', 'funkybae@app.com', 1, 12, '2018-05-18'),
(10, 'embashoo', 'bash', 'bas@app.com', 1, 9, '2018-05-20'),
(11, 'amina', 'bashir', 'bashOO@app.com', 1, 9, '2018-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendant`
--
ALTER TABLE `attendant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendant`
--
ALTER TABLE `attendant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
