<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números em um intervalo</title>
</head>
<body>
    <?php 
    $lista = [20, 150, 89, 56, 44, 90, 100, 34];
    $no_intervalo = [];
    $contador = 0;

    foreach ($lista as $n) {
        if ($n >= 80 && $n <= 150) {
            $no_intervalo[] = $n;
            $contador++;
        }
    }

    echo "Dentro dessa lista existem $contador números entre 80 e 150 sendo eles: <br>";
    print_r($no_intervalo);
    ?>
</body>
</html>