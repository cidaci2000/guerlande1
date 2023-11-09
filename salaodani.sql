-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2023 às 04:53
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `salaodani`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `horario_entrada` time NOT NULL,
  `nome_atendente` varchar(45) NOT NULL,
  `data_entrada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `nome`, `horario_entrada`, `nome_atendente`, `data_entrada`) VALUES
(7, 'Aparecida ferreira', '08:00:00', 'claudia', '2023-11-21'),
(8, 'Paula', '09:00:00', 'nao sei', '2023-11-27'),
(9, 'Joao', '21:00:00', 'nao sei', '2023-11-22'),
(10, 'PATI', '21:00:00', 'ana', '2023-11-14'),
(11, 'Joao nn', '21:00:00', 'nao sei', '2023-11-22'),
(12, 'PATI', '04:05:00', 'nao sei', '2023-11-14'),
(13, 'PATI', '04:05:00', 'nao sei', '2023-11-14'),
(14, 'PATI', '04:05:00', 'nao sei', '2023-11-14'),
(15, 'aba paula', '06:00:00', 'nao sei', '2023-11-21'),
(16, 'rute', '07:00:00', 'nao sei', '2023-11-26'),
(17, 'Aparecida ferreira', '10:00:00', 'ana', '2023-12-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_funcionario`
--

CREATE TABLE `agenda_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_compras`
--

CREATE TABLE `carrinho_compras` (
  `id_carrinho` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` varchar(3) DEFAULT NULL,
  `data_nasc` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `email`, `nome`, `idade`, `sexo`, `data_nasc`, `cpf`, `endereco`, `cidade`, `telefone`, `senha`, `estado`) VALUES
(31, '', '', NULL, NULL, '', '', '', '', '', NULL, ''),
(32, 'aparecida@gmail.com', 'aparecida', NULL, 'fem', '2023-11-06', '', 'csc', 'csc', '4555', '123', 'csc'),
(33, 'ali@escola.br', 'ali', NULL, 'mas', '2023-11-01', '', 'csc', 'casca', '455555', '123', 'csc'),
(34, 'administrador@gmail.com', 'admin', NULL, 'out', '2023-11-30', '', 'cascavel', 'cascavel', '4599999999', '123456', 'cascavel'),
(35, '', 'bolo', NULL, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `funcao` varchar(12) NOT NULL,
  `data_nasc` varchar(45) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `senha`, `email`, `telefone`, `funcao`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(1, 'aparecida', '123', 'cidaci2000@gmail.com', '4555555', 'atendente', '2023-11-07', 'csc', 'csc', 'rdddddd'),
(2, 'Meu amor', '123456', 'meuamor@gmail.com', '444444', 'gerente', '2023-11-07', 'csc', 'csc', 'cas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`email`, `senha`, `id`) VALUES
('aparecida.ferreira@gmail.com', '12345', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `quantidade`, `categoria`, `imagem`) VALUES
(33, 'UNHA', '50', 1, 'MAQUIAGEM', 'UNHA1.jpg'),
(34, 'UNHA2', '50', 1, 'MAQUIAGEM', 'UNHA1.jpg'),
(35, 'APLIQUE', '50', 1, 'HOMEM', 'UNHA1.jpg'),
(36, 'APLIQUE', '50.00', 25, 'INFANTIL', '0'),
(37, 'APLIQUE', '50.00', 25, 'INFANTIL', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salao`
--

CREATE TABLE `salao` (
  `id_salao` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(NULL, 'ali', '111111@111', '$2y$10$Y8/8XoAU4'),
(NULL, 'PATI', 'aparecida@gmail.com', '$2y$10$6xZaHGmHm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agenda_funcionario`
--
ALTER TABLE `agenda_funcionario`
  ADD PRIMARY KEY (`id_funcionario`,`dia`,`hora`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `salao`
--
ALTER TABLE `salao`
  ADD PRIMARY KEY (`id_salao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `salao`
--
ALTER TABLE `salao`
  MODIFY `id_salao` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD CONSTRAINT `carrinho_compras_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `carrinho_compras_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
