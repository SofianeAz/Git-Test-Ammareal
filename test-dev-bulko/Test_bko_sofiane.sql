-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 juil. 2022 à 17:51
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_bko`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET UTF8MB4 NOT NULL,
  `email` varchar(20) CHARACTER SET UTF8MB4 NOT NULL,
  `tel` varchar(10) CHARACTER SET UTF8MB4 NOT NULL,
  `message` text CHARACTER SET UTF8MB4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `email`, `tel`, `message`) VALUES
(1, 'bul ko', 'testBko1@bulko.net', '0770707070', 'Pony ipsum dolor sit amet it needs to be about 20% cooler. Parasprite Cheerilee friend Ms. Peachbottom, Cheese Sandwich sun Zecora dragon Pumpkin Cake Trixie Spitfire Princess Luna. Tail Big McIntosh Flam Scootaloo, Donut Joe Philomena rainbow power Gummy Cranky Doodle Donkey Wonderbolts breezies Zecora friend. Lightning Dust Prim Hemline Wonderbolts Nightmare Moon Ms. Harshwhinny laugher kindness.'),
(2, 'bul ko2', 'testBko2@bulko.net', '0770707070', 'Pony ipsum dolor sit amet magic nulla adipisicing apples commodo magna. Pony Daring Do Matilda Cheese Sandwich chaos dolor, aliquip hoof Spitfire veniam Dr. Caballeron mane Maud Pie. Featherweight Bon Bon Opalescence Matilda hay. Alicorn Everfree Forest magic culpa sunt Twist occaecat proident pony consequat. Cupcake non Flash Sentry, enim dolore ex aliqua muffin Zecora wing pony chaos Sonata Dusk horn irure.'),
(3, '', 'testUnknow@bulko.net', '0770707072', ''),
(4, 'sofiane', 'hello@world.net', '0781210136', 'hello world'),
(16, 'Sofiane Azougar', 'dqssqdqs@gmail.com', '0781210136', ' dqsqqqsd'),
(15, '', '', '', ''),
(14, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dsqdqs'),
(17, 'dsqsdsqdsq', 'dsqdsqdqs@gmail.com', '0781210136', ' sqdsqdsq'),
(18, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqssdqqs'),
(19, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqssqdsq'),
(20, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqssqdsq'),
(21, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dsfdsfs'),
(22, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqdqds'),
(23, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqdqs'),
(24, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dsqd'),
(25, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqssq'),
(26, 'Sofiane Azougar', 'sofiane.azougar@gmai', '0781210136', ' dqdqs'),
(27, 'Sofiane Azougar', 'sofiane.azougar@qdss', '0781210136', ' qdsqsdqs'),
(28, 'Pas de nom', 'last.test@gmail.com', '0781210136', ' '),
(29, 'Pas de nom', 'last.test@gmail.com', '0781210136', ' '),
(30, 'Pas de nom', 'last.test@gmail.com', '0781210136', ' '),
(31, 'test', 'testt@gmail.com', '0781210136', ' '),
(32, 'Pas de nom', 'testing.portfolio@gmail.com', '0755554422', 'Pas de message'),
(33, 'Pas de nom', 'testing.portfolio@gmail.com', '0755554422', 'Pas de message');

