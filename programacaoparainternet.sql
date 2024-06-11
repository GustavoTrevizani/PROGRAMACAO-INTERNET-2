-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2024 às 14:30
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `programacaoparainternet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `sexo` int(11) NOT NULL,
  `diassemana` varchar(45) NOT NULL,
  `horario` time NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `nome`, `nascimento`, `cpf`, `email`, `telefone`, `sexo`, `diassemana`, `horario`, `mensagem`) VALUES
(1, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Nenhum'),
(2, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Nenhum'),
(3, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Nenhum'),
(4, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Nenhum'),
(5, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Nenhum'),
(6, 'Gustavo', '2005-11-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Não sei de nada.'),
(7, 'Gustavo', '2005-11-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '00:00:00', 'Não sei de nada.'),
(8, 'Gustavo', '2005-11-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '10:30:00', 'Não sei de nada.'),
(9, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '10:30:00', 'Nenhum'),
(10, 'Gustavo', '2005-06-15', '03424384097', 'gustavo@gmail.com', '998691978', 0, '', '10:30:00', 'Nenhum'),
(11, 'Gustavo', '2005-11-15', '03424384097', 'gustavo@gmail.com', '998691978', 2, '', '10:30:00', 'Não sei de nada.'),
(12, 'Gustavo', '2005-11-15', '03424384097', 'gustavo@gmail.com', '998691978', 2, '', '10:30:00', 'Não sei de nada.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
