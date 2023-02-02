<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafi0 5 - ex9</title>
</head>
<body>
    <?php

    $frase = "Estou a aprender a programar em Java";

    echo "Frase original: ", $frase, "<br>";
    echo "Frase alterada: ", str_replace("Java","PHP",$frase), "<br>";
    echo "Frase invertida: ", strrev(str_replace("Java","PHP",$frase)), "<br>";


    ?>
</body>
</html>