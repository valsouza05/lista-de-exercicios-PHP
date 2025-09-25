<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 5 - Maior Número</title>
</head>
<body>
    <h2>Questão 5: Maior entre Três Números</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Número 1" required><br><br>
        <input type="number" name="n2" placeholder="Número 2" required><br><br>
        <input type="number" name="n3" placeholder="Número 3" required><br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];

        $maior = max($n1, $n2, $n3);
        echo "<p>O maior número é <strong>$maior</strong></p>";
    }
    ?>
</body>
</html>
