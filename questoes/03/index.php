<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 3 - Salário Mensal</title>
</head>
<body>
    <h2>Questão 3: Cálculo de Salário Mensal</h2>

    <form method="post">
        <label>Valor por hora (R$):</label>
        <input type="number" name="valorHora" step="0.01" required><br><br>

        <label>Horas trabalhadas no mês:</label>
        <input type="number" name="horasMes" required><br><br>

        <button type="submit">Calcular Salário</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorHora = (float) $_POST["valorHora"];
        $horasMes = (int) $_POST["horasMes"];
        $salario = $valorHora * $horasMes;

        echo "<p>Seu salário no mês é <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
