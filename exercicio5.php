<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> switch </title>
</head>

<body>
    <h1>Exercicio 5 -Condicional</h1>

    <p>Digite (1) para Poupança</p>
    <p>Digite (2) para Renda Fixa</p>

    <form action="processa5.php" method="POST">
        <label for="tipoInvestimento">Tipo de Investimento:</label>
        <input type="number" name="tipoInvestimento" placeholder="1 ou 2">
        <label for="valorInvestido">Valor Investido:</label>
        <input type="number" name="valorInvestido" step="0.01" placeholder="Valor em R$">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>