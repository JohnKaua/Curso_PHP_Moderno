<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data e Hora</title>
</head>

<body>
    <main>
        <h1>Exemplo PHP</h1>

        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>Hoje é dia " . date("d/m/Y") . "</p>";
        echo "A hora atual é: " . date("G:i");
        ?>

    </main>
</body>

</html>