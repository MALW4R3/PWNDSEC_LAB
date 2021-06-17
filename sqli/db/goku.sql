-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 03:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `datesave`) VALUES
(1, 'goku', 's3cp4ssg0ku', 'GOKU', '2018-06-14 11:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_name`, `m_email`, `m_tel`, `m_address`, `date_save`) VALUES
(9, '777', '777', 'foodra', 'wsss@gmail.com', '053733708', 'PWN', '2018-06-16 09:26:55'),
(10, '144', '311', 'wiratai', 'boom@m.com', '043324754', 'PWN', '2018-06-16 09:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_status` int(1) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_detail`, `p_img`, `p_price`, `p_status`, `datesave`) VALUES
(31, 'GOKU 1', 12, '<p>ราคา 19,000 บาท</p>\r\n', 'GOKU1.jpg', 19, 0, '2021-02-09 14:17:35'),
(32, 'GOKU 2', 12, '<p>ราคา 12,000 บาท</p>\r\n', 'GOKU2.jpg', 12000, 0, '2021-02-09 14:18:03'),
(33, 'GOKU 3', 12, '<p>ราคา 15,000 บาท</p>\r\n', 'GOKU3.jpg', 9000, 0, '2021-02-09 14:18:52'),
(34, 'GOKU 4', 12, '<p>ราคา 20,000</p>\r\n', 'GOKU4.jfif', 20000, 0, '2021-02-09 14:19:21');
(34, '????', 12, '<p>ราคา 000000</p>\r\n', 'shell.php.gif', 000000, 0, '2021-02-09 14:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(12, 'ฟิกเกอร์ goku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
