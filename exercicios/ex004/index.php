<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testes de tipos primitivos</title>
</head>

<body>
    <main>

        <h1>Tipos primitivos</h1>

        <?php
        $valor = (int) 45.9;

        print "<p>O valor é $valor</p>";
        print "o tipo de valor é: ";
        var_dump($valor);
        ?>

    </main>

</body>

</html>