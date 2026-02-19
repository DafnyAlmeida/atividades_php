<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="nome">Nome do aluno:</label>
        <input type="text" name="nome" id="nome">

        <label for="nota1">Laboratório de peso 2:</label>
        <input type="number" name="nota1" id="nota1" step="any">

        <label for="nota2">Avaliação semestral de peso 3:</label>
        <input type="number" name="nota2" id="nota2" step="any">

        <label for="nota3">Exame final de peso 5:</label>
        <input type="number" name="nota3" id="nota3" step="any">

        <input type="submit" value="Calcular média">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"], $_GET["nota1"], $_GET["nota2"], $_GET["nota3"])) {

        $nome = $_GET["nome"];
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $n3 = $_GET["nota3"];

        $clas = "";

        $media = ($n1 * 2 + $n2 * 3 + $n3 * 5) / 10;

        if ($media >= 8 && $media <= 10) {
            $clas = "A";
        } elseif ($media >= 7 && $media <= 8) {
            $clas = "B";
        } elseif ($media >= 6 && $media <= 7) {
            $clas = "C";
        } elseif ($media >= 5 && $media <= 6) {
            $clas = "D";
        } elseif ($media >= 0 && $media <= 5) {
            $clas = "E";
        } else {
            echo "Valor inválido";
        }

       echo "<table>
        <tr>
            <th>Nome</th>
            <th>Nota</th>
            <th>Classificação</th>
        </tr>
        <tr>
            <td>$nome</td>
            <td>$media</td>
            <td>$clas</td>
        </tr>
    </table>";

    }


    ?>
    
</body>
</html>