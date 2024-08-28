-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2024 at 06:25 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `slug`, `image`, `discription`, `created_at`) VALUES
(8, 'T shirts', 't-shirts', 'uploads/games.jpeg', 'Explore t-shirts featuring eye-catching graphics, prints, and designs that make a statement and showcase your personal style.', '0000-00-00 00:00:00.000000'),
(5, 'Mobile Phone', 'mobile-phone', 'uploads/categories/mobile.webp', 'Shop for affordable yet reliable phones that offer great value for money with essential features and decent performance.', '0000-00-00 00:00:00.000000'),
(6, 'Sheos', 'sheos', 'uploads/sheos.jpeg', 'Discover comfortable and stylish sneakers perfect for everyday wear, from classic designs to the latest trends in athletic footwear.', '0000-00-00 00:00:00.000000'),
(7, 'Dress Shirts', 'dress-shirts', 'uploads/tshirts.jpeg', 'Browse comfortable and casual long sleeve t-shirts for cooler weather or layering under jackets and sweaters.', '0000-00-00 00:00:00.000000'),
(9, 'Shorts and Pents', 'shorts-and-pents', 'uploads/categories/sheos.jpeg', 'asokdjf nsadnius ud ndvisdsdi i wpnewfniw wf e  f f', '0000-00-00 00:00:00.000000'),
(10, 'Tablets', 'tablets', 'uploads/mobile.webp', 'sdiadadasdsasaasaslaslasasaslkdslklkdlkds mdakds mds lkjsalkjdsalkjdsalkjdsalkjdsalkj dslkjdsalkjdsalkjdsalkjds lkjdsalkjdsakdsalkjlkjdsalkjdsa dskdslkadslkjdsalkjdsalkjdlkjdsalkds', '0000-00-00 00:00:00.000000');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `transaction_id`, `total`, `status`, `created_at`) VALUES
(8, 1, '8NS24361NV3246428', 1480, 3, '0000-00-00 00:00:00.000000'),
(7, 1, '1FH47525MM6896345', 2400, 1, '0000-00-00 00:00:00.000000'),
(6, 1, '5WV87536YG991582C', 860, 2, '0000-00-00 00:00:00.000000'),
(9, 1, '3SC18462XH520244H', 560, 3, '0000-00-00 00:00:00.000000'),
(10, 1, '6TX01414TY910961G', 260, 2, '0000-00-00 00:00:00.000000'),
(11, 1, '96311487BD839053D', 920, 0, '0000-00-00 00:00:00.000000'),
(12, 1, '5WA94719M9250453Y', 5250, 0, '0000-00-00 00:00:00.000000'),
(13, 1, '915944757S496153F', 690, 0, '0000-00-00 00:00:00.000000'),
(15, 1, '24S24243T97535825', 2260, 2, '0000-00-00 00:00:00.000000'),
(18, 79, '2457339489847634F', 2700, 0, '0000-00-00 00:00:00.000000'),
(17, 761, '9PY91775FS368072N', 1720, 0, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `quantity` bigint NOT NULL,
  `total` bigint NOT NULL,
  `created_at` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `price`, `quantity`, `total`, `created_at`) VALUES
