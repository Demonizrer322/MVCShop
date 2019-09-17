-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Вер 17 2019 р., 16:42
-- Версія сервера: 10.1.38-MariaDB
-- Версія PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mvcshop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Position` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `categoryproduct`
--

CREATE TABLE `categoryproduct` (
  `CategoryId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `cookies`
--

CREATE TABLE `cookies` (
  `IdProduct` int(11) DEFAULT NULL,
  `SessionId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `cookies`
--

INSERT INTO `cookies` (`IdProduct`, `SessionId`) VALUES
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(18, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(19, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4'),
(17, 'e5a9aba0656ee6cf5814d68a82cbf37f3ebe89a4');

-- --------------------------------------------------------

--
-- Структура таблиці `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Sum` mediumint(9) NOT NULL,
  `ProductCount` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `productimg`
--

CREATE TABLE `productimg` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Position` tinyint(4) NOT NULL,
  `Url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `productimg`
--

INSERT INTO `productimg` (`Id`, `ProductId`, `Position`, `Url`) VALUES
(1, 17, 1, 'some-shoes.jfif');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `QuantityInStock` int(11) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `ProductImageId` int(11) DEFAULT NULL,
  `MainImage` varchar(255) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`Id`, `Name`, `QuantityInStock`, `Description`, `Price`, `ProductImageId`, `MainImage`) VALUES
(17, 'asdfsdfsadf', 12, 'asdfasdf', 33, 1, 'some-shoes.jfif'),
(18, 'qwewqeqwe', 123, 'qweqw', 123, NULL, 'default.png'),
(19, 'asdfdssdfddf', 234234, 'fmkuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 330, NULL, 'default.png\r\n\r\n'),
(20, 'asdfdssdfddf', 234234, 'fmkuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 330, NULL, 'https://i.siteapi.org/Y4VDcavQ3OYoX1J37bPs1WKQXUw=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/nn9rxldxqs0ccwc08scowc8gwwogkc'),
(21, 'asdfdssdfddf', 234234, 'fmkuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 330, NULL, 'http://localhost/assets/images/productImages/default.png'),
(22, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/ENCgFMTva2VAkjcmwD6bHjrwmPo=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/e6jxugj6kq0oos04o4gk4s0ckkcsw4'),
(23, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/iw80yPB21cTbA-uXHvKahgXAgFw=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/er3y55vf5a80wk00gkckowcwgs44os'),
(24, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/RgLvSKnoUSJpGH47eWvq-4M2AY8=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/jgaq0s011m8sg8sg8k40cs0o8kg4ck'),
(25, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/ACq_qb7QXZj7qtnIwQ6q0hAIAdQ=/0x0:5184x3456/fit-in/156x120/center/top/filters:fill(transparent):format(png)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/7d2cbac47e583f7b7e0e833784ff8800e6fd1353.jpg'),
(26, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/8HIB3-4XBtVcj6n552hX8uVkO6c=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/lkmo7z20v68cos0g4s4k4kwow8sso0'),
(27, 'ghnfykymk', 45, 'h,iligufm ndsbsnm,u;.\'pio,mykujrbhtvgrvgthrbyjtu kyilu,imkynjbh rthtrbjtnkyml vb67n b6v5cv5c 6bej7n rkjbehvg ', 500, NULL, 'https://i.siteapi.org/6bOppF0T5aR2-9cMvExgLyIHGNs=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/c819c1c76d3a2d76c52c38e40d351853d0f72bb8.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `SessionId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`Id`, `Name`, `Surname`, `Email`, `Password`, `Phone`, `SessionId`) VALUES
(1, '1111', '1111', '1111@1111', 'ecb836bab9afe3446804fc2e2a9cb64991069e12', '11111111', NULL);

-- --------------------------------------------------------

--
-- Дублююча структура для представлення `vproduct`
-- (Див. нижче для фактичного подання)
--
CREATE TABLE `vproduct` (
`ProductId` int(11)
,`ProductName` varchar(50)
,`Quantity` int(11)
,`ProductDescription` varchar(500)
,`ProductPrice` float
,`ProductImgId` int(11)
,`CategoryId` int(11)
,`CategoryName` varchar(255)
,`CategoryDescription` text
,`CategoryPosition` tinyint(4)
,`MCategoryId` int(11)
,`MProductId` int(11)
,`ImgId` int(11)
,`ImgProductId` int(11)
,`ImgPosition` tinyint(4)
,`ImgUrl` varchar(255)
);

-- --------------------------------------------------------

--
-- Структура для представлення `vproduct`
--
DROP TABLE IF EXISTS `vproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vproduct`  AS  select `products`.`Id` AS `ProductId`,`products`.`Name` AS `ProductName`,`products`.`QuantityInStock` AS `Quantity`,`products`.`Description` AS `ProductDescription`,`products`.`Price` AS `ProductPrice`,`products`.`ProductImageId` AS `ProductImgId`,`category`.`Id` AS `CategoryId`,`category`.`Name` AS `CategoryName`,`category`.`Description` AS `CategoryDescription`,`category`.`Position` AS `CategoryPosition`,`categoryproduct`.`CategoryId` AS `MCategoryId`,`categoryproduct`.`ProductId` AS `MProductId`,`productimg`.`Id` AS `ImgId`,`productimg`.`ProductId` AS `ImgProductId`,`productimg`.`Position` AS `ImgPosition`,`productimg`.`Url` AS `ImgUrl` from (((`products` join `categoryproduct` on((`products`.`Id` = `categoryproduct`.`ProductId`))) join `category` on((`category`.`Id` = `categoryproduct`.`CategoryId`))) join `productimg` on((`productimg`.`ProductId` = `products`.`Id`))) group by `products`.`Id`,`category`.`Id`,`productimg`.`Id` ;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `categoryproduct`
--
ALTER TABLE `categoryproduct`
  ADD KEY `CategoryId` (`CategoryId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Індекси таблиці `cookies`
--
ALTER TABLE `cookies`
  ADD KEY `IdProduct` (`IdProduct`);

--
-- Індекси таблиці `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Індекси таблиці `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Індекси таблиці `productimg`
--
ALTER TABLE `productimg`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductImageId` (`ProductImageId`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `productimg`
--
ALTER TABLE `productimg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `categoryproduct`
--
ALTER TABLE `categoryproduct`
  ADD CONSTRAINT `categoryproduct_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`),
  ADD CONSTRAINT `categoryproduct_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`);

--
-- Обмеження зовнішнього ключа таблиці `cookies`
--
ALTER TABLE `cookies`
  ADD CONSTRAINT `cookies_ibfk_1` FOREIGN KEY (`IdProduct`) REFERENCES `products` (`Id`);

--
-- Обмеження зовнішнього ключа таблиці `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`Id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`);

--
-- Обмеження зовнішнього ключа таблиці `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `users` (`Id`);

--
-- Обмеження зовнішнього ключа таблиці `productimg`
--
ALTER TABLE `productimg`
  ADD CONSTRAINT `productimg_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`);

--
-- Обмеження зовнішнього ключа таблиці `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ProductImageId`) REFERENCES `productimg` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
