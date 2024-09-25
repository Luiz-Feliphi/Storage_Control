<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeProduto = $_POST['nomeProduto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $precoCusto = $_POST['precoCusto'];
    $quantidade = $_POST['quantidade'];
    $valorTotal = $precoCusto * $quantidade;
    $fornecedor = $_POST['fornecedor'];
    $codigoBarras = $_POST['codigoBarras'];
    $status = $_POST['status'];
    $dataCadastro = date('Y-m-d');
    $imagem = $_POST['imagem'];

    // Inserir o produto no banco de dados
    $sql = "INSERT INTO cafeteria (Nome_Produto, Descrição, ID_Categorias, Preço_custo, Quantidade, Valor_total, Fornecedor, Código_barras, Status, Data_cadastro, Imagens)
            VALUES ('$nomeProduto', '$descricao', '$categoria', '$precoCusto', '$quantidade', '$valorTotal', '$fornecedor', '$codigoBarras', '$status', '$dataCadastro', '$imagem')";

    if ($conn->query($sql) === TRUE) {
        echo '
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="bi bi-bookmark-fill"></i>
            <strong class="me-auto">Atenção</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Produto cadastrado com sucesso!
        </div>
        </div>
        
        ';
    } else {
        echo '
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="bi bi-bookmark-fill"></i>
                <strong class="me-auto">Atenção</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Erro ao cadastrar o produto: ' . $conn->error . '
            </div>
        </div>
        ';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Produto</title>
</head>
<body>
<nav class="navbar navbar-dark fixed-top menu-bar">
          <div class="container-fluid w-100 menu-bar">
            <img src="img/icon.png" alt="Logo" width="64" height="64" class="d-inline-block align-text-top">
            <a class="navbar-brand fw-bold" href="#"> Home </a>
            <button class="navbar-toggler bar-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end lateral-bar" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <div>
                        <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">MENU</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" aria-current="page" href="Home.php">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-house-door-fill"></i>
                                <p>Home</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" href="Storage Control.php">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-box"></i>
                                <p>Storage Control</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" href="cadastroProduto.php">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-receipt-cutoff"></i>
                                <p>Cadastrar Produtos</p>
                            </div>
                        </a>
                    </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-menu-color">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btncolor" type="submit">Pesquisar</button>
            </form>
            -->
            </div>
        </div>
    </div>
</nav>
<br><br><br><br>
<div class="container mt-5">
    <h2 class="text-center">Cadastro de Produto</h2>
    <form method="POST" action="cadastroProduto.php">
        <div class="mb-3">
            <label for="nomeProduto" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select class="form-select" id="categoria" name="categoria" required>
                <option value="1">Bebidas</option>
                <option value="2">Comidas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="precoCusto" class="form-label">Preço de Custo</label>
            <input type="number" class="form-control" id="precoCusto" name="precoCusto" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade em Estoque</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>
        <div class="mb-3">
            <label for="fornecedor" class="form-label">Fornecedor</label>
            <input type="text" class="form-control" id="fornecedor" name="fornecedor" required>
        </div>
        <div class="mb-3">
            <label for="codigoBarras" class="form-label">Código de Barras</label>
            <input type="text" class="form-control" id="codigoBarras" name="codigoBarras" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">URL da Imagem</label>
            <input type="text" class="form-control" id="imagem" name="imagem" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
