-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2013 at 06:14 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6935376_norkaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_pic` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(150) NOT NULL,
  `namn` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pic`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `rubrik` varchar(65) NOT NULL,
  `comment` varchar(20000) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `extra_shit` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;