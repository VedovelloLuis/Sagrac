-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2022 às 15:41
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_atribuicoesdisciplinares`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_aluno`
--

DROP TABLE IF EXISTS `tab_aluno`;
CREATE TABLE IF NOT EXISTS `tab_aluno` (
  `alunoNome` varchar(30) NOT NULL,
  `alunoRm` int(11) NOT NULL,
  `cursoId` int(11) NOT NULL COMMENT 'Chave externa',
  PRIMARY KEY (`alunoRm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_aluno`
--

INSERT INTO `tab_aluno` (`alunoNome`, `alunoRm`, `cursoId`) VALUES
('Lucas José da Silva', 12773, 1),
('Arthur Ribeiro Patolino', 12774, 1),
('Luis Vedovello', 29147, 1),
('Bianca Ruiz', 29000, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_curso`
--

DROP TABLE IF EXISTS `tab_curso`;
CREATE TABLE IF NOT EXISTS `tab_curso` (
  `periodo` varchar(20) NOT NULL,
  `cursoTurma` varchar(130) NOT NULL,
  `cursoId` int(11) NOT NULL AUTO_INCREMENT,
  `chTotal` int(6) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  PRIMARY KEY (`cursoId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_curso`
--

INSERT INTO `tab_curso` (`periodo`, `cursoTurma`, `cursoId`, `chTotal`, `sigla`) VALUES
('Vespertino', 'AnÃ¡lise e Desenvolvimento de Sistemas', 1, 1250, 'ADS'),
('Vespertino', 'SeguranÃ§a CibernÃ©tica', 2, 1250, 'SAC'),
('Vespertino', 'AnÃ¡lise e Desenvolvimento de Software', 3, 1250, 'ADSIS'),
('Noturno', 'Engenharia de Software', 4, 1250, 'EGS'),
('Matutino', 'ConstruÃ§Ã£o Civil', 5, 1250, 'CV'),
('Noturno', 'Engenharia CibernÃ©tica', 6, 1250, 'ECB'),
('Noturno', 'Engenharia RobÃ³tica', 7, 1250, 'EGM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_disciplina`
--

DROP TABLE IF EXISTS `tab_disciplina`;
CREATE TABLE IF NOT EXISTS `tab_disciplina` (
  `disciplinaNome` varchar(30) NOT NULL,
  `disciplinaId` int(10) NOT NULL AUTO_INCREMENT,
  `CodProfessor` int(4) NOT NULL COMMENT 'Código do professor que leciona a disciplina',
  `codDisciplina` varchar(4) NOT NULL COMMENT 'código da disciplina: exemplo: ADS01',
  `aulasSemanais` int(2) NOT NULL COMMENT 'quantas aulas há por semana (2, 3, 4 5 etc)',
  `cursoId` int(10) NOT NULL COMMENT 'Chave Secundária [Cursos]',
  PRIMARY KEY (`disciplinaId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_disponibilidade_professor_tarde`
--

DROP TABLE IF EXISTS `tab_disponibilidade_professor_tarde`;
CREATE TABLE IF NOT EXISTS `tab_disponibilidade_professor_tarde` (
  `codProfessor` int(11) NOT NULL,
  `A1` tinyint(1) NOT NULL,
  `A2` tinyint(1) NOT NULL,
  `B1` tinyint(1) NOT NULL,
  `B2` tinyint(1) NOT NULL,
  `C1` tinyint(1) NOT NULL,
  `C2` tinyint(1) NOT NULL,
  `D1` tinyint(1) NOT NULL,
  `D2` tinyint(1) NOT NULL,
  `E1` tinyint(1) NOT NULL,
  `E2` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_disponibilidade_professor_tarde`
--

INSERT INTO `tab_disponibilidade_professor_tarde` (`codProfessor`, `A1`, `A2`, `B1`, `B2`, `C1`, `C2`, `D1`, `D2`, `E1`, `E2`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_grade_tarde`
--

DROP TABLE IF EXISTS `tab_grade_tarde`;
CREATE TABLE IF NOT EXISTS `tab_grade_tarde` (
  `cursoId` int(5) NOT NULL,
  `A1` varchar(10) NOT NULL,
  `A2` varchar(10) NOT NULL,
  `B1` varchar(10) NOT NULL,
  `B2` varchar(10) NOT NULL,
  `C1` varchar(10) NOT NULL,
  `C2` varchar(10) NOT NULL,
  `D1` varchar(10) NOT NULL,
  `D2` varchar(10) NOT NULL,
  `E1` varchar(10) NOT NULL,
  `E2` varchar(10) NOT NULL,
  `gradeId` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`gradeId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_horarios`
--

DROP TABLE IF EXISTS `tab_horarios`;
CREATE TABLE IF NOT EXISTS `tab_horarios` (
  `horarioId` int(11) NOT NULL AUTO_INCREMENT,
  `horarioHora` timestamp NOT NULL,
  `cursoId` int(4) NOT NULL COMMENT 'diz respeito a qual curso o horário pertence, 1 = ADS',
  PRIMARY KEY (`horarioId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_login`
--

DROP TABLE IF EXISTS `tab_login`;
CREATE TABLE IF NOT EXISTS `tab_login` (
  `email` varchar(110) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `loginTipo` int(5) NOT NULL,
  `contaId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `diretorioimg` varchar(55) NOT NULL,
  PRIMARY KEY (`contaId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_login`
--

INSERT INTO `tab_login` (`email`, `senha`, `loginTipo`, `contaId`, `nome`, `diretorioimg`) VALUES
('luis.vedovello@fatec.sp.gov.br', '1234', 1, 1, 'Luis Vedovello', 'diretorprofile.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_professor`
--

DROP TABLE IF EXISTS `tab_professor`;
CREATE TABLE IF NOT EXISTS `tab_professor` (
  `professorNome` varchar(100) NOT NULL,
  `professorCod` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`professorCod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_professor`
--

INSERT INTO `tab_professor` (`professorNome`, `professorCod`) VALUES
('Jacinto Cansado', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
