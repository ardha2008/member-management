# Host: localhost  (Version: 5.5.32)
# Date: 2014-07-15 18:09:11
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "files"
#

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` varchar(11) NOT NULL DEFAULT '',
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `level` varchar(255) NOT NULL DEFAULT '2' COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `path` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete` varchar(255) NOT NULL DEFAULT '0' COMMENT '0 = undelete , 1=delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "files"
#

INSERT INTO `files` VALUES ('00000000001','ardha2008','Game Theory ','Loren insum dolor sit ametLoren insum dolor sit ametLoren insum dolor sit ametLoren insum dolor sit ametLoren insum dolor sit ametLoren insum dolor sit amet','1','files/uploads/2014/07/14054134286914.pdf','2014-07-15 15:38:49','0'),('00000000002','ardha2008','ANalisa Desain berorientasi Object ','ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ANalisa Desain berorientasi Object ','1','files/uploads/2014/07/140541411119602.pdf','2014-07-15 15:48:32','0'),('7Y1nhu9crdl','ardha2008','Cake PHP Cook Book','Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP Tutorial Cake PHP ','1','files/uploads/2014/07/140541535318019.pdf','2014-07-15 16:09:14','0'),('hXru90iUIHV','ardha2008','Tutorial anti melarat','<p></p><p><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span>Loren insum dolor sit amet&nbsp;</span><span class=\"f-img-wrap\"><img alt=\"Image title\" src=\"http://i.froala.com/images/f049e6e69d1eaa605c5d2beb963a67f7256cc81c.jpg?1405417339\" width=\"300\" style=\"min-width: 16px; min-height: 16px; margin-bottom: 10px; margin-left: auto; margin-right: auto; margin-top: 10px\"></span></p>','1','files/uploads/2014/07/140541735821088.pdf','2014-07-15 16:42:59','1'),('yqhHZSvHFf7','budi','Mekanisme Security','<p><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security&nbsp;</span><span>Mekanisme Security</span><br></p>','1','files/uploads/2014/07/14054182316793.pdf','2014-07-15 16:57:12','0');

#
# Structure for table "member"
#

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `banned` enum('Y','N') DEFAULT 'N',
  `level` varchar(1) DEFAULT '1' COMMENT '4= Superadmin, 3=VIP , 2=Member lv 1 ,1= Register',
  `tgl_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `Unique` (`id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "member"
#

INSERT INTO `member` VALUES ('53c4161704af2','ardha2008','ardha@gmail.com','YpjHnJSWn5ybnp2cz56modajpqqqp6eo296rZJeZlpk=','Ardha Herdianto','Perumahan Griyaloka','N','1','2014-07-15 00:40:40'),('53c427589cc4a','budi','budi@localhost.com','XMSWlZfKnZ+am6PRpNKgpdPUqtmkqKit3KyvYWplmWg=','Budi Nugroho','Perumahan jatikalang','N','1','2014-07-15 01:54:18');

#
# Structure for table "refferal"
#

DROP TABLE IF EXISTS `refferal`;
CREATE TABLE `refferal` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `ref` varchar(255) NOT NULL DEFAULT 'ardha2008',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "refferal"
#

INSERT INTO `refferal` VALUES (4,'budi','ardha2008','2014-07-15 01:54:17');
