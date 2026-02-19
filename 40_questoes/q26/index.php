<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números por extenso</title>
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
            
            switch ($num) {
                case 1:
                    echo "Um";
                    break;
                case 2:
                    echo "Dois";
                    break;
                case 3:
                    echo "Três";
                    break;
                case 4:
                    echo "Quatro";
                    break;
                case 5:
                    echo "Cinco";
                    break;
                default:
                    echo "Número invalido";
                    break;
            }
        }
    ?>
    
</body>
</html>