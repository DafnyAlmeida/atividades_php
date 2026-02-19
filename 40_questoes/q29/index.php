<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="mes">Digite o número de um mês:</label>
        <input type="number" name="mes" id="mes">

        <input type="submit" value="Enviar">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["mes"])) {
        
            $mes = $_GET["mes"];
            
            switch ($mes) {
                case 1:
                    echo "Janeiro";
                    break;
                case 2:
                    echo "Fevereiro";
                    break;
                case 3:
                    echo "Março";
                    break;
                case 4:
                    echo "Abril";
                    break;
                case 5:
                    echo "Maio";
                    break;
                case 6:
                    echo "Junho";
                    break;
                case 7:
                    echo "Julho";
                    break;
                case 8:
                    echo "Agosto";
                    break;
                case 9:
                    echo "Setembro";
                    break;
                case 10:
                    echo "Outubro";
                    break;
                case 11:
                    echo "Novembro";
                    break;
                case 12:
                    echo "Dezembro";
                    break; 
                default:
                    echo "Mês inválido";
                    break;
            }
        }
    ?>
    
</body>
</html>