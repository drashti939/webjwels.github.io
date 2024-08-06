-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2024 at 11:43 AM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`, `status`) VALUES
(1, 'drashti dhameliya', 'drashti@123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `bill_id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `company` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `product_id` int NOT NULL,
  `rate` varchar(40) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `total` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bill_id`, `user_email`, `country`, `firstname`, `lastname`, `company`, `address`, `city`, `state`, `zipcode`, `email`, `phone`, `note`, `product_id`, `rate`, `qty`, `amount`, `total`, `status`) VALUES
(1, 'asvithesiya@gmail.com', 'de', 'Drashti', 'Dhameliya', 'Rise infotech', 'ganesh row house', 'surat', 'Gujarat', '395006', 'drashti@gmail.com', '9090996655', 'xdf', 4, '336151', '1', '', '336151', 'success'),
(2, 'asvithesiya@gmail.com', 'de', 'Drashti', 'Dhameliya', 'Rise infotech', 'ganesh row house', 'surat', 'Gujarat', '395006', 'drashti@gmail.com', '9090996655', 'xdf', 6, '133172', '1', '', '133172', 'success'),
(3, 'drashti@gmail.com', 'de', 'Drashti', 'Dhameliya', 'Rise infotech', '123 Main Street, Anytown, CA 12345 – USA', 'berlin', 'berlin', '867674', 'ethanmarcotte008@gmail.com', '9090996655', 'as soon', 7, '34046', '1', '', '34046', 'cancle'),
(4, 'drashti@gmail.com', 'de', 'Drashti', 'Dhameliya', 'Rise infotech', '123 Main Street, Anytown, CA 12345 – USA', 'berlin', 'berlin', '867674', 'ethanmarcotte008@gmail.com', '9090996655', 'as soon', 9, '1799', '1', '', '1799', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `image`, `name`, `detail`) VALUES
(1, 'blog16.webp', 'MAKING A VICTORIAN-STYLE PENDANT & EARRINGS', 'Recently a loyal customer asked if we would make a pair of earrings and matching pendant in an older design which is no longer in production in the jewellery shop. The pieces were to be given as a ...'),
(2, 'blog3.webp', 'ARE GOLD RINGS WORTH THE INVESTMENT?', 'Gold rings have been a much sought after jewellery accessory for millennia, with some of the oldest rings in gold found to date having been made around 6,500 years ago. The beauty, elegance, preci...'),
(3, 'blog4.jpg', 'ALL ABOUT OPAL JEWELLERY', 'Opal is a unique and fascinating gemstone that has been used in jewellery for millennia. With its distinctive play of colours and iridescence, opal jewellery is both beautiful and eye-catching. Op...'),
(4, 'blog5.webp', 'CHRISTMAS GIFT IDEAS FOR SPECIAL PEOPLE', 'Part of the joy of this time of year is avoiding queues, staying home with a wheel of cheese and ordering exquisitely handmade gifts for your loved ones. We’ve prepared our own cheat sheet to help ...'),
(5, 'blog6.jpg', 'GIFT IDEAS: MAKE IT MEANINGFUL', 'A well-made piece of jewellery from a loved one can be a gift we wear every day, with emotional ties to the person from whom it came. Many are lucky enough to have pieces that have been passed dow...'),
(6, 'blog7.webp', 'A JEWELLERY LOVER\'S GUIDE TO BUILDING THE PERFECT RING STACK', 'Jewellery has long been part of human civilisation, with the oldest known jewellery being dated as far back as 25,000 years ago. Over millennia and across diverse cultures, many aesthetics have co...'),
(7, 'blog8.webp', 'HOW TO CHOOSE THE RIGHT NECKLACE LENGTH', 'Are you trying to figure out how to choose the best necklace length or chain length? Which lengths and style of necklaces with pendant or chain necklaces will suit you and your neckline best? Or ar...'),
(8, 'blog13.webp', 'OUTFIT IDEAS: MIXED & MATCHED JEWELLERY', 'If you\'ve read our article about How to Mix & Match jewellery and you\'re looking for some examples to inspire you, here are some selections we\'ve put together of Simone Walsh Jewellery designs....'),
(9, 'blog10.webp', 'WHAT IT MEANS TO TRULY SUPPORT SMALL SHOPS, DESIGNERS AND ARTISANS', 'A few years back I read an article in an Australian magazine about handmade jewellery which indicated that a price of $19 was decadent for a pair of simple, Australian handmade earrings. The artic...'),
(10, 'blog11.webp', 'HOW TO PRICE YOUR CRAFT & DESIGN', 'Pricing your handmade craft or design work can be very complex to get right. It can take years of learning, testing and refinement. You\'ll find it probably involves a lot of groaning, sighing and e...'),
(11, 'blog14.webp', 'AUTUMN STYLE TIPS TO UP YOUR JEWELLERY GAME', 'Can you believe it\'s autumn already? As you transition your wardrobe into the cooler months we\'ve got a simple and fun way to help you up your jewellery and general style game. Simply put on a very...'),
(12, 'blog15.jpg', 'MOST POPULAR JEWELLERY THIS CHRISTMAS (2018 EDITION)', 'I\'m always fascinated to see what is most popular with our lovely customers each Christmas, which is always our busiest time of year. And this year is no different. There\'s usually a mix of old fav...');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(60) NOT NULL,
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `type_id` int NOT NULL,
  `image` text NOT NULL,
  `rate` varchar(15) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_email`, `product_id`, `category_id`, `type_id`, `image`, `rate`, `qty`, `total`) VALUES
