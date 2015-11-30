-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2015. Nov 21. 16:17
-- Kiszolgáló verziója: 5.6.24
-- PHP verzió: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `advertisement_db`
--
CREATE DATABASE IF NOT EXISTS `advertisement_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `advertisement_db`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` mediumint(9) NOT NULL,
  `userid` smallint(6) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `advertisements`
--

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(21, 1, 'Használt autók egy helyen'),
(22, 2, 'Pizza futárt keresünk'),
(23, 3, 'Elektronikai bazár'),
(24, 4, 'Esküvői ruhák'),
(25, 5, 'Étterembe pultos lányt keresünk'),
(26, 6, 'Szeged központjában panel lakás eladó'),
(27, 7, 'Új fodrászszalon a Széchenyi tér mellett'),
(28, 8, 'Fuvarozó cégünk új sofőröket keres'),
(29, 9, 'Eladó alig használt laptop'),
(30, 10, 'Használt ruhák'),
(31, 11, 'Rendezvényszervezői pozícióba keresünk munkatársat'),
(32, 12, 'Alkalmi munkát vállalok'),
(33, 13, 'Személyi kölcsön akár 5 000 000 Ft-ig'),
(34, 14, 'Angol nyelvvizsga tanfolyam'),
(35, 15, 'Lakás és irodai bútorok'),
(36, 16, 'Fizika tanári állás Budapesten'),
(37, 17, 'Számítógép alkatrészek eladók'),
(38, 18, 'Új fitness központ Debrecenben'),
(39, 19, 'Természetes gyógynövények'),
(40, 20, 'Építőipari cégünk mérlegképes könyvelőt keres');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(6) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Kory Mincy'),
(2, 'Jacqulyn Riddle'),
(3, 'Clarisa Boozer'),
(4, 'Ambrose Desroches'),
(5, 'Arvilla Boysen'),
(6, 'Diego Paquette'),
(7, 'Hoa Hochstetler'),
(8, 'Katheleen Sobota'),
(9, 'Hershel Blackman'),
(10, 'Violet Shellenberger'),
(11, 'Renea Keesee'),
(12, 'Marian Bohm'),
(13, 'Sparkle Paley'),
(14, 'Sheri Medved'),
(15, 'Sharla Dimarco'),
(16, 'Milton Horn'),
(17, 'Glory Sayegh'),
(18, 'Garfield Partington'),
(19, 'Aletha Buscher'),
(20, 'Casimira Lipford');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
