-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for bms_notif
CREATE DATABASE IF NOT EXISTS `bms_notif` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bms_notif`;


-- Dumping structure for table bms_notif.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bms_notif.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table bms_notif.department
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table bms_notif.department: ~0 rows (approximately)
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT IGNORE INTO `department` (`id`, `department`) VALUES
	(1, 'MCA'),
	(2, 'MECH'),
	(3, 'ECE'),
	(4, 'CS'),
	(5, 'EEE'),
	(6, 'TELECOM'),
	(7, 'ISE'),
	(8, 'CIVIL');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;


-- Dumping structure for table bms_notif.event
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(200) NOT NULL,
  `event_description` varchar(400) NOT NULL,
  `event_venue` varchar(100) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table bms_notif.event: ~4 rows (approximately)
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT IGNORE INTO `event` (`id`, `event_title`, `event_description`, `event_venue`, `event_date`, `author`) VALUES
	(1, 'Event 1', 'sdvhahvd', 'Seminar hall', '0000-00-00 00:00:00', 'Ajith'),
	(2, 'Event 2', 'sdvkjsdv', 'Main Hall', '0000-00-00 00:00:00', 'Ajith KP'),
	(3, 'Event 3', 'ascadc', 'adc', '0000-00-00 00:00:00', 'adcadv'),
	(4, 'Event 5', 'dsvsv', 'sfv', '0000-00-00 00:00:00', 'avi');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;


-- Dumping structure for table bms_notif.notification
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(15) NOT NULL,
  `description` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table bms_notif.notification: ~5 rows (approximately)
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT IGNORE INTO `notification` (`id`, `subject`, `description`, `date`, `author`) VALUES
	(1, 'Report', 'please submit your report by tommarow 9.30 without fail', '0000-00-00 00:00:00', 'H.O.D'),
	(2, 'Seminar', 'please give seminar reports and demo to Nagabhushan. ', '0000-00-00 00:00:00', 'Sudarshanam'),
	(3, 'Exam Fee', 'please pay your exam fees before the end of this week. dealy causes a penalty.', '0000-00-00 00:00:00', 'Nagabhushan'),
	(4, 'Internals', 'Internals will be conducted at Main block instead of BSN block ', '0000-00-00 00:00:00', 'H.O.D'),
	(5, 'Marks Card', 'Please collect your 4th sem marks card at Lab-1 before 2.30', '0000-00-00 00:00:00', 'Shashi');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;


-- Dumping structure for table bms_notif.student
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `department_id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `usn` (`usn`),
  KEY `FK_DEPARTMENT` (`department_id`),
  CONSTRAINT `FK_DEPARTMENT` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bms_notif.student: ~0 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
