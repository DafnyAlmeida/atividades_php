<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="nome">Nome do aluno:</label>
        <input type="text" name="nome" id="nome">

        <label for="nota1">Primeira nota:</label>
        <input type="number" name="nota1" id="nota1" step="any">

        <label for="nota2">Segunda nota:</label>
        <input type="number" name="nota2" id="nota2" step="any">

        <label for="nota3">Terceira nota:</label>
        <input type="number" name="nota3" id="nota3" step="any">

        <input type="submit" value="Calcular média">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"], $_GET["nota1"], $_GET["nota2"], $_GET["nota3"])) {
        $nome = $_GET["nome"];
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $n3 = $_GET["nota3"];

        $media = ($n1 + $n2 + $n3) / 3;

        if ($media >= 7) {
            $estado = "Aprovado";
        } elseif ($media <= 6.9 && $media >= 5.1) {
            $estado = "Recuperação";
        } elseif ($media <= 5) {
            $estado = "Reprovado";
        }

        echo "A média de $nome é: ". number_format($media, 2, ",", ".") . " e o estado $estado";
    }
    ?>
    
</body>
</html>