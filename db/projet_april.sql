-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 18 Juillet 2018 à 16:37
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_april`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_cookies`
--

CREATE TABLE `ci_cookies` (
  `id` int(11) NOT NULL,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('cb2ee59713f844ae5b89bcd91475a08c', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531922378, 'a:6:{s:9:"user_name";s:8:"genieouz";s:12:"is_logged_in";b:1;s:20:"manufacture_selected";N;s:22:"search_string_selected";N;s:5:"order";N;s:10:"order_type";N;}'),
('14c507c2a4b82e592f39b3726406976a', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531931695, 'a:7:{s:9:"user_data";s:0:"";s:9:"user_name";s:8:"genieouz";s:12:"is_logged_in";b:1;s:20:"manufacture_selected";N;s:22:"search_string_selected";N;s:5:"order";N;s:10:"order_type";N;}');

-- --------------------------------------------------------

--
-- Structure de la table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `assigner_a` varchar(25) DEFAULT NULL,
  `ville` varchar(25) DEFAULT NULL,
  `pays` varchar(25) DEFAULT NULL,
  `site_web` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `telephone`, `email`, `assigner_a`, `ville`, `pays`, `site_web`) VALUES
(1, 'ousmane sakho', '78 523 89 28', 'genieouzog@gmail.com', 'Ousmane', 'Dakar', 'Sénégal', 'senkaddu.com'),
(2, 'Acaman', '78 523 89 28', 'ousmane@senkaddu.com', 'Alioune', 'Thies', 'Sénégal', 'senkaddu.com'),
(3, 'GIE Diamagueun', '33 963 85 21', NULL, NULL, NULL, NULL, NULL),
(4, 'DigitalOcean', '33 962 87 41', 'digit@ocean.com', 'Ramata Diagne', 'Dakar', 'Sénégal', 'digitalocean.com'),
(5, 'Chaka', '78 452 14 78', 'chaka@gmail.com', '', '', '', 'chaka.sn'),
(6, 'Bara Lait', '33 652 89 25', '', 'Seydi', '', '', 'baralait.sn'),
(7, 'Wutiko', '33 935 87 41', 'wutiko@contact.sn', 'Ousmane', '', '', 'wutiko.sn'),
(8, 'Bridel', '33 874 52 63', '', '', '', '', 'bridel.sn');

-- --------------------------------------------------------

--
-- Structure de la table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_addres` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `pass_word` varchar(32) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'consultant'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_addres`, `user_name`, `pass_word`, `role`) VALUES
(1, 'Ousmane', 'Sakho', 'genieouzog@gmail.com', 'genieouz', '56af344eeae30bdd7b1e381557dd481c', 'admin'),
(2, 'Ramata', 'Traoré', 'ramata@gmail.com', 'ramata', '56af344eeae30bdd7b1e381557dd481c', 'consultant'),
(3, 'Sidi', 'Sarr', 'sidi@outlook.com', 'sidi', '56af344eeae30bdd7b1e381557dd481c', 'commercial'),
(4, 'Bamba', 'Seck', 'bamba@gmail.com', 'bamba', '56af344eeae30bdd7b1e381557dd481c', 'consultant'),
(5, 'Yacine', 'Touré', 'yacinetoure@ff.sn', 'yacine', '56af344eeae30bdd7b1e381557dd481c', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` varchar(40) DEFAULT NULL,
  `stock` double DEFAULT NULL,
  `cost_price` double DEFAULT NULL,
  `sell_price` double DEFAULT NULL,
  `manufacture_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `description`, `stock`, `cost_price`, `sell_price`, `manufacture_id`) VALUES
(1, 'description produit 1', 5, 1500, 1200, 1),
(2, 'logiciel de propect', 1000, 80000, 100000, 4),
(3, 'Office', 500, 25000, 30000, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ci_cookies`
--
ALTER TABLE `ci_cookies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Index pour la table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ci_cookies`
--
ALTER TABLE `ci_cookies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
