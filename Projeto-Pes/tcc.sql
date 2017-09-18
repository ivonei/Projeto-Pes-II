-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Ago-2017 às 16:44
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agrotoxico`
--

CREATE TABLE `agrotoxico` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `preco` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaagrotoxico`
--

CREATE TABLE `categoriaagrotoxico` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoriaagrotoxico`
--

INSERT INTO `categoriaagrotoxico` (`id`, `nome`, `created`, `modified`) VALUES
(3, 'Fungicida', '2017-08-08 13:40:24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaembalagem`
--

CREATE TABLE `categoriaembalagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoriaembalagem`
--

INSERT INTO `categoriaembalagem` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'PlÃ¡stico', '2017-08-08 11:22:08', '2017-08-08 11:22:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaetiqueta`
--

CREATE TABLE `categoriaetiqueta` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoriaetiqueta`
--

INSERT INTO `categoriaetiqueta` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'PP', '2017-08-08 11:13:08', NULL),
(2, 'M', '2017-08-08 11:14:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriasementes`
--

CREATE TABLE `categoriasementes` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoriasementes`
--

INSERT INTO `categoriasementes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Trigo', '2017-08-06 01:28:56', '2017-08-06 01:45:00'),
(2, 'Milho', '2017-08-06 01:29:31', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `embalagem`
--

CREATE TABLE `embalagem` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `etiqueta`
--

CREATE TABLE `etiqueta` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-05-31 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sementes`
--

CREATE TABLE `sementes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `descricao` text NOT NULL,
  `tag` varchar(520) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sementes`
--

INSERT INTO `sementes` (`id`, `id_user`, `nome`, `descricao`, `tag`, `preco`, `quantidade`, `marca`, `created`, `modified`, `categoria_id`) VALUES
(5, 15, 'F', ' FFFFfff', 'F', '3', 3, 'F3', '2017-08-07 18:41:49', '2017-08-07 22:21:42', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(1, 'Victor', 'admin@pozzan.com.br', 'admin', '', 1, '2017-05-31 00:00:00', '2017-07-30 10:55:56'),
(11, 'VictorAugustooo', 'admin@pozzan.com.br', 'admin', '', 1, '2017-07-29 18:36:19', '2017-07-30 10:48:56'),
(17, '1', '1@gmail.com', '1', '1', 2, '2017-08-06 02:42:24', NULL),
(18, '', '', '', '', 2, '2017-08-06 23:26:21', NULL),
(16, 'teste', 'teste@gmail.com', 'teste', '123', 2, '2017-07-30 17:09:55', NULL),
(14, 'admin', 'admin@gmail.com', 'admin', '123', 1, '2017-07-30 10:50:10', NULL),
(15, 'roberto', 'roberto@gmal.com', 'roberto', '123', 1, '2017-07-30 10:52:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agrotoxico`
--
ALTER TABLE `agrotoxico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriaagrotoxico`
--
ALTER TABLE `categoriaagrotoxico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriaembalagem`
--
ALTER TABLE `categoriaembalagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriaetiqueta`
--
ALTER TABLE `categoriaetiqueta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriasementes`
--
ALTER TABLE `categoriasementes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `embalagem`
--
ALTER TABLE `embalagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sementes`
--
ALTER TABLE `sementes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agrotoxico`
--
ALTER TABLE `agrotoxico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoriaagrotoxico`
--
ALTER TABLE `categoriaagrotoxico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categoriaembalagem`
--
ALTER TABLE `categoriaembalagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categoriaetiqueta`
--
ALTER TABLE `categoriaetiqueta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categoriasementes`
--
ALTER TABLE `categoriasementes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `embalagem`
--
ALTER TABLE `embalagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sementes`
--
ALTER TABLE `sementes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
