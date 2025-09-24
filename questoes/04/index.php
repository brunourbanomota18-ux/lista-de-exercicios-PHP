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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="altura">Altura da parede (em metros):</label>
            <input type="number" name="altura" id="altura" step="0.01" required>

            <label for="largura">Largura da parede (em metros):</label>
            <input type="number" name="largura" id="largura" step="0.01" required>

            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $altura = $_POST["altura"];
            $largura = $_POST["largura"];
            
            // área da parede
            $area = $altura * $largura;
            
            // considerando 1 litro = 2m²
            $litros = $area / 2;

            echo "<p>A parede tem área de <strong>$area m²</strong>.</p>";
            echo "<p>Você precisará de aproximadamente <strong>$litros litro(s)</strong> de tinta.</p>";
        }
        ?>
    </main>
</body>

</html>
