<?php
session_start();

if ((!isset($_SESSION['email']) == True) and (!isset($_SESSION['senha']) == True)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/sistema.css">
</head>
<style>
        body {
            font-family:Georgia, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://www.vilavelha.es.gov.br/midia/imagens/2020/12/43541_18122020_900x500.jpg");
            background-size: cover;
            background-attachment: fixed;
        }
        header {
            background-color: #000000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #ffffff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #000000;
            margin: 0 10px;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #000000;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        h2{
            color: #fff;
        }
        p {
            color: #fff;
            font-weight: bold;
        }
    </style>

<body>
    <header>
        <h1>Minha Conta</h1>
    </header>
    <nav>
        <ul>
            <li><a href="Sobre_a_gente">Sobre a gente</a></li>
            <li><a href="Jogos_de_futebol.html">Jogos de Futebol</a></li>
            <li><a href="Noticias_do_futebol.html">Noticias do futebol</a></li>
            <li><a style="float:right" href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <div style="padding: 20px;">
        <div class="content">
            <?php
            echo "<h2>Seja bem vindo ao sistema <br> $logado </h2>"
            ?>
        </div>
    </div>
</body>

</html>
