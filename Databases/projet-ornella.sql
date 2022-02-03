-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 fév. 2022 à 12:34
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
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(200) NOT NULL,
  `nom_admin` varchar(30) NOT NULL,
  `prenom_admin` varchar(30) NOT NULL,
  `tel_admin` varchar(30) NOT NULL,
  `role_admin` enum('admin','super','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `username_admin`, `password_admin`, `nom_admin`, `prenom_admin`, `tel_admin`, `role_admin`) VALUES
(1, 'admin', 'superadmin', 'Takam', 'Rushclin', '690139627', 'admin');

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
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id_not` int(11) NOT NULL,
  `id_req` int(11) NOT NULL,
  `id_et` int(11) NOT NULL,
  `message_not` text NOT NULL,
  `statut_not` varchar(300) NOT NULL,
  `date_not` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id_not`, `id_req`, `id_et`, `message_not`, `statut_not`, `date_not`) VALUES
(1, 0, 3, 'Requete envoyee', 'EN COURS', '2022-02-03 07:28:24');

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `id_req` int(11) NOT NULL,
  `id_et` int(11) NOT NULL,
  `date_req` datetime NOT NULL,
  `statut_req` varchar(30) NOT NULL,
  `reponse_req` text NOT NULL,
  `matiere_req` varchar(200) NOT NULL,
  `session_req` varchar(30) NOT NULL,
  `corps_req` text NOT NULL,
  `objet_req` text NOT NULL,
  `img_req` text NOT NULL,
  `date_traitement_req` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `requete`
--

INSERT INTO `requete` (`id_req`, `id_et`, `date_req`, `statut_req`, `reponse_req`, `matiere_req`, `session_req`, `corps_req`, `objet_req`, `img_req`, `date_traitement_req`) VALUES
(12, 0, '2022-01-26 08:22:31', 'REJETE', 'Non Non Non et Non Non no\r\n                                    ', '', 'AUTRE', 'dfvwerrrrrrrrrrrrr', 'Demande de permission', 'logo-large-removebg.png', '2022-02-03 10:58:05'),
(13, 3, '2022-01-26 08:25:03', 'NON FONDEE', 'nfjh\r\n                                    ', '', 'AUTRE', 'dfvwerrrrrrrrrrrrr', 'Demande de permission', 'logo-large-removebg.png', '2022-02-03 06:45:21'),
(14, 3, '2022-01-26 08:39:52', 'REJETE', 'Mon ami, apprend a rediger une requete\r\n                                    ', '', 'AUTRE', '                                        Takam Rushclin                                                                                                            ', 'Demande de permission', 'logo-removebg.png', '2022-02-03 07:04:02'),
(15, 3, '2022-01-26 21:30:11', 'REJETE', 'Votre requete est rejete parce que vous avez mal saisie\r\n                                    ', '', 'AUTRE', 'Demande de requete                                           ', 'Demande de stage academique', 'green_grass_field-2560x1600.jpg', '2022-02-03 06:48:15'),
(19, 3, '2022-01-27 00:34:29', 'TRAITEES', 'C\'est nous qui vous remercions\r\n                                    ', 'Bio112 => Introduction a la biologie', 'CC', '', '', 'DTEK Investment Logo - Black with White Background - 5000x5000.png', '2022-02-03 10:54:42'),
(20, 2, '2022-01-27 00:42:58', 'REJETE', '', 'Bio112 => Introduction a la biologie', 'NORMALE', '', '', 'DTEK Investement Logo - Black with White Background - 5000x5000.png', '0000-00-00 00:00:00'),
(21, 3, '2022-02-03 07:07:17', 'EN COURS', '', 'INF111 => Introduction aux algorithmes', 'NORMALE', '', '', '-399016880.jpg', '0000-00-00 00:00:00'),
(22, 3, '2022-02-03 07:21:21', 'EN COURS', '', 'INF111 => Introduction aux algorithmes', 'NORMALE', '', '', '-399016880.jpg', '0000-00-00 00:00:00'),
(23, 3, '2022-02-03 07:27:29', 'EN COURS', '', 'INF111 => Introduction aux algorithmes', 'NORMALE', '', '', '-399016880.jpg', '0000-00-00 00:00:00'),
(24, 3, '2022-02-03 07:28:24', 'EN COURS', '', 'INF111 => Introduction aux algorithmes', 'NORMALE', '', '', '-399016880.jpg', '0000-00-00 00:00:00'),
(25, 3, '2022-02-03 09:35:09', 'TRAITEES', 'Votre requete a bien ete traite et vous pouvez prendre votre conge\r\n                                    ', '', 'AUTRE', 'J\'aimerais faire une demande de permission pour une duree de 2 semaine\r\n            Dans l\'optique que ca retienne votre attention, je vous pris de me l\'accorder                                                                     ', 'Demande de permission pour 2 semaines', 'green_grass_field-2560x1600.jpg', '2022-02-03 10:54:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
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
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
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
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
