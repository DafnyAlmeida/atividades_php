<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo médio</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="gasolina">Gasolina gasta no total:</label>
        <input type="number" name="gasolina" id="gasolina" step="any" required>

        <label for="km">Distância percorrida:</label>
        <input type="number" name="km" id="km" step="any" required>

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["gasolina"], $_GET["km"])) {
        $gasolina = (float) $_GET["gasolina"];
        $km = (float) $_GET["km"];

        $resul = $gasolina / $km;

        echo "O consumo média do automóvel foi de " . number_format($resul, 2, ",", "."). " litros";
    }

    ?>
    
</body>
</html>