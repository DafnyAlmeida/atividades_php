<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual a categoria?</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">

        <label for="grupo">Grupo:</label>
        <input type="number" name="grupo" id="grupo" min="1" max="3">

        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"], $_GET["idade"], $_GET["grupo"])) {

        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $grupo = $_GET["grupo"];

        if ($idade < 17 || $idade > 70) {
            echo "Idade inválida";
        } else {
            if ($idade <= 20) {
                $categoria = $grupo;
            } elseif ($idade <= 24) {
                $categoria = $grupo + 1;
            } elseif ($idade <= 34) {
                $categoria = $grupo + 2;
            } elseif ($idade <= 64) {
                $categoria = $grupo + 3;
            } elseif ($idade <= 70) {
                $categoria = $grupo + 6;
            }
        }

        echo "O individuo $nome tem $idade anos, pertence ao grupo $grupo e está na categoria $categotia";
    }

    ?>
    
</body>
</html>