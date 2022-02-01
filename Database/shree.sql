-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 11:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shree`
--

-- --------------------------------------------------------

--
-- Table structure for table `cityrequest`
--

CREATE TABLE `cityrequest` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cityrequest`
--

INSERT INTO `cityrequest` (`id`, `city`) VALUES
(1, 'surat'),
(2, 'valsad');

-- --------------------------------------------------------

--
-- Table structure for table `crimerelated`
--

CREATE TABLE `crimerelated` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `rank` int(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `mno` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `lno` int(10) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `policestat` varchar(20) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `slno` int(20) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `sp` varchar(30) NOT NULL,
  `firno` int(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `polices` varchar(40) NOT NULL,
  `upload` varchar(30) NOT NULL,
  `gist` varchar(100) NOT NULL,
  `invest` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crimerelated`
--

INSERT INTO `crimerelated` (`id`, `fname`, `rank`, `dept`, `mno`, `email`, `lno`, `stat`, `dist`, `policestat`, `sname`, `slno`, `semail`, `sp`, `firno`, `district`, `polices`, `upload`, `gist`, `invest`, `city`, `code`) VALUES
(5, 'sa', 1535465, '5464654', 5164646, 'aayu@gmail.com', 64646464, 'Gujarat', '4464', '6464', '4466', 464645, '54654654', 'sdfg', 46464, '4646', '46464', 'apps.png', '65654646', '46464354                                      ', 'sbc', '83tsU'),
(172, 'John', 12, 'abc', 2147483647, 'a@a.aa', 2165156, '1', 'surat', 'katargam', 'smith', 1234567, 'x@y.com', '1', 1, 'surat', 'katargam', 'New Text Document.txt', 'cbkjb', 'jbckj', '1', '83tsU'),
(176, 'Smith', 15, 'xyz', 2147483647, 'aa@ss.co', 2165156, '1', 'surat', 'katargam', 'smith', 1234567, 'x@y.com', '1', 1, 'surat', 'katargam', 'New Text Document.txt', 'sv SDVfdB', 'azcsdv', '1', '83tsU'),
(177, 'John', 12, 'ce', 2147483647, 'n@n.com', 1231547, '1', 'surat', 'adajan', 'smith kumar', 2147483647, 'a@b.cd', '1', 1, 'surat', 'adajan', 'Case Studies Values -Ethics D-', 'lorem epsim', 'jckbdsbvuisdbviuabbvusbvhsbdvjkbsj jbsdhvbjhbsdjb', '2', '83tsU'),
(178, 'a', 2, 'a', 2147483647, 'n@n.com', 1, '1', 'surat', 'ncb bcu', 'knvb', 151515, 'jcbj@bcbc.com', '1', 2, 'surat', 'katargam', '', 'ivn', 'kvn', '1', '83tsU'),
(179, 'a', 1, 'aa', 1111111111, 'a@a.aa', 1, '1', 'jhbj', 'hn jbj', 'jvb bcjb', 46161, 'a@b.cd', '2', 1, 'ccc', 'vcd dvv', '', 'cbhj hjbch chj jv hj vjhc ', 'hcjhjbvjsv  v svhj', '1', '83tsU');

-- --------------------------------------------------------

--
-- Table structure for table `rolestable`
--

CREATE TABLE `rolestable` (
  `rid` int(20) NOT NULL,
  `role` varchar(40) NOT NULL,
  `roleinfo` varchar(40) NOT NULL,
  `permisions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rolestable`
--

INSERT INTO `rolestable` (`rid`, `role`, `roleinfo`, `permisions`) VALUES
(0, 'user', 'normal user', ''),
(1, 'admin', 'admin', 'm1-0,m1-2,m2-0,m2-2,m3-0,m3-2'),
(2, 'manager', 'manager', 'm1-0,m2-0');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Gujarat'),
(2, 'Maharastra'),
(3, 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `supervising`
--

CREATE TABLE `supervising` (
  `id` int(11) NOT NULL,
  `sp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervising`
--

INSERT INTO `supervising` (`id`, `sp`) VALUES
(1, 'yes'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactusquery`
--

CREATE TABLE `tbl_contactusquery` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `ph_no` int(100) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactusquery`
--

INSERT INTO `tbl_contactusquery` (`id`, `firstname`, `lastname`, `email`, `msg`, `ph_no`, `posting_date`) VALUES
(1, 'jon', 'doe', '19ce117@charusat.edu.in', 'Hello there', 1111111111, '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shreeimages`
--

CREATE TABLE `tbl_shreeimages` (
  `id` int(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `password`, `rid`) VALUES
(1, 'admin', 'Admin', 'User', '12345678', 1),
(2, 'manager', 'manager', 'manager', 'manager1', 2),
(3, 'deeprana00', 'Deep', 'Rana', 'd1234567', 0),
(4, 'john123', 'john', 'due', '123456789', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cityrequest`
--
ALTER TABLE `cityrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crimerelated`
--
ALTER TABLE `crimerelated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolestable`
--
ALTER TABLE `rolestable`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervising`
--
ALTER TABLE `supervising`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contactusquery`
--
ALTER TABLE `tbl_contactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shreeimages`
--
ALTER TABLE `tbl_shreeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cityrequest`
--
ALTER TABLE `cityrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crimerelated`
--
ALTER TABLE `crimerelated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `rolestable`
--
ALTER TABLE `rolestable`
  MODIFY `rid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supervising`
--
ALTER TABLE `supervising`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contactusquery`
--
ALTER TABLE `tbl_contactusquery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_shreeimages`
--
ALTER TABLE `tbl_shreeimages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`rid`) REFERENCES `rolestable` (`rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
