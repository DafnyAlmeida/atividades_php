<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="horas">Horas de trabalho:</label>
        <input type="number" name="horas" id="horas" step="any">

        <label for="nivel">Nível:</label>
        <input type="number" name="nivel" id="nivel" max="3">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["horas"], $_GET["nivel"])) {

        $horas = $_GET["horas"];
        $nivel = $_GET["nivel"];
    
        if ($nivel == 1) {
            $sala = $horas * 12;
            echo "Seu salário é: " . number_format($sala, 2, ",", ".");
        } elseif ($nivel == 2) {
            $sala = $horas * 17;
            echo "Seu salário é: " . number_format($sala, 2, ",", ".");
        } elseif ($nivel == 3) {
            $sala = $horas * 25;
            echo "Seu salário é: " . number_format($sala, 2, ",", ".");
        } else {
            echo "Inválido";
        }
    }
    ?>
</body>
</html>