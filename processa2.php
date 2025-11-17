<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Número</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    $numero = $_POST['Numero'];

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é PAR.</p>";
    } else {
        echo "<p>O número $numero é ÍMPAR.</p>";
    }
    ?>
    <br>
    <a href="exercicio2.php">Voltar ao formulário</a>
</body>
</html>