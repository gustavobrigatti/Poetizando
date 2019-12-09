-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2017 às 01:15
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poetizando`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `CodAdm` int(11) NOT NULL,
  `nomeFuncionario` varchar(100) NOT NULL,
  `emailFuncionario` varchar(100) NOT NULL,
  `senhaFuncionario` varchar(40) NOT NULL,
  `datadenascimentoFuncionario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`CodAdm`, `nomeFuncionario`, `emailFuncionario`, `senhaFuncionario`, `datadenascimentoFuncionario`) VALUES
(1, 'Gustavo Rosolen', 'gustavo.brigatti@poetizando.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-02-13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `poemas`
--

CREATE TABLE `poemas` (
  `CodPoema` int(11) NOT NULL,
  `CodUsuario` int(11) NOT NULL,
  `CodTipos` int(11) NOT NULL,
  `NomeDoPoema` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NomeDoAutor` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Texto` varchar(10000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `poemas`
--

INSERT INTO `poemas` (`CodPoema`, `CodUsuario`, `CodTipos`, `NomeDoPoema`, `NomeDoAutor`, `Texto`) VALUES
(1, 1, 5, 'Zeros E Uns', 'Gustavo R. Brigatti', 'Entre zeros e uns\nEntre negativos e positivos\n\nEm um mundo de extremos\nE de ódio sem razão\nSer diferente é pecado\nE é proibido ter opnião\n\nNesse mundo\nEu prefiro ser 1/2'),
(2, 2, 1, 'Mais um de amor', 'Franco G. Rovedo', 'Eu sou do ar, Inspire-me.'),
(3, 1, 5, '#piriguismo ', 'Ni Brisant', '"Nesse calor,\numa lambida,\né prova de amor,\npra toda vida.”'),
(4, 3, 5, '#critica', 'Victor Rodrigues', 'Se a gente é o que come,\nquem não come nada some,\npor isso ninguém enxerga essa gente que passa fome.'),
(5, 5, 1, '#piriguismo‬', '‪Luiza Romão', 'Você é fogo,\nno teu afago,\nme afogo\nquase morro.'),
(7, 1, 5, 'Hey Joe', 'O Rappa', 'Hey joe\nOnde é que você vai com essa arma aí na mão\nHey joe\nEsse não é o atalho pra sair dessa condição'),
(20, 1, 4, 'Roubo', 'Gustavo Rosolen', 'É  T NTO  RO BO  QUE  R UB RAM  ATÉ  NO  SAS  L TRAS.'),
(21, 1, 1, 'Coelho', 'Gabrielly Murari', 'Eu queria ser um coelho,\nMas coelho não posso ser,\nPor que coelho pula alto,\nE eu só pulo encima de vc'),
(22, 3, 5, 'Não estou pronto', 'Braz Cubas', 'Pena de galinha,\nMouse de computador,\nNão estou pronto pra sonha,\nMuito menos pra compor.'),
(24, 6, 1, 'Parada Cardíaca', 'Paulo Leminski', 'Essa minha secura\nessa falta de sentimento\nnão tem ninguém que segure,\nvem de dentro.\n\nVem da zona escura\ndonde vem o que sinto.\n\nSinto muito,\nsentir é muito lento.'),
(25, 7, 2, 'A Rosa de Hiroxima', 'Vinicius de Moraes', 'Pensem nas crianças\nMudas telepáticas\nPensem nas meninas\nCegas inexatas\nPensem nas mulheres\nRotas alteradas\nPensem nas feridas\nComo rosas cálidas\nMas oh não se esqueçam\nDa rosa da rosa\nDa rosa de Hiroxima\nA rosa hereditária\nA rosa radioativa\nEstúpida e inválida.\nA rosa com cirrose\nA antirrosa atômica\nSem cor sem perfume\nSem rosa sem nada.'),
(26, 5, 5, 'Retrato', 'Cecilia Meireles', 'Eu não tinha este rosto de hoje,\nAssim calmo, assim triste, assim magro,\nNem estes olhos tão vazios,\nNem o lábio amargo.\n\nEu não tinha estas mãos sem força,\nTão paradas e frias e mortas;\nEu não tinha este coração\nQue nem se mostra.\n\nEu não dei por esta mudança,\nTão simples, tão certa, tão fácil:\n— Em que espelho ficou perdida\na minha face?'),
(27, 1, 5, 'Rápido e rasteiro', 'Chacal', 'vai ter uma festa\nque eu vou dançar\naté o sapato pedir pra parar.\naí eu paro, tiro o sapato\ne danço o resto da vida'),
(28, 1, 1, '#SérgioVaz', 'Sérgio Vaz', 'Se alguém dizer eu te amo.\nVingue-se dela.\nAme-a também.'),
(29, 7, 3, '#PauloLeminski', 'Paulo Leminski', 'ameixas\name-as\nou deixe-as'),
(30, 6, 3, 'Provérbio Chinês', 'Provérbio Chinês', 'Jamais se desespere em meio as sombrias aflições de sua vida, pois das nuvens mais negras cai água límpida e fecunda.'),
(31, 3, 5, '#AdoniranBarbosa', 'Adoniran Barbosa', 'Bom de briga é aquele que cai fora.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `CodTipo` int(11) NOT NULL,
  `TipoPoema` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`CodTipo`, `TipoPoema`) VALUES
(1, 'Românticos'),
(2, 'Políticos'),
(3, 'Haikais'),
(4, 'Poesia Concreta'),
(5, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CodUsuario` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datadenascimento` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CodUsuario`, `nome`, `email`, `senha`, `datadenascimento`) VALUES
(1, 'Gustavo Rosolen', 'gustavo.brigatti13@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-02-13'),
(2, 'Gabrielly Murari', 'gabriellyglim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1999-11-07'),
(3, 'Gustavo Braz', 'gubraz22@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-06-28'),
(4, 'Ana Mariano', 'anapaula.15.07.1999@gmail.com', '276b6c4692e78d4799c12ada515bc3e4', '1999-07-15'),
(5, 'Caio Euzébio', 'e.caio.henrique@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-08-24'),
(6, 'João Pedro', 'joaopdrogomess@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-03-06'),
(7, 'Giovanni Feltrin', 'gidpaulafeltrin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`CodAdm`);

--
-- Indexes for table `poemas`
--
ALTER TABLE `poemas`
  ADD PRIMARY KEY (`CodPoema`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`CodTipo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodUsuario`);
ALTER TABLE `usuario` ADD FULLTEXT KEY `E-Mail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `CodAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `poemas`
--
ALTER TABLE `poemas`
  MODIFY `CodPoema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `CodTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CodUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
