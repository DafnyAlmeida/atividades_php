<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <?php for ($i = 1; $i < 41; $i++):?>
            Produto <?= $i ?>:
            <br>
            Preço de compra:
            <input type="number" step="any" name="compra[]">
    
            <br>

            Preço de venda:
            <input type="number" step="any" name="venda[]">
        <?php endfor;?>  
        <input type="submit" value="Enviar">
        <br>  
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["venda"], $_POST["compra"])) {

        $compras = $_POST["compra"];
        $vendas = $_POST["venda"];

        foreach ($compras as $i => $c) {
            echo "O produto: " . $i + 1 .  " de preço de compra " . $c . " e de preço de venda " . $vendas[$i] . " apresentou: " . "<br>";

            if ($c == $vendas[$i]) {
                echo "Embate";
                echo "<br>";
            } elseif ($c < $vendas[$i]) {
                echo "Ganho";
                echo "<br>";
            } elseif ($c > $vendas[$i]) {
                echo "Prejuizo";
                echo "<br>";
            }
        }
    }
    ?>
    
</body>
</html>