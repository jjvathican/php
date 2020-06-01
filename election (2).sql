-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 09:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(6) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `password`) VALUES
(1, 'jj', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pages`
--

CREATE TABLE `admin_pages` (
  `page_link` varchar(20) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pages`
--

INSERT INTO `admin_pages` (`page_link`, `page_name`, `page_id`) VALUES
('election_result.php', 'RESULT', 1),
('department.php', 'DEPARTMENT', 5),
('post_name.php', 'ADD_POST', 11),
('post.php', 'POST_DATE', 15),
('restrict.php', 'RESTRICT', 17),
('batch.php', 'BATCH', 21),
('course.php', 'COURSE', 23),
('teachers_note.php', 'SET_NOTE', 25),
('displaying_data.php', 'VIEW_TABLES', 26),
('display_desc.php', 'DISPLAY_DESC', 27),
('home.php', 'HOME', 28),
('student.php', 'STUDENT', 30),
('a_notification.php', 'NOTIFICATION', 32);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_id` int(6) UNSIGNED NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `course_id` int(6) DEFAULT NULL,
  `f_year` date NOT NULL,
  `t_year` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `b_name`, `course_id`, `f_year`, `t_year`) VALUES
(7, 'ceddcedw14', 12, '2014-06-11', '2018-06-11'),
(6, 'ceddced14', 11, '2014-06-11', '2018-06-11'),
(8, 'ceddcedwh14', 13, '2014-06-11', '2018-06-11'),
(9, 'ccna14', 14, '2014-06-11', '2016-06-11'),
(10, 'bcom14', 15, '2014-06-11', '2018-06-11'),
(11, 'ceddced16', 11, '2016-06-11', '2020-06-11'),
(12, 'ceddcedw16', 12, '2016-06-11', '2020-06-11'),
(13, 'ceddcedwh16', 13, '2016-06-11', '2020-06-11'),
(14, 'ccna16', 14, '2016-06-11', '2018-06-11'),
(15, 'bcom16', 15, '2016-06-11', '2020-06-11'),
(16, 'ceddced15', 11, '2015-06-11', '2019-06-11'),
(17, 'ceddcedw15', 12, '2015-06-11', '2019-06-11'),
(18, 'ceddcedwh15', 13, '2015-06-11', '2019-06-11'),
(19, 'ccna15', 14, '2015-06-11', '2017-06-11'),
(20, 'bcom15', 15, '2015-06-11', '2019-06-11'),
(21, 'ccna19', 14, '2019-09-20', '2021-09-20'),
(22, 'ceddcedw19', 12, '2019-11-19', '2023-11-19'),
(23, 'bcom19', 15, '2019-09-20', '2023-09-20'),
(24, 'ceddcedwh19', 13, '2019-12-20', '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(6) UNSIGNED NOT NULL,
  `post_id` int(6) NOT NULL,
  `student_id` int(6) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `post_id`, `student_id`, `c_date`) VALUES
(48, 40, 45, '2017-06-20'),
(47, 40, 41, '2017-06-20'),
(46, 41, 34, '2017-06-20'),
(45, 41, 30, '2017-06-20'),
(44, 41, 26, '2017-06-20'),
(43, 42, 19, '2017-06-20'),
(42, 42, 14, '2017-06-20'),
(49, 40, 50, '2017-06-20'),
(50, 40, 56, '2017-06-20'),
(51, 39, 70, '2017-06-20'),
(52, 39, 11, '2017-06-20'),
(41, 42, 13, '2017-06-20'),
(53, 39, 16, '2017-06-20'),
(54, 39, 20, '2017-06-20'),
(55, 39, 27, '2017-06-20'),
(56, 39, 32, '2017-06-20'),
(57, 38, 36, '2017-06-20'),
(58, 38, 42, '2017-06-20'),
(59, 38, 46, '2017-06-20'),
(60, 38, 52, '2017-06-20'),
(61, 38, 61, '2017-06-20'),
(62, 38, 71, '2017-06-20'),
(63, 38, 72, '2017-06-20'),
(64, 37, 10, '2017-06-20'),
(65, 37, 17, '2017-06-20'),
(66, 37, 21, '2017-06-20'),
(67, 37, 33, '2017-06-20'),
(68, 37, 39, '2017-06-20'),
(69, 37, 53, '2017-06-20'),
(70, 37, 59, '2017-06-20'),
(71, 46, 77, '2019-10-20'),
(72, 45, 78, '2019-10-20');

--
-- Triggers `candidate`
--
DELIMITER $$
CREATE TRIGGER `check_apply_date` BEFORE INSERT ON `candidate` FOR EACH ROW BEGIN
	DECLARE v1,v2 DATE;
    DECLARE co,pa INT;
    
	select f_date,t_date
    INTO v1,v2
    from post where p_id=NEW.post_id;
    
    if v1 > NEW.c_date OR v2 < NEW.c_date THEN
    CALL `Error: Wrong values for date (date not in between)`;
    ELSE
    
      select if(count(*)>0,1,0) into co  from candidate,post where  candidate.post_id=post.p_id and candidate.student_id = NEW.student_id and DATE(post.f_date) <= NEW.c_date and DATE(post.t_date) >= NEW.c_date ;
    
   
     
    if co=1 THEN
    CALL `Error: date is in between but  for same student :(`;
    END IF;
    
    
     select count(*) into pa from student,batch where student.batch_id = batch.b_id and DATE(batch.f_year) <= NEW.c_date and DATE(batch.t_year) >= NEW.c_date and student.s_id=NEW.student_id;
    
    if pa=0 THEN
    CALL `Error: PASSED OUT STUDENT`;
    END IF;
    
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `candid_pages`
--

CREATE TABLE `candid_pages` (
  `page_link` varchar(20) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candid_pages`
--

INSERT INTO `candid_pages` (`page_link`, `page_name`, `page_id`) VALUES
('candidate_result.php', 'RESULT_VIEW', 3),
('home.php', 'HOME', 4),
('student_page.php', ' MY PAGE', 5),
('election_process.php', 'ELECTIONPROCESS', 6),
('notification.php', 'NOTIFICATION', 7);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(6) UNSIGNED NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_period` int(11) NOT NULL,
  `dept_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `c_period`, `dept_id`) VALUES
(11, 'ceddced', 4, 1),
(12, 'ceddcedw', 4, 1),
(13, 'ceddcedwh', 4, 1),
(14, 'ccna', 2, 5),
(15, 'bcom', 4, 1),
(16, 'newabc', 3, 1),
(17, 'newabcd', 3, 31);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(6) UNSIGNED NOT NULL,
  `d_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`) VALUES
