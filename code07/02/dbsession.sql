-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2008 年 12 月 20 日 10:43
-- 服务器版本: 5.1.26
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `dbsession`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `session_table`
-- 

CREATE TABLE `session_table` (
  `SID` varchar(32) NOT NULL,
  `expire` int(11) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `session_table`
-- 

