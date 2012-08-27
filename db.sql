/*
SQLyog Enterprise Trial - MySQL GUI v8.12 
MySQL - 5.1.41 : Database - socialshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`socialshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `socialshop`;

/*Table structure for table `albums` */

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `uid` varchar(25) NOT NULL,
  `object_id` varchar(25) NOT NULL,
  `album_id` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `albums` */

insert  into `albums`(`uid`,`object_id`,`album_id`) values ('100003367880559','234888296633431','100003367880559_51168'),('1747789089','2364629052306','7506696977560698479'),('1524097236','3540347797084','6545947784546115599');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `uid` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`uid`,`category_id`,`category_name`,`description`) values ('100003367880559',13,'Kategory 1','Deskripsi 1'),('1747789089',9,'Kategori 1','Deskripsi1'),('1747789089',10,'Kategori 2','Deskripsi 2'),('1747789089',11,'Kategori 3','Kategori 3'),('1747789089',12,'Kategori 4','Kategori 4');

/*Table structure for table `item_product` */

DROP TABLE IF EXISTS `item_product`;

CREATE TABLE `item_product` (
  `uid` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `photo_url_b` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `item_product` */

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date_join` datetime DEFAULT NULL,
  `is_verified` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`id`,`name`,`email`,`phone`,`address`,`city`,`description`,`date_join`,`is_verified`) values ('1747789089','Toko Abenk Mc','benk_mc@yahoo.com','081802373790','Griya Sunyaragi permai','Cirebon','aa','2012-08-20 03:32:47',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;