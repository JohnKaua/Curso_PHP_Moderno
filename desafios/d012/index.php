<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 12</title>
</head>

<body>
    <?php
    $sec = $_GET['sec'] ?? 0;
    $w = (int)($sec / 604800);
    $d = (int)($sec % 604800 / 86400);
    $h = (int)(($sec % 604800) %  86400 / 3600);
    $m = (int)((($sec % 604800) %  86400) % 3600 / 60);
    $s = (int)(((($sec % 604800) %  86400) % 3600) % 60 / 60);
    ?>
    <main>
        <h1>Calculdaora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sec">Qual o total de segundos?</label>
            <input type="number" name="sec" id="sec" min="0" value="<?= $sec ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?= $sec ?> segundos equivalem a um total de:</p>
        <ul>
            <li>Semanas: <?= $w ?></li>
            <li>Dias: <?= $d ?></li>
            <li>Horas: <?= $h ?></li>
            <li>Minutos: <?= $m ?></li>
            <li>Segundos: <?= $s ?></li>
        </ul>
    </section>

</body>

</html>