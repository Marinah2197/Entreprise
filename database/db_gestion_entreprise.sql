-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 juil. 2023 à 15:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gestion_entreprise`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `date_embauche` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `code_acces` varchar(45) NOT NULL,
  `poste` varchar(45) NOT NULL,
  `type_utilisateur` varchar(45) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `matricule`, `nom`, `prenom`, `date_embauche`, `email`, `code_acces`, `poste`, `type_utilisateur`, `is_active`, `date_modification`) VALUES
(15, '746H-F', 'RAZAFIMANDIMBY', 'Marinah', '2023-07-17', 'razafmandimbymarinah@gmail.fr', 'NuCQZiYFar', 'Developpeur', 'administrateur', 1, NULL),
(17, '002', 'RAZAFIMANDIMBY', 'Aina', '2023-07-17', 'razafmandimbymarinah@gmail.com', '23HEqPV4wU', 'Développeur', 'employe', 0, NULL),
(20, '003', 'RAZAFIMANDIMBY', 'Malalaniaina', '2023-07-17', 'Marinah@gmail.com', 'eJDFPl3xUn', 'Stagiaire', 'employe', 1, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `util_matricule_UNIQUE` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
