-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 10:29 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `francophonie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `lastlogin` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `username`, `password`, `email`, `contact`, `lastlogin`) VALUES
(1, 'sawadogo', 'samuel', 'SAM', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', 'sam.corp@outlook.com', '72893659', '2017-06-11 00:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL,
  `theme` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `auteur` varchar(45) DEFAULT NULL,
  `mailAuteur` varchar(255) NOT NULL,
  `contactAuteur` varchar(40) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `filiere_id` int(11) NOT NULL,
  `universite_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `universite`
--

CREATE TABLE IF NOT EXISTS `universite` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`,`universite_id`), ADD KEY `fk_document_filiere_idx` (`filiere_id`), ADD KEY `fk_document_universite1_idx` (`universite_id`), ADD KEY `fk_document_admin1_idx` (`admin_id`);

--
-- Indexes for table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universite`
--
ALTER TABLE `universite`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
ADD CONSTRAINT `fk_document_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_document_filiere` FOREIGN KEY (`filiere_id`) REFERENCES `filiere` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_document_universite1` FOREIGN KEY (`universite_id`) REFERENCES `universite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
