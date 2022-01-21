-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 jan. 2022 à 18:01
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `school_manage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('NTMG@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `class_id` int(3) NOT NULL,
  `class_branch` varchar(255) NOT NULL,
  `branch_level` varchar(255) NOT NULL,
  `student_count` varchar(255) NOT NULL,
  `subject_count` varchar(255) NOT NULL,
  `result_pourcent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`class_id`, `class_branch`, `branch_level`, `student_count`, `subject_count`, `result_pourcent`) VALUES
(1, 'informatic', 'level 1', '5', '00', '00'),
(2, 'informatic', 'level 2', '2', '00', '00'),
(3, 'informatic', 'level 3', '2', '00', '00'),
(4, 'INFORMATIC', 'L1 L2 L3', '11', '00', '00'),
(5, 'bios', 'level 1', '0', '00', '00'),
(6, 'bios', 'level 2', '0', '00', '00'),
(7, 'bios', 'level 3', '0', '00', '00'),
(8, 'BIOS', 'L1 L2 L3', '0', '00', '00');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_level` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `subject_pdf` varchar(255) NOT NULL,
  `fiiliere` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`course_id`, `subject_code`, `subject_level`, `subject_title`, `subject_pdf`, `fiiliere`) VALUES
(7, 'INF3055', '3', 'Introduction POO', 'backend.png', 'INFO'),
(8, 'INF3055', '2', 'POO principe solid', 'INF3055_Support_2_Principes_SOLID_21-22.pdf', 'INFO');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(3) NOT NULL,
  `receiv_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_statut` varchar(255) NOT NULL,
  `mail_txt` text NOT NULL,
  `mail_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mail`
--

INSERT INTO `mail` (`mail_id`, `receiv_name`, `user_email`, `user_phone`, `user_statut`, `mail_txt`, `mail_time`) VALUES
(3, 'Nkweo william', 'williamtankoua@gmail.com', '693707668', 'student', 'bienvenu dans notre fac', '2021-11-01'),
(5, 'Tankoua Naomi Joyce', 'naomijoyce@gmail.com', '682097394', 'student', 'hello dear today you have course', '2021-11-05'),
(6, 'Bineli', 'bineli@gmail.com', '69000000', 'student', 'hi', '2022-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(3) NOT NULL,
  `student_key` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_credit` varchar(255) NOT NULL,
  `CC_mark` varchar(255) NOT NULL,
  `TP_mark` varchar(255) NOT NULL,
  `EE_mark` varchar(255) NOT NULL,
  `mark_sum` varchar(255) NOT NULL,
  `mgp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marks`
--

INSERT INTO `marks` (`mark_id`, `student_key`, `subject_name`, `subject_credit`, `CC_mark`, `TP_mark`, `EE_mark`, `mark_sum`, `mgp`) VALUES
(9, 'INL1002', 'INF1011', '6', '15', '0', '0', '15', '0');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `notify_id` int(3) NOT NULL,
  `notify_title` varchar(255) NOT NULL,
  `notify_text` text NOT NULL,
  `notify_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`notify_id`, `notify_title`, `notify_text`, `notify_date`) VALUES
(1, 'New Student are Added', 'Clarence are Added to the Database', '2021-11-16'),
(2, 'New Student are Added', 'Alain bembe are Added to the Database', '2021-11-16'),
(3, 'New Student are Added', ' are Added to the Database', '2022-01-17');

-- --------------------------------------------------------

--
-- Structure de la table `others`
--

CREATE TABLE `others` (
  `other_id` int(3) NOT NULL,
  `other_count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `others`
--

