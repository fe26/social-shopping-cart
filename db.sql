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

insert  into `albums`(`uid`,`object_id`,`album_id`) values ('100003367880559','234888296633431','100003367880559_51168'),('1747789089','2367015671970','7506696977560698540'),('1524097236','3540347797084','6545947784546115599');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `uid` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`uid`,`category_id`,`category_name`,`description`) values ('1747789089',9,'Kategori 1','Deskripsi1'),('1747789089',10,'Kategori 2','Deskripsi 2'),('1747789089',11,'Kategori 3','Kategori 3'),('1747789089',12,'Kategori 4','Kategori 4'),('100003367880559',14,'Kategory 2','We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach');

/*Table structure for table `item_product` */

DROP TABLE IF EXISTS `item_product`;

CREATE TABLE `item_product` (
  `uid` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `photo_thumb` varchar(200) DEFAULT NULL,
  `photo_big` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `date_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `item_product` */

insert  into `item_product`(`uid`,`product_id`,`category_id`,`product_name`,`photo_thumb`,`photo_big`,`price`,`description`,`date_add`,`date_edit`) values ('100003367880559',6,13,'Dolor sit amet conse','http://photos-a.ak.fbcdn.net/hphotos-ak-snc7/291898_235556469899947_1898468396_a.jpg','http://a1.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/291898_235556469899947_1898468396_n.jpg',1234567,'Our goods are well-designed and very functional. They have a great number of different useful options. We understand that fashion is very important thing nowadays that is why we stay in touch with the',NULL,NULL),('100003367880559',7,13,'Dolor sit amet conse','http://photos-h.ak.fbcdn.net/hphotos-ak-snc7/579959_235557609899833_1379234648_a.jpg','http://a8.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/579959_235557609899833_1379234648_n.jpg',20000,'Our goods are well-designed and very functional. They have a great number of different useful options. We understand that fashion is very important thing nowadays that is why we stay in touch with the',NULL,NULL),('100003367880559',8,13,'Dolor sit amet conse','http://photos-h.ak.fbcdn.net/hphotos-ak-snc7/579959_235557609899833_1379234648_a.jpg','http://a8.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/579959_235557609899833_1379234648_n.jpg',30000,'Our goods are well-designed and very functional. They have a great number of different useful options. We understand that fashion is very important thing nowadays that is why we stay in touch with the',NULL,NULL),('100003367880559',9,13,'Mac Pro','http://photos-h.ak.fbcdn.net/hphotos-ak-snc7/424250_235613693227558_252671027_a.jpg','http://a8.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/424250_235613693227558_252671027_n.jpg',9999999,'So, it is natural that this sphere is one of the most popular ones and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different',NULL,NULL),('100003367880559',10,13,'Imac','http://photos-g.ak.fbcdn.net/hphotos-ak-snc7/292040_235614289894165_635402260_a.jpg','http://a7.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/292040_235614289894165_635402260_n.jpg',390000,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL),('100003367880559',11,14,'Dolor sit amet conse','http://photos-c.ak.fbcdn.net/hphotos-ak-ash3/558659_235557389899855_1135472993_a.jpg','http://a3.sphotos.ak.fbcdn.net/hphotos-ak-ash3/s2048x2048/558659_235557389899855_1135472993_n.jpg',2000,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL),('100003367880559',12,14,'Dolor sit amet conse','http://photos-h.ak.fbcdn.net/hphotos-ak-snc7/424250_235613693227558_252671027_a.jpg','http://a8.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/424250_235613693227558_252671027_n.jpg',9999,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL),('100003367880559',13,13,'Dolor sit amet conse','http://photos-g.ak.fbcdn.net/hphotos-ak-snc7/292040_235614289894165_635402260_a.jpg','http://a7.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/292040_235614289894165_635402260_n.jpg',99999,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL),('100003367880559',14,13,'Dolor sit amet conse','http://photos-e.ak.fbcdn.net/hphotos-ak-snc7/404041_234907636631497_1138750218_a.jpg','http://a5.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/404041_234907636631497_1138750218_n.jpg',99999,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL),('100003367880559',15,14,'Dolor sit amet conse','http://photos-d.ak.fbcdn.net/hphotos-ak-snc7/304696_235616903227237_733453457_a.jpg','http://a4.sphotos.ak.fbcdn.net/hphotos-ak-snc7/s2048x2048/304696_235616903227237_733453457_n.jpg',20000,'We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous ach',NULL,NULL);

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