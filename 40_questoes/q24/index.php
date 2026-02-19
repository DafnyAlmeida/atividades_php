<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vários números</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="quant">Quantidade de números que deseja analisar:</label>
        <input type="number" name="quant" id="quant">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if (isset($_GET["quant"])) {
        $qtd = $_GET["quant"];

        echo '<form method="post">';
        for ($i = 0; $i < $qtd; $i++) {
            echo "Número " . ($i + 1); 
            echo "<br>";
            echo '<input type="number" name="numeros[]" id="num">';
            echo "<br>";
        }
        echo '<input type="submit" name="verificar" value="Verificar">';
        echo '</form>';
    }
    ?>

    <?php 
    if (isset($_POST["verificar"])) {

        $numeros = $_POST["numeros"];

        foreach ($numeros as $num) {
            if ($num > 0) {
                echo "O número $num é positivo";
                echo "<br>";
            } elseif ($num < 0) {
                echo "O número $num é negativo";
                echo "<br>";
            } else {
                echo "O número $num é zero";
                echo "<br>";
            }
        }
    }
    ?>
    
    
</body>
</html>