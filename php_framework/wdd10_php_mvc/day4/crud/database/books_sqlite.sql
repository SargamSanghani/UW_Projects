
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` integer NOT NULL ,
  `title` varchar(255) DEFAULT NULL,
  `year_published` integer DEFAULT NULL,
  `num_pages` integer DEFAULT NULL,
  `in_print` tinyint(1) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `author_id` integer DEFAULT NULL,
  `publisher_id` integer DEFAULT NULL,
  `format_id` integer DEFAULT NULL,
  `genre_id` integer DEFAULT NULL,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);


INSERT INTO `books` VALUES (1,'Dune',1975,556,1,5.99,1,1,1,1,'2020-04-14 05:50:18'),(2,'Island',2002,345,1,4.99,2,2,1,2,'2020-04-14 05:50:18'),(3,'A Day in the Life',2012,704,1,22.99,3,3,2,3,'2020-04-14 05:50:18'),(4,'Under the Dome',2010,1200,0,17.99,4,1,3,2,'2020-04-14 05:50:18'),(5,'Carpet Baggers',1977,340,1,3.99,5,4,1,4,'2020-04-14 05:50:18'),(6,'Not a Penny More',1980,300,1,5.99,6,5,1,5,'2020-04-14 05:50:18'),(7,'A Mixed Blessing',2002,450,1,12.99,7,6,3,5,'2020-04-14 05:50:18'),(8,'The Oath',2008,500,0,24.99,8,2,2,6,'2020-04-14 05:50:18'),(9,'Carrie',1975,300,1,4.99,4,1,1,2,'2020-04-14 05:50:18'),(10,'Flash Forward',2006,417,1,19.99,9,7,2,1,'2020-04-14 05:50:18'),(11,'The Black Box',2012,345,1,25.99,21,5,2,3,'2020-04-14 05:50:18'),(12,'Caves of Steel',1957,198,1,4.99,20,5,2,1,'2020-04-14 05:50:18'),(13,'Castle of Adventure',1944,224,1,33.99,22,5,2,1,'2020-04-14 05:50:18'),(14,'Dune Messiah',1977,350,1,2.99,1,1,1,1,'2020-04-14 05:50:18');


DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` integer NOT NULL ,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `authors` VALUES (1,'Frank Herbert','USA'),(2,'Richard Laymon','Canada'),(3,'Carmen Ynez','Canada'),(4,'Stephen King','USA'),(5,'Lee Sheldon','Russia'),(6,'Daniel Chambers','England'),(7,'Sally Unger','Canada'),(8,'John Lescroart','USA'),(9,'Robert Sawyer','Canada'),(10,'Tommy Dougald','Canada'),(16,'Michael Thompson','Mexico'),(17,'Jim Butcher','USA'),(18,'Mark Twain','USA'),(19,'Brent Weeks','USA'),(20,'Isaac Asimov','USA'),(21,'Michael Connelly','USA'),(22,'Enid Blyton','England');


DROP TABLE IF EXISTS `formats`;
CREATE TABLE `formats` (
  `id` integer NOT NULL ,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `formats` VALUES (1,'Paper'),(2,'Hardcover'),(3,'Trade Paper');


DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` integer NOT NULL ,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);



INSERT INTO `genres` VALUES (1,'SF'),(2,'Horror'),(3,'Literature'),(4,'Drama'),(5,'Politics'),(6,'Legal'),(19,'Cars'),(20,'Electronics');


DROP TABLE IF EXISTS `publishers`;

CREATE TABLE `publishers` (
  `id` integer NOT NULL ,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `publishers` VALUES (1,'Ballantine','New York','775-1234'),(2,'Dell','New York','766-1313'),(3,'Penguin','London','445-0987'),(4,'Putnam','New York','234-8876'),(5,'Delacorte','Toronto','555-1212'),(6,'Sun Press','Toronto','664-1234'),(7,'DAW','New York','543-1234');

