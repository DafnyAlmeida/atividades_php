<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="temcel">Temperatura em Celsius:</label>
        <input type="number" name="temcel" id="temcel">

        <input type="submit" value="Converter">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["temcel"])) {
        $temcel = $_GET["temcel"];
        $temfah = $temcel * 1.8 + 32;

        echo "A temperatura $temcel C em Fahrenheit é " . number_format($temfah, 2, ",", ".");
    }
    ?>
    
</body>
</html>