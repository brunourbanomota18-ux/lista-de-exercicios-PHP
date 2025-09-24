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
        <h2>Questão 07: Fatorial</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="numero">Digite um número inteiro:</label>
            <input type="number" name="numero" id="numero" required min="0">
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $numero = (int) $_POST["numero"];
            $fatorial = 1;

            // cálculo do fatorial
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<p>O fatorial de <strong>$numero</strong> é <strong>$fatorial</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
