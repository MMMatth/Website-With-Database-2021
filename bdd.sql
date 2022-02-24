-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql-mmm.alwaysdata.net
-- Generation Time: Feb 24, 2022 at 10:55 AM
-- Server version: 10.5.13-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmm_mmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `Editeur`
--

CREATE TABLE `Editeur` (
  `id_e` int(11) NOT NULL,
  `nom` text DEFAULT NULL,
  `anne_creation` int(11) DEFAULT NULL,
  `nationalité` text DEFAULT NULL,
  `PDG` text NOT NULL,
  `IMG_e` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Editeur`
--

INSERT INTO `Editeur` (`id_e`, `nom`, `anne_creation`, `nationalité`, `PDG`, `IMG_e`) VALUES
(1, 'Ubisoft', 1986, 'Francais', 'Yves Guillemot', '<img class= imagejeux src=\"https://i.postimg.cc/XXgSLJD9/Ubisoft-2017-Logo-2-svg.png\" alt=\"Ubisoft-2017-Logo-2-svg\"/>'),
(2, 'Valve', 1996, 'Americain', 'Gabe Newell', '<img class= imagejeux src=\"https://i.postimg.cc/f3d19T9t/langfr-280px-Valve-logo-svg.png\" alt=\"langfr-280px-Valve-logo-svg\"/>'),
(3, 'Activision', 1979, 'Americain', 'David Crane', '<img class= imagejeux src=\"https://i.postimg.cc/hfPF5BH6/langfr-220px-Activision-svg.png\" alt=\"langfr-220px-Activision-svg\"/>'),
(4, 'Epic Games', 1991, 'Americain', 'Tim Sweeney', '<img width = \"100x115\" class= imagejeux src=\"https://i.postimg.cc/ZW21nyCz/Epic-Games-logo-svg.png\" alt=\"Epic-Games-logo-svg\"/>'),
(5, 'Electronic Art', 1982, 'Americain', 'Trip Hawkins', '<img class= imagejeux src=\"https://i.postimg.cc/cgN2MyRD/langfr-250px-Electronic-Arts-2020-svg.png\" alt=\"langfr-250px-Electronic-Arts-2020-svg\"/>'),
(6, 'Rockstar Games', 1998, 'Americain', 'Sam Houser', '<img width = \"100x100\"class= imagejeux src=\"https://i.ibb.co/4SdSj6g/Rockstar-Games-Logo-svg.png\" alt=\"Rockstar-Games-Logo-svg\" border=\"0\">'),
(7, 'Mojang', 2009, 'Suedois', 'Jonas Mårtensson', '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/28KH1jR/langfr-280px-Mojang-Studios-Logo-SVG-svg.png\" alt=\"langfr-280px-Mojang-Studios-Logo-SVG-svg\" border=\"0\">'),
(8, 'Nintendo', 1889, 'Japon', 'Fusajirō Yamauchi', '<img style=width:150px class= imagejeux src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Nintendo.svg/langfr-220px-Nintendo.svg.png\">'),
(9, 'Xbox Game Studios', 1994, 'Americain', 'Phil Spencer', '<img style=width:100px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Xbox_Game_Studios.svg/langfr-280px-Xbox_Game_Studios.svg.png>'),
(11, 'Atari', 1972, 'Americain', 'Nolan Bushnell', '<img style=width:150px class= imagejeux src= https://upload.wikimedia.org/wikipedia/commons/2/20/AtariInteractive.svg >');

-- --------------------------------------------------------

--
-- Table structure for table `Jeux_video`
--

CREATE TABLE `Jeux_video` (
  `id` int(11) NOT NULL,
  `nom_jeux` text DEFAULT NULL,
  `id_editeur` int(11) NOT NULL,
  `ann_publi` int(11) DEFAULT NULL,
  `type_jeux` text DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL,
  `IMG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Jeux_video`
--

INSERT INTO `Jeux_video` (`id`, `nom_jeux`, `id_editeur`, `ann_publi`, `type_jeux`, `age_max`, `IMG`) VALUES
(1, 'Assassin s Creed', 1, 2007, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/nsHs9Nyx/260px-Assassin-s-Creed-Logo.png\" alt=\"260px-Assassin-s-Creed-Logo\"/>'),
(2, 'Assassin s Creed II', 1, 2009, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/Mcdn7dwQ/langfr-260px-Assassin-s-Creed-II-v1-logo-svg.png\" alt=\"langfr-260px-Assassin-s-Creed-II-v1-logo-svg\"/>\r\n'),
(3, 'Assassin s Creed Brotherhood', 1, 2010, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/MMLX4HvZ/260px-Assassin-s-Creed-Brotherhood-Logo.png\" alt=\"260px-Assassin-s-Creed-Brotherhood-Logo\"/>'),
(4, 'Assassin s Creed Revelations', 1, 2011, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/gxyXJGB4/260px-Assassin-s-Creed-Revelations-Logo.png\" alt=\"260px-Assassin-s-Creed-Revelations-Logo\"/>'),
(5, 'Assassin s Creed III', 1, 2012, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/K4dRD16J/260px-Assassin-s-Creed-III-Logo.png\" alt=\"260px-Assassin-s-Creed-III-Logo\"/>'),
(6, 'Assassin s Creed IV Black Flag', 1, 2013, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/wRs3dzmX/260px-Assassin-s-Creed-IV-Black-Flag-Logo.png\" alt=\"260px-Assassin-s-Creed-IV-Black-Flag-Logo\"/>'),
(7, 'Assassin s Creed Rogue', 1, 2014, 'monde_ouvert', 18, '<img style=\"width:100px\" class= imagejeux src=\"https://i.postimg.cc/fk3VdcrV/200px-Assassin-s-Creed-Rogue-Logo.png\" alt=\"200px-Assassin-s-Creed-Rogue-Logo\"/>'),
(8, 'Assassin s Creed Unity', 1, 2014, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/4YGyjrNc/260px-Assassin-s-Creed-Unity-Logo.png\" alt=\"260px-Assassin-s-Creed-Unity-Logo\"/>'),
(9, 'Assassin s Creed Syndicate', 1, 2015, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/PL3qpJbb/260px-Assassin-s-Creed-Syndicate-Logo.png\" alt=\"260px-Assassin-s-Creed-Syndicate-Logo\"/>'),
(10, 'Assassin s Creed Origins', 1, 2017, 'monde_ouvert', 18, '<img style=\"width:150px\" class= imagejeux src=\"https://i.postimg.cc/062QyDS2/200px-Assassin-s-Creed-Origins-Logo.png\" alt=\"200px-Assassin-s-Creed-Origins-Logo\"/>'),
(11, 'Assassin s Creed Odyssey', 1, 2018, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/crw69sZZ/260px-Assassin-s-Creed-Odyssey-Logo.jpg\" alt=\"260px-Assassin-s-Creed-Odyssey-Logo\"/>'),
(12, 'Assassin s Creed Valhalla', 1, 2020, 'monde_ouvert', 18, '<img class= imagejeux src=\"https://i.postimg.cc/2b1S4YTs/langfr-260px-Assassin-s-Creed-Valhalla-text-logo-svg.png\" alt=\"langfr-260px-Assassin-s-Creed-Valhalla-text-logo-svg\"/>'),
(13, 'Counter Strike', 2, 2000, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/qzv6Rfdd/260px-Counter-Strike-text-logo.png\" alt=\"260px-Counter-Strike-text-logo\"/>'),
(14, 'Counter Strike : Condition Zero', 2, 2004, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/9zpqCmKp/260px-Counter-Strike-Condition-Zero-Logo.png\" alt=\"260px-Counter-Strike-Condition-Zero-Logo\"/>'),
(15, 'Counter Strike : Source', 2, 2004, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/kBY6RjnR/260px-Counter-Strike-Source-Logo.png\" alt=\"260px-Counter-Strike-Source-Logo\"/>'),
(16, 'Counter Strike Online', 2, 2008, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/VJSSqj6G/download.jpg\" alt=\"download\"/>'),
(17, 'Counter Strike : Global Offensive', 2, 2012, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/87q7tjf1/langfr-260px-Counter-Strike-Global-Offensive-svg.png\" alt=\"langfr-260px-Counter-Strike-Global-Offensive-svg\"/>'),
(19, 'Call of Duty', 3, 2003, 'FPS', 12, '<img class= imagejeux src=\"https://i.postimg.cc/JHDnN87y/260px-Call-of-Duty-Logo.png\" alt=\"260px-Call-of-Duty-Logo\"/>'),
(20, 'Call of Duty 2', 3, 2005, 'FPS', 16, '<img class= imagejeux src=\"https://i.postimg.cc/tYnZP37r/260px-Call-of-Duty-2-Logo.png\" alt=\"260px-Call-of-Duty-2-Logo\"/>'),
(21, 'Call of Duty 3 : En marche vers Paris', 3, 2006, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/yDqJTDZ7/260px-Call-of-Duty-3-En-marche-vers-Paris-Logo.jpg\" alt=\"260px-Call-of-Duty-3-En-marche-vers-Paris-Logo\"/>'),
(22, 'Call of Duty 4 : Modern Warfare ', 3, 2007, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/87h7XTRM/260px-Call-of-Duty-4-Modern-Warfare-Logo.png\" alt=\"260px-Call-of-Duty-4-Modern-Warfare-Logo\"/>'),
(23, 'Call of Duty: World at War', 3, 2008, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/SYMSXGVC/260px-Gall-of-Duty-World-at-War-Logo.png\" alt=\"260px-Gall-of-Duty-World-at-War-Logo\"/>'),
(24, 'Call of Duty : Modern Warfare 2', 3, 2009, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/CdXdFRJb/260px-Call-of-Duty-Modern-Warfare-2-Logo.jpg\" alt=\"260px-Call-of-Duty-Modern-Warfare-2-Logo\"/>'),
(25, 'Call of Duty: Black Ops', 3, 2010, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/k2F5FfCy/Call-of-Duty-Black-Ops-logo-svg.png\" alt=\"Call-of-Duty-Black-Ops-logo-svg\"/>'),
(26, 'Call of Duty: Modern Warfare 3', 3, 2011, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/TL9dnwXY/langfr-260px-Modern-Warfare3-Logo-svg.png\" alt=\"langfr-260px-Modern-Warfare3-Logo-svg\"/>'),
(27, 'Call of Duty: Black Ops II', 3, 2012, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/v4dBVCJB/Call-of-Duty-Black-Ops-2-Logo-svg.png\" alt=\"Call-of-Duty-Black-Ops-2-Logo-svg\"/>'),
(28, 'Call of Duty: Ghosts', 3, 2013, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/tZmJnJbQ/260px-Call-of-Duty-Ghosts-Logo.jpg\" alt=\"260px-Call-of-Duty-Ghosts-Logo\"/>'),
(29, 'Call of Duty: Advanced Warfare', 3, 2014, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/3yYdPz16/260px-Call-of-Duty-Advanced-Warfare-Logo.png\" alt=\"260px-Call-of-Duty-Advanced-Warfare-Logo\"/>'),
(30, 'Call of Duty: Black Ops III', 3, 2015, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/jCFnLgqw/260px-Black-Ops-III.png\" alt=\"260px-Black-Ops-III\"/>'),
(31, 'Call of Duty: Infinite Warfare', 3, 2016, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/jWxS8PdY/Call-of-Duty-Infinite-Warfare-Game-logo-svg.png\" alt=\"Call-of-Duty-Infinite-Warfare-Game-logo-svg\"/>'),
(32, 'Call of Duty: WWII', 3, 2017, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/Mc9KgHvM/Logo-Call-of-Duty-WWII-zweifarbig-svg.png\" alt=\"Logo-Call-of-Duty-WWII-zweifarbig-svg\"/>'),
(33, 'Call of Duty: Black Ops IIII', 3, 2018, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/06nbxZHN/260px-Call-of-Duty-Black-Ops-IIII-Logo.png\" alt=\"260px-Call-of-Duty-Black-Ops-IIII-Logo\"/>'),
(34, 'Call of Duty: Modern Warfare', 3, 2019, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/JGX0tRdv/260px-Call-of-Duty-Modern-Warfare-Logo.png\" alt=\"260px-Call-of-Duty-Modern-Warfare-Logo\"/>'),
(35, 'Call of Duty: Black Ops Cold War', 3, 2020, 'FPS', 18, '<img class= imagejeux src=\"https://i.postimg.cc/8JCsCWqm/260px-Call-of-Duty-Cold-War-Logo.png\" alt=\"260px-Call-of-Duty-Cold-War-Logo\"/>'),
(36, 'Call of Duty: Vanguard', 3, 2020, 'battle_royale', 18, '<img class= imagejeux src=\"https://i.postimg.cc/pyhX12xr/Call-of-Duty-Vanguard-logo-svg.png\" alt=\"Call-of-Duty-Vanguard-logo-svg\"/>'),
(37, 'Fortnite', 4, 2017, 'battle_royale', 12, '<img class= imagejeux src=\"https://i.postimg.cc/GTyXZBhb/langfr-260px-Fortnite-Logo-svg.png\" alt=\"langfr-260px-Fortnite-Logo-svg\"/>'),
(38, 'Apex Legends', 5, 2019, 'battle_royale', 16, '<img class= imagejeux src=\"https://i.postimg.cc/Fd1WVWMd/260px-Apex-Legends-Logo.png\" alt=\"260px-Apex-Legends-Logo\"/>'),
(39, 'Fifa 2001', 5, 2000, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(40, 'Fifa 2002', 5, 2001, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(41, 'Fifa 2003', 5, 2002, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(42, 'Fifa 2004', 5, 2003, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(43, 'Fifa 2005', 5, 2004, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/21DC9h88/150px-FIFA-Football-2004-Logo.jpg\" alt=\"150px-FIFA-Football-2004-Logo\"/>'),
(44, 'Fifa 6', 5, 2005, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/BLVqmztd/FIFA-06-Logo.jpg\" alt=\"FIFA-06-Logo\"/>'),
(45, 'Fifa 7', 5, 2006, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/XZN44WCR/170px-FIFA-07-Logo.gif\" alt=\"170px-FIFA-07-Logo\"/>'),
(46, 'Fifa 8', 5, 2007, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(47, 'Fifa 9', 5, 2008, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/vgcyxvXX/190px-FIFA-09-Logo.png\" alt=\"190px-FIFA-09-Logo\"/>'),
(48, 'Fifa 10', 5, 2009, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/pymVmP6x/FIFA-10-Logo.jpg\" alt=\"FIFA-10-Logo\"/>'),
(49, 'Fifa 11', 5, 2010, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/Js5Mf0G3/160px-FIFA-11-Logo.jpg\" alt=\"160px-FIFA-11-Logo\"/>'),
(50, 'Fifa 12', 5, 2011, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(51, 'Fifa 13', 5, 2012, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/xcH0PtQ4/FIFA-series-logo-2020-present-svg.png\" alt=\"FIFA-series-logo-2020-present-svg\"/>'),
(52, 'Fifa 14', 5, 2013, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/N9Sc6rzt/220px-FIFA-14-Logo.png\" alt=\"220px-FIFA-14-Logo\"/>'),
(53, 'Fifa 15', 5, 2014, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/H8MCBsqy/220px-FIFA-15-Logo.png\" alt=\"220px-FIFA-15-Logo\"/>'),
(54, 'Fifa 16', 5, 2015, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/bdS8z3Zw/220px-FIFA-16-Logo.png\" alt=\"220px-FIFA-16-Logo\"/>'),
(55, 'Fifa 17', 5, 2016, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/dLMFDrCm/220px-FIFA-17-Logo.png\" alt=\"220px-FIFA-17-Logo\"/>'),
(56, 'Fifa 18', 5, 2017, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/LnzpP5Bd/220px-FIFA-18-Logo.png\" alt=\"220px-FIFA-18-Logo\"/>'),
(57, 'Fifa 19', 5, 2018, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/23gkvgsW/FIFA-19-logo-svg.png\" alt=\"FIFA-19-logo-svg\"/>'),
(58, 'Fifa 20', 5, 2019, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/mPjWdn58/260px-FIFA20.png\" alt=\"260px-FIFA20\"/>'),
(59, 'Fifa 21', 5, 2020, 'foot', 3, '<img class= imagejeux src=\"https://i.postimg.cc/LJ2M3SNJ/241px-FIFA-21-logo-svg.png\" alt=\"241px-FIFA-21-logo-svg\"/>'),
(60, 'Fifa 22', 5, 2021, 'foot', 3, '<img class= imagejeux src=\'https://i.postimg.cc/qggmWv1P/FIFA-22-logo-svg.png\' border=\'0\' alt=\'FIFA-22-logo-svg\'/>'),
(61, 'Grand Theft Auto', 6, 1997, 'monde_ouvert', 18, '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/jMJfKYW/langfr-260px-Grand-Theft-Auto-Logo-svg.png\" alt=\"langfr-260px-Grand-Theft-Auto-Logo-svg\" border=\"0\">'),
(62, 'Grand Theft Auto 2', 6, 1999, 'monde_ouvert', 18, '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/nfhYpMp/Grand-Theft-Auto-2-logo-svg.png\" alt=\"Grand-Theft-Auto-2-logo-svg\" border=\"0\">'),
(63, 'Grand Theft Auto III', 6, 2001, 'monde_ouvert', 18, '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/MgFCYdZ/Grand-Theft-Auto-III-logo-svg.png\" alt=\"Grand-Theft-Auto-III-logo-svg\" border=\"0\">'),
(64, 'Grand Theft Auto: Vice City', 6, 2002, 'monde_ouvert', 18, '<img style=\"width:150px\" class= imagejeux src=\"https://i.ibb.co/w05QN6w/250px-Grand-Theft-Auto-Vice-City-Logo.png\" alt=\"250px-Grand-Theft-Auto-Vice-City-Logo\" border=\"0\">'),
(65, 'Grand Theft Auto: San Andreas', 6, 2004, 'monde_ouvert', 18, '<img style=\"width:150px\" class= imagejeux src=\"https://i.ibb.co/XtPTLMt/langfr-260px-Grand-Theft-Auto-San-Andreas-Logo-svg.png\" alt=\"langfr-260px-Grand-Theft-Auto-San-Andreas-Logo-svg\" border=\"0\">'),
(66, 'Grand Theft Auto IV', 6, 2008, 'monde_ouvert', 18, '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/HGYFsN7/langfr-260px-Grand-Theft-Auto-IV-Logo-svg.png\" alt=\"langfr-260px-Grand-Theft-Auto-IV-Logo-svg\" border=\"0\">'),
(67, 'Grand Theft Auto V', 6, 2013, 'monde_ouvert', 18, '<img style=\"width:200px\" class= imagejeux src=\"https://i.ibb.co/BnvyV9t/langfr-260px-Grand-Theft-Auto-V-Logo-svg.png\" alt=\"langfr-260px-Grand-Theft-Auto-V-Logo-svg\" border=\"0\">'),
(68, 'Minecraft', 7, 2011, 'monde_ouvert', 7, '<img style=width:100px class= imagejeux src=https://cdn.pixabay.com/photo/2013/07/12/19/25/minecraft-154749_1280.png>'),
(69, 'Fall Guys', 4, 2020, 'Arcade', 7, '<img style=width:100px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/thumb/b/b7/Fall_Guys_Logo.png/260px-Fall_Guys_Logo.png>'),
(70, 'Team Fortress 2', 2, 2007, 'FPS', 12, '<img style=width:100px class= imagejeux src=https://img.icons8.com/color/480/team-fortress-2.png>'),
(71, 'Battlefield 1942', 5, 2002, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/1/1e/Battlefield_1942_Logo.gif>'),
(72, 'Battlefield Vietnam', 5, 2004, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/thumb/b/b5/Battlefield_Vietnam_Logo.jpg/260px-Battlefield_Vietnam_Logo.jpg>'),
(73, 'Battlefield 2', 5, 2005, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/thumb/d/d2/Battlefield_2_Logo.png/260px-Battlefield_2_Logo.png>'),
(74, 'Battlefield 2142', 5, 2006, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/thumb/6/66/Battlefield_2142_Logo.PNG/230px-Battlefield_2142_Logo.PNG>'),
(75, 'Battlefield 3', 5, 2009, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Battlefield_3_Logo.png/260px-Battlefield_3_Logo.png>'),
(76, 'Battlefield 4', 5, 2013, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Battlefield_4_logo.png/260px-Battlefield_4_logo.png>'),
(77, 'Battlefield 1', 5, 2014, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Battlefield_1_%282016%29.png/260px-Battlefield_1_%282016%29.png>'),
(78, 'Battlefield V', 5, 2018, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Battlefield_v_official_logo.png/260px-Battlefield_v_official_logo.png>'),
(79, 'Battlefield 2042', 5, 2021, 'FPS', 18, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Battlefield_2042_logo.svg/langfr-260px-Battlefield_2042_logo.svg.png>'),
(80, 'Juste Dance', 1, 2009, 'Arcade', 3, '<img style=width:150px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/d/da/Just_Dance_%28jeu_vid%C3%A9o%29_Logo.png>'),
(81, 'Super Mario', 8, 1985, 'Arcade', 3, '<img style=width:200px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Mario_Series_Logo.svg/langfr-260px-Mario_Series_Logo.svg.png>'),
(82, 'Sea of Thieves', 9, 2018, 'monde_ouvert', 12, '<img style=width:150px class= imagejeux src=https://upload.wikimedia.org/wikipedia/fr/thumb/1/19/Sea_of_Thieves_Logo.png/200px-Sea_of_Thieves_Logo.png>'),
(84, 'Moulias', 1, 2004, 'Gros platformer', 18, '<img style=width:150px class= imagejeux src=https://peauorneub.alwaysdata.net/image/NewPk/Mattheo.jpg>'),
(85, 'PONG', 11, 1972, 'Arcade', 18, '<img style=width:150px class= imagejeux src=https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Pong.png/260px-Pong.png>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id_e`);

--
-- Indexes for table `Jeux_video`
--
ALTER TABLE `Jeux_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_editeur` (`id_editeur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Jeux_video`
--
ALTER TABLE `Jeux_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
