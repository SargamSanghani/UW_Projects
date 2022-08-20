-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_subscribed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Hiral','Shah','zxcvbnm','Pune','g3h 4k2','GJ','xdcfghbjnk','323-432-4234','sargam.sanghani@guksf.com','$2y$10$MB.DDvlo12Xvkjqc6eu0ceIvDKAsIiVY5f/tWA1nJLGb2ibfF6Hby',0,'2022-04-22 17:01:23','2022-04-22 17:01:23',1),(10,'h','j','dfghj','yghbjnk','g3g 4j4','sfghj','xdcfghbjnk','323-432-4234','sargam.sanghani@guksf.comhj','$2y$10$t5pk1xvVYvWZJI682/Lx9.5HvwNktRN/.EuXuJ/bKgjh0aUgeWAO.',0,'2022-04-22 18:23:16','2022-04-22 18:23:16',1),(11,'','','','','','','','','sargam.sanghsdfgyhjani@guksf.com','$2y$10$dnMe3y/9.yxjDwIRw1IhGuwBDt77wlWPDM.r8WAoSupjCO4S0Bkp6',0,'2022-04-22 18:37:36','2022-04-22 18:37:36',1),(12,'','','','','','','','','sargam@guksf.com','$2y$10$VmEIzZ27M8wRdHpJWXvaJ.BrcLgj9MezLA9HnIPQiLNH/uC6LZdWC',0,'2022-04-22 18:37:43','2022-04-22 18:37:43',0),(13,'','','','','','','','','sargam.sghjanhkghani@guksf.comhjhdjscdhas','$2y$10$nT2/V/oe9x2sXUrRRo9nAeTgtNPXMqVpsEKjmmg7fPQtDyfxLyZ1y',0,'2022-04-22 18:38:29','2022-04-22 18:38:29',0),(14,'h','Sanghani','fghjk','dxfchb','g3h 4k2','bhjnk','xdcfghbjnk','323-432-4234','ghj@fgh.bi','$2y$10$Koy42A0fApgaisL6rSYwPe7m5kH4E/uAAx7zZbb2LpMoq1/Xel2J.',0,'2022-04-22 20:01:52','2022-04-22 20:01:52',0),(15,'h','Sanghani','fghjk','dxfchb','g3h 4k2','bhjnk','xdcfghbjnk','323-432-4234','sargam.sghjanhkghani@gukshjkf.comhjhdjscdhas','$2y$10$/W2zH0FrmFE9TNHPyWBzBOXIu3pUivXuUn1e3EIWEd8ptmERdKRBG',0,'2022-04-22 20:03:04','2022-04-22 20:03:04',0),(16,'h','Sanghani','zxcvbnm','Winnipeg','g3h 4k2','dfghjk','xdcfghbjnk','323-432-4234','sargam.sangghjgjgjhani@guksf.com','$2y$10$sUBsQB2yip0T6zIIfXUk6uoDWMii.7pJIL8A/VR2Bg.EaaTa8pCVm',0,'2022-04-23 11:45:32','2022-04-23 11:45:32',0),(17,'h','Sanghani','zxcvbnm','Winnipeg','g3h 4k2','dfghjk','xdcfghbjnk','323-432-4234','sargam.sangbhjghjgjgjhani@guksf.com','$2y$10$WgvP0KjxU7LzkXC6yIit5OMvwxefAOpoPJ2cu8t87Sfk1CHjRYPHG',0,'2022-04-23 11:46:15','2022-04-23 11:46:15',0),(18,'h','Sanghani','zxcvbnm','Winnipeg','g3h 4k2','dfghjk','xdcfghbjnk','323-432-4234','sargam.kjhjk@guksf.com','$2y$10$JnFYSA2k8ohKJxkZdFZ2BupcYs9NzqRy4FWm1M4oYDTQUFbWHZvYq',0,'2022-04-23 11:46:40','2022-04-23 11:46:40',0),(19,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','sargm.san@gmail.com','Abc@123',1,'2022-04-26 13:39:01','2022-04-26 13:39:01',0),(21,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','sargm.sanghani@gmail.com','Abc@123',1,'2022-04-26 13:39:51','2022-04-26 13:39:51',0),(22,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','sargm.sanghani12@gmail.com','Abc@123',1,'2022-04-26 13:41:03','2022-04-26 13:41:03',0),(23,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','sargm.sanghani123@gmail.com','Abc@123',1,'2022-04-26 13:41:19','2022-04-26 13:41:19',0),(25,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','sargam.sanghani123@gmail.com','$2y$10$vTY5ys0JySKCqe5KW8SrmOdAIksxuIvmTX/PKlaFERWEB..Pl41CS',1,'2022-04-26 13:43:32','2022-04-26 13:43:32',0),(26,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','626856d0d0dadsargam.sanghani123@gmail.com','$2y$10$ydsRruFwqZYheGDPg0qYO.JjFfihzgwk8Pf0NEDyVqmhVNhFr/DGC',1,'2022-04-26 15:32:16','2022-04-26 15:32:16',1),(27,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','626856d6bbc5asargam.sanghani123@gmail.com','$2y$10$8x4/n1p4B1S3GGpa6PxckumiV0sHl2hI0oQba71KeFCljx/Ud33si',1,'2022-04-26 15:32:22','2022-04-26 15:32:22',1),(28,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','626856de2a078sargam.sanghani123@gmail.com','$2y$10$ui3qUK1FhNtSp2oWiLvvBOSmDIYrkfgRPWZq9i5hVvL7V6vBsPj8K',1,'2022-04-26 15:32:30','2022-04-26 15:32:30',1),(29,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','626857b055ba7sargam.sanghani123@gmail.com','$2y$10$/bV5FdgypsV0hcdjUqG/N.DWrZLgQH38PyLx/zTMcOzqJ5Ed7uJCy',1,'2022-04-26 15:36:00','2022-04-26 15:36:00',1),(30,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','626857bc6ddc6sargam.sanghani123@gmail.com','$2y$10$50/WMr6ADICybXIgenv10eBBxbEm5WV3VRnXkTreEhiIVa.VRTyJq',1,'2022-04-26 15:36:12','2022-04-26 15:36:12',1),(31,'Sargam','Sanghani','My street','Winnipeg','R2H 5S6','MB','Canada','424-432-4321','62685815c675dsargam.sanghani123@gmail.com','$2y$10$DZxxfTC4I3SVQG3wG3RDuemmuISuzAP7RYsmPvpyMY28NlOMXlSy.',1,'2022-04-26 15:37:41','2022-04-26 15:37:41',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-26 15:42:57
