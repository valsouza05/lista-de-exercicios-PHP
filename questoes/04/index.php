<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 4 - Loja de Tintas</title>
</head>
<body>
    <h2>Questão 4: Cálculo de Tinta para Pintura</h2>

    <form method="post">
        <label>Área a ser pintada (em m²):</label>
        <input type="number" name="area" step="0.1" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $area = (float) $_POST["area"];
        $litros_necessarios = $area / 3;
        $latas = ceil($litros_necessarios / 18);
        $preco = $latas * 80;

        echo "<p>Área: <strong>$area m²</strong></p>";
        echo "<p>Você precisa de <strong>$latas</strong> lata(s) de tinta.</p>";
        echo "<p>Preço total: <strong>R$ " . number_format($preco, 2, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
