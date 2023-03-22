<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE1</title>
</head>
<body>
    <?php
        $aux = 1;
        $num = array(23, 10, 8, 7, 14);

        echo "<h3> Os valores do array são: </h3>";
        print_r($num);
        echo "<br>";

        echo "<h3> O terceiro valor do array é: </h3>";
        echo $num[2];
        echo "<br>";

        $num[] = 99;
        sort($num);
        $cont = count($num);

        echo "<h3> Os valores do array são: </h3>";
        for($i = 0; $i < $cont; $i++){
            
                echo $num[$i], " , ";
            }
        echo "<br>";
        
        $soma = array_sum($num);

        echo "<h3> A soma dos valores do array é: </h3>";
        echo $soma;

    ?>
</body>
</html>