(9, '', 9, 7, 3, 'sring1-removebg-preview.png', '1799', '1', ''),
(10, 'asvithesiya@gmail.com', 3, 4, 1, 'bracelet-1.jpg', '95339', '1', '95339'),
(11, 'asvithesiya@gmail.com', 7, 3, 1, 'ring1.jpg', '34046', '1', '34046');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `type_id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `type_id`, `name`, `image`) VALUES
(3, 1, 'Ring', 'ring.webp'),
(4, 1, 'Bracelet', 'bracelate.webp'),
(5, 1, 'Chain', 'chain.webp'),
(6, 1, 'Mangalsutra', 'images.jpg'),
(7, 3, 'Ring', 'silver ring.webp'),
(8, 3, 'Bracelet', 'silver_b-removebg-preview.png'),
(9, 3, 'Anklet', 'anklet.webp'),
(10, 4, 'Ring', 'silver ring.webp'),
(11, 1, 'Earings', 'earings.webp'),
(13, 1, 'bangales', 'bangles1.webp'),
(14, 3, 'Earings', 'searing1.jpg'),
(15, 3, 'Nackless', 'ring2.png'),
(16, 4, 'Bracelete', 'sbracelet12.jpg'),
(17, 4, 'Earings', 'pearing2.webp'),
(18, 4, 'Pendants', 'pring2.jpg'),
(19, 4, 'Necklace', 'ppandents1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `conatct_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`conatct_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`conatct_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Drashti Dhameliya', 'drashti@gmail.com', 'Gold', 'Today rate');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `name`, `rate`) VALUES
(1, 'abc11020', '10');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `email_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `email`) VALUES
(1, 'gopidhameliya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE IF NOT EXISTS `gallary` (
  `gallary_id` int NOT NULL AUTO_INCREMENT,
  `type_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`gallary_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`gallary_id`, `type_id`, `name`, `image`) VALUES
(1, 1, 'Ring', 'ROSE.webp');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `info_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `name`, `address`, `phone`, `email`) VALUES
(1, '', '123 Main Street, Anytown, CA 12345 – USA', '(08) 123 456 789', 'craetivejwels345@gmail.com'),
(2, 'mayra', '123 Main Street, Anytown, CA 12345 – USA', '(08) 893 456 789', 'ethanmarcotte008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `type_id` int NOT NULL,
  `rate` varchar(40) NOT NULL,
  `gty` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `type_id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rate` varchar(60) NOT NULL,
  `discription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` text NOT NULL,
  `image1` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `type_id`, `category_id`, `name`, `rate`, `discription`, `image`, `image1`) VALUES
