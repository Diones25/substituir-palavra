<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Substituidor</h1>
    <form method="post">
        Frase: <br>
        <input type="text" name="frase" id=""><br>
        Procurar por: <br>
        <input type="text" name="procurar" id=""><br>
        Trocar por: <br>
        <input type="text" name="troca" id=""><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST['frase']) && empty($_POST['frase']) == false){
            $frase = $_POST['frase'];
            $proc = $_POST['procurar'];
            $troca = $_POST['troca'];

            $subs = str_replace($proc, $troca, $frase);

            echo "<br> Frase: ".$frase."<br>";
            echo "Nova Frase: ".$subs;
        }

    ?>
</body>
</html>