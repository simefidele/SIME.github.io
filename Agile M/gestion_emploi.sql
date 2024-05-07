-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 mai 2024 à 17:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `matricule_adm` varchar(10) NOT NULL,
  `nom_adm` varchar(50) NOT NULL,
  `password_adm` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`matricule_adm`, `nom_adm`, `password_adm`) VALUES
('admin1', 'admin', 0x24327924313024314c784f717174456665483943524d69436c3968792e465a73414a41626f7244316142316a694b707478383751376d6f464e473469);

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `jour` varchar(15) NOT NULL,
  `dispo_de` time NOT NULL,
  `dispo_a` time NOT NULL,
  `matricule_ens` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES
('lundi', '00:00:08', '00:00:12', 'ens1'),
('lundi', '00:00:08', '00:00:12', 'ens1'),
('jeudi', '00:00:07', '00:00:18', 'ens1'),
('vendredi', '00:00:07', '00:00:18', 'ens1'),
('lundi', '00:00:08', '00:00:12', 'ens1'),
('jeudi', '00:00:07', '00:00:18', 'ens1'),
('vendredi', '00:00:07', '00:00:18', 'ens1'),
('lundi', '00:00:08', '00:00:12', 'ens1'),
('jeudi', '00:00:07', '00:00:18', 'ens1'),
('vendredi', '00:00:07', '00:00:18', 'ens1'),
('lundi', '08:00:00', '14:00:00', 'ens1'),
('lundi', '08:00:00', '12:00:00', 'ens2'),
('mardi', '06:02:00', '10:00:00', 'ens2'),
('lundi', '06:00:00', '12:00:00', 'ens3');

-- --------------------------------------------------------

--
-- Structure de la table `emploi_de_temps`
--

CREATE TABLE `emploi_de_temps` (
  `semaine` int(11) NOT NULL,
  `horaire` varchar(20) NOT NULL,
  `lundi` varchar(150) NOT NULL,
  `mardi` varchar(150) NOT NULL,
  `mercredi` varchar(150) NOT NULL,
  `jeudi` varchar(150) NOT NULL,
  `vendredi` varchar(150) NOT NULL,
  `samedi` varchar(150) NOT NULL,
  `id_salle` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `emploi_de_temps`
--

INSERT INTO `emploi_de_temps` (`semaine`, `horaire`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `id_salle`) VALUES
(1, '07:30:00-09:30:00', 'UML-Kua Loic', 'Cloud Computing-Tetakoutchoum Idriss', '', '', '', '', 'L1'),
(2, '09:30:00-11:30:00', 'Methode Agile-MBAM Freddy', '', '', '', '', '', 'L1'),
(3, '12:45:00-14:45:00', '', '', '', '', '', '', 'L1'),
(4, '14:45:00-16:45:00', '', '', '', '', '', '', 'L1');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `matricule_ens` varchar(10) NOT NULL,
  `nom_ens` varchar(30) NOT NULL,
  `matiere_ens` varchar(30) NOT NULL,
  `password_ens` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`matricule_ens`, `nom_ens`, `matiere_ens`, `password_ens`) VALUES
('ens1', 'MBAM Freddy', 'Methode Agile', 0x243279243130244368504574704f716e5555444c354b526630362e5075696b33634d58356264495645425348333848635a5479433070634e79366869),
('ens2', 'Tetakoutchoum Idriss', 'Cloud Computing', 0x2432792431302431496e4c6b3431536e6a7268703568494a635847354f525646637a5932645a5132487a303439784778314a68645944737067545847),
('ens3', 'Kua Loic', 'UML', 0x243279243130244a6f7252714258624471744c71305772414e4d33644f4f764675425a7239434c45772f2f7a592e3570526c796649666f7536774132);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule_etd` varchar(10) NOT NULL,
  `nom_etd` varchar(30) NOT NULL,
  `id_salle` varchar(10) NOT NULL,
  `password_etd` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule_etd`, `nom_etd`, `id_salle`, `password_etd`) VALUES
('GLL1A', 'Codd Pleg', 'L1', 0x636f6464),
('GLL1A1', 'Sime Fidel', 'L2', 0x243279243130246355724b6b324e734639617551777979396f45694b6568782f37784b475071746b3865386e455a773848674a547554304b62706b2e),
('GLL1A2', 'Petit Zepe', 'L2', 0x2432792431302475376f525a6d7852767a32626e5846686f2f744d2f2e663336725a726b7935506268617a3547375a49675a6a542e6d455769334561);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` varchar(10) NOT NULL,
  `nom_salle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom_salle`) VALUES
('L1', 'Niveau 1'),
('L2', 'Niveau 2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`matricule_adm`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD KEY `disponibilite_ibfk_1` (`matricule_ens`);

--
-- Index pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  ADD PRIMARY KEY (`semaine`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`matricule_ens`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule_etd`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  MODIFY `semaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD CONSTRAINT `disponibilite_ibfk_1` FOREIGN KEY (`matricule_ens`) REFERENCES `enseignant` (`matricule_ens`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  ADD CONSTRAINT `emploi_de_temps_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
