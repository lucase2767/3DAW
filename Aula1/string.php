<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $var = "esse e um teste, agora nois testa";
        /*usado para saber se é inteiro*/
        var_dump(is int($var));
        /*começa a mudar a string*/
        echo "<br>";
        echo strlen($var);/*conta o numero de letras*/
        echo "<br>";
        echo str_word_count($var);/*conta o numero de palavras*/
        echo "<br>";
        echo strrev($var);/*reverte a frase*/
        echo "<br>";
        echo str_shuffle($var);/*ferra a frase*/
        echo "<br>";
        ?>
    </body>