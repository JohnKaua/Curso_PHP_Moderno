<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strings</title>
</head>

<body>
    <main>
        <h1>Strings</h1>

        <?php
        //          aspas duplas e aspas simples

        // $nome = "John";
        // $sobrenome = "Gonçalves";
        // print '$nome $sobrenome \u{1F525}';

        // $nome = "John";
        // $sobrenome = "Gonçalves";
        // print "$nome $sobrenome \u{1F525}";

        // $nome = 'John';
        // $sobrenome = 'Gonçalves';
        // print "$nome $sobrenome \u{1F525}";

        // $nome = 'John';
        // $sobrenome = "Gonçalves \u{1F525}";
        // print "$nome $sobrenome";

        //          constantes e funcoes

        // const CANAL = "Curso em Vídeo \u{1F499}";
        // print "Eu adoro o " . CANAL;
        //print "Estamos no ano de " . date('Y');

        //          escape

        // $nome = "John";
        // $sobrenome = "Gonçalves";
        // $apelido = "Arashxn";
        // print "$nome \"$apelido\" $sobrenome";

        //          heredoc e nowdoc

        // $curso = "PHP";
        // $ano = date('Y');
        // echo <<< 'FRASE'
        // Eu estou cursando
        //     $curso em $ano
        // FRASE;

        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
        Eu estou cursando
        $curso em $ano
        FRASE;
        ?>

    </main>
</body>

</html>