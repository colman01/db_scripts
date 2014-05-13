SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `videoQuiz`
--

--
-- Table structure for table `quizData`
--

CREATE TABLE IF NOT EXISTS `quizData` (
   `question` varchar(100) NOT NULL,
   `answer1` varchar(100) NOT NULL,
   `answer2` varchar(100) NOT NULL,
   `answer3` varchar(100) NOT NULL,
   `answer4` varchar(100) NOT NULL,
   `correctAnswer` int(11) NOT NULL,
   `feedbackQuestion` varchar(100) NOT NULL,
   `feedbackInputAnswer` varchar(100) NOT NULL,
   `optionQuestion` varchar(100) NOT NULL,
   `optionAnswer1` varchar(100) NOT NULL,
   `optionAnswer2` varchar(100) NOT NULL,
   `optionAnswer3` varchar(100) NOT NULL,
   `optionAnswer4` varchar(100) NOT NULL,
   `optionSelected` int(11) NOT NULL,
   `rating` FLOAT(11) NOT NULL,
   `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- data for table `quizData`
--

INSERT INTO `videoQuiz`.`quizData` (`question`, `answer1`, `answer2`, `answer3`, `answer4`, `correctAnswer`, `feedbackQuestion`, `feedbackInputAnswer`, `optionQuestion`, `optionAnswer1`, `optionAnswer2`, `optionAnswer3`, `optionAnswer4`, `optionSelected`, `rating`, `quiz_id`) VALUES ('what color is chocolate', 'brown', 'not brown', 'white', 'black', '1', 'product feedback question', '', 'Your opinion please', 'opinion 1', 'opinion 2', 'opinion 3', 'opinion 4', '', '.2', '3');
