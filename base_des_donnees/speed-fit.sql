-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Février 2017 à 16:20
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
(71, 'moniteur velo', NULL, 5, 'velo11.jpg'),
(75, 'le logo du site', NULL, 7, 'logo.png'),
(76, 'enfant kararté', NULL, 4, 'art1-m.jpg'),
(77, 'centre judo', NULL, 4, 'art3-m.jpg'),
(78, 'groupe kung fu', NULL, 4, 'art2-m.jpg'),
(79, 'monitrice judo', NULL, 4, 'art4-m.jpg'),
(80, 'centre judo', NULL, 4, 'art5-m.jpg'),
(81, 'centre enfant', NULL, 4, 'art6-m.jpg'),
(82, 'moniteur karaté', NULL, 4, 'art7-m.jpg'),
(83, 'ceinture noire', NULL, 4, 'art8-m.jpg'),
(84, 'groupe art martiaux', NULL, 4, 'art9-m.jpg'),
(85, 'centre ', NULL, 4, 'art10-m.jpg'),
(86, 'a vos marque fille', NULL, 3, 'course_a_pied-m.jpg'),
(87, 'groupe avec balle de tennis', NULL, 3, 'course_a_pied2-m.jpg'),
(88, 'fille course a pied', NULL, 3, 'course_a_pied3-m.jpg'),
(89, 'homme et fille en course', NULL, 3, 'course_a_pied4-m.jpg'),
(90, 'groupe course a pied', NULL, 3, 'course_a_pied5-m.jpg'),
(91, 'groupe course', NULL, 3, 'course_a_pied6-m.jpg'),
(92, 'trois personne course', NULL, 3, 'course_a_pied7-m.jpg'),
(93, 'groupe aventure course', NULL, 3, 'course_a_pied8-m.jpg'),
(94, 'fille course', NULL, 3, 'course_a_pied9-m.jpg'),
(95, 'pied', NULL, 3, 'course_a_pied10-m.jpg'),
(96, 'materiel gym', NULL, 2, 'gym-m.jpg'),
(97, 'tapie gym', NULL, 2, 'gym1-m.jpg'),
(98, 'tapy jeune ', NULL, 2, 'gym2-m.jpg'),
(99, 'gym fille', NULL, 2, 'gym3-m.jpg'),
(100, 'altere gym', NULL, 2, 'gym4-m.jpg'),
(101, 'fille en pompe', NULL, 2, 'gym5-m.jpg'),
(102, 'moniteur gym 1', NULL, 2, 'gym6-m.jpg'),
(103, 'gym', NULL, 2, 'gym7-m.jpg'),
(104, 'fille avec altere ', NULL, 2, 'gym8-m.jpg'),
(105, 'fille sexy avec altere', NULL, 2, 'gym9-m.jpg'),
(106, 'gym des vieux', NULL, 2, 'gym10-m.jpg'),
(107, 'materiel dehors', NULL, 2, 'gym11-m.jpg'),
(108, 'fille au gym', NULL, 2, 'gym12-m.jpg'),
(109, 'massotherapeute', NULL, 6, 'massage1-m.jpg'),
(110, 'massage avec caillou', NULL, 6, 'massage2-m.jpg'),
(111, 'massage', NULL, 6, 'massage3-m.jpg'),
(112, 'massage pied', NULL, 6, 'massage4-m.jpg'),
(113, 'massage dos', NULL, 6, 'massage5-m.jpg'),
(114, 'massage epaule', NULL, 6, 'massage6-m.jpg'),
(115, 'massage caillou 2', NULL, 6, 'massage8-m.jpg'),
(116, 'banner de la natation', NULL, 1, 'natation1-m.jpg'),
(117, 'natation vieillard', NULL, 1, 'natation2-m.jpg'),
(118, 'natation famille', NULL, 1, 'natation3-m.jpg'),
(119, 'natation enfant', NULL, 1, 'natation4-m.jpg'),
(120, 'natation jeune', NULL, 1, 'natation5-m.jpg'),
(121, 'natation enfant 2', NULL, 1, 'natation6-m.jpg'),
(122, 'natation petite fille', NULL, 1, 'natation7-m.jpg'),
(123, 'natation centre', NULL, 1, 'natation8-m.jpg'),
(124, 'natation groupe', NULL, 1, 'natation9-m.jpg'),
(125, 'groupe velo', NULL, 5, 'velo1-m.jpg'),
(126, 'velo parc', NULL, 5, 'velo2-m.jpg'),
(127, 'velo en famille', NULL, 5, 'velo3-m.jpg'),
(128, 'groupe velo', NULL, 5, 'velo4-m.jpg'),
(129, 'famille en velo', NULL, 5, 'velo5-m.jpg'),
(130, 'moniteur en velo', NULL, 5, 'velo6-m.jpg'),
(131, 'discussion en velo', NULL, 5, 'velo7-m.jpg'),
(132, 'velo avec  moniteur', NULL, 5, 'velo8-m.jpg'),
(133, 'velo plage', NULL, 5, 'velo9-m.jpg'),
(134, 'velo route', NULL, 5, 'velo10-m.jpg'),
(135, 'moniteur velo', NULL, 5, 'velo11-m.jpg'),
(136, 'le logo du site', NULL, 7, 'logo.png');

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
