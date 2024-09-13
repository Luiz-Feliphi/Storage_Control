<?php

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
</head>
<body>
<nav class="navbar navbar-dark fixed-top menu-bar mb-5">
    <div class="container-fluid w-100 menu-bar">
        <img src="img/icon.png" alt="Logo" width="64" height="64" class="d-inline-block align-text-top">
        <a class="navbar-brand fw-bold" href="#"> HOME </a>
        <button class="navbar-toggler bar-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--MENU LATERAL-->
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
                        <a class="nav-link active d-flex justify-content-center" aria-current="page" href="Home.php">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-house-door-fill"></i>
                                <p>Home</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" href="Storage Control.php">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-box-seam"></i>
                                <p>Storage Control</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" href="#">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-box"></i>
                                <p>Storage Control</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-center" href="#">
                            <div class="option-menu">
                                <i class="bi icon-menu bi-box"></i>
                                <p>Storage Control</p>
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
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btncolor" type="submit">Pesquisar</button>
                    </form>
                    -->
                </ul>
            </div>
            <!--MENU LATERAL-->
        </div>
    </div>
</nav>
<div class="d-flex flex-wrap justify-content-center">
    <?php for($i=1; $i <= 10; $i++):?>
        <div class="card m-3" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/pessoa-que-serve-uma-xicara-de-cafe_1286-227.jpg?ga=GA1.1.959046086.1726224924&semt=ais_hybrid" class="card-img-top IMG-O" alt="...">
            <div class="card-body">
                <h5 class="card-title w-100 text-center">Coffe</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="w-100 d-flex justify-content-center">
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>