(3, 1, 4, '18KT Indo Italian Rose Gold Flower Design Ladies B', '95339', 'Indulge in elegance with our 18KT Rose Gold Flower Ladies Bracelet, featuring an exquisite Indo Italian design. Elevate your style effortlessly with this stunning piece, ideal for expressing your uniq', 'bracelet-1.jpg', 'gbrecelet2.jpg'),
(4, 1, 13, '22K Gold Bangle: Rhodium Look with Double Bangle C', '336151', '22K Gold Double Bangle Combination, featuring a stunning design and a captivating rhodium look.', 'bangles1.webp', 'bangales2.webp'),
(5, 1, 5, '18K Italian Rose Gold Cartier Trinity Pendant Chai', '42532', 'Drape yourself in luxury with the 18K Italian Rose Gold Cartier Trinity Pendant Chain, an exquisite fusion of elegance and craftsmanship, capturing the essence of timeless sophistication.', 'chain1.jpg', 'chain2.webp'),
(6, 1, 11, '22K Antique Jadtar Earrings for Traditional Occasi', '133172', 'The antique charm of the Jadtar work beautifully complements the traditional occasional wear, adding a regal touch to your attire.The rich hues of red and green add a vibrant touch for perfect fusion ', 'earing1.png', 'earing2.webp'),
(7, 1, 3, '18KT Indo-Italian Rose Gold Flower Design Ring', '34046', 'Adorn your finger with elegance in our 18KT Diamond Ring, featuring an enchanting Indo-Italian flower design in radiant rose gold. Embrace timeless beauty with this piece, perfect for adding a touch o', 'ring1.jpg', 'ring2.png'),
(8, 1, 6, '22K Yellow Gold Eelegant Butterfly Mangalsutra', '59010', 'The Elegant Butterfly Gold Mangalsutra captivates with its graceful design, featuring delicate butterfly motifs crafted in shimmering gold', 'mangalsutra1.jpg', 'mangalsutra2.jpg'),
(9, 3, 7, 'Silver Zircon Beachy Waves Ring Made with 925 Silver', '1799', 'Make a toast to the classy, beachy, summer days of happiness. What a perfect pick would this be for a beach-lovers!', 'sring1-removebg-preview.png', 'sring2-removebg-preview.png'),
(14, 3, 8, 'Silver Triple Zircon Bracelet', '3599', 'This silver bracelet has three rectangular-shaped cut zircons in the centre adorned with zircons. 925 Silver Perfect for sensitive skin', 'sbracelet1-removebg-preview.png', 'sbracelet2-removebg-preview.png'),
(11, 3, 14, 'Silver  Functional wear Leaf Earrings', '3000', 'These silver earrings have a leaf branch of leaf sporting zircons.', 'searing01-removebg-preview.png', 'searing02-removebg-preview.png'),
(12, 3, 15, 'Oxidised Rise Above Fear Necklace Made with 925 Silver', '2700', 'Silver Lotus Pendant Necklace. Crafted in Oxidised 925 Silver with Synthetic Pink Sapphire. Uniquely handcrafted, no two pieces are exactly alike!', 'sset1-removebg-preview.png', 'sset2-removebg-preview.png'),
(13, 3, 9, 'Silver Minimal Black Beads Anklet Made with 925 Silver', '1799', 'This silver anklet has two black beads on a silver chain with a lobster claw clasp closure.', 'sanklet1-removebg-preview.png', 'sanklet2-removebg-preview.png'),
(15, 4, 16, 'Figarucci Platinum Bracelet', '115000', '*A differential amount will be applicable with difference in weight if any.', 'pbracelet1-removebg-preview.png', 'pbracelet2-removebg-preview.png'),
(16, 4, 10, 'Austin Diamond Platinum Band Ring', '45787', '*Difference in metal weight may occur & will apply on final price.', 'pring1-removebg-preview.png', 'pring2-removebg-preview.png'),
(17, 4, 17, 'Four Clover Leaf Platinum Earrings', '28379', '*Difference in metal weight may occur & will apply on final price. Width 0.73 cm (7.3 mm)', 'pearing1-removebg-preview.png', 'pearing2-removebg-preview.png'),
(18, 4, 18, 'Es Vida Platinum And Rose Gold Football Pendant', '51582', 'Style No.-CP00280  Width-1.65 cm (16.50 mm) Metal Weight-7.30g Gross  Weight-7.30g *', 'ppandents2-removebg-preview.png', 'ppandents1-removebg-preview.png'),
(19, 4, 19, 'Greek Goddess Platinum Necklace', '47418', 'Style No.-KC04648PLTRG  Width-0.668 cm (6.68 mm) Necklace  Length-17 inch (431.8 mm) Metal  Weight-4.91g Gross  Weight-6.53g', 'pNecklace2-removebg-preview.png', 'pnecklace1-removebg-preview.png'),
(20, 1, 3, '18KT premium quality Gold Ring For Mens', '35769', 'Elevate your style with exquisite premium quality gold ring for men, crafted with precision and sophistication. Designed to make a statement, this timeless piece exudes elegance and luxury, perfect for adding a touch of refinement to any ensemble.', 'gring.jpg', 'gring2.jpg'),
(21, 1, 13, '22KT Antique Gold Bangle', '446608', 'The timeless allure of our 22KT Antique Gold Bangle, meticulously handmade with lock system.', 'gbangles1.webp', 'sbangales2.webp'),
(22, 1, 13, '22KT Gold Bangle with Wave Design and Rhodium Look', '270444', 'Elevate your everyday style with our 22KT Gold Bangle – a sleek rhodium look and mesmerizing wave design bring timeless elegance, making it perfect for daily wear.', 'gbangles3.webp', 'gbangles4.webp'),
(23, 1, 13, '18KT Diamond Bangle with Minimalistic Design', '172313', '18K Diamond Bangle, featuring a minimalist design with a 4 block pattern of sparkling diamonds, this bangle is the perfect blend of affordability and elegance.', 'gbangales5.webp', 'gbangles6.webp'),
(24, 1, 13, '18KT Real Diamond Eternity Bangle', '227015', 'Elevate your style with our 18KT Eternity Diamond Bangle, a symbol of timeless elegance adorned with a continuous line of sparkling diamonds, exuding sophistication, luxury, and making a lasting impression.', 'gbangles7.webp', 'gbangles9.png'),
(25, 1, 13, '18KT Diamond Bangle with Block Baguette Design', '412830', 'Elevate your style with our 18KT Diamond Bangle, showcasing an exquisite block baguette design for an eternal look, while providing both style and peace of mind with its lock system.', 'abangeles1.png', 'abangels2.webp'),
(26, 1, 13, '18KT Diamond Bangle with a Stunning Eternity Look', '237091', '18KT Diamond Bangle, featuring a captivating 4-block pressure setting that creates an eternal look.', 'abagles3.png', 'abangles4.webp'),
(27, 1, 13, '22KT Yellow Gold Antique Jadau Bangles |Pachchigar Jewellers', '251038', 'Indulge in timeless elegance with these 22KT yellow gold antique Jadau bangles, meticulously crafted with intricate designs that capture the essence of heritage and tradition.', 'abangles5.jpg', 'abangles6.jpg'),
(28, 1, 13, '22KT Yellow Gold Designer Rhodium Bangle |Pachchigar Jewellers', '251966', 'Crafted with finesse in 22KT yellow gold, this designer bangle showcases intricate patterns highlighted by rhodium plating, perfect for elevating any outfit with a touch of glamour and elegance.', 'dbangles1.jpg', 'dbangles2.jpg'),
(29, 1, 13, '22KT Yellow Gold Antique Jadau Bangles |Pachchigar Jewellers', '253141', 'Indulge in timeless elegance with these 22KT yellow gold antique Jadau bangles, meticulously crafted with intricate designs that capture the essence of heritage and tradition.', 'ebangles1.jpg', 'ebangles2.jpg'),
(30, 1, 13, '18KT Diamond Bangle with Marquise Look and Pressure Setting', '220625', 'Elevate your style with our 18KT Diamond Bangle, adorned with a mesmerizing marquise look and a dazzling 6-diamond pressure setting, showcasing exquisite craftsmanship and sophistication.', 'fbangles1.png', 'fbangles2.webp'),
(31, 1, 13, '18KT Diamond Bangle with Single Diamond Pressure Setting', '215360', 'The perfect blend of elegance and affordability with our 18K Diamond Bangle. Featuring a stunning single diamond pressure setting, this lightweight bangle offers a touch of sophistication without compromising comfort.', 'hbangles1.webp', 'hbangles2.png'),
(32, 1, 3, '18KT Indo-Italian Rose Gold Ring with Flower Design 18KT Indo-Italian Rose Gold Ring with Flower Des', '36065', 'Elevate your elegance with our 18KT Indo-Italian Rose Gold Ring featuring a Flower Design. Adorned with American Diamonds on the petal’s endpoints, this piece adds a touch of timeless charm to your style.', 'aring1.jpg', 'aring2.jpg'),
(33, 1, 3, '18KT Real Diamond Infinity Pattern Ring – Eternal Elegance', '46540', 'Elevate your daily elegance with our 18KT Real Diamond Ring featuring an infinity pattern. Designed for daily wear, this ring boasts a pressure setting, exuding timeless charm and sophistication.', 'bring1.webp', 'bring2.jpg'),
(34, 1, 3, '18KT Marquise Pressure Setting Diamond Ring : Eternity Look', '55285', 'Celebrate everlasting love with our 18KT Diamond Engagement Ring. The stunning design showcases a 3-diamond marquise pressure setting, evoking an enchanting eternity look. This ring is a symbol of timeless beauty and a perfect choice to honor your special commitment.', 'cring1.webp', 'cring2.webp'),
(35, 1, 3, 'Diamond Jewellery Yellow (5.286 gram) with diamonds (0.57 cts) - DRL_4056', '93775', 'Exude timeless sophistication with our 18k gold elegant diamond ring. A luxurious accessory crafted to elevate any ensemble', 'dring1.png', 'dring2.png'),
(36, 1, 3, '18k Rose Gold Vintage Fancy and Bold Diamond Ring', '104527', 'Elevate your style with this stunning 18K rose gold vintage diamond ring, boasting intricate detailing and a bold design. A timeless piece that exudes sophistication and charm, perfect for making a statement.', 'ering2.png', 'ering1.png'),
(37, 1, 3, '18KT Yellow Gold Mens Ring Features Center Horse Design', '78207', 'Crafted from 18KT  yellow gold, this men’s ring features a center horse design, evoking a sense of strength and elegance in your style.', 'fring1.jpg', 'fring2.jpg'),
(38, 1, 3, '22KT Yellow Gold Mens Ring With Central Diamond For Touch Of Elegance', '54797', 'This 22KT yellow gold men’s ring features a central diamond, adding a touch of elegance and sophistication to any look. With its timeless design and luxurious appeal, it’s a perfect accessory for any occasion.', 'gring1.jpg', 'gging2.jpg'),
(39, 1, 3, '18KT premium quality Gold Ring For Mens', '36185', 'Elevate your style with exquisite premium quality gold ring for men, crafted with precision and sophistication. Designed to make a statement, this timeless piece exudes elegance and luxury, perfect for adding a touch of refinement to any ensemble.', 'hring1.jpg', 'hring2.jpg'),
(40, 1, 3, '18KT Rose Gold Diamond Men’s Ring', '45924', 'Elevate your style with our 18KT Rose Gold Men’s Ring featuring sparkling American Diamonds, perfect for regular wear. Crafted with precision and sophistication, this ring combines elegance and durability, making it an ideal accessory for adding a touch of luxury to your everyday look.', 'iring1.webp', 'iring2.webp'),
(41, 1, 3, '22K Yellow Gold Diamond Ring with a Stylish Belt Design', '57923', 'Unleash your inner style icon with our dazzling 22K Yellow Gold Diamond Ring. Designed with a stylish belt-inspired pattern, this exquisite piece exudes sophistication and elegance.', 'jring1.webp', 'jring2.webp'),
(42, 1, 3, '22K Yellow Gold Gents Ring for Regular Wear', '82619', 'Elevate your everyday style with our 22K yellow gold gents ring, designed for regular wear. Crafted with enduring quality and timeless appeal, this ring adds a touch of sophistication to any outfit.', 'kring1.png', 'kring2.png'),
(43, 1, 3, '18K Rose Gold Engagement Diamond Ring For Mens', '68691', 'Embrace elegance and luxury with our Perseus diamond ring for men. Meticulously crafted, it exudes sophistication, making it an ideal statement piece for every occasion', 'lring1.png', 'lring2.png'),
(44, 1, 4, '18K Rose Gold Italian Bracelet For Occasional Wear', '68561', 'Indulge in luxurious elegance with our 18K rose gold Italian bracelet, meticulously crafted for special occasions. Elevate your ensemble with the timeless allure of fine Italian craftsmanship and radiant rose gold sophistication.', 'abracelet1.jpg', 'abracelet2.jpg'),
(45, 1, 4, '18KT Flower Design Rose Gold Indo-Italian Bracelet', '72717', 'Elevate your style with our 18KT Rose Gold Indo-Italian Bracelet, featuring a flower design at its center, surrounded by diamond circles on both sides. Achieve a sophisticated and sober look with this piece.', 'bbracelet1.jpg', 'bbracelet2.jpg'),
(46, 1, 4, 'Designer 18KT Rose Gold Indo-Italian Bracelet', '89143', 'Elevate your style with our exquisite 18KT Rose Gold Indo-Italian Bracelet, a designer piece that offers the illusion of a hollow look while being a meticulously crafted casting. Featuring charming ball accents hanging delicately on a chain, it’s a statement of elegance.', 'cbracelet1.jpg', 'cbracelet2.jpg'),
(47, 1, 4, '18KT Rose Gold Diamond Bracelet – Exquisite Cross Design', '250816', 'Adorn your wrist with our stunning 18KT Rose Gold Diamond Bracelet featuring a captivating cross design. Embellished with shimmering round diamonds and a center baguette, this bracelet exudes timeless elegance and grace.', 'dbracelet1.png', 'dbracelet2.png'),
(48, 1, 4, '18KT Yellow Gold Floral Loop Diamond Bracelet ', '113884', 'Embrace the beauty of nature with this enchanting 18KT yellow gold floral loop diamond bracelet. Delicately crafted, each petal sparkles with the brilliance of meticulously set diamonds, creating a captivating piece that radiates elegance and charm.', 'ebracelet1.png', 'ebracelet2.png'),
(49, 1, 4, '18KT Yellow Gold Cartier Diamond Bracelet', '387435', 'Indulge in opulence with this stunning 18KT yellow gold Cartier bracelet, featuring a pave setting of shimmering diamonds. Exquisitely crafted, it radiates timeless elegance and luxury, making it a captivating addition to any jewelry collection.', 'fbracelet2.png', 'fbracelet1.png'),
(50, 1, 4, '18KT Rose Gold Finely Finished Diamond Bracelet', '338335', 'Indulge in the delicate allure of this 18KT rose gold diamond bracelet, meticulously crafted with exquisite attention to detail. Its finely finished design exudes elegance and sophistication, making it the perfect accessory to elevate any ensemble.', 'gbracelet1.png', 'gbracelet2.png'),
(51, 1, 4, '18KT Indo-Italian Bracelet with BMW Symbol Centerpiece', '53980', 'Discover elegance and style with our 18KT Rose Gold Indo-Italian Hollow Cross Bracelet. This lightweight masterpiece combines craftsmanship with a delicate hollow design, making it the perfect accessory for both fashion and comfort.', 'hbracelet1.jpg', 'hbracelet2.jpg'),
(52, 1, 4, '18k Rose Gold Highlighted with Stud Border Italian Bracelet', '54035', 'Elevate your style with sophistication wearing the exquisite 18K rose gold bracelet. Highlighted with a stud border, this Italian design crafted by Ashokbhai offers timeless elegance for any occasion.', 'ibracelet1.jpg', 'ibracelet2.jpg'),
(53, 1, 4, '22K Yellow Gold Rudraksha Bracelet for Women', '62278', 'Elevate your femininity with this stunning 22K yellow gold Rudraksha bracelet for women, a symbol of grace and spirituality crafted for timeless elegance.', 'jbracelet1.jpg', 'jbraclet2.jpg'),
(54, 1, 5, '18K Italian Rose Gold Chain adorned with rhodium balls', '114105', 'Upgrade your look with the 18K Italian Rose Gold Chain adorned with rhodium balls, a sophisticated accessory showcasing elegance and craftsmanship in perfect harmony.', 'achain1.jpg', 'achain2.jpg'),
(55, 1, 5, '18K Italian Rose Gold Handbag Pendant Chain', '26089', 'Enhance your style with the 18K Italian Rose Gold Handbag Pendant Chain, a chic accessory crafted with elegance and sophistication, perfect for making a statement.', 'bchain1.jpg', 'bchain2.jpg'),
(56, 1, 5, '18KT Rose Gold Cherry Design Pendant Chain', '25338', 'Adorn yourself with our 18KT Rose Gold Cherry Design Pendant, an Indo-Italian masterpiece. The intricate leaf, filled with glistening American Diamonds, adds a touch of sparkle to this unique piece, making it the perfect accessory for party wear.', 'ccchain1.jpg', 'cchain2.jpg'),
(57, 1, 5, '18KT Rose Gold Indo-Italian Star Design Pendant Chain| Pachchigar Jewellers', '26478', 'Elevate your look with our elegant 18KT Rose Gold Indo-Italian Pendant Chain, featuring a stunning star design. Crafted with precision, this chain exudes sophistication and style. Add a touch of celestial charm to your ensemble with this piece.', 'dhain1.jpg', 'dchain2.jpg'),
(58, 1, 5, '18K Italian Rose Gold Louis Vuitton Pendant chain', '47988', 'Experience luxury with the 18K Italian Rose Gold Louis Vuitton Pendant Chain, a refined adornment showcasing opulence and prestige.', 'echain1.jpg', 'echain2.jpg'),
(59, 1, 5, '18KT Rose Gold Floral Pendant with Threaded Kadap Chain', '14628', 'Elevate your style with our 18KT Rose Gold Floral Pendant, delicately tied with thread on a Kadap chain. Crafted with both matte and mirror polish, this piece exudes sophistication and versatility.', 'fchain1.jpg', 'fchain2.jpg'),
(63, 1, 5, '18KT Rose Gold Indo-Italian Pendant Chain', '27683', 'Our Indo-Italian 18KT Rose Gold Pendant Chain, featuring stunning American Diamonds. The intricate design forms a beautiful Nakshatra pattern, exuding timeless charm and sophistication.', 'gchain1.jpg', 'gchain2.jpg'),
(64, 1, 5, '18KT Rose Gold Cherry Pendant chain Delicately Crafted', '17969', 'Elevate your style with our 18KT Rose Gold Cherry Pendant, exuding charm and elegance. Make a statement with this exquisite pendant, perfect for expressing your unique sense of fashion.', 'hchain1.jpg', 'hchain2.jpg'),
(65, 1, 5, '18KT Rose Gold Indo-Italian Star Design Pendant Chain', '26478', 'Elevate your look with our elegant 18KT Rose Gold Indo-Italian Pendant Chain, featuring a stunning star design. Crafted with precision, this chain exudes sophistication and style. Add a touch of celestial charm to your ensemble with this piece.', 'ichain1.jpg', 'ichain2.jpg'),
(66, 1, 5, '18K Rose Gold Chain with Classic Charms Hanging Pendant', '46982', 'Make a timeless statement with this 18K rose gold chain featuring classic charms hanging pendant. Effortlessly elegant, this piece adds a touch of sophistication to any outfit, perfect for both casual and formal occasions.', 'jchain1.webp', 'jchain2.jpg'),
(67, 1, 5, '18K Plain Ball Pendant Gold Chain with Rhodium Touch', '56377', 'Adorn yourself with understated elegance using our 18K Plain Ball Pendant Gold Chain, featuring a delicate touch of Rhodium polish for added refinement. Effortlessly versatile, making it a staple in any jewelry collection.', 'lchain1.webp', 'lchain2.webp'),
(68, 1, 5, '18K Rose Gold Classy bunch Chain with Rhodium Balls', '106426', 'Elevate your elegance with our 18K rose gold Classy Bunch Chain adorned with shimmering rhodium balls, a timeless statement of sophistication and style. Crafted to perfection, this exquisite piece exudes luxury and grace.', 'mchain1.webp', 'mchain2.webp'),
(69, 1, 5, '18K Gold Chain with Rhodium Balls Studded Attached Pendant', '53942', 'Discover timeless elegance with this 18K Gold Chain featuring rhodium balls studded along its length, elegantly leading to a stunning attached pendant. Elevate any ensemble with this exquisite blend of sophistication and style.', 'nchain1.jpg', 'nchain2.jpg'),
(70, 1, 6, 'Circular Tassels Mangalsutra Price Inclusive of all taxes. ', '60841', 'Celebrate your everlasting bond with your loved one with this circular mangalsutra crafted in 22 karat yellow gold', 'amangalsutra2.jpg', 'amangal2.jpg'),
(71, 1, 6, '22K Yellow Gold Fancy Tassels Mangalsutra', '61397', 'Be the fancy bride who sets a precedent in fashion, with this fancy tassels mangalsutra crafted in 22 karat yellow gold', 'bmangalsutra1.jpg', 'bmangalsutra2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `firstname`, `lastname`, `email`, `password`, `cpassword`) VALUES
(1, 'drashti', 'Dhameliya', 'drashti@gmail.com', '123456', '1234'),
(2, 'Asvi ', 'Thesiya', 'asvithesiya@gmail.com', '1230', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `name`, `image`) VALUES
(14, '4-Bridal Neckless', 'slider-20.webp'),
(13, '3-Wedding Neckless', 'slider-3.jpg'),
(11, '1-Functional Bengales', 'slider-1.jpg'),
(12, '2-Wider Range of daily wearing neckless', 'slider-2.jpg'),
(15, '5-Running Wear Ring', 'earing slider design.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `image`, `username`, `type`, `email`) VALUES
(18, 'Marketing officer1.webp', 'Farana zak', 'Marketing officer', 'faranajak0909@gmail.com'),
(16, 'webdesinder.jpg', 'Ethan Marcotte', 'Web Designer', 'ethanmarcotte008@gmail.com'),
(17, 'download.jpg', 'Cheryl K. ', 'Content Writer', 'cherlykp4589@gmail.com'),
(15, 'IT Expert.jpg', 'J.C. Chaudhry', 'IT Expert', 'chaudharyj887@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `name`, `image`) VALUES
(1, 'Gold', 'goldimage011.jpg'),
(3, 'Silver', 'silverbackground02.png'),
(4, 'Platinum', 'paltinumimage003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `type_id` int NOT NULL,
  `image` text NOT NULL,
  `rate` varchar(200) NOT NULL,
  `stock` varchar(90) NOT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `category_id`, `type_id`, `image`, `rate`, `stock`) VALUES
(2, 3, 4, 1, 'bracelet-1.jpg', '95339', 'in stock'),
(3, 4, 13, 1, 'bangles1.webp', '336151', 'in stock');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
