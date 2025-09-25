<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 10 - Conversão de Tempo</title>
</head>
<body>
    <h2>Questão 10: Conversão de Segundos em Horas, Minutos e Segundos</h2>

    <form method="post">
        <label>Tempo total em segundos:</label>
        <input type="number" name="segundos" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
