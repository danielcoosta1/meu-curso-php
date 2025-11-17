<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento do Investimento</title>
</head>
<body>
    <h1>Resultado final do Investimento de acordo com o tipo de aplicação</h1>
    <?php
    $tipoInvestimento = $_POST['tipoInvestimento'];
    $valorInvestido = $_POST['valorInvestido'];
    
    switch ($tipoInvestimento) {
        case 1:
            $rendimento = 0.03;
            $tipo = "Poupança";
            break;
        case 2:
            $rendimento = 0.05;
            $tipo = "Renda Fixa";
            break;
        default:
            echo "<p>Tipo de investimento inválido.</p>";
            exit;
    }       

    $valorFinal = $valorInvestido + ($valorInvestido * $rendimento);
    echo "<p>Tipo de investimento: $tipo</p>";
    echo "<p>Valor investido: R$ " . number_format($valorInvestido, 2, ',', '.') . "</p>";
    echo "<p>Valor final após rendimento: R$ " . number_format($valorFinal, 2, ',', '.') . "</p>";
    ?>
</body>
</html>