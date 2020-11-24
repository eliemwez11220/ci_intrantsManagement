-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 18 oct. 2020 à 19:52
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `intrants_management_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_categories`
--

CREATE TABLE `tb_im_categories` (
  `categorie_id` int(11) NOT NULL,
  `designation` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_categories`
--

INSERT INTO `tb_im_categories` (`categorie_id`, `designation`) VALUES
(1, 'Aliments'),
(2, 'Legumes'),
(3, 'Fruits'),
(4, 'Engrais'),
(5, 'Agriculture'),
(6, 'Elevage');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_demandes`
--

CREATE TABLE `tb_im_demandes` (
  `demande_id` int(11) NOT NULL,
  `benef_nom` varchar(75) NOT NULL,
  `benef_postnom` varchar(75) NOT NULL,
  `benef_prenom` varchar(75) DEFAULT NULL,
  `benef_phone` varchar(25) DEFAULT NULL,
  `benef_adresse` varchar(25) DEFAULT NULL,
  `benef_sexe` varchar(15) DEFAULT NULL,
  `qte_demandee` int(11) DEFAULT NULL,
  `date_demandee` date DEFAULT NULL,
  `intrant_sid` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_demandes`
--

INSERT INTO `tb_im_demandes` (`demande_id`, `benef_nom`, `benef_postnom`, `benef_prenom`, `benef_phone`, `benef_adresse`, `benef_sexe`, `qte_demandee`, `date_demandee`, `intrant_sid`, `date_ajout`, `date_modif`) VALUES
(1, 'Rubuz', 'mwez', 'elie', '0821733330', 'kilobelobe', NULL, 120, '2020-10-18', 2, '2020-10-18 19:16:21', '0000-00-00 00:00:00'),
(2, 'Mwila', 'ngoie', 'betty', '0976300163', 'Golf Lido; Lubumbashi', NULL, 90, '2020-10-18', 2, '2020-10-18 19:22:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_entrees`
--

CREATE TABLE `tb_im_entrees` (
  `entree_id` int(11) NOT NULL,
  `fss_nom` varchar(75) NOT NULL,
  `fss_postnom` varchar(75) NOT NULL,
  `fss_prenom` varchar(75) DEFAULT NULL,
  `fss_phone` varchar(25) DEFAULT NULL,
  `fss_adresse` varchar(25) DEFAULT NULL,
  `qte_entree` int(11) DEFAULT NULL,
  `date_entree` date DEFAULT NULL,
  `intrant_sid` int(11) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_entrees`
--

INSERT INTO `tb_im_entrees` (`entree_id`, `fss_nom`, `fss_postnom`, `fss_prenom`, `fss_phone`, `fss_adresse`, `qte_entree`, `date_entree`, `intrant_sid`, `date_ajout`, `date_modif`) VALUES
(1, 'Mwambayi', 'kindu', 'Elie ', '0858533285', 'kilobelobe, kampamba, bel', 25, '2020-10-18', 1, '2020-10-18 18:37:30', '0000-00-00 00:00:00'),
(2, 'Mwambayi', 'kindu', 'Elie ', '0858533285', 'kilobelobe, kampamba, bel', 15, '2020-10-17', 2, '2020-10-18 18:38:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_intrants`
--

CREATE TABLE `tb_im_intrants` (
  `intrant_id` int(11) NOT NULL,
  `libelle` varchar(75) NOT NULL,
  `qte_stock` int(11) DEFAULT NULL,
  `categorie_sid` varchar(75) DEFAULT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_intrants`
--

INSERT INTO `tb_im_intrants` (`intrant_id`, `libelle`, `qte_stock`, `categorie_sid`, `date_ajout`, `date_modif`) VALUES
(1, 'Riz', 175, 'Aliments', '2020-10-18 17:51:23', '0000-00-00 00:00:00'),
(2, 'Maiza', 0, 'Aliments', '2020-10-18 17:52:53', '2020-10-18 17:58:33');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-10-18 17:48:47', 'active', 'global/img/avatars/IMG_20200309_110637_241.jpg', '2020-09-21 12:06:49', 'admin', '2020010'),
(3, 'Paola Nsomp', 'paola', '$2y$12$NdMOM0tNdOyTxWRB1nZ31.Duy/A16/Ltq/BigMF05ANJ74D/Jw7IC', 'paola@gmail.com', 'Femme', '+2430975556941', 'user', '2020-10-18 17:40:01', '2020-10-18 17:51:53', 'active', NULL, '2020-10-18 19:00:00', 'logisticen', '1122001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_im_categories`
--
ALTER TABLE `tb_im_categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Index pour la table `tb_im_demandes`
--
ALTER TABLE `tb_im_demandes`
  ADD PRIMARY KEY (`demande_id`);

--
-- Index pour la table `tb_im_entrees`
--
ALTER TABLE `tb_im_entrees`
  ADD PRIMARY KEY (`entree_id`);

--
-- Index pour la table `tb_im_intrants`
--
ALTER TABLE `tb_im_intrants`
  ADD PRIMARY KEY (`intrant_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_im_categories`
--
ALTER TABLE `tb_im_categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tb_im_demandes`
--
ALTER TABLE `tb_im_demandes`
  MODIFY `demande_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_im_entrees`
--
ALTER TABLE `tb_im_entrees`
  MODIFY `entree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_im_intrants`
--
ALTER TABLE `tb_im_intrants`
  MODIFY `intrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
