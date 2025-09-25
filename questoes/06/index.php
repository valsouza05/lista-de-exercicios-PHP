<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 6 - Ordem Decrescente</title>
</head>
<body>
    <h2>Questão 6: Mostrar Números em Ordem Decrescente</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Número 1" required><br><br>
        <input type="number" name="n2" placeholder="Número 2" required><br><br>
        <input type="number" name="n3" placeholder="Número 3" required><br><br>
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [$_POST["n1"], $_POST["n2"], $_POST["n3"]];
        rsort($numeros);

        echo "<p>Ordem decrescente: <strong>" . implode(", ", $numeros) . "</strong></p>";
    }
    ?>
</body>
</html>

</html>
