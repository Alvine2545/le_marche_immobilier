-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mai 2023 à 14:04
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `marche_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

DROP TABLE IF EXISTS `actualités`;
CREATE TABLE IF NOT EXISTS `actualités` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrateur_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actualités_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualités`
--

INSERT INTO `actualités` (`id`, `statut`, `photo`, `description`, `reference`, `administrateur_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'ActualitePhotos/IcalG7Uh3HQdBE7OT9ZnPI8cEzdEravnSiyZDIUm.jpg', 'L\'Etat fait une <font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">réduction</font> sur toutes les offres d\'achat de parcelle.', 'Réduction', 1, '2023-05-25 13:30:04', '2023-05-25 13:30:04'),
(2, 1, 'ActualitePhotos/hG9sYBvO67ZMRU6nKU2VliGiRDLzYcd9UaQLJ7PM.jpg', '<p><span style=\"font-size: 18px; color: rgb(255, 0, 0); font-weight: bold; text-decoration-line: underline;\">Appel à la&nbsp;vigilance</span></p><p><span style=\"font-size: 18px;\">Pour la rédaction des contrats de bail, il vous est demandé de faire plus attention aux fraudes.</span></p>', 'Rédaction des actes et contrats de bail', 1, '2023-05-25 13:34:26', '2023-05-25 13:34:43');

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `administrateurs_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AGOSSOU', 'anatofloriane@gmail.com', NULL, '$2y$10$XmG15p4ukiwFsquyVupQyuGFSOoxqrQnl20pb7qJFFwDVUPditjki', NULL, '2023-05-18 15:26:01', '2023-05-18 15:26:01');

-- --------------------------------------------------------

--
-- Structure de la table `bien_immobiliers`
--

DROP TABLE IF EXISTS `bien_immobiliers`;
CREATE TABLE IF NOT EXISTS `bien_immobiliers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reference` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagemain` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_piece` int DEFAULT NULL,
  `chambre_a_coucher` int DEFAULT NULL,
  `salle_bain` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `surface_totale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_habitable` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_min` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_max` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_nuit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_complementaire` tinyint(1) DEFAULT NULL,
  `parking` tinyint(1) DEFAULT NULL,
  `piscine` tinyint(1) DEFAULT NULL,
  `jardin` tinyint(1) DEFAULT NULL,
  `climatiseur` tinyint(1) DEFAULT NULL,
  `gaz` tinyint(1) DEFAULT NULL,
  `chauffage` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `survillance` tinyint(1) DEFAULT NULL,
  `plage` tinyint(1) DEFAULT NULL,
  `autres` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `premium` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `categorie_id` bigint UNSIGNED NOT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `administrateur_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nombre de salle de bain` tinyint(1) DEFAULT NULL,
  `wc` tinyint(1) DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `bien_immobiliers_user_id_foreign` (`user_id`),
  KEY `bien_immobiliers_categorie_id_foreign` (`categorie_id`),
  KEY `bien_immobiliers_type_id_foreign` (`type_id`),
  KEY `bien_immobiliers_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bien_immobiliers`
--

INSERT INTO `bien_immobiliers` (`id`, `reference`, `photo`, `imagemain`, `nbre_piece`, `chambre_a_coucher`, `salle_bain`, `status`, `surface_totale`, `surface_habitable`, `departement`, `ville`, `prix_min`, `prix_max`, `adresse`, `prix_nuit`, `document_complementaire`, `parking`, `piscine`, `jardin`, `climatiseur`, `gaz`, `chauffage`, `internet`, `survillance`, `plage`, `autres`, `premium`, `user_id`, `categorie_id`, `type_id`, `administrateur_id`, `created_at`, `updated_at`, `Nombre de salle de bain`, `wc`, `Description`) VALUES
(1, 'Moi', 'C:\\fakepath\\ex-008 img.jpg', 'biens_en_location/TfZADKM9pdNnE2AfmCfvEu2gPv1OJ0gFhy33K22k.png', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Alibori', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 3, 1, 1, NULL, '2023-05-23 22:48:41', '2023-05-23 22:48:41', NULL, NULL, NULL),
(2, 'Moi', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Abomey', NULL, '200000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 4, 2, 1, NULL, '2023-05-31 01:06:40', '2023-05-31 01:06:40', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bien_immobilier_users`
--

DROP TABLE IF EXISTS `bien_immobilier_users`;
CREATE TABLE IF NOT EXISTS `bien_immobilier_users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `bien_immobilier_id` bigint UNSIGNED NOT NULL,
  `agent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bien_immobilier_users_user_id_foreign` (`user_id`),
  KEY `bien_immobilier_users_bien_immobilier_id_foreign` (`bien_immobilier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bien_offres`
--

DROP TABLE IF EXISTS `bien_offres`;
CREATE TABLE IF NOT EXISTS `bien_offres` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques`
--

DROP TABLE IF EXISTS `caracteristiques`;
CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `caracteristiques`
--

INSERT INTO `caracteristiques` (`id`, `nom`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'reference', 'STRING', 'Désignation du bien', NULL, NULL),
(2, 'photo', 'STRING', 'Désignation du bien', NULL, NULL),
(3, 'imagemain', 'STRING', 'Désignation du bien', NULL, NULL),
(4, 'surface_totale', 'STRING', 'Désignation du bien', NULL, NULL),
(5, 'surface_habitable', 'STRING', 'Désignation du bien', NULL, NULL),
(6, 'prix_min', 'STRING', 'Désignation du bien', NULL, NULL),
(7, 'departement', 'STRING', 'Désignation du bien', NULL, NULL),
(8, 'ville', 'STRING', 'Désignation du bien', NULL, NULL),
(9, 'prix_max', 'STRING', 'Désignation du bien', NULL, NULL),
(10, 'adresse', 'STRING', 'Désignation du bien', NULL, NULL),
(11, 'document_complementaire', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(12, 'prix_nuit', 'STRING', 'Désignation du bien', NULL, NULL),
(13, 'status', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(32, 'wc', 'BOOLEAN', 'wc', '2023-05-20 06:12:36', '2023-05-20 06:12:36'),
(15, 'nbre_piece', 'INTEGER', 'Désignation du bien', NULL, NULL),
(16, 'chambre_a_coucher', 'INTEGER', 'Désignation du bien', NULL, NULL),
(17, 'salle_bain', 'INTEGER', 'Désignation du bien', NULL, NULL),
(18, 'parking', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(19, 'piscine', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(20, 'jardin', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(21, 'climatiseur', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(22, 'gaz', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(23, 'chauffage', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(24, 'internet', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(25, 'surveillance', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(26, 'plage', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(27, 'premium', 'BOOLEAN', 'Désignation du bien', NULL, NULL),
(28, 'autres', 'TEXT', 'Désignation du bien', NULL, NULL),
(30, 'Nombre de salle de bain', 'BOOLEAN', 'Nombre de salle de bain', '2023-05-19 16:00:19', '2023-05-19 16:00:19'),
(33, 'Description', 'TEXT', 'Description du bien', '2023-05-31 01:11:58', '2023-05-31 01:11:58');

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique_type_biens`
--

DROP TABLE IF EXISTS `caracteristique_type_biens`;
CREATE TABLE IF NOT EXISTS `caracteristique_type_biens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_bien_id` bigint UNSIGNED NOT NULL,
  `caracteristique_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `caracteristique_type_biens_type_bien_id_foreign` (`type_bien_id`),
  KEY `caracteristique_type_biens_caacteristique_id_foreign` (`caracteristique_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `caracteristique_type_biens`
--

INSERT INTO `caracteristique_type_biens` (`id`, `type_bien_id`, `caracteristique_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 1, 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `position` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'en vente', NULL, NULL),
(2, 'en location', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `description`, `nom_prenom`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'J\'ai un soucis', NULL, 'Alvine', '90138335', 'alladakaneunice@gmail.com', '2023-05-19 10:11:50', '2023-05-19 10:11:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2023_04_13_093015_create_services_table', 1),
(27, '2023_04_13_093957_create_sponsors_table', 1),
(28, '2023_04_13_094300_create_actualités_table', 1),
(29, '2023_04_13_094622_create_partenaires_table', 1),
(30, '2023_04_13_094652_create_offres_table', 1),
(31, '2023_04_13_094730_create_messages_table', 1),
(32, '2023_04_13_094752_create_visiteurs_table', 1),
(33, '2023_04_13_094826_create_categories_table', 1),
(34, '2023_04_13_094901_create_type_biens_table', 1),
(35, '2023_04_13_094931_create_bien_immobiliers_table', 1),
(36, '2023_04_13_095004_create_paiements_table', 1),
(37, '2023_04_13_095321_create_administrateurs_table', 1),
(38, '2023_04_13_104855_create_bien_offres_table', 1),
(39, '2023_04_13_111225_create_notifications_table', 1),
(40, '2023_05_17_160908_create_caracteristiques_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idUser_to` bigint NOT NULL,
  `idUser_from` bigint DEFAULT NULL,
  `chef_from` tinyint(1) NOT NULL DEFAULT '0',
  `idDirection` bigint DEFAULT NULL,
  `admin_src` tinyint(1) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNotif` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `type_bien_id` bigint UNSIGNED NOT NULL,
  `administrateur_id` bigint UNSIGNED DEFAULT NULL,
  `lien` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offres_user_id_foreign` (`user_id`),
  KEY `offres_type_bien_id_foreign` (`type_bien_id`),
  KEY `offres_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `administrateur_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partenaires_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `name`, `email`, `tel`, `ifu`, `adresse`, `site`, `logo`, `description`, `status`, `deleted_at`, `administrateur_id`, `created_at`, `updated_at`) VALUES
(1, 'UBA', 'uba@gmail.com', '65897545', '1234567894512', 'Aibatin', 'https://uba.com', 'partenaires/muzntlLpvbah0wYUHXnscSSnqaU21hqeTzSg4OKr.png', 'Pas trop loin du pavé', 0, NULL, 1, '2023-05-20 14:20:51', '2023-05-20 14:20:51'),
(2, 'QCT Services', 'qctservices@gmail.com', '68666656', '123456789123', 'Zogbohoué', 'https:://qctservices.com', 'partenaires/CVPCHrS6mQnU4mkDLWZCf7wZHkLXkGZvJaK2CNNr.webp', '300 mètres après le collège clé de la réussite.', 1, NULL, 1, '2023-05-30 23:48:06', '2023-05-30 23:48:19');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrateur_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrateur_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sponsors_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `logo`, `description`, `administrateur_id`, `created_at`, `updated_at`) VALUES
(2, 'Drwintech Incrvty', 'sponsors/Myu2WyAUi1F8hXSMNw3VF858G4XxhyzPRnI7SnV8.png', 'Développement d\'applications\nCybersécurité\nInfogérance', 1, '2023-05-25 13:09:20', '2023-05-25 13:09:20'),
(3, 'Drwintech Inc', 'sponsors/ufGHYZyp6jIAmWbvB87JDBjoqtvISOaJbiYjrgWs.png', 'Développement d\'applications\nCybersécurité\nInfogérance', 1, '2023-05-25 13:09:33', '2023-05-25 13:09:33');

-- --------------------------------------------------------

--
-- Structure de la table `type_biens`
--

DROP TABLE IF EXISTS `type_biens`;
CREATE TABLE IF NOT EXISTS `type_biens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_biens`
--

INSERT INTO `type_biens` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Villa', NULL, NULL),
(2, 'Terrain', NULL, NULL),
(3, 'Appartement', NULL, NULL),
(4, 'Meublé', NULL, NULL),
(5, 'Maison locative', NULL, NULL),
(6, 'Duplex', NULL, NULL),
(7, 'Demeure de charme', NULL, NULL),
(8, 'Local', NULL, NULL),
(9, 'Studio', NULL, '2023-05-25 13:13:32'),
(12, 'Notariale', '2023-05-25 13:13:16', '2023-05-25 13:13:16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameAgence` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etatCompte` tinyint(1) NOT NULL DEFAULT '0',
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrateur_id` int DEFAULT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenoms`, `nameAgence`, `email`, `titre`, `telephone`, `residence`, `photo`, `etatCompte`, `statut`, `email_verified_at`, `password`, `administrateur_id`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'AGOSSOU', 'Deschanel', NULL, 'chani@gmail.com', 'particulier', '6585623', NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-23 22:48:41', '2023-05-23 22:48:41'),
(4, 'SOSSOU', 'Jean', NULL, 'jean@gmail.com', 'Agent Immobilier', '52222356', 'COTONOU', 'partenaires/ZwyLJgme44DU8uQDAXF1el1Mzvm8dRwq5LnyEFaN.png', 1, 1, NULL, '$2y$10$qBb6SC.TztZdkNAxq3Xe1Ov4zHNOICDFkzJCruKWn..Ig9stGIoiu', 1, NULL, NULL, NULL, NULL, '2023-05-30 23:56:14', '2023-05-30 23:56:14');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
