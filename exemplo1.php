<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo1- PHP</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <?php
    $nomeUsuario = "Maria"; //atribuição de valor a uma variável
    ?>

    <h1>Exemplo 1 - PHP</h1>

    <p class="mensagem">
        <?php

        echo "Olá, " . $nomeUsuario . "! Seja bem-vinda ao mundo do PHP.";

        echo "Esta mensagem foi gerada com PHP!";
        ?>
    </p>

</body>

</html>