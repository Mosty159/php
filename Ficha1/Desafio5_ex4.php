<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5 - ex4</title>
</head>
<body>
    <?php

    $a = 23;
    $b = 45;
    $c = 68;
    $media = $a + $b + $c;
    $media = $media / 3;

    settype($media, "int");
    

    echo "A média de ", $a, " , " , $b, " e ", $c, " é ", $media;

    ?>
</body>
</html>