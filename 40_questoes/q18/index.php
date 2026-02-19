<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade de 75 pessoas</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <?php for ($i = 1; $i < 76; $i++):?>
            <?= "Idade:" . $i ?>:
            <input type="number" name="idades[]" id="idades"> <br>
        <?php endfor; ?>

        <button type="submit">Enviar</button>
   </form>
    
    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["idades"])) {
            $idades = $_POST["idades"];

            foreach ($idades as $i => $idade) {
                if ($idade >= 18) {
                    echo "Pessoa $i é maior de idade";
                } else {
                    echo "Pessoa $i é menor de idade";
                }
            }
        }
    ?>
    
</body>
</html>