<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vários inputs com for</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <?php for ($i = 1; $i < 10; $i++):?>
            <?= "Nome " . $i ?>:
            <input type="text" name="nomes[]" id="nomes"> <br>
        <?php endfor; ?>

        <button type="submit">Enviar</button>
   </form>

   <?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nomes"])) {
        $nomes = $_POST["nomes"];
        foreach ($nomes as $n => $i) {
            echo "Nome ". $n + 1 .": $i";
            echo "<br>";
        }
   }
   ?>
    
</body>
</html>