-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 sep. 2023 à 14:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mycoach`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `numero_salle` int NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `nom_salle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numero_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`numero_salle`, `adresse`, `ville`, `code_postal`, `nom_salle`) VALUES
(1, '15 chemin de l\'église', 'Albi', '81000', 'Beregovoy'),
(2, '13 Avenue du Chateau d\'eau', 'Fonsorbes', '31470', 'Gomme'),
(4, '23 Boulevard de Strasbourd', 'Toulouse', '31000', 'Moulin'),
(6, '12 Rue du Chêne Vert', 'Labèges', '31670', 'Marge'),
(7, '59 Rue de la République', 'Blagnac', '31700', 'Vers');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `id_seance` int NOT NULL AUTO_INCREMENT,
  `difficulte` varchar(50) NOT NULL,
  `numero_salle` int NOT NULL,
  `jour_seance` varchar(30) NOT NULL,
  `heure_seance` varchar(50) NOT NULL,
  `id_sport` int NOT NULL,
  PRIMARY KEY (`id_seance`),
  KEY `id_sport` (`id_sport`),
  KEY `numero_salle` (`numero_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `difficulte`, `numero_salle`, `jour_seance`, `heure_seance`, `id_sport`) VALUES
(1, 'Débutant', 4, 'Lundi', '8h-10h', 1),
(2, 'Amateur', 7, 'Lundi', '12h-13h', 3),
(3, 'Expert', 2, 'Lundi', '14h-16h', 2),
(4, 'Expert', 4, 'Mardi', '9h-10h', 5),
(5, 'Expert', 4, 'Mardi', '13h-15h', 6),
(10, 'Débutant', 1, 'Mercredi', '10h-11h', 1),
(11, 'Amateur', 2, 'Mercredi', '15h-16h', 3),
(12, 'Expert', 6, 'Jeudi', '11h-13h', 2),
(13, 'Débutant', 2, 'Jeudi', '16h-17h', 1),
(14, 'Amateur', 6, 'Vendredi', '9h-10h', 3),
(15, 'Expert', 7, 'Vendredi', '14h-16h', 5),
(16, 'Amateur', 2, 'Samedi', '10h-11h', 3),
(27, 'Débutant', 1, 'Samedi', '15h-16h', 1),
(28, 'Expert', 1, 'Dimanche', '11h-13h', 2),
(29, 'Amateur', 2, 'Dimanche', '16h-17h', 4);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

DROP TABLE IF EXISTS `sport`;
CREATE TABLE IF NOT EXISTS `sport` (
  `id_sport` int NOT NULL AUTO_INCREMENT,
  `nom_sport` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sport`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id_sport`, `nom_sport`) VALUES
(1, 'Yoga'),
(2, 'HIIT Intense'),
(3, 'Cardio'),
(4, 'Musculation'),
(5, 'Boxe'),
(6, 'Arts martiaux');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `date_inscription`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@example.com', '$2y$12$rQvAoH6I7SY0ijHTLqts2uEFvz0mczx3tkiQZi3qS.VY2fhKST6c2', '2023-09-29'),
(2, 'Martin', 'Marie', 'marie.martin@example.com', '$2y$12$P9eDlFQcr3vKcFnR0lqMeeEwKQsAMIfk7QOpF5Fw3UsdEChcOLyyg', '2023-09-30'),
(3, 'Lefebvre', 'Pierre', 'pierre.lefebvre@example.com', '$2y$12$rQvAoH6I7SY0ijHTLqts2uEFvz0mczx3tkiQZi3qS.VY2fhKST6c2', '2023-10-01'),
(4, 'Dubois', 'Sophie', 'sophie.dubois@example.com', '$2y$12$P9eDlFQcr3vKcFnR0lqMeeEwKQsAMIfk7QOpF5Fw3UsdEChcOLyyg', '2023-10-02'),
(5, 'Roux', 'Claude', 'claude.roux@example.com', '$2y$12$rQvAoH6I7SY0ijHTLqts2uEFvz0mczx3tkiQZi3qS.VY2fhKST6c2', '2023-10-03'),
(6, 'Garcia', 'Isabelle', 'isabelle.garcia@example.com', '$2y$12$P9eDlFQcr3vKcFnR0lqMeeEwKQsAMIfk7QOpF5Fw3UsdEChcOLyyg', '2023-10-04'),
(7, 'Fournier', 'Thomas', 'thomas.fournier@example.com', '$2y$12$rQvAoH6I7SY0ijHTLqts2uEFvz0mczx3tkiQZi3qS.VY2fhKST6c2', '2023-10-05'),
(8, 'Moreau', 'Elodie', 'elodie.moreau@example.com', '$2y$12$P9eDlFQcr3vKcFnR0lqMeeEwKQsAMIfk7QOpF5Fw3UsdEChcOLyyg', '2023-10-06'),
(9, 'Girard', 'Antoine', 'antoine.girard@example.com', '$2y$12$rQvAoH6I7SY0ijHTLqts2uEFvz0mczx3tkiQZi3qS.VY2fhKST6c2', '2023-10-07'),
(10, 'Petit', 'Charlotte', 'charlotte.petit@example.com', '$2y$12$P9eDlFQcr3vKcFnR0lqMeeEwKQsAMIfk7QOpF5Fw3UsdEChcOLyyg', '2023-10-08');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_sport`) REFERENCES `sport` (`id_sport`),
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`numero_salle`) REFERENCES `lieu` (`numero_salle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
