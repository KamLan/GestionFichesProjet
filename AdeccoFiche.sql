-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 23 Décembre 2016 à 15:31
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `AdeccoFiche`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiches`
--

CREATE TABLE `fiches` (
  `id_fiche` int(11) NOT NULL,
  `titre_projet` varchar(40) NOT NULL,
  `date_demande_projet` date NOT NULL,
  `pilote_nom_fiche` varchar(40) NOT NULL,
  `pilote_email_fiche` varchar(40) NOT NULL,
  `pilote_mobile_fiche` varchar(10) NOT NULL,
  `pilote_soc_fiche` varchar(40) NOT NULL,
  `prio_strat_fiche` text NOT NULL,
  `bu_proj_fiche` varchar(40) NOT NULL,
  `nom_mem_fiche` varchar(40) NOT NULL,
  `contexte_proj_fiche` text NOT NULL,
  `description_proj_fiche` text NOT NULL,
  `objectif_proj_fiche` text NOT NULL,
  `ciblage_ent_fiche` varchar(40) NOT NULL,
  `ciblage_cand_fiche` varchar(40) NOT NULL,
  `ciblage_int_fiche` varchar(40) NOT NULL,
  `benef_proj_fiche` text NOT NULL,
  `gains_proj_fiche` text NOT NULL,
  `perim_proj_fiche` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fiches`
--

INSERT INTO `fiches` (`id_fiche`, `titre_projet`, `date_demande_projet`, `pilote_nom_fiche`, `pilote_email_fiche`, `pilote_mobile_fiche`, `pilote_soc_fiche`, `prio_strat_fiche`, `bu_proj_fiche`, `nom_mem_fiche`, `contexte_proj_fiche`, `description_proj_fiche`, `objectif_proj_fiche`, `ciblage_ent_fiche`, `ciblage_cand_fiche`, `ciblage_int_fiche`, `benef_proj_fiche`, `gains_proj_fiche`, `perim_proj_fiche`) VALUES
(17, 'This is a full test', '2016-12-23', 'Adouard', 'adouardcamille@hotmail.com', '0614708359', 'Adecco Groupe', 'Couvrir toutes les formes d''emploi Accompagner la transformation des compétences Proposer de nouvelles solutions digitales', 'Adecco Médical', 'Manager', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet', 'Large', 'Tous profils', 'Autres', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet', 'Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet'),
(18, 'Nouvelle Page Adecco', '2016-12-24', 'Adouard', 'adouardcamille@hotmail.com', '0614708359', 'Adecco', 'Couvrir toutes les formes d''emploi  ', 'The Adecco Group', 'Sophie', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet', 'Small', 'Tous profils', 'DRH', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet', 'Lorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor ametLorem ipsum sit dolor amet');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fiches`
--
ALTER TABLE `fiches`
  ADD PRIMARY KEY (`id_fiche`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fiches`
--
ALTER TABLE `fiches`
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
