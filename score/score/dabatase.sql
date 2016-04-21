-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 09:39 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dabatase`
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_soalan`
--

INSERT INTO `bank_soalan` (`id`, `ref`, `question`, `flag`, `points`, `released`, `first_solved_by`, `first_solved_at`, `assigned_to`) VALUES
(1, '1', '1+1=?', '79c9817b3b758ae70e35368962fb04c981488a6d55a3820d70bc56b4bb3128bbc0f0661e7e087f1487a979acba0a659546a1ad5b755a939fcedf66472d76c853', '1', 1, '', '', 'G1'),
(2, '2', '111', '9ba9213574bd5ed316bba58c17e382889789186c83f265e4d34c5b74b758ddf6c894311aa79edc03d82077faf76f994da6cf56564e8abdd60487c0c52298230a', '500', 1, '', '', 'FQ1');

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
(1, 'current_round', 'F'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_fixture`
--

INSERT INTO `f_fixture` (`id`, `refno`, `team_ref`, `FQ1`, `FQ2`, `FQ3`, `FQ4`, `FQ5`, `FQ6`, `FQ7`, `FQ8`, `FQ9`, `BONUS`) VALUES
(1, '', 'qref', 'FQ1', 'FQ2', 'FQ3', 'FQ4', 'FQ5', 'FQ6', 'FQ7', 'FQ8', 'FQ9', 'FQB'),
(2, 'A1', 'A1', '500', '', '', '', '', '', '', '', '', ''),
(3, 'c1', 'C1', '', '', '', '', '', '', '', '', '', ''),
(4, 'B2', 'B2', '', '', '', '', '', '', '', '', '', ''),
(5, 'B4', 'B4', '500', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_solved`
--

INSERT INTO `f_solved` (`id`, `soalan_ref`, `team_ref`, `time`, `table_ref`, `stringssubmitted`) VALUES
(1, 'FQ1', 'A1', '1438284619', 'GS', 'MTEx'),
(2, 'FQ1', 'B4', '1438284661', 'GS', 'MTEx');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g1_fixture`
--

CREATE TABLE IF NOT EXISTS `g1_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g1_fixture`
--

INSERT INTO `g1_fixture` (`id`, `team1`, `team2`) VALUES
(1, 'A1', 'A4'),
(2, 'A2', 'A3'),
(3, 'B1', 'B4'),
(4, 'B2', 'B3'),
(5, 'C1', 'C4'),
(6, 'C2', 'C3');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g1_solved`
--

INSERT INTO `g1_solved` (`id`, `soalan_ref`, `team_ref`, `time`, `table_ref`, `stringssubmitted`) VALUES
(1, 'G1', 'C4', '1438281826', 'GS', 'Mg==');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g2_fixture`
--

CREATE TABLE IF NOT EXISTS `g2_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g2_fixture`
--

INSERT INTO `g2_fixture` (`id`, `team1`, `team2`) VALUES
(1, 'A1', 'A3'),
(2, 'A2', 'A4'),
(3, 'B1', 'B3'),
(4, 'B2', 'B4'),
(5, 'C1', 'C3'),
(6, 'C2', 'C4');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g3_fixture`
--

CREATE TABLE IF NOT EXISTS `g3_fixture` (
  `id` int(3) NOT NULL,
  `team1` varchar(3) NOT NULL,
  `team2` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g3_fixture`
--

INSERT INTO `g3_fixture` (`id`, `team1`, `team2`) VALUES
(1, 'A1', 'A2'),
(2, 'A3', 'A4'),
(3, 'B1', 'B2'),
(4, 'B3', 'B4'),
(5, 'C1', 'C2'),
(6, 'C3', 'C4');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `g4_fixture`
--

INSERT INTO `g4_fixture` (`id`, `team1`, `team2`) VALUES
(1, 'A3', 'A5'),
(2, 'A1', 'A4'),
(3, 'B3', 'B5'),
(4, 'B1', 'B4'),
(5, 'C3', 'C5'),
(6, 'C1', 'C4'),
(7, 'D3', 'D5'),
(8, 'D1', 'D4'),
(9, 'E3', 'E5'),
(10, 'E1', 'E4'),
(11, 'F3', 'F5'),
(12, 'F1', 'F4'),
(13, 'G3', 'G5'),
(14, 'G1', 'G4'),
(15, 'H3', 'H5'),
(16, 'H1', 'H4');

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

--
-- Dumping data for table `g5_fixture`
--

INSERT INTO `g5_fixture` (`id`, `team1`, `team2`) VALUES
(1, 'A2', 'A4'),
(2, 'A1', 'A3'),
(3, 'B2', 'B4'),
(4, 'B1', 'B3'),
(5, 'C2', 'C4'),
(6, 'C1', 'C3'),
(7, 'D2', 'D4'),
(8, 'D1', 'D3'),
(9, 'E2', 'E4'),
(10, 'E1', 'E3'),
(11, 'F2', 'F4'),
(12, 'F1', 'F3'),
(13, 'G2', 'G4'),
(14, 'G1', 'G3'),
(15, 'H2', 'H4'),
(16, 'H1', 'H3');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_id_mapping`
--

INSERT INTO `group_id_mapping` (`id`, `identifier`, `team`) VALUES
(1, 'A1', 'genesis'),
(2, 'A2', 'gamer109'),
(3, 'A3', 'Maelstrom'),
(4, 'A4', 'BlackPercher'),
(5, 'B1', 'Perola Do Indico'),
(6, 'B2', 'Exceed~'),
(7, 'B3', 'BiNaCon'),
(8, 'B4', 'fictive'),
(9, 'C1', 'H.A.T.'),
(10, 'C2', 'iTech'),
(11, 'C3', 'Dunce'),
(12, 'C4', 'SAFE');

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

--
-- Dumping data for table `judge_cred`
--

INSERT INTO `judge_cred` (`id`, `username`, `pwd`, `last_login`, `active`) VALUES
(1, 'j1', 'ddcdc8a510cd72fd235a7af1b811399d5c7abc40bf1f25ba9bccfa57886a9378721adec7a75e62f4bd3be5f2a50e7b185589d1cd013919b93ed8355eb910c6f7', '', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `time`, `ip`, `message`) VALUES
(1, '1415921370', ' 192.168.211.1', 'Welcome!'),
(38, '1416024336', '', 'This is the BONUS question http://172.16.1.100/bonus use 0B9B87VpPnaYidW50TC1Za2Y5MlU to open'),
(39, '1416024494', '', 'Bonus - Submission at 11.59PM.'),
(40, '1416024797', '', 'Challenge 2: Open his mask to get the flag '),
(41, '1416024828', '', 'Challenge 4 - What''s your ip? xoxo <b>(^-^)</b>'),
(42, '1416025064', '', 'Challenge 3 - There is no admin table. '),
(43, '1416025153', '', 'Challenge 1: abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_ '),
(44, '1416025557', '', 'Challenge 8 - <marquee>This is not fast enough </marquee>'),
(45, '1416026286', '', 'challenge 2 - ASCII can hide message too'),
(46, '1416026967', '', 'Challenge 3 - There is something not visible with your naked eyes'),
(47, '1416028058', '', 'Challenge 8: Decode and decode and decode!!'),
(48, '1416028094', '', 'challenge 3 - Directory listing'),
(49, '1416028631', '', 'challenge 2 - pictureworthsthousandwords, they said. some doubt that'),
(50, '1416028755', '', 'challenge 2- owhhh. can you help to find the picture?'),
(51, '1416028874', '', 'Challenge 3 - the " $_REQUEST[''xxxxxxx''] " should tells you that you can use GET'),
(52, '', '', '<h1>test</h1>');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_g1`
--

INSERT INTO `rank_g1` (`id`, `teamref`, `totaltime`, `solved`, `strike`, `lose`, `draw`, `win`, `points`) VALUES
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_cred`
--

INSERT INTO `team_cred` (`id`, `team_name`, `pwd`, `last_login`, `university`, `is_playing`, `active`) VALUES
(1, 'genesis', '5a6326c0fe049565d4b5dbad6d77f2da7b144aa8508b6d0a655e682211445c2e437769f7aeae49ac7d3b18e08149feb238470741622a793b5c84b9e4a04f00bb', '', '', 1, 1),
(2, 'gamer109', 'd1491f6568d754b197bccce0dbb9703da5c106a849486aac6dcf84abf6b59cdccad5fb6c3ee12e60d547493dc19519a3a286ae5f39edafed1714e5c87a993bfb', '', '', 1, 1),
(3, 'Maelstrom', '6963bc4c10ee99147f644c3529e02de56e8b5fac062686489f74e934a96c8e1784fd6bd80d953fccfdc545be8c82a49d942eae088234e1033badc62d028044b1', '', '', 1, 1),
(4, 'BlackPercher', 'da5299e3f7bd337621be2fb61f75d85d3d9b0d09b6f77f6ddcef9f1dc55046160b7a1a9504bb78587d0717827068af63473fa63817020f8e88843c047696bd03', '', '', 1, 1),
(5, 'Perola Do Indico', '3ec89508e2f6384936038c30b8ab1dd763eb0391736a427e1391107d7425cef788170e5b695238e34087cd433351572fb0d0c19728b09ecd3d409fd164332115', '', '', 1, 1),
(6, 'Exceed~', 'd65b879404220a2d8fd75d8168fbfa23921255a78a2b20f2af6685e04437bae75b3d37456663f9811e5be2c736db750d90c2dc9712e7d3428c76cff633e343ba', '', '', 1, 1),
(7, 'BiNaCon', '4dbb483aba4a72a0852e77665ce61308636c8ebca2343f27840e32167fc976a137d9e3fc8ea2289987b61e1eaf773d15dd0e139e4c2e989618b8242fcacd1fc1', '', '', 1, 1),
(8, 'fictive', '0ffb109c292b9768e79c5d06c12b309b87489a69c804dabbc3647b2b33bdd0a83452dbd32c05d92c103ff717fccdfa464a706b7752521dfc212a8b9efe0b824e', '', '', 1, 1),
(9, 'H.A.T.', 'fb95fc45788f530beace54b0aee170135abab3a5687c550ac8db5b8bf8dfbb8fa8a599bc3613df17580ea16dec7d95161036080f01bcfeb92d331d11d9940cba', '', '', 1, 1),
(10, 'iTech', 'de78b59bab98283cf82aa451bbc50bc9f95952d7e1c4e9101937b4a65cac42dde7c0e13cf158e449fb2f9ab283eec130d4b081c37e740d86509fdf6f6c840502', '', '', 1, 1),
(11, 'Dunce', '30204568e72c8fb74835316600231937b08c03ccc5f336ac9df11b91c9e168b6550392018b7b21ea5b58473c7e9ca1dc5d281c7dc99656fd8fc9b540ab87cfe4', '', '', 1, 1),
(12, 'SAFE', '6fa80c1bd0d07ce285429e9c33ff6b0ab0ea0a64cf8bbd0e58548b2c69231f3eb02e89da356677c6b151f0ce379cf1803b7a2e839fbff845802f1f55157fc84a', '', '', 1, 1),
(13, '3idiots', 'f5369561addaab12c134a6eaa588703c995b944598a81c6f3fcbe3fc14bd91743394024f3cc64c936947f59a3e77e50d8a84f450082e61f85290fb1e111f4433', '', '', 1, 1),
(14, '0.o', '7e5eab4f9f9edb0d634ca75e2d3398bc8b77f74f6692be320c1a589463f215154e17ccf513df20c9265e5cfd7be79d181c9ffe2aaee45c2f36051a460d2dd4db', '', '', 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_login_attempts`
--

INSERT INTO `team_login_attempts` (`id`, `ip`, `team_name`, `time`, `table_ref`, `spare`) VALUES
(1, '127.0.0.1', '2MN', '1438278866', 'LA', 0),
(2, '127.0.0.1', '2MN', '1438278871', 'LA', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_login_success`
--

INSERT INTO `team_login_success` (`id`, `ip`, `team_name`, `time`, `table_ref`, `spare`) VALUES
(1, '127.0.0.1', '2MN', '1438278886', 'LS', 0),
(2, '127.0.0.1', 'team1', '1438279452', 'LS', 0),
(3, '127.0.0.1', '3idiots', '1438281747', 'LS', 0),
(4, '127.0.0.1', 'SAFE', '1438281899', 'LS', 0),
(5, '127.0.0.1', 'genesis', '1438283126', 'LS', 0),
(6, '127.0.0.1', 'genesis', '1438283530', 'LS', 0),
(7, '127.0.0.1', 'fictive', '1438284651', 'LS', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `f_attempts`
--
ALTER TABLE `f_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `f_fixture`
--
ALTER TABLE `f_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `f_solved`
--
ALTER TABLE `f_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `g1_attempts`
--
ALTER TABLE `g1_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g1_fixture`
--
ALTER TABLE `g1_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `g1_solved`
--
ALTER TABLE `g1_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `g2_attempts`
--
ALTER TABLE `g2_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g2_fixture`
--
ALTER TABLE `g2_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `g2_solved`
--
ALTER TABLE `g2_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_attempts`
--
ALTER TABLE `g3_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g3_fixture`
--
ALTER TABLE `g3_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `g3_solved`
--
ALTER TABLE `g3_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `judge_cred`
--
ALTER TABLE `judge_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `qf_attempts`
--
ALTER TABLE `qf_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qf_fixture`
--
ALTER TABLE `qf_fixture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `qf_solved`
--
ALTER TABLE `qf_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rank_g1`
--
ALTER TABLE `rank_g1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sf_solved`
--
ALTER TABLE `sf_solved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team_cred`
--
ALTER TABLE `team_cred`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `team_login_attempts`
--
ALTER TABLE `team_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team_login_success`
--
ALTER TABLE `team_login_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
