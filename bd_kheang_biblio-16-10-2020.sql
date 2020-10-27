-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 27 oct. 2020 à 14:20
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_kheang_biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'Homère', 'Homère', 'grecque'),
(2, 'Shakespeare', 'William', 'anglais'),
(3, 'Sophocle', 'Sophocle', 'grecque'),
(4, 'Joyce', 'James', 'anglais'),
(5, 'Austen', 'Jane', 'anglais'),
(6, 'Camus', 'Albert', 'français'),
(7, 'de Cervantes', 'Miguel', 'espagnol'),
(8, 'Celan', 'Paul', 'français'),
(9, 'Proust', 'Marcel', 'français'),
(10, 'Hugo', 'Victor', 'français'),
(11, 'Tolkien ', 'John Ronald Reuel', 'américain'),
(12, 'Saint-exupéry', 'Antoine', 'français'),
(13, 'Rowlings', 'JK', 'anglais'),
(14, 'Moi', 'Moi', 'français'),
(15, 'Rabelais', 'François', 'français'),
(16, 'Céline', 'Louis-Ferdinand', 'français'),
(17, 'Ovide', 'Ovide\r\n', 'grec'),
(19, 'moi', 'moi', 'moi');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'Ma biblio', '1 quai de bercy', '015040424513'),
(2, 'biblio de quartier', '3 rue de la pace', '0143526045'),
(3, 'ALAIN QUILLOT', 'rue de Paris', '12341234'),
(6, 'mediatheque', 'rue de Paris', '012345678'),
(7, 'Hogwarts library', 'Scotland', '098765432'),
(14, 'hypotheque', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`) VALUES
(1, 'Gallimard', '1 rue de pax'),
(2, 'Flammarion', 'rue de odeon'),
(3, 'Folio', 'place des martyres'),
(4, 'Fleuves noirs', 'quai de la gare'),
(5, 'Mes Editions', 'Pays imaginaire'),
(6, 'Hachette', 'rue de hachette'),
(7, 'Les éditions de minuit', 'rue du carosse'),
(9, 'toi', 'toi,');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `date_emprunt` date NOT NULL,
  `id_lecteur` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`date_emprunt`, `id_lecteur`, `id_livre`, `id_emprunter`) VALUES
('2020-09-08', 2, 17, 1),
('2020-10-15', 32, 11, 29);

-- --------------------------------------------------------

--
-- Structure de la table `lecteur`
--

CREATE TABLE `lecteur` (
  `id_lecteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lecteur`
--

INSERT INTO `lecteur` (`id_lecteur`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(2, 'dupont', 'jean', 'rue de ', '0202020202'),
(3, 'nana', 'nana', 'nana', '1 rue nana'),
(18, 'nono', 'nono', '1 rue nono', '01456789925'),
(19, 'moi', 'moi', '1 rue moi', '4545656456'),
(32, 'test', 'd', 'test', '123345667');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `logolivre` varchar(200) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `nb_pages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `description`, `logolivre`, `prix`, `nb_pages`) VALUES
(1, 2, 'L\'étranger', 'Littérature française', '', '', '0', 0),
(2, 2, 'Les misérables', 'tragédie', '', '', '0', 0),
(3, 2, 'Le Hobbit', 'Fantasy', '', '', '0', 0),
(4, 2, 'Le petit prince', 'enfant', 'Alors vous imaginez ma surprise, au lever du jour, quand une drôle de petite voix m\'a réveillé. \r\n<br> Elle disait:\r\n<br>\r\n- S\'il vous plaît... dessine-moi un mouton !\r\n<br>\r\n\r\n- Dessine-moi un mouton... ', 'petitprince.jpg', '7', 30),
(6, 3, 'Harry potter', 'science fiction', '', '5f85b5e408515-or.jpg', '0', 0),
(7, 2, 'Roméo et Juliette', 'romanesque', '', '', '0', 0),
(8, 3, 'Lady Oscar', 'romanesque', '', '', '0', 0),
(9, 1, 'Gargantua', 'romanesque', '', '', '0', 0),
(10, 3, 'Voyage au bout de la nuit', 'romanesque', '', '', '0', 0),
(11, 14, 'Don Quichotte', 'romanesque', '', '5f855c20731a2-automne.jpg', '10', 300),
(12, 3, 'Crime et Châtiment', 'romanesque', '', '', '0', 0),
(13, 1, 'Le monde s\'effondre', 'romanesque', '', '', '0', 0),
(14, 3, 'Orgueil et Préjugés', 'romanesque', '', '', '0', 0),
(15, 1, 'Épopée de Gilgamesh', 'poésie', '', '', '0', 0),
(16, 1, 'Faust', 'tragédie', '', '', '0', 0),
(17, 7, 'Hamlet', 'tragï¿½die', '', '', '0', 0),
(18, 14, 'Le Roi Lear', 'tragï¿½die', '', '', '0', 0),
(19, 2, 'Les Métamorphoses', 'poésie', '', '', '0', 0),
(20, 1, 'Odyssée', 'épopée', '', '', '0', 0),
(21, 3, 'Iliade', 'épopée', '', 'grece1.jpg', '0', 0),
(22, 2, 'saturne', 'astronomie', '', 'saturne.jpg', '0', 0),
(23, 1, 'hello', 'astronomie', '', 'amiral.png', '0', 0),
(24, 3, 'hello', 'astronomie', '', 'or.jpg', '0', 0),
(26, 3, 'Kheang', 'Fantastique', '', 'automne.jpg', '0', 0),
(28, 1, 'saturne', 'test', '', 'or.jpg', '0', 0),
(29, 7, 'Nestor', 'toto', '', 'or.jpg', '0', 0),
(30, 7, 'papillon', 'science', '', 'amiral.png', '0', 0),
(31, 2, 'papillon12', 'science12', '', 'uploads/noir.jpg', '0', 0),
(32, 2, 'Mulan', 'Mulan', '', '5f855b71e5547-automne.jpg', '0', 0),
(33, 14, 'heroes5', 'science-fiction', 'heoes of the modern times', '5f897d0496fe1-person2.jpg', '5', 150);

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `date_publication` date NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL,
  `id_publier` int(11) NOT NULL,
  `supprimer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`date_publication`, `id_livre`, `id_auteur`, `id_editeur`, `id_publier`, `supprimer`) VALUES
('2020-07-01', 4, 12, 5, 15, 0),
('2020-10-01', 11, 2, 6, 17, 0),
('2020-08-04', 6, 13, 1, 18, 0),
('2020-08-03', 21, 1, 6, 19, 0),
('2020-10-05', 32, 14, 4, 23, 1),
('2020-10-14', 33, 1, 1, 24, 0);

-- --------------------------------------------------------

--
-- Structure de la table `retourner`
--

CREATE TABLE `retourner` (
  `date_retour` date NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_lecteur` int(11) NOT NULL,
  `id_rentourner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunter`),
  ADD KEY `id_lecteur` (`id_lecteur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `lecteur`
--
ALTER TABLE `lecteur`
  ADD PRIMARY KEY (`id_lecteur`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publier`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_editeur` (`id_editeur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `retourner`
--
ALTER TABLE `retourner`
  ADD PRIMARY KEY (`id_rentourner`),
  ADD KEY `id_lecteur` (`id_lecteur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `lecteur`
--
ALTER TABLE `lecteur`
  MODIFY `id_lecteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `retourner`
--
ALTER TABLE `retourner`
  MODIFY `id_rentourner` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_lecteur`) REFERENCES `lecteur` (`id_lecteur`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `retourner`
--
ALTER TABLE `retourner`
  ADD CONSTRAINT `retourner_ibfk_1` FOREIGN KEY (`id_lecteur`) REFERENCES `lecteur` (`id_lecteur`),
  ADD CONSTRAINT `retourner_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
