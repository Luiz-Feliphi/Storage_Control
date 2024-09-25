-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2024 às 05:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `storagedb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cafeteria`
--

CREATE TABLE `cafeteria` (
  `ID_Produtos` int(10) NOT NULL,
  `Nome_Produto` varchar(255) NOT NULL,
  `Descrição` text NOT NULL,
  `ID_Categorias` int(10) NOT NULL,
  `Preço_custo` decimal(10,2) NOT NULL,
  `Quantidade` int(10) NOT NULL,
  `Valor_total` decimal(10,2) NOT NULL,
  `Data_cadastro` date NOT NULL,
  `Fornecedor` varchar(255) NOT NULL,
  `Código_barras` int(10) NOT NULL,
  `Status` enum('ativo','inativo') NOT NULL,
  `Imagens` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cafeteria`
--

INSERT INTO `cafeteria` (`ID_Produtos`, `Nome_Produto`, `Descrição`, `ID_Categorias`, `Preço_custo`, `Quantidade`, `Valor_total`, `Data_cadastro`, `Fornecedor`, `Código_barras`, `Status`, `Imagens`) VALUES
(1, 'Café Fraco', 'Café pouco torrado, com gosto doce sem adição de açúcar', 1, 10.00, 10, 1000.00, '2024-09-13', 'Emiosmar', 1, 'ativo', 'https://img.freepik.com/fotos-gratis/pessoa-que-serve-uma-xicara-de-cafe_1286-227.jpg?ga=GA1.1.959046086.1726224924&semt=ais_hybrid'),
(2, 'Café Médio', 'Café pouco torrado, com gosto minimamente doce sem adição de açúcar', 1, 10.00, 10, 1000.00, '2013-09-24', 'Emiosmar', 2, 'ativo', 'https://img.freepik.com/fotos-gratis/deliciosos-graos-de-cafe-e-xicara_23-2150691429.jpg'),
(3, 'Café Forte', 'Café torrado, com gosto amargo sem adição de açucar', 1, 10.00, 10, 1000.00, '2013-09-24', 'Amasteu', 3, 'ativo', 'https://tezlahotel.com.br/wp-content/uploads/2018/02/shutterstock_529515136.jpg'),
(4, 'Café Extraforte', 'Café bem torrado, com gosto bastante amargo sem adição de açucar', 1, 10.00, 10, 1000.00, '2013-09-24', 'Amasteu', 4, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaMsI3WoNughlxrL7uTwl1BA5dYi7W1HjEL7GaN4942-X_bT9yaDheHMxpWbsEWlRKsNA&usqp=CAU'),
(5, 'Chá de erva cidreira', 'Chá com gosto marcante e refrescante', 1, 9.00, 10, 100000.00, '2024-09-18', 'Vicentino', 5, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH_NiEPKX8TfsBmxnSlKOJ1hQdLWmhx8BZBNny5eN8tBaxpnxIZgK9mlpsBFIkBgjzxec&usqp=CAU'),
(6, 'Chá Mate', ' Infusão típica das gastronomias do Cone Sul da América do Sul. É preparado colocando-se erva-mate tostada em infusão com água quente, ou fervendo a erva-mate tostada em água.', 1, 9.00, 10, 900.00, '2024-09-18', 'Vicentino', 6, 'ativo', 'https://meuamigotemumsitio.com.br/wp-content/uploads/2023/11/tea-drink-nettle-useful-treatment-therapy-1449403-pxhere.com_.webp'),
(7, 'Chá de hortelã', 'O chá de hortelã ou chá de menta é uma tisana preparada com folhas de hortelã, usualmente hortelã-pimenta.', 1, 9.00, 10, 900.00, '2024-09-18', 'Vicentino', 7, 'ativo', 'https://nutritotal.com.br/publico-geral/wp-content/uploads/2022/06/Cha_Hortela_Nutritotal_Para_Todos_novosite.png'),
(8, 'Chá de hibisco', ' conhecido como vinagreira no Brasil, e como “sorrel” ou “roselle”, ou ainda “karkade” em egípcio, é uma bebida. Na África ocidental, o “jus de bissap” é popular em todos os países e vendido como refresco nas ruas', 1, 9.00, 10, 900.00, '2024-09-18', 'Vicentino', 8, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpdJIYpJEXF30TUYPAJilO3-dq-dZIsIIFBg&s'),
(9, 'Leite integral', ' É uma alternativa saborosa para o consumo de Leite Semidesnatado. Previne Osteoporose e mantém a massa muscular.', 1, 10.00, 10, 1000.00, '2024-09-18', 'Alberto', 10, 'ativo', 'https://midias.em.com.br/_midias/jpg/2024/06/30/copo_de_leite-38564104.jpg'),
(10, 'Leite desnatado', ' Levíssimo, o leite desnatado tem 0% de gordura, mas continua sendo fonte de cálcio.', 1, 10.00, 10, 1000.00, '2024-09-18', 'Alberto', 11, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj_1BatGocnnY3fQtra_Kg-HrrWM0T4dJX4LHN0U4tmM8knDmhZaAkf-EhgJC9r-NhKkE&usqp=CAU'),
(11, 'Leite zero lactose', ' Possuí a enzima lactase em sua fórmula, sendo próprio para a ingestão quando se é intolerante a lactose.', 1, 10.00, 10, 1000.00, '2024-09-18', 'Alberto', 12, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZtIvteA7ec_-7G8XcYk7N9U5WFFDPSf8tQ24TT3fvocdaNfCvtXhG3-i5vYR0gpjj3z0&usqp=CAU'),
(12, 'Pão de queijo', ' Uma iguaria oriunda de Minas Gerais, muito difundida em todo o Brasil.', 2, 5.00, 5, 500.00, '2024-09-18', 'Alberto', 13, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjhCYe85RdNGF0uC21JXwtobBO9mNF28L7XTi0ypGEmf4lIFwHvdJymesevxB9vUykX7M&usqp=CAU'),
(13, 'Pão', ' Massa alimentar de consistência elástica, elaborada basicamente com farinha de cereal, água, sal/açúcar.', 2, 5.00, 5, 500.00, '2024-09-18', 'Alberto', 14, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCbxfCr950vQqLdCvsSuO94WKYRS5ER3ye1BVFgTf2pPSkMJR9ExqwzliTUms_Kcui6sk&usqp=CAU'),
(14, 'Croissant', ',É um tipo de viennoiserie de massa folhada em formato de meia-lua, feito de farinha, açúcar, sal, leite, fermento, manteiga e ovo para pincelar. ', 2, 5.00, 5, 500.00, '2024-09-18', 'Alberto', 15, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd1sZEWs0-hSjOSOcU9ZlOGfVN_QHupq0ExMLVPdx3usVk5TyC95Kiv7x3raM5d3kCHoA&usqp=CAU'),
(15, 'Torta', 'Os registros mais populares dizem que a torta surgiu na Grécia Antiga, onde era feita como oferenda à deusa Artêmis: a divindade da natureza, das plantações, da caça e da fertilidade, para agradecer a boa colheita ou nascimento de criança.', 2, 10.00, 10, 1000.00, '2024-09-18', 'Maria do Carmo', 16, 'ativo', 'https://www.receitasnestle.com.br/sites/default/files/srh_recipes/1d22d96039f98608bc9338debb1b4579.jpg'),
(16, 'Bolo', 'Bolo é um alimento à base de farinha, geralmente doce e cozido no forno. Os bolos são um dos componentes principais das festas, como as de aniversário e casamento, por vezes ornamentados artisticamente e ocupando o lugar central da mesa.', 2, 10.00, 10, 1000.00, '2024-09-18', 'Maria do Carmo', 17, 'ativo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAkPalhbJrtYZX0n5Zwa6Pw7ydLxRuutftxK9WpwSdN_kZdAfwpKzzdfYEplmQryTO8Y4&usqp=CAU'),
(17, 'Rosca', 'Rosca é um bolo ou pão de origem espanhol ou português com formato anelar consumido em várias partes do mundo. Podem ser fabricadas industrilamente ou artesanalmente, podendo ser salgadas ou doces, com diversas receitas.', 2, 10.00, 10, 1000.00, '2024-09-18', 'Maria do Carmo', 18, 'ativo', 'https://guiadacozinha.com.br/wp-content/uploads/2019/10/rosca-doce-coco.jpg'),
(18, '2133123', '23ww123123123123213d', 2, 213123.00, 23232, 99999999.99, '2024-09-25', 'sas', 73850, 'inativo', 'https://upload.wikimedia.org/wikipedia/pt/8/8b/Django_Unchained_Poster.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `ID_Categorias` int(10) NOT NULL,
  `Alimentos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`ID_Categorias`, `Alimentos`) VALUES
(1, 'Bebidas'),
(2, 'Comidas');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cafeteria`
--
ALTER TABLE `cafeteria`
  ADD PRIMARY KEY (`ID_Produtos`),
  ADD KEY `fk_cafeteria_categoria` (`ID_Categorias`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_Categorias`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cafeteria`
--
ALTER TABLE `cafeteria`
  MODIFY `ID_Produtos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_Categorias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cafeteria`
--
ALTER TABLE `cafeteria`
  ADD CONSTRAINT `fk_cafeteria_categoria` FOREIGN KEY (`ID_Categorias`) REFERENCES `cafeteria` (`ID_Produtos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
