<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 7 - Fatorial</title>
</head>
<body>
    <h2>Questão 7: Cálculo de Fatorial</h2>

    <form method="post">
        <label>Digite um número inteiro positivo:</label>
        <input type="number" name="numero" min="0" required>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int) $_POST["numero"];
        $fatorial = 1;

        for ($i = $numero; $i > 1; $i--) {
            $fatorial *= $i;
        }

        echo "<p>Fatorial de <strong>$numero</strong> é <strong>$fatorial</strong></p>";
    }
    ?>
</body>
</html>
