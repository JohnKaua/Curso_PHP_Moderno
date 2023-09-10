<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 8</title>
</head>

<body>
    <?php
    $num = $_GET['num'] ?? 0;
    $r2 = number_format(pow($num, 1 / 2), 3, ",", ".");
    $r3 = number_format(pow($num, 1 / 3), 3, ",", ".");
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" value="<?= $num ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o número <strong><?= $num ?></strong> temos: </p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= $r2 ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= $r3 ?></strong></li>
        </ul>
    </section>
</body>

</html>