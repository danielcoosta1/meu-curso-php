<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Custo de Carro</title>
</head>

<body>
    <h1>Processamento do Custo de um Carro</h1>
    <?php
    $custoFabrica = $_POST['CustoFabrica'];

    if (0 < $custoFabrica && $custoFabrica <= 12000) {
        $percentualDistribuidor = 0.05;
        $percentualImpostos = 0.10;
    } elseif ( 12000 < $custoFabrica && $custoFabrica <= 25_000) {
        $percentualDistribuidor = 0.10;
        $percentualImpostos = 0.15;
    } else {
        $percentualDistribuidor = 0.15;
        $percentualImpostos = 0.20;
    }
    $custoFinal = $custoFabrica + ($percentualDistribuidor * $custoFabrica) + ($percentualImpostos * $custoFabrica);

    echo "<p>O custo final do carro é R$ " . number_format($custoFinal, 2, ',', '.') . "</p>";
    ?>
</body>

</html>