-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2016 às 16:58
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kadmus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jgo_user`
--

CREATE TABLE `jgo_user` (
  `USR_ID` int(11) NOT NULL,
  `USR_NICKNAME` varchar(12) NOT NULL,
  `USR_NAME` varchar(50) NOT NULL,
  `USR_PASSWORD` varchar(255) NOT NULL,
  `USR_FOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jgo_user`
--

INSERT INTO `jgo_user` (`USR_ID`, `USR_NICKNAME`, `USR_NAME`, `USR_PASSWORD`, `USR_FOTO`) VALUES
(3, 'Grugal', 'Adauto', 'b786c93520099f6b129a2f38cb518283', 'thumbnail_Sem tÃ­tulo-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jgo_user`
--
ALTER TABLE `jgo_user`
  ADD PRIMARY KEY (`USR_ID`),
  ADD UNIQUE KEY `USR_NICKNAME` (`USR_NICKNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jgo_user`
--
ALTER TABLE `jgo_user`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
