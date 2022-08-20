PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
DROP TABLE IF EXISTS users;
CREATE TABLE users (
id INTEGER NOT NULL PRIMARY KEY,
name VARCHAR(255),
email VARCHAR(255),
phone VARCHAR(255),
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO users VALUES(1,'Monah Swales','mswales0@illinois.edu','859-492-6765','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(2,'Virginie Merriott','vmerriott1@cocolog-nifty.com','681-319-5731','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(3,'Dorey Pevsner','dpevsner2@joomla.org','668-975-7761','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(4,'Benson Guerrier','bguerrier3@dailymail.co.uk','848-424-5296','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(5,'Cornell Wakeham','cwakeham4@networkadvertising.org','502-383-0970','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(6,'Nance O''Donnelly','nodonnelly5@360.cn','531-731-6193','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(7,'Edeline Bilt','ebilt6@hubpages.com','334-333-8434','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(8,'Steffi Gannicleff','sgannicleff7@ezinearticles.com','846-428-7451','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(9,'Lavina Jandourek','ljandourek8@nature.com','936-839-6148','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(10,'Sophey Bastable','sbastable9@posterous.com','295-297-7048','2021-10-16 17:39:36','2021-10-16 17:39:36');
INSERT INTO users VALUES(11,'Eldridge Baughan','ebaughana@wufoo.com','555-479-2807','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(12,'Aubrey Gut','agutb@icio.us','284-754-8992','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(13,'Bethina Leyfield','bleyfieldc@wordpress.org','767-224-5926','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(14,'Juliane Gockelen','jgockelend@addtoany.com','221-167-9838','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(15,'Rog Hynam','rhyname@accuweather.com','502-184-4968','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(16,'Onfroi Rundle','orundlef@paypal.com','903-442-3467','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(17,'Madelon Greest','mgreestg@marketwatch.com','669-620-8145','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(18,'Reade Danks','rdanksh@berkeley.edu','254-427-9088','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(19,'Harmon de Lloyd','hdei@who.int','753-939-2571','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(20,'Darelle Aireton','dairetonj@unblog.fr','883-726-0458','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(21,'Anna Coxhead','acoxheadk@usgs.gov','812-860-9089','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(22,'Deidre Snaddin','dsnaddinl@ning.com','708-412-3059','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(23,'Cos Sustin','csustinm@spotify.com','217-521-8841','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(24,'Audrey McRobert','amcrobertn@blogtalkradio.com','710-697-3341','2021-10-16 17:39:37','2021-10-16 17:39:37');
INSERT INTO users VALUES(25,'Bentley Corbally','bcorballyo@infoseek.co.jp','268-233-3456','2021-10-16 17:39:38','2021-10-16 17:39:38');
COMMIT;
