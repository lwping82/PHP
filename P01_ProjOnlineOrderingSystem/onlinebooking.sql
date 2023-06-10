-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: onlinebooking
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `best_seller`
--

DROP TABLE IF EXISTS `best_seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `best_seller` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ProductID` int NOT NULL,
  `Header` varchar(100) NOT NULL,
  `ShortDesc` mediumtext NOT NULL,
  `ActiveByDefault` varchar(1) NOT NULL,
  `Interval` int NOT NULL,
  `Withdrawn` varchar(1) NOT NULL,
  `Category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ProductID_idx` (`ProductID`),
  CONSTRAINT `FK_ProductID` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `best_seller`
--

LOCK TABLES `best_seller` WRITE;
/*!40000 ALTER TABLE `best_seller` DISABLE KEYS */;
INSERT INTO `best_seller` VALUES (1,1,'Carrot Cake','-','N',0,'N','BS'),(2,2,'Berries Tart','-','N',0,'N','BS'),(3,3,'Blue Berry Cheese Cake','-','N',0,'N','BS'),(4,4,'Chocolate Brownie','-','N',0,'N','BS'),(5,5,'Strawberry Roll','-','N',0,'N','BS'),(6,6,'Chicken Ham Sandwich','-','N',0,'N','BS'),(7,7,'Burnt Cheese Cake','-','N',0,'N','BS'),(8,8,'Chocolate Strawberry Cake','-','N',0,'N','BS'),(9,9,'Best selling','Best selling of the month','Y',10000,'N','HL'),(10,10,'Awesome NEW product','Try out brand new while chocolate ball','N',2000,'N','HL'),(11,11,'Love yourself','Buy yourself a sweet and lovely treat!','N',2000,'N','HL'),(12,12,'Croissants Strawberry','-','N',0,'N','CR'),(13,13,'Mix Berries Muffin Cupcake','-','N',0,'N','CR'),(14,14,'Macaroons','-','N',0,'N','CR'),(15,15,'Marble Cheecake','-','N',0,'N','CR'),(16,16,'Strawberries Jelly Cake','-','N',0,'N','CR'),(17,17,'Black Forest Chocolate Roll','-','N',0,'N','CR'),(18,9,'Roses 3D Cake','-','N',0,'N','ARTISAN'),(19,18,'The Birthday Present','-','N',0,'N','ARTISAN'),(20,19,'The Poney','-','N',0,'N','ARTISAN'),(21,20,'The Dark Dorm','-','N',0,'N','ARTISAN'),(22,21,'The Garden','-','N',0,'N','ARTISAN'),(23,22,'Forever Love','-','N',0,'N','ARTISAN'),(24,23,'Garlic Bread','-','N',0,'N','BREAD'),(25,24,'Croissant','-','N',0,'N','BREAD'),(27,25,'Butter Bread','-','N',0,'N','BREAD'),(28,26,'Pretzel','-','N',0,'N','BREAD'),(29,27,'Melon Bread','-','N',0,'N','BREAD'),(30,28,'Donut','-','N',0,'N','BREAD'),(31,6,'Chicken Ham Sandwich','-','N',0,'N','BREAD'),(32,29,'Dim Sum Bun','-','N',0,'N','BREAD'),(33,30,'Raisins Bread','-','N',0,'N','BREAD'),(34,31,'Irish Bun','-','N',0,'N','BREAD'),(35,4,'Chocolate Brownie','-','N',0,'N','BROWNIES'),(36,32,'Brownies Biscuit','-','N',0,'N','BROWNIES'),(37,33,'Ice Cream Brownies','-','N',0,'N','BROWNIES'),(38,34,'Frosted Fudge Brownies','-','N',0,'N','BROWNIES'),(39,7,'Burnt Cheese Cake','-','N',0,'N','CHEESE'),(40,35,'Quark Tart','-','N',0,'N','CHEESE'),(41,3,'Blue Berry Cheese Cake','-','N',0,'N','CHEESE'),(42,15,'Marble Cheecake','-','N',0,'N','CHEESE'),(43,36,'Tiramisu Cheese Cake','-','N',0,'N','CHEESE'),(44,37,'American Cheese Cake','-','N',0,'N','CHEESE'),(45,38,'Tiramisu Chocolate Cheese','-','N',0,'N','CHEESE'),(46,39,'Lemon Cheese','-','N',0,'N','CHEESE'),(47,40,'Mixed Berries Cheese','-','N',0,'N','CHEESE'),(48,41,'Jelly Cheese','-','N',0,'N','CHEESE'),(49,42,'Frozen Cream Cheese','-','N',0,'N','CHEESE'),(50,1,'Carrot Cake','-','N',0,'N','CHOC'),(51,17,'Black Forest Chocolate Roll','-','N',0,'N','CHOC'),(52,43,'Straberry Chocolate','-','N',0,'N','CHOC'),(53,44,'Oreo White Chocolate','-','N',0,'N','CHOC'),(54,45,'Moist Chocolate','-','N',0,'N','CHOC'),(55,46,'Chocolate Blackout','-','N',0,'N','CHOC'),(56,47,'Chocolate Mini Cake','-','N',0,'N','CHOC'),(57,48,'Chocolate Bliss','-','N',0,'N','CHOC'),(58,8,'Chocolate Strawberry Cake','-','N',0,'N','CREAM'),(59,5,'Strawberry Roll','-','N',0,'N','CREAM'),(60,16,'Strawberries Jelly Cake','-','N',0,'N','CREAM'),(61,49,'Lavendar Cake','-','N',0,'N','CREAM'),(62,50,'Peanut Ring','-','N',0,'N','CREAM'),(63,51,'Pink Painter','-','N',0,'N','CREAM'),(64,52,'Tiramisu Black Forest','-','N',0,'N','CREAM'),(65,53,'Black Forest','-','N',0,'N','CREAM'),(66,54,'Fruits Cake','-','N',0,'N','CREAM'),(67,55,'Genoise Sponge Cake','-','N',0,'N','CREAM'),(68,56,'Red Velvet','-','N',0,'N','CREAM'),(69,57,'Chocotorta','-','N',0,'N','CREAM'),(70,58,'Pound cake','-','N',0,'N','CREAM'),(71,13,'Mix Berries Muffin Cupcake','-','N',0,'N','CUP'),(72,59,'Tiramisu Cup Cake','-','N',0,'N','CUP'),(73,60,'Cream Cup Cake','-','N',0,'N','CUP'),(74,61,'Chocolate Cup Cake','-','N',0,'N','CUP'),(75,10,'White Chocolate Ball','-','N',0,'N','DESSERT'),(76,14,'Macaroons','-','N',0,'N','DESSERT'),(77,12,'Croissants Strawberry','-','N',0,'N','DESSERT'),(78,2,'Berries Tart','-','N',0,'N','DESSERT'),(79,62,'Pancake','-','N',0,'N','DESSERT'),(80,63,'Plum cake','-','N',0,'N','DESSERT'),(81,64,'Strawberry Pie','-','N',0,'N','DESSERT'),(82,65,'Dessert 8','-','N',0,'N','DESSERT'),(83,66,'Dessert 9','-','N',0,'N','DESSERT'),(84,67,'Dessert 10','-','N',0,'N','DESSERT'),(85,68,'Dessert 11','-','N',0,'N','DESSERT'),(86,69,'Dessert 12','-','N',0,'N','DESSERT'),(87,70,'Dessert 13','-','N',0,'N','DESSERT'),(88,71,'Dessert 14','-','N',0,'N','DESSERT'),(89,72,'Dessert 15','-','N',0,'N','DESSERT'),(90,73,'Dessert 16','-','N',0,'N','DESSERT'),(91,74,'Dessert 17','-','N',0,'N','DESSERT'),(92,75,'Dessert 18','-','N',0,'N','DESSERT');
/*!40000 ALTER TABLE `best_seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `DisplayName` varchar(50) NOT NULL,
  `ImgPath` mediumtext NOT NULL,
  `ImgGalleryPath` mediumtext,
  `Desc` longtext NOT NULL,
  `Price` float NOT NULL,
  `Withdrawn` varchar(1) NOT NULL,
  `Unit` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'CC','Carrot Cake','images/bestseller/bestseller_01.jpg','images/gallery/chocolateCake/choc01.jpg','Contains carrots mixed into the batter.',98,'N','10 inch'),(2,'BT','Berries Tart','images/bestseller/bestseller_02.jpg','images/gallery/dessert/dessert04.jpg','A mascarpone and whipped cream filling in a rich all-butter crust you just pat in the pan',78.9,'N','8 Inch'),(3,'BBCC','Blue Berry Cheese Cake','images/bestseller/bestseller_03.jpg','images/gallery/cheeseCake/cheese03.jpg','Layers of blueberry cake and blueberry cheesecake filled with delicious cream cheese buttercream frosting is perfect dessert for blueberry lovers. ',120,'N','8 Inch'),(4,'CB','Chocolate Brownie','images/bestseller/bestseller_04.jpg','images/gallery/brownies/brownies01.jpg','A chewy fudge-like texture, rich chocolate flavor, and shiny crackly crust.',150,'N','10 Inch'),(5,'SR','Strawberry Roll','images/bestseller/bestseller_05.jpg','images/gallery/creamCake/cream02.jpg','Super soft strawberry rolls with cream cheese and fresh strawberry glaze will melt in your mouth.',17.9,'N','One Roll'),(6,'CHS','Chicken Ham Sandwich','images/bestseller/bestseller_06.jpg','images/gallery/bread/bread07.jpg','Consists of boneless, skinless chicken breast or thigh served between slices of bread.',8.89,'N','One piece'),(7,'BCC','Burnt Cheese Cake','images/bestseller/bestseller_07.jpg','images/gallery/cheeseCake/cheese01.jpg','The perfect balance between a rich caramel crust and creamy cheesecake center—with no stressing over cracks.',145.6,'N','8 Inch'),(8,'CSC','Chocolate Strawberry Cake','images/bestseller/bestseller_08.jpg','images/gallery/creamCake/cream01.jpg','Moist chocolate layer cake with a strawberry filling and it’s covered in a chocolate Swiss meringue buttercream covered with strawberries.',199,'N','10 Inch'),(9,'R3DC','Roses 3D Cake','images/carousel/carousel_01.jpg','images/gallery/artisanCake/artisan01.jpg','-',250,'N','8 Inch'),(10,'WCB','White Chocolate Ball','images/carousel/carousel_02.jpg','images/gallery/dessert/dessert01.jpg','-',6.8,'N','1 Piece'),(11,'EC','Eclair','images/carousel/carousel_03.jpg',NULL,'-',16,'N','1 Piece'),(12,'CS','Croissants Strawberry','images/chef/chef_01.jpg','images/gallery/dessert/dessert03.jpg','-',18.9,'N','1 Piece'),(13,'MBMC','Mix Berries Muffin Cupcake','images/chef/chef_02.jpg','images/gallery/cupcakes/cup01.jpg','-',5.8,'N','1 Piece'),(14,'MAC','Macaroons','images/chef/chef_03.jpg','images/gallery/dessert/dessert02.jpg','-',9.9,'N','1 Piece'),(15,'MCC','Marble Cheecake','images/chef/chef_04.jpg','images/gallery/cheeseCake/cheese04.jpg','-',145.5,'N','8 Inch'),(16,'SJC','Strawberries Jelly Cake','images/chef/chef_05.jpg','images/gallery/creamCake/cream03.jpg','-',89.79,'N','10 Inch'),(17,'BFCR','Black Forest Chocolate Roll','images/chef/chef_06.jpg','images/gallery/chocolateCake/choc02.jpg','-',25.6,'N','1 Roll'),(18,'TBP','The Birthday Present','images/gallery/artisanCake/artisan02.jpg','images/gallery/artisanCake/artisan02.jpg','-',267,'N','8 Inch'),(19,'TP','The Poney','images/gallery/artisanCake/artisan03.jpg','images/gallery/artisanCake/artisan03.jpg','-',187,'N','10 Inch'),(20,'TDD','The Dark Dorm','images/gallery/artisanCake/artisan04.jpg','images/gallery/artisanCake/artisan04.jpg','-',245,'N','10 Inch'),(21,'TG','The Garden','images/gallery/artisanCake/artisan05.jpg','images/gallery/artisanCake/artisan05.jpg','-',345,'N','10 Inch'),(22,'FL','Forever Love','images/gallery/artisanCake/artisan06.jpg','images/gallery/artisanCake/artisan06.jpg','-',400,'N','10 Inch'),(23,'GB','Garlic Bread','images/gallery/artisanCake/bread01.jpg','images/gallery/bread/bread01.jpg','-',4.6,'N','One Piece'),(24,'CS','Croissant','images/gallery/artisanCake/bread02.jpg','images/gallery/bread/bread02.jpg','-',3.5,'N','One Piece'),(25,'BB','Butter Bread','images/gallery/artisanCake/bread03.jpg','images/gallery/bread/bread03.jpg','-',3,'N','One Piece'),(26,'PZ','Pretzel','images/gallery/artisanCake/bread04.jpg','images/gallery/bread/bread04.jpg','-',6.7,'N','One Piece'),(27,'MB','Melon Bread','images/gallery/artisanCake/bread05.jpg','images/gallery/bread/bread05.jpg','-',2.6,'N','one Piece'),(28,'DN','Donut','images/gallery/artisanCake/bread06.jpg','images/gallery/bread/bread06.jpg','-',4.1,'N','One Piece'),(29,'DSB','Dim Sum Bun','images/gallery/artisanCake/bread08.jpg','images/gallery/bread/bread08.jpg','-',4,'N','One Piece'),(30,'RB','Raisins Bread','images/gallery/artisanCake/bread09.jpg','images/gallery/bread/bread09.jpg','-',9.9,'N','One Roll'),(31,'IB','Irish Bun','images/gallery/artisanCake/bread10.jpg','images/gallery/bread/bread10.jpg','-',3.6,'N','One Piece'),(32,'BB','Brownies Biscuit','images/gallery/artisanCake/brownies02.jpg','images/gallery/brownies/brownies02.jpg','-',7.6,'N','One Piece'),(33,'ICB','Ice Cream Brownies','images/gallery/artisanCake/brownies03.jpg','images/gallery/brownies/brownies03.jpg','-',11.8,'N','One Piece'),(34,'FFB','Frosted Fudge Brownies','images/gallery/artisanCake/brownies04.jpg','images/gallery/brownies/brownies04.jpg','-',12.89,'N','One Piece'),(35,'QT','Quark Tart','images/gallery/artisanCake/cheese02.jpg','images/gallery/cheeseCake/cheese02.jpg','-',189,'N','10 Inch'),(36,'TCC','Tiramisu Cheese Cake','images/gallery/artisanCake/cheese05.jpg','images/gallery/cheeseCake/cheese05.jpg','-',176,'N','8 Inch'),(37,'ACC','American Cheese Cake','images/gallery/artisanCake/cheese06.jpg','images/gallery/cheeseCake/cheese06.jpg','-',199,'N','8 Inch'),(38,'TCC','Tiramisu Chocolate Cheese','images/gallery/artisanCake/cheese07.jpg','images/gallery/cheeseCake/cheese07.jpg','-',245,'N','8 Inch'),(39,'LC','Lemon Cheese','images/gallery/artisanCake/cheese08.jpg','images/gallery/cheeseCake/cheese08.jpg','-',176,'N','8 Inch'),(40,'MBC','Mixed Berries Cheese','images/gallery/artisanCake/cheese09.jpg','images/gallery/cheeseCake/cheese09.jpg','-',234,'N','10 Inch'),(41,'JC','Jelly Cheese','images/gallery/artisanCake/cheese10.jpg','images/gallery/cheeseCake/cheese10.jpg','-',167,'N','8 Inch'),(42,'FCC','Frozen Cream Cheese','images/gallery/artisanCake/cheese11.jpg','images/gallery/cheeseCake/cheese11.jpg','-',278,'N','8 Inch'),(43,'SC','Straberry Chocolate','images/gallery/chocolateCake/choc03.jpg','images/gallery/chocolateCake/choc03.jpg','-',166,'N','8 Inch'),(44,'OWC','Oreo White Chocolate','images/gallery/chocolateCake/choc04.jpg','images/gallery/chocolateCake/choc04.jpg','-',198,'N','8 Inch'),(45,'MC','Moist Chocolate','images/gallery/chocolateCake/choc05.jpg','images/gallery/chocolateCake/choc05.jpg','-',235,'N','10 Inch'),(46,'CB','Chocolate Blackout','images/gallery/chocolateCake/choc06.jpg','images/gallery/chocolateCake/choc06.jpg','-',176,'N','8 Inch'),(47,'CMC','Chocolate Mini Cake','images/gallery/chocolateCake/choc07.jpg','images/gallery/chocolateCake/choc07.jpg','-',23,'N','Per Piece'),(48,'CB','Chocolate Bliss','images/gallery/chocolateCake/choc08.jpg','images/gallery/chocolateCake/choc08.jpg','-',156,'N','8 Inch'),(49,'LC','Lavendar Cake','images/gallery/creamCake/cream04.jpg','images/gallery/creamCake/cream04.jpg','-',177,'N','8 Inch'),(50,'PR','Peanut Ring','images/gallery/creamCake/cream05.jpg','images/gallery/creamCake/cream05.jpg','-',120,'N','8 Inch'),(51,'PP','Pink Painter','images/gallery/creamCake/cream06.jpg','images/gallery/creamCake/cream06.jpg','-',100,'N','10 Inch'),(52,'TBF','Tiramisu Black Forest','images/gallery/creamCake/cream07.jpg','images/gallery/creamCake/cream07.jpg','-',125,'N','10 Inch'),(53,'BF','Black Forest','images/gallery/creamCake/cream08.jpg','images/gallery/creamCake/cream08.jpg','-',124,'N','8 Inch'),(54,'FC','Fruits Cake','images/gallery/creamCake/cream09.jpg','images/gallery/creamCake/cream09.jpg','-',144,'N','8 Inch'),(55,'GSC','Genoise Sponge Cake','images/gallery/creamCake/cream10.jpg','images/gallery/creamCake/cream10.jpg','-',178,'N','8 Inch'),(56,'RV','Red Velvet','images/gallery/creamCake/cream11.jpg','images/gallery/creamCake/cream11.jpg','-',189,'N','10 Inch'),(57,'CT','Chocotorta','images/gallery/creamCake/cream12.jpg','images/gallery/creamCake/cream12.jpg','-',190,'N','10 Inch'),(58,'PC','Pound cake','images/gallery/creamCake/cream13.jpg','images/gallery/creamCake/cream13.jpg','-',176,'N','8 Inch'),(59,'TCC','Tiramisu Cup Cake','images/gallery/cupcakes/cup02.jpg','images/gallery/cupcakes/cup02.jpg','-',4.3,'N','One Piece'),(60,'CCC','Cream Cup Cake','images/gallery/cupcakes/cup03.jpg','images/gallery/cupcakes/cup03.jpg','-',3,'N','One Piece'),(61,'CCC','Chocolate Cup Cake','images/gallery/cupcakes/cup04.jpg','images/gallery/cupcakes/cup04.jpg','-',5,'N','One Piece'),(62,'PC','Pancake','images/gallery/dessert/dessert05.jpg','images/gallery/dessert/dessert05.jpg','-',2,'N','One Piece'),(63,'PMC','Plum cake','images/gallery/dessert/dessert06.jpg','images/gallery/dessert/dessert06.jpg','-',19.9,'N','8 Inch'),(64,'SP','Strawberry Pie','images/gallery/dessert/dessert07.jpg','images/gallery/dessert/dessert07.jpg','-',78,'N','5 Inch'),(65,'D8','Dessert 8','images/gallery/dessert/dessert08.jpg','images/gallery/dessert/dessert08.jpg','-',16,'N','One Piece'),(66,'D9','Dessert 9','images/gallery/dessert/dessert09.jpg','images/gallery/dessert/dessert09.jpg','-',56,'N','One Piece'),(67,'D10','Dessert 10','images/gallery/dessert/dessert10.jpg','images/gallery/dessert/dessert10.jpg','-',43,'N','One Piece'),(68,'D11','Dessert 11','images/gallery/dessert/dessert11.jpg','images/gallery/dessert/dessert11.jpg','-',76,'N','One Piece'),(69,'D12','Dessert 12','images/gallery/dessert/dessert12.jpg','images/gallery/dessert/dessert12.jpg','-',34,'N','One Piece'),(70,'D13','Dessert 13','images/gallery/dessert/dessert13.jpg','images/gallery/dessert/dessert13.jpg','-',11,'N','One Piece'),(71,'D14','Dessert 14','images/gallery/dessert/dessert14.jpg','images/gallery/dessert/dessert14.jpg','-',38,'N','One Piece'),(72,'D15','Dessert 15','images/gallery/dessert/dessert15.jpg','images/gallery/dessert/dessert15.jpg','-',21,'N','One Piece'),(73,'D16','Dessert 16','images/gallery/dessert/dessert16.jpg','images/gallery/dessert/dessert16.jpg','-',67,'N','One Piece'),(74,'D17','Dessert 17','images/gallery/dessert/dessert17.jpg','images/gallery/dessert/dessert17.jpg','-',45,'N','One Piece'),(75,'D18','Dessert 18','images/gallery/dessert/dessert18.jpg','images/gallery/dessert/dessert18.jpg','-',98,'N','One Piece');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `ID` int DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Jackson','Wang'),(1,'Jackson','Wang Yi');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-10 23:34:01
