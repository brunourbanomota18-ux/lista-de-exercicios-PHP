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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1" step="0.01" required>

            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2" step="0.01" required>

            <label for="num3">Digite o terceiro número:</label>
            <input type="number" name="num3" id="num3" step="0.01" required>

            <button type="submit">Ordenar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            // cria um array com os números
            $numeros = [$num1, $num2, $num3];

            // ordena em ordem decrescente
            rsort($numeros);

            echo "<p>Números digitados: <strong>$num1</strong>, <strong>$num2</strong>, <strong>$num3</strong>.</p>";
            echo "<p>Ordem decrescente: <strong>" . implode(", ", $numeros) . "</strong></p>";
        }
        ?>
    </main>
</body>

</html>
