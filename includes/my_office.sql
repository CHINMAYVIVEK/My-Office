/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.8-MariaDB : Database - my_office
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_office` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `my_office`;

/*Table structure for table `t_admin` */

DROP TABLE IF EXISTS `t_admin`;

CREATE TABLE `t_admin` (
  `a_name` varchar(30) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL,
  `a_loc` varchar(30) NOT NULL COMMENT 'Location of admin',
  PRIMARY KEY (`a_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_admin` */

insert  into `t_admin`(`a_name`,`a_mail`,`a_pwd`,`a_loc`) values ('Admin001','admin1@admin.com','admin1','Location001');

/*Table structure for table `t_cart` */

DROP TABLE IF EXISTS `t_cart`;

CREATE TABLE `t_cart` (
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_p_qty` int(11) NOT NULL COMMENT 'Cart product quantity',
  `p_name` varchar(30) NOT NULL,
  `p_price` float NOT NULL COMMENT 'Price of one product'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_cart` */

insert  into `t_cart`(`u_id`,`p_id`,`c_p_qty`,`p_name`,`p_price`) values (1,1,5,'CHEEZ-IT',150);

/*Table structure for table `t_order` */

DROP TABLE IF EXISTS `t_order`;

CREATE TABLE `t_order` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` int(11) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_order` */

/*Table structure for table `t_order_user_det` */

DROP TABLE IF EXISTS `t_order_user_det`;

CREATE TABLE `t_order_user_det` (
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
  `o_ttl_amt` float NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_order_user_det` */

/*Table structure for table `t_payment` */

DROP TABLE IF EXISTS `t_payment`;

CREATE TABLE `t_payment` (
  `pay_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `pay_amt` float NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_payment` */

/*Table structure for table `t_product` */

DROP TABLE IF EXISTS `t_product`;

CREATE TABLE `t_product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_qty` varchar(30) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `p_wt` varchar(30) NOT NULL COMMENT 'weight',
  `p_price` varchar(30) NOT NULL,
  `p_desc` varchar(30) NOT NULL COMMENT 'Description',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_product` */

insert  into `t_product`(`p_id`,`s_id`,`p_name`,`p_qty`,`p_img`,`p_wt`,`p_price`,`p_desc`) values (1,1,'CHEEZ-IT','0','Product_Image/918CJVcvwPL.jpg','250','150',' Cheez-it  the real cheez'),(3,1,'Johnson Baby Shampoo','50','Product_Image/best-sls-free-shampoo-in-india-4.jpg','150','200',' Baby Shampoo');

/*Table structure for table `t_supplier` */

DROP TABLE IF EXISTS `t_supplier`;

CREATE TABLE `t_supplier` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` varchar(30) DEFAULT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_pwd` varchar(30) NOT NULL,
  `s_mob` varchar(15) NOT NULL,
  `s_city` varchar(30) DEFAULT NULL,
  `s_land` varchar(30) DEFAULT NULL COMMENT 'Landmark',
  `s_state` varchar(30) DEFAULT NULL,
  `s_add` varchar(50) DEFAULT NULL COMMENT 'Address',
  `s_zip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier` */

insert  into `t_supplier`(`s_id`,`a_id`,`s_name`,`s_email`,`s_pwd`,`s_mob`,`s_city`,`s_land`,`s_state`,`s_add`,`s_zip`) values (1,'admin1@admin.com','supplier1','supplier1@supplier.com','supp1','9876543210',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pwd` varchar(30) NOT NULL,
  `u_mob` varchar(15) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `u_land` varchar(30) NOT NULL COMMENT 'Landmark',
  `u_state` varchar(30) NOT NULL,
  `u_add` varchar(50) NOT NULL,
  `u_zip` varchar(15) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`u_id`,`u_name`,`u_email`,`u_pwd`,`u_mob`,`u_city`,`u_land`,`u_state`,`u_add`,`u_zip`) values (1,'user1','user1@user.com','user1','9876543210','varanasi','varanasi','U.P.','varanasi','221005');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
