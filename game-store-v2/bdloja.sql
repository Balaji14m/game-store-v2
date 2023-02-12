-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 12:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdloja`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `game_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `game_name` text NOT NULL,
  `game_img` varchar(200) NOT NULL,
  `game_price` int(11) NOT NULL,
  `id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nomecliente` varchar(30) NOT NULL,
  `emailcliente` varchar(30) NOT NULL,
  `senhacliente` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `iditemvenda` int(11) NOT NULL,
  `idvenda` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtdeitemvenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idproduto` int(11) NOT NULL,
  `descproduto` varchar(70) NOT NULL,
  `valorproduto` double NOT NULL,
  `qtdeproduto` int(11) NOT NULL,
  `fotoproduto` varchar(200) DEFAULT NULL,
  `generoproduto` varchar(30) NOT NULL,
  `consoleproduto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproduto`
--

INSERT INTO `tbproduto` (`idproduto`, `descproduto`, `valorproduto`, `qtdeproduto`, `fotoproduto`, `generoproduto`, `consoleproduto`) VALUES
(2, 'Death Stranding', 368.57, 268, 'img/product/2.jpg', 'Ação', 'Playstation'),
(3, 'God of War', 77.95, 86, 'img/product/3.jpg', 'Aventura', 'Playstation'),
(4, 'Skyrim', 169.99, 57, 'img/product/4.jpg', 'RPG', 'Pc Gamer'),
(5, 'Fortnite', 19.99, 74, 'img/product/5.jpg', 'Multiplayer', 'Pc Gamer'),
(6, 'Minecraft', 149.99, 60, 'img/product/6.jpg', 'Multiplayer', 'Pc Gamer'),
(7, ' Dota 2', 9.99, 143, 'img/product/7.jpg', 'Multiplayer', 'Pc Gamer'),
(8, 'Diablo III', 49.99, 56, 'img/product/8.jpg', 'Multiplayer', 'Pc Gamer'),
(9, 'Toram online', 7.5, 30, 'img/product/9.jpeg', 'RPG', 'Mobile'),
(10, 'Free Fire', 5, 28, 'img/product/10.jpeg', 'Multiplayer', 'Mobile'),
(11, 'Fifa 2019', 269.99, 600, 'img/product/11.jpeg', 'Esportes', 'Xbox'),
(12, 'A Way Out', 89, 9, 'img/product/12.jpg', 'Aventura', 'Pc Gamer'),
(13, 'Hollow Knight', 27.99, 100, 'img/product/13.jpeg', 'Aventura', 'Nintendo');

-- --------------------------------------------------------

--
-- Table structure for table `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idvenda` int(11) NOT NULL,
  `datavenda` date NOT NULL,
  `valortotalvenda` double NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`iditemvenda`);

--
-- Indexes for table `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `iditemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
