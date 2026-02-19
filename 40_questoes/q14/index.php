<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior, menor ou igual</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num1">Num1:</label>
        <input type="number" name="num1" id="num1">

        <label for="num2">Num2:</label>
        <input type="number" name="num2" id="num2">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num1"], $_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        if ($num1 == $num2) {
            echo "O número $num1 é igual ao $num2";
        } elseif ($num1 > $num2) {
            echo "O número $num1 é maior que $num2";
        } else {
            echo "O número $num1 é menor que $num2";
        }
    }
    ?>
</body>
</html>