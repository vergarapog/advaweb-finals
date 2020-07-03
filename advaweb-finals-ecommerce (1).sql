-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 02:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advaweb-finals-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `idProd` int(11) NOT NULL,
  `qty` int(20) NOT NULL,
  `totalPrice` varchar(16) NOT NULL,
  `isCod` tinyint(1) NOT NULL,
  `CCnumber` varchar(19) NOT NULL,
  `CCexpDate` varchar(7) NOT NULL,
  `CVV` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idOrder`, `idUser`, `idProd`, `qty`, `totalPrice`, `isCod`, `CCnumber`, `CCexpDate`, `CVV`) VALUES
(1, 6, 3, 3, '20000', 0, '123123123', '123123', 123),
(2, 9, 1, 1, '2000', 0, '$2y$10$Nmt8hRqm0WR8', '2020-08', 123),
(3, 9, 1, 4, '8000', 0, '$2y$10$nC4jUlflatML', '2020-12', 0),
(4, 9, 5, 2, '3000', 1, '$2y$10$zke.T4oe2LTB', '', 0),
(5, 9, 4, 1, '1500', 0, '$2y$10$VE9pVAONhvYk', '2022-06', 555),
(6, 9, 3, 7, '42000', 0, '$2y$10$2.h0knmmg8iY', '2023-05', 232),
(7, 9, 1, 1, '2000', 0, '$2y$10$LJpVoeLNn1K3', '2020-03', 321),
(8, 9, 1, 1, '2000', 0, '$2y$10$F3q7sfBKg4Nv', '2017-01', 123),
(9, 9, 1, 1, '2000', 0, '$2y$10$t9lkPW3ifEvP', '2020-08', 123),
(10, 9, 1, 1, '2000', 0, '$2y$10$/HghI1eKMRea', '2020-02', 321),
(11, 9, 1, 1, '2000', 0, '$2y$10$AGONg6Wj5ULd', '2020-12', 321);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(16) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `details`) VALUES
(1, 'Boneyard', '2000', 'Designed by T0mb3ry, who also created Carbon. This set features customs colors for a monochrome gray set. GMK produces MX compatible keycaps in doubleshot ABS plastic. '),
(2, 'Ghost', '2500', 'Designed by fireworm. This KAM set has a lots of kits to hit most compatibility. KAM keycaps are manufactured by Keyreative in dysub PBT plastic. MX compatible.'),
(3, 'Star Wars Boba Fett', '6000', 'Collect your bounty with the officially licensed Star Wars GMK Boba Fett Keycap Set. This set is complete with both English and Mandalorian legends. Boasting a huge base kit, this set is compatible with most keyboards.'),
(4, 'Cherry Black on White', '1500', 'This cherry profile PBT set offers a cost-effective option for new members in the community or enthusiasts on a budget. Please note that the kit image does NOT reflect the legends - see actual pictures in trays for reference.'),
(5, 'Cherry Vaporwave', '1500', 'This violet cherry profile PBT set offers a cost-effective option for new members in the community or enthusiasts on a budget. Please note that the kit image does NOT reflect the legends - see actual pictures in trays for reference.'),
(6, 'OSA Sleeves', '4000', 'This collaboration between NovelKeys and Taeha Types offers a cost-effective option for new members in the community or enthusiasts on a budget.'),
(7, 'Pretty in Pink', '2500', 'GMK Pretty in Pink is a mod extension kit, featuring an accent spacebar, enter, arrows, and a few novelty keys. The novelties are meant to raise awareness of the dangers of breast cancer, and to show support for those who are currently fighting breast cancer and for survivors. The novelties feature the ubiquitous pink ribbon, a HOPE enter key, and a four heart flower.'),
(8, 'WT60-C KATE PCB', '3500', 'WT60-C KATE PCB by wilba.tech is compatible with most 60% cases that support a USB-C connector on the PCB. It has tray case mount holes for cases such as Mekanisk Fjell, Mekanisk Klippe, KBDfans Tofu, and other similar cases based around the legacy Poker2 form factor'),
(9, 'NK Switch Puller', '300', 'Rubber coated NovelKeys_ branded switch puller.'),
(10, 'NK iSwitch Hat', '750', 'The NK_ iSwitch hat features an embroidered patch of the iSwitch logo. The khaki colored hat has an adjustable snap clip. The stitching on the patch matches the rope on the bill. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `usernameUser` tinytext NOT NULL,
  `emailUser` tinytext NOT NULL,
  `pwdUser` longtext NOT NULL,
  `fName` varchar(60) NOT NULL,
  `mName` varchar(60) NOT NULL,
  `lName` varchar(60) NOT NULL,
  `suffix` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `usernameUser`, `emailUser`, `pwdUser`, `fName`, `mName`, `lName`, `suffix`, `address`) VALUES
(1, 'hellow', 'foryo22@gmail.com', '$2y$10$/B63uwg4/ubm7Idj6C4PV.Sy2WMhDqKsYss2L3nZ5bNkKOwD7pIvG', '', '', '', '', ''),
(2, 'hellow2', 'foryo23@gmail.com', '$2y$10$bpUEdTCP2oTpnWRFU3vF1.NVKqGYjgvJT/0fsF0v6A7YGPopaG0HC', '', '', '', '', ''),
(3, 'test3', 'foryo24@gmail.com', '$2y$10$Y1ptPrp844Tz0o7T8IjLIezSV0zbP8HOnugZHtJL5dRuFuHo1bUM2', '', '', '', '', ''),
(4, 'test4', 'foryo244@gmail.com', '$2y$10$0F83W2ZbgMIwnp/TLb7hS.OLZ1Pgx6V6oxpxwtPyTmmXgLJxt77we', '', '', '', '', ''),
(5, 'maintest', 'foryo25@gmail.com', '$2y$10$MpVy537FrA1Agv0GK/KrQebrQofFcw5UVox86cKJ1osvli1GDYjrW', '', '', '', '', ''),
(6, 'test5', 'foryo255@gmail.com', '$2y$10$9VfnpfcEYQglJoYRGDfHdO5iWHTJJPEC0YZOu1D/mbO40/va5SxPW', '', '', '', '', ''),
(7, 'test3', 'foryo2222@gmail.com', '$2y$10$wN9gBml9URpi4NjX6NZ3ier.dWcNAVH2HrnU3F/fXtYc.g8IUYTAe', '', '', '', '', ''),
(9, 'maintest2', 'foryo2222@gmail.com', '$2y$10$7SkRLfGa1a1y4voDs09C1uiSg8StqcOLdOXDIjMI50WbW1qJggwl.', 'Brian', 'Vincent', 'Vergara', 'Jr.', '1112323 yakal street'),
(10, 'maintest3', 'foryo99@gmail.com', '$2y$10$iaKUjffaW68VzSO1v5I/tuLwdTCI1kume9zZBMOFAIuljn0Qc4aBO', 'Brian', '', 'Vergara', '', '123123123 Yakal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
