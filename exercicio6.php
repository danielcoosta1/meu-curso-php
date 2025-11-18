<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços de repetição - PHP</title>
</head>

<body>
    <H1>Exercício 6 - for </H1>
    <?php
    $numeros = [2, 4, 5, 1, 9, 16];
    $totalNumeros = count($numeros);
    $soma = 0;

    for ($i = 0; $i < $totalNumeros; $i++) {
        $soma += $numeros[$i];
    }
    echo "<p>A soma dos números do array é: " . $soma . "</p>";
    ?>

</body>

</html>