-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 18 jan. 2023 à 17:05
-- Version du serveur :  10.5.16-MariaDB
-- Version de PHP : 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id20135329_article`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `art_id` int(11) NOT NULL,
  `art_contenu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `art_titre` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`art_id`, `art_contenu`, `art_titre`) VALUES
(1, 'Je suis la', 'Je suis');

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
  `pseudo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `email`) VALUES
(1, 'Mersedi', '#Mickey01', 'mersedifootvelo@gmail.com'),
(2, 'test', 'lol', 'test@gmail.com'),
(5, 'acazc', '$2y$10$VfQSnIcTqP/x6MnRo25oFe/5c7Fm4d8QxtzzMMGGznLRswUD94f3W', 'zxxz@gmail.com'),
(6, 'Encore un test', '$2y$10$fd5ZtwuMcxCrH3ZGK4Mam.EBQVVf.IG25f0b6JP/z1fmpQjeJqdvK', 'aisdad@gmail.com'),
(7, 'Encore un test', '$2y$10$sfG31oanqokseXk2E28/cO01svMibLPkcN0dW79d0yyj9.PozHt.S', 'aisdad@gmail.com'),
(8, 'eh oh', '$2y$10$sSURNQa/Rz.poxQK3GtSP./mQfopsgtgu2G4WqAnlksIqXiQu2Zge', 'sadezczx@gmail.com'),
(11, 'coucou', '$2y$10$roUaT9ktts5L9OjqK2bJl.mhqZL2xoBnfSO3RadOi9SGpTTyUUciS', 'coucou@gmail.com'),
(12, 'coucou', '$2y$10$GjIT7VPFm0DqEJPsLlUbIedgkQPJ0ZYB92TsBX.zVTND1cJO/hSDq', 'coucou@gmail.com'),
(13, 'ehoh', '$2y$10$IlwAUGf9Aq.RJtgerjDq7ePfc43lKNiXJf2Q94LTfayudIXkMJ20y', 'ehoh@gmail.com'),
(14, 'ehoh', '$2y$10$WaCU.DeUKmHlRhyraiGxBepvevJHCQaSJuVyukUR4F2XjwapZw/7y', 'ehoh@gmail.com'),
(15, 'ehoh', '$2y$10$QpVrpBF8KQSZIn7sZnnzyOmrZmJGJHPxJ6q3LlRy0RgEajwC466ry', 'ehoh@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`art_id`);

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
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

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
