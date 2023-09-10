<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 11</title>
</head>

<body>

    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $preco = $_GET['preco'] ?? 0;
    $percentual = $_GET['percentual'] ?? 0;
    $reajuste = $preco + ($preco * $percentual / 100);
    ?>

    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" step="0.01">
            <label for="percentual">Qual será o percentual do reajuste? (<strong><span
                        id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" min="0" max="100" id="percentual" value="<?= $percentual ?>" step="1"
                oninput="mudaValor()">
            <input type="submit" value="Reajustar Preço">
        </form>
    </main>

    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava <?= numfmt_format_currency($padrao, $preco, "BRL") ?>, com o
            <strong><?= $percentual ?>% de
                aumento</strong> vai passar a custar
            <strong><?= numfmt_format_currency($padrao, $reajuste, "BRL") ?></strong> a partir de agora.
        </p>
    </section>

    <script>
    mudaValor()

    function mudaValor() {
        p.innerText = percentual.value;
    }
    </script>

</body>

</html>