(1, 'ccomputer'),
(2, 'commerce'),
(3, 'engineering'),
(4, 'jjcourse'),
(5, 'networking'),
(26, 'adcasdasd'),
(25, 'nhnnhnh'),
(24, 'adcasdasdsa'),
(31, 'fashion'),
(27, 'adcasdasds'),
(23, 'ccvbcvbcvb');

-- --------------------------------------------------------

--
-- Table structure for table `elect_process`
--

CREATE TABLE `elect_process` (
  `e_id` int(6) UNSIGNED NOT NULL,
  `student_id` int(6) NOT NULL,
  `candid_id` int(6) DEFAULT NULL,
  `elect_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elect_process`
--

INSERT INTO `elect_process` (`e_id`, `student_id`, `candid_id`, `elect_time`) VALUES
(295, 77, 71, '2019-10-23'),
(294, 77, 72, '2019-10-23'),
(268, 20, 67, '2017-06-25'),
(267, 20, 61, '2017-06-25'),
(266, 20, 52, '2017-06-25'),
(265, 20, 47, '2017-06-25'),
(264, 20, 45, '2017-06-25'),
(263, 20, 42, '2017-06-25'),
(262, 33, 67, '2017-06-25'),
(261, 33, 59, '2017-06-25'),
(260, 33, 52, '2017-06-25'),
(259, 33, 48, '2017-06-25'),
(258, 33, 45, '2017-06-25'),
(257, 33, 43, '2017-06-25'),
(256, 16, 53, '2017-06-25'),
(255, 16, 45, '2017-06-25'),
(254, 16, 49, '2017-06-25'),
(253, 16, 41, '2017-06-25'),
(252, 9, 67, '2017-06-25'),
(251, 9, 62, '2017-06-25'),
(250, 9, 50, '2017-06-25'),
(249, 9, 45, '2017-06-25'),
(248, 9, 51, '2017-06-25'),
(247, 9, 43, '2017-06-25'),
(246, 18, 64, '2017-06-25'),
(245, 18, 44, '2017-06-25'),
(244, 18, 60, '2017-06-25'),
(243, 18, 54, '2017-06-25'),
(242, 18, 47, '2017-06-25'),
(241, 18, 42, '2017-06-25'),
(234, 12, 43, '2017-06-25'),
(233, 42, 57, '2017-06-25'),
(232, 42, 53, '2017-06-25'),
(231, 42, 47, '2017-06-25'),
(230, 42, 46, '2017-06-25'),
(229, 42, 43, '2017-06-25'),
(240, 42, 68, '2017-06-25'),
(239, 12, 70, '2017-06-25'),
(238, 12, 62, '2017-06-25'),
(237, 12, 51, '2017-06-25'),
(236, 12, 50, '2017-06-25'),
(235, 12, 44, '2017-06-25'),
(228, 45, 64, '2017-06-25'),
(227, 45, 57, '2017-06-25'),
(226, 45, 51, '2017-06-25'),
(225, 45, 48, '2017-06-25'),
(224, 45, 46, '2017-06-25'),
(223, 45, 43, '2017-06-25');

--
-- Triggers `elect_process`
--
DELIMITER $$
CREATE TRIGGER `datecheck_restictioncheck` BEFORE INSERT ON `elect_process` FOR EACH ROW BEGIN
	DECLARE v1,v2 DATE;
    DECLARE p1 INT;
    DECLARE pa,co,ele,pid INT;
    DECLARE a,b,c,d INT;
    
    select post_id 
    into p1 
    from candidate where c_id = NEW.candid_id;
    
	select elect_start,elect_end
    INTO v1,v2
    from post where p_id=p1;
    
    if v1 > NEW.elect_time OR v2 < NEW.elect_time THEN
    CALL `Error: Wrong values for date (date not in between)`;
    END IF;
   
	select post_id into pid from candidate where   candidate.c_id=NEW.candid_id;
    
    select count(*) into a from candidate where NEW.candid_id = candidate.c_id;
    
    if a=0 THEN
    CALL `Error: NO SUCH CANDIDATE`;
    END IF;
    
    select count(*) into b from candidate,post where NEW.candid_id = candidate.c_id and candidate.post_id = post.p_id and post.elect_start <= NEW.elect_time and post.elect_end >= NEW.elect_time ;
    
   	if b=0 THEN
    CALL `Error: DATE NOT IN BETWEEN`;
    END IF;
    
    select count(*) into c from elect_process,candidate,post where NEW.candid_id = candidate.c_id and candidate.post_id = post.p_id;
    
    if c=0 THEN
    CALL `Error: NO SUCH POST`;
    END IF; 
    
    select count(*) into d from elect_process,candidate,post where NEW.candid_id = candidate.c_id and candidate.post_id = post.p_id and post.elect_start <= NEW.elect_time and post.elect_end >= NEW.elect_time ;
    
   	if d=0 THEN
    CALL `Error:MISS MATCH BETWEEN TABLES`;
    END IF;
    
    select count(*) into ele from elect_process,candidate,post WHERE elect_process.student_id = NEW.student_id and elect_process.candid_id=NEW.candid_id and post.elect_start <= NEW.elect_time and post.elect_end >= NEW.elect_time ;
    
    if ele>0 THEN
    CALL `Error: YOU HAVE VOTED ALREADY`;
    END IF;
    
    select count(*) into co from restrict_s,post where restrict_s.post_id = post.p_id  and post.elect_start <= NEW.elect_time and post.elect_end >= NEW.elect_time and restrict_s.student_id = NEW.student_id ;
    
    
    if co > 0   THEN
    CALL `Error: YOU ARE RESTRICTED TO VOTE`;
    END IF;
    
    select count(*) into pa from student,batch where student.batch_id = batch.b_id and DATE(batch.f_year) <= NEW.elect_time and DATE(batch.t_year) >= NEW.elect_time and student.s_id=NEW.student_id;
    
    if pa=0 THEN
    CALL `Error: PASSED OUT STUDENT`;
    END IF;  
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `e_desc` varchar(20) NOT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_desc`, `e_date`) VALUES
(2, 'result published', 'the result for elect', '2017-01-01'),
(3, 'qdsd', 'asdasd', '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `image_location`
--

CREATE TABLE `image_location` (
  `m_id` int(6) NOT NULL,
  `student_id` int(6) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_location`
--

INSERT INTO `image_location` (`m_id`, `student_id`, `image`) VALUES
(23, 9, 'image/download.jpg'),
(22, 20, 'image/imageccccs.jpeg'),
(21, 25, 'image/imagsdfes.jpeg'),
(20, 25, 'image/Beautifsul.jpg'),
(19, 16, 'image/Beautiful.jpg'),
(18, 16, 'image/imasdsadges.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `is_id` int(6) NOT NULL,
  `is_name` varchar(20) NOT NULL,
  `is_date` date NOT NULL,
  `is_details` varchar(100) NOT NULL,
  `resolved` int(11) DEFAULT '0',
  `student_gen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`is_id`, `is_name`, `is_date`, `is_details`, `resolved`, `student_gen`) VALUES
(15, 'College Ground', '2019-12-03', 'Not able to play inside ground', 0, 'ccna1401'),
(16, 'transportation', '2019-12-05', 'Buses dont arrive on time', 0, 'bcom1501'),
(17, 'cultural program', '2019-12-05', 'not well conducted', 0, 'ceddcedw1507'),
(18, 'ragging', '2019-12-05', 'students dont behave to their juniors', 0, 'ceddcedw1503');

--
-- Triggers `issues`
--
DELIMITER $$
CREATE TRIGGER `check_student_gen` BEFORE INSERT ON `issues` FOR EACH ROW BEGIN
	DECLARE v1 INT;
    SELECT count(*) into v1 from student,candidate where student.s_gen=NEW.student_gen and candidate.c_id=student.s_id;
    if v1=0 THEN
		  CALL `Error: this candidate not valid :(`;   	
    END IF;	
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(6) UNSIGNED NOT NULL,
  `f_date` date NOT NULL,
  `t_date` date NOT NULL,
  `elect_start` date NOT NULL,
  `elect_end` date NOT NULL,
  `post_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `f_date`, `t_date`, `elect_start`, `elect_end`, `post_id`) VALUES
(43, '2019-09-19', '2019-09-21', '2019-09-22', '2019-09-24', 1),
(42, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 4),
(41, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 1),
(40, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 6),
(39, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 5),
(38, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 3),
(37, '2017-06-20', '2017-06-22', '2017-06-25', '2017-06-28', 2),
(48, '2019-12-10', '2019-12-13', '2019-12-15', '2019-12-20', 12),
(47, '2019-12-10', '2019-12-13', '2019-12-15', '2019-12-20', 20),
(46, '2019-10-19', '2019-10-21', '2019-10-21', '2019-10-24', 10),
(45, '2019-10-19', '2019-10-21', '2019-10-21', '2019-10-24', 1),
(44, '2019-09-19', '2019-09-21', '2019-09-22', '2019-09-24', 6);

--
-- Triggers `post`
--
DELIMITER $$
CREATE TRIGGER `check_date` BEFORE INSERT ON `post` FOR EACH ROW BEGIN
  DECLARE da date;
  IF NEW.f_date > NEW.t_date THEN
    CALL `Error: Application begin date is after end date`; 
  END IF;
  
  IF NEW.elect_start > NEW.elect_end THEN
    CALL `Error: election start date  is after end date`;
  END IF;
  
  IF NEW.t_date > NEW.elect_start THEN
    CALL `Error: to date is after election`; 
  END IF;
  
  select max(elect_end)  
  INTO da from post 
  where post_id = NEW.post_id;
  
  IF NEW.elect_start < da THEN
    CALL `Error: election start date behind`; 
  END IF;
  
    
 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post_name`
--

CREATE TABLE `post_name` (
  `p_id` int(6) UNSIGNED NOT NULL,
  `p_name` varchar(10) NOT NULL,
  `p_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_name`
--

INSERT INTO `post_name` (`p_id`, `p_name`, `p_duration`) VALUES
(1, 'chairman', 5),
(2, 'vice_chair', 1),
(3, 'university', 1),
(4, 'arts', 1),
(5, 'sports', 1),
(6, 'finance', 1),
(7, 'secrectory', 1),
(9, 'entertainm', 1),
(10, 'mcaincharg', 1),
(11, 'fhfdsss', 1),
(12, 'environmen', 1),
(17, 'drinkling', 2),
(20, 'wellness', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restrict_s`
--

CREATE TABLE `restrict_s` (
  `r_id` int(6) UNSIGNED NOT NULL,
  `student_id` int(6) NOT NULL,
  `post_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restrict_s`
--

INSERT INTO `restrict_s` (`r_id`, `student_id`, `post_id`) VALUES
(2, 13, 43),
(3, 13, 42),
(4, 65, 48);

-- --------------------------------------------------------

--
-- Stand-in structure for view `results`
-- (See below for the actual view)
--
CREATE TABLE `results` (
`p_name` varchar(10)
,`student` varchar(20)
,`cou` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(6) UNSIGNED NOT NULL,
  `s_gen` varchar(20) NOT NULL,
  `s_name` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `batch_id` int(6) UNSIGNED NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_gen`, `s_name`, `sex`, `address`, `phone`, `batch_id`, `password`) VALUES
(13, 'ceddcedw1405', 'ashil', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675675621', 7, '123123123'),
(12, 'ceddcedw1404', 'dfgrwes', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675675671', 7, '123123123'),
(11, 'ceddcedw1403', 'arjun', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675675672', 7, 'rfvrfvrfv'),
(10, 'ceddcedw1402', 'dfgrw', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675675675', 7, '345345345'),
(9, 'ceddcedw1401', 'dfgdg', 'M', 'tgrtrtvdvd', '1232343453', 7, '234234234'),
(14, 'ceddcedwh1401', 'viyola', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674532', 8, '123123123'),
(15, 'ceddcedwh1402', 'qdqwqcd', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674501', 8, '123123123'),
(16, 'ceddcedwh1403', 'stephy', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674502', 8, '123123123'),
(17, 'ceddcedwh1404', 'qdqwqertq', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674503', 8, '123123123'),
(18, 'ceddcedwh1405', 'qdqwqertqwe', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674504', 8, '123123123'),
(19, 'ceddced1401', 'sachin', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674505', 6, '123123123'),
(20, 'ceddced1402', 'anjaly', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674506', 6, '123123123'),
(21, 'ceddced1403', 'vrfsdsdsbgt', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674507', 6, '123123123'),
(22, 'ccna1401', 'vrfscedce', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674508', 9, '123123123'),
(23, 'ccna1402', 'vrfasd', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674509', 9, '123123'),
(24, 'ccna1403', 'vrfaced', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674510', 9, '123123'),
(25, 'ccna1404', 'vrfacedxsw', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674511', 9, '123123'),
(26, 'bcom1401', 'thahani', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674512', 10, '234234'),
(27, 'bcom1402', 'rinto', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674513', 10, 'sdfsdf'),
(28, 'bcom1403', 'vrfacewer', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674514', 10, '123'),
(29, 'bcom1404', 'vrfacedfg', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674515', 10, '123123'),
(30, 'ceddced1601', 'jinu', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674518', 11, '123'),
(31, 'ceddced1602', 'vrfaceert', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674519', 11, '123'),
(32, 'ceddced1603', 'elsa', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674520', 11, '123'),
(33, 'ceddced1604', 'vrfacbgf', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674521', 11, '1231'),
(34, 'ceddcedw1601', 'sona', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674522', 12, '123'),
(35, 'ceddcedw1602', 'vrfacvfr', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674523', 12, '123'),
(36, 'ceddcedw1603', 'raimy', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674524', 12, '123'),
(37, 'ceddcedwh1601', 'cvefgdtt', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674525', 13, '123'),
(38, 'ceddcedwh1602', 'cvefgdvrf', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674526', 13, '123'),
(39, 'ceddcedwh1603', 'cvefgdvrfv', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674527', 13, '123'),
(40, 'ceddcedwh1604', 'cvefgdwer', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674528', 13, '2342'),
(41, 'ccna1601', 'manu', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674529', 14, '123'),
(42, 'ccna1602', 'jestina', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674530', 14, '123'),
(43, 'ccna1603', 'mdsjnwd', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674531', 14, '123'),
(44, 'ccna1604', 'mdsjnwew', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674533', 14, '123'),
(45, 'bcom1601', 'mdsjndsc', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674534', 15, '123'),
(46, 'bcom1602', 'joseph', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674535', 15, '123'),
(47, 'bcom1603', 'mdsjxdfvd', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674536', 15, '123'),
(48, 'bcom1604', 'mdsjxsdf', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674537', 15, '123'),
(49, 'bcom1605', 'mdsfrt', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674538', 15, '123'),
(50, 'ceddced1501', 'evelin', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674539', 16, '123'),
(51, 'ceddced1502', 'qpwoecsd', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674541', 16, '123'),
(52, 'ceddced1503', 'reshma', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674542', 16, '123'),
(53, 'ceddced1504', 'qpwoetop', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674543', 16, '123'),
(54, 'ceddced1505', 'qpwoetop', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674544', 16, '123'),
(55, 'ceddced1506', 'qpwoetosp', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674545', 16, '123'),
(56, 'ceddcedw1501', 'amritha', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674546', 17, '123'),
(57, 'ceddcedw1502', 'qpwsddoetosp', 'M', 'tgrtrtvdvd sdvsdfdfs', '5675674547', 17, '123'),
(58, 'ceddcedw1503', 'qpoetosp', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674548', 17, '123'),
(59, 'ceddcedw1504', 'qpoetosp', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674549', 17, '123'),
(60, 'ceddcedw1505', 'qpoetospsdf', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674550', 17, '123'),
(61, 'ceddcedw1506', 'qpoetodfdfgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674551', 17, '123'),
(62, 'ceddcedw1507', 'qpoetodqwefdfgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '5675674552', 17, '123'),
(63, 'ceddcedwh1501', 'qpoetodqwefdfgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787401', 18, '123'),
(64, 'ceddcedwh1502', 'qpoetodqwefgs', 'M', 'tgrtrtvdvd sdvsdfdfs', '3248787402', 18, '123'),
(65, 'ceddcedwh1503', 'oetodqwefgs', 'M', 'tgrtrtvdvd sdvsdfdfs', '3248787403', 18, '123'),
(66, 'ccna1501', 'oetodqwsdefgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787404', 19, '123'),
(67, 'ccna1502', 'oetodqsdefgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787405', 19, '123'),
(68, 'ccna1503', 'oetojsdefgs', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787406', 19, '123'),
(69, 'ccna1504', 'oetojksdefgs', 'M', 'tgrtrtvdvd sdvsdfdfs', '3248787407', 19, '123'),
(70, 'bcom1501', 'athul', 'M', 'tgrtrtvdvd sdvsdfdfs', '3248787408', 20, '123'),
(71, 'bcom1502', 'zetojksdefjiu', 'M', 'tgrtrtvdvd sdvsdfdfs', '3248787409', 20, '123'),
(72, 'bcom1503', 'zetojksdefdfjiu', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787410', 20, '123'),
(73, 'bcom1504', 'zetojksdefdfjiuw', 'F', 'tgrtrtvdvd sdvsdfdfs', '3248787411', 20, '123'),
(79, 'ccna1903', 'JISSON', 'M', 'abcd HOUSE', '9454431231', 21, '123'),
(75, 'ceddced1507', 'kunnan', 'M', 'koppe', '9454433444', 16, '123123123'),
(76, 'ceddcedw1407', 'kunnan', 'M', 'scscscsc', '9454433447', 7, '123123'),
(77, 'ccna1901', 'suntharan', 'M', 'koli mile khaya', '9454433448', 21, '123'),
(78, 'ccna1902', 'haha', 'M', 'ddd', '9454476444', 21, '123'),
(80, 'ceddcedwh1901', 'ashwin', 'M', 'ABCD HOUSE', '9447812311', 24, '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_page`
--

CREATE TABLE `student_page` (
  `p_id` int(6) NOT NULL,
  `student_id` int(6) NOT NULL,
  `personal_profie` varchar(100) DEFAULT NULL,
  `work_experience` varchar(100) DEFAULT NULL,
  `key_skills` varchar(100) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `teachers_note` varchar(100) DEFAULT NULL,
  `validated` int(6) NOT NULL DEFAULT '0',
  `honest` int(6) DEFAULT '0',
  `confidence` int(6) DEFAULT '0',
  `inspiring` int(6) DEFAULT '0',
  `commitment` int(6) DEFAULT '0',
  `communication` int(6) DEFAULT '0',
  `decision_making` int(6) DEFAULT '0',
  `accountability` int(6) DEFAULT '0',
  `counter` int(6) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_page`
--

INSERT INTO `student_page` (`p_id`, `student_id`, `personal_profie`, `work_experience`, `key_skills`, `education`, `teachers_note`, `validated`, `honest`, `confidence`, `inspiring`, `commitment`, `communication`, `decision_making`, `accountability`, `counter`) VALUES
(2, 13, 'scasc', 'ascasc', 'ascasc', 'ascasc', NULL, 0, 12, 12, 13, 14, 13, 12, 11, 7),
(3, 31, 'my name is jerin', 'worked everywhere', 'no special skills just human', 'not a big deal...', NULL, 0, 7, 7, 7, 7, 7, 7, 7, 8),
(4, 30, ' xzzxxzxzxzxdfvdfv', 'fvfvxdfvdfvdfvfdv\r\ndvf\r\ndxv\r\n\r\nxdf\r\nv\r\nxdf\r\nvxdf\r\nvxd\r\nfvx\r\ndfv\r\nx\r\ndfvdxfvdfvxdfvxdfvfdvvf', 'dfvdxfvdxf\r\nv\r\nxdfv\r\nd\r\nfv\r\ndx\r\nv\r\nxdfvxdfvxd\r\nfv\r\nxd\r\nfv\r\n\r\ndxvfvxxdfvxdfvxdfvdxfvf', 'dxfvxdfvxdfvdvxdfvd\r\nfvdf\r\nvdv\r\ndf\r\nvdfvdfvdvxdfvxdvfdxfvdxfvxfvxdfvdfvdfv\r\ndfv\r\ndfv\r\ndfvdfvxdfvdxfv', 'handsome', 1, 11, 12, 11, 11, 12, 11, 11, 5),
(5, 40, 'svcsdcscsdc', 'dcsdcscd', 'sdcsdcsd', 'csdcsdc', NULL, 0, 1, 2, 3, 4, 3, 2, 2, 1),
(6, 45, 'zsdcsd zsdczsdczsdc', 'zsd sdczdsczsd sczdsczdsczsdczd', 'DScsCDSCSDCSDcSDCd', 'sDCSDCSDCsvfSfcDScSDcd', NULL, 0, 4, 5, 6, 7, 6, 5, 4, 2),
(7, 28, 'we are one', 'we are one', 'we are one', 'sdc', 'innovative', 1, 14, 16, 16, 15, 16, 15, 12, 5),
(8, 25, 'currently persuing dist', 'worked in infopark', 'stiching', 'very very educates', NULL, 0, 8, 6, 8, 7, 10, 7, 9, 4),
(9, 20, 'hello', 'dckjhidc', 'djchjdcb', 'djcgduch', NULL, 0, 8, 9, 11, 11, 9, 13, 9, 4),
(10, 70, 'I AM A LOVING PERSON', 'NO EXPERIENCE', 'BETTER UNDERSTANDING OF PEERS', '', NULL, 0, 2, 2, 2, 2, 2, 2, 2, 1),
(11, 48, 'I AM DOING MY MCA', 'NO EXPERIENCE', 'I AM WELL INFORMED', 'COMPLETED MCA', NULL, 0, 1, 1, 1, 1, 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_pages`
--

CREATE TABLE `user_pages` (
  `page_link` varchar(20) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_pages`
--

INSERT INTO `user_pages` (`page_link`, `page_name`, `page_id`) VALUES
('viewall.php', 'VIEW_PROFILE', 2),
('election_process.php', 'ELECT_CANDIDATE', 4),
('candidate.php', 'JOIN_CANDIDATE', 5),
('result_student.php', 'RESULT_VIEW', 9),
('home.php', 'home', 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_name`
-- (See below for the actual view)
--
CREATE TABLE `view_name` (
`dbms` varchar(5)
,`TABLE_SCHEMA` varchar(64)
,`TABLE_NAME` varchar(64)
,`COLUMN_NAME` varchar(64)
,`ORDINAL_POSITION` bigint(21) unsigned
,`DATA_TYPE` varchar(64)
,`CHARACTER_MAXIMUM_LENGTH` bigint(21) unsigned
,`CONSTRAINT_TYPE` varchar(64)
,`REFERENCED_TABLE_SCHEMA` varchar(64)
,`REFERENCED_TABLE_NAME` varchar(64)
,`REFERENCED_COLUMN_NAME` varchar(64)
);

-- --------------------------------------------------------

--
-- Structure for view `results`
--
DROP TABLE IF EXISTS `results`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results`  AS  select `post_name`.`p_name` AS `p_name`,`student`.`s_name` AS `student`,count(0) AS `cou` from ((((`elect_process` join `post`) join `post_name`) join `candidate`) join `student`) where ((`candidate`.`c_id` = `elect_process`.`candid_id`) and (`candidate`.`post_id` = `post`.`p_id`) and (`post`.`post_id` = `post_name`.`p_id`) and (`candidate`.`c_id` = `student`.`s_id`) and (`post`.`elect_start` = '2019-10-21')) group by `candidate`.`c_id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_name`
--
DROP TABLE IF EXISTS `view_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_name`  AS  select 'mysql' AS `dbms`,`t`.`TABLE_SCHEMA` AS `TABLE_SCHEMA`,`t`.`TABLE_NAME` AS `TABLE_NAME`,`c`.`COLUMN_NAME` AS `COLUMN_NAME`,`c`.`ORDINAL_POSITION` AS `ORDINAL_POSITION`,`c`.`DATA_TYPE` AS `DATA_TYPE`,`c`.`CHARACTER_MAXIMUM_LENGTH` AS `CHARACTER_MAXIMUM_LENGTH`,`n`.`CONSTRAINT_TYPE` AS `CONSTRAINT_TYPE`,`k`.`REFERENCED_TABLE_SCHEMA` AS `REFERENCED_TABLE_SCHEMA`,`k`.`REFERENCED_TABLE_NAME` AS `REFERENCED_TABLE_NAME`,`k`.`REFERENCED_COLUMN_NAME` AS `REFERENCED_COLUMN_NAME` from (((`information_schema`.`tables` `t` left join `information_schema`.`columns` `c` on(((`t`.`TABLE_SCHEMA` = `c`.`TABLE_SCHEMA`) and (`t`.`TABLE_NAME` = `c`.`TABLE_NAME`)))) left join `information_schema`.`key_column_usage` `k` on(((`c`.`TABLE_SCHEMA` = `k`.`TABLE_SCHEMA`) and (`c`.`TABLE_NAME` = `k`.`TABLE_NAME`) and (`c`.`COLUMN_NAME` = `k`.`COLUMN_NAME`)))) left join `information_schema`.`table_constraints` `n` on(((`k`.`CONSTRAINT_SCHEMA` = `n`.`CONSTRAINT_SCHEMA`) and (`k`.`CONSTRAINT_NAME` = `n`.`CONSTRAINT_NAME`) and (`k`.`TABLE_SCHEMA` = `n`.`TABLE_SCHEMA`) and (`k`.`TABLE_NAME` = `n`.`TABLE_NAME`)))) where ((`t`.`TABLE_TYPE` = 'BASE TABLE') and (`t`.`TABLE_SCHEMA` not in ('INFORMATION_SCHEMA','mysql'))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin_pages`
--
ALTER TABLE `admin_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_name` (`b_name`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `candid_pages`
--
ALTER TABLE `candid_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_name` (`d_name`);

--
-- Indexes for table `elect_process`
--
ALTER TABLE `elect_process`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `candid_id` (`candid_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `image_location`
--
ALTER TABLE `image_location`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`is_id`),
  ADD KEY `student_gen` (`student_gen`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_name`
--
ALTER TABLE `post_name`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_name` (`p_name`);

--
-- Indexes for table `restrict_s`
--
ALTER TABLE `restrict_s`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `student_post` (`student_id`,`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_gen` (`s_gen`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `student_page`
--
ALTER TABLE `student_page`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `user_pages`
--
ALTER TABLE `user_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `page_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `c_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `candid_pages`
--
ALTER TABLE `candid_pages`
  MODIFY `page_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `elect_process`
--
ALTER TABLE `elect_process`
  MODIFY `e_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_location`
--
ALTER TABLE `image_location`
  MODIFY `m_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `is_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `post_name`
--
ALTER TABLE `post_name`
  MODIFY `p_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `restrict_s`
--
ALTER TABLE `restrict_s`
  MODIFY `r_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `student_page`
--
ALTER TABLE `student_page`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_pages`
--
ALTER TABLE `user_pages`
  MODIFY `page_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
