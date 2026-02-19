<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelas</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="preco">Valor da compra:</label>
        <input type="number" name="preco" id="preco">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["preco"])) {
        $preco = $_GET["preco"];
        $parcela = $preco / 5;

        echo "A o valor $preco parcelado em cinco vezes fica " . number_format($parcela, 2, ",", ".");
    }
    ?>
    
</body>
</html>