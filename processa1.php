
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média das notas</title>
</head>
<body>
    <h1>Resultado da Média</h1>
    <?php
    $nome = $_POST['Nome'];
    $nota1 = $_POST['Nota1'];
    $nota2 = $_POST['Nota2'];
    $media = ($nota1 + $nota2) / 2;
    echo "Olá, $nome! Sua média é: $media";
    ?>
    <br>
    <a href="exercicio1.php">Voltar ao formulário</a>
</body>
</html>