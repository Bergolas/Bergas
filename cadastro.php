<?php
 if(isset($_POST['submit'])){   
    include_once('config.php');
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $senha= $_POST['senha'];
    $confisenha= $_POST['confisenha'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, senha, confisenha) VALUES ('$nome', '$email',  '$telefone', '$senha', '$confisenha' ) ");
 }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_form.css">
    <title>Cadastro</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #065c85;
    margin: 0;
    padding: 0;
}

header {
    background-color: #065c85;
    color: #ffffff;
    padding: 10px;
    text-align: center;
}

nav {
    background-color: #f4f4f4;
    padding: 10px;
    text-align: left;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    padding: 15px 10px;
    border-radius: 10px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #cdfdff;
}


.container {
    width: 360px;
    margin: 100px auto;
    background: #fff;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
    margin-bottom: 30px;
}

.container label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

.container span[class='error']{
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
    color: rgb(173, 11, 11);
}

.container span[class='right']{
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
    color: rgb(16, 173, 11);
}

.container input[type="text"],
.container input[type="password"],
.container input[type="Email"],
.container input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.container input[type="submit"] {
    width: 100%;
    background-color: #000000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.container input[type="submit"]:hover {
    background-color: #2d312e;
}

.container .signup {
    text-align: center;
}

.container .signup a {
    color: #007bff;
    text-decoration: none;
}

.container .signup a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body><header><h1>login</h1></header>
    <nav><ul>
        <li><a href="login.php">login</a></li>
    </ul></nav>
    <div class="container">
        <h2>Cadastro</h2>
        <!-- Formulário de cadastro -->
        <form action="cadastro.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>

            <input type="email" name="email" placeholder="E-mail" required>

            <input type="tel" name="telefone" placeholder="telefone" required>

            <input type="password" name="senha" placeholder="Senha" required>

            <input type="password" name="confisenha" placeholder="confirmar senha" required>

            <button type="submit" name="submit">Cadastrar</button>
        </form>
        <p>Já possui uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>