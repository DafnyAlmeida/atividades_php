<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior que dez</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num">Num:</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num"])) {
        $num = $_GET["num"];
        $parcela = $preco / 5;

        if ($num >= 10) {
            echo "O número $num é maior que dez";
        } else {
            echo "O número $num é menor que dez";
        }
    }
    ?>
</body>
</html>