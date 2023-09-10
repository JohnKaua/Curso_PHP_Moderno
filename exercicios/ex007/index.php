<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Operadores Aritméticos</h1>
    </header>
    <section>
        <h1>Operadores Básicos</h1>
        <?php
        echo  "<p>\"2\" + \"2\" = " . "2" + "2" . "</p>";
        echo "<p>5 - 2 = " . 5 - 2 . "</p>";
        echo "<p>5**2 = " . 5 ** 2 . "</p>";
        echo "<p>5 / 2 = " . 5 / 2 . "</p>";
        echo "<p>5 * 2 = " . 5 * 2 . "</p>";
        echo "<p> 5 % 2 = " . 5 % 2 . "</p>";
        ?>
    </section>
    <section>
        <h1>Ordem de precedência</h1>
        <?php
        echo "<p>5 + 5 - 4 = " . 5 + 5 - 4 . "</p>";
        echo "<p>5 - 5 * 3 = " . 5 - 5 * 3 . "</p>";
        echo "<p>27 / 3**2 = " . 27 / 3 ** 2 . "</p>";
        echo "<p>50 / 2 + 3**2 + 25 % 2 = " . 50 / 2 + 3 ** 2 + 25 % 2 . "</p>";
        ?>
    </section>
</body>

</html>