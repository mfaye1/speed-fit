-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Mars 2017 à 14:08
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
  `image` varchar(256) DEFAULT NULL,
  `image_h` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `category_id`, `image`, `image_h`) VALUES
(1, 'enfant kararté', NULL, 4, 'art1.jpg', '4'),
(3, 'groupe kung fu', NULL, 4, 'art2.jpg', NULL),
(2, 'centre judo', NULL, 4, 'art3.jpg', NULL),
(5, 'monitrice judo', NULL, 4, 'art4.jpg', NULL),
(6, 'centre judo', NULL, 4, 'art5.jpg', NULL),
(8, 'centre enfant', NULL, 4, 'art6.jpg', NULL),
(10, 'moniteur karaté', NULL, 4, 'art7.jpg', NULL),
(11, 'ceinture noire', NULL, 4, 'art8.jpg', NULL),
(12, 'groupe art martiaux', NULL, 4, 'art9.jpg', NULL),
(13, 'centre ', NULL, 4, 'art10.jpg', NULL),
(14, 'a vos marque fille', NULL, 3, 'course_a_pied.jpg', NULL),
(15, 'groupe avec balle de tennis', NULL, 3, 'course_a_pied2.jpg', NULL),
(16, 'fille course a pied', NULL, 3, 'course_a_pied3.jpg', NULL),
(17, 'homme et fille en course', NULL, 3, 'course_a_pied4.jpg', NULL),
(18, 'groupe course a pied', NULL, 3, 'course_a_pied5.jpg', NULL),
(19, 'groupe course', NULL, 3, 'course_a_pied6.jpg', NULL),
(20, 'trois personne course', NULL, 3, 'course_a_pied7.jpg', NULL),
(21, 'groupe aventure course', NULL, 3, 'course_a_pied8.jpg', NULL),
(22, 'fille course', NULL, 3, 'course_a_pied9.jpg', NULL),
(23, 'pied', NULL, 3, 'course_a_pied10.jpg', NULL),
(24, 'materiel gym', NULL, 2, 'gym.jpg', NULL),
(25, 'tapie gym', NULL, 2, 'gym1.jpg', NULL),
(26, 'tapy jeune ', NULL, 2, 'gym2.jpg', NULL),
(27, 'gym fille', NULL, 2, 'gym3.jpg', NULL),
(28, 'altere gym', NULL, 2, 'gym4.jpg', NULL),
(29, 'fille en pompe', NULL, 2, 'gym5.jpg', NULL),
(30, 'moniteur gym 1', NULL, 2, 'gym6.jpg', NULL),
(31, 'gym', NULL, 2, 'gym7.jpg', NULL),
(34, 'fille avec altere ', NULL, 2, 'gym8.jpg', NULL),
(35, 'fille sexy avec altere', NULL, 2, 'gym9.jpg', NULL),
(36, 'gym des vieux', NULL, 2, 'gym10.jpg', NULL),
(37, 'materiel dehors', NULL, 2, 'gym11.jpg', NULL),
(38, 'fille au gym', NULL, 2, 'gym12.jpg', NULL),
(39, 'massotherapeute', NULL, 6, 'massage1.jpg', NULL),
(40, 'massage avec caillou', NULL, 6, 'massage2.jpg', NULL),
(41, 'massage', NULL, 6, 'massage3.jpg', NULL),
(42, 'massage pied', NULL, 6, 'massage4.jpg', NULL),
(43, 'massage dos', NULL, 6, 'massage5.jpg', NULL),
(45, 'massage epaule', NULL, 6, 'massage6.jpg', NULL),
(47, 'massage caillou 2', NULL, 6, 'massage8.jpg', NULL),
(50, 'banner de la natation', NULL, 1, 'natation1.jpg', NULL),
(51, 'natation vieillard', NULL, 1, 'natation2.jpg', NULL),
(52, 'natation famille', NULL, 1, 'natation3.jpg', NULL),
(53, 'natation enfant', NULL, 1, 'natation4.jpg', NULL),
(54, 'natation jeune', NULL, 1, 'natation5.jpg', NULL),
(55, 'natation enfant 2', NULL, 1, 'natation6.jpg', NULL),
(56, 'natation petite fille', NULL, 1, 'natation7.jpg', NULL),
(57, 'natation centre', NULL, 1, 'natation8.jpg', NULL),
(60, 'natation groupe', NULL, 1, 'natation9.jpg', NULL),
(61, 'groupe velo', NULL, 5, 'velo1.jpg', NULL),
(62, 'velo parc', NULL, 5, 'velo2.jpg', NULL),
(63, 'velo en famille', NULL, 5, 'velo3.jpg', NULL),
(64, 'groupe velo', NULL, 5, 'velo4.jpg', NULL),
(65, 'famille en velo', NULL, 5, 'velo5.jpg', NULL),
(66, 'moniteur en velo', NULL, 5, 'velo6.jpg', NULL),
(67, 'discussion en velo', NULL, 5, 'velo7.jpg', NULL),
(68, 'velo avec  moniteur', NULL, 5, 'velo8.jpg', NULL),
(69, 'velo plage', NULL, 5, 'velo9.jpg', NULL),
(70, 'velo route', NULL, 5, 'velo10.jpg', NULL),
(71, 'moniteur velo', NULL, 5, 'velo11.jpg', NULL),
(75, 'le logo du site', NULL, 7, 'logo.png', NULL),
(136, 'le logo du site', NULL, 7, 'logo.png', NULL);

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
(6, 'Massage', 'toutes nos offres concernant le massage'),
(7, 'logo', 'le logo du site');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT pour la table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
