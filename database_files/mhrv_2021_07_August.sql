/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.33 : Database - mhrvr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mhrvr` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mhrvr`;

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1;

/*Data for the table `countries` */

insert  into `countries`(`country_id`,`country_name`) values (1,'Afghanistan'),(2,'Åland Islands'),(3,'Albania'),(4,'Algeria'),(5,'American Samoa'),(6,'Andorra'),(7,'Angola'),(8,'Anguilla'),(9,'Antarctica'),(10,'Antigua and Barbuda'),(11,'Argentina'),(12,'Armenia'),(13,'Aruba'),(14,'Australia'),(15,'Austria'),(16,'Azerbaijan'),(17,'Bahamas'),(18,'Bahrain'),(19,'Bangladesh'),(20,'Barbados'),(21,'Belarus'),(22,'Belgium'),(23,'Belize'),(24,'Benin'),(25,'Bermuda'),(26,'Bhutan'),(27,'Bolivia'),(28,'Bosnia and Herzegovina'),(29,'Botswana'),(30,'Bouvet Island'),(31,'Brazil'),(32,'British Indian Ocean Territory'),(33,'Brunei Darussalam'),(34,'Bulgaria'),(35,'Burkina Faso'),(36,'Burundi'),(37,'Cambodia'),(38,'Cameroon'),(39,'Canada'),(40,'Cape Verde'),(41,'Cayman Islands'),(42,'Central African Republic'),(43,'Chad'),(44,'Chile'),(45,'China'),(46,'Christmas Island'),(47,'Cocos (Keeling) Islands'),(48,'Colombia'),(49,'Comoros'),(50,'Congo'),(51,'Congo, The Democratic Republic of The'),(52,'Cook Islands'),(53,'Costa Rica'),(54,'Cote D\'ivoire'),(55,'Croatia'),(56,'Cuba'),(57,'Cyprus'),(58,'Czech Republic'),(59,'Denmark'),(60,'Djibouti'),(61,'Dominica'),(62,'Dominican Republic'),(63,'Ecuador'),(64,'Egypt'),(65,'El Salvador'),(66,'Equatorial Guinea'),(67,'Eritrea'),(68,'Estonia'),(69,'Falkland Islands (Malvinas)'),(70,'Faroe Islands'),(71,'Fiji'),(72,'Finland'),(73,'France'),(74,'French Guiana'),(75,'French Polynesia'),(76,'French Southern Territories'),(77,'Gabon'),(78,'Gambia'),(79,'Georgia'),(80,'Germany'),(81,'Ghana'),(82,'Gibraltar'),(83,'Greece'),(84,'Greenland'),(85,'Grenada'),(86,'Guadeloupe'),(87,'Guam'),(88,'Guatemala'),(89,'Guernsey'),(90,'Guinea'),(91,'Guinea-bissau'),(92,'Guyana'),(93,'Haiti'),(94,'Heard Island and Mcdonald Islands'),(95,'Holy See (Vatican City State)'),(96,'Honduras'),(97,'Hong Kong'),(98,'Hungary'),(99,'Iceland'),(100,'India'),(101,'Indonesia'),(102,'Iran, Islamic Republic of'),(103,'Iraq'),(104,'Ireland'),(105,'Isle of Man'),(106,'Israel'),(107,'Italy'),(108,'Jamaica'),(109,'Japan'),(110,'Jersey'),(111,'Jordan'),(112,'Kazakhstan'),(113,'Kenya'),(114,'Kiribati'),(115,'Korea, Democratic People\'s Republic of'),(116,'Korea, Republic of'),(117,'Kuwait'),(118,'Kyrgyzstan'),(119,'Lao People\'s Democratic Republic'),(120,'Latvia'),(121,'Lebanon'),(122,'Lesotho'),(123,'Liberia'),(124,'Libyan Arab Jamahiriya'),(125,'Liechtenstein'),(126,'Lithuania'),(127,'Luxembourg'),(128,'Macao'),(129,'Macedonia, The Former Yugoslav Republic of'),(130,'Madagascar'),(131,'Malawi'),(132,'Malaysia'),(133,'Maldives'),(134,'Mali'),(135,'Malta'),(136,'Marshall Islands'),(137,'Martinique'),(138,'Mauritania'),(139,'Mauritius'),(140,'Mayotte'),(141,'Mexico'),(142,'Micronesia, Federated States of'),(143,'Moldova, Republic of'),(144,'Monaco'),(145,'Mongolia'),(146,'Montenegro'),(147,'Montserrat'),(148,'Morocco'),(149,'Mozambique'),(150,'Myanmar'),(151,'Namibia'),(152,'Nauru'),(153,'Nepal'),(154,'Netherlands'),(155,'Netherlands Antilles'),(156,'New Caledonia'),(157,'New Zealand'),(158,'Nicaragua'),(159,'Niger'),(160,'Nigeria'),(161,'Niue'),(162,'Norfolk Island'),(163,'Northern Mariana Islands'),(164,'Norway'),(165,'Oman'),(166,'Pakistan'),(167,'Palau'),(168,'Palestinian Territory, Occupied'),(169,'Panama'),(170,'Papua New Guinea'),(171,'Paraguay'),(172,'Peru'),(173,'Philippines'),(174,'Pitcairn'),(175,'Poland'),(176,'Portugal'),(177,'Puerto Rico'),(178,'Qatar'),(179,'Reunion'),(180,'Romania'),(181,'Russian Federation'),(182,'Rwanda'),(183,'Saint Helena'),(184,'Saint Kitts and Nevis'),(185,'Saint Lucia'),(186,'Saint Pierre and Miquelon'),(187,'Saint Vincent and The Grenadines'),(188,'Samoa'),(189,'San Marino'),(190,'Sao Tome and Principe'),(191,'Saudi Arabia'),(192,'Senegal'),(193,'Serbia'),(194,'Seychelles'),(195,'Sierra Leone'),(196,'Singapore'),(197,'Slovakia'),(198,'Slovenia'),(199,'Solomon Islands'),(200,'Somalia'),(201,'South Africa'),(202,'South Georgia and The South Sandwich Islands'),(203,'Spain'),(204,'Sri Lanka'),(205,'Sudan'),(206,'Suriname'),(207,'Svalbard and Jan Mayen'),(208,'Swaziland'),(209,'Sweden'),(210,'Switzerland'),(211,'Syrian Arab Republic'),(212,'Taiwan, Province of China'),(213,'Tajikistan'),(214,'Tanzania, United Republic of'),(215,'Thailand'),(216,'Timor-leste'),(217,'Togo'),(218,'Tokelau'),(219,'Tonga'),(220,'Trinidad and Tobago'),(221,'Tunisia'),(222,'Turkey'),(223,'Turkmenistan'),(224,'Turks and Caicos Islands'),(225,'Tuvalu'),(226,'Uganda'),(227,'Ukraine'),(228,'United Arab Emirates'),(229,'United Kingdom'),(230,'United States'),(231,'United States Minor Outlying Islands'),(232,'Uruguay'),(233,'Uzbekistan'),(234,'Vanuatu'),(235,'Venezuela'),(236,'Viet Nam'),(237,'Virgin Islands, British'),(238,'Virgin Islands, U.S.'),(239,'Western Sahara'),(240,'Yemen'),(241,'Zambia');

