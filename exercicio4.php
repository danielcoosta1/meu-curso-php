<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>

<body>
    <h1>Exercicio 4 - CUSTO DE UM CARRO</h1>
    <?php
    $carro1 = [
        "preco_fabrica" => 1000,
    ];

    if ($carro1["preco_fabrica"] <= 12000) {
        $imposto = 0.05 * $carro1["preco_fabrica"];
        $distribuidor = 0.10 * $carro1["preco_fabrica"];
    } elseif ($carro1["preco_fabrica"] > 12000 && $carro1["preco_fabrica"] <= 25000) {
        $imposto = 0.10 * $carro1["preco_fabrica"];
        $distribuidor = 0.15 * $carro1["preco_fabrica"];
    } else {
        $imposto = 0.15 * $carro1["preco_fabrica"];
        $distribuidor = 0.20 * $carro1["preco_fabrica"];
    }
    $custo_final = $carro1["preco_fabrica"] + $imposto + $distribuidor;

    echo "<p>O custo final do carro é R$ " . number_format($custo_final, 2, ',', '.') . "</p>";
    ?>
</body>

</html>