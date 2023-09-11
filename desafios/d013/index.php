<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 13</title>
    <style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <?php
    $padrao_mnt = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $saque = $_GET['saque'] ?? 0;
    $resto = $saque;

    $nt100 = (int)($resto / 100);
    $resto %= 100;

    $nt50 = (int)($resto / 50);
    $resto %= 50;

    $nt10 = (int)($resto / 10);
    $resto %= 10;

    $nt5 = (int)($resto / 5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" min="0" step="5" value="<?= $saque ?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao_mnt, $saque, "BRL") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $nt100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $nt50 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $nt10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $nt5 ?></li>
        </ul>
    </section>
</body>

</html>