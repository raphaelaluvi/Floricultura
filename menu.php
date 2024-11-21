<?php
    include 'bd/conecta.php';

    session_start();

    //se diferente de esta preenchido e chama a variavel
    if((!isset($_SESSION['id_cliente']) == true) && (!isset($_SESSION['cpf']) == true) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email']) == true) && (!isset($_SESSION['tipo']) == true)){
        unset($_SESSION['id_cliente']);
        unset($_SESSION['cpf']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['tipo']);
        header('Location: Login_v1/index.php');
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <title>Luxe Blooms</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="imgs/flor.png"/>
    
    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-primary display-6">Luxe Blooms</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="produtos.php" class="nav-item nav-link">Produtos</a>
                        <a href="depoimentos.php" class="nav-item nav-link">Depoimentos</a>
                        <a href="contato.php" class="nav-item nav-link">Contato</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                   
                    <?php if (isset($_SESSION['nome'])): ?>
                    <span class="my-auto text-primary fw-bold">Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?></span>
                    <?php else: ?>
                    <a href="Login_v1" class="my-auto">
                    <i class="fas fa-user fa-2x"></i>
                    </a>
                    <?php endif; ?>
                    </div>
                            <a href="processos/proc-logout.php" class="btn btn-outline-secondary ms-3 my-auto">
                                Voltar
                            </a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->