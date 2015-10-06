-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 06 Octobre 2015 à 13:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `testbluezebra`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `birthday`, `created_at`, `updated_at`) VALUES
(10, 'Lionel', 'Lueilwitz', 'zyost@hills.com', '1993-07-16', '2015-10-04', '2015-10-04'),
(11, 'Cleta', 'Ruecker', 'lkoelpin@yahoo.com', '1972-04-12', '2015-10-04', '2015-10-04'),
(15, 'Anjali', 'Jast', 'brigitte87@frami.info', '1999-09-01', '2015-10-04', '2015-10-04'),
(17, 'Camryn', 'Swift', 'graham.reba@hintz.info', '1988-06-06', '2015-10-04', '2015-10-04'),
(18, 'Giuseppe', 'Marquardt', 'emely.gerlach@hotmail.com', '2006-03-22', '2015-10-04', '2015-10-04'),
(19, 'Avis', 'Weimann', 'uleannon@king.biz', '1980-09-14', '2015-10-04', '2015-10-04'),
(21, 'Ron', 'Schmeler', 'dkris@gmail.com', '1982-07-03', '2015-10-04', '2015-10-04'),
(23, 'Emmy', 'Larson', 'novella22@hotmail.com', '2001-09-21', '2015-10-04', '2015-10-04'),
(27, 'Eleonore', 'Ledner', 'harmony63@rempel.info', '1974-05-19', '2015-10-04', '2015-10-04'),
(35, 'Roberto', 'Konopelski', 'mberge@kirlin.biz', '2015-08-06', '2015-10-04', '2015-10-04'),
(38, 'Haleigh', 'Yundt', 'guillermo81@yahoo.com', '1972-08-27', '2015-10-04', '2015-10-04'),
(39, 'Jazmin', 'Krajcik', 'qbashirian@flatley.com', '2004-10-13', '2015-10-04', '2015-10-04'),
(42, 'Cassie', 'Schneider', 'devan25@yahoo.com', '1999-02-21', '2015-10-04', '2015-10-04'),
(44, 'Scotty', 'Olson', 'ryann07@hotmail.com', '1981-12-29', '2015-10-04', '2015-10-04'),
(45, 'Maryjane', 'Mitchell', 'mercedes.schumm@yahoo.com', '1978-08-12', '2015-10-04', '2015-10-04'),
(47, 'Jovani', 'Strosin', 'cwintheiser@bailey.net', '2013-11-17', '2015-10-04', '2015-10-04'),
(49, 'Lesly', 'Leannon', 'schroeder.friedrich@bayer.com', '1972-05-06', '2015-10-04', '2015-10-04'),
(51, 'Stephon', 'Zieme', 'georgette.larson@hotmail.com', '1976-04-24', '2015-10-04', '2015-10-04'),
(52, 'Marianne', 'Sauer', 'sauer@gmail.com', '1984-11-06', '2015-10-04', '2015-10-04'),
(54, 'Lisette', 'Parker', 'lisa.rodriguez@yahoo.com', '1978-11-15', '2015-10-04', '2015-10-04'),
(55, 'Alysa', 'McGlynn', 'pnitzsche@yahoo.com', '1977-10-30', '2015-10-04', '2015-10-04'),
(56, 'Sheridan', 'Rutherford', 'julien11@gmail.com', '1999-06-30', '2015-10-04', '2015-10-04'),
(57, 'Nelle', 'Welch', 'deion88@beatty.com', '1988-08-12', '2015-10-04', '2015-10-04'),
(58, 'Cortney', 'Mayer', 'qrau@mraz.com', '2003-01-11', '2015-10-04', '2015-10-04'),
(59, 'Lew', 'Johnston', 'lura.russel@ondricka.com', '1987-03-17', '2015-10-04', '2015-10-04'),
(60, 'Lorna', 'Reichert', 'mabel21@yahoo.com', '1971-07-08', '2015-10-04', '2015-10-04'),
(61, 'Jean-Luc', 'Jory', 'jljory@hotmail.com', '1990-05-05', '2015-10-06', '2015-10-06'),
(62, 'Jean-Luc', 'Patery', 'jlpatery@gmail.fr', '1965-10-10', '2015-10-06', '2015-10-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
