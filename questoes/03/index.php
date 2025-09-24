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
        <h2>Questão 03: Horas Trabalhadas</h2>
    </header>

    <main>
        <!-- implementação da solução -->
        <form method="post">
            <label for="horas">Digite a quantidade de horas trabalhadas:</label>
            <input type="number" name="horas" id="horas" step="0.01" required>

            <label for="valorHora">Digite o valor recebido por hora (R$):</label>
            <input type="number" name="valorHora" id="valorHora" step="0.01" required>

            <button type="submit">Calcular Salário</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $horas = $_POST["horas"];
            $valorHora = $_POST["valorHora"];
            $salario = $horas * $valorHora;

            echo "<p>Você trabalhou <strong>$horas</strong> horas, com valor de <strong>R$$valorHora</strong> por hora.</p>";
            echo "<p>O salário total é: <strong>R$$salario</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