/*Table structure for table `intake_general_information` */

DROP TABLE IF EXISTS `intake_general_information`;

CREATE TABLE `intake_general_information` (
  `intake_GInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `intake_PInfoId` int(11) DEFAULT NULL,
  `symptoms` varchar(255) DEFAULT NULL,
  `feelings_thoughts` varchar(255) DEFAULT NULL,
  `currently_feel` varchar(255) DEFAULT NULL,
  `thoughts_of_dying_dayMonthYear` varchar(255) DEFAULT NULL,
  `thoughts_of_dying_days` varchar(255) DEFAULT NULL,
  `faimly_treated_for` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`intake_GInfoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `intake_general_information` */

/*Table structure for table `intake_personal_information` */

DROP TABLE IF EXISTS `intake_personal_information`;

CREATE TABLE `intake_personal_information` (
  `intake_PInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gander` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `emergancy_contactNo` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `living_situation` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`intake_PInfoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `intake_personal_information` */

/*Table structure for table `living_situation` */

DROP TABLE IF EXISTS `living_situation`;

CREATE TABLE `living_situation` (
  `living_situation_id` int(11) NOT NULL AUTO_INCREMENT,
  `living_situation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`living_situation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `living_situation` */

insert  into `living_situation`(`living_situation_id`,`living_situation`) values (1,'Alone'),(2,'With spouse'),(3,'With parent(s)'),(4,'With childrens'),(5,'With friend(s)');

/*Table structure for table `marital_status` */

DROP TABLE IF EXISTS `marital_status`;

CREATE TABLE `marital_status` (
  `marital_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`marital_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `marital_status` */

insert  into `marital_status`(`marital_status_id`,`status`) values (1,'Single'),(2,'Married'),(3,'Partner'),(4,'Widowed'),(5,'Seperated');

/*Table structure for table `occupation` */

DROP TABLE IF EXISTS `occupation`;

CREATE TABLE `occupation` (
  `occupation_id` int(11) NOT NULL AUTO_INCREMENT,
  `occupation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`occupation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `occupation` */

insert  into `occupation`(`occupation_id`,`occupation`) values (1,'Chiropractor'),(2,'Dentist'),(3,'Dietitian or Nutritionist'),(4,'Optometrist'),(5,'Pharmacist'),(6,'Physician'),(7,'Physician Assistant'),(8,'Podiatrist'),(9,'Registered Nurse'),(10,'Therapist'),(11,'Veterinarian'),(12,'Health Technologist or Technician'),(13,'Other Healthcare Practitioners and Technical Occupation'),(14,'Nursing, Psychiatric, or Home Health Aide'),(15,'Occupational and Physical Therapist Assistant or Aide'),(16,'Other Healthcare Support Occupation'),(17,'Chief Executive'),(18,'General and Operations Manager'),(19,'Advertising, Marketing, Promotions, Public Relations, and Sales Manager'),(20,'Operations Specialties Manager (e.g., IT or HR Manager)'),(21,'Construction Manager'),(22,'Engineering Manager'),(23,'Accountant, Auditor'),(24,'Business Operations or Financial Specialist'),(25,'Business Owner'),(26,'Other Business, Executive, Management, Financial Occupation'),(27,'Architect, Surveyor, or Cartographer'),(28,'Engineer'),(29,'Other Architecture and Engineering Occupation'),(30,'Postsecondary Teacher (e.g., College Professor)'),(31,'Primary, Secondary, or Special Education School Teacher'),(32,'Other Teacher or Instructor'),(33,'Other Education, Training, and Library Occupation'),(34,'Arts, Design, Entertainment, Sports, and Media Occupations'),(35,'Computer Specialist, Mathematical Science'),(36,'Counselor, Social Worker, or Other Community and Social Service Specialist'),(37,'Lawyer, Judge'),(38,'Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)'),(39,'Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)'),(40,'Religious Worker (e.g., Clergy, Director of Religious Activities or Education)'),(41,'Social Scientist and Related Worker'),(42,'Other Professional Occupation'),(43,'Supervisor of Administrative Support Workers'),(44,'Financial Clerk'),(45,'Secretary or Administrative Assistant'),(46,'Material Recording, Scheduling, and Dispatching Worker'),(47,'Other Office and Administrative Support Occupation'),(48,'Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)'),(49,'Chef or Head Cook'),(50,'Cook or Food Preparation Worker'),(51,'Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)'),(52,'Building and Grounds Cleaning and Maintenance'),(53,'Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)'),(54,'Sales Supervisor, Retail Sales'),(55,'Retail Sales Worker'),(56,'Insurance Sales Agent'),(57,'Sales Representative'),(58,'Real Estate Sales Agent'),(59,'Other Services Occupation'),(60,'Construction and Extraction (e.g., Construction Laborer, Electrician)'),(61,'Farming, Fishing, and Forestry'),(62,'Installation, Maintenance, and Repair'),(63,'Production Occupations'),(64,'Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation'),(65,'Aircraft Pilot or Flight Engineer'),(66,'Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)'),(67,'Other Transportation Occupation'),(68,'Military'),(69,'Homemaker'),(70,'Other Occupation'),(71,'Don\'t Know'),(72,'Not Applicable');

/*Table structure for table `patien_payment_details` */

DROP TABLE IF EXISTS `patien_payment_details`;

CREATE TABLE `patien_payment_details` (
  `patient_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_appointment_id` int(11) DEFAULT NULL,
  `country_id` varchar(255) DEFAULT NULL,
  `billing_no` varchar(255) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `card_verfication_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`patient_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `patien_payment_details` */

insert  into `patien_payment_details`(`patient_payment_id`,`patient_appointment_id`,`country_id`,`billing_no`,`card_holder_name`,`card_number`,`card_verfication_code`) values (1,4,'1','123','123','123','123'),(2,8,'18','213','qwe','234','123'),(3,1,'1','123','233','24','234');

/*Table structure for table `patient_appointment` */

DROP TABLE IF EXISTS `patient_appointment`;

CREATE TABLE `patient_appointment` (
  `patient_appointment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) DEFAULT NULL,
  `mental_health_professional` varchar(255) DEFAULT NULL,
  `disorder_type` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(255) DEFAULT NULL,
  `fees` varchar(255) DEFAULT NULL,
  `clinic_type` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `appointment_status` varchar(255) DEFAULT 'in process',
  `bill_status` varchar(255) DEFAULT 'unpaid',
  PRIMARY KEY (`patient_appointment_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `patient_appointment` */

insert  into `patient_appointment`(`patient_appointment_Id`,`patient_name`,`mental_health_professional`,`disorder_type`,`condition`,`appointment_date`,`appointment_time`,`fees`,`clinic_type`,`added_by`,`added_on`,`updated_by`,`updated_on`,`appointment_status`,`bill_status`) values (1,'Adeel','Adeel AHmed Baloch','Anxiety','Mild','2020-02-27','15:38','20000','Physcial',NULL,NULL,NULL,NULL,'In Process','paid'),(2,'Adeel','Adeel AHmed Baloch','Anxiety','Mild','2020-02-27','15:38','20000','Physcial',NULL,NULL,NULL,NULL,'In Process','unpaid'),(3,'Adeel','Adeel AHmed Baloch','Anxiety','Mild','2020-02-27','15:38','20000','Physcial',NULL,NULL,NULL,NULL,'In Process','unpaid'),(4,'Adeel','Adeel AHmed Baloch','Trauma','Mild','2021-07-08','16:43','213','Physcial',NULL,NULL,NULL,NULL,'In Process','paid'),(5,'Adeel','Adeel AHmed Baloch','Trauma','Mild','2021-07-08','16:43','213','Physcial',NULL,NULL,NULL,NULL,'In Process','unpaid'),(6,'AA','AA Baloch','Anxiety','Mild','0220-02-12','14:22','22','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(7,'Test','Test','Anxiety','Mild','2021-08-20','14:22','2222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(8,'Test','Test','Anxiety','Mild','2021-08-20','14:22','2222','Virtual',NULL,NULL,NULL,NULL,'In Process','paid'),(9,'Aqsa Test','Adeel','Anxiety','Mild','2222-02-22','14:22','2222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(10,'Aqsa Test','Adeel','Anxiety','Mild','2222-02-22','14:22','2222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(11,'Adeel','asd','Anxiety','Mild','0022-02-22','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(12,'Adeel','asd','Anxiety','Mild','0022-02-22','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(13,'Adeel','asd','Anxiety','Mild','0022-02-22','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(14,'Adeel','asd','Anxiety','Mild','0022-02-22','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(15,'Adeel','asd','Anxiety','Mild','0022-02-22','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(16,'asd','asd','Anxiety','Mild','2222-02-13','14:22','222','Virtual',NULL,NULL,NULL,NULL,'In Process','unpaid'),(17,'Adeel','asd','Trauma','Moderate','2021-08-25','04:51','22','Physcial',NULL,NULL,NULL,NULL,'In Process','unpaid');

/*Table structure for table `qualification` */

DROP TABLE IF EXISTS `qualification`;

CREATE TABLE `qualification` (
  `qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`qualification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `qualification` */

insert  into `qualification`(`qualification_id`,`qualification`) values (1,'No formal education'),(2,'Primary education'),(3,'Secondary education'),(4,'Bachelor\'s degree'),(5,'Master\'s degree'),(6,'Doctorate or higher'),(7,'General education diploma'),(8,'Vocational qualification');

/*Table structure for table `symptoms` */

DROP TABLE IF EXISTS `symptoms`;

CREATE TABLE `symptoms` (
  `symptoms_id` int(11) NOT NULL AUTO_INCREMENT,
  `symptoms_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`symptoms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `symptoms` */

insert  into `symptoms`(`symptoms_id`,`symptoms_title`) values (1,'Avoidance'),(2,'Anxiety attack'),(3,'Concentartion'),(4,'Crying spells'),(5,'Decrease need for sleep'),(6,'Excessive energy'),(7,'Depressed mood'),(8,'Excessive guilt'),(9,'Excessive worry'),(10,'Fatigue'),(11,'Hallucination'),(12,'Impulsivity'),(13,'Increased irritability'),(14,'Increased risky behaviour'),(15,'Loss of interest'),(16,'Racing thoughts'),(17,'Sleep pattern distubance'),(18,'Suspisiousness'),(19,'Unable to enjoy activities'),(20,'Other');

/*Table structure for table `treated_types` */

DROP TABLE IF EXISTS `treated_types`;

CREATE TABLE `treated_types` (
  `treated_id` int(11) NOT NULL AUTO_INCREMENT,
  `treat_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`treated_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `treated_types` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
