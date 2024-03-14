<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="process_new_password.php" method="post">
        <h2>Nova Senha</h2>
        <label for="password">Nova Senha:</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Confirmar Nova Senha:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <input type="submit" value="Atualizar Senha">
    </form>
</body>
</html>
