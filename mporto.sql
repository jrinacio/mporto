-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2016 às 22:38
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mporto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE IF NOT EXISTS `arquivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `evento_id` int(10) unsigned DEFAULT NULL,
  `servico_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usefil` (`usuario_id`),
  KEY `fk_evefil` (`evento_id`),
  KEY `fk_serfil_idx` (`servico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `usuario_id`, `evento_id`, `servico_id`, `name`, `titulo`, `descricao`, `size`, `type`, `dir`, `ativo`, `created`, `modified`) VALUES
(1, 1, NULL, 1, 'WP_20160521_16_09_53_Pro.jpg', 'O início', 'Substituição dos trapiches, esforço para construção do cais', 2132523, 'image', '0391533c-4bbe-4c6c-a5e9-16b56387e87e', 1, '2016-06-06 08:46:12', '2016-06-06 15:12:41'),
(2, 1, NULL, 1, 'WP_20160521_16_11_27_Pro.jpg', 'kasato Maru', 'Momento de desembarque do Navio Kasato Maru no Porto de Santos.', 2131909, 'image', '3e181927-a4d9-4ef2-bf67-fda0b63da8c9', 1, '2016-06-06 10:20:30', '2016-06-06 14:30:19'),
(3, 1, NULL, 1, 'WP_20160521_16_09_42_Pro.jpg', 'Área do Cais', NULL, 2032975, 'image', 'fad3b8a5-b5e6-490d-a135-660c39018eaa', 1, '2016-06-06 10:22:50', '2016-06-06 10:22:50'),
(4, 1, NULL, 1, 'DSC01218.JPG', 'O Porto', 'O Porto de Santos no final do sécula XIX', 243415, 'image', '3b543303-7ac9-45cf-9dd4-80fdf222c868', 1, '2016-06-06 15:11:24', '2016-06-06 15:11:24'),
(5, 1, NULL, 1, 'Cafe_porto_Santos_1880.jpeg', 'Embarque do café', 'Embarque do café do Porto de Santos para a Europa, cultivado nas plantações do Estado de São Paulo', 264265, 'image', 'c258d969-a1a1-4116-9b21-0e7cb2720407', 1, '2016-06-06 15:27:37', '2016-06-06 15:27:37'),
(6, 1, NULL, 1, 'fotos086b.jpg', 'Trapiche Belmarco', 'Trapiche Belmarco, suas pontes de madeira encostavam navios a vapor e a vela, final do século XIX', 37714, 'image', '91a433d2-2bde-478b-8a53-d09a0641f2b9', 1, '2016-06-06 15:34:02', '2016-06-06 15:39:59'),
(7, 1, NULL, 1, 'fotos086f.jpg', 'A ponte da Alfândega', 'A ponte da Alfândega, em 1865, defronte a atual Praça da República, ao fundo o prédio da Câmara e Prefeitura', 25313, 'image', '8afb6832-7bc8-4075-a648-4dae2cf8b139', 1, '2016-06-06 15:44:52', '2016-06-06 15:44:52'),
(8, 1, NULL, 1, 'fotos086d.jpg', 'Antes do porto organizado', 'Em 1892, Santos contava com precários trapiches de madeira para o acesso aos navios de passageiros e cargas. Esses trapiches começaram a ser domolidos no final do século XIX.', 32979, 'image', 'f5eb92ba-8272-4cc4-ad95-279213667bf6', 1, '2016-06-06 15:51:14', '2016-06-06 15:51:14'),
(9, 1, NULL, 1, 'fotos086g.jpg', 'Trapiche da Rua Xavier da Silveira', 'Imagem reproduzida no livro Santos e seus Arrabaldes.', 27633, 'image', 'fc786c59-732a-46da-a8e8-66d544c53f34', 1, '2016-06-06 16:11:33', '2016-06-06 16:11:33'),
(10, 1, NULL, 1, 'fotos086c.jpg', 'Trapiche Paquetá', 'Trapiche Paquetá, ainda nos últimos anos do século XIX. ', 32158, 'image', '7485180d-5b66-45f3-9376-2f3a77f794e6', 1, '2016-06-06 16:25:05', '2016-06-06 16:25:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `ativo` int(10) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usecat_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `usuario_id`, `ativo`, `created`, `modified`) VALUES
(1, 'Fotos', 'Imagens diversas de todo acervo do museu do Porto de Santos.', 1, 1, '2016-05-31 20:36:43', '2016-05-31 17:58:34'),
(2, 'Leis', 'Documentos oficiais antigos.', 1, 1, '2016-05-31 20:43:09', '2016-05-31 20:43:09'),
(3, 'Quadros', 'Pinturas diversas.', 1, 1, '2016-05-31 20:48:23', '2016-05-31 20:48:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text,
  `categoria_id` int(10) unsigned NOT NULL,
  `dataEvento` date DEFAULT NULL,
  `ativo` int(10) unsigned NOT NULL DEFAULT '1',
  `usuario_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_useeve` (`usuario_id`),
  KEY `fk_cateve_idx` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_id` int(10) unsigned DEFAULT NULL,
  `categoria_id` int(10) unsigned DEFAULT NULL,
  `ativo` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_catser_idx` (`categoria_id`),
  KEY `fk_useser_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `usuario_id`, `categoria_id`, `ativo`, `created`, `modified`) VALUES
(1, 'Imagens', 'Galeria de Imagens', 1, 1, 1, '2016-06-02 17:26:27', '2016-06-02 17:26:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `perfil` int(10) unsigned NOT NULL DEFAULT '2',
  `ativo` int(10) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `ativo`, `created`, `modified`) VALUES
(1, 'Luiz Fonseca', 'luiz.fonseca@portodesantos.com.br', '$2y$10$xf56MYyDPrdyykEvt7scReJUCjiKX1tQ1ZEzXppTuOedKPzwGjDZy', 1, 1, '2016-05-31 14:09:51', '2016-05-31 17:32:44');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `fk_evefil` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`),
  ADD CONSTRAINT `fk_serfil` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usefil` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_usecat` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_cateve` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_useeve` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_catser` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_useser` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
