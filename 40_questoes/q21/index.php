<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíto</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="quant">Quantidade de pessoas que deseja analisar:</label>
        <input type="number" name="quant" id="quant">

        <input type="submit" value="Analisar">
    </form>

    <?php 
    if (isset($_GET["quant"])) {
        $qtd = $_GET["quant"];

        echo '<form method="post">';
        for ($i = 0; $i < $qtd; $i++) {
            echo "Pessoa " . ($i + 1); 
            echo "<br>";
            echo '
                <label for="nome">Nome:</label>
                <input type="text" name="nome[]">

                <br>

                <label for="sexo">Sexo:</label>
                <select name="sexo[]" required>
                    <option value="" disabled selected>Escolha</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>

                <br>

                <label for="idade">Idade:</label>
                <input type="number" name="idade[]">

                <br>

                <label for="saude">Problemas de saúde:</label>
                <select name="saude[]" required>
                    <option value="" disabled selected>Escolha</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>

                <br>
            ';
        }

        echo '<input type="submit" name="verificar" value="Verificar">';
        echo '</form>';
    }
    ?>

    <?php 
    if (isset($_POST["verificar"])) {

        $nomes = $_POST["nome"];
        $saudes = $_POST["saude"];
        $sexos = $_POST["sexo"];
        $idades = $_POST["idade"];

        for ($i = 0; $i < count($nomes); $i++) {
            echo "Nome: $nomes[$i]";
            echo "<br>";
            echo "Sexo: $sexos[$i]";
            echo "<br>";
            echo "Idade: $idades[$i]";
            echo "<br>";
            echo "Problemas de saúde: $saudes[$i]";
            echo "<br>";

            if ($sexos[$i] == "feminino" || $idades[$i] < 18 || $saudes[$i] == "sim") {
                echo "Não apta(o)";
                echo "<br>";
            } else {
                echo "Apto";
                echo "<br>";
            }
        }
    }
    ?>
    
</body>
</html>