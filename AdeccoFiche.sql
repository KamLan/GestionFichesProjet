-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Janvier 2017 à 07:54
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
  `perim_proj_fiche` text NOT NULL,
  `date_deploi_fiche` date NOT NULL,
  `facteur_succ_fiche` text NOT NULL,
  `port_offre_fiche` text NOT NULL,
  `lignem_fiche` varchar(40) NOT NULL,
  `pedagogie_fiche` varchar(40) NOT NULL,
  `rituel_fiche` varchar(40) NOT NULL,
  `rituely_fiche` text,
  `ritueln_fiche` text,
  `approp_fiche` varchar(40) NOT NULL,
  `mode_apropr_fiche` text,
  `relprof_fiche` text NOT NULL,
  `diffess_fiche` varchar(40) NOT NULL,
  `diffintra_fiche` varchar(40) NOT NULL,
  `diffdig_fiche` varchar(40) NOT NULL,
  `diffelse_fiche` text NOT NULL,
  `syntheff_fiche` varchar(40) NOT NULL,
  `synthdiff_fiche` varchar(40) NOT NULL,
  `synthtime_fiche` varchar(40) NOT NULL,
  `synthimp_fiche` varchar(40) NOT NULL,
  `synthcrea_fiche` varchar(40) NOT NULL,
  `synthmotiv_fiche` text NOT NULL,
  `validation_fiche` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fiches`
--

INSERT INTO `fiches` (`id_fiche`, `titre_projet`, `date_demande_projet`, `pilote_nom_fiche`, `pilote_email_fiche`, `pilote_mobile_fiche`, `pilote_soc_fiche`, `prio_strat_fiche`, `bu_proj_fiche`, `nom_mem_fiche`, `contexte_proj_fiche`, `description_proj_fiche`, `objectif_proj_fiche`, `ciblage_ent_fiche`, `ciblage_cand_fiche`, `ciblage_int_fiche`, `benef_proj_fiche`, `gains_proj_fiche`, `perim_proj_fiche`, `date_deploi_fiche`, `facteur_succ_fiche`, `port_offre_fiche`, `lignem_fiche`, `pedagogie_fiche`, `rituel_fiche`, `rituely_fiche`, `ritueln_fiche`, `approp_fiche`, `mode_apropr_fiche`, `relprof_fiche`, `diffess_fiche`, `diffintra_fiche`, `diffdig_fiche`, `diffelse_fiche`, `syntheff_fiche`, `synthdiff_fiche`, `synthtime_fiche`, `synthimp_fiche`, `synthcrea_fiche`, `synthmotiv_fiche`, `validation_fiche`) VALUES
(1, 'Projet Interface Ajout de projets', '2016-12-30', 'Adouard Camille', 'adouardcamille@hotmail.com', '0614708359', 'The Adecco Group', 'Couvrir toutes les formes d''emploi Accompagner la transformation des compétences Proposer de nouvelles solutions digitales', 'The Adecco Group', 'Sophie Ak Gazeau', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', 'Small', 'General Staffing', 'DRH', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', '2017-02-18', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', 'oui', 'non', 'oui', 'Loremp ipsum dolor sit amet', '', 'oui', 'Loremp ipsum dolor sit amet', 'Loremp ipsum dolor sit amet', 'oui', 'non', 'Site internet BU Réseaux sociaux BU', 'Loremp ipsum dolor sit amet', '1', '2', '3', '3', '5', 'Loremp ipsum dolor sit amet', 'approved');

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
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
