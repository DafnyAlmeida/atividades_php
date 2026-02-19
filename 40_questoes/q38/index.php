<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Ponderada</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="nota1">Laboratório de peso 2:</label>
        <input type="number" name="nota1" id="nota1" step="any">

        <label for="nota2">Avaliação semestral de peso 3:</label>
        <input type="number" name="nota2" id="nota2" step="any">

        <label for="nota3">Exame final de peso 5:</label>
        <input type="number" name="nota3" id="nota3" step="any">

        <input type="submit" value="Calcular média">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nota1"], $_GET["nota2"], $_GET["nota3"])) {

        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $n3 = $_GET["nota3"];

        $media = ($n1 * 2 + $n2 * 3 + $n3 * 5) / 10;

        echo "A média ponderada é: ". number_format($media, 2, ",", ".");
    }
    ?>
    
</body>
</html>