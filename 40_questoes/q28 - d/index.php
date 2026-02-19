<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <label for="nome">Nome do funcionario: </label>
        <input type="text" id="nome" name="nome" placeholder="Nome:">
        <label for="salario">Salario: </label>
        <input type="text" id="salario" name="salario" placeholder="Ex.: 3000">
        <input type="submit" value="Enviar">
    </form>
        <?php
        if (!isset($_SESSION['funcs'])) {
            $_SESSION['funcs'] = [];
            $_SESSION['valoramais'] = 0;
        }

        if (isset($_POST['salario']) && isset($_POST['nome'])){
                $nome = $_POST['nome'];
                $salario =  (float) $_POST['salario'];
                $salario_novo  = null;
                $salario_minimo = 1612;
                $reajuste = null;
                $salario_quant = $salario / $salario_minimo;
                if ($salario_quant < 3){
                    $reajuste = 0.50;
                }
                else if ($salario_quant >= 3 && $salario_quant <= 10){
                    $reajuste = 0.20;
                }
                else if ($salario_quant > 10 && $salario_quant <= 20){
                    $reajuste = 0.15;
                }
                else{
                    $reajuste = 0.10;

                }
                $salario_novo = $salario + ($salario * $reajuste);
                $pessoa = [
                    "Nome" => $nome,
                    "Salario antigo" => $salario,
                    "Salario novo" => $salario_novo
                ];
                $aumentopraemp = $salario_novo - $salario;
                $_SESSION['funcs'][] = $pessoa;
                $_SESSION['valoramais'] += $aumentopraemp;
                }
        ?>
        <h2>
            <?php echo "A empresa terá de pagar {$_SESSION['valoramais']} a mais"?>
        </h2>
    </div>
    <?php
    // se num tiver vazio
        if (!empty($_SESSION['funcs'])){
            echo "<table>";
                echo "<tr>";
                // htmlspecialchars serve pra segurança, usa-se sempre que for mostrar algo na tela que não foi você que escreveu direto no código. Tipo, ele não mostra o echo diretamente.
                foreach(array_keys($_SESSION['funcs'][0]) as $header){
                    echo "<th>" . htmlspecialchars($header) . "</th>";
                }
                echo "</tr>";
                foreach($_SESSION['funcs'] as $row){
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