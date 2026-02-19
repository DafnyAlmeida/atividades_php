<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso ideal</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="opcao">Sexo:</label>
        <select name="opcao" required>
            <option value="" disabled selected>Escolha</option>
            <option value="masc">Masculino</option>
            <option value="femi">Feminino</option>
        </select>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">

        <label for="altuar">Altura:</label>
        <input type="number" name="altura" id="altura">

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["opcao"], $_GET["idade"], $_GET["altura"])) {

        $sexo = (string) $_GET["opcao"];
        $idade = (int) $_GET["idade"];
        $altura = (int) $_GET["altura"];

        if ($sexo == "masc") {
            if ($altura > 1.7) {
                if ($idade <= 20) {
                    $imc = (72.7 * $altura) - 58;
                    echo "Seu IMC é: $imc";
                } elseif ($idade >= 21 && $idade <= 39) {
                    $imc = (72.7 * $altura) - 53;
                    echo "Seu IMC é: $imc";
                } elseif ($idade >= 40) {
                    $imc = (72.7 * $altura) - 45;
                    echo "Seu IMC é: $imc";
                }
            } elseif ($altura <= 1.7) {
                if ($idade <= 40) {
                    $imc = (72.7 * $altura) - 50;
                    echo "Seu IMC é: $imc";
                } elseif ($idade > 40) {
                    $imc = (72.7 * $altura) - 58;
                    echo "Seu IMC é: $imc";
                }
            }
        } else {
            if ($altura > 1.5) {
                $imc = (62.1 * $altura) - 44.7;
                echo "Seu IMC é: $imc";
            } elseif ($altura <= 1.5) {
                if ($idade >= 35) {
                    $imc = (62.1 * $altura) - 45;
                    echo "Seu IMC é: $imc";
                } elseif ($idade < 35) {
                    $imc = (62.1 * $altura) - 49;
                    echo "Seu IMC é: $imc";
                }
            }
        }
    }
    ?>
</body>
</html>