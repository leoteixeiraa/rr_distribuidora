
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 26/01/2018 às 16:57:35
-- Versão do Servidor: 10.1.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u671492475_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apelido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `obs` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`cpf`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_for` int(10) NOT NULL,
  `numero_doc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emissao` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `vencimento` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `prorrogado` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `centro_de_custo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `pagamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `forma_pagamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `baixar` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `parcela` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `acrescimo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `desconto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `obs` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;


