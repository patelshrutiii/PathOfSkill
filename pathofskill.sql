-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 12:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathofskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankid` int(5) NOT NULL,
  `bankname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankid`, `bankname`) VALUES
(1, 'IDBI'),
(2, 'SBI'),
(3, 'HDFC'),
(4, 'BOB'),
(5, 'BOI'),
(6, 'ICICI'),
(7, 'Axis'),
(8, 'PNB'),
(9, 'UCO'),
(10, 'IDFC'),
(11, 'Kotak'),
(12, 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `totalamount` int(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billid`, `userid`, `uploadcourseid`, `totalamount`, `date`) VALUES
(1, 'abc123', 8, 5000, '10-5-2021'),
(116, 'abc123', 8, 7000, '27-05-2021 08:17:54'),
(117, 'shruti2001', 39, 700, '09-06-2021 08:08:06'),
(118, 'shruti2001', 40, 2500, '09-06-2021 08:08:29'),
(119, 'shruti2001', 1, 400, '09-06-2021 08:48:39'),
(120, 'shruti2001', 2, 455, '09-06-2021 08:49:01'),
(121, 'ram123', 1, 400, '09-06-2021 08:50:53'),
(122, 'ram123', 1, 400, '09-06-2021 08:51:19'),
(123, 'ram123', 5, 455, '09-06-2021 08:51:37'),
(124, 'shruti2001', 14, 700, '10-06-2021 01:58:13'),
(125, 'shruti2001', 56, 555, '16-06-2021 09:48:16'),
(126, 'shruti2001', 56, 555, '16-06-2021 09:51:01'),
(127, 'shruti2001', 37, 1800, '16-06-2021 09:56:44'),
(128, 'shruti2001', 56, 555, '16-06-2021 09:58:08'),
(129, 'shruti2001', 56, 555, '16-06-2021 11:00:16'),
(130, 'shruti2001', 14, 700, '30-06-2021 02:31:03'),
(131, 'shruti2001', 16, 400, '01-07-2021 09:01:11'),
(136, 'ram123', 19, 0, '01-07-2021 09:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(5) NOT NULL,
  `categoryname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Development'),
(2, 'IT and software'),
(3, 'Photography'),
(4, 'Design'),
(5, 'Business & Marketing'),
(6, 'Music'),
(7, 'Writting'),
(8, 'Art'),
(9, 'Personal Development'),
(10, 'Helth & fitness'),
(11, 'Dance'),
(12, 'Food & Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `courses_upload`
--

CREATE TABLE `courses_upload` (
  `uploadcourseid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `categoryid` int(5) NOT NULL,
  `subcategoryid` int(5) NOT NULL,
  `coursename` varchar(40) DEFAULT NULL,
  `courseprofileimage` varchar(100) NOT NULL,
  `coursefeature` varchar(200) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `regularprice` int(10) NOT NULL,
  `level` varchar(15) NOT NULL,
  `totallength` varchar(10) NOT NULL,
  `relatednotes` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_upload`
--

INSERT INTO `courses_upload` (`uploadcourseid`, `tutorid`, `categoryid`, `subcategoryid`, `coursename`, `courseprofileimage`, `coursefeature`, `price`, `regularprice`, `level`, `totallength`, `relatednotes`, `status`) VALUES
(1, 'radhika2000', 8, 25, 'Drawing The Secrets to Drawing', 'courseimage/Drawing The Secrets to Drawing.jpeg', 'A comprehensive video and ebook course designed for people wanting to learn the core concepts of dra', 400, 450, 'Beginner', '5 minuts', 'Put a headline on the page.', 0),
(2, 'radhika2000', 8, 25, 'The Complete Drawing Masterclass', 'courseimage/The Complete Drawing Masterclass.jpg', 'Apply the art and practice of the fundamental skill of drawing, to bring your drawings to life in th', 455, 555, 'Expert', '5minut', 'Brands matter when it comes to pens, pencils, crayons and markers.', 0),
(4, 'radhika2000', 8, 25, 'The Secrets to Drawing', 'courseimage/The Secrets to Drawing.jpg', 'Learn how to draw with this complete beginner to advanced drawing course!', 600, 755, 'Intermediate', '35 minutes', 'Give a page personality with borders and dividers. ', 0),
(5, 'radhika2000', 8, 26, 'Mastering Brushstrokes - Part 1', 'courseimage/Mastering Brushstrokes - Part 1.jpg', 'Master key brushstrokes that lie at the core of watercolor, oil, and acrylic painting.', 455, 500, 'Beginner', '7 minutes', 'Students should have very basic knowledge of their chosen painting medium.', 0),
(7, 'radhika2000', 8, 26, 'Watercolours With Confidence!', 'courseimage/Watercolours With Confidence!.jpeg', 'Learn step by step how to paint beautiful watercolour artwork with confidence. Comprehensive course for beginners & up!', 455, 555, 'Intermediate', '10 minutes', 'Bring along a willingness to learn and try the fun projects in the course.', 0),
(9, 'radhika2000', 8, 26, 'PAINT FROM BEGINNER TO MASTER', 'courseimage/PAINT FROM BEGINNER TO MASTER.jpg', 'You’ll know the best supplies mediums and cleaners to buy and how to use them.', 300, 345, 'Expert', '45 minutes', 'A basic understanding of drawing and painting would be helpful but not necessary.', 0),
(10, 'radhika2000', 8, 25, 'The Colored Pencil Drawing Course', 'courseimage/The Colored Pencil Drawing Course.jpg', 'Learn how to become a pro with colored pencils Mix colors and understand color theory Be familiar with common colored pencil surfaces and colored penc', 0, 0, 'Intermediate', '10 minutes', 'No prior knowledge or experience is necessary, just a willingness to learn.', 0),
(11, 'radhika2000', 8, 26, 'How to Loosen Up Your Painting', 'courseimage/How to Loosen Up Your Painting.jpg', 'Use brushwork skills to paint in a loose, impressionist style. Identify shapes, color and light effects with confidence.', 0, 0, 'Expert', '50 minuts', 'Students need basic painting skills.', 0),
(14, 'shruti2001', 11, 34, 'Hip Hop Dance For Beginners', 'courseimage/Hip Hop Dance For Beginners.jpg', 'Understand basic hip hop grooves, movement, and footowork.', 700, 750, 'Beginner', '40 minutes', 'Comfortable clothes they can dance in.', 0),
(16, 'shruti2001', 11, 34, 'Hip Hop Dance ', 'courseimage/Hip Hop Dance .jpg', 'Understand basic hip hop grooves, movement, and footowork. Understand basic 8 counts', 400, 450, 'Beginner', '45 minutes', 'Room to dance.', 0),
(17, 'shruti2001', 11, 35, 'Learn How 2 Dance Salsa (Beginner)', 'courseimage/Learn How 2 Dance Salsa (Beginner).jpg', 'Learn and follow basic salsa patterns feel confident on the dance floor .', 700, 850, 'Expert', '80 minutes', 'Nothing. For absolute beginners.', 0),
(18, 'shruti2001', 11, 35, 'Learn How 2 Dance - Bachata', 'courseimage/Learn How 2 Dance - Bachata.jpeg', 'By the end of this course, you will be able to go out to a Latin night and feel comfortable dancing socially.', 800, 1000, 'Intermediate', '3 hours', 'Need a partner to practice your turn patterns.', 0),
(19, 'shruti2001', 11, 37, 'Learn How to Breakdance', 'courseimage/Learn How to Breakdance.jpeg', 'Teach you the complete foundation of breakdancing/b-boying. Be able to create your own freestyle Syncopate moves to music', 0, 0, 'Intermediate', '1 hour', 'Room To Dance Patience', 0),
(27, 'juli1099', 3, 8, 'Photography Masterclass', 'courseimage/Photography Masterclass.jpeg', 'The Best Online Professional Photography Class: How to Take Amazing Photos for Beginners & Advanced Photographers.', 1100, 1200, 'Expert', '2.5 hours', 'You should be excited to learn photography, and ready to take action!', 0),
(28, 'juli1099', 3, 9, 'Complete Filmmaker Guide', 'courseimage/Complete Filmmaker Guide.jpeg', 'Get 7 Years of Filmmaking Experience - Everything from Pre-Production to Editing - in 5 Hours.', 900, 1000, 'Intermediate', '1.5 hour', '', 0),
(29, 'juli1099', 3, 10, 'The Complete Video Production', 'courseimage/The Complete Video Production.jpeg', 'This online video production course will teach you how to make amazing videos, whether you use a smartphone, webcam, DSLR, mirrorless, or professional camera. ', 490, 500, 'Beginner', '2 hours', 'Having any type of camera that shoots video will help.', 0),
(30, 'heni2002', 3, 8, 'Beginner Canon Digital SLR (DSLR)', 'courseimage/Beginner Canon Digital SLR (DSLR).jpeg', 'You will learn how to see your images in a more sophisticated way, like a professional photographer.', 0, 0, 'Beginner', '30 minutes', 'Own (or have borrowed) a Canon DSLR is needed.', 0),
(31, 'heni2002', 3, 10, 'Photography  Part I', 'courseimage/Photography  Part I.jpg', ' To demonstrate easy tips for getting sharp images.', 0, 450, 'Intermediate', '45 minutes', 'Ready to take action!', 0),
(32, 'heni2002', 3, 9, ' Become a Better Photographer', 'courseimage/Become a Better Photographer.jpeg', 'In this course You will show some great ways of getting better landscape photos.', 670, 750, 'Expert', '1.5 hours', 'Any type of camera will be suitable for this course. ', 0),
(37, 'heni2002', 3, 10, 'Complete Photography:Beginner to Expert', 'courseimage/Complete Photography Beginner to Expert.jpg', 'Learn Portrait Photography, Landscape Photography, Stock Photography, Photography Composition, Black and White, and more', 1800, 2000, 'Intermediate', '3 hours', 'No prior knowledge on photography required.', 0),
(39, 'radhika2000', 6, 21, 'Music + Audio Production', 'courseimage/Music + Audio Production.jpg', 'Become a master at using Logic Pro X | Understand music production | Learn to record, edit & mix audio to a pro standard', 700, 850, 'Expert', '1.5 hours', 'You will need an internet connection to watch this videos.', 0),
(40, 'radhika2000', 6, 19, 'The Complete Mixing Masterclass', 'courseimage/The Complete Mixing Masterclass.jpg', 'The secret weapon of music making that will take your tracks from good to great.', 2500, 3000, 'Expert', '2.5 hours', 'Students should have access to an audio production platform -Ableton Live, Pro Tools, FL Studio.', 0),
(48, 'heni2002', 6, 19, 'Music Production in Ableton Live 10 ', 'courseimage/Music Production in Ableton Live 10 .jpg', 'Learn Music Production in Ableton Live 10 Today and Understand how to Create, Record and Edit Your Own Music + Live Sets', 540, 560, 'Expert', '2.5 hours', 'A Basic Understanding of Music', 0),
(55, 'Abhay1997', 11, 36, 'How To Freestyle Dance for Beginners', 'courseimage/How To Freestyle Dance for Beginners.jpg', '', 0, 0, 'Intermediate', '45 minutes', 'Yourself and a little space to dance. Living room, Kitchen etc.', 0),
(56, 'Abhay1997', 11, 36, 'Beginner (Street Dance)', 'courseimage/Beginner (Street Dance).jpg', 'An introduction to Breakdancing basics, including How to Groove, Toprock, Posture, Footwork, and Freeze!', 555, 599, 'Beginner', '3 hours', 'You will need an open space.', 0),
(57, 'Abhay1997', 11, 36, 'Free-Form Movement & Dance', 'courseimage/Free-Form Movement & Dance.jpg', 'An Introduction to Conscious & Ecstatic Dance Spaces', 490, 500, 'Expert', '3.5 hours', 'No previous experience or tools needed to learn about Conscious Dance.', 0),
(58, 'Riddhi2001', 11, 42, 'Learn Indian classical Dance', 'courseimage/Learn Indian classical Dance.jpg', 'Bharathanatyam', 490, 550, 'Expert', '4 hours', 'No requirement needed.', 0),
(59, 'Abhay1997', 11, 37, 'Official Breakdance course Mastery', 'courseimage/Official Breakdance course Mastery.jpg', 'Breakdance, breakdance, Breakdancing, dance, hip hop dance, Street dance, hiphop, bboy, calisthenics, parkour, gymnast', 0, 0, 'Expert', '55 minutes', 'Learn Breakdance', 0),
(60, 'Riddhi2001', 6, 19, 'Mixing for Music Producers', 'courseimage/Mixing for Music Producers.jpeg', 'Get your tracks radio-ready with this comprehensive guide to mixing for producers.', 0, 0, 'Intermediate', '1 hours', 'Any Digital Audio Workstation (DAW)', 0),
(61, 'Riddhi2001', 6, 20, 'Elite Singing Techniques - Phase I', 'courseimage/Elite Singing Techniques - Phase I.jpg', 'Step by step singing system proven to develop great technique and vocal mastery, Results are immediate!', 5000, 5500, 'Expert', '4.5 hours', 'Get rid of hoarseness, soreness, & vocal fatigure', 0),
(62, 'Riddhi2001', 6, 21, 'How to Master Emotions in Music Composit', 'courseimage/How to Master Emotions in Music Composition.jpeg', 'Create your Emotional Music Story in Music Composition', 490, 555, 'Beginner', '3 hours', 'The Foundations of Emotions in Music', 0),
(63, 'Abhay1997', 6, 20, 'Increase Vocal Range & Blend Registers', 'courseimage/Increase Vocal Range & Blend Registers.jpeg', 'Vocal Workouts To Get You Singing Higher, Louder & Stronger With More Flexibility', 490, 555, 'Intermediate', '3 hours', 'You will need a computer or phone to be able to watch the videos in this course.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_answer`
--

CREATE TABLE `course_answer` (
  `answerid` int(5) NOT NULL,
  `questionid` int(6) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_answer`
--

INSERT INTO `course_answer` (`answerid`, `questionid`, `userid`, `uploadcourseid`, `tutorid`, `description`) VALUES
(30, 1, 'shruti2001', 1, 'shruti2001', 'hypre text mark-up language '),
(31, 1, 'shruti2001', 1, 'shruti2001', 'hypre text mark-up language '),
(32, 3, 'abc123', 1, 'shruti2001', 'gvhbjn'),
(33, 4, 'shruti2001', 1, 'shruti2001', 'cash cadding stylesheet'),
(34, 5, 'shruti2001', 1, 'shruti2001', 'fcgvhbjnm');

-- --------------------------------------------------------

--
-- Table structure for table `course_question`
--

CREATE TABLE `course_question` (
  `questionid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_question`
--

INSERT INTO `course_question` (`questionid`, `userid`, `uploadcourseid`, `tutorid`, `question`, `description`) VALUES
(1, 'shruti2001', 1, 'shruti2001', 'what is html', 'dxfcgvbhjn'),
(3, 'abc123', 1, 'shruti2001', 'what is booting sysstem', 'dxfcgvbhjn'),
(4, 'shruti2001', 1, 'shruti2001', 'what is css', 'dxfcgvbhjn'),
(5, 'shruti2001', 1, 'shruti2001', 'what is c', 'dxfcgvbhjn'),
(6, 'shruti2001', 1, 'shruti2001', 'what is c++', 'dxfcgvbhjn'),
(7, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(8, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(9, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(10, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(11, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(12, 'shruti2001', 37, 'heni2002', 'what is python', 'dxfcgvbhjn'),
(13, 'shruti2001', 14, 'shruti2001', 'what is c', 'dxfcgvbhjn');

-- --------------------------------------------------------

--
-- Table structure for table `course_video_addition`
--

CREATE TABLE `course_video_addition` (
  `coursevideoid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `description` varchar(400) NOT NULL,
  `video` varchar(100) NOT NULL,
  `notes` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_video_addition`
--

INSERT INTO `course_video_addition` (`coursevideoid`, `tutorid`, `uploadcourseid`, `description`, `video`, `notes`) VALUES
(17, 'radhika2000', 1, 'This drawing course will take you from having little to draw advanced art and knowledge of drawing fundamentals. The course starts with the basics. ', 'tutorvideo/aReWP8.mp4', 'Black penc'),
(18, 'radhika2000', 1, ' Then you will learn about the fundamentals of drawing, which is an important part of creating professional art.', 'tutorvideo/MrfDNE.mp4', 'Big paper '),
(19, 'radhika2000', 2, 'It offers some of the most accessible drawing instructions.', 'tutorvideo/8RfVxF.mp4', 'Colored pe'),
(20, 'radhika2000', 2, 'In this drawing course, you will learn the basics of proportions and how to simplify the skeleton. You will get in-depth knowledge about the draw the skeleton and learn how to draw muscles. ', 'tutorvideo/wzpilg.mp4', 'Real face '),
(21, 'radhika2000', 2, 'This digital art class teaches you all the core fundamentals and advanced techniques for drawing and sketching characters well. This course is suited for both beginner and intermediate levels.', 'tutorvideo/Dtrh5C.mp4', 'Some basic'),
(22, 'radhika2000', 4, 'The tool and techniques you will learn in these digital art classes are rarely seen outside of private art academies. This one of the best online drawing courses is highly recommended for anyone interested in painting. ', 'tutorvideo/puowGA.mp4', 'Colored Pe'),
(23, 'radhika2000', 4, 'Basic SKILLS is a drawing course provides insights into the drawing process and provides some of the clearest, most available drawing instruction. In these illustration courses online, you will learn many techniques in this one of the best drawing courses.', 'tutorvideo/1L7UGh.mp4', 'All shades'),
(24, 'radhika2000', 4, 'This best online drawing class teaches how you can make lines, shapes, and volumes. You will also learn observational skills and draw what you see. To learn this course, you do not need any device, only a pencil is enough.', 'tutorvideo/aHtiRn.mp4', 'Colored pe'),
(25, 'radhika2000', 4, 'this video will give you all basic pencile informtion like how to sharp colored pencile , how to use it ,how to care and how erase easily.', 'tutorvideo/roln2X.mp4', 'sharpner a'),
(26, 'radhika2000', 7, 'Acrylic Painting From Beginner to Master is designed to teach anyone, from beginner to moderate skill levels, all of the fundamentals of acrylics you’ll ever need to create colorful, photo realistic paintings.', 'tutorvideo/n2zqiz.mp4', 'Learn Acrylic Painting For all Skill Lev'),
(27, 'radhika2000', 9, '“How to Paint: From Beginner to Master” Is designed to teach anyone from beginner to moderate, all of the fundamentals of oil painting you’ll ever need, in one, easy to manage course. Watch me demonstrate every lesson, step by step as I go into incredible detail of every aspect of creating a painting from start to finish!', 'tutorvideo/FLYROR.mp4', 'Oil Painting For All Skill Levels'),
(28, 'radhika2000', 9, 'You’ll Learn the difference between chroma, color and values and how to control them.\r\nThe best way to light and photograph, portrait (or any other subject) for a painting.', 'tutorvideo/VugNp3.mp4', 'A basic understanding of drawing and pai'),
(29, 'radhika2000', 9, 'I’ll teach you the perfect combination of colors to getting a beautiful, glowing flesh tone.\r\nBy the end of the class you’ll paint a portrait in full color.', 'tutorvideo/qGfQ76.mp4', 'Big paper with large chart. '),
(30, 'radhika2000', 9, 'A process and structure to creating a painting from start to finish, that’s easy for anyone to manage!\r\nYou’ll know the best supplies mediums and cleaners to buy and how to use them.', 'tutorvideo/mXNyLv.mp4', 'water-color with brushes are needed.'),
(31, 'radhika2000', 7, 'This course will show you how to assess a subject like an artist. Compose and paint a subject with confidence for maximum impact.\r\nYou will know how to mix colors to the correct value.', 'tutorvideo/RRMIGN.mp4', ' Learn how to add impact to your art.'),
(32, 'radhika2000', 10, 'In this 60 hour Learn to Draw: Learn to Paint course, you will learn to draw anything from your imagination and do it realistically. This is a vital skill to have. You will also learn to draw the human figure, muscles, heads, emotions, cartoons, develop your own style, perspective, 3D shapes, form, lighting, and so much more. You will even learn how to use Photoshop if that is something you are in', 'tutorvideo/gOMUBb.mp4', 'Learn to draw and paint; from your imagi'),
(33, 'radhika2000', 10, 'The essentials of painting are required to fully take advantage of the loose painting style.\r\nI have created this course to help artists that want to get an overall understanding of the link between painting fundamentals and the loose style. Although this is an advanced course you will still be able to enjoy the course with only the basic painting knowledge. \r\n\r\nThis course shows full painting dem', 'tutorvideo/hk9NkT.mp4', 'Learn to Paint in a Loose Style with Oil'),
(49, 'shruti2001', 20, 'How to Freestyle Street & Hip Hop dance from home. Gliding , Moonwalking , Waving.', 'tutorvideo/26FHIb.mp4', 'Yourself and a little space to dance.'),
(50, 'shruti2001', 20, ' Street dance/ hip hop dancing is one of the most exciting styles of dance. ', 'tutorvideo/xVKTDg.mp4', ' Living room, Kitchen etc space.'),
(51, 'shruti2001', 24, 'All of these elements with knowledge and tips will amazing moves on the dance floor.', 'tutorvideo/ginany.mp4', 'None'),
(52, 'shruti2001', 24, 'Learn moves from the 4 main Elements.', 'tutorvideo/o8rXW1.mp4', 'Basic Knowledge'),
(53, 'shruti2001', 25, 'Learn pro tips to take your dance to the next level!', 'tutorvideo/26D4qt.mp4', 'Basic Knowledge'),
(54, 'shruti2001', 25, 'Learn the basics of the Popping Street Dance Style\r\nBe able to Pop!', 'tutorvideo/XgyRMk.mp4', 'it is for complete beginners.'),
(55, 'shruti2001', 25, 'This is designed for people who are interested in street dance and poppin style.', 'tutorvideo/PqtcP8.mp4', 'Healthy body and street.'),
(56, 'shruti2001', 26, 'A bunch of sweet new dance moves that make you look awesome and feel happy!', 'tutorvideo/PXzQkF.mp4', 'Open practice space.'),
(57, 'shruti2001', 26, 'For Dancers (especially contemporary) looking to add a new body of vocabulary to their rep.\r\n', 'tutorvideo/56DQ3U.mp4', 'Stereo or speakers.'),
(58, 'shruti2001', 26, 'Circus arts performers looking to apply their skills in a different medium.\r\n', 'tutorvideo/MtCS2c.mp4', 'T-shirt or tank top.'),
(59, 'shruti2001', 23, 'Kathak is one of the eight major forms of Indian classical dance. It is indigenous to north of India.', 'tutorvideo/cueGlI.mp4', 'Basic taals.'),
(60, 'shruti2001', 23, 'This involves intrinsic footwork, hand gestures and facial expressions.', 'tutorvideo/GH8dTo.mp4', 'Basic concepts of kathak dance.'),
(62, 'juli1099', 27, 'This photography course is designed to teach you the ins and outs of photography, even if you have little to no experience with it, to help create profitable images that help you stand out from the crowd and sell.', 'tutorvideo/KVrzVI.mp4', 'Understand timeless video principles.'),
(63, 'juli1099', 27, 'This course is designed for all levels of photographers who want to improve their skills, take stellar images, and make money with their photos - especially great for any DSLR or mirrorless camera user.', 'tutorvideo/c3Ddev.mp4', 'You should have a camera.'),
(64, 'juli1099', 27, 'While there are plenty of digital photography courses that focus on specific styles or how to use gear .which is for beginner to advanced photographers.', 'tutorvideo/oEefsE.mp4', 'Understand how cameras work'),
(65, 'juli1099', 28, '1. Creative & Personal Skill Development \r\nBefore I even dive into the filmmaking aspects, I explain the secrets other courses leave out. These principles act as a framework for your creativity to build on, which include: \r\n•    Self Discovery \r\n•    Optimized daily routine ', 'tutorvideo/qt5P6x.mp4', 'Understanding of shooting and editing.'),
(66, 'juli1099', 28, 'Here I explain how to properly plan and develop your video before the production process, including: \r\n•     Guidelines that all films follow \r\n•     Pre-Production Process \r\n•     Research and Development ', 'tutorvideo/lyM5Bx.mp4', 'Camera and video editing software.'),
(67, 'juli1099', 28, 'I share the golden rules and timeless principles of filmmaking that will allow you to create incredible videos regardless of what equipment or editing software you are using. This portion will absolutely have the most impactful effect on your videos. A few of these techniques include: \r\n•     Mastering Your Lenses \r\n•     Key Principles of Lighting ', 'tutorvideo/c7ieIA.mp4', 'Prior knowledge of photography is must.'),
(68, 'juli1099', 29, 'Downloadable guides that will help you in every section of the course', 'tutorvideo/344ynC.mp4', 'Learn process of editing .'),
(69, 'juli1099', 29, 'Come up with great video topics that people will love watching and sharing.', 'tutorvideo/vYTvsf.mp4', 'No fancy camera is required.'),
(70, 'juli1099', 29, 'Light your videos with professional techniques, on a small budget\r\nRecord crisp and clean audio with different microphones in any environment', 'tutorvideo/LVmCIe.mp4', ' Geared for absolute beginners.'),
(71, 'radhika2000', 40, 'Mixing on any audio platform.', 'tutorvideo/bME7zf.mp4', 'access to an audio platform.'),
(72, 'radhika2000', 40, 'Professional Mixing Techniques in all styles of music.', 'tutorvideo/DEiwKX.mp4', 'equipments'),
(73, 'radhika2000', 39, 'Professional Mixing Techniques in all styles of music', 'tutorvideo/VgGV8u.mp4', 'Electronic dance music track'),
(74, 'radhika2000', 39, 'Master your tracks for commercial loudness and quality.', 'tutorvideo/P2QT6s.mp4', 'mgfgdbake your mixes sound.'),
(75, 'radhika2000', 5, 'Draw objects and a scene in one-point perspective.', 'tutorvideo/iCU5sN.mp4', 'pencil, paper, eraser, sharpener.'),
(76, 'radhika2000', 5, 'Combine various shapes and forms to produce more complicated drawings of objects and products.', 'tutorvideo/w3yecM.mp4', 'eraser, and pencil sharpener.'),
(78, 'radhika2000', 11, 'The Ultimate Digital Painting Course will show you how to create advanced art that will stand up as professional work. ', 'tutorvideo/YRGfru.mp4', 'Digital Painting Software'),
(79, 'radhika2000', 11, 'This is what you need to learn in order to draw figures like a pro and land that dream job.', 'tutorvideo/gldrqm.mp4', 'Pencil and paper.'),
(80, 'shruti2001', 14, 'Learn different grooves in order to show you have rhythm.', 'tutorvideo/KQyTeI.mp4', 'Room to dance.'),
(81, 'shruti2001', 14, 'Learn different moves in order to exemplify your grooves.', 'tutorvideo/6ANTKh.mp4', 'Students need clothing.'),
(82, 'shruti2001', 14, 'Learn different moves in order to exemplify your grooves.', 'tutorvideo/8awapT.mp4', 'Basic knowledge.'),
(83, 'shruti2001', 16, 'Learn how to combine different moves in order to create your own freestyle.', 'tutorvideo/rB1LbF.mp4', 'Determination to practice.'),
(84, 'shruti2001', 16, 'Understand basic hip hop grooves, movement, and footowork.', 'tutorvideo/BxdfcQ.mp4', 'Room to dance'),
(85, 'shruti2001', 17, 'have a good foundation for more intermediate and advanced steps.', 'tutorvideo/2WRsb4.mp4', 'Basic knowledge.'),
(86, 'shruti2001', 17, 'No materials or special shoes are needed. Just an open floor and a partner to practice with.', 'tutorvideo/mY4PdG.mp4', 'Nothing is required.'),
(87, 'shruti2001', 18, 'It will help if you have a partner to dance with but is not needed.', 'tutorvideo/8bxQAG.mp4', 'Room for dance.'),
(88, 'shruti2001', 18, 'This course is meant for people looking to learn and improve their bachata dancing.', 'tutorvideo/YMZkQy.mp4', 'Dance space around you to practice.'),
(89, 'shruti2001', 19, 'Teach you the complete foundation of breakdancing/b-boying.', 'tutorvideo/sFW8C2.mp4', 'Loves hard work.'),
(90, 'shruti2001', 19, 'Know how to perform without a boring facial expression.', 'tutorvideo/bUVQ9u.mp4', 'Comfortable clothes.'),
(91, 'heni2002', 30, 'You will learn how to see your images in a more sophisticated way, like a professional photographer.', 'tutorvideo/inGqAu.mp4', 'Own (or have borrowed) a Nikon DSLR.'),
(92, 'heni2002', 30, 'You will learn how to adjust your aperture and why you would choose one aperture over another.', 'tutorvideo/aXXXXP.mp4', 'model number that starts with D.'),
(93, 'heni2002', 31, 'To provide tips on getting better flash photos indoors.', 'tutorvideo/SKuFfG.mp4', 'Any type of camera will be suitable.'),
(94, 'heni2002', 31, 'To help understand image quality, resolution and the different camera types.', 'tutorvideo/qBoR9G.mp4', 'Any simple camera.'),
(95, 'heni2002', 32, 'You will know how to take amazing photos that impress your family and friends', 'tutorvideo/74S2PX.mp4', 'No prior knowledge of photography.'),
(96, 'heni2002', 32, 'You will know how to light your subjects with flash and natural lighting', 'tutorvideo/XMCZwA.mp4', 'No fancy camera is required.'),
(97, 'heni2002', 37, 'Will do practical projects with Photo Editing, Adobe Lightroo, Adobe Photoshop.', 'tutorvideo/MznhUy.mp4', 'No prior knowledge on photog. required.'),
(98, 'heni2002', 37, 'Will understand basic photography concepts, Exposure Triangle, ISO, Shutter Speed, Aperture.', 'tutorvideo/xQZgrD.mp4', 'No prior knowledge is required.'),
(99, 'Abhay1997', 57, '* Feel confident stepping into a Conscious Dance, non-verbal dance space knowing what these spaces are like', 'tutorvideo/YMrTtG.mp4', 'No previous experience needed.'),
(100, 'Abhay1997', 57, 'You will also learn some basics on how and when to connect safely and appropriately with others.', 'tutorvideo/wivHcs.mp4', 'Space to dance.'),
(101, 'Abhay1997', 56, 'Learn how to Dance! (Break dance) - Complete Beginner!', 'tutorvideo/UDLw1Y.mp4', 'open space to practice'),
(102, 'Abhay1997', 55, 'Learn basic dance moves and rhythms in streetdancing!', 'tutorvideo/fRxAGg.mp4', 'street or space like street.'),
(103, 'Abhay1997', 55, 'There are many benefits to dance, and now more then ever we need to be active and healthy.\r\nStrength.', 'tutorvideo/eAIcYU.mp4', 'open space.'),
(104, 'Riddhi2001', 58, 'Natya Shastra is an educator of Indian classical dance, Bharathanatyam. We teach Bharathanatyam from basics to expert level.', 'tutorvideo/4IBgM7.mp4', 'stay focused.'),
(105, 'Abhay1997', 59, 'This is the Beginners Guide to Breaking (Breakdance), and is suitable for people with little or no experience.', 'tutorvideo/avAGeP.mp4', 'Absolutely nothing'),
(106, 'Abhay1997', 59, 'Breaking, commonly known as Breakdance is one of the coolest Street Style dances. It requires a lot of practice and can look amazing when done right.', 'tutorvideo/H2BIgh.mp4', 'Basic Knowledge and History'),
(107, 'Abhay1997', 59, 'Learn pro tips to take your dance to the next level!', 'tutorvideo/U8nBgT.mp4', 'Absolutely nothing '),
(108, 'Riddhi2001', 60, 'Export a production session for mixdown\r\nPrepare a mix session with naming, organization, and color coding', 'tutorvideo/PCu8oR.mp4', 'Any Digital Audio Workstation (DAW)\r\n'),
(109, 'Riddhi2001', 60, 'This video is a comprehensive guide to mixing for music producers.', 'tutorvideo/qkxGu7.mp4', 'nothing is required.'),
(110, 'Riddhi2001', 61, 'This course is your \"Professional Training\" for singing. It is the most direct and to the point complete online singing course.', 'tutorvideo/NvgGeK.mp4', 'Daily Vocal Warm Ups'),
(111, 'Riddhi2001', 62, 'Advanced Techniques on Emotions and Direction', 'tutorvideo/duHbFg.mp4', 'You need a DAW\r\n'),
(112, 'Riddhi2001', 62, 'Guidelines on Shaping the Emotional Story of Your Music.', 'tutorvideo/yIfuo1.mp4', 'You should have Basic Knowledge'),
(113, 'Abhay1997', 63, 'his course is for those who have a basic knowledge of singing already and want to increase their vocal range and blend their vocal registers.', 'tutorvideo/4wwC7b.mp4', 'Improve Voice Flexibility\r\n'),
(114, '', 0, 'his course is for those who have a basic knowledge of singing already and want to increase their vocal range and blend their vocal registers.', 'tutorvideo/yAdxbk.mp4', 'Improve Voice Flexibility\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `pic`) VALUES
(1, '0', 'courseimage/abcd.jpg'),
(2, '0', 'courseimage/mno.jpg'),
(3, '0', 'courseimage/php.jpg'),
(4, 'abc.jpg', 'courseimage/abc.jpg'),
(5, 'xyz', 'courseimage/xyz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribe`
--

CREATE TABLE `email_subscribe` (
  `subscribeid` int(5) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_subscribe`
--

INSERT INTO `email_subscribe` (`subscribeid`, `emailid`) VALUES
(86, 'radhikamaniya56@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favoriteid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favoriteid`, `userid`, `uploadcourseid`) VALUES
(6, 'shruti2001', 2),
(8, 'shruti2001', 14),
(9, 'shruti2001', 1),
(10, 'ram123', 1),
(11, 'ram123', 2),
(12, 'ram123', 19);

-- --------------------------------------------------------

--
-- Table structure for table `follow_tutor`
--

CREATE TABLE `follow_tutor` (
  `followid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `tutorid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow_tutor`
--

INSERT INTO `follow_tutor` (`followid`, `userid`, `tutorid`) VALUES
(4, 'radhika', 'radhika2000'),
(5, 'heny', 'heny3000'),
(7, 'juki', 'juli1999'),
(12, 'shruti2001', 'shruti2001'),
(13, 'abc', '5'),
(22, 'jony', 'joy2000'),
(80, 'radhika2000', 'shruti2001'),
(90, 'abc123', 'radhika2000'),
(91, 'ram123', 'shruti2001');

-- --------------------------------------------------------

--
-- Table structure for table `like_course`
--

CREATE TABLE `like_course` (
  `likeid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_course`
--

INSERT INTO `like_course` (`likeid`, `userid`, `uploadcourseid`) VALUES
(20, 'shruti2001', 2),
(22, 'abc123', 5),
(23, 'shruti2001', 1),
(26, 'shruti2001', 14),
(27, 'ram123', 1),
(28, 'ram123', 2),
(29, 'ram123', 19);

-- --------------------------------------------------------

--
-- Table structure for table `like_tutor`
--

CREATE TABLE `like_tutor` (
  `tutorlikeid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_tutor`
--

INSERT INTO `like_tutor` (`tutorlikeid`, `tutorid`, `userid`) VALUES
(1, 'shruti2001', 'shruti2001'),
(2, 'radhika2000', 'radhika2000');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteid`, `userid`, `uploadcourseid`, `note`) VALUES
(32, 'shruti2001', 1, 'good\r\nvery good\r\nfghbjn'),
(35, 'abc123', 1, 'abc\r\nxfcgvbh');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rateid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `ratecourse` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateid`, `userid`, `uploadcourseid`, `ratecourse`) VALUES
(6, 'shruti2001', 1, 4),
(7, 'shruti2001', 2, 1),
(8, 'abc123', 1, 4),
(9, 'shruti2001', 14, 3),
(10, 'shruti2001', 14, 1),
(11, 'shruti2001', 14, 5),
(12, 'shruti2001', 37, 3),
(13, 'shruti2001', 56, 4),
(14, 'shruti2001', 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rate_tutor`
--

CREATE TABLE `rate_tutor` (
  `ratetutorid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `ratetutor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_tutor`
--

INSERT INTO `rate_tutor` (`ratetutorid`, `userid`, `tutorid`, `ratetutor`) VALUES
(4, 'shruti2001', 'shruti2001', 4),
(5, 'abc123', 'shruti2001', 5);

-- --------------------------------------------------------

--
-- Table structure for table `report_course`
--

CREATE TABLE `report_course` (
  `reportcourseid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_course`
--

INSERT INTO `report_course` (`reportcourseid`, `userid`, `tutorid`, `uploadcourseid`, `description`) VALUES
(2, 'shruti2001', 'shruti2001', 1, 'very good'),
(3, 'shruti2001', 'shruti2001', 1, 'not interested '),
(4, 'shruti2001', 'shruti2001', 1, 'not interested ');

-- --------------------------------------------------------

--
-- Table structure for table `report_issue`
--

CREATE TABLE `report_issue` (
  `reportissueid` int(5) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_issue`
--

INSERT INTO `report_issue` (`reportissueid`, `description`) VALUES
(8, 'good'),
(9, 'very good'),
(10, 'not interested '),
(11, 'average ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `review` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewid`, `userid`, `uploadcourseid`, `review`, `date`) VALUES
(7, 'shruti2001', 1, 'good ', '08-05-2021'),
(10, 'shruti2001', 2, 'vhbnm', '10-05-2021'),
(11, 'shruti2001', 37, 'Awesome', '16-06-2021'),
(12, 'shruti2001', 56, 'very good', '16-06-2021'),
(13, 'shruti2001', 16, 'good', '01-07-2021');

-- --------------------------------------------------------

--
-- Table structure for table `review_tutor`
--

CREATE TABLE `review_tutor` (
  `tutorreviewid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `review` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_tutor`
--

INSERT INTO `review_tutor` (`tutorreviewid`, `userid`, `tutorid`, `review`, `date`) VALUES
(7, 'shruti2001', 'shruti2001', 'very good', '08-05-2021'),
(8, 'abc123', 'shruti2001', 'outstandin', '08-05-2021');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryid` int(5) NOT NULL,
  `categoryid` int(5) NOT NULL,
  `subcategoryname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategoryid`, `categoryid`, `subcategoryname`) VALUES
(1, 1, 'Software Testing'),
(2, 1, 'Artificial Inteligen'),
(3, 1, 'Virtual Reality'),
(4, 1, 'Software Development'),
(5, 2, 'Programming Language'),
(6, 2, 'Network'),
(7, 2, 'Security'),
(8, 3, 'Portrait'),
(9, 3, 'Commercial'),
(10, 3, 'Digital Photography'),
(11, 4, 'Drawing'),
(12, 4, 'Arcitacture'),
(13, 4, 'Interior'),
(14, 4, 'Graphics'),
(15, 5, 'Social Media'),
(16, 5, 'Business Relationshi'),
(17, 5, 'Marketing Analytics'),
(18, 5, 'Customer Relations'),
(19, 6, 'Music Mixing'),
(20, 6, 'Vocal'),
(21, 6, 'Music Production'),
(22, 7, 'Songs Writting'),
(23, 7, 'Poetry'),
(24, 7, 'Story Writting'),
(25, 8, 'Sketching'),
(26, 8, 'Crafts and Painting'),
(27, 9, 'Motivation'),
(28, 9, 'Speaking'),
(29, 9, 'Communication'),
(30, 10, 'Workout'),
(31, 10, 'Yoga'),
(32, 10, 'Meditation'),
(33, 10, 'Mental Helth'),
(34, 11, 'Hip Hop'),
(35, 11, 'Salsa'),
(36, 11, 'Free Style'),
(37, 11, 'Break Dance'),
(38, 12, 'Italian Foods'),
(39, 12, 'Indian Food'),
(40, 12, 'Baking'),
(41, 12, 'Beverages'),
(42, 11, 'Indian dance');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionid` int(5) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `totalamount` int(10) NOT NULL,
  `bankid` int(5) NOT NULL,
  `ifsccode` varchar(11) NOT NULL,
  `paymentrefcode` varchar(50) NOT NULL,
  `currentdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionid`, `uploadcourseid`, `totalamount`, `bankid`, `ifsccode`, `paymentrefcode`, `currentdate`) VALUES
(1, 8, 5000, 1, 'tgrfdvc2', '34rfdcv', '10-2-1232'),
(9, 5, 789, 5, 'fghj', 'gvbhjn', 'gvhbjn'),
(91, 8, 8000, 8, 'fghjk', 'fghj', 'ghjk'),
(93, 8, 7000, 2, '666666', '0', '27-05-2021 08:17:54'),
(94, 39, 700, 4, '121212', '0', '09-06-2021 08:08:06'),
(95, 40, 2500, 4, '121212', '0', '09-06-2021 08:08:29'),
(96, 1, 400, 3, '3333333', '0', '09-06-2021 08:48:39'),
(97, 2, 455, 5, '676767', '0', '09-06-2021 08:49:01'),
(98, 1, 400, 3, '676767', '0', '09-06-2021 08:50:53'),
(99, 1, 400, 3, '121212', '0', '09-06-2021 08:51:19'),
(100, 5, 455, 3, '3333333', '0', '09-06-2021 08:51:37'),
(101, 14, 700, 3, 'fghj', '0', '10-06-2021 01:58:13'),
(102, 56, 555, 3, '666666', '0', '16-06-2021 09:48:16'),
(103, 56, 555, 3, '676767', '0', '16-06-2021 09:51:01'),
(104, 37, 1800, 3, '44444', '0', '16-06-2021 09:56:44'),
(105, 56, 555, 3, '676767', '0', '16-06-2021 09:58:08'),
(106, 56, 555, 2, '121212', '0', '16-06-2021 11:00:16'),
(107, 14, 700, 3, 'fgvhbjnkm', '0', '30-06-2021 02:31:03'),
(108, 16, 400, 2, 'ASDE0123SER', '0', '01-07-2021 09:12:55'),
(109, 19, 0, 4, 'EWRT0WEE123', '0', '01-07-2021 09:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutorid` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profilepic` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `skilllevel` varchar(10) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  `facebooklink` varchar(50) NOT NULL,
  `linkedinlink` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorid`, `fname`, `lname`, `email`, `gender`, `password`, `profilepic`, `contact`, `skill`, `skilllevel`, `bio`, `lastlogin`, `facebooklink`, `linkedinlink`, `status`) VALUES
('Abhay1997', 'Abhay', 'Trivedi', 'Abhay@gmail.com', 'Male', 'Abhay1997', 'courseimage/Abhay.jpg', '7896543245', 'Singing', 'Intermedia', 'I am singer.and i have a big studio with amzing gr', '02-06-2021 04:30:40', 'http://localhost/online_cources_work/tutor_site', 'http://localhost/online_cources_work/tutor_site/ca', 0),
('bhavdip2003', 'bhavdip', 'patel', 'bhavdip@gmail.com', 'Male', 'bhavdip2003', 'courseimage/bhavdip.jpg', '8796543223', 'Programing', 'Intermedia', 'I am a programmer .my main pro. langauges are PHP,', '02-06-2021 04:28:08', 'http://localhost/online_cources_work/tutor_site/ca', 'https://mail.google.com/mail/u/0/#inbox/FMfcgxwLsw', 0),
('Deep1987', 'Deep', 'Desai', 'Deep@gmail.com', 'Male', 'Deep1987', 'courseimage/Deep.jpg', '8976543254', 'Programing', 'Beginner', 'Happy programmer.', '02-06-2021 04:32:59', 'http://localhost/online_cources_work/tutor_site/ca', 'https://mail.google.com/mail/u/0/#inbox/FMfcgxwLsw', 0),
('heni2002', 'heny', 'roy', 'heni@gmail.com', 'FeMale', 'heni2002', 'courseimage/heny.jpg', '234567890', 'Painting', 'Intermedia', 'heni roy', '05-05-2021 03:05:49', 'http://localhost/tutor_site', 'http://localhost/tutor_site', 0),
('janvi2001', 'janvi', 'dudhat', 'janvi@gmail.com', 'FeMale', 'janvi2001', 'courseimage/janvi.jpg', '9876543210', 'Dancing', 'Expert', 'I am dancer.i have experiance of all type of dance', '02-06-2021 07:22:41', 'http://localhost/online_cources_work/tutor_site', 'http://localhost/online_cources_work/tutor_site/ca', 0),
('jay1990', 'Jay', 'Dave', 'jay@gmail.com', '', 'jaydeep1990', 'courseimage/Jay.jpg', '8897532434', 'Painting', 'Intermedia', 'Want to make Colorfull world.', '02-06-2021 04:36:18', 'http://localhost/online_cources_work/tutor_site', 'http://localhost/online_cources_work/tutor_site/ca', 0),
('juli1099', 'juli', 'gorasiya', 'juli@gmail.com', 'FeMale', 'juli1099', 'courseimage/juli.jpg', '1234567890', 'Cooking', 'Expert', 'juli gorasiya', '05-05-2021 02:56:40', 'http://localhost/tutor_site', 'http://localhost/tutor_site', 0),
('priya1998', 'priya', 'patel', 'priya@gmail.com', 'FeMale', 'priya1998', 'courseimage/priya.jpg', '9876544321', 'Speaking', 'Expert', 'i am a speaker . i have taken more than 100 semina', '02-06-2021 02:39:40', 'http://localhost/online_cources_work/tutor_site', 'http://localhost/online_cources_work/tutor_site/ca', 0),
('radhika2000', 'radhika', 'maniya', 'radhika@gmail.com', 'FeMale', 'radhika2000', 'courseimage/radhika.jpg', '2134567890', 'Dancing', 'Beginner', 'radhika maniya', '05-05-2021 02:46:09', 'http://localhost/tutor_site', 'http://localhost/tutor_site', 0),
('Riddhi2001', 'Riddhi', 'desai', 'riddhi@gmail.com', 'FeMale', 'Riddhi2001', 'courseimage/Riddhi.jpg', '8765432198', 'Singing', 'Intermedia', 'I am a programmer .my main pro. langauges are PHP,', '01-06-2021 04:15:12', 'http://localhost/online_cources_work/tutor_site/ca', 'http://localhost/online_cources_work/tutor_site/ca', 0),
('shruti2001', 'shruti', 'gorasiya', 'shruti@gmail.com', 'FeMale', 'shruti2001', 'courseimage/shruti.jpg', '1234567898', 'Programing', 'Beginner', 'shruti horasiya', '05-05-2021 02:44:44', 'http://localhost/tutor_site', 'http://localhost/tutor_site', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_bankdetail`
--

CREATE TABLE `tutor_bankdetail` (
  `tutorbankid` int(5) NOT NULL,
  `bankid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `ifsccode` varchar(20) NOT NULL,
  `accountnumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_payment`
--

CREATE TABLE `tutor_payment` (
  `tutorpaymentid` int(5) NOT NULL,
  `tutorid` varchar(50) NOT NULL,
  `uploadcourseid` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_payment`
--

INSERT INTO `tutor_payment` (`tutorpaymentid`, `tutorid`, `uploadcourseid`, `amount`, `status`) VALUES
(1, 'radhika2000', 1, 0, 0),
(2, 'radhika2000', 1, 0, 0),
(3, 'radhika2000', 1, 600, 0),
(4, 'radhika2000', 4, 0, 0),
(5, 'radhika2000', 7, 0, 0),
(6, 'radhika2000', 1, 600, 0),
(7, 'radhika2000', 2, 228, 0),
(8, 'radhika2000', 40, 1250, 0),
(9, 'shruti2001', 14, 700, 0),
(10, 'shruti2001', 14, 700, 0),
(11, 'shruti2001', 14, 700, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `userid` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`userid`, `fname`, `lname`, `email`, `gender`, `password`, `contact`, `lastlogin`, `status`) VALUES
('radhika2000', 'radhika', 'maniya', 'maniyaradhika309@gmai ', 'female', 'radhika2000', '23456789', 'gvhjkl', 0),
('ram123', 'ram1', 'patel1', 'ram1@gmail.com', 'Male', 'ram123', '9876543210', '12-3-4321', 0),
('shruti2001', 'shruti', 'gorasiya', 'shrutigorasiya9@gmail.com', 'female', 'shruti2001', '1234567898', '11-04-2021 11:54:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `courses_upload`
--
ALTER TABLE `courses_upload`
  ADD PRIMARY KEY (`uploadcourseid`);

--
-- Indexes for table `course_answer`
--
ALTER TABLE `course_answer`
  ADD PRIMARY KEY (`answerid`),
  ADD UNIQUE KEY `Quetionid` (`answerid`);

--
-- Indexes for table `course_question`
--
ALTER TABLE `course_question`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `course_video_addition`
--
ALTER TABLE `course_video_addition`
  ADD PRIMARY KEY (`coursevideoid`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_subscribe`
--
ALTER TABLE `email_subscribe`
  ADD PRIMARY KEY (`subscribeid`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favoriteid`);

--
-- Indexes for table `follow_tutor`
--
ALTER TABLE `follow_tutor`
  ADD PRIMARY KEY (`followid`);

--
-- Indexes for table `like_course`
--
ALTER TABLE `like_course`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `like_tutor`
--
ALTER TABLE `like_tutor`
  ADD PRIMARY KEY (`tutorlikeid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateid`);

--
-- Indexes for table `rate_tutor`
--
ALTER TABLE `rate_tutor`
  ADD PRIMARY KEY (`ratetutorid`);

--
-- Indexes for table `report_course`
--
ALTER TABLE `report_course`
  ADD PRIMARY KEY (`reportcourseid`);

--
-- Indexes for table `report_issue`
--
ALTER TABLE `report_issue`
  ADD PRIMARY KEY (`reportissueid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `review_tutor`
--
ALTER TABLE `review_tutor`
  ADD PRIMARY KEY (`tutorreviewid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutorid`);

--
-- Indexes for table `tutor_bankdetail`
--
ALTER TABLE `tutor_bankdetail`
  ADD PRIMARY KEY (`tutorbankid`);

--
-- Indexes for table `tutor_payment`
--
ALTER TABLE `tutor_payment`
  ADD PRIMARY KEY (`tutorpaymentid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bankid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses_upload`
--
ALTER TABLE `courses_upload`
  MODIFY `uploadcourseid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `course_answer`
--
ALTER TABLE `course_answer`
  MODIFY `answerid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `course_question`
--
ALTER TABLE `course_question`
  MODIFY `questionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_video_addition`
--
ALTER TABLE `course_video_addition`
  MODIFY `coursevideoid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_subscribe`
--
ALTER TABLE `email_subscribe`
  MODIFY `subscribeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favoriteid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `follow_tutor`
--
ALTER TABLE `follow_tutor`
  MODIFY `followid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `like_course`
--
ALTER TABLE `like_course`
  MODIFY `likeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `like_tutor`
--
ALTER TABLE `like_tutor`
  MODIFY `tutorlikeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rateid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rate_tutor`
--
ALTER TABLE `rate_tutor`
  MODIFY `ratetutorid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_course`
--
ALTER TABLE `report_course`
  MODIFY `reportcourseid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report_issue`
--
ALTER TABLE `report_issue`
  MODIFY `reportissueid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review_tutor`
--
ALTER TABLE `review_tutor`
  MODIFY `tutorreviewid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tutor_bankdetail`
--
ALTER TABLE `tutor_bankdetail`
  MODIFY `tutorbankid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tutor_payment`
--
ALTER TABLE `tutor_payment`
  MODIFY `tutorpaymentid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
