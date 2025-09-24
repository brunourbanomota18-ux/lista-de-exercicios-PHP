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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="limite">Digite um número inteiro:</label>
            <input type="number" name="limite" id="limite" required min="1">
            <button type="submit">Gerar Ímpares</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $limite = (int) $_POST["limite"];
            $impares = [];

            // gera os números ímpares de 1 até o limite
            for ($i = 1; $i <= $limite; $i++) {
                if ($i % 2 != 0) {
                    $impares[] = $i;
                }
            }

            echo "<p>Números ímpares de 1 até <strong>$limite</strong>:</p>";
            echo "<p><strong>" . implode(", ", $impares) . "</strong></p>";
        }
        ?>
    </main>
</body>

</html>
