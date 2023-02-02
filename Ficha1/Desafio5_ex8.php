<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5 - ex8</title>

</head>
<body>
    <?php
    $pais = "Portugal em Grande";

    echo "<pre>", "Portugal em Grande", "<br>";
    echo "O quarto, quinto, sexto e sétimo caracter: ", substr($pais,3,4), "<br>";
    echo "A quantidade de caracteres: " , strlen($pais), "<br>";
    echo "Converte para maiúsculas: ", strtoupper($pais), "<br>";
    echo "Converte para minúsculas: ", strtolower($pais), "<br>";
    echo "O número de palavras: ", str_word_count($pais), "<br>";
    echo "O texto escrito ao contrário: ", strrev($pais), "<br>", "</pre>";
    
    ?>
</body>
</html>