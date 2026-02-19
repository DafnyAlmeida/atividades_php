<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números em ordem crescente</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num1">Digite um número:</label>
        <input type="number" name="num1" id="num1">

        <label for="num2">Digite um número:</label>
        <input type="number" name="num2" id="num2">

        <label for="num3">Digite um número:</label>
        <input type="number" name="num3" id="num3">

        <input type="submit" value="Enviar">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num1"], $_GET["num2"], $_GET["num3"])) {
        
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            
            $lista = [$num1, $num2, $num3];

            $lista_ordenada = sort($lista);

            print_r($lista_ordenada);
        }
    ?>
    
</body>
</html>