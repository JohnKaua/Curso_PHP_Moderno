<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 10</title>
</head>

<body>

    <?php
    $ano_nasc = $_GET['ano_nasc'] ?? 2000;
    $ano_idd = $_GET['ano_idd'] ?? date('Y');
    $idd = $ano_idd - $ano_nasc;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="idano_nasc" value="<?= $ano_nasc ?>">
            <label for="ano_idd">Quer saber sua idade em que ano? (atualmente estamos em
                <strong><?= date('Y') ?></strong>)</label>
            <input type="number" name="ano_idd" id="idano_idd" value="<?= $ano_idd ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $ano_nasc ?> vai ter <strong><?= $idd ?> anos</strong> em <?= $ano_idd ?>!</p>
    </section>
</body>

</html>