<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="preco">Valor do carro:</label>
        <input type="number" name="preco" id="preco">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["preco"])) {
        $preco = $_GET["preco"];
        $impostos = $preco * 1.45;
        $resul = $imposto * 1.28;

        echo "O valor do carro ficaria: " . number_format($resul, 2, ",", ".");
    }
    ?>
    
</body>
</html>