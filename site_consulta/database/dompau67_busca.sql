-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2020 às 03:50
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dompau67_busca`
--
CREATE DATABASE IF NOT EXISTS `dompau67_busca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dompau67_busca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `area` varchar(50) DEFAULT NULL,
  `area_id` int(2) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`area`, `area_id`, `id`) VALUES
('ARQUITETURA E URBANISMO', 5, 1),
('ARTES', 7, 2),
('CIENCIA DA INFORMACAO', 5, 3),
('COMUNICACAO', 5, 4),
('DIREITO', 5, 5),
('EDUCACAO FISICA', 2, 6),
('ENGENHARIA CIVIL', 6, 7),
('ENGENHARIA SANITARIA', 6, 8),
('LETRAS', 7, 9),
('MEDICINA', 2, 10),
('NUTRICAO', 2, 11),
('PROBABILIDADE E ESTATISTICA', 3, 12),
('PSICOLOGIA', 4, 13),
('SOCIOLOGIA', 4, 14),
('ADMINISTRACAO', 5, 15),
('BIOLOGIA GERAL', 1, 16),
('CIENCIA DA COMPUTACAO', 7, 17),
('CIENCIA POLITICA', 4, 18),
('CIENCIAS ATUARIAIS', 8, 19),
('EDUCACAO', 4, 20),
('ENFERMAGEM', 2, 21),
('ENGENHARIA DE PRODUCAO', 6, 22),
('ENGENHARIA MECANICA', 6, 23),
('FILOSOFIA', 7, 24),
('FISIOTERAPIA E TERAPIA OCUPACIONAL', 2, 25),
('FONOAUDIOLOGIA', 2, 26),
('GENETICA', 1, 27),
('MORFOLOGIA', 1, 28),
('ODONTOLOGIA', 2, 29),
('QUIMICA', 3, 30),
('RELACOES INTERNACIONAIS', 8, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `deficiencia`
--

CREATE TABLE `deficiencia` (
  `deficiencia` varchar(50) DEFAULT NULL,
  `deficiencia_id` int(2) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `deficiencia`
--

INSERT INTO `deficiencia` (`deficiencia`, `deficiencia_id`, `id`) VALUES
('Auditiva / Mudez', 1, 1),
('Decorrentes de Senescência ou Senilidade', 2, 2),
('Física', 3, 3),
('Intelectual', 4, 4),
('Mental / Psicossocial', 5, 5),
('Todos', 6, 6),
('Visual', 7, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `extensao`
--

CREATE TABLE `extensao` (
  `id` int(3) NOT NULL,
  `grandearea_id` int(2) DEFAULT NULL,
  `area_id` int(2) DEFAULT NULL,
  `deficiencia_id` int(2) DEFAULT NULL,
  `deficiencia_id2` int(2) DEFAULT NULL,
  `deficiencia_id3` int(2) DEFAULT NULL,
  `deficiencia_id4` int(2) DEFAULT NULL,
  `deficiencia_id5` int(2) DEFAULT NULL,
  `deficiencia_id6` int(2) DEFAULT NULL,
  `deficiencia_id7` int(2) DEFAULT NULL,
  `deficiencia_id8` int(2) DEFAULT NULL,
  `projeto_pesquisa` varchar(2000) DEFAULT NULL,
  `data_inicio` varchar(200) DEFAULT NULL,
  `descricao` varchar(2000) DEFAULT NULL,
  `docente` varchar(200) DEFAULT NULL,
  `contato` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacao`
--

CREATE TABLE `graduacao` (
  `id` int(3) NOT NULL,
  `grandearea_id` int(2) DEFAULT NULL,
  `grandearea_id2` int(2) DEFAULT NULL,
  `grandearea_id3` int(2) DEFAULT NULL,
  `area_id` int(2) DEFAULT NULL,
  `area_id2` int(2) DEFAULT NULL,
  `area_id3` int(2) DEFAULT NULL,
  `deficiencia_id` int(2) DEFAULT NULL,
  `deficiencia_id2` int(2) DEFAULT NULL,
  `deficiencia_id3` int(2) DEFAULT NULL,
  `deficiencia_id4` int(2) DEFAULT NULL,
  `deficiencia_id5` int(2) DEFAULT NULL,
  `deficiencia_id6` int(2) DEFAULT NULL,
  `deficiencia_id7` int(2) DEFAULT NULL,
  `deficiencia_id8` int(2) DEFAULT NULL,
  `codigo_mec` varchar(20) DEFAULT NULL,
  `codigo_siga` varchar(20) DEFAULT NULL,
  `nome_curso` varchar(200) DEFAULT NULL,
  `grau` varchar(200) DEFAULT NULL,
  `modalidade` varchar(200) DEFAULT NULL,
  `turno` varchar(200) DEFAULT NULL,
  `unidade` varchar(2000) DEFAULT NULL,
  `centro` varchar(2000) DEFAULT NULL,
  `campus` varchar(2000) DEFAULT NULL,
  `versao_curricular` varchar(2000) DEFAULT NULL,
  `codigo_disciplina` varchar(200) DEFAULT NULL,
  `nome_disciplina` varchar(200) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `periodo` varchar(200) DEFAULT NULL,
  `creditos` varchar(2000) DEFAULT NULL,
  `horaria_teorica` varchar(200) DEFAULT NULL,
  `horaria_pratica` varchar(200) DEFAULT NULL,
  `horaria_extensao` varchar(200) DEFAULT NULL,
  `ementa` varchar(2000) DEFAULT NULL,
  `contato` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grandearea`
--

CREATE TABLE `grandearea` (
  `grandearea` varchar(50) DEFAULT NULL,
  `grandearea_id` int(2) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grandearea`
--

INSERT INTO `grandearea` (`grandearea`, `grandearea_id`, `id`) VALUES
('CIÊNCIAS BIOLÓGICAS', 1, 1),
('CIÊNCIAS DA SAÚDE', 2, 2),
('CIÊNCIAS EXATAS E DA TERRA', 3, 3),
('CIÊNCIAS HUMANAS', 4, 4),
('CIÊNCIAS SOCIAIS APLICADAS', 5, 5),
('ENGENHARIAS', 6, 6),
('LINGUÍSTICA, LETRAS E ARTES', 7, 7),
('OUTROS', 8, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id` int(3) NOT NULL,
  `grandearea_id` int(2) DEFAULT NULL,
  `area_id` int(2) DEFAULT NULL,
  `deficiencia_id` int(2) DEFAULT NULL,
  `deficiencia_id2` int(2) DEFAULT NULL,
  `deficiencia_id3` int(2) DEFAULT NULL,
  `deficiencia_id4` int(2) DEFAULT NULL,
  `deficiencia_id5` int(2) DEFAULT NULL,
  `deficiencia_id6` int(2) DEFAULT NULL,
  `deficiencia_id7` int(2) DEFAULT NULL,
  `deficiencia_id8` int(2) DEFAULT NULL,
  `projeto_pesquisa` varchar(2000) DEFAULT NULL,
  `data_inicio` varchar(200) DEFAULT NULL,
  `descricao` varchar(2000) DEFAULT NULL,
  `docente` varchar(200) DEFAULT NULL,
  `contato` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(3, 'daniel', '06859f31b729cfc3352b2b7468afc329'),
(4, 'gustavo', '48a2ea6161aa0823e7926647ec6c7d70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `extensao`
--
ALTER TABLE `extensao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `graduacao`
--
ALTER TABLE `graduacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grandearea`
--
ALTER TABLE `grandearea`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `extensao`
--
ALTER TABLE `extensao`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `graduacao`
--
ALTER TABLE `graduacao`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `grandearea`
--
ALTER TABLE `grandearea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
