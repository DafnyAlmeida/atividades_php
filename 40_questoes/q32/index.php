<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números e caracteres</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="opera">Operador:</label>
        <input type="text" name="opera" id="opera">

        <label for="num1">Número um:</label>
        <input type="number" name="num1" id="num1">

        <label for="num2">Número dois:</label>
        <input type="number" name="num2" id="num2">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["opera"], $_GET["num1"], $_GET["num2"])) {

        $opera = (string) $_GET["opera"];
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operadores = ["x", "-", "+", "/"];

        if (in_array($opera, $operadores)) {
            if ($opera == "+") {
                echo "O resultado é: " . $num1 + $num2;
            } elseif ($opera == "-") {
                echo "O resultado é: " . $num1 - $num2;
            } elseif ($opera == "x") {
                echo "O resultado é: " . $num1 * $num2;
            } elseif ($opera == "/") {
                if ($num2 != 0) {
                    echo "O resultado é: " . $num1 / $num2;
                } else {
                    echo "Divisão por zero inválida";
                } 
            } 
        } else {
            echo "Operação inválida";
        }
    }

    ?>
    
</body>
</html>