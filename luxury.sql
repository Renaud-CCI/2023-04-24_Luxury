-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 28, 2023 at 08:57 AM
-- Server version: 10.6.11-MariaDB-1:10.6.11+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxury`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `candidate_id_id` int(11) NOT NULL,
  `job_offer_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `candidate_id_id`, `job_offer_id`, `created_at`) VALUES
(1, 2, 3, '2023-06-28 08:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `job_category_id_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `passport` tinyint(1) DEFAULT NULL,
  `passport_file` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `current_location` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birth_location` varchar(255) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `deleted_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `deleted` tinyint(1) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `complete_profile` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `job_category_id_id`, `user_id`, `firstname`, `lastname`, `gender`, `address`, `country`, `nationality`, `passport`, `passport_file`, `cv`, `profile_picture`, `current_location`, `birthdate`, `birth_location`, `availability`, `experience`, `short_description`, `created_at`, `updated_at`, `deleted_at`, `deleted`, `files`, `complete_profile`) VALUES
(1, NULL, 1, 'Renaud', 'Bresson', 'male', '1 rue des Oeufs', 'France', 'french', NULL, NULL, NULL, NULL, 'Néronde', '1982-11-29', 'Nîmes', 1, '3m', '', '2023-06-28 08:22:33', '2023-06-28 08:23:46', NULL, NULL, NULL, NULL),
(2, 4, 2, 'Test', 'Essai', 'male', '42 rue du web', 'France', 'french', 1, 'user_2_passport.jpg', 'user_2_cv.jpg', 'user_2_photo.png', 'Testville', '2000-01-01', 'Testville', 1, '1y', 'Description test', '2023-06-28 08:38:56', '2023-06-28 08:43:29', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `society_name` varchar(255) DEFAULT NULL,
  `activity_type` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_job` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `society_name`, `activity_type`, `contact_name`, `contact_job`, `contact_number`, `contact_email`, `notes`, `creation_date`) VALUES
(1, 'Société Test', 'Cuisiniers du café', 'Jacques Vabre', 'Torrefacteur', '01-02-03-04-05', 'JV@ovc.com', NULL, '2023-06-28 08:28:03'),
(2, 'Luxor', 'Luxe', 'Paul', 'Dirigeant', '666-555-444', 'contact@mail.com', NULL, '2023-06-28 08:28:47'),
(3, 'Luxodrome', 'Helicoptères', 'Ellie Kopter', 'CEO', '01-02-03-04-05', 'contact@mail.com', NULL, '2023-06-28 08:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230425115756', '2023-04-25 13:59:24', 86),
('DoctrineMigrations\\Version20230425120120', '2023-04-25 14:01:40', 84),
('DoctrineMigrations\\Version20230425122258', '2023-04-25 14:23:22', 258),
('DoctrineMigrations\\Version20230425123035', '2023-04-25 14:30:54', 44),
('DoctrineMigrations\\Version20230425123937', '2023-04-25 14:41:21', 323),
('DoctrineMigrations\\Version20230425125320', '2023-04-25 14:59:08', 246),
('DoctrineMigrations\\Version20230425130359', '2023-04-25 15:04:14', 103),
('DoctrineMigrations\\Version20230425133527', '2023-04-25 15:35:50', 73),
('DoctrineMigrations\\Version20230427120010', '2023-04-27 14:00:48', 52),
('DoctrineMigrations\\Version20230427133628', '2023-04-27 15:36:33', 61),
('DoctrineMigrations\\Version20230427141344', '2023-04-27 16:13:55', 89),
('DoctrineMigrations\\Version20230502080246', '2023-05-02 10:02:59', 123),
('DoctrineMigrations\\Version20230502092823', '2023-05-02 11:29:03', 61),
('DoctrineMigrations\\Version20230504082623', '2023-05-05 09:55:30', 137),
('DoctrineMigrations\\Version20230504145013', '2023-05-05 09:55:30', 219),
('DoctrineMigrations\\Version20230505074505', '2023-05-05 10:15:00', 45),
('DoctrineMigrations\\Version20230505075043', '2023-05-05 10:15:24', 56),
('DoctrineMigrations\\Version20230505082225', '2023-05-05 10:22:45', 63),
('DoctrineMigrations\\Version20230505083044', '2023-05-05 10:31:13', 158),
('DoctrineMigrations\\Version20230505083535', '2023-05-05 10:38:22', 211),
('DoctrineMigrations\\Version20230510144839', '2023-05-10 16:48:58', 52),
('DoctrineMigrations\\Version20230511113149', '2023-05-11 13:32:03', 50),
('DoctrineMigrations\\Version20230512085152', '2023-05-12 10:52:07', 689),
('DoctrineMigrations\\Version20230515091631', '2023-05-15 11:16:51', 54),
('DoctrineMigrations\\Version20230524133504', '2023-05-24 15:35:24', 1055);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `name`) VALUES
(1, 'Service'),
(3, 'Creative'),
(4, 'Commercial');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer`
--

CREATE TABLE `job_offer` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `job_category_id` int(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `activity` tinyint(1) NOT NULL,
  `notes` longtext DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `closing_date` datetime DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_offer`
--

INSERT INTO `job_offer` (`id`, `client_id`, `job_category_id`, `description`, `activity`, `notes`, `title`, `type`, `location`, `closing_date`, `salary`, `creation_date`) VALUES
(1, 3, 1, 'Pilote d\'hélicoptère expérimenté, passionné de vol, prêt à relever tous les défis aériens', 1, '', 'Pilote d\'hélicoptères', 'freelance', 'Testville', '2023-08-31 00:00:00', 5000, '2023-06-28 08:31:32'),
(2, 1, 1, 'Expert en café de luxe, créant des expériences gustatives raffinées et uniques, toujours prêt à éveiller les sens.', 1, '', 'Préparateur de café', 'full_time', 'Testville', '2023-07-29 00:00:00', 35000, '2023-06-28 08:35:19'),
(3, 1, 4, 'Commercial dans le café de luxe, passionné par l\'art de la vente, créant des relations durables et stimulant les sensations de chaque client.', 1, '', 'Commercial VIP', 'full_time', 'Testville', '2023-07-29 00:00:00', 35000, '2023-06-28 08:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `reset_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `email`, `admin`, `roles`, `reset_token`) VALUES
(1, '$2y$13$QMy6rsc28t28lotfb.YteOw/i2sVPHLfzr9AMtddsKYB8C9ebVxAK', 'admin@admin.fr', 1, '[\"ROLE_ADMIN\"]', NULL),
(2, '$2y$13$sT.lT7heKkimtxzzxCXPlejPP44Y8f/k/VaFU2lhD7S3ZfWMXoEpG', 'candidat@candidat.fr', 0, '[\"ROLE_USER\"]', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_880E0D76A76ED395` (`user_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A45BDDC147A475AB` (`candidate_id_id`),
  ADD KEY `IDX_A45BDDC13481D195` (`job_offer_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C8B28E4450E81DB` (`job_category_id_id`),
  ADD KEY `IDX_C8B28E44A76ED395` (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_288A3A4E19EB6921` (`client_id`),
  ADD KEY `IDX_288A3A4E712A86AB` (`job_category_id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_offer`
--
ALTER TABLE `job_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_880E0D76A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC13481D195` FOREIGN KEY (`job_offer_id`) REFERENCES `job_offer` (`id`),
  ADD CONSTRAINT `FK_A45BDDC147A475AB` FOREIGN KEY (`candidate_id_id`) REFERENCES `candidate` (`id`);

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `FK_C8B28E4450E81DB` FOREIGN KEY (`job_category_id_id`) REFERENCES `job_category` (`id`),
  ADD CONSTRAINT `FK_C8B28E44A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD CONSTRAINT `FK_288A3A4E19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_288A3A4E712A86AB` FOREIGN KEY (`job_category_id`) REFERENCES `job_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
