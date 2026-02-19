<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulos</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="a">Lado a:</label>
        <input type="number" name="a" id="a" step="any">

        <label for="b">Lado b:</label>
        <input type="number" name="b" id="b" step="any">

        <label for="c">Lado c:</label>
        <input type="number" name="c" id="c" step="any">

        <input type="submit" value="Verificar">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["a"], $_GET["b"], $_GET["c"])) {

        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        
        if ($a + $b > $c && $c + $a > $b && $c + $b > $a) {
            if ($a == $b && $b == $c) {
                echo "Esse triângulo é equilatero";
            } elseif ($a == $b || $a == $c || $b == $c) {
                echo "Esse triângulo é isosceles";
            } else {
                echo "Esse triângulo é escaleno";
            }
        } else {
            echo "Essas medidas não podem formar um triângulo";
        } 
    }
    ?>

</body>
</html>