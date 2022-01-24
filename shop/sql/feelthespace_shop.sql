-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Nën 22, 2021 në 11:13 MD
-- Versioni i serverit: 10.4.20-MariaDB
-- PHP Versioni: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databaza: `id17820856_feelthespace`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `admin_login`
--

CREATE TABLE `admin_login` (
  `Id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `storeID` int(4) DEFAULT NULL,
  `storeName` varchar(255) NOT NULL,
  `storeEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `admin_login`
--

INSERT INTO `admin_login` (`Id`, `username`, `password`, `storeID`, `storeName`, `storeEmail`) VALUES
(1, 'denishoti', 'denis2005', 0, 'none', '10cdenishoti@gmail.com'),
(4, 'digitalschool', 'shkolladigjitale', 0, 'Shkolla Digjitale', 'shkolladigjitale@gmail.com');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `cart`
--

CREATE TABLE `cart` (
  `cId` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `pId` int(255) NOT NULL,
  `cDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `cart`
--

INSERT INTO `cart` (`cId`, `uId`, `pId`, `cDate`) VALUES
(42, 35, 31, '2021-11-22 22:25:57'),
(43, 35, 36, '2021-11-22 22:26:14'),
(44, 35, 35, '2021-11-22 22:26:17');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `newsletter`
--

CREATE TABLE `newsletter` (
  `nId` int(255) NOT NULL,
  `nEmail` varchar(255) NOT NULL,
  `nDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `newsletter`
--

INSERT INTO `newsletter` (`nId`, `nEmail`, `nDate`) VALUES
(1, 'denisshanihoti@gmail.com', '2021-03-09 23:11:24');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `offers`
--

CREATE TABLE `offers` (
  `oId` int(255) NOT NULL,
  `oName` varchar(255) NOT NULL,
  `oDescription` varchar(255) NOT NULL,
  `oImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `offers`
--

INSERT INTO `offers` (`oId`, `oName`, `oDescription`, `oImage`) VALUES
(1, 'Gaming', 'Buy all our gaming products up to 80% off', '1.jpeg');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `orders`
--

CREATE TABLE `orders` (
  `oId` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pagesa` varchar(255) NOT NULL,
  `productId` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `oDate` datetime NOT NULL,
  `confirmOrder` int(1) DEFAULT 0,
  `orderShipping` int(1) DEFAULT 0,
  `onTheWay` int(1) DEFAULT 0,
  `delivered` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `orders`
--

INSERT INTO `orders` (`oId`, `uId`, `phoneNumber`, `fullName`, `email`, `address`, `city`, `pagesa`, `productId`, `productName`, `productPrice`, `oDate`, `confirmOrder`, `orderShipping`, `onTheWay`, `delivered`) VALUES
(15, 35, '44665827', 'Denis Hoti', 'denishoti18@gmail.com', 'Ratkoc', 'Rahovec', 'cash', 36, 'To the Moon Space T-shirt', 20, '2021-11-20 15:30:23', 1, 1, 1, 1),
(18, 35, '44665827', 'Denis Hoti', 'denishoti18@gmail.com', 'Ratkoc', 'Rahovec', 'cash', 36, 'To the Moon Space T-shirt', 20, '2021-11-22 22:32:12', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `fileName` char(255) NOT NULL,
  `fileUpload` char(255) NOT NULL,
  `description` char(255) NOT NULL,
  `price` char(30) NOT NULL,
  `fileAv` int(9) NOT NULL,
  `category` varchar(200) NOT NULL,
  `save` int(255) DEFAULT NULL,
  `dPrice` int(9) DEFAULT `price`,
  `storeEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `products`
--

INSERT INTO `products` (`id`, `fileName`, `fileUpload`, `description`, `price`, `fileAv`, `category`, `save`, `dPrice`, `storeEmail`) VALUES
(30, 'Space Design Hoodie', 'hoodie1.jfif', 'Loveternal Mens Womens Fleece Liner Hoodies 3D', '27.99', 6, 'hoodies', NULL, 28, ''),
(31, 'Quanhaigou Purple Galaxy Snapback Hat', 'cap1.jfif', 'Cotton/Polyester\r\nImported\r\nSnap closure\r\nAdjustable Snapback Size(approx):Brim:2.95\";High:5.12\"; Closure Circumference: 21.6-23.6 inches / 55-60 cm (One Size Fits Mostly,Not fit for big Head )\r\nClassic Galaxy 3D Printed Surf Skate Street Rival Camps Base', '15.99', 3, 'cap', 30, 11, ''),
(32, 'Space Explorer Badges', 'Badges1.jfif', 'Best Space Explorer Badges in market nowdays!', '4', 10, 'badges', NULL, 4, ''),
(33, 'Space Sticker', 'Stickers1.jfif', 'Best Space Stickers', '11.99', 5, 'stickers', NULL, 12, ''),
(34, 'Space best CAP 2021', 'cap2.jfif', '100% Cotton\r\nBuckle closure\r\nSelf fabric strap with brass snap buckle\r\nEmbroidery made with licensed digitized file.\r\nLow profile, soft fitting cap\r\nOne Size Fits Most.', '45.69', 2, 'cap', NULL, 46, ''),
(35, 'Space Wrist Bands', 'wristband3.jfif', 'Material: Rubber bracelet are made of tough and durable silicone rubber, Flexible but strong, and will not deformed easily, soft, bring you good wear feeling.\r\n◆ Package: Available in 2 styles (9 pieces each style), size is about 2.56 inches, fashion desi', '10', 4, 'wristbands', NULL, 10, ''),
(36, 'To the Moon Space T-shirt', 'T-shirt1.jfif', 'To the moon Tshirt', '20', 9, 'tshirt', NULL, 20, ''),
(37, 'Super Space T-shirt', 'T-shirt4.jfif', 'The best Super Space T-shirt you can find online!', '32', 3, 'tshirt', NULL, 32, ''),
(38, 'The Craziest Space Cap', 'cap3.jfif', 'The Craziest Space Cap in Market right now!', '22', 8, 'tshirt', NULL, 22, '');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `quotes`
--

CREATE TABLE `quotes` (
  `qId` int(255) NOT NULL,
  `qImage` varchar(255) NOT NULL,
  `qMessage` text NOT NULL,
  `qFrom` varchar(255) NOT NULL,
  `qProffesion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `quotes`
--

INSERT INTO `quotes` (`qId`, `qImage`, `qMessage`, `qFrom`, `qProffesion`) VALUES
(1, 'lesBrown.jfif', 'Life has no limitations, except the ones you make is by.', 'Les Brown', 'Motivation Speaker'),
(2, 'nelsonmandela.jfif', 'The greatest glory in living lies not in never falling, but in rising every time we fall.', 'Nelson Mandela', 'Political Leader'),
(4, 'elanorR.jfif', 'If life were predictable it would cease to be life, and be without flavor.', ' Eleanor Roosevelt', 'American political figure, diplomat and activist.'),
(5, 'neilamstrong.jpg', 'That\'s one small step for a man, one giant leap for mankind.', 'Neil Armstrong', 'Astronaut'),
(6, 'elonmusk.jpg', 'It is a fixer upper of a planet but we could make it work.', 'Elon Musk', 'CEO of SpaceX'),
(7, 'douglasadams.jpg', 'Space, it says, is big. Really big. You just won\'t believe how vastly, hugely, mindbogglingly big it is.', 'Douglas Adams', 'Novelist'),
(8, 'elonmusk.jpg', 'We want to open up space for humanity, and in order to do that, space must be affordable', 'Elon Musk', 'CEO of SpaceX');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `registration`
--

CREATE TABLE `registration` (
  `id` int(3) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `birthday`) VALUES
(1, 'Denis', 'Hoti', 'denisshanihoti@gmail.com', 'c3875d07f44c422f3b3bc019c23e16', 'M', '2005-10-17'),
(2, 'Dielli', 'Morina', '10cdenishoti@gmail.com', 'cc66c909863534fd3b90504994e9f8', 'M', '2014-01-11');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `search`
--

CREATE TABLE `search` (
  `Sid` int(9) NOT NULL,
  `searched` varchar(50) NOT NULL,
  `times` int(9) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `search`
--

INSERT INTO `search` (`Sid`, `searched`, `times`) VALUES
(1, 'gaming', 46),
(2, 'laptop', 2),
(3, '4', 2),
(4, '4444', 3),
(5, 'Denis', 2),
(6, 'pikado', 1),
(7, 'covid', 1),
(8, '19', 1),
(10, 'canon', 6),
(11, 'b', 5),
(12, 'j', 1),
(13, 'a', 1),
(14, '0', 2),
(15, '', 1),
(16, 'telefon', 2),
(17, 'phone', 1),
(18, 'camera', 1),
(19, 'natural product', 1);

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `shopnews`
--

CREATE TABLE `shopnews` (
  `nId` int(255) NOT NULL,
  `nName` varchar(255) NOT NULL,
  `nImage` varchar(255) NOT NULL,
  `nBy` varchar(255) NOT NULL,
  `nText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `shopnews`
--

INSERT INTO `shopnews` (`nId`, `nName`, `nImage`, `nBy`, `nText`) VALUES
(1, 'NASA thinks US needs nuclear-powered spacecraft to stay ahead of China', 'nasathinks.jfif', 'Denis Hoti', 'The U.S. needs to invest more in nuclear-powered spacecraft to be competitive with nations like China, experts say. During a government hearing on Wednesday (Oct. 20), experts from NASA and the aerospace industry discussed how the U.S. stacks up against other nations when it comes to developing new nuclear propulsion technology. And, according to them, the U.S. needs to move quickly if it wants to keep up. The congressional committee hearing, called \"Accelerating deep space travel with space nuclear propulsion,\" took place before the U.S. House of Representatives\' Science, Space and Technology Committee.'),
(2, 'FAA wraps up public hearings on SpaceX Starship launch site environmental review', 'spacexthink.jfif', 'Denis Hoti', 'The U.S. Federal Aviation Administration (FAA) held two public hearings this week about its environmental assessment of SpaceX\'s orbital launch activities at Starbase, the company\'s facility near the South Texas village of Boca Chica.'),
(3, 'China\'s Shenzhou 14 is on standby to launch in case of space station emergency', 'chinathink.jfif', 'Admin', 'China just launched what is planned to be its longest crewed mission to date, but the next spacecraft in the series is ready to blast off should the Shenzhou 13 astronauts need rescuing.'),
(4, 'NASA thinks US needs nuclear-powered spacecraft to stay ahead of China', 'nasathinks.jfif', 'Denis Hoti', 'The U.S. needs to invest more in nuclear-powered spacecraft to be competitive with nations like China, experts say. During a government hearing on Wednesday (Oct. 20), experts from NASA and the aerospace industry discussed how the U.S. stacks up against other nations when it comes to developing new nuclear propulsion technology. And, according to them, the U.S. needs to move quickly if it wants to keep up. The congressional committee hearing, called \"Accelerating deep space travel with space nuclear propulsion,\" took place before the U.S. House of Representatives\' Science, Space and Technology Committee.'),
(5, 'FAA wraps up public hearings on SpaceX Starship launch site environmental review', 'spacexthink.jfif', 'Admin', 'The U.S. Federal Aviation Administration (FAA) held two public hearings this week about its environmental assessment of SpaceX\'s orbital launch activities at Starbase, the company\'s facility near the South Texas village of Boca Chica.');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(30) DEFAULT 'NOT NULL',
  `password` varchar(30) DEFAULT 'NOT NULL',
  `gjinia` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `qyteti` varchar(255) NOT NULL,
  `nrtel` int(255) NOT NULL,
  `terms` varchar(2) NOT NULL,
  `confirm` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `user_login`
--

INSERT INTO `user_login` (`id`, `emri`, `mbiemri`, `email`, `password`, `gjinia`, `adresa`, `qyteti`, `nrtel`, `terms`, `confirm`) VALUES
(35, 'Denis', 'Hoti', 'denishoti18@gmail.com', 'denis2005', 'mashkull', 'Ratkoc', 'Rahovec', 44665827, 'PO', 1),
(36, 'Dielli', 'Hoti', 'denisshanihoti@gmail.com', 'denis2005', 'mashkull', 'Ratkoc', 'Rahovec', 44665827, 'PO', 1);

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `wishlist`
--

CREATE TABLE `wishlist` (
  `wId` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `pId` int(255) NOT NULL,
  `wDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `wishlist`
--

INSERT INTO `wishlist` (`wId`, `uId`, `pId`, `wDate`) VALUES
(22, 35, 36, '2021-10-23 15:34:14');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indekset për tabelë `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cId`);

--
-- Indekset për tabelë `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nId`);

--
-- Indekset për tabelë `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`oId`);

--
-- Indekset për tabelë `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oId`);

--
-- Indekset për tabelë `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indekset për tabelë `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`qId`);

--
-- Indekset për tabelë `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indekset për tabelë `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`Sid`);

--
-- Indekset për tabelë `shopnews`
--
ALTER TABLE `shopnews`
  ADD PRIMARY KEY (`nId`);

--
-- Indekset për tabelë `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indekset për tabelë `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wId`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT për tabelë `cart`
--
ALTER TABLE `cart`
  MODIFY `cId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT për tabelë `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `offers`
--
ALTER TABLE `offers`
  MODIFY `oId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `orders`
--
ALTER TABLE `orders`
  MODIFY `oId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT për tabelë `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT për tabelë `quotes`
--
ALTER TABLE `quotes`
  MODIFY `qId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT për tabelë `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT për tabelë `search`
--
ALTER TABLE `search`
  MODIFY `Sid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT për tabelë `shopnews`
--
ALTER TABLE `shopnews`
  MODIFY `nId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT për tabelë `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT për tabelë `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
