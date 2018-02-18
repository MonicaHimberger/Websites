-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 18, 2018 at 04:16 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CIT336`
--

-- --------------------------------------------------------

--
-- Table structure for table `Favorites`
--

CREATE TABLE `Favorites` (
  `Animal` varchar(225) DEFAULT NULL,
  `Number` int(11) DEFAULT NULL,
  `Plant` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Favorites`
--

INSERT INTO `Favorites` (`Animal`, `Number`, `Plant`) VALUES
('Puku', 1, 'Dixie Grapefern'),
('Sable antelope', 2, 'Mezereon'),
('Australian sea lion', 3, 'Prettyface'),
('Boa cooks tree', 4, 'Clevelands Horkelia'),
('Black-footed ferret', 5, 'Xanthoparmelia Lichen'),
('Sarus crane', 6, 'Fissurewort'),
('Madagascar fruit bat', 7, 'Copelands Cloak Fern'),
('Porcupine tree', 8, 'Donner Lake Lupine'),
('Porcupine crested', 9, 'White Ramoon'),
('North American porcupine', 10, 'Brides Feathers'),
('Wild water buffalo', 11, 'Lyngbyes Sedge'),
('Stick insect', 12, 'Gulch Cyrtandra'),
('Large cormorant', 13, 'Brigantiaea Lichen'),
('Laughing dove', 14, 'Mayten'),
('Capuchin blackcapped', 15, 'Santa Rosa Mountains Linanthus');

-- --------------------------------------------------------

--
-- Table structure for table `Information`
--

CREATE TABLE `Information` (
  `First` varchar(225) DEFAULT NULL,
  `Last` varchar(225) DEFAULT NULL,
  `Email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Information`
--

INSERT INTO `Information` (`First`, `Last`, `Email`) VALUES
('Karney', 'Slavin', 'kslavin0@umich.edu'),
('Clari', 'Ricciardi', 'cricciardi1@bloglovin.com'),
('Bertha', 'Heinrici', 'bheinrici2@phpbb.com'),
('Vincents', 'Cohrs', 'vcohrs3@mail.ru'),
('Ernesta', 'Pritchett', 'epritchett4@prlog.org'),
('Yvonne', 'Glede', 'yglede5@livejournal.com'),
('Thebault', 'Gambles', 'tgambles6@exblog.jp'),
('Clarine', 'MacElroy', 'cmacelroy7@europa.eu'),
('Ronalda', 'Aingel', 'raingel8@cloudflare.com'),
('Dillie', 'Bennison', 'dbennison9@ebay.com'),
('Shoshana', 'Larkins', 'slarkinsa@bloglovin.com'),
('Rhea', 'Bloodworthe', 'rbloodwortheb@google.pl'),
('Vi', 'Simka', 'vsimkac@about.com'),
('Noelani', 'Eskell', 'neskelld@privacy.gov.au'),
('Darius', 'Boatright', 'dboatrighte@webeden.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE `Location` (
  `City` varchar(225) DEFAULT NULL,
  `Country` varchar(225) DEFAULT NULL,
  `Code` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`City`, `Country`, `Code`) VALUES
('Rosebank', 'South Africa', 'ZA'),
('San Jacinto', 'Philippines', 'PH'),
('San Juan de los Morros', 'Venezuela', 'VE'),
('Villa Nueva', 'Argentina', 'AR'),
('Vrdy', 'Czech Republic', 'CZ'),
('Embarcacin', 'Argentina', 'AR'),
('Melnikovo', 'Russia', 'RU'),
('Ume', 'Sweden', 'SE'),
('Alartos', 'Greece', 'GR'),
('Shuanghe', 'China', 'CN'),
('At Samat', 'Thailand', 'TH'),
('Ourense', 'Spain', 'ES'),
('Untolovo', 'Russia', 'RU'),
('Cabanaconde', 'Peru', 'PE'),
('Puerto Moraz¡n', 'Nicaragua', 'NI');