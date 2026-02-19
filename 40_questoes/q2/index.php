<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" step="any" required>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" step="any" required>

        <input type="submit" value="Adição" name="adi">
        <input type="submit" value="Subtração" name="sub">
        <input type="submit" value="Divisão" name="div">
        <input type="submit" value="Multiplicação" name="mult">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num1"], $_GET["num2"])) {
        $num1 = (float) $_GET["num1"];
        $num2 = (float) $_GET["num2"];
        
        if (isset($_GET["adi"])) {
            $soma = $num1 + $num2;
            echo "A soma entre $num1 e $num2 é $soma";
        } elseif (isset($_GET["sub"])) {
            $subtr = $num1 - $num2;
            echo "A diferença entre $num1 e $num2 é $subtr";
        } elseif (isset($_GET["mult"])) {
            $multi = $num1 * $num2;
            echo "A multiplicação entre $num1 e $num2 é $multi";
        } elseif (isset($_GET["div"])) {
            $divi = $num1 / $num2;
            echo "A divisão entre $num1 e $num2 é $divi";
        }
    }
    ?>
    
</body>
</html>