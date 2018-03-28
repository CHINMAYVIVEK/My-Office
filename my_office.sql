-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2016 at 07:19 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `a_name` varchar(30) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL,
  `a_loc` varchar(30) NOT NULL COMMENT 'Location of admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE IF NOT EXISTS `t_cart` (
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_p_qty` int(11) NOT NULL COMMENT 'Cart product quantity',
  `p_name` varchar(30) NOT NULL,
  `p_price` float NOT NULL COMMENT 'Price of one product'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE IF NOT EXISTS `t_order` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` int(11) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_order_user_det`
--

CREATE TABLE IF NOT EXISTS `t_order_user_det` (
  `u_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `o_name` varchar(30) NOT NULL,
  `o_email` varchar(30) NOT NULL,
  `o_mob` varchar(15) NOT NULL,
  `o_city` varchar(30) NOT NULL,
  `o_land` varchar(30) NOT NULL,
  `o_add` varchar(50) NOT NULL,
  `o_zip` varchar(15) NOT NULL,
  `o_date` date NOT NULL,
  `o_ttl_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_payment`
--

CREATE TABLE IF NOT EXISTS `t_payment` (
  `pay_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `pay_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE IF NOT EXISTS `t_product` (
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_qty` varchar(30) NOT NULL,
  `p_img` longblob NOT NULL,
  `p_wt` varchar(30) NOT NULL COMMENT 'weight',
  `p_price` varchar(30) NOT NULL,
  `p_desc` varchar(30) NOT NULL COMMENT 'Description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_supplier`
--

CREATE TABLE IF NOT EXISTS `t_supplier` (
  `s_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_pwd` varchar(30) NOT NULL,
  `s_mob` varchar(15) NOT NULL,
  `s_city` varchar(30) NOT NULL,
  `s_land` varchar(30) NOT NULL COMMENT 'Landmark',
  `s_state` varchar(30) NOT NULL,
  `s_add` varchar(50) NOT NULL COMMENT 'Address',
  `s_zip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pwd` varchar(30) NOT NULL,
  `u_mob` varchar(15) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `u_land` varchar(30) NOT NULL COMMENT 'Landmark',
  `u_state` varchar(30) NOT NULL,
  `u_add` varchar(50) NOT NULL,
  `u_zip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`a_mail`);

--
-- Indexes for table `t_order_user_det`
--
ALTER TABLE `t_order_user_det`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `t_payment`
--
ALTER TABLE `t_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `t_supplier`
--
ALTER TABLE `t_supplier`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_supplier`
--
ALTER TABLE `t_supplier`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
