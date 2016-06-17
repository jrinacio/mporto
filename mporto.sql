-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2016 às 15:46
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
  `carousel` tinyint(1) unsigned DEFAULT NULL,
  `acervo` tinyint(1) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usefil` (`usuario_id`),
  KEY `fk_evefil` (`evento_id`),
  KEY `fk_serfil_idx` (`servico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `usuario_id`, `evento_id`, `servico_id`, `name`, `titulo`, `descricao`, `size`, `type`, `dir`, `ativo`, `carousel`, `acervo`, `created`, `modified`) VALUES
(1, 1, NULL, 1, 'WP_20160521_16_09_53_Pro.jpg', 'O início', 'Substituição dos trapiches, imagem demonstra o esforço para construção do cais.', 2132523, 'image', '0391533c-4bbe-4c6c-a5e9-16b56387e87e', 1, 1, NULL, '2016-06-06 08:46:12', '2016-06-13 14:16:36'),
(2, 1, NULL, 1, 'WP_20160521_16_11_27_Pro.jpg', 'kasato Maru', 'Momento de desembarque do Navio Kasato Maru no Porto de Santos.', 2131909, 'image', '3e181927-a4d9-4ef2-bf67-fda0b63da8c9', 1, 1, 0, '2016-06-06 10:20:30', '2016-06-13 15:42:09'),
(3, 1, NULL, 1, 'WP_20160521_16_09_42_Pro.jpg', 'Área do Cais', '', 2032975, 'image', 'fad3b8a5-b5e6-490d-a135-660c39018eaa', 1, 1, 0, '2016-06-06 10:22:50', '2016-06-13 15:42:22'),
(4, 1, NULL, 1, 'DSC01218.JPG', 'O Porto', 'O Porto de Santos no final do sécula XIX', 243415, 'image', '3b543303-7ac9-45cf-9dd4-80fdf222c868', 1, 0, 0, '2016-06-06 15:11:24', '2016-06-15 14:57:49'),
(5, 1, NULL, 1, 'Cafe_porto_Santos_1880.jpeg', 'Embarque do café', 'Embarque do café do Porto de Santos para a Europa, cultivado nas plantações do Estado de São Paulo', 264265, 'image', 'c258d969-a1a1-4116-9b21-0e7cb2720407', 1, 0, 0, '2016-06-06 15:27:37', '2016-06-15 14:48:01'),
(6, 1, NULL, 1, 'fotos086b.jpg', 'Trapiche Belmarco', 'Trapiche Belmarco, suas pontes de madeira encostavam navios a vapor e a vela, final do século XIX', 37714, 'image', '91a433d2-2bde-478b-8a53-d09a0641f2b9', 1, 0, 0, '2016-06-06 15:34:02', '2016-06-15 11:41:58'),
(7, 1, NULL, 1, 'fotos086f.jpg', 'A ponte da Alfândega', 'A ponte da Alfândega, em 1865, defronte a atual Praça da República, ao fundo o prédio da Câmara e Prefeitura', 25313, 'image', '8afb6832-7bc8-4075-a648-4dae2cf8b139', 1, 0, 0, '2016-06-06 15:44:52', '2016-06-15 11:43:20'),
(8, 1, NULL, 1, 'fotos086d.jpg', 'Antes do porto organizado', 'Em 1892, Santos contava com precários trapiches de madeira para o acesso aos navios de passageiros e cargas. Esses trapiches começaram a ser domolidos no final do século XIX.', 32979, 'image', 'f5eb92ba-8272-4cc4-ad95-279213667bf6', 1, 0, 0, '2016-06-06 15:51:14', '2016-06-15 11:43:46'),
(9, 1, NULL, 1, 'fotos086g.jpg', 'Trapiche da Rua Xavier da Silveira', 'Imagem reproduzida no livro Santos e seus Arrabaldes.', 27633, 'image', 'fc786c59-732a-46da-a8e8-66d544c53f34', 1, 0, 0, '2016-06-06 16:11:33', '2016-06-15 14:48:35'),
(10, 1, NULL, 1, 'fotos086c.jpg', 'Trapiche Paquetá', 'Trapiche Paquetá, ainda nos últimos anos do século XIX. ', 32158, 'image', '7485180d-5b66-45f3-9376-2f3a77f794e6', 1, 0, 0, '2016-06-06 16:25:05', '2016-06-15 11:44:31'),
(12, 1, NULL, 1, 'baixa_resolucao_8230.png', 'Bomba d''água', 'Bomba utilizada na época.', 426720, 'image', 'c9d3e961-d080-45a6-9d8f-25ebf89319f8', 1, 0, 0, '2016-06-15 10:48:13', '2016-06-15 10:48:29'),
(15, 1, NULL, 1, 'Foto-54.png', 'Ferrovia', 'Malha ferroviária da Usina de Itatinga.', 345349, 'image', 'af15b6eb-6e61-451a-8d7e-45be64366706', 1, NULL, NULL, '2016-06-15 11:30:34', '2016-06-15 11:30:34'),
(16, 1, NULL, 1, 'Foto3.png', 'Cargueiro Cruk', 'Navio cargueiro Cruk atracado no porto.', 758153, 'image', 'f1b7112c-425f-4e09-ba35-ecfc8898d45b', 1, 0, 0, '2016-06-15 11:35:48', '2016-06-15 14:50:18'),
(19, 1, NULL, 1, 'Foto4.png', 'Ilha Barnabé', 'Ilha Barnabé, margem esquerda.', 753210, 'image', 'e66981d1-185f-41a3-9b87-953f8f38415f', 1, 0, 0, '2016-06-15 11:52:33', '2016-06-15 14:50:38'),
(23, 1, NULL, 1, 'baixa_resolucao_8701.png', 'Guindaste', 'Transporte dos blocos de concreto para ampliação do caís.', 430318, 'image', '16e72dfc-5698-4567-81ac-c1bf07fc38d6', 1, 0, 0, '2016-06-15 12:13:51', '2016-06-15 14:49:52'),
(24, 1, NULL, 1, '3667883_x720.jpg', 'Esteira', 'Obras no porto, construção esteira.', 189764, 'image', '2302f456-584a-4ccf-90e5-0d153cb06957', 1, 0, 0, '2016-06-15 14:53:07', '2016-06-16 15:36:32'),
(25, 1, NULL, 1, 'img_1280x720.jpg', 'Cargueiro', 'Maior cargueira que atracou no Porto de Santos.', 127276, 'image', '157175d2-b8c2-4558-84e2-500c4a6d1173', 1, 0, 0, '2016-06-15 14:57:20', '2016-06-16 15:37:34'),
(26, 1, NULL, 1, 'img2_1280x720.jpg', 'Grindaste', 'Novos guindastes do porto.', 146990, 'image', '8850df9a-e312-4663-a2a6-06a0bf5d3ec9', 1, 0, 0, '2016-06-15 15:01:21', '2016-06-16 15:36:16'),
(27, 1, NULL, 1, 'maxresdefault.jpg', 'Visão área', 'Visão aérea do porto.', 154032, 'image', 'ed50b0d9-bd5f-4ef2-8df4-8feb295c347a', 1, 0, 0, '2016-06-15 15:08:25', '2016-06-15 15:09:14'),
(28, 1, NULL, 1, 'img3_1280x720.jpg', 'TECON', 'Terminal TECON margem esquerda.', 196207, 'image', 'a62eb1cc-0080-41c1-a209-74f4611a7fe9', 1, 0, 0, '2016-06-15 15:10:56', '2016-06-16 15:35:33'),
(29, 1, NULL, 1, '001AAN008030.jpg.jpg', 'Novas oficinas', 'Imagem diurna, externa, horizontal, Cia. Docas', 136830, 'image', 'be74055e-4920-4856-b811-dcfb8193d059', 1, 0, 1, '2016-06-16 15:25:02', '2016-06-16 15:25:21'),
(30, 1, NULL, 1, '001AAN008032.jpg.jpg', 'Antigas oficinas', 'Portos, horizontal, diurna, externa, Santos, ', 190274, 'image', '0d393058-3377-4e99-b0d4-76f55bf96108', 1, 0, 1, '2016-06-16 15:29:20', '2016-06-16 15:29:36'),
(31, 1, NULL, 1, '001AAN008028.jpg.jpg', 'Draga com batelão', 'Porto, draga, diurna, externa, Santos', 107845, 'image', 'd8c16aef-05a4-4135-93eb-7d5f37262917', 1, 0, 1, '2016-06-16 15:31:45', '2016-06-16 15:32:01'),
(32, 1, NULL, 1, '001AAN008024.jpg.jpg', 'Casa de máquina compressora nº 2', 'Portos, horizontal, diurna, externa, Santos', 127384, 'image', '17375ea2-fd77-48b0-9f6d-0ada7f35f050', 1, 0, 1, '2016-06-16 15:34:00', '2016-06-16 15:49:16'),
(33, 1, NULL, 1, '001AAN008020.jpg.jpg', 'Estaleiro de Blocos', 'Vista geral do estaleiro de blocos.', 120811, 'image', 'a983591d-30f6-432d-9009-24c5b5bf6396', 1, 0, 1, '2016-06-16 15:40:20', '2016-06-16 15:40:41'),
(34, 1, NULL, 1, '001AAN008021.jpg.jpg', 'Cais da Alfândega', 'Vista do cais da alfandega', 96926, 'image', 'f6d7be86-564d-48ca-97da-bf4eb8c31af6', 1, 0, 1, '2016-06-16 15:43:14', '2016-06-16 15:43:26'),
(35, 1, NULL, 1, '001AAN008001.jpg.jpg', 'Embarque de bloco', 'Embarque de um bloco de concreto.', 95078, 'image', '56a8801e-7c94-4261-b264-6f1bc01e1e7d', 1, 0, 1, '2016-06-16 15:45:37', '2016-06-16 15:45:48'),
(36, 1, NULL, 1, '001AAN008022.jpg.jpg', 'Guindaste 24 t', 'Vista do cais com guindaste de 24 toneladas.', 111438, 'image', '56ded5ed-f235-427c-9b5c-ee37738dc01b', 1, 0, 1, '2016-06-16 15:55:00', '2016-06-16 15:55:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `usuario_id`, `ativo`, `created`, `modified`) VALUES
(1, 'Fotos', 'Imagens diversas de todo acervo do museu do Porto de Santos.', 1, 1, '2016-05-31 20:36:43', '2016-05-31 17:58:34'),
(2, 'Leis', 'Documentos oficiais antigos.', 1, 1, '2016-05-31 20:43:09', '2016-05-31 20:43:09'),
(3, 'Quadros', 'Pinturas diversas.', 1, 1, '2016-05-31 20:48:23', '2016-05-31 20:48:23'),
(4, 'Documentos', 'Acervo de diversos documentos antigos.', 1, 1, '2016-06-14 11:21:59', '2016-06-14 11:21:59'),
(5, 'Arquitetura', 'Traduz as novas formas de morar introduzidas no final do século passado.', 1, 1, '2016-06-14 11:42:15', '2016-06-14 11:42:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE IF NOT EXISTS `colaboradores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `dir` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ativo` int(10) unsigned NOT NULL DEFAULT '1',
  `usuario_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usucol_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `usuario_id`, `categoria_id`, `ativo`, `created`, `modified`) VALUES
(1, 'Acervo', 'Galeria de Imagens de todo o acervo do Porto de Santos. Imagens transferidas dos antigos negativos de vidro.', 1, 1, 1, '2016-06-02 17:26:27', '2016-06-14 10:36:53'),
(2, 'Cartografias', 'Mapas e plantas referentes a construção e expansão do maior porto da América Latina.', 1, 4, 1, '2016-06-14 11:23:24', '2016-06-14 11:23:24'),
(3, 'Arquitetura', 'Um período de renovação urbana, quando as famílias mais abastadas começaram a construir palacetes nos bairros.', 1, 5, 1, '2016-06-14 11:44:12', '2016-06-14 11:44:12');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `ativo`, `created`, `modified`) VALUES
(1, 'Luiz Fonseca', 'luiz.fonseca@portodesantos.com.br', '$2y$10$xf56MYyDPrdyykEvt7scReJUCjiKX1tQ1ZEzXppTuOedKPzwGjDZy', 1, 1, '2016-05-31 14:09:51', '2016-05-31 17:32:44'),
(2, 'Inácio', 'jrinacio@uol.com.br', '$2y$10$Kkt2Gpo3dl9nsAULb9xQ1uxk4o6VXayvJ7qNO8ZUCYJXvLpZUGWc.', 1, 1, '2016-06-08 08:20:03', '2016-06-08 08:20:03');

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
-- Limitadores para a tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `fk_usucol` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
