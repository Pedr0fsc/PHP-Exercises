<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
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

        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5bc0de;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Boletim de Notas</h1>
    <form action="/Boletim/Boletim.php" method="get">
        <input id="n1" type="text" placeholder="Digite a nota 1" name="n1" required>
        <input id="n2" type="text" placeholder="Digite a nota 2" name="n2" required>
        <input id="n3" type="text" placeholder="Digite a nota 3" name="n3" required>
        <input id="n4" type="text" placeholder="Digite a nota 4" name="n4" required>
        <input id="n5" type="text" placeholder="Digite a nota 5" name="n5" required>
        <input type="submit" value="Enviar">
    </form>
    <table>
        <thead>
            <tr>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Nota 5</th>
                <th>Média</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
                $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
                $n3 = isset($_GET["n3"]) ? $_GET["n3"] : 0;
                $n4 = isset($_GET["n4"]) ? $_GET["n4"] : 0;
                $n5 = isset($_GET["n5"]) ? $_GET["n5"] : 0;
                $media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;

                echo "<td>$n1</td>";
                echo "<td>$n2</td>";
                echo "<td>$n3</td>";
                echo "<td>$n4</td>";
                echo "<td>$n5</td>";
                echo "<td>" . number_format($media, 2) . "</td>";

                if ($media >= 90 && $media <= 100) {
                    echo "<td>Nota A</td>";
                } elseif ($media >= 80 && $media < 90) {
                    echo "<td>Nota B</td>";
                } elseif ($media >= 70 && $media < 80) {
                    echo "<td>Nota C</td>";
                } elseif ($media >= 60 && $media < 70) {
                    echo "<td>Nota D</td>";
                } else {
                    echo "<td>Nota F</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>
