-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Št 25.Máj 2017, 10:02
-- Verzia serveru: 5.7.17-0ubuntu0.16.04.1
-- Verzia PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `Final`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Photos`
--

CREATE TABLE `Photos` (
  `ID` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Title-SK` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Title-EN` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Folder` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `Photos`
--

INSERT INTO `Photos` (`ID`, `Datum`, `Title-SK`, `Title-EN`, `Folder`) VALUES
(1, '2017-02-07', 'Deň otvorených dverí na ÚAMT FEI STU', 'Open day at UAMT FEI STU', 'events001'),
(2, '2015-09-25', 'Noc výskumníkov', 'Night of researchers', 'events002');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Videos`
--

CREATE TABLE `Videos` (
  `ID` int(11) NOT NULL,
  `Title-SK` varchar(100) NOT NULL,
  `Title-EN` varchar(100) NOT NULL,
  `Adresa` varchar(200) NOT NULL,
  `YT` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Photos`
--
ALTER TABLE `Photos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `Videos`
--
ALTER TABLE `Videos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Photos`
--
ALTER TABLE `Photos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pre tabuľku `Videos`
--
ALTER TABLE `Videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
