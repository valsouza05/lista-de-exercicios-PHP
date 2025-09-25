<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 9 - Dias de Vida</title>
</head>
<body>
    <h2>Questão 9: Quantos dias de vida você tem?</h2>

    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Idade (anos):</label>
        <input type="number" name="idade" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = (int) $_POST["idade"];
        $dias = $idade * 365;

        echo "<p>$nome, você já viveu aproximadamente <strong>$dias dias</strong>.</p>";
    }
    ?>
</body>
</html>
