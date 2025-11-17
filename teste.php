<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do formulário</title>
</head>

<body>
    <h1>Dados Recebidos</h1>
    <?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo "Olá, $nome! Você tem $idade anos.";
    ?>

    <br>

    <a href="exemplo1.php">Voltar ao formulário</a>
</body>

</html>