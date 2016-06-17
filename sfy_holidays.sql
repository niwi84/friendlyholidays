-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 17 Juin 2016 à 11:08
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sfy_holidays`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_userid` int(11) DEFAULT NULL,
  `event_etat` tinyint(1) NOT NULL,
  `event_libel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `event_descrip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_activ` datetime DEFAULT NULL,
  `event_desactiv` datetime DEFAULT NULL,
  `event_start` datetime DEFAULT NULL,
  `event_end` datetime DEFAULT NULL,
  `event_budget` decimal(9,2) DEFAULT NULL,
  `event_comment` longtext COLLATE utf8_unicode_ci,
  `event_photo1` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_photo2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_photo3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_photo4` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_photo5` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3BAE0AA78A08C92B` (`event_libel`),
  KEY `IDX_3BAE0AA7C3AB1E3C` (`event_userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `event_userid`, `event_etat`, `event_libel`, `event_descrip`, `event_activ`, `event_desactiv`, `event_start`, `event_end`, `event_budget`, `event_comment`, `event_photo1`, `event_photo2`, `event_photo3`, `event_photo4`, `event_photo5`) VALUES
(1, 1, 1, 'La Bretagne en roulotte', 'Découverte de la Bretagne en roulotte', '2016-06-16 09:40:00', '2011-01-12 00:00:00', '2016-08-12 00:00:00', '2016-09-10 16:00:00', 1250.00, 'Pour la Bretagne il faut : \r\n  - Un visa (Attention, difficile à obtenir)\r\n  - Un vaccin  (Normal, avec les algues vertes ...)', '5762b6f9e2777.jpeg', NULL, NULL, NULL, NULL),
(2, 1, 1, 'Le Canal du midi en péniche', 'Découverte du Canal du midi en Péniche', '2016-06-16 09:45:00', '2011-01-01 00:00:00', '2016-09-20 11:00:00', '2016-10-03 18:00:00', 2000.00, 'Pour le Canal, il faut :\r\n  - Des cachets pour le mal de mer\r\n  - Un bonne paire de lunettes  (pour passer les écluses)', '5762b28b353bc.jpeg', NULL, NULL, NULL, NULL),
(3, 2, 1, 'Séjour à Carcassonne', 'Découverte des ramparts', '2016-06-15 10:00:00', '2011-01-01 00:00:00', '2017-05-01 00:00:00', '2017-05-15 00:00:00', 1200.00, 'Pas de visa ni de vaccin nécessaire ... juste apprendre à rouler les R pour faire couleur locale', '5762fd5c0c9ec.jpeg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom_prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom_prenom`) VALUES
(1, 'Yves', 'yves', 'yves@yahoo.fr', 'yves@yahoo.fr', 1, '3tjsile6pkaogogowswcwsw8g08wco4', '$2y$13$3tjsile6pkaogogowswcweEmgvMBvV0uYrFIzpwnASEIkD1WSTgmG', '2016-06-16 16:03:30', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Yves LP'),
(2, 'Ninon', 'ninon', 'ninon@wcs.com', 'ninon@wcs.com', 1, '1ppj4pee1okk8cwgs4o0o8wogsg8scs', '$2y$13$1ppj4pee1okk8cwgs4o0ou.LcyICfVEhTxzVUqnFa2PbZk8Z2.Gea', '2016-06-16 09:48:30', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Ninon P'),
(3, 'Omar', 'omar', 'omar@wcs.com', 'omar@wcs.com', 1, 'luwf1ca8pf4ogs4cokgs0880socssk4', '$2y$13$luwf1ca8pf4ogs4cokgs0u3f0siGUJS9WTLUzQCxjH5J5ncyb9t7K', '2016-06-16 09:49:18', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Omar M'),
(4, 'Richard', 'richard', 'richard@wcs.com', 'richard@wcs.com', 1, 'dmsxff8qsfcog4sg8s004k800ws0s08', '$2y$13$dmsxff8qsfcog4sg8s004e2dmRP7gw.VXEmWyBgXqvBCzwktmfnoG', '2016-06-17 09:34:10', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Richard P');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`user_id`),
  KEY `IDX_7169709271F7E88B` (`event_id`),
  KEY `IDX_71697092A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `participants`
--

INSERT INTO `participants` (`event_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `spend`
--

CREATE TABLE IF NOT EXISTS `spend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spend_userid` int(11) DEFAULT NULL,
  `spend_eventid` int(11) DEFAULT NULL,
  `spend_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spend_date` datetime NOT NULL,
  `spend_groupindiv` tinyint(1) DEFAULT NULL,
  `spend_photo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spend_libel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `spend_montant` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ECD2273DB480AD48` (`spend_userid`),
  KEY `IDX_ECD2273D6CE2A8F7` (`spend_eventid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `spend`
--

INSERT INTO `spend` (`id`, `spend_userid`, `spend_eventid`, `spend_type`, `spend_date`, `spend_groupindiv`, `spend_photo`, `spend_libel`, `spend_montant`) VALUES
(1, 1, 1, 'Trajet aller', '2016-06-15 00:00:00', 1, '5762b5aca335b.jpeg', 'Train (3places)', 225.00),
(2, 3, 1, 'Hôtel', '2016-08-14 00:00:00', 1, '5762b6276d14b.jpeg', 'Hôtel des 4 vents', 150.00),
(3, 2, 2, 'Trajet aller', '2016-09-14 00:00:00', 1, '576316f31640c.jpeg', 'Billets d''avion jusqu''à Toulouse', 225.00),
(4, 2, 1, 'Divers', '2016-08-18 16:00:00', 1, '576325e8e56b6.jpeg', 'Avoine   (1er plein)', 52.00),
(5, 2, 1, 'Divers', '2016-08-22 00:00:00', 1, '576326ad7c2d0.jpeg', 'Avoine   (2nd plein)', 61.00),
(6, 1, 1, 'Restaurant', '2016-08-22 20:00:00', 1, '57632711d6b70.jpeg', 'Fruits de mer', 75.00),
(7, 3, 1, 'Trajet retour', '2016-09-01 09:00:00', 1, '5763276d12a9d.jpeg', 'Train (3places)', 150.00);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_3BAE0AA7C3AB1E3C` FOREIGN KEY (`event_userid`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `FK_71697092A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_7169709271F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Contraintes pour la table `spend`
--
ALTER TABLE `spend`
  ADD CONSTRAINT `FK_ECD2273D6CE2A8F7` FOREIGN KEY (`spend_eventid`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_ECD2273DB480AD48` FOREIGN KEY (`spend_userid`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