INSERT INTO `others` (`other_id`, `other_count`) VALUES
(1, '2');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `student_id` int(3) NOT NULL,
  `student_key` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_birthday` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_city` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_branch` varchar(255) NOT NULL,
  `student_level` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`student_id`, `student_key`, `student_name`, `student_birthday`, `student_gender`, `student_city`, `student_email`, `student_phone`, `student_branch`, `student_level`, `student_password`) VALUES
(1, 'INL3001', 'Tankoua Mfanyi Berthold Brecht', '17/11/1998', 'Male', 'Yaounde', 'brtankoua@gmail.com', '651009128', 'Informatic', 'Level 3', 'uy1_brecht'),
(2, 'INL2001', 'Romaric Foppa', '01/10/1998', 'Male', 'Yaounde', 'foppa@gmail.com', '674312797', 'Informatic', 'level 2', 'uy1@foppa'),
(4, 'INL1001', 'Nkweo william', '03/01/2001', 'Male', 'yaounde', 'williamtankoua@gmail.com', '693707668', 'informatic', 'level 1', 'uy1@william'),
(5, 'INL1002', 'Tankoua Naomi Joyce', '05/08/2001', 'Female', 'yaounde', 'naomijoyce@gmail.com', '682097394', 'Informatic', 'Level 1', 'uy1@naomi'),
(6, 'INL2002', 'Youmbi Landry', '08/05/2001', 'Male', 'yaounde', 'youmbi@gmail.com', '693000000', 'Informatic', 'Level 2', 'uy1@youmbi'),
(7, 'INL1003', 'Junior Albert', '20/12/1999', 'Male', 'yaounde', 'junior@gmail.com', '693000000', 'informatic', 'Level 1', 'uy1@junior'),
(8, 'INL1005', 'Bineli', '03/01/2004', 'Male', 'yaounde', 'bineli@gmail.com', '69000000', 'Informatic', 'Level 1', 'uy1@Bineli'),
(9, 'INL1004', 'Steve Fokou', '17/09/1999', 'male', 'yaounde', 'Steve@gmail.com', '693000000', 'Informatic', 'Level 1', 'uy1@Steve'),
(10, 'INL3002', 'Mbakop Joyce', '15/09/1999', 'Female', 'yaounde', 'Mbakop@gmail.com', '693000000', 'Informatic', 'Level 3', 'uy1@Mbakop '),
(11, 'INL3003', 'Clarence fankam', '1/5/1997', 'Male', 'yaounde', 'Clarence@gmail.com', '693000000', 'Informatic', 'Level 3', 'uy1@Clarence'),
(12, 'INL3004', 'Alain bembe', '17/03/1998', 'Male', 'yaounde', 'Alain@gmail.com', '693000000', 'Informatic', 'Level 3', 'uy1@Alain'),
(13, '1AAA3', '', '', '', '', '', '', 'Informatic', 'Level 1', '');

-- --------------------------------------------------------

--
-- Structure de la table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(3) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_credit` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `subject_branch` varchar(255) NOT NULL,
  `branch_level` varchar(255) NOT NULL,
  `subject_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_credit`, `subject_title`, `semester`, `teacher`, `subject_branch`, `branch_level`, `subject_pdf`) VALUES
(1, 'INF1011', '6', 'Introduction a l\' algorithme I', '1', 'Asta', 'Informatic', 'Level 1', ''),
(2, 'INF1021', '', '', '', '', '', '', ''),
(3, 'INF1021', '6', 'Algorithme II', '1', 'Kimbi', 'Informatic', 'Level 1', ''),
(4, 'INF1031', '3', 'Algorithme III', '1', 'Messi', 'Informatic', 'Level 1', ''),
(5, '', '', '', '', '', 'Informatic', 'Level 1', '');

-- --------------------------------------------------------

--
-- Structure de la table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(3) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_birthday` varchar(255) NOT NULL,
  `teacher_gender` varchar(255) NOT NULL,
  `teacher_city` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_phone` varchar(255) NOT NULL,
  `teacher_speciality` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_birthday`, `teacher_gender`, `teacher_city`, `teacher_email`, `teacher_phone`, `teacher_speciality`, `teacher_password`) VALUES
(1, 'Monthe', '12/08/1990', 'male', 'Cameroon, yaounde', 'valeriemonthe@gmail.com', '651009128', 'Dr Informatic', 'uy1@monthe');

-- --------------------------------------------------------

--
-- Structure de la table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(3) NOT NULL,
  `course_hour` varchar(255) NOT NULL,
  `course_day` varchar(255) NOT NULL,
  `amphi` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `branch_level` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `time_table`
--

INSERT INTO `time_table` (`id`, `course_hour`, `course_day`, `amphi`, `subject_code`, `branch`, `branch_level`, `teacher`, `semester`) VALUES
(1, '7H00 - 9H55', 'MONDAY', 'A350', 'INF111', 'informatic', 'level 1', 'asta', '1'),
(2, '10H00 - 12H55', 'MONDAY', 'A502', 'INF131', 'informatic', 'level 1', 'Abessolo', '1'),
(5, '7H00 - 9H55', 'TUESDAY', 'A502', 'INF121', 'informatic', 'level 1', 'Dr', '1'),
(6, '7H00 - 9H55', 'WENESDAY', 'A502', 'PHY161', 'informatic', 'level 1', 'Dr', '1'),
(7, '7H00 - 9H55', 'THURSDAY', 'A502', 'INF141', 'informatic', 'level 1', 'Dr', '1'),
(8, '16H00 - 18H55', 'THURSDAY', 'A502', 'MAT131', 'informatic', 'level 1', 'Takam', '1'),
(9, '10H00 - 12H55', 'SATURDAY', 'A502', 'INF151', 'informatic', 'level 1', 'Dr', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_statut`) VALUES
(1, 'brecht', 'brtankoua@gmail.cm', 'susanoo', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Index pour la table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Index pour la table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notify_id`);

--
-- Index pour la table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`other_id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Index pour la table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Index pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Index pour la table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notify_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
