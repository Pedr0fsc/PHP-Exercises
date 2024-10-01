<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto 20px;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .form-button {
            display: flex;
            justify-content: center;
            margin: 0.5rem;
        }

        .result {
            width: 30%;
            margin: 20px 0;
            border-collapse: collapse;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        p {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Sistema de Login e Senha</h1>
    <form action="/Login/Login.php" method="post">
        <input id="login" type="text" placeholder="Insira o seu login" name="login" required>
        <input id="senha" type="text" placeholder="Insira a sua senha" name="senha" required>
        <div class="form-button">
            <input type="submit" value="Log-in">
        </div>
    </form>
    <div class="result">
        <?php
            $loginCerto = "admin";
            $senhaCerto = "12345";

            $login = $_POST["login"];
            $senha = $_POST["senha"];

            if ($login === $loginCerto and $senha === $senhaCerto) {
                echo "<p>Sucesso!</p>";
            } else {
                echo "<p>Falha ao logar</p>";
            }
        ?>
    </div>
</body>
</html>
