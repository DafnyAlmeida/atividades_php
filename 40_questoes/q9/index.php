<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros compostos</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="capital">Capital:<label>
        <input type="number" name="capital" id="capital" required step="any">

        <label for="meses">Meses:</label>
        <input type="number" name="meses" id="meses" required>

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["capital"], $_GET["meses"])) {
        $capital = (float) $_GET["capital"];
        $meses = (int) $_GET["meses"];
        $taxa = 1 + 0.007;

        $montante = $capital * pow($taxa, $meses);

        echo "O resultado após $meses meses foi de ". number_format($montante, 2, ",", ".");
    }
    
    ?>
    
</body>
</html>