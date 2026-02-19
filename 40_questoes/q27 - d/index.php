<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome">

        <label for="combus">Combustivel usado (alcool, diesel e gasolina): </label>
        <select name="opcao" required>
            <option value="" disabled selected>Escolha</option>
            <option value="alcool">Alcool</option>
            <option value="diesel">Diesel</option>
            <option value="gasolina">Gasolina</option>
        </select>

        <label for="valor">Valor do carro: </label>
        <input type="text" id="valor" name="valor">

        <input type="submit" value="Calcular">
    </form>
    <?php

    if (!isset($_SESSION['listacarrototal'])) {
        $_SESSION['listacarrototal'] = [];
        $_SESSION['valordesconto'] = 0;
        $_SESSION['valortotal'] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['opcao'], $_POST['valor'], $_POST['nome'])){

            $nome = $_POST['nome'];
            $combus =  strtolower($_POST['opcao']);
            $valor_original = (int) $_POST['valor'];
            $valor_final = null;
            $desconto = null;
            $valor_descontado = null;
            if ($combus == "alcool"){
                $desconto = $valor_original * 0.25;

                $valor_final = $valor_original - $desconto;

                $valor_descontado = $valor_original - $valor_final;
                $_SESSION['valordesconto'] += $valor_descontado;
                $_SESSION['valortotal'] += $valor_final;
            }
            else if ($combus == "gasolina"){
                $desconto = $valor_original * 0.21;

                $valor_final = $valor_original - $desconto;

                $valor_descontado = $valor_original - $valor_final;
                $_SESSION['valordesconto'] += $valor_descontado;
                $_SESSION['valortotal'] += $valor_final;
            }
            else if ($combus == "diesel"){
                $desconto = $valor_original * 0.14;

                $valor_final = $valor_original - $desconto;

                $valor_descontado = $valor_original - $valor_final;
                $_SESSION['valordesconto'] += $valor_descontado;
                $_SESSION['valortotal'] += $valor_final;
            }
            else if (!in_array($combus, ['alcool', 'gasolina', 'diesel'], true)){
                echo "combustive inválido";
                return;
            }
            $carro = [
                "Nome" => $nome,
                "Combustivel usado" => $combus,
                "Valor Original" => $valor_original,
                "Valor com desconto" => $valor_final,
                "Desconto" => $desconto
            ];
            $_SESSION['listacarrototal'][] = $carro;
            }
    ?>
    <h2>
        <?php
            echo "O custo total já com desconto é: " . htmlspecialchars($_SESSION['valortotal']) . "<br>";
            echo "O total de desconto obtido foi: ". htmlspecialchars($_SESSION['valordesconto']);
        ?>
    </h2>
</div>
<?php
    if (!empty($_SESSION['listacarrototal'])){
        echo "<table>";
            echo "<tr>";
            foreach(array_keys($_SESSION['listacarrototal'][0]) as $header){
                echo "<th>" . htmlspecialchars($header) . "</th>";
            }
            echo "</tr>";
            foreach($_SESSION['listacarrototal'] as $row){
                echo "<tr>";
                foreach ($row as $cell_dados){
                    echo "<td>" . htmlspecialchars($cell_dados) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
    } 
    ?>
</body>
</html>