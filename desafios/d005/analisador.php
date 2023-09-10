<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Resultado</h1>

        <?php
        $valor = $_GET["valor"] ?? 0;

        echo "<p>Análise do número <strong>" . number_format($valor, 3, ",", ".") . "</strong> informado pelo usuário: </p>";
        echo "<ul><li>A parte inteira do número é <strong>" . number_format((int)$valor, 0, ",", ".") . "</strong></li><li>";
        echo "A parte fracionária do número é <strong>" . number_format(($valor - (int)$valor), 3, ",", ".") . "</strong></li></ul>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>