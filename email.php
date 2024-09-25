<?php
include_once 'config.php';

// Filtro por categoria
$categoriaFiltro = isset($_GET['categoria']) ? $_GET['categoria'] : '';

// Consulta para listar os produtos com base no filtro
$categoria = 1;
$sql = "SELECT * FROM cafeteria";
if ($categoriaFiltro == 'comidas') {
    $sql .= " WHERE ID_Categorias = 2";
} elseif ($categoriaFiltro == 'bebidas') {
    $sql .= " WHERE ID_Categorias = 1";
}
$result = $conn->query($sql);
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
    <title>Home</title>
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
<div class="d-flex flex-wrap justify-content-center">
    <div class="w-100 row g-0 text-center CD">
        <div class="col-sm-6 col-md-8"></div>

<div class="d-flex flex-wrap justify-content-center mt-5">
    <!--Parte para um formulario-->
    <form action="send_pdf_email.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
            <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">Email para quem quer enviar o PDF</div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Relatório por E-mail</button>
    </form>

    <!--Parte para um formulario-->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
