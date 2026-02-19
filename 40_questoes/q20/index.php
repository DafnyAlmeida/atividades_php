<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <?php 
        session_start();
        if (!isset($_SESSION["total"])) {
            $_SESSION["total"] = 0;
            $_SESSION["ate2000"] = 0;
            $_SESSION["soma_total"] = 0;
        }
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <label for="preco">Preço do carro:</label>
        <input type="number" name="preco" id="preco" required>
        <br>
        <label for="ano">Ano do carro:</label>
        <input type="number" name="ano" id="ano" required>

        <br>
        <label for="continuar">Deseja continuar:</label>
        <select name="continuar" id="continuar">
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
        <br>

        <input type="submit" value="calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["preco"], $_POST["ano"])) {

        $preco = (float) $_POST["preco"];
        $ano = $_POST["ano"];
        $continuar = $_POST["continuar"];

        if ($ano <= 2000) {
            $desconto = $preco * 0.12;
            $_SESSION["ate2000"]++;
        } else {
            $desconto = $preco * 0.07;
        }

        $valor_final = $preco - $desconto;
        $_SESSION["total"]++;
        $_SESSION["soma_total"] += $valor_final;

        echo "O valor do desconto foi de " . number_format($desconto, 2, ",", ".");
        echo "<br>";
        echo "O valor final foi de " . number_format($valor_final, 2, ",", ".");
        echo "<br>";

        if ($continuar == "N") {
            echo "Resultado: <br>"; 
            echo "O valor total foi de " . $_SESSION["soma_total"] . "<br>";
            echo "O valor total de carros até 2000 foi de " . $_SESSION["ate2000"] . "<br>";
            echo "O valor total de carros foi de " .$_SESSION["total"];

            session_destroy();
        }
    }
    ?>
    
</body>
</html>