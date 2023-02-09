-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 09 fév. 2023 à 12:33
-- Version du serveur : 10.5.18-MariaDB-0+deb11u1
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Mersedi`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `art_id` int(11) NOT NULL,
  `art_contenu` varchar(500) NOT NULL,
  `art_titre` varchar(500) NOT NULL,
  `idUser` int(11) NOT NULL,
  `art_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`art_id`, `art_contenu`, `art_titre`, `idUser`, `art_date`) VALUES
(5, 'oui', 'Je test', 19, '2023-02-09 00:00:00'),
(6, 'cezxz', 'azdzax', 19, '2023-02-09 12:28:28'),
(7, 'likl', 'Oui oUi', 19, '2023-02-09 12:29:45');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id_util` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(500) NOT NULL,
  `mdp` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `email`) VALUES
(19, 'KilouKiller', '$2y$10$dTl1WiKKelrSuOo7SAViYOWHL6U3Tl8ShgI4JuygCznnhSz3AUS7y', 'Kiliaxdutrax@gmail.com'),
(20, 'Weerolea', '$2y$10$HNDWdFg4hCz1XCCXW2yDzumSz0DIs2Gw9S81X0EkJKIahbuN35P26', 'weerolea@gmail.com'),
(21, 'Mersedi', '$2y$10$PQbssseT278BRSPa31BXjeVfZ2AkIgkchYdADAiusvGqB56/x2iG.', 'mersedifootvelo@gmail.com'),
(22, 'Kilou', '$2y$10$xgBw0USMuDCKAxqBGBElp.8HMMERK9np9D3feMIs3VuqoW3noZaNO', 'Kilou@gmail.cm'),
(23, 'Thibault', '$2y$10$qp20jc5Nm5gGzNEZzZRlP.3bbzHWfqDDBxSJHpy1xIcZrUsZ9dSUK', 'thibault@gmail.com'),
(24, 'Petit test', '$2y$10$bwPZRuTNyARP5O/qXYaI2eJ.oGqLuqO59kzSAz4AuSX6vqPKqRfFW', 'Tets@adza.com'),
(25, 'Petit test', '$2y$10$fh1AIMxUJJ.yKl12nc/ZTe.LDEBqWB0.o06gMIfayVwMLtVjLD/aO', 'Tets@adza.com'),
(26, 'Petit test', '$2y$10$BqKHHTmK1nSOjsPLXycOKOUBFg/1PWpfV9vR028GJRinw4nOdJm0q', 'Tets@adza.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDarticle` (`id_art`),
  ADD KEY `IDutil` (`id_util`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`,`email`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`art_id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
