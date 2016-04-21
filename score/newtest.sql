-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 06:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE IF NOT EXISTS `admin_cred` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_log`
--

CREATE TABLE IF NOT EXISTS `admin_login_log` (
  `id` int(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_soalan`
--

CREATE TABLE IF NOT EXISTS `bank_soalan` (
  `id` int(11) NOT NULL,
  `ref` varchar(4) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `flag` varchar(200) NOT NULL,
  `points` varchar(100) NOT NULL,
  `released` tinyint(1) NOT NULL,
  `first_solved_by` varchar(100) NOT NULL,
  `first_solved_at` varchar(100) NOT NULL,
  `assigned_to` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(100) NOT NULL,
  `setting` varchar(200) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `setting`, `value`) VALUES
(1, 'current_round', 'G3'),
(2, 'G1_start', '0'),
(3, 'G1_end', '0'),
(4, 'G2_start', '0'),
(5, 'G2_end', '0'),
(6, 'G3_start', '0'),
(7, 'G3_end', '0'),
(8, 'G4_start', '0'),
(9, 'G4_end', '0'),
(10, 'G5_start', '0'),
(11, 'G5_end', '0'),
(12, 'QF_start', '0'),
(13, 'QF_end', '0'),
(14, 'SF_start', '0'),
(15, 'SF_end', '0'),
(16, 'F_start', '0'),
(17, 'F_end', '0');

-- --------------------------------------------------------

--
-- Table structure for table `f_attempts`
--

CREATE TABLE IF NOT EXISTS `f_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1747 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f_fixture`
--

