<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de luz</title>
</head>
<body>
     <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="opcao">Tipo de residência:</label>
        <select name="opcao" required>
            <option value="" disabled selected>Escolha</option>
            <option value="residencia">Residência</option>
            <option value="comercio">Comércio</option>
            <option value="industria">Indústria</option>
        </select>

        <label for="kw">Consumo em Kw/h:</label>
        <input type="number" name="kw" id="kw">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["opcao"], $_GET["kw"])) {

        $opcao = (string) $_GET["opcao"];
        $kw = $_GET["kw"];

        if ($opcao == "residencia") {
            $resul = $kw * 0.6;
            echo "O valor da sua conta de energia é: " . number_format($resul, 2, ",", ".");
        } elseif ($opcao == "comercio") {
            $resul = $kw * 0.48;
            echo "O valor da sua conta de energia é: " . number_format($resul, 2, ",", ".");
        } elseif ($opcao == "industria") {
            $resul = $kw * 1.29;
            echo "O valor da sua conta de energia é: " . number_format($resul, 2, ",", ".");
        } else {
            echo "Opção inválida";
        }
    }
    ?>
</body>
</html>