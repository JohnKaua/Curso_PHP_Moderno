<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 7</title>
</head>

<body>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $sal_min = 1380;
    $sal = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="idsal" value="<?= $sal ?>">
            <p>Considerando o salário mínimo de <strong><?= numfmt_format_currency($padrao, $sal_min, "BRL") ?></strong>
            </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong>" . intdiv($sal, $sal_min) . " salários mínimos</strong> + " . numfmt_format_currency($padrao, ($sal % $sal_min), "BRL") . "</p>";
        ?>
    </section>
</body>

</html>