<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 2</title>
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php
        echo "<p>Gerando um número de 0 a 100...<br>O número gerado foi <strong>" . mt_rand(0, 100) . "</strong>!</p>";
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </main>
</body>

</html>