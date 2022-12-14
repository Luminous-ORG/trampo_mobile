-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 22:42
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtrampo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastro`
--

CREATE TABLE `tbcadastro` (
  `idCadastro` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `horarioCadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatoempresa`
--

CREATE TABLE `tbcontatoempresa` (
  `idContatoEmpresa` int(11) NOT NULL,
  `numeroTelefoneContatoEmpresa` varchar(10) NOT NULL,
  `numeroCelularContatoEmpresa` varchar(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcursousuario`
--

CREATE TABLE `tbcursousuario` (
  `idCurso` int(11) NOT NULL,
  `curso` varchar(250) NOT NULL,
  `instituicao` varchar(250) NOT NULL,
  `ano` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcursousuario`
--

INSERT INTO `tbcursousuario` (`idCurso`, `curso`, `instituicao`, `ano`, `idUsuario`) VALUES
(1, 'Administração', 'Etec de Guaianazes', 2014, 1),
(2, 'PHP básico', 'Alura', 2020, 2),
(3, 'Android Studio', 'Senai', 2022, 3),
(4, 'Java básico', 'Alura', 2021, 5),
(5, 'IA', 'Senai', 2022, 6),
(6, 'Photoshop', 'Senai', 2019, 7),
(7, 'Desenvolvimento de Sistemas', 'Etec de Guaianazes', 2022, 9),
(8, 'Photoshop', 'Alura', 2022, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdadosusuario`
--

CREATE TABLE `tbdadosusuario` (
  `idDados` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `jaTrabalhou` varchar(100) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbdadosusuario`
--

INSERT INTO `tbdadosusuario` (`idDados`, `idUsuario`, `dia`, `mes`, `ano`, `telefone`, `jaTrabalhou`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`) VALUES
(1, 1, 11, 10, 1988, '(11) 12345-6789', 'Não', '01001000', 'Praça da Sé', 15, 'Sé', 'São Paulo', 'SP'),
(2, 2, 1, 11, 2004, '(11) 92574-9649', 'Sim', '01002000', 'Rua Direita', 54, 'Sé', 'São Paulo', 'SP'),
(3, 3, 12, 8, 2004, '(11) 98765-4322', 'Sim', '01003000', 'Rua José Bonifácio', 56, 'Sé', 'São Paulo', 'SP'),
(4, 4, 25, 4, 2000, '(11) 94642-5698', 'Sim', '01004000', 'Rua Barão de Paranapiacaba', 88, 'Sé', 'São Paulo', 'SP'),
(5, 5, 10, 1, 1999, '(11) 92364-8723', 'Não', '01005000', 'Rua Benjamim Constant', 89, 'Sé', 'São Paulo', 'SP'),
(6, 6, 20, 12, 1985, '(11) 93242-3896', 'Sim', '01006000', 'Rua Senador Feijó', 67, 'Sé', 'São Paulo', 'SP'),
(7, 7, 6, 1, 1990, '(11) 9738-5863', 'Sim', '01007000', 'Rua Riachuelo', 23, 'Sé', 'São Paulo', 'SP'),
(8, 8, 28, 2, 2002, '(11) 9987-4321', 'Não', '01008000', 'Rua Líbero Badaró', 67, 'Centro', 'São Paulo', 'SP'),
(9, 9, 12, 10, 2004, '(11) 23932-8409', 'Sim', '01009000', 'Rua Líbero Badaró', 45, 'Centro', 'São Paulo', 'SP'),
(10, 10, 15, 10, 2004, '(11) 93274-8923', 'Não', '01010000', 'Rua São Bento', 8, 'Centro', 'São Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbeducacaousuario`
--

CREATE TABLE `tbeducacaousuario` (
  `idEducacao` int(11) NOT NULL,
  `grau` varchar(250) NOT NULL,
  `situacao` varchar(250) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbeducacaousuario`
--

INSERT INTO `tbeducacaousuario` (`idEducacao`, `grau`, `situacao`, `mes`, `ano`, `idUsuario`) VALUES
(1, 'Ensino Médio Completo', 'Concluido', 0, 0, 1),
(2, 'Ensino Médio Completo', 'Concluido', 0, 0, 2),
(3, 'Ensino Médio Completo', 'Concluido', 0, 0, 3),
(4, 'Ensino Médio Completo', 'Concluido', 0, 0, 4),
(5, 'Ensino Médio Incompleto', 'Cursando', 0, 0, 5),
(6, 'Ensino Médio Completo', 'Concluido', 0, 0, 6),
(7, 'Ensino Médio Completo', 'Concluido', 0, 0, 7),
(8, 'Ensino Médio Completo', 'Concluido', 0, 0, 8),
(9, 'Ensino Médio Com Técnico', 'Cursando', 0, 0, 9),
(10, 'Ensino Médio Com Técnico', 'Cursando', 0, 0, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbempresa`
--

CREATE TABLE `tbempresa` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresa` varchar(250) DEFAULT NULL,
  `emailEmpresa` varchar(250) DEFAULT NULL,
  `senhaEmpresa` varchar(250) DEFAULT NULL,
  `enderecoEmpresa` varchar(250) DEFAULT NULL,
  `cnpjEmpresa` int(14) DEFAULT NULL,
  `celularEmpresa` int(11) DEFAULT NULL,
  `fotoEmpresa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbenderecoempresa`
--

CREATE TABLE `tbenderecoempresa` (
  `idEnderecoEmpresa` int(11) NOT NULL,
  `logradouroEnderecoEmpresa` varchar(255) NOT NULL,
  `numeroEnderecoEmpresa` varchar(255) NOT NULL,
  `complementoEnderecoEmpresa` varchar(255) NOT NULL,
  `cepEnderecoEmpresa` varchar(8) NOT NULL,
  `estadoEnderecoEmpresa` varchar(255) NOT NULL,
  `bairroEnderecoEmpresa` varchar(255) NOT NULL,
  `cidadeEnderecoEmpresa` varchar(255) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbexperienciausuario`
--

CREATE TABLE `tbexperienciausuario` (
  `idExperiencia` int(11) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `empresa` varchar(250) NOT NULL,
  `mesInicio` int(11) NOT NULL,
  `anoInicio` int(11) NOT NULL,
  `situacao` varchar(250) DEFAULT NULL,
  `mesSaiu` int(11) DEFAULT NULL,
  `anoSaiu` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbexperienciausuario`
--

INSERT INTO `tbexperienciausuario` (`idExperiencia`, `cargo`, `empresa`, `mesInicio`, `anoInicio`, `situacao`, `mesSaiu`, `anoSaiu`, `idUsuario`) VALUES
(1, 'Desenvolvedor Mobile', 'Luminous', 2, 2022, 'Até o momento', NULL, NULL, 2),
(2, 'Programador Web', 'Luminous', 12, 2022, 'Até o momento', NULL, NULL, 3),
(3, 'Analista', 'Luminous', 2, 2022, 'Até o momento', NULL, NULL, 4),
(4, 'Analista e Designer', 'Google', 1, 2020, '', 1, 2022, 7),
(5, 'Analista', 'Luminous', 2, 2022, 'Até o momento', NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfotousuario`
--

CREATE TABLE `tbfotousuario` (
  `idFoto` int(11) NOT NULL,
  `foto` longtext NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfotousuario`
--

INSERT INTO `tbfotousuario` (`idFoto`, `foto`, `idUsuario`) VALUES
(1, 'http://localhost/trampo/assets/img/1669838532.png', 1),
(2, 'http://localhost/trampo/assets/img/1669839236.png', 2),
(3, 'http://localhost/trampo/assets/img/1669840178.png', 3),
(4, 'http://localhost/trampo/assets/img/1669840735.png', 4),
(5, 'http://localhost/trampo/assets/img/1669841221.png', 5),
(6, 'http://localhost/trampo/assets/img/1669841606.png', 6),
(7, 'http://localhost/trampo/assets/img/1669842087.png', 7),
(8, 'http://localhost/trampo/assets/img/1669843856.png', 8),
(9, 'http://localhost/trampo/assets/img/1669844087.png', 9),
(10, 'http://localhost/trampo/assets/img/1669844359.png', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhabilidade`
--

CREATE TABLE `tbhabilidade` (
  `idHabilidade` int(11) NOT NULL,
  `habilidade` varchar(250) NOT NULL,
  `nivel` varchar(250) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbidiomausuario`
--

CREATE TABLE `tbidiomausuario` (
  `idIdioma` int(11) NOT NULL,
  `idioma` varchar(250) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbidiomausuario`
--

INSERT INTO `tbidiomausuario` (`idIdioma`, `idioma`, `nivel`, `idUsuario`) VALUES
(1, 'Espanhol', 'Básico', 3),
(2, 'Italiano', 'Básico', 4),
(3, 'Inglês', 'Básico', 5),
(4, 'Inglês', 'Fluente', 7),
(5, 'Inglês', 'Básico', 8),
(6, 'Frances', 'Intermediário', 8),
(7, 'Japonês', 'Básico', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagemperfilempresa`
--

CREATE TABLE `tbimagemperfilempresa` (
  `idImagemPerfilEmpresa` int(11) NOT NULL,
  `nomeImagemPerfilEmpresa` varchar(255) NOT NULL,
  `caminhoImagemPerfilEmpresa` varchar(255) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinfo`
--

CREATE TABLE `tbinfo` (
  `idInfo` int(11) NOT NULL,
  `info1` text DEFAULT NULL,
  `info2` varchar(250) DEFAULT NULL,
  `info3` varchar(250) DEFAULT NULL,
  `info4` varchar(250) DEFAULT NULL,
  `info5` varchar(250) DEFAULT NULL,
  `info6` varchar(250) DEFAULT NULL,
  `info7` varchar(250) DEFAULT NULL,
  `info8` varchar(250) DEFAULT NULL,
  `info9` varchar(250) DEFAULT NULL,
  `info10` varchar(250) DEFAULT NULL,
  `info11` varchar(250) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbinfo`
--

INSERT INTO `tbinfo` (`idInfo`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`, `info7`, `info8`, `info9`, `info10`, `info11`, `idUsuario`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 1),
(2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 2),
(3, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 3),
(4, '', NULL, 'Tenho carteira de habilitação (CNH) B', NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', NULL, 4),
(5, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 5),
(6, '', NULL, 'Tenho carteira de habilitação (CNH) B', 'Tenho carteira de habilitação (CNH) C', NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 6),
(7, '', NULL, NULL, NULL, 'Tenho carteira de habilitação (CNH) D', NULL, 'Já morei no exterior', NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 7),
(8, '', 'Tenho carteira de habilitação (CNH) A', NULL, 'Tenho carteira de habilitação (CNH) C', NULL, 'Tenho carteira de habilitação (CNH) E', 'Já morei no exterior', NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 8),
(9, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenho boa comunicação', 'Conhecimento básico em informática', 9),
(10, '', NULL, NULL, NULL, NULL, NULL, 'Já morei no exterior', NULL, 'Tenho disponibilidade para viagens ou mudanças', 'Tenho boa comunicação', 'Conhecimento básico em informática', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbobjetivousuario`
--

CREATE TABLE `tbobjetivousuario` (
  `idObjetivo` int(11) NOT NULL,
  `objetivo` text NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbobjetivousuario`
--

INSERT INTO `tbobjetivousuario` (`idObjetivo`, `objetivo`, `idUsuario`) VALUES
(1, 'Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.', 1),
(2, 'Com as experiências adquiridas, procuro agora uma chance de efetivação na minha área de conhecimento.', 2),
(3, 'Com as experiências adquiridas, procuro agora uma chance de efetivação na minha área de conhecimento.', 3),
(4, 'Com as experiências adquiridas ao longo dos meus estágios, procuro agora uma chance de efetivação na minha área de conhecimento.', 4),
(5, 'Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.', 5),
(6, 'Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.', 6),
(7, 'Com as experiências adquiridas ao longo dos meus estágios, procuro agora uma chance de efetivação na minha área de conhecimento.', 7),
(8, 'Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.', 8),
(9, 'Com as experiências adquiridas ao longo dos meus estágios, procuro agora uma chance de efetivação na minha área de conhecimento.', 9),
(10, 'Minha carreira está no início, mas estou em busca de uma oportunidade para demonstrar meu talento e minhas habilidades. Acredito que possa compensar a falta de experiência com dedicação e empenho.', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(250) NOT NULL,
  `emailUsuario` varchar(250) NOT NULL,
  `senhaUsuario` varchar(250) NOT NULL,
  `recuperar_senha` varchar(250) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `recuperar_senha`, `status`) VALUES
(1, 'João Paulo da Silva', 'joao.paulo@gmail.com', '12345678', '12345678', 'true'),
(2, 'Gabriel Antonio Da Silva Souto', 'gabriel@gmail.com', '12345678', '12345678', 'true'),
(3, 'Guilherme Cabral', 'guilherme@gmail.com', '12345678', '12345678', 'true'),
(4, 'Caique de Andrade', 'caique@gmail.com', '12345678', '12345678', 'true'),
(5, 'Fernando Almeida', 'fernando@gmail.com', '12345678', '12345678', 'true'),
(6, 'Kevin Silva', 'kevin@gmail.com', '12345678', '12345678', 'true'),
(7, 'Nicolas Nunes', 'nunes@gmail.com', '12345678', '12345678', 'true'),
(8, 'Nicollas Bispo', 'bispo@gmail.com', '12345678', '12345678', 'true'),
(9, 'Pedro Lins', 'pedro@gmail.com', '12345678', '12345678', 'true'),
(10, 'Victor Henrique', 'victor@gmail.com', '12345678', '12345678', 'true');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvaga`
--

CREATE TABLE `tbvaga` (
  `idVaga` int(11) NOT NULL,
  `nomeVaga` varchar(250) DEFAULT NULL,
  `requisitos` text NOT NULL,
  `cargaHoraria` varchar(250) NOT NULL,
  `salario` varchar(250) NOT NULL,
  `descricaoVaga` text DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `dataVaga` date DEFAULT current_timestamp(),
  `nomeEmpresa` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`idCadastro`);

--
-- Índices para tabela `tbcontatoempresa`
--
ALTER TABLE `tbcontatoempresa`
  ADD PRIMARY KEY (`idContatoEmpresa`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Índices para tabela `tbcursousuario`
--
ALTER TABLE `tbcursousuario`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbdadosusuario`
--
ALTER TABLE `tbdadosusuario`
  ADD PRIMARY KEY (`idDados`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbeducacaousuario`
--
ALTER TABLE `tbeducacaousuario`
  ADD PRIMARY KEY (`idEducacao`),
  ADD KEY `ano` (`ano`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbempresa`
--
ALTER TABLE `tbempresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Índices para tabela `tbenderecoempresa`
--
ALTER TABLE `tbenderecoempresa`
  ADD PRIMARY KEY (`idEnderecoEmpresa`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Índices para tabela `tbexperienciausuario`
--
ALTER TABLE `tbexperienciausuario`
  ADD PRIMARY KEY (`idExperiencia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbfotousuario`
--
ALTER TABLE `tbfotousuario`
  ADD PRIMARY KEY (`idFoto`);

--
-- Índices para tabela `tbhabilidade`
--
ALTER TABLE `tbhabilidade`
  ADD PRIMARY KEY (`idHabilidade`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbidiomausuario`
--
ALTER TABLE `tbidiomausuario`
  ADD PRIMARY KEY (`idIdioma`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbimagemperfilempresa`
--
ALTER TABLE `tbimagemperfilempresa`
  ADD PRIMARY KEY (`idImagemPerfilEmpresa`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Índices para tabela `tbinfo`
--
ALTER TABLE `tbinfo`
  ADD PRIMARY KEY (`idInfo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbobjetivousuario`
--
ALTER TABLE `tbobjetivousuario`
  ADD PRIMARY KEY (`idObjetivo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices para tabela `tbvaga`
--
ALTER TABLE `tbvaga`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  MODIFY `idCadastro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontatoempresa`
--
ALTER TABLE `tbcontatoempresa`
  MODIFY `idContatoEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcursousuario`
--
ALTER TABLE `tbcursousuario`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbdadosusuario`
--
ALTER TABLE `tbdadosusuario`
  MODIFY `idDados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbeducacaousuario`
--
ALTER TABLE `tbeducacaousuario`
  MODIFY `idEducacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbempresa`
--
ALTER TABLE `tbempresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbenderecoempresa`
--
ALTER TABLE `tbenderecoempresa`
  MODIFY `idEnderecoEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbexperienciausuario`
--
ALTER TABLE `tbexperienciausuario`
  MODIFY `idExperiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbfotousuario`
--
ALTER TABLE `tbfotousuario`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbhabilidade`
--
ALTER TABLE `tbhabilidade`
  MODIFY `idHabilidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbidiomausuario`
--
ALTER TABLE `tbidiomausuario`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbimagemperfilempresa`
--
ALTER TABLE `tbimagemperfilempresa`
  MODIFY `idImagemPerfilEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbinfo`
--
ALTER TABLE `tbinfo`
  MODIFY `idInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbobjetivousuario`
--
ALTER TABLE `tbobjetivousuario`
  MODIFY `idObjetivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbvaga`
--
ALTER TABLE `tbvaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbimagemperfilempresa`
--
ALTER TABLE `tbimagemperfilempresa`
  ADD CONSTRAINT `tbimagemperfilempresa_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `tbempresa` (`idEmpresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
