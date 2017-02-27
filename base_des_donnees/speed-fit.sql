-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Février 2017 à 13:57
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `speed-fit`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `category_id`, `image`) VALUES
(1, 'enfant kararté', NULL, 4, 'art1.jpg'),
(3, 'groupe kung fu', NULL, 4, 'art2.jpg'),
(2, 'centre judo', NULL, 4, 'art3.jpg'),
(5, 'monitrice judo', NULL, 4, 'art4.jpg'),
(6, 'centre judo', NULL, 4, 'art5.jpg'),
(8, 'centre enfant', NULL, 4, 'art6.jpg'),
(10, 'moniteur karaté', NULL, 4, 'art7.jpg'),
(11, 'ceinture noire', NULL, 4, 'art8.jpg'),
(12, 'groupe art martiaux', NULL, 4, 'art9.jpg'),
(13, 'centre ', NULL, 4, 'art10.jpg'),
(14, 'a vos marque fille', NULL, 3, 'course_a_pied.jpg'),
(15, 'groupe avec balle de tennis', NULL, 3, 'course_a_pied2.jpg'),
(16, 'fille course a pied', NULL, 3, 'course_a_pied3.jpg'),
(17, 'homme et fille en course', NULL, 3, 'course_a_pied4.jpg'),
(18, 'groupe course a pied', NULL, 3, 'course_a_pied5.jpg'),
(19, 'groupe course', NULL, 3, 'course_a_pied6.jpg'),
(20, 'trois personne course', NULL, 3, 'course_a_pied7.jpg'),
(21, 'groupe aventure course', NULL, 3, 'course_a_pied8.jpg'),
(22, 'fille course', NULL, 3, 'course_a_pied9.jpg'),
(23, 'pied', NULL, 3, 'course_a_pied10.jpg'),
(24, 'materiel gym', NULL, 2, 'gym.jpg'),
(25, 'tapie gym', NULL, 2, 'gym1.jpg'),
(26, 'tapy jeune ', NULL, 2, 'gym2.jpg'),
(27, 'gym fille', NULL, 2, 'gym3.jpg'),
(28, 'altere gym', NULL, 2, 'gym4.jpg'),
(29, 'fille en pompe', NULL, 2, 'gym5.jpg'),
(30, 'moniteur gym 1', NULL, 2, 'gym6.jpg'),
(31, 'gym', NULL, 2, 'gym7.jpg'),
(34, 'fille avec altere ', NULL, 2, 'gym8.jpg'),
(35, 'fille sexy avec altere', NULL, 2, 'gym9.jpg'),
(36, 'gym des vieux', NULL, 2, 'gym10.jpg'),
(37, 'materiel dehors', NULL, 2, 'gym11.jpg'),
(38, 'fille au gym', NULL, 2, 'gym12.jpg'),
(39, 'massotherapeute', NULL, 6, 'massage1.jpg'),
(40, 'massage avec caillou', NULL, 6, 'massage2.jpg'),
(41, 'massage', NULL, 6, 'massage3.jpg'),
(42, 'massage pied', NULL, 6, 'massage4.jpg'),
(43, 'massage dos', NULL, 6, 'massage5.jpg'),
(45, 'massage epaule', NULL, 6, 'massage6.jpg'),
(47, 'massage caillou 2', NULL, 6, 'massage8.jpg'),
(50, 'banner de la natation', NULL, 1, 'natation1.jpg'),
(51, 'natation vieillard', NULL, 1, 'natation2.jpg'),
(52, 'natation famille', NULL, 1, 'natation3.jpg'),
(53, 'natation enfant', NULL, 1, 'natation4.jpg'),
(54, 'natation jeune', NULL, 1, 'natation5.jpg'),
(55, 'natation enfant 2', NULL, 1, 'natation6.jpg'),
(56, 'natation petite fille', NULL, 1, 'natation7.jpg'),
(57, 'natation centre', NULL, 1, 'natation8.jpg'),
(60, 'natation groupe', NULL, 1, 'natation9.jpg'),
(61, 'groupe velo', NULL, 5, 'velo1.jpg'),
(62, 'velo parc', NULL, 5, 'velo2.jpg'),
(63, 'velo en famille', NULL, 5, 'velo3.jpg'),
(64, 'groupe velo', NULL, 5, 'velo4.jpg'),
(65, 'famille en velo', NULL, 5, 'velo5.jpg'),
(66, 'moniteur en velo', NULL, 5, 'velo6.jpg'),
(67, 'discussion en velo', NULL, 5, 'velo7.jpg'),
(68, 'velo avec  moniteur', NULL, 5, 'velo8.jpg'),
(69, 'velo plage', NULL, 5, 'velo9.jpg'),
(70, 'velo route', NULL, 5, 'velo10.jpg'),
(71, 'moniteur velo', NULL, 5, 'velo11.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_category`
--

INSERT INTO `article_category` (`id`, `name`, `description`) VALUES
(1, 'Natation', 'toutes nos offres concernant la natation'),
(2, 'Gym', 'toutes nos offres concernant le  fitness'),
(3, 'Course_a_pied', 'toutes nos offres concernant le course a pied'),
(4, 'Art_martiaux', 'toutes nos offres concernant les arts martiaux '),
(5, 'Velo', 'toutes nos offres concernant le velo en groupe '),
(6, 'Massage', 'toutes nos offres concernant le massage');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT pour la table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
