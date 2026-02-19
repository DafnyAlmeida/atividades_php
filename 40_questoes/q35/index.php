<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade">

        <input type="submit" value="Enviar">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["idade"])) {
        
            $idade = (int) $_GET["idade"];

            if ($idade >= 5 && $idade <= 7) {
                echo "Infantil A = 5 - 7 anos";
            } elseif ($idade >= 8 && $idade <= 10) {
                echo "Infantil B = 8 - 10 anos";
            } elseif ($idade >= 11 && $idade <= 13) {
                echo "Juvenil A = 11 - 13 anos";
            } elseif ($idade >= 14 && $idade <= 17) {
                echo "Juvenil B = 14 - 17 anos";
            } elseif ($idade >= 18 && $idade <= 25) {
                echo "Sênior = 18 - 25 anos";
            } else {
                echo "Idade não reconhecida";
            }
            
        }
    ?>
    
</body>
</html>