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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>

   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metros = (float) $_POST["metros"];
        $centimetros = $metros * 100;
        echo "<p><strong>$metros</strong> metros equivalem a <strong>$centimetros</strong> centímetros.</p>";
    }
    ?>
     
    </main>
</body>


</html>