(10, 6, 17, 'QMobile new', 260, 1, 260, 0),
(9, 6, 16, 'Galorus Shade', 300, 2, 600, 0),
(8, 5, 16, 'Galorus Shade', 300, 4, 1200, 0),
(7, 5, 5, 'Product3', 200, 1, 200, 0),
(11, 7, 28, 'Apple Iphone', 430, 1, 430, 0),
(12, 7, 29, 'asdakjsdnijsand', 920, 1, 920, 0),
(13, 7, 27, 'Summer Shirt', 550, 1, 550, 0),
(14, 7, 7, 'Dress Shirt', 500, 1, 500, 0),
(15, 8, 28, 'Apple Iphone', 430, 1, 430, 0),
(16, 8, 27, 'Summer Shirt', 550, 1, 550, 0),
(17, 8, 16, 'Galorus Shade', 300, 1, 300, 0),
(18, 8, 5, 'Product3', 200, 1, 200, 0),
(19, 9, 16, 'Galorus Shade', 300, 1, 300, 0),
(20, 9, 17, 'QMobile new', 260, 1, 260, 0),
(21, 10, 17, 'QMobile new', 260, 1, 260, 0),
(22, 11, 29, 'asdakjsdnijsand', 920, 1, 920, 0),
(23, 12, 30, 'Polo Shirt', 300, 7, 2100, 0),
(24, 12, 28, 'Apple Iphone', 430, 5, 2150, 0),
(25, 12, 5, 'Product3', 200, 5, 1000, 0),
(26, 13, 17, 'QMobile new', 260, 1, 260, 0),
(27, 13, 28, 'Apple Iphone', 430, 1, 430, 0),
(28, 14, 17, 'QMobile new', 260, 1, 260, 0),
(29, 15, 17, 'QMobile new', 260, 1, 260, 0),
(30, 15, 7, 'Dress Shirt', 500, 4, 2000, 0),
(31, 16, 28, 'Apple Iphone', 430, 1, 430, 0),
(32, 17, 28, 'Apple Iphone', 430, 4, 1720, 0),
(33, 18, 16, 'Galorus Shade', 300, 2, 600, 0),
(34, 18, 28, 'Apple Iphone', 430, 3, 1290, 0),
(35, 18, 27, 'Summer Shirt', 550, 1, 550, 0),
(36, 18, 17, 'QMobile new', 260, 1, 260, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagory_id`, `name`, `slug`, `image`, `model`, `discription`, `price`, `quantity`, `available`) VALUES
(17, 8, 'QMobile new', '', 'uploads/catagoriessheos.jpeg', 'i6 metal one ', 'QMobile i6 Metal One impressive camera capabilities, powered by the ZEISS optics for exceptional photography. It features a 6.56-inch AMOLED display with a 120Hz refresh rate, ensuring smooth visuals and vibrant colors. The phone is equipped with a robust', 260, 15, 'yes'),
(16, 8, 'Galorus Shade', '', 'uploads/catagoriesskincare-9.jpg', 'x60 pure white', 'Experience the ultimate care for your hair with our Nourishing Hair Oil. Enriched with a blend of natural oils, including argan, coconut, and jojoba, this luxurious formula deeply moisturizes and revitalizes your hair from root to tip. It helps to reduce ', 300, 20, 'yes'),
(5, 8, 'Product3', '', 'uploads/catagoriessheos.jpeg', 'Model3', 'Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3Description of Product3De', 200, 20, 'no'),
(7, 8, 'Dress Shirt', '', 'uploads/catagoriesdressshirts.jpeg', 'ssiufsyudf', 'Explore relaxed yet refined dress shirts that combine comfort with a polished look for less formal occasions.\r\n', 500, 0, 'yes'),
(27, 8, 'Summer Shirt', 'hello-world', 'uploads/catagoriesblack-1.jpg', 'Hot air ', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 550, 52, 'yes'),
(28, 8, 'Apple Iphone', 'apple-iphone', 'uploads/categories/mobile.webp', 'hello world', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 430, 50, 'Yes'),
(29, 8, 'asdakjsdnijsand', 'asdakjsdnijsand', 'uploads/categories/beige.jpg', 'snakjsdnasjnd', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 920, 50, 'Yes'),
(30, 8, 'Polo Shirt', 'polo-shirt', 'uploads/categories/black-3.jpg', 'new embroded', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 300, -4, 'Yes'),
(31, 8, 'asdkjsadna', 'asdkjsadna', 'uploads/categories/brown-3.jpg', 'asdlknsadiansd a sanasncans', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 50, 511, 'Yes'),
(32, 7, 'Polo', 'polo', 'uploads/categories/black-11.jpg', 'asdasdasdasdasd', 'asdasdasdsa\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna.', 80, 515616, 'Yes'),
(33, 9, 'Bonanza', 'bonanza', 'uploads/categories/blue.jpg', 'asodnasidhasha', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 120, 5555, 'Yes'),
(34, 10, 'Sleec chain', 'sleec-chain', 'uploads/categories/lb-men-2.jpg', 'asndsadlksaassasa', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce leo magna, posuere et scelerisque ac, aliquet a nisl. Nam scelerisque feugiat nunc et bibendum. Sed sed sagittis mi. In lacus felis, molestie quis lacus at, cursus molestie magna. Aenean ult', 150, 80, 'Yes');

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
) ENGINE=MyISAM AUTO_INCREMENT=762 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(75, 'Arsal', 'arslanamjad4444@gmail.com', '$2y$10$4LfLWAJj/4TP.cm17i/7eu9Mo37iyWO.emSy./sONYbHx7UHKaGny'),
(79, 'ArsalUI', 'arsal112@gmail.com', '$2y$10$8MPrEuAmPBtc305ByRmKSe9q8JFxhnDA364XfwsliYuKYpxL7MiWS'),
(77, 'Rock Shaw', 'rocks@rock', '$2y$10$9IKFQX9cOsQJ3T2T0OxPvOUexpEC6g6muideEOGNLhXT8Xs5c2XHC'),
(78, 'BILAL', 'billu@gmail.com', '$2y$10$vH7N5gSMgbF47DHHh.aEXePn0kZXnp3Oyy9TjDITHGN.ChETBPV62'),
(80, 'bilal', 'billa12@gmail.com', '$2y$10$waCRejZ/05P1ktdvwYhwFeMAE5U5yjrvlQkQY.s4fz95DGMg1n5YS'),
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
