# Host: localhost  (Version: 5.5.32)
# Date: 2014-07-15 01:30:35
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "files"
#

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `level` varchar(255) DEFAULT NULL COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `path` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "files"
#


#
# Structure for table "member"
#

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL DEFAULT '-',
  `alamat` varchar(255) DEFAULT NULL,
  `banned` enum('Y','N') DEFAULT 'N',
  `level` varchar(1) DEFAULT '1' COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `tgl_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "member"
#

INSERT INTO `member` VALUES ('53c4161704af2','ardha2008','ardha@gmail.com','YpjHnJSWn5ybnp2cz56modajpqqqp6eo296rZJeZlpk=','-',NULL,'N','1','2014-07-15 00:40:40');

#
# Structure for table "referal"
#

DROP TABLE IF EXISTS `referal`;
CREATE TABLE `referal` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "referal"
#

