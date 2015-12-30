-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 29/12/2015 às 22:54
-- Versão do servidor: 5.5.44-MariaDB-cll-lve
-- Versão do PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `groupsof_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriaImoveis`
--

CREATE TABLE IF NOT EXISTS `categoriaImoveis` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL COMMENT 'Apartamento, Casa, Terreno',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clienteEnderecos`
--

CREATE TABLE IF NOT EXISTS `clienteEnderecos` (
  `codigo` bigint(20) unsigned NOT NULL,
  `codigoCliente` bigint(20) unsigned NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigoCliente` (`codigoCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `tipoPessoa` tinyint(1) NOT NULL COMMENT '0 - Pessoa Juridica; 1 - Pessoa Fisica;',
  `rg` varchar(13) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL COMMENT '0 - Feminino; 1 - Masculino',
  `cnpj` varchar(18) DEFAULT NULL,
  `inscricaoEstadual` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clienteTelefones`
--

CREATE TABLE IF NOT EXISTS `clienteTelefones` (
  `codigo` int(10) unsigned NOT NULL,
  `codigoCliente` int(10) unsigned NOT NULL,
  `telefone` varchar(17) NOT NULL,
  `ramal` int(11) DEFAULT NULL,
  `operadora` varchar(20) DEFAULT NULL,
  `recado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `codigoCliente` (`codigoCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracoes`
--

CREATE TABLE IF NOT EXISTS `configuracoes` (
  `codigo` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `conteudo` varchar(255) DEFAULT NULL,
  `dominio` varchar(100) DEFAULT NULL,
  `descricao` varchar(160) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `logotipo` varchar(100) DEFAULT NULL,
  `emailPagSeguro` varchar(100) DEFAULT NULL,
  `tokenPagSeguro` varchar(32) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` int(10) unsigned DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `telefone` varchar(17) DEFAULT NULL,
  `facebookPage` varchar(100) DEFAULT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `configuracoes`
--

INSERT INTO `configuracoes` (`codigo`, `titulo`, `empresa`, `conteudo`, `dominio`, `descricao`, `keywords`, `logotipo`, `emailPagSeguro`, `tokenPagSeguro`, `endereco`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `facebookPage`, `excluido`) VALUES
(1, 'Group Softer', 'Group Softer', 'Site da empresa Group Softer. Empresa dedicada a oferecer soluÃ§Ãµes na Ã¡rea de desenvolvimento de Softwares e Sites.', 'http://www.groupsofter.com.br', 'Site da empresa Group Softer. Empresa dedicada a oferecer soluÃ§Ãµes na Ã¡rea de desenvolvimento de Softwares e Sites e ManutenÃ§Ã£o de computadores.', 'Group Softer, desenvolvimento de sites em poÃ§os de caldas, desenvolvimento de sistemas em poÃ§os de caldas, criaÃ§Ã£o de sites em poÃ§os de caldas, criaÃ§Ã£o de sistemas em poÃ§os de caldas, suporte de informÃ¡tica em poÃ§os de caldas, formataÃ§Ã£o', 'http://www.groupsofter.com.br/app.view/img/logotipo.png', NULL, NULL, 'Rua Major Luis Loiola', 45, 'Jardim Bela Vista', '37.701-223', 'PoÃ§os de Caldas', 'MG', '(35) 99109-0906', 'https://www.facebook.com/groupsofter', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcoes`
--

CREATE TABLE IF NOT EXISTS `funcoes` (
  `codigo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `banner` tinyint(1) DEFAULT NULL,
  `video` tinyint(1) DEFAULT NULL,
  `galeria` tinyint(1) DEFAULT NULL,
  `ecommerce` tinyint(1) DEFAULT NULL,
  `delivery` tinyint(1) DEFAULT NULL,
  `imobiliaria` tinyint(1) DEFAULT NULL,
  `portifolio` tinyint(1) DEFAULT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `funcoes`
--

INSERT INTO `funcoes` (`codigo`, `banner`, `video`, `galeria`, `ecommerce`, `delivery`, `imobiliaria`, `portifolio`, `excluido`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigoPagina` bigint(20) unsigned DEFAULT NULL,
  `codigoProduto` bigint(20) unsigned DEFAULT NULL,
  `codigoImovel` bigint(20) unsigned DEFAULT NULL,
  `imagem` varchar(100) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` longtext NOT NULL,
  `ordem` int(10) unsigned NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `codigoPagina` (`codigoPagina`,`codigoProduto`,`codigoImovel`),
  KEY `codigoProduto` (`codigoProduto`),
  KEY `codigoImovel` (`codigoImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `galeria`
--

INSERT INTO `galeria` (`codigo`, `codigoPagina`, `codigoProduto`, `codigoImovel`, `imagem`, `titulo`, `descricao`, `ordem`, `ativo`, `excluido`) VALUES
(4, 3, NULL, NULL, 'http://www.groupsofter.com.br/app.view/img/painel.png', 'Painel Administrativo', 'Painel para gestÃ£o de conteÃºdo dos sites.<br/>Possibilidade de sites:<ul><li>Sites Institucionais</li><li>E-Commerces</li><li>Sites Delivery</li><li>Imobiliarias</li></ul>', 1, 1, 0),
(5, 3, NULL, NULL, 'http://www.groupsofter.com.br/app.view/img/ImoveisVieiraERodrigues.png', 'ImÃ³veis Vieira e Rodrigues', 'Site Institucional da imobiliaria ImÃ³veis Vieira e Rodrigues em PoÃ§os de Caldas', 2, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `endereco` varchar(100) NOT NULL,
  `numero` int(10) unsigned NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `preco` double unsigned NOT NULL,
  `situacao` bigint(20) unsigned DEFAULT NULL COMMENT 'Aluguel, Venda, Arrendamento',
  `categoria` bigint(20) unsigned DEFAULT NULL COMMENT 'Casa, apartamento, Terreno',
  `categoriaAluguel` tinyint(1) DEFAULT NULL COMMENT '0 - Residencial; 1 - Comercial',
  `destaque` tinyint(1) NOT NULL,
  `descricao` longtext,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `situacao` (`situacao`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `localizacao`
--

CREATE TABLE IF NOT EXISTS `localizacao` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `localizacao`
--

INSERT INTO `localizacao` (`codigo`, `nome`, `ativo`, `excluido`) VALUES
(1, 'ConteÃºdo', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `localizacao` bigint(20) unsigned DEFAULT NULL,
  `texto` longtext,
  `imagem` varchar(100) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `localizacao` (`localizacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `paginas`
--

INSERT INTO `paginas` (`codigo`, `titulo`, `descricao`, `localizacao`, `texto`, `imagem`, `ativo`, `excluido`) VALUES
(1, 'Desenvolvimento Web', 'Desenvolvimento Web', 1, '<p>Ter um site hoje em dia &eacute; uma necessidade para empresas, profissionais e pessoas que querem ser encontradas.</p>\n<p>Com seu site pr&oacute;prio voc&ecirc; &eacute; encontrado mais facilmente, possui quantas contas de e-mail forem necess&aacute;rias,&nbsp;usando&nbsp;o dominio da sua empresa (seu-nome@sua-empresa.com.br). Voc&ecirc; estreita a rela&ccedil;&atilde;o com o seus clientes e alcan&ccedil;a pessoas novas e interessadas no seu neg&oacute;cio, uma vez que sua empresa fica dispon&iacute;vel, 24 horas por dia, para seus clientes, podendo assim&nbsp;anunciar seus produtos fazendo um marketing mais facil. Conseguindo atualizar o conteudo do site sem ter conhecimento especifico de desenvolvimento, possobilitando abranger outras &aacute;reas e novos contatos.</p>\n<p>Nossa equipe&nbsp;&eacute; altamente qualificada. Conta com profissionais que est&atilde;o em constante atualiza&ccedil;&atilde;o de conhecimento e t&eacute;cnicas, buscando sempre o mais atual em termos de desenvolvimento web. Possuimos um painel pr&oacute;prio e exclusivo para gest&atilde;o de conte&uacute;do, para facilitar a atualiza&ccedil;&atilde;o do seu website. Nossos sites s&atilde;o&nbsp;responsivos ou seja: conseguindo assim acessar seu site de qualquer dispositivo conectado a internet.</p>', NULL, 1, 0),
(2, 'Desenvolvimento de Sistemas', 'Desenvolvimento de Sistemas', 1, '<p>Sua empresa precisa de um sistema interno, seja ele controle de estoque, controle de fluxo de trabalho, Administra&ccedil;&atilde;o imobiliaria, etc? Entre em contato com a Softer. Atuamos na &aacute;rea de Desenvolvimento de Sistemas desde 2010. Fazendo sistemas personalizados com a necessidade do cliente.</p>\n<p>Sistemas leves e r&aacute;pidos, como vc precisa. Desenvolvimento usando as melhores e mais atuais t&eacute;cnicas de desenvolvimento e linguagens comerciais.</p>\n<p>Cria&ccedil;&atilde;o e Gera&ccedil;&atilde;o de Relat&oacute;rios presonalizados, de acordo com o que voc&ecirc; precisa.</p>\n<p>Contamos tamb&eacute;m com a &aacute;rea de Desenvolvimento de Sistemas Web (Sistemas que voc&ecirc; pode usar via internet, a qualquer lugar que voc&ecirc; estiver)</p>\n<p>Entre em <a title="Contato" href="../../contato">contato</a> e solicite um or&ccedil;amento.</p>', NULL, 1, 0),
(3, 'PortifÃ³lio', 'PortifÃ³lios', 1, NULL, NULL, 1, 1),
(4, 'AssistÃªncia TÃ©cnica', 'AssistÃªncia TÃ©cnica', 1, '<p>Em nossa &aacute;rea de Assit&ecirc;ncia T&eacute;cnica trabalhamos com servi&ccedil;os de manuten&ccedil;&atilde;o de rede e/ou computadores e suporte ao usu&aacute;rio.</p>\n<p><strong>Servi&ccedil;os de Rede:</strong></p>\n<ul>\n<li>Reinstala&ccedil;&atilde;o/Reconfigura&ccedil;&atilde;o de Esta&ccedil;&otilde;es de trabalho;</li>\n<li>Configura&ccedil;&atilde;o l&oacute;gica e f&iacute;sica de placas de rede das Esta&ccedil;&otilde;es de trabalho e Servidor;</li>\n<li>Reparos nos conectores e cabos de Rede;</li>\n<li>Troca de Equipamentos da Rede (Placas de Rede, Hub, Switch, Roteadores, conectores);</li>\n<li>Mapeamento/Compartilhamento de unidades e perif&eacute;ricos;</li>\n<li>Configura&ccedil;&atilde;o de Equipamentos de Rede;</li>\n</ul>\n<p><strong>Manuten&ccedil;&atilde;o de computadores:</strong></p>\n<ul>\n<li>Substitui&ccedil;&atilde;o de placas e perif&eacute;ricos defeituosas;</li>\n<li>Formata&ccedil;&atilde;o;</li>\n<li>Reinstala&ccedil;&atilde;o de sistema Operacional;</li>\n<li>Remo&ccedil;&atilde;o de V&iacute;rus;</li>\n<li>Instala&ccedil;&atilde;o de Anti-v&iacute;rus;</li>\n<li>Corre&ccedil;&atilde;o de Erros no Sistema Operacional;</li>\n<li>Instala&ccedil;&atilde;o/Configura&ccedil;&atilde;o de Softwares Especificos;</li>\n<li>Limpeza Interna;</li>\n</ul>\n<p>Podendo assim voc&ecirc; escolher a melhor maneira de ser atendido. Sendo voc&ecirc; usu&aacute;rio ou uma empresa, trabalhamos com contratos mensais onde voc&ecirc; escolhe a melhor maneira como podemos atendelo ou servi&ccedil;os individuais. E a melhor parte &eacute; que nosso contratrato se renova a cada m&ecirc;s fazendo com que assim voc&ecirc; n&atilde;o fique preso a ele.</p>\n<p>Ligue e fa&ccedil;a seu or&ccedil;amento.</p>', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `portifolio`
--

CREATE TABLE IF NOT EXISTS `portifolio` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `titulo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `descricao` longtext COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Fazendo dump de dados para tabela `portifolio`
--

INSERT INTO `portifolio` (`codigo`, `imagem`, `titulo`, `descricao`, `url`, `ativo`, `excluido`) VALUES
(1, 'http://www.groupsofter.com.br/app.view/img/painel.png', 'Painel Administrativo', '<p>Painel para gest&atilde;o de conte&uacute;do dos sites.</p>', NULL, 1, 0),
(2, 'http://www.groupsofter.com.br/app.view/img/ImoveisVieiraERodrigues.png', 'ImÃ³veis Vieira e Rodrigues', '<p>Site Institucional da imobiliaria Im&oacute;veis Vieira e Rodrigues em Po&ccedil;os de Caldas</p>', 'http://www.imoveisvieiraerodrigues.com.br/', 1, 0),
(3, 'http://www.groupsofter.com.br/app.view/img/rogerioPereira.png', 'Rogerio Pereira', '<p>Site de Curriculum pessoal com Portif&oacute;lio</p>', 'http://www.rogeriopereira.info', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `valor` double NOT NULL,
  `peso` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacaoImoveis`
--

CREATE TABLE IF NOT EXISTS `situacaoImoveis` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `situacao` varchar(100) NOT NULL COMMENT 'Aluguel, Venda, Arrendamento',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `senha`, `administrador`, `ativo`, `excluido`) VALUES
(1, 'RogÃ©rio Eduardo Pereira', 'rogerio@groupsofter.com.br', '0495854e64f784aa25aeca615779020e8793ffb88cfef01eb1bc7301cfcb908ff38821664980798a8a105a7390fa9d400ebc3d0a79837135c9c7436c61d62c67', 1, 1, 0),
(2, 'Sarah JÃ©ssica XaviÃ©r Pereira', 'sarah@groupsofter.com.br', '95d1f73992901ec277a0a5fea42d236a8171942c5d0ce695c7a2aaae1bca9f086ddbb072939ae7fbf1b5a292d23713a79442e47af69873b92f4b726303124f74', 0, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendaProdutos`
--

CREATE TABLE IF NOT EXISTS `vendaProdutos` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigoVenda` bigint(20) unsigned NOT NULL,
  `produto` bigint(20) unsigned DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `desconto` double DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigoPedido` (`codigoVenda`,`produto`),
  KEY `produto` (`produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cliente` bigint(20) unsigned DEFAULT NULL,
  `dataHora` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 - Aberto; 2 - Processando; 3 - Postado no Correio; 4 - Entregue',
  `codigoRastreio` varchar(20) DEFAULT NULL,
  `tipoEntrega` int(11) NOT NULL COMMENT '1 - PAC; 2 - SEDEX;',
  `frete` double DEFAULT NULL,
  `enderecoEntrega` varchar(100) NOT NULL,
  `numeroEntrega` int(11) NOT NULL,
  `complementoEntrega` varchar(50) DEFAULT NULL,
  `bairroEntrega` varchar(50) NOT NULL,
  `cepEntrega` varchar(9) NOT NULL,
  `cidadeEntrega` varchar(100) NOT NULL,
  `estadoEntrega` varchar(2) NOT NULL,
  `valor` double NOT NULL,
  `desconto` double DEFAULT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`),
  KEY `cliente` (`cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `video` varchar(50) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `clienteEnderecos`
--
ALTER TABLE `clienteEnderecos`
  ADD CONSTRAINT `endereco-cliente` FOREIGN KEY (`codigoCliente`) REFERENCES `clientes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_imovel` FOREIGN KEY (`codigoImovel`) REFERENCES `imoveis` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galeria_pagina` FOREIGN KEY (`codigoPagina`) REFERENCES `paginas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galeria_produto` FOREIGN KEY (`codigoProduto`) REFERENCES `produtos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `imoveis`
--
ALTER TABLE `imoveis`
  ADD CONSTRAINT `imoveis_categoria` FOREIGN KEY (`categoria`) REFERENCES `categoriaImoveis` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `imoveis_situacao` FOREIGN KEY (`situacao`) REFERENCES `situacaoImoveis` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `paginas`
--
ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_localizacao` FOREIGN KEY (`localizacao`) REFERENCES `localizacao` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `vendaProdutos`
--
ALTER TABLE `vendaProdutos`
  ADD CONSTRAINT `vendaProduto-Pedido` FOREIGN KEY (`codigoVenda`) REFERENCES `vendas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendaProduto-Produto` FOREIGN KEY (`produto`) REFERENCES `produtos` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas-cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