CREATE TABLE IF NOT EXISTS `f_fixture` (
  `id` int(3) NOT NULL,
  `refno` varchar(3) NOT NULL,
  `team_ref` varchar(4) NOT NULL,
  `FQ1` varchar(11) NOT NULL,
  `FQ2` varchar(11) NOT NULL,
  `FQ3` varchar(11) NOT NULL,
  `FQ4` varchar(11) NOT NULL,
  `FQ5` varchar(11) NOT NULL,
  `FQ6` varchar(11) NOT NULL,
  `FQ7` varchar(11) NOT NULL,
  `FQ8` varchar(11) NOT NULL,
  `FQ9` varchar(11) NOT NULL,
  `BONUS` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_fixture`
--

INSERT INTO `f_fixture` (`id`, `refno`, `team_ref`, `FQ1`, `FQ2`, `FQ3`, `FQ4`, `FQ5`, `FQ6`, `FQ7`, `FQ8`, `FQ9`, `BONUS`) VALUES
(1, '', 'qref', 'FQ1', 'FQ2', 'FQ3', 'FQ4', 'FQ5', 'FQ6', 'FQ7', 'FQ8', 'FQ9', 'FQB');

-- --------------------------------------------------------

--
-- Table structure for table `f_solved`
--

CREATE TABLE IF NOT EXISTS `f_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g1_attempts`
--

CREATE TABLE IF NOT EXISTS `g1_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=690 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g1_fixture`
--

CREATE TABLE IF NOT EXISTS `g1_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g1_solved`
--

CREATE TABLE IF NOT EXISTS `g1_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g2_attempts`
--

CREATE TABLE IF NOT EXISTS `g2_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g2_fixture`
--

CREATE TABLE IF NOT EXISTS `g2_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g2_solved`
--

CREATE TABLE IF NOT EXISTS `g2_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g3_attempts`
--

CREATE TABLE IF NOT EXISTS `g3_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g3_fixture`
--

CREATE TABLE IF NOT EXISTS `g3_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g3_solved`
--

CREATE TABLE IF NOT EXISTS `g3_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g4_attempts`
--

CREATE TABLE IF NOT EXISTS `g4_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g4_fixture`
--

CREATE TABLE IF NOT EXISTS `g4_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g4_solved`
--

CREATE TABLE IF NOT EXISTS `g4_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g5_attempts`
--

CREATE TABLE IF NOT EXISTS `g5_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g5_fixture`
--

CREATE TABLE IF NOT EXISTS `g5_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g5_solved`
--

CREATE TABLE IF NOT EXISTS `g5_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_round`
--

CREATE TABLE IF NOT EXISTS `game_round` (
  `id` int(2) NOT NULL,
  `round_ref` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_round`
--

INSERT INTO `game_round` (`id`, `round_ref`, `title`) VALUES
(1, 'G1', 'Group Stage - Round 1'),
(2, 'G2', 'Group Stage - Round 2'),
(3, 'G3', 'Group Stage - Round 3'),
(4, 'G4', 'Group Stage - Round 4'),
(5, 'G5', 'Group Stage - Round 5'),
(6, 'QF', 'Quarter Final'),
(7, 'SF', 'Semi Final'),
(8, 'F', 'Final'),
(9, 'x', 'Break');

-- --------------------------------------------------------

--
-- Table structure for table `group_id_mapping`
--

CREATE TABLE IF NOT EXISTS `group_id_mapping` (
  `id` int(2) NOT NULL,
  `identifier` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `judge_cred`
--

CREATE TABLE IF NOT EXISTS `judge_cred` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `judge_login_log`
--

CREATE TABLE IF NOT EXISTS `judge_login_log` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judge_login_log`
--

INSERT INTO `judge_login_log` (`id`, `username`, `ip`, `time`) VALUES
(0, 'j1', ' 192.168.0.107', '1414220479');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `id` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qf_attempts`
--

CREATE TABLE IF NOT EXISTS `qf_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qf_fixture`
--

CREATE TABLE IF NOT EXISTS `qf_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qf_solved`
--

CREATE TABLE IF NOT EXISTS `qf_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank_g1`
--

CREATE TABLE IF NOT EXISTS `rank_g1` (
  `id` int(100) NOT NULL,
  `teamref` varchar(5) NOT NULL,
  `totaltime` varchar(200) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `strike` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank_g2`
--

CREATE TABLE IF NOT EXISTS `rank_g2` (
  `id` int(100) NOT NULL,
  `teamref` varchar(5) NOT NULL,
  `totaltime` varchar(200) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `strike` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_g2`
--

INSERT INTO `rank_g2` (`id`, `teamref`, `totaltime`, `solved`, `strike`, `lose`, `draw`, `win`, `points`) VALUES
(1, 'A1', '0', 0, 0, 0, 0, 0, 0),
(2, 'A2', '0', 0, 0, 0, 0, 0, 0),
(3, 'A3', '0', 0, 0, 0, 0, 0, 0),
(4, 'A4', '0', 0, 0, 0, 0, 0, 0),
(5, 'A5', '0', 0, 0, 0, 0, 0, 0),
(6, 'B1', '0', 0, 0, 0, 0, 0, 0),
(7, 'B2', '0', 0, 0, 0, 0, 0, 0),
(8, 'B3', '0', 0, 0, 0, 0, 0, 0),
(9, 'B4', '0', 0, 0, 0, 0, 0, 0),
(10, 'B5', '0', 0, 0, 0, 0, 0, 0),
(11, 'C1', '0', 0, 0, 0, 0, 0, 0),
(12, 'C2', '0', 0, 0, 0, 0, 0, 0),
(13, 'C3', '0', 0, 0, 0, 0, 0, 0),
(14, 'C4', '0', 0, 0, 0, 0, 0, 0),
(15, 'C5', '0', 0, 0, 0, 0, 0, 0),
(16, 'D1', '0', 0, 0, 0, 0, 0, 0),
(17, 'D2', '0', 0, 0, 0, 0, 0, 0),
(18, 'D3', '0', 0, 0, 0, 0, 0, 0),
(19, 'D4', '0', 0, 0, 0, 0, 0, 0),
(20, 'D5', '0', 0, 0, 0, 0, 0, 0),
(21, 'E1', '0', 0, 0, 0, 0, 0, 0),
(22, 'E2', '0', 0, 0, 0, 0, 0, 0),
(23, 'E3', '0', 0, 0, 0, 0, 0, 0),
(24, 'E4', '0', 0, 0, 0, 0, 0, 0),
(25, 'E5', '0', 0, 0, 0, 0, 0, 0),
(26, 'F1', '0', 0, 0, 0, 0, 0, 0),
(27, 'F2', '0', 0, 0, 0, 0, 0, 0),
(28, 'F3', '0', 0, 0, 0, 0, 0, 0),
(29, 'F4', '0', 0, 0, 0, 0, 0, 0),
(30, 'F5', '0', 0, 0, 0, 0, 0, 0),
(31, 'G1', '0', 0, 0, 0, 0, 0, 0),
(32, 'G2', '0', 0, 0, 0, 0, 0, 0),
(33, 'G3', '0', 0, 0, 0, 0, 0, 0),
(34, 'G4', '0', 0, 0, 0, 0, 0, 0),
(35, 'G5', '0', 0, 0, 0, 0, 0, 0),
(36, 'H1', '0', 0, 0, 0, 0, 0, 0),
(37, 'H2', '0', 0, 0, 0, 0, 0, 0),
(38, 'H3', '0', 0, 0, 0, 0, 0, 0),
(39, 'H4', '0', 0, 0, 0, 0, 0, 0),
(40, 'H5', '0', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank_g3`
--

CREATE TABLE IF NOT EXISTS `rank_g3` (
  `id` int(100) NOT NULL,
  `teamref` varchar(5) NOT NULL,
  `totaltime` varchar(200) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `strike` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_g3`
--

INSERT INTO `rank_g3` (`id`, `teamref`, `totaltime`, `solved`, `strike`, `lose`, `draw`, `win`, `points`) VALUES
(1, 'A1', '0', 0, 0, 0, 0, 0, 0),
(2, 'A2', '0', 0, 0, 0, 0, 0, 0),
(3, 'A3', '0', 0, 0, 0, 0, 0, 0),
(4, 'A4', '0', 0, 0, 0, 0, 0, 0),
(5, 'A5', '0', 0, 0, 0, 0, 0, 0),
(6, 'B1', '0', 0, 0, 0, 0, 0, 0),
(7, 'B2', '0', 0, 0, 0, 0, 0, 0),
(8, 'B3', '0', 0, 0, 0, 0, 0, 0),
(9, 'B4', '0', 0, 0, 0, 0, 0, 0),
(10, 'B5', '0', 0, 0, 0, 0, 0, 0),
(11, 'C1', '0', 0, 0, 0, 0, 0, 0),
(12, 'C2', '0', 0, 0, 0, 0, 0, 0),
(13, 'C3', '0', 0, 0, 0, 0, 0, 0),
(14, 'C4', '0', 0, 0, 0, 0, 0, 0),
(15, 'C5', '0', 0, 0, 0, 0, 0, 0),
(16, 'D1', '0', 0, 0, 0, 0, 0, 0),
(17, 'D2', '0', 0, 0, 0, 0, 0, 0),
(18, 'D3', '0', 0, 0, 0, 0, 0, 0),
(19, 'D4', '0', 0, 0, 0, 0, 0, 0),
(20, 'D5', '0', 0, 0, 0, 0, 0, 0),
(21, 'E1', '0', 0, 0, 0, 0, 0, 0),
(22, 'E2', '0', 0, 0, 0, 0, 0, 0),
(23, 'E3', '0', 0, 0, 0, 0, 0, 0),
(24, 'E4', '0', 0, 0, 0, 0, 0, 0),
(25, 'E5', '0', 0, 0, 0, 0, 0, 0),
(26, 'F1', '0', 0, 0, 0, 0, 0, 0),
(27, 'F2', '0', 0, 0, 0, 0, 0, 0),
(28, 'F3', '0', 0, 0, 0, 0, 0, 0),
(29, 'F4', '0', 0, 0, 0, 0, 0, 0),
(30, 'F5', '0', 0, 0, 0, 0, 0, 0),
(31, 'G1', '0', 0, 0, 0, 0, 0, 0),
(32, 'G2', '0', 0, 0, 0, 0, 0, 0),
(33, 'G3', '0', 0, 0, 0, 0, 0, 0),
(34, 'G4', '0', 0, 0, 0, 0, 0, 0),
(35, 'G5', '0', 0, 0, 0, 0, 0, 0),
(36, 'H1', '0', 0, 0, 0, 0, 0, 0),
(37, 'H2', '0', 0, 0, 0, 0, 0, 0),
(38, 'H3', '0', 0, 0, 0, 0, 0, 0),
(39, 'H4', '0', 0, 0, 0, 0, 0, 0),
(40, 'H5', '0', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank_g4`
--

CREATE TABLE IF NOT EXISTS `rank_g4` (
  `id` int(100) NOT NULL,
  `teamref` varchar(5) NOT NULL,
  `totaltime` varchar(200) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `strike` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_g4`
--

INSERT INTO `rank_g4` (`id`, `teamref`, `totaltime`, `solved`, `strike`, `lose`, `draw`, `win`, `points`) VALUES
(1, 'A1', '0', 0, 0, 0, 0, 0, 0),
(2, 'A2', '0', 0, 0, 0, 0, 0, 0),
(3, 'A3', '0', 0, 0, 0, 0, 0, 0),
(4, 'A4', '0', 0, 0, 0, 0, 0, 0),
(5, 'A5', '0', 0, 0, 0, 0, 0, 0),
(6, 'B1', '0', 0, 0, 0, 0, 0, 0),
(7, 'B2', '0', 0, 0, 0, 0, 0, 0),
(8, 'B3', '0', 0, 0, 0, 0, 0, 0),
(9, 'B4', '0', 0, 0, 0, 0, 0, 0),
(10, 'B5', '0', 0, 0, 0, 0, 0, 0),
(11, 'C1', '0', 0, 0, 0, 0, 0, 0),
(12, 'C2', '0', 0, 0, 0, 0, 0, 0),
(13, 'C3', '0', 0, 0, 0, 0, 0, 0),
(14, 'C4', '0', 0, 0, 0, 0, 0, 0),
(15, 'C5', '0', 0, 0, 0, 0, 0, 0),
(16, 'D1', '0', 0, 0, 0, 0, 0, 0),
(17, 'D2', '0', 0, 0, 0, 0, 0, 0),
(18, 'D3', '0', 0, 0, 0, 0, 0, 0),
(19, 'D4', '0', 0, 0, 0, 0, 0, 0),
(20, 'D5', '0', 0, 0, 0, 0, 0, 0),
(21, 'E1', '0', 0, 0, 0, 0, 0, 0),
(22, 'E2', '0', 0, 0, 0, 0, 0, 0),
(23, 'E3', '0', 0, 0, 0, 0, 0, 0),
(24, 'E4', '0', 0, 0, 0, 0, 0, 0),
(25, 'E5', '0', 0, 0, 0, 0, 0, 0),
(26, 'F1', '0', 0, 0, 0, 0, 0, 0),
(27, 'F2', '0', 0, 0, 0, 0, 0, 0),
(28, 'F3', '0', 0, 0, 0, 0, 0, 0),
(29, 'F4', '0', 0, 0, 0, 0, 0, 0),
(30, 'F5', '0', 0, 0, 0, 0, 0, 0),
(31, 'G1', '0', 0, 0, 0, 0, 0, 0),
(32, 'G2', '0', 0, 0, 0, 0, 0, 0),
(33, 'G3', '0', 0, 0, 0, 0, 0, 0),
(34, 'G4', '0', 0, 0, 0, 0, 0, 0),
(35, 'G5', '0', 0, 0, 0, 0, 0, 0),
(36, 'H1', '0', 0, 0, 0, 0, 0, 0),
(37, 'H2', '0', 0, 0, 0, 0, 0, 0),
(38, 'H3', '0', 0, 0, 0, 0, 0, 0),
(39, 'H4', '0', 0, 0, 0, 0, 0, 0),
(40, 'H5', '0', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank_g5`
--

CREATE TABLE IF NOT EXISTS `rank_g5` (
  `id` int(100) NOT NULL,
  `teamref` varchar(5) NOT NULL,
  `totaltime` varchar(200) NOT NULL DEFAULT '0',
  `solved` int(11) NOT NULL,
  `strike` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_g5`
--

INSERT INTO `rank_g5` (`id`, `teamref`, `totaltime`, `solved`, `strike`, `lose`, `draw`, `win`, `points`) VALUES
(1, 'A1', '0', 0, 0, 0, 0, 0, 0),
(2, 'A2', '0', 0, 0, 0, 0, 0, 0),
(3, 'A3', '0', 0, 0, 0, 0, 0, 0),
(4, 'A4', '0', 0, 0, 0, 0, 0, 0),
(5, 'A5', '0', 0, 0, 0, 0, 0, 0),
(6, 'B1', '0', 0, 0, 0, 0, 0, 0),
(7, 'B2', '0', 0, 0, 0, 0, 0, 0),
(8, 'B3', '0', 0, 0, 0, 0, 0, 0),
(9, 'B4', '0', 0, 0, 0, 0, 0, 0),
(10, 'B5', '0', 0, 0, 0, 0, 0, 0),
(11, 'C1', '0', 0, 0, 0, 0, 0, 0),
(12, 'C2', '0', 0, 0, 0, 0, 0, 0),
(13, 'C3', '0', 0, 0, 0, 0, 0, 0),
(14, 'C4', '0', 0, 0, 0, 0, 0, 0),
(15, 'C5', '0', 0, 0, 0, 0, 0, 0),
(16, 'D1', '0', 0, 0, 0, 0, 0, 0),
(17, 'D2', '0', 0, 0, 0, 0, 0, 0),
(18, 'D3', '0', 0, 0, 0, 0, 0, 0),
(19, 'D4', '0', 0, 0, 0, 0, 0, 0),
(20, 'D5', '0', 0, 0, 0, 0, 0, 0),
(21, 'E1', '0', 0, 0, 0, 0, 0, 0),
(22, 'E2', '0', 0, 0, 0, 0, 0, 0),
(23, 'E3', '0', 0, 0, 0, 0, 0, 0),
(24, 'E4', '0', 0, 0, 0, 0, 0, 0),
(25, 'E5', '0', 0, 0, 0, 0, 0, 0),
(26, 'F1', '0', 0, 0, 0, 0, 0, 0),
(27, 'F2', '0', 0, 0, 0, 0, 0, 0),
(28, 'F3', '0', 0, 0, 0, 0, 0, 0),
(29, 'F4', '0', 0, 0, 0, 0, 0, 0),
(30, 'F5', '0', 0, 0, 0, 0, 0, 0),
(31, 'G1', '0', 0, 0, 0, 0, 0, 0),
(32, 'G2', '0', 0, 0, 0, 0, 0, 0),
(33, 'G3', '0', 0, 0, 0, 0, 0, 0),
(34, 'G4', '0', 0, 0, 0, 0, 0, 0),
(35, 'G5', '0', 0, 0, 0, 0, 0, 0),
(36, 'H1', '0', 0, 0, 0, 0, 0, 0),
(37, 'H2', '0', 0, 0, 0, 0, 0, 0),
(38, 'H3', '0', 0, 0, 0, 0, 0, 0),
(39, 'H4', '0', 0, 0, 0, 0, 0, 0),
(40, 'H5', '0', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sf_attempts`
--

CREATE TABLE IF NOT EXISTS `sf_attempts` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(100) NOT NULL,
  `team_ref` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf_fixture`
--

CREATE TABLE IF NOT EXISTS `sf_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf_solved`
--

CREATE TABLE IF NOT EXISTS `sf_solved` (
  `id` int(11) NOT NULL,
  `soalan_ref` varchar(200) NOT NULL,
  `team_ref` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `stringssubmitted` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_cred`
--

CREATE TABLE IF NOT EXISTS `team_cred` (
  `id` int(2) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `is_playing` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_login_attempts`
--

CREATE TABLE IF NOT EXISTS `team_login_attempts` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `spare` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_login_success`
--

CREATE TABLE IF NOT EXISTS `team_login_success` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `time` varchar(100) NOT NULL,
  `table_ref` varchar(2) NOT NULL,
  `spare` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=500 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_logs`
--

CREATE TABLE IF NOT EXISTS `team_logs` (
  `id` int(2) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `action` varchar(0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_score`
--

CREATE TABLE IF NOT EXISTS `team_score` (
  `id` int(2) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `group_stage_1` int(1) NOT NULL,
  `group_stage_2` int(1) NOT NULL,
  `group_stage_3` int(1) NOT NULL,
  `quarter_final` int(1) NOT NULL,
  `semi_final` int(1) NOT NULL,
  `final` int(6) NOT NULL,
  `last_submitted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_soalan`
--
ALTER TABLE `bank_soalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_attempts`
--
ALTER TABLE `f_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_fixture`
--
ALTER TABLE `f_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_solved`
--
ALTER TABLE `f_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g1_attempts`
--
ALTER TABLE `g1_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g1_fixture`
--
ALTER TABLE `g1_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g1_solved`
--
ALTER TABLE `g1_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g2_attempts`
--
ALTER TABLE `g2_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g2_fixture`
--
ALTER TABLE `g2_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g2_solved`
--
ALTER TABLE `g2_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g3_attempts`
--
ALTER TABLE `g3_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g3_fixture`
--
ALTER TABLE `g3_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g3_solved`
--
ALTER TABLE `g3_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g4_attempts`
--
ALTER TABLE `g4_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g4_fixture`
--
ALTER TABLE `g4_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g4_solved`
--
ALTER TABLE `g4_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g5_attempts`
--
ALTER TABLE `g5_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g5_fixture`
--
ALTER TABLE `g5_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g5_solved`
--
ALTER TABLE `g5_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_round`
--
ALTER TABLE `game_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_id_mapping`
--
ALTER TABLE `group_id_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judge_cred`
--
ALTER TABLE `judge_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qf_attempts`
--
ALTER TABLE `qf_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qf_fixture`
--
ALTER TABLE `qf_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qf_solved`
--
ALTER TABLE `qf_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_g1`
--
ALTER TABLE `rank_g1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_g2`
--
ALTER TABLE `rank_g2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_g3`
--
ALTER TABLE `rank_g3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_g4`
--
ALTER TABLE `rank_g4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_g5`
--
ALTER TABLE `rank_g5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_attempts`
--
ALTER TABLE `sf_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_fixture`
--
ALTER TABLE `sf_fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sf_solved`
--
ALTER TABLE `sf_solved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_cred`
--
ALTER TABLE `team_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_login_attempts`
--
ALTER TABLE `team_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_login_success`
--
ALTER TABLE `team_login_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_logs`
--
ALTER TABLE `team_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_score`
--
ALTER TABLE `team_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank_soalan`
--
ALTER TABLE `bank_soalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `f_attempts`
--
ALTER TABLE `f_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1747;
--
-- AUTO_INCREMENT for table `f_fixture`
--
ALTER TABLE `f_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `f_solved`
--
ALTER TABLE `f_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `g1_attempts`
--
ALTER TABLE `g1_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=690;
--
-- AUTO_INCREMENT for table `g1_fixture`
--
ALTER TABLE `g1_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `g1_solved`
--
ALTER TABLE `g1_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `g2_attempts`
--
ALTER TABLE `g2_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `g2_fixture`
--
ALTER TABLE `g2_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `g2_solved`
--
ALTER TABLE `g2_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `g3_attempts`
--
ALTER TABLE `g3_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `g3_fixture`
--
ALTER TABLE `g3_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `g3_solved`
--
ALTER TABLE `g3_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `g4_attempts`
--
ALTER TABLE `g4_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g4_fixture`
--
ALTER TABLE `g4_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `g4_solved`
--
ALTER TABLE `g4_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g5_attempts`
--
ALTER TABLE `g5_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g5_fixture`
--
ALTER TABLE `g5_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `g5_solved`
--
ALTER TABLE `g5_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game_round`
--
ALTER TABLE `game_round`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `group_id_mapping`
--
ALTER TABLE `group_id_mapping`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `judge_cred`
--
ALTER TABLE `judge_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `qf_attempts`
--
ALTER TABLE `qf_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qf_fixture`
--
ALTER TABLE `qf_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qf_solved`
--
ALTER TABLE `qf_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rank_g1`
--
ALTER TABLE `rank_g1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rank_g2`
--
ALTER TABLE `rank_g2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `rank_g3`
--
ALTER TABLE `rank_g3`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `rank_g4`
--
ALTER TABLE `rank_g4`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `rank_g5`
--
ALTER TABLE `rank_g5`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sf_attempts`
--
ALTER TABLE `sf_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sf_fixture`
--
ALTER TABLE `sf_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sf_solved`
--
ALTER TABLE `sf_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team_cred`
--
ALTER TABLE `team_cred`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `team_login_attempts`
--
ALTER TABLE `team_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team_login_success`
--
ALTER TABLE `team_login_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=500;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
