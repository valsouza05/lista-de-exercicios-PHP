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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

   <form method="POST" action="resultado.php">
   <label for="valor_hora">Valor da Hora:</label><br>
   <input type="number" name="valor_hora" step="0.01"><br>
   <label for="horas_trabalhadas">Horas Trabalhadas:</label><br>
   <input type="number" name="horas_trabalhadas"><br>
   <input type="submit" value="calcular">
     
    </main>
</body>


</html>