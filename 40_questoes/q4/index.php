<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="vende">Nome do vendedor:<label>
        <input type="text" name="vende" id="vende" required>

        <label for="sala">Salário:</label>
        <input type="number" name="sala" id="sala" step="any" required>

        <label for="vendas">Vendas em dinheiro:</label>
        <input type="number" name="vendas" id="vendas" step="any" required>

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["vende"], $_GET["sala"], $_GET["vendas"])) {
        $vende = $_GET["vende"];
        $sala = (float) $_GET["sala"];
        $vendas = (float) $_GET["vendas"];
        $comi = $vendas * 0.15;
        $resul = $comi + $sala;

        echo "
            <table border='1'>
            <tr>
                <th>Nome</th>
                <th>Salário</th>
                <th>Salário final</th>
            </tr>
            <tr>
                <td>$vende</td> 
                <td>$sala</td>
                <td>$resul</td>
            </tr>
            </table>  
        ";
    }
    
    ?>
    
</body>
</html>