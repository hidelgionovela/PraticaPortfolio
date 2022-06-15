-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2022 às 13:55
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `my_portifolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autobi`
--

CREATE TABLE `autobi` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `subTitulo` varchar(500) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autobi`
--

INSERT INTO `autobi` (`id`, `titulo`, `subTitulo`, `descricao`) VALUES
(1, 'Autobiografia', '                                                                                                                Estudante de Engenharia em Tecnologias e sistemas de Informação 		    		    		    		    		    		    		    ', '                                                                                                                Sou um jovem Estudante de Engenharia em Tecnologias e sistemas de Informação na Universidade Joaquim Chissano. Com experiência na área de montagem e reparação de computadores desde 2015. Procurando novas oportunidades, de estagio ou trabalho voluntárionas áreas de desenvolvimento de sistemas e paginas web.Sou um Jovem motivado, criativo no trabalho, sempre disposto a aprender e a aberto para novos desafios e novas oportunidades.		    		    		    		    		    		    		    ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificacoes`
--

CREATE TABLE `certificacoes` (
  `id` int(11) NOT NULL,
  `Ano` year(4) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `Instituicao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `certificacoes`
--

INSERT INTO `certificacoes` (`id`, `Ano`, `Descricao`, `Instituicao`) VALUES
(1, 2022, 'Carta de condução (categoria c1)', 'Escola de Condução Malinda'),
(2, 2020, 'Curso de Inglês  3° Nivel', 'Isaac Ingles School '),
(3, 2019, 'Curso de montagem e reparação de computadores', 'Tecnicol Moçambique'),
(4, 2016, 'Curso de informática  básica nos pacotes Microsoft Word, Excel,PowerPoint e Internet Explore ', 'Tecnicol Moçambique'),
(5, 2022, 'Curso de culinaria                		    ', 'Icm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadospessoais`
--

CREATE TABLE `dadospessoais` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Naturalidade` varchar(11) NOT NULL,
  `Nacionalidade` varchar(25) NOT NULL,
  `Estado_Civil` varchar(11) NOT NULL,
  `Genero` varchar(25) NOT NULL,
  `Residencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadospessoais`
--

INSERT INTO `dadospessoais` (`id`, `titulo`, `Nome`, `DataNascimento`, `Naturalidade`, `Nacionalidade`, `Estado_Civil`, `Genero`, `Residencia`) VALUES
(1, 'Dados Pessoais', 'Hidélgio Novela ', '1999-08-19', 'Maputo', 'Moçambicana', 'Solteiro', 'Masculino ', 'Bairro 1 de Maio, Casa nr 400');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `id` int(11) NOT NULL,
  `Inicio` year(4) NOT NULL,
  `Fim` year(4) NOT NULL,
  `Descricao` text NOT NULL,
  `Instituicao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`id`, `Inicio`, `Fim`, `Descricao`, `Instituicao`) VALUES
(1, 2020, 2022, 'Frequentando o curso de Engenharia Em Tecnologias e Sistemas de Informação ', 'Universidade Joaquin Chissano - UJC'),
(2, 2016, 2018, 'Conclusão do curso de Técnico Aduaneiro', 'Instituto Comercial de Maputo - ICM'),
(3, 2014, 2015, 'Conclusão do ensino Secundário Pre-Universitário, Nivel Médio ', 'Escola Secundária Nossa Senhora do Livramento - T3'),
(4, 2011, 2013, 'Conclusão do ensino Secundário, Nivel Básico ', 'Escola Secundária São Damaso'),
(5, 2003, 2010, 'Conclusão do Ensino Primário do 1 e 2 grau', 'Escola Primária de Malhazine'),
(6, 2014, 2015, '        formação Completa        		    ', 'Icm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidades`
--

CREATE TABLE `habilidades` (
  `id` int(11) NOT NULL,
  `Habilidades` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `habilidades`
--

INSERT INTO `habilidades` (`id`, `Habilidades`) VALUES
(1, 'Disponibilidade imediata'),
(2, 'Boa capacidade de comunicação '),
(3, 'Elevado Sentido de Responsabilidade '),
(4, 'Capacidade de trabalhar em equipe'),
(5, 'Capacidade de trabalhar em individualmente'),
(6, 'Capacidade de trabalhar em remotamente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguas`
--

CREATE TABLE `linguas` (
  `id` int(11) NOT NULL,
  `Idioma` varchar(25) NOT NULL,
  `Fala` varchar(25) NOT NULL,
  `Escrita` varchar(25) NOT NULL,
  `Percepção` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `linguas`
--

INSERT INTO `linguas` (`id`, `Idioma`, `Fala`, `Escrita`, `Percepção`) VALUES
(1, 'Português ', 'Excelente ', 'Excelente', 'Excelente'),
(2, 'Inglês ', 'Razoável ', 'Excelente', 'Razoável '),
(3, 'Changana', 'Excelente ', 'Razoável ', 'Excelente'),
(4, 'Francês ', 'Razoável ', 'Razoável ', 'Razoável ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `titulo1` varchar(80) NOT NULL,
  `titulo2` varchar(80) NOT NULL,
  `titulo3` varchar(80) NOT NULL,
  `titulo4` varchar(80) NOT NULL,
  `titulo5` varchar(80) NOT NULL,
  `titulo6` varchar(80) NOT NULL,
  `titulo7` varchar(80) NOT NULL,
  `titulo8` varchar(80) NOT NULL,
  `titulo9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `titulo1`, `titulo2`, `titulo3`, `titulo4`, `titulo5`, `titulo6`, `titulo7`, `titulo8`, `titulo9`) VALUES
(1, 'Autobiografia', 'Dados Pessoais', 'Formação Académica', 'Cursos e Certificações', 'Domínio de Línguas', 'Habilidades', 'Meus Projectos', 'Contactos', 'Definições ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `titulo`, `descricao`) VALUES
(1, 'Banco Digital', 'Projecto de uma ATM Web(Banco Digital) feita em PHP e banco de dados MySql.'),
(2, 'Vagas para Devs', 'Projecto de CRUD para uma empresa de recrutamento feito em Linguagem PHP e banco'),
(3, 'Ciclo Vital', 'Projecto de CRUD Para um centro de saude (Cliclo vital) feito em Linguagem C# e '),
(4, 'SameLevel Photography', 'Projecto de Site Para um fotografo (SameLevel Photography) feito em HTML5 e CSS ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autobi`
--
ALTER TABLE `autobi`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `certificacoes`
--
ALTER TABLE `certificacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dadospessoais`
--
ALTER TABLE `dadospessoais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `linguas`
--
ALTER TABLE `linguas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autobi`
--
ALTER TABLE `autobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `certificacoes`
--
ALTER TABLE `certificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `dadospessoais`
--
ALTER TABLE `dadospessoais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `linguas`
--
ALTER TABLE `linguas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
