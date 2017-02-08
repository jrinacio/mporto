-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Fev-2017 às 13:25
-- Versão do servidor: 5.6.17-log
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `usuario_id`, `evento_id`, `servico_id`, `name`, `titulo`, `descricao`, `size`, `type`, `dir`, `ativo`, `carousel`, `acervo`, `created`, `modified`) VALUES
(1, 1, NULL, 1, 'WP_20160521_16_09_53_Pro.jpg', 'O início', 'Substituição dos trapiches, imagem demonstra o esforço para construção do cais.', 2132523, 'image', '0391533c-4bbe-4c6c-a5e9-16b56387e87e', 1, 1, NULL, '2016-06-06 08:46:12', '2016-06-13 14:16:36'),
(2, 1, NULL, 1, 'WP_20160521_16_11_27_Pro.jpg', 'kasato Maru', 'Momento de desembarque do Navio Kasato Maru no Porto de Santos.', 2131909, 'image', '3e181927-a4d9-4ef2-bf67-fda0b63da8c9', 1, 0, 0, '2016-06-06 10:20:30', '2016-06-29 16:36:10'),
(3, 1, NULL, 1, 'WP_20160521_16_09_42_Pro.jpg', 'Área do Cais', '', 2032975, 'image', 'fad3b8a5-b5e6-490d-a135-660c39018eaa', 1, 1, 1, '2016-06-06 10:22:50', '2016-06-30 16:27:38'),
(4, 1, NULL, 1, 'DSC01218.JPG', 'O Porto', 'O Porto de Santos no final do sécula XIX', 243415, 'image', '3b543303-7ac9-45cf-9dd4-80fdf222c868', 1, 1, 1, '2016-06-06 15:11:24', '2016-06-29 16:35:15'),
(5, 1, NULL, 1, 'Cafe_porto_Santos_1880.jpeg', 'Embarque do café', 'Embarque do café do Porto de Santos para a Europa, cultivado nas plantações do Estado de São Paulo', 264265, 'image', 'c258d969-a1a1-4116-9b21-0e7cb2720407', 1, 1, 0, '2016-06-06 15:27:37', '2016-06-29 16:36:21'),
(6, 1, NULL, 1, 'fotos086b.jpg', 'Trapiche Belmarco', 'Trapiche Belmarco, suas pontes de madeira encostavam navios a vapor e a vela, final do século XIX', 37714, 'image', '91a433d2-2bde-478b-8a53-d09a0641f2b9', 1, 0, 0, '2016-06-06 15:34:02', '2016-06-15 11:41:58'),
(7, 1, NULL, 1, 'fotos086f.jpg', 'A ponte da Alfândega', 'A ponte da Alfândega, em 1865, defronte a atual Praça da República, ao fundo o prédio da Câmara e Prefeitura', 25313, 'image', '8afb6832-7bc8-4075-a648-4dae2cf8b139', 1, 0, 0, '2016-06-06 15:44:52', '2016-06-15 11:43:20'),
(8, 1, NULL, 1, 'fotos086d.jpg', 'Antes do porto organizado', 'Em 1892, Santos contava com precários trapiches de madeira para o acesso aos navios de passageiros e cargas. Esses trapiches começaram a ser domolidos no final do século XIX.', 32979, 'image', 'f5eb92ba-8272-4cc4-ad95-279213667bf6', 1, 0, 0, '2016-06-06 15:51:14', '2016-06-15 11:43:46'),
(9, 1, NULL, 1, 'fotos086g.jpg', 'Trapiche da Rua Xavier da Silveira', 'Imagem reproduzida no livro Santos e seus Arrabaldes.', 27633, 'image', 'fc786c59-732a-46da-a8e8-66d544c53f34', 1, 0, 0, '2016-06-06 16:11:33', '2016-06-15 14:48:35'),
(10, 1, NULL, 1, 'fotos086c.jpg', 'Trapiche Paquetá', 'Trapiche Paquetá, ainda nos últimos anos do século XIX. ', 32158, 'image', '7485180d-5b66-45f3-9376-2f3a77f794e6', 1, 0, 1, '2016-06-06 16:25:05', '2016-06-29 16:17:12'),
(12, 1, NULL, 1, 'baixa_resolucao_8230.png', 'Bomba d''água', 'Bomba utilizada na época.', 426720, 'image', 'c9d3e961-d080-45a6-9d8f-25ebf89319f8', 1, 0, 0, '2016-06-15 10:48:13', '2016-06-15 10:48:29'),
(15, 1, NULL, 1, 'Foto-54.png', 'Ferrovia', 'Malha ferroviária da Usina de Itatinga.', 345349, 'image', 'af15b6eb-6e61-451a-8d7e-45be64366706', 1, 0, 0, '2016-06-15 11:30:34', '2016-06-29 16:23:18'),
(16, 1, NULL, 1, 'Foto3.png', 'Cargueiro Cruk', 'Navio cargueiro Cruk atracado no porto.', 758153, 'image', 'f1b7112c-425f-4e09-ba35-ecfc8898d45b', 1, 0, 0, '2016-06-15 11:35:48', '2016-06-15 14:50:18'),
(19, 1, NULL, 1, 'Foto4.png', 'Ilha Barnabé', 'Ilha Barnabé, margem esquerda.', 753210, 'image', 'e66981d1-185f-41a3-9b87-953f8f38415f', 1, 0, 0, '2016-06-15 11:52:33', '2016-06-15 14:50:38'),
(23, 1, NULL, 1, 'baixa_resolucao_8701.png', 'Guindaste', 'Transporte dos blocos de concreto para ampliação do caís.', 430318, 'image', '16e72dfc-5698-4567-81ac-c1bf07fc38d6', 1, 0, 1, '2016-06-15 12:13:51', '2016-06-29 16:21:25'),
(24, 1, NULL, 1, '3667883_x720.jpg', 'Esteira', 'Obras no porto, construção esteira.', 189764, 'image', '2302f456-584a-4ccf-90e5-0d153cb06957', 1, 0, 1, '2016-06-15 14:53:07', '2016-06-29 16:19:06'),
(25, 1, NULL, 1, 'img_1280x720.jpg', 'Cargueiro', 'Maior cargueira que atracou no Porto de Santos.', 127276, 'image', '157175d2-b8c2-4558-84e2-500c4a6d1173', 1, 0, 0, '2016-06-15 14:57:20', '2016-06-16 15:37:34'),
(26, 1, NULL, 1, 'img2_1280x720.jpg', 'Grindaste', 'Novos guindastes do porto.', 146990, 'image', '8850df9a-e312-4663-a2a6-06a0bf5d3ec9', 1, 0, 0, '2016-06-15 15:01:21', '2016-06-16 15:36:16'),
(27, 1, NULL, 1, 'maxresdefault.jpg', 'Visão área', 'Visão aérea do porto.', 154032, 'image', 'ed50b0d9-bd5f-4ef2-8df4-8feb295c347a', 1, 0, 1, '2016-06-15 15:08:25', '2016-06-29 16:34:27'),
(28, 1, NULL, 1, 'img3_1280x720.jpg', 'TECON', 'Terminal TECON margem esquerda.', 196207, 'image', 'a62eb1cc-0080-41c1-a209-74f4611a7fe9', 1, 0, 0, '2016-06-15 15:10:56', '2016-06-16 15:35:33'),
(29, 1, NULL, 1, '001AAN008030.jpg.jpg', 'Novas oficinas', 'Imagem diurna, externa, horizontal, Cia. Docas', 136830, 'image', 'be74055e-4920-4856-b811-dcfb8193d059', 1, 0, 0, '2016-06-16 15:25:02', '2016-06-29 16:18:42'),
(30, 1, NULL, 1, '001AAN008032.jpg.jpg', 'Antigas oficinas', 'Portos, horizontal, diurna, externa, Santos, ', 190274, 'image', '0d393058-3377-4e99-b0d4-76f55bf96108', 1, 0, 0, '2016-06-16 15:29:20', '2016-06-29 16:19:51'),
(31, 1, NULL, 1, '001AAN008028.jpg.jpg', 'Draga com batelão', 'Porto, draga, diurna, externa, Santos', 107845, 'image', 'd8c16aef-05a4-4135-93eb-7d5f37262917', 1, 0, 1, '2016-06-16 15:31:45', '2016-06-16 15:32:01'),
(32, 1, NULL, 1, '001AAN008024.jpg.jpg', 'Casa de máquina compressora nº 2', 'Portos, horizontal, diurna, externa, Santos', 127384, 'image', '17375ea2-fd77-48b0-9f6d-0ada7f35f050', 1, 0, 1, '2016-06-16 15:34:00', '2016-06-16 15:49:16'),
(33, 1, NULL, 1, '001AAN008020.jpg.jpg', 'Estaleiro de Blocos', 'Vista geral do estaleiro de blocos.', 120811, 'image', 'a983591d-30f6-432d-9009-24c5b5bf6396', 1, 0, 0, '2016-06-16 15:40:20', '2016-06-29 16:21:06'),
(34, 1, NULL, 1, '001AAN008021.jpg.jpg', 'Cais da Alfândega', 'Vista do cais da alfandega', 96926, 'image', 'f6d7be86-564d-48ca-97da-bf4eb8c31af6', 1, 0, 0, '2016-06-16 15:43:14', '2016-06-29 16:22:12'),
(35, 1, NULL, 1, '001AAN008001.jpg.jpg', 'Embarque de bloco', 'Embarque de um bloco de concreto.', 95078, 'image', '56a8801e-7c94-4261-b264-6f1bc01e1e7d', 1, 0, 0, '2016-06-16 15:45:37', '2016-06-29 16:17:45'),
(36, 1, NULL, 1, '001AAN008022.jpg.jpg', 'Guindaste 24 t', 'Vista do cais com guindaste de 24 toneladas.', 111438, 'image', '56ded5ed-f235-427c-9b5c-ee37738dc01b', 1, 0, 0, '2016-06-16 15:55:00', '2016-06-29 16:16:15'),
(37, 1, NULL, 4, 'museu.jpg', 'Fachada', 'Fachada da sede do Complexo Cultural do Porto de Santos', 187037, 'image', 'bb65c014-a9a8-4944-ba57-9f9a0601aa70', 1, NULL, NULL, '2016-11-23 17:16:04', '2016-11-23 17:16:04'),
(38, 1, NULL, 4, 'inst1.png', 'Timão', 'Timão de um navio antigo.', 745259, 'image', '1fc06598-6e7f-4d5e-9c4e-0daab3506682', 1, NULL, NULL, '2016-11-23 17:19:22', '2016-11-23 17:19:22'),
(39, 1, NULL, 4, 'Museu2.jpg', 'Sala do Presidente', 'Réplica da sala do presidente com os móveis reais utilizados', 342984, 'image', 'bfba098e-521a-44af-81d1-34779f7bb462', 1, NULL, NULL, '2016-11-23 17:20:51', '2016-11-23 17:20:51'),
(40, 1, NULL, 4, 'Acervo3.jpg', 'Equipamentos de mergulho', 'Escafandros utilizados por mergulhadores na época.', 300898, 'image', 'e3016250-f3d2-4607-9d00-f5b15d895c16', 1, NULL, NULL, '2016-11-24 10:15:38', '2016-11-24 10:15:38'),
(41, 1, NULL, 2, 'HabilitacaoResponsavelLegalPsP.pdf', 'Teste de envio de documento PDF', 'Teste de upload de documento PDF', 121059, 'appli', '49c32da7-d3ce-420a-a0fd-39f9c04c7ea0', 1, NULL, NULL, '2017-01-20 16:57:53', '2017-01-20 16:57:53'),
(42, 1, NULL, 4, 'inst3.jpg', 'Acervo', 'Detalhe do Timão e Escafandros', 742851, 'image', 'f70c8497-be2f-437c-bef4-df261224fccf', 1, NULL, NULL, '2017-01-24 16:02:27', '2017-01-24 16:02:27'),
(43, 1, NULL, 4, 'Museu4.jpg', 'Documentos', 'Documentos históricos.', 422292, 'image', '8246c808-ed8c-4951-833b-ca1a28f887fb', 1, NULL, NULL, '2017-01-24 16:24:01', '2017-01-24 16:24:01'),
(44, 1, NULL, 5, 'ImagensMemoria1.jpg', 'Biblioteca', 'Infraestrutura da biblioteca do Complexo Cultural.', 415317, 'image', '45692d78-bb8e-43b1-8fb4-ac0351cd4e80', 1, NULL, NULL, '2017-01-31 09:04:25', '2017-01-31 09:04:25'),
(45, 1, NULL, 5, 'ImagensMemoria2.jpg', 'Pinacoteca', 'Espaço para exposições de quadros e esculturas relacionadas ao Porto de Santos.', 369879, 'image', '05c40185-842c-47e2-8c07-18c6f7337212', 1, NULL, NULL, '2017-01-31 09:07:31', '2017-01-31 09:07:31'),
(47, 1, NULL, 5, 'restauradora.png', 'Restauradora', 'Restauração de documentos antigos', 350582, 'image', '59f0befe-a100-4c96-a6fb-076e117bec36', 1, NULL, NULL, '2017-02-01 11:09:53', '2017-02-01 11:09:53');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `usuario_id`, `ativo`, `created`, `modified`) VALUES
(1, 'Fotos', 'Imagens diversas de todo acervo do museu do Porto de Santos.', 1, 1, '2016-05-31 20:36:43', '2016-05-31 17:58:34'),
(2, 'Leis', 'Documentos oficiais antigos.', 1, 1, '2016-05-31 20:43:09', '2016-05-31 20:43:09'),
(3, 'Quadros', 'Pinturas diversas.', 1, 1, '2016-05-31 20:48:23', '2016-05-31 20:48:23'),
(4, 'Documentos', 'Acervo de diversos documentos antigos.', 1, 1, '2016-06-14 11:21:59', '2016-06-14 11:21:59'),
(5, 'Arquitetura', 'Traduz as novas formas de morar introduzidas no final do século passado.', 1, 1, '2016-06-14 11:42:15', '2016-06-14 11:42:15'),
(6, 'Parceiros', 'Empresas parceiras', 1, 1, '2016-06-24 09:50:28', '2016-06-24 09:50:28'),
(7, 'Site', 'Tudo relacionado ao conteúdo para criação das páginas do site do Complexo Cultural do Porto de Santos', 1, 1, '2016-11-23 16:56:51', '2016-11-23 16:56:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes`
--

CREATE TABLE IF NOT EXISTS `detalhes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` int(10) unsigned DEFAULT NULL,
  `servico_id` int(10) unsigned DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text,
  `usuario_id` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_ususet_idx` (`usuario_id`),
  KEY `fk_empdet_idx` (`empresa_id`),
  KEY `fk_serdet_idx` (`servico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `detalhes`
--

INSERT INTO `detalhes` (`id`, `empresa_id`, `servico_id`, `titulo`, `descricao`, `usuario_id`, `created`, `modified`, `ativo`) VALUES
(1, 12, 4, 'Quem Somos', '<h1 style="text-align: justify;"><strong>Quem Somos</strong></h1>\r\n<p style="text-align: justify;">O Complexo Cultural do Porto de Santos &eacute; composto pelo Museu, Biblioteca (com cerca de 4000 t&iacute;tulos), Pinacoteca Gaffr&eacute;e e Guinle (que recebe exposi&ccedil;&otilde;es tempor&aacute;rias e eventos culturais), hemeroteca e Videoteca. O Complexo Cultural est&aacute; hoje representado por uma Ger&ecirc;ncia da Companhia Docas do Estado de S&atilde;o Paulo - CODESP.</p>\r\n<p style="text-align: justify;">A CODESP &eacute; uma empresa estatal brasileira, constitu&iacute;da da forma de sociedade de economia mista, criada em 07 de novembro de 1980. Era operadora portu&aacute;ria at&eacute; o ano de 1997, quando come&ccedil;ou a transferir as opera&ccedil;&otilde;es portu&aacute;rias para a iniciativa privada, tendo conclu&iacute;do esse processo de transfer&ecirc;ncia em julho de 1999. Desde ent&atilde;o, apenas administra o Porto de Santos como Autoridade Portu&aacute;ria.</p>', 1, '2016-08-26 16:04:23', '2017-01-23 14:58:42', 1),
(2, 12, 4, 'Estrutura', '<h1><strong>Estrutura</strong></h1>\r\n<p style="text-align: justify;">A pr&oacute;pria edifica&ccedil;&atilde;o do Museu &eacute; parte do acervo. A &ldquo;Casa n&ordm; 1&Prime; traduz as novas formas de morar introduzidas no fim do s&eacute;culo passado, um per&iacute;odo de renova&ccedil;&atilde;o urbana, quando as fam&iacute;lias mais abastadas abandonaram seus sobrad&otilde;es no Centro da cidade, passando a construir palacetes nos novos bairros e avenidas. Projetada pelo Engenheiro Guilherme Benjamin Weinschenck, em 1902, foi resid&ecirc;ncia oficial de dirigentes da Companhia Docas de Santos &ndash; CDS, transformando-se em escrit&oacute;rios administrativos a partir da d&eacute;cada de 50.</p>\r\n<p style="text-align: justify;">Os primeiros esfor&ccedil;os para reunir acervos com a finalidade de se instalar um museu foram realizados por volta de 1984 por seu atual Gerente Engenheiro Antonio Carlos da Mata Barreto, quando abortou a incinera&ccedil;&atilde;o de grande quantidade de documentos da antiga CDS, guardando-os para futura reserva hist&oacute;rica. A partir da&iacute; passou a incentivar a cria&ccedil;&atilde;o do Museu.</p>\r\n<p style="text-align: justify;">Em 01/09/1989 o Museu abriu suas portas para visita p&uacute;blica, dando a oportunidade de seus visitantes conhecerem a hist&oacute;ria do Porto de Santos por meio de um acervo de objetos hist&oacute;ricos de total relev&acirc;ncia para a hist&oacute;ria do Porto e do Brasil.</p>\r\n<p style="text-align: justify;">O Museu vem se modernizando de forma din&acirc;mica, atrav&eacute;s da busca constante de pe&ccedil;as e documentos hist&oacute;ricos nas m&atilde;os de terceiros, com a reorganiza&ccedil;&atilde;o atrav&eacute;s de amplia&ccedil;&otilde;es e interatividade. Hoje conta com, aproximadamente, 5000 itens acervados, entre m&oacute;veis, ferramentas, equipamentos diversos, documentos, livros, instrumentos n&aacute;uticos, fotografias, rel&oacute;gios, moldes, locomotivas e embarca&ccedil;&otilde;es, entre outros.</p>', 1, '2017-01-23 11:34:29', '2017-01-23 16:00:05', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `categoria_id` int(10) unsigned DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `dir` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `ativo` int(10) unsigned NOT NULL DEFAULT '1',
  `usuario_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuemp_idx` (`usuario_id`),
  KEY `fk_empemp_idx` (`parent_id`),
  KEY `fk_catemp_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome`, `categoria_id`, `link`, `email`, `telefone`, `dir`, `filename`, `ativo`, `usuario_id`, `parent_id`, `created`, `modified`) VALUES
(11, 'Agência Nacional de Transporte Aquaviário', 6, 'www.antaq.gov.br', NULL, NULL, '9d019cbf-8e9b-4510-8633-37a900d78f50', 'Antaq.jpg', 1, 1, NULL, '2016-06-24 10:29:46', '2016-06-24 10:29:46'),
(12, 'Cia. Docas do Estado de São Paulo', 6, 'www.portodesantos.com.br', 'adm@portodesantos.com.br', '55(13)3202-6565', '26febdd9-9eef-4571-bc4d-f4c82e86d8c7', 'Logo-Porto2.jpg', 1, 1, NULL, '2016-06-24 11:07:46', '2016-06-29 15:25:50'),
(13, 'Guarda Portuária', 6, 'www.portodesantos.com.br', '', '', '5fcff68c-0693-4863-a576-efa8e05a1c85', 'Brasao.jpg', 0, 1, 12, '2016-06-24 11:25:28', '2016-06-30 14:58:04'),
(14, 'PROAC - Incentivo à Cultura do Estado de São Paulo', 6, 'www.cultura.sp.gov.br', NULL, NULL, '36e4c62f-5ba3-4d90-a2b4-529a436bb737', 'Proac.jpg', 1, 1, NULL, '2016-06-24 15:21:02', '2016-06-24 15:21:02'),
(15, 'Governo do Estado de São Paulo', 6, 'www.saopaulo.sp.gov.br', NULL, NULL, '7c1d9b11-7116-4903-8400-6a99554374c9', 'GOV_VERTICAL2.jpg', 1, 1, NULL, '2016-06-27 11:14:01', '2016-06-27 11:14:01'),
(16, 'Governo Federal', 6, 'www.brasil.gov.br', NULL, NULL, 'ae28f601-ba9b-406c-b38b-4db87ff2748a', 'govFederal_374x200.jpg', 1, 1, NULL, '2016-06-27 17:39:19', '2016-06-27 17:39:19'),
(17, 'Complexo Cultural', 6, '10.0.7.65:8080/mporto', 'complexocultural@portodesantos.com.br', '55(13)3202-6565', 'e4ea0217-68c8-4167-926f-fb3cb2fee99a', 'Porto.jpg', 1, 1, 12, '2016-06-30 14:57:06', '2017-02-06 11:33:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` int(10) unsigned NOT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empend_idx` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `empresa_id`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `created`, `modified`) VALUES
(1, 12, 'Rua Conselheiro Rodrigues Alves', 's/n', 'Gate 23', 'Macuco', 'Santos', 'SP', NULL, NULL, NULL),
(2, 17, 'Avenida Conselheiro Rodrigues Alves', 's/n', '', 'Macuco', 'Santos', 'SP', '11015900', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descricao`, `categoria_id`, `dataEvento`, `ativo`, `usuario_id`, `created`, `modified`) VALUES
(2, 'Inauguração do Site do Complexo Cultural', 'O site do  Complexo Cultural foi desenvolvido pela equipe de T.I. da Cia. Docas do Estado de São Paulo. Este sistema web permite ao usuário total controle da ferramento com possibilidade de incluir, alterar e excluir todo o conteúdo. ', 4, '1934-02-08', 1, 1, '2016-11-10 11:31:43', '2016-11-10 11:31:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `empresa_id` int(10) unsigned DEFAULT NULL,
  `ds_cargo` varchar(45) DEFAULT NULL,
  `ic_ativo` int(11) DEFAULT '1',
  `usuario_id` int(10) unsigned NOT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`usuario_id`),
  KEY `fk_empfun_idx` (`empresa_id`),
  KEY `fk_usufun_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `foto`, `email`, `telefone`, `empresa_id`, `ds_cargo`, `ic_ativo`, `usuario_id`, `size`, `type`, `dir`, `created`, `modified`) VALUES
(2, 'Antonio Carlos da Mata Barreto', 'MataBarreto.png', 'matabarreto@portodesantos.com.br', '13', 17, 'Chefe de Serviços', 1, 1, NULL, NULL, '86e454a0-ae8f-41b2-bf7e-f6d5a98c3aa5', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `empresa_id` int(10) unsigned NOT NULL,
  `ativo` int(10) unsigned DEFAULT NULL,
  `exibir` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_catser_idx` (`categoria_id`),
  KEY `fk_useser_idx` (`usuario_id`),
  KEY `fk_empser_idx` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `usuario_id`, `categoria_id`, `empresa_id`, `ativo`, `exibir`, `created`, `modified`) VALUES
(1, 'Acervo', 'Galeria de Imagens de todo o acervo do Porto de Santos. Imagens transferidas dos antigos negativos de vidro.', 1, 1, 17, 1, 1, '2016-06-02 17:26:27', '2016-11-25 09:31:26'),
(2, 'Cartografias', 'Mapas e plantas referentes a construção e expansão do maior porto da América Latina.', 1, 4, 17, 1, 1, '2016-06-14 11:23:24', '2016-11-25 10:28:55'),
(3, 'Arquitetura', 'Um período de renovação urbana, quando as famílias mais abastadas começaram a construir palacetes nos bairros.', 1, 5, 17, 1, 1, '2016-06-14 11:44:12', '2016-11-25 09:46:11'),
(4, 'Sobre', 'Criação da página web sobre o Complexo Cultural do Porto de Santos', 1, 7, 17, 1, 0, '2016-11-23 17:10:21', '2017-01-25 11:26:52'),
(5, 'Equipe', 'Criação de celula para exibir equipe de funcionários do Complexo Cultural.', 1, 7, 17, 1, 0, '2017-01-31 08:44:50', '2017-01-31 08:44:50');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `ativo`, `created`, `modified`) VALUES
(1, 'Luiz C. Fonseca Jr.', 'luiz.fonseca@portodesantos.com.br', '$2y$10$xf56MYyDPrdyykEvt7scReJUCjiKX1tQ1ZEzXppTuOedKPzwGjDZy', 1, 1, '2016-05-31 14:09:51', '2016-08-29 11:51:09'),
(2, 'Inácio', 'jrinacio@uol.com.br', '$2y$10$Kkt2Gpo3dl9nsAULb9xQ1uxk4o6VXayvJ7qNO8ZUCYJXvLpZUGWc.', 1, 1, '2016-06-08 08:20:03', '2016-06-08 08:20:03'),
(3, 'Carlos Henrique de Oliveira Poço', 'carlos.poco@portodesantos.com.br', '$2y$10$Xe/7CC7QE.lyrp2F7VJ6yeuwhsrgZy.rZs.nYMYqfW0pM5iDwKN5q', 1, 1, '2016-11-21 15:03:28', '2016-11-21 15:03:28');

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
-- Limitadores para a tabela `detalhes`
--
ALTER TABLE `detalhes`
  ADD CONSTRAINT `fk_empdet` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serdet` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_catemp` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empemp` FOREIGN KEY (`parent_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuemp` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_empend` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_cateve` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_useeve` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_empfun` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usufun` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_catser` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empser` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_useser` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
