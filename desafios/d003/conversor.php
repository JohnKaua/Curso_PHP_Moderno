<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversão para Dólar</title>
</head>

<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php
        $valor = $_GET["valor"] ?? 0;
        $cotacao = 5.22;
        $dolar = $valor / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br>";
        echo "<strong>Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "USD") . "</strong> informada diretamente no código</p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>