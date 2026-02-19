<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="opcao">Sexo:</label>
        <select name="opcao" required>
            <option value="" disabled selected>Escolha</option>
            <option value="masc">Masculino</option>
            <option value="femi">Feminino</option>
        </select>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">

        <label for="sala">Salário fixo:</label>
        <input type="number" name="sala" id="sala">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"], $_GET["idade"], $_GET["sexo"], $_GET["sala"])) {

        $opera = (string) $_GET["opera"];
        $idade = $_GET["idade"];
        $sexo = $_GET["sexo"];
        $sala = $_GET["sala"];

        if ($sexo == "masc") {
            if ($idade >= 30) {
                $sala += 100;
                echo "Seu salário é de: " . number_format($sala, 2, ",", ".");
            } elseif ($idade < 30) {
                $sala += 50;
                echo "Seu salário é de: " . number_format($sala, 2, ",", ".");
            }
        } else {
            if ($idade >= 30) {
                $sala += 200;
                echo "Seu salário é de: " . number_format($sala, 2, ",", ".");
            } elseif ($idade < 30) {
                $sala += 80;
                echo "Seu salário é de: " . number_format($sala, 2, ",", ".");
            }
        }
    }
    ?>
    
</body>
</html>