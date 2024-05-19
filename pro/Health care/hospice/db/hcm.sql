-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2020 at 12:23 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE IF NOT EXISTS `ambulance` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `namb` varchar(30) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `facility` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`aid`, `namb`, `dname`, `facility`) VALUES
(1, '2', 'Babu', 'icu');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `apid` int(5) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `doctorname` varchar(20) NOT NULL,
  `time` varchar(15) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `fee` varchar(10) NOT NULL,
  `docid` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `da` varchar(10) NOT NULL,
  PRIMARY KEY (`apid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apid`, `vid`, `pname`, `age`, `gender`, `doctorname`, `time`, `phno`, `date`, `fee`, `docid`, `status`, `da`) VALUES
(1, 1, 'Athulya', 26, 'female', 'Kavitha', '10:30', '8765678765', '2020-11-16', '250', 1002, 'Approve', 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptid` int(10) NOT NULL AUTO_INCREMENT,
  `deptn` varchar(50) NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptn`) VALUES
(2, 'ORTHO'),
(3, 'NEUROLOGY'),
(4, 'CARDIOLOGY'),
(5, 'DENTAL'),
(6, 'GYNOCOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `specialisation` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `qualification` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `img` varchar(50) NOT NULL,
  `da` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specialisation`, `address`, `phno`, `email`, `gender`, `qualification`, `time`, `img`, `da`) VALUES
(1001, '', '', '', '', '', '', '', '', '', ''),
(1002, 'Kavitha', 'GYNOCOLOGY', 'Kavitha bhavanam', '8765678765', 'kavitha@gmail.com', 'female', 'MD', '10:30', 'about-me.jpg', 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fed` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `vid`, `name`, `fed`) VALUES
(1, 1, 'Athulya', 'hhbh');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `qlftn` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `exp` varchar(40) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2003 ;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lid`, `name`, `qlftn`, `address`, `phno`, `email`, `gen`, `exp`) VALUES
(2001, '', '', '', '', '', '', ''),
(2002, 'Abhijith', 'MLT', 'Abhijith bhavanam', '9876543456', 'abhi@gmail.com', 'male', '2');

-- --------------------------------------------------------

--
-- Table structure for table `labrep`
--

CREATE TABLE IF NOT EXISTS `labrep` (
  `tid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `docid` varchar(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `resultfile` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `labrep`
--

INSERT INTO `labrep` (`tid`, `pid`, `pname`, `docid`, `tname`, `result`, `resultfile`) VALUES
(1, '1', 'Athulya', '1002', 'test for pressure', 'Normal', 'b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(20) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `utype` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `upass`, `utype`) VALUES
(0, 'admin@gmail.com', 'admin', 'admin'),
(2002, 'abhi@gmail.com', 'abhijith123', 'labassistant'),
(1, 'athulya@gmail.com', 'athulya', 'patient'),
(1002, 'kavitha@gmail.com', 'kavitha', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `place` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `phno`, `email`, `gender`, `place`) VALUES
(1, 'Athulya', 'vishnavam', '3456787654', 'athulya@gmail.com', 'female', 'charummoodu');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `chn` varchar(20) NOT NULL,
  `cvv` int(10) NOT NULL,
  `cardno` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL,
  `vid` int(10) NOT NULL,
  `pstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `chn`, `cvv`, `cardno`, `amount`, `date`, `vid`, `pstatus`) VALUES
(1, 'Athulya', 123, 2147483647, 250, '2020-11-15', 1, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `idp` int(5) NOT NULL AUTO_INCREMENT,
  `apid` int(10) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `docid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `ltest` varchar(50) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`idp`, `apid`, `pname`, `prescription`, `docid`, `pid`, `date`, `ltest`) VALUES
(1, 1, 'Athulya', 'bbb', 1002, 1, '2020-11-16', 'test for pressure');
