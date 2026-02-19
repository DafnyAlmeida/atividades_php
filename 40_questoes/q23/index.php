<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num">Digite um número:</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Enviar">
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num"])) {
        
            $num = $_GET["num"];
            if ($num == 40) {
                echo "O número é igual 40";
            } elseif ($num >= 80) {
                echo "O número é maior ou igual a 80";
            } elseif ($num < 25) {
                echo "O número é igual ou menor do que 25";
            }
        }
    ?>
</body>
</html>