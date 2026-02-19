<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>">
        <label for="num1">Número 1: </label>
        <input type="number" id="num1" name="num1">
        <label for="num2">Número 2: </label>
        <input type="number" id="num2" name="num2">
        <input type="submit" value="somar">
    </form>
    <?php
        $num1 = $_GET['num1'] ?? null;
        $num2 = $_GET['num2'] ?? null;
        $total = $num1 + $num2;
        echo "Resultado da soma é {$total}";
    ?>
    
</body>
</html>