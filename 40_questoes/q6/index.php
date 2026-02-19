<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocar valores</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="n1">Nnum1:</label>
        <input type="number" name="n1" id="n1" step="any">

        <label for="n2">Num2:</label>
        <input type="number" name="n2" id="n2" step="any">

        <input type="submit" value="Calcular média">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["n1"], $_GET["n2"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $auxi = $num1;

        echo "Inicialmente o valor do num1 é $num2 e do num2 é $num2";

        $num1 = $num2;
        $num2 = $auxi;

        echo "Valores trocados num1: $num1 e num2: $num2";

        define("PI", 3.14);

        // const PI = 3.14; Só usa dentro de funções
    }
    ?>
    
</body>
</html>