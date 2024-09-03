-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2024 at 05:30 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`) VALUES
(1, 'arsal@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

DROP TABLE IF EXISTS `catagory`;
CREATE TABLE IF NOT EXISTS `catagory` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `slug`, `image`, `discription`, `created_at`) VALUES
(8, 'T shirts', 't-shirts', 'uploads/kid-8.jpg', 'Explore t-shirts featuring eye-catching graphics, prints, and designs that make a statement and showcase your personal style.', '0000-00-00 00:00:00.000000'),
(12, 'Ladies Bags', 'ladies-bags', 'uploads/categories/black-13.jpg', 'All type of bags. High class to low class with pocket feriendly price', '0000-00-00 00:00:00.000000'),
(6, 'Sheos', 'sheos', 'uploads/sheos.jpeg', 'Discover comfortable and stylish sneakers perfect for everyday wear, from classic designs to the latest trends in athletic footwear.', '0000-00-00 00:00:00.000000'),
(7, 'Dress Shirts', 'dress-shirts', 'uploads/tshirts.jpeg', 'Browse comfortable and casual long sleeve t-shirts for cooler weather or layering under jackets and sweaters.', '0000-00-00 00:00:00.000000'),
(9, 'Shorts and Pents', 'shorts-and-pents', 'uploads/blue-3.jpg', 'All Type of Gents and Ladies are here', '0000-00-00 00:00:00.000000'),
(11, 'Caps', 'caps', 'uploads/categories/black-14.jpg', 'Every type of male female Adult kids Caps are here\r\n', '0000-00-00 00:00:00.000000'),
(10, 'Mobile Phones', 'tablets', 'uploads/mobile.webp', 'Every  type of mobiles are here', '0000-00-00 00:00:00.000000'),
(13, 'Skin Care', 'skin-care', 'uploads/categories/skincare-8.jpg', 'All type of serums And skin care products are here for you in affordable prices', '0000-00-00 00:00:00.000000'),
(14, 'Shawl', 'shawl', 'uploads/categories/kid-11.jpg', 'Winter Shawl wool cotton leather and every veriety is here for you', '0000-00-00 00:00:00.000000'),
(15, 'Games ', 'games-', 'uploads/categories/giftcard-8.jpg', 'you can purchase every Ps5 And below game from here', '0000-00-00 00:00:00.000000'),
(16, 'Sleeveless ', 'sleeveless-', 'uploads/categories/black-12.jpg', 'Every sleeveless is here for u', '0000-00-00 00:00:00.000000'),
(17, 'Assesseries', 'assesseries', 'uploads/categories/headphone-5.png', 'Mobile phone asses series here for you', '0000-00-00 00:00:00.000000'),
(18, 'Laptop', 'laptop', 'uploads/categories/laptop.jpeg', 'HP Dell Lenove and other. A large Veriety of the laptops are here. please Visit', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `total` bigint NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `transaction_id`, `total`, `status`, `created_at`) VALUES
(29, 763, '2PA668042C874131W', 4560, 0, '0000-00-00 00:00:00.000000'),
(30, 79, '6N226826RB611784J', 1200, 3, '0000-00-00 00:00:00.000000'),
(31, 79, '4BP3440857731682H', 405, 0, '0000-00-00 00:00:00.000000'),
(33, 79, '9CB36561S71439722', 35, 0, '0000-00-00 00:00:00.000000'),
(28, 763, '6M539779J51009418', 300, 2, '0000-00-00 00:00:00.000000'),
(27, 762, '39J32970GB012933U', 2760, 0, '0000-00-00 00:00:00.000000'),
(32, 764, '3T909425YR647751R', 795, 3, '0000-00-00 00:00:00.000000'),
(24, 1, '6F5646878F413631D', 2480, 3, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) NOT NULL,
  `product_id` bigint NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `quantity` bigint NOT NULL,
  `total` bigint NOT NULL,
  `created_at` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `price`, `quantity`, `total`, `created_at`) VALUES
(50, '24', 27, 'Summer Shirt', 550, 1, 550, 0),
(51, '25', 34, 'Sleec chain', 150, 1, 150, 0),
(49, '24', 7, 'Dress Shirt', 500, 3, 1500, 0),
(48, '24', 28, 'Apple Iphone', 430, 1, 430, 0),
(53, '27', 29, 'asdakjsdnijsand', 920, 3, 2760, 0),
(54, '28', 30, 'Polo Shirt', 300, 1, 300, 0),
(55, '29', 16, 'Galorus Shade', 300, 10, 3000, 0),
(56, '29', 17, 'QMobile new', 260, 6, 1560, 0),
(57, '30', 29, 'asdakjsdnijsand', 920, 1, 920, 0),
(58, '30', 7, 'Dress Shirt', 500, 2, 1000, 0),
(59, '30', 28, 'Apple Iphone', 430, 2, 860, 0),
(60, '31', 16, 'Galorus Shade', 300, 1, 300, 0),
(61, '31', 35, 'Zipper Hoodie', 35, 3, 105, 0),
(62, '32', 17, 'Eye Shade', 260, 1, 260, 0),
(63, '32', 35, 'Zipper Hoodie', 35, 1, 35, 0),
(64, '32', 7, 'Dress Shirt', 500, 1, 500, 0),
(65, '79', 35, 'Zipper Hoodie', 35, 1, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `catagory_id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `quantity` bigint NOT NULL,
  `available` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagory_id`, `name`, `slug`, `image`, `model`, `discription`, `price`, `quantity`, `available`) VALUES
(17, 8, 'Eye Shade', 'eye-shade', 'uploads/catagoriesskincare-14.jpg', 'asdasdasd', 'QMobile i6 Metal One impressive camera capabilities, powered by the ZEISS optics for exceptional photography. It features a 6.56-inch AMOLED display with a 120Hz refresh rate, ensuring smooth visuals and vibrant colors. The phone is equipped with a robust', 260, 15, '0'),
(16, 8, 'Galorus Shade', '', 'uploads/catagoriesskincare-9.jpg', 'x60 pure white', 'Experience the ultimate care for your hair with our Nourishing Hair Oil. Enriched with a blend of natural oils, including argan, coconut, and jojoba, this luxurious formula deeply moisturizes and revitalizes your hair from root to tip. It helps to reduce ', 300, 20, 'Yes'),
(35, 7, 'Zipper Hoodie', 'zipper-hoodie', 'uploads/categories/blue-2.jpg', 'slimFerrace', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 35, 56, 'Yes'),
(7, 8, 'Dress Shirt', '', 'uploads/catagoriesdressshirts.jpeg', 'ssiufsyudf', 'Explore relaxed yet refined dress shirts that combine comfort with a polished look for less formal occasions.\r\n', 500, 0, 'Yes'),
(27, 8, 'Summer Shirt', 'hello-world', 'uploads/catagoriesblack-1.jpg', 'Hot air ', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 550, 52, 'Yes'),
(28, 8, 'Apple Iphone', 'apple-iphone', 'uploads/categories/mobile.webp', 'hello world', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 430, 50, 'Yes'),
(29, 8, 'Polo Plain', 'asdakjsdnijsand', 'uploads/catagoriesbeige.jpg', 'dressShirt', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 920, 50, 'yes'),
(30, 8, 'Polo Shirt', 'polo-shirt', 'uploads/categories/black-3.jpg', 'new embroded', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 300, -4, 'Yes'),
(31, 8, 'asdkjsadna', 'asdkjsadna', 'uploads/categories/brown-3.jpg', 'asdlknsadiansd a sanasncans', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 50, 511, 'Yes'),
(32, 7, 'Polo', 'polo', 'uploads/categories/black-11.jpg', 'asdasdasdasdasd', 'asdasdasdsa\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna.', 80, 515616, 'Yes'),
(33, 9, 'Blue Sweat shirt', 'bonanza', 'uploads/catagoriesblue.jpg', 'winter24collection', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 120, 5555, 'yes'),
(34, 10, 'Plain Glasses ', 'sleec-chain', 'uploads/catagorieslb-men-2.jpg', 'Flat v2012', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 150, 80, 'yes'),
(36, 8, 'Beige Girl', 'beige-girl', 'uploads/categories/beige-3.jpg', 'age 28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 200, 23, 'Yes'),
(37, 8, 'Aamna', 'aamna', 'uploads/categories/beige-2.jpg', 'age 22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 300, 1, 'Yes'),
(38, 8, 'Track suit', 'track-suit', 'uploads/categories/black-6.jpg', 'winterCollection', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 55, 2323, 'Yes'),
(39, 5, 'Audionic Headphone', 'audionic-headphone', 'uploads/categories/headphone-8.png', 'pp12 loom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 45, 4564, 'Yes'),
(40, 7, 'Cotton Shwl', 'cotton-shwl', 'uploads/catagoriesblack-8.jpg', 'winterShawl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 23, 54, 'yes'),
(41, 8, 'Shirt Pents', 'shirt-pents', 'uploads/categories/pink-2.jpg', 'pinkVeggie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 32, 65, 'Yes'),
(42, 8, 'Sweat Shirt new', 'sweat-shirt-new', 'uploads/catagoriesblack-2.jpg', 'blackShine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 43, 343, '0'),
(43, 8, 'Versace Gloom', 'versace-gloom', 'uploads/categories/black-18.jpg', 'Gentleman Cowboy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 23, 54, 'Yes'),
(44, 8, 'GUCCI girl', 'gucci-girl', 'uploads/categories/black-17.jpg', 'black grey outfit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 20, 300, 'Yes'),
(45, 8, 'Kid Punch Pack', 'kid-punch-pack', 'uploads/categories/kid-10.jpg', 'zerosidePR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu arcu auctor, scelerisque lacus in, cursus ante. Vivamus luctus dolor ut posuere semper. Integer ac ultrices quam. Aenean vel felis id lacus ultrices pharetra. Phasellus posuere lorem ut ali', 45, 54, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=765 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(75, 'Arsal', 'arslanamjad4444@gmail.com', '$2y$10$4LfLWAJj/4TP.cm17i/7eu9Mo37iyWO.emSy./sONYbHx7UHKaGny'),
(79, 'ArsalUI', 'arsal112@gmail.com', '$2y$10$8MPrEuAmPBtc305ByRmKSe9q8JFxhnDA364XfwsliYuKYpxL7MiWS'),
(77, 'Rock Shaw', 'rocks@rock', '$2y$10$9IKFQX9cOsQJ3T2T0OxPvOUexpEC6g6muideEOGNLhXT8Xs5c2XHC'),
(78, 'BILAL', 'billu@gmail.com', '$2y$10$vH7N5gSMgbF47DHHh.aEXePn0kZXnp3Oyy9TjDITHGN.ChETBPV62'),
(80, 'bilal', 'billa12@gmail.com', '$2y$10$waCRejZ/05P1ktdvwYhwFeMAE5U5yjrvlQkQY.s4fz95DGMg1n5YS'),
(762, 'Usman Ali', 'usman@gmail.com', '$2y$10$TevohXYH9FmiCRJ0gHOoz.qh6WT/ftkyUkoLfwQMzKkB3Daonhd6e'),
(763, 'bili', 'bilal@gmail.com', '$2y$10$yUC9t0eTtoJdSU6z0HauF.Ah8hqRZjh1PD.WR68W4DdAi6pGhwfeq'),
(764, 'hamid', 'hamid@gmail.com', '$2y$10$k4L3UgdtklaExJfrDNsvfeDTzMrjRy8KTMg5gvQR4zZOsDxsdoBEK'),
(39, 'Michael-Wilson', 'Michael.wilson@gmail.com', 'fca4836976e56c23b1aa03a2815aef685b33e9bb1838130eaa6d30533c90bee1'),
(40, 'Sarah Johnson', 'sarah.johnson@gmail.com', '47eccaf210b519f43c06494401bbcc02066d6c54cc30a19a763a532c04c5c34c'),
(42, 'Olivia Martinez', 'olivia.martinez@gmail.com', 'd2553b9e78fc047b9c7454d2a7928e6fbfff84eee56141271e93f144398a53d7'),
(43, 'Daniel Anderson', 'daniel.anderson@gmail.com', '2efe01a936a0d264615b22db60a20af1fb4c2041b0339f76d40af3ecd34a854a'),
(44, 'Sophia Thomas', 'sophia.thomas@gmail.com', 'c359b73350c3ba9deaebdeef38bc8bd5d3f17902907a7422cbad5a4e440c0f1b'),
(45, 'John Doe', 'john.doe@gmail.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f'),
(46, 'Jane Smith', 'jane.smith@gmail.com', 'c6ba91b90d922e159893f46c387e5dc1b3dc5c101a5a4522f03b987177a24a91'),
(47, 'Robert Brown', 'robert.brown@gmail.com', '5efc2b017da4f7736d192a74dde5891369e0685d4d38f2a455b6fcdab282df9c'),
(48, 'Emily Davis', 'emily.davis@gmail.com', '5c773b22ea79d367b38810e7e9ad108646ed62e231868cefb0b1280ea88ac4f0'),
(49, 'Michael Wilson', 'michael.wilson@gmail.com', 'fca4836976e56c23b1aa03a2815aef685b33e9bb1838130eaa6d30533c90bee1'),
(50, 'Sarah Johnson', 'sarah.johnson@gmail.com', '47eccaf210b519f43c06494401bbcc02066d6c54cc30a19a763a532c04c5c34c'),
(51, 'David Lee', 'david.lee@gmail.com', '4f93067daa8232d8a58468fa645d6c5ff3b3adb8614e26857fa96e69245dc565'),
(52, 'Olivia Martinez', 'olivia.martinez@gmail.com', 'd2553b9e78fc047b9c7454d2a7928e6fbfff84eee56141271e93f144398a53d7'),
(53, 'Daniel Anderson', 'daniel.anderson@example.com', '2efe01a936a0d264615b22db60a20af1fb4c2041b0339f76d40af3ecd34a854a'),
(54, 'Sophia Thomas', 'sophia.thomas@example.com', 'c359b73350c3ba9deaebdeef38bc8bd5d3f17902907a7422cbad5a4e440c0f1b'),
(55, 'John Doe', 'john.doe@example.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f'),
(56, 'Jane Smith', 'jane.smith@example.com', 'c6ba91b90d922e159893f46c387e5dc1b3dc5c101a5a4522f03b987177a24a91'),
(57, 'Robert Brown', 'robert.brown@example.com', '5efc2b017da4f7736d192a74dde5891369e0685d4d38f2a455b6fcdab282df9c'),
(58, 'Emily Davis', 'emily.davis@example.com', '5c773b22ea79d367b38810e7e9ad108646ed62e231868cefb0b1280ea88ac4f0'),
(59, 'Michael Wilson', 'michael.wilson@example.com', 'fca4836976e56c23b1aa03a2815aef685b33e9bb1838130eaa6d30533c90bee1'),
(60, 'Sarah Johnson', 'sarah.johnson@example.com', '47eccaf210b519f43c06494401bbcc02066d6c54cc30a19a763a532c04c5c34c'),
(61, 'David Lee', 'david.lee@example.com', '4f93067daa8232d8a58468fa645d6c5ff3b3adb8614e26857fa96e69245dc565'),
(62, 'Olivia Martinez', 'olivia.martinez@example.com', 'd2553b9e78fc047b9c7454d2a7928e6fbfff84eee56141271e93f144398a53d7'),
(63, 'Daniel Anderson', 'daniel.anderson@example.com', '2efe01a936a0d264615b22db60a20af1fb4c2041b0339f76d40af3ecd34a854a'),
(64, 'Sophia Thomas', 'sophia.thomas@example.com', 'c359b73350c3ba9deaebdeef38bc8bd5d3f17902907a7422cbad5a4e440c0f1b'),
(65, 'John Doe', 'john.doe@example.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f'),
(66, 'Jane Smith', 'jane.smith@gmail.com', 'c6ba91b90d922e159893f46c387e5dc1b3dc5c101a5a4522f03b987177a24a91'),
(67, 'Robert Brown', 'robert.brown@example.com', '5efc2b017da4f7736d192a74dde5891369e0685d4d38f2a455b6fcdab282df9c'),
(68, 'Emily Davis', 'emily.davis@example.com', '5c773b22ea79d367b38810e7e9ad108646ed62e231868cefb0b1280ea88ac4f0'),
(69, 'Michael Wilson', 'michael.wilson@example.com', 'fca4836976e56c23b1aa03a2815aef685b33e9bb1838130eaa6d30533c90bee1'),
(70, 'Sarah Johnson', 'sarah.johnson@example.com', '47eccaf210b519f43c06494401bbcc02066d6c54cc30a19a763a532c04c5c34c'),
(71, 'David Lee', 'david.lee@example.com', '4f93067daa8232d8a58468fa645d6c5ff3b3adb8614e26857fa96e69245dc565'),
(72, 'Olivia Martinez', 'olivia.martinez@example.com', 'd2553b9e78fc047b9c7454d2a7928e6fbfff84eee56141271e93f144398a53d7'),
(73, 'Daniel Anderson', 'daniel.anderson@example.com', '2efe01a936a0d264615b22db60a20af1fb4c2041b0339f76d40af3ecd34a854a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
