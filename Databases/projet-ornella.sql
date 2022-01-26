-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 jan. 2022 à 23:27
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-ornella`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(200) NOT NULL,
  `nom_admin` varchar(30) NOT NULL,
  `prenom_admin` varchar(30) NOT NULL,
  `tel_admin` varchar(30) NOT NULL,
  `role_admin` enum('admin','super','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_et` int(11) NOT NULL,
  `nom_et` varchar(30) NOT NULL,
  `prenom_et` varchar(30) NOT NULL,
  `sexe_et` enum('Masculin','Feminin','','') NOT NULL,
  `faculte_et` enum('FS','FSMJP','FASA','FAC LETTRE','SECO-PRO','MEDECINE') NOT NULL,
  `specialite_et` enum('GENIE LOGICIEL','MECA','MEDECINE','') NOT NULL,
  `niveau_et` enum('1','2','3','4') NOT NULL,
  `matricule_et` varchar(30) NOT NULL,
  `email_et` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_et`, `nom_et`, `prenom_et`, `sexe_et`, `faculte_et`, `specialite_et`, `niveau_et`, `matricule_et`, `email_et`) VALUES
(1, 'Takam', 'Rushclin', 'Masculin', 'FS', 'GENIE LOGICIEL', '3', 'CN-UDS-19SCI1192', 'takamrushclin@gmail.com'),
(2, 'Ouandji', 'Merveille', 'Feminin', 'FASA', 'GENIE LOGICIEL', '1', 'CM-UDS-19SCI1192', 'ouandji@gmail.com'),
(3, 'Takam', 'Rushclin', 'Masculin', 'SECO-PRO', 'MECA', '2', 'user', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_mat` int(11) NOT NULL,
  `libelle_mat` text NOT NULL,
  `coef_mat` int(30) NOT NULL,
  `filiere_mat` enum('Informatique','Biochimie','Biologie Animale','Bio-Chimie','Biologie Vegetale','Mathematiques','Physique') NOT NULL,
  `specialite_mat` enum('Genie logiciel','Elctronique','Mecatronique','Science de la terre','BA') NOT NULL,
  `code_mat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_not` int(11) NOT NULL,
  `message_not` text NOT NULL,
  `statut_not` enum('En cours','Rejetee','Non fondee','traitee') NOT NULL,
  `date_not` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `id_req` int(11) NOT NULL,
  `id_et` int(11) NOT NULL,
  `date_req` datetime NOT NULL,
  `statut_req` enum('En cours','Rejete','Non fondee','Traite') NOT NULL,
  `institule_req` text NOT NULL,
  `matiere_req` varchar(200) NOT NULL,
  `session_req` enum('Normale','CC','','') NOT NULL,
  `date_traitement_req` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_et`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_mat`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_not`);

--
-- Index pour la table `requete`
--
ALTER TABLE `requete`
  ADD PRIMARY KEY (`id_req`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_et` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
