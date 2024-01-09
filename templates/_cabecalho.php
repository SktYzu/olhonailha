<?php session_start();

if (isset($_SESSION['usuario'])) {
    $nivel = $_SESSION['usuario']['nivel_acesso'];
};

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olho na Ilha</title>
    <link rel="shortcut icon" href="/olhonailha/imgs/logo.png" type="image/x-icon">


    <!-- css do bs -->
    <link rel="stylesheet" href="/olhonailha/css/bootstrap.css">

    <!-- js do bs -->
    <script src="/olhonailha/js/bootstrap.bundle.js"></script>


    <link rel="stylesheet" href="/olhonailha/css/style.css">
    <script src="/olhonailha/js/script.js"></script>

    <!-- framework -->


</head>

<body>


    <header class="d-flex flex-column justify-content-center">

        <div class="d-flex justify-content-between align-items-center p-3">
            <div class="col-sm-4 col-lg-1 col-4">
                <a href="/olhonailha/index.php">
                    <img src="/olhonailha/imgs/logo.png" alt="olho" class="w-100">
                </a>
            </div>
            <div class="cad">
                <?php if (isset($_SESSION['usuario'])) : ?>
                    <a href="/olhonailha/controllers/logout_controller.php" class="btn btn-primary">LOGOUT</a>
                <?php else : ?>
                    <a href="/olhonailha/views/login.php" class="btn btn-primary">LOGIN</a>
                <?php endif; ?>
            </div>
        </div>

    </header>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 justify-content-evenly align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/olhonailha/views/listaDenu.php">FEED DE DENÚNCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/olhonailha/views/faqs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/olhonailha/views/sobre.php">SOBRE</a>
                    </li>
                    <?php if (isset($_SESSION['usuario'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/olhonailha/views/perfil.php">PERFIL</a>
                        </li>
                        <li class="nav-item btn btn-danger ">
                            <a class="nav-link text-white" href="/olhonailha/views/denuncia.php">FAÇA UMA DENUNCIA</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


    <main>