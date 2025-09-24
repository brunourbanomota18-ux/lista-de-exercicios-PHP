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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="idade">Digite sua idade (em anos):</label>
            <input type="number" name="idade" id="idade" required min="0">
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $idade = (int) $_POST["idade"];
            
            // cálculo aproximado (365 dias por ano)
            $dias = $idade * 365;

            echo "<p>Você tem <strong>$idade</strong> anos.</p>";
            echo "<p>Isso corresponde a aproximadamente <strong>$dias dias</strong> de vida.</p>";
        }
        ?>
    </main>
</body>

</html>
