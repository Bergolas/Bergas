<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nova Senha</title>
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
<body>
    <div class="container">
        <h2>Nova Senha</h2>
        <form action="definir_senha.php" method="post">
            <label for="senha">Nova Senha:</label>
            <input type="password" id="senha" name="senha" required><br>
            <label for="confirmar_senha">Confirmar Nova Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>
            <input type="submit" value="Definir Nova Senha">
        </form>
        <a href="esqueci_senha.php">Criar conta?</a>
    </div>
</body>
</html>
