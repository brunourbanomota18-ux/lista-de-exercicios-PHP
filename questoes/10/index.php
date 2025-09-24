<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"> <!-- Corrigido aqui -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="totalHoras">Digite o total de horas:</label>
            <input type="number" name="totalHoras" id="totalHoras" required min="0">
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $totalHoras = (int) $_POST["totalHoras"];

            $dias = intdiv($totalHoras, 24);
            $horasRestantes = $totalHoras % 24;
            $minutos = $totalHoras * 60;
            $segundos = $totalHoras * 3600;

            echo "<p>Total de horas informadas: <strong>$totalHoras</strong></p>";
            echo "<p>Equivalente a: <strong>$dias dia(s) e $horasRestantes hora(s)</strong></p>";
            echo "<p>Ou <strong>$minutos minutos</strong> e <strong>$segundos segundos</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
