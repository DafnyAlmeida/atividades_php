<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxa</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="preco">Preço de compra:</label>
        <input type="number" name="preco" id="preco" step="any">

        <label for="taxa">Taxa em porcentagem:</label>
        <input type="number" name="taxa" id="taxa" step="any">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["preco"], $_GET["taxa"] )) {
        $preco = $_GET["preco"];
        $taxa =  $_GET["taxa"];
        $resultado = ($taxa/100 + 1) * $preco;

        echo "Resultado: " . number_format($resultado, 2, ",", ".");
    }
    ?>
    
</body>
</html>