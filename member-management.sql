# Host: localhost  (Version: 5.5.32)
# Date: 2014-06-28 17:19:13
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "files"
#

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `level` varchar(255) DEFAULT NULL COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `path` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "files"
#


#
# Structure for table "member"
#

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT '-',
  `alamat` varchar(255) DEFAULT NULL,
  `banned` enum('Y','N') DEFAULT 'N',
  `level` varchar(1) DEFAULT '1' COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `tgl_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "member"
#

INSERT INTO `member` VALUES (9,'ardha2008@yahoo.com','lLy9r6g=620adc1433d2e8794f9b87569a43228bbEx5OXI2Zz0=','-',NULL,'N','4','2014-06-28 00:34:24'),(10,'admin@localhost.com','lLy9r6g=620adc1433d2e8794f9b87569a43228bbEx5OXI2Zz0=','Admin','','N','4','2014-06-28 00:36:18'),(11,'user@user.com','ZHyMew==62a9f2195c3f3865f88f5fb260d79a62Wkh5TWV3PT0=','user','user','N','1','2014-06-28 13:20:56');
