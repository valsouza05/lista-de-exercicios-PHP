<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Resultado das Horas trabalhadas</h2>
    </header>

    <main>
    <?php
    $valor_hora = $_POST["valor_hora"];
    $horas_trabalhadas = $_POST["horas_trabalhadas"];

    echo "Seu salário do mês é R$" . ($valor_hora * $horas_trabalhadas);
    ?>
     
    </main>
</body>


</html>