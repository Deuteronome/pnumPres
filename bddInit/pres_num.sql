-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 19 sep. 2023 à 10:12
-- Version du serveur : 8.0.34-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pres_num`
--

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`id`, `name`) VALUES
(1, 'home_carousel'),
(2, 'session_carousel'),
(3, 'pro_carousel'),
(4, 'skill_carousel'),
(5, 'workshop_carousel');

-- --------------------------------------------------------

--
-- Structure de la table `carousel_pictures`
--

CREATE TABLE `carousel_pictures` (
  `carousel_id` int NOT NULL,
  `pictures_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carousel_pictures`
--

INSERT INTO `carousel_pictures` (`carousel_id`, `pictures_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(5, 18),
(5, 19),
(5, 20),
(5, 21);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230911134441', '2023-09-11 15:45:03', 2554),
('DoctrineMigrations\\Version20230913100844', '2023-09-13 12:09:04', 12965);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nav_items`
--

CREATE TABLE `nav_items` (
  `id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nav_items`
--

INSERT INTO `nav_items` (`id`, `label`, `path`) VALUES
(1, 'Vue d\'ensemble', 'app_main'),
(3, 'Les ateliers', 'app_sessions'),
(4, 'Projet professionnel', 'app_professional'),
(5, 'Compétences transversales', 'app_skills'),
(6, 'Workshop', 'app_workshop');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` int NOT NULL DEFAULT '2000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `path`, `delay`) VALUES
(1, 'assets/pictures/homeCarousel/bannerPN.jpg', 5000),
(2, 'assets/pictures/homeCarousel/festNum1.jpg', 2000),
(3, 'assets/pictures/homeCarousel/festNum3.jpg', 2000),
(4, 'assets/pictures/homeCarousel/festNum11.jpg', 2000),
(5, 'assets/pictures/homeCarousel/intOreegami.jpg', 2000),
(6, 'assets/pictures/homeCarousel/intSOPHT3.jpg', 2000),
(7, 'assets/pictures/homeCarousel/jury3.jpg', 2000),
(8, 'assets/pictures/sessionCarousel/bannerSession.jpg', 5000),
(9, 'assets/pictures/sessionCarousel/ardGroupe.jpg', 2000),
(10, 'assets/pictures/sessionCarousel/3DArmFin.jpg', 2000),
(11, 'assets/pictures/sessionCarousel/robotsLight.jpg', 2000),
(12, 'assets/pictures/sessionCarousel/ardWeetny\r\n.jpg', 2000),
(13, 'assets/pictures/proCarousel/proBanner.jpg\r\n', 5000),
(14, 'assets/pictures/proCarousel/574Visit.jpg', 2000),
(15, 'assets/pictures/proCarousel/ecommerceVisit.jpg', 2000),
(16, 'assets/pictures/proCarousel/intSOPHT2.jpg', 2000),
(17, 'assets/pictures/proCarousel/m2iVisit.jpg', 2000),
(18, 'assets/pictures/workshopCarousel/workshopBanner.jpg', 2000),
(19, 'assets/pictures/workshopCarousel/ardBritney.jpg', 2000),
(20, 'assets/pictures/workshopCarousel/mdeMetiers.jpg', 2000),
(21, 'assets/pictures/workshopCarousel/ardValentin.jpg', 2000),
(22, 'assets/pictures/skillCarousel/skillBanner.jpg', 5000),
(23, 'assets/pictures/skillCarousel/decLaser.jpg', 2000),
(24, 'assets/pictures/skillCarousel/pdnSkill2.jpg', 2000),
(25, 'assets/pictures/skillCarousel/switch.jpg', 2000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carousel_pictures`
--
ALTER TABLE `carousel_pictures`
  ADD PRIMARY KEY (`carousel_id`,`pictures_id`),
  ADD KEY `IDX_53C88DDAC1CE5B98` (`carousel_id`),
  ADD KEY `IDX_53C88DDABC415685` (`pictures_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `nav_items`
--
ALTER TABLE `nav_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nav_items`
--
ALTER TABLE `nav_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carousel_pictures`
--
ALTER TABLE `carousel_pictures`
  ADD CONSTRAINT `FK_53C88DDABC415685` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53C88DDAC1CE5B98` FOREIGN KEY (`carousel_id`) REFERENCES `carousel` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
