<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE2</title>
</head>
<body>
    <?php
        
        $meses = array('Janeiro' => 31, 'Fevereiro' => 28, 'Março' => 31, 'Abril' => 30, 'Maio' => 31, 'Junho' => 30, 'Julho' => 31, 'Agosto' => 31, 'Setembro' => 30, 'Outobro' => 31, 'Novembro' => 30, 'Dezembro' => 31);
        $aux = 0;

        echo "<h3> Meses que não tem 31 dias: </h3>";
        foreach($meses as $x => $y){
            if($y != 31){
                echo "- ", $x, "<br>";
                $aux++;
            }
        }

        echo "<h3> $aux meses não tem 31 dias: </h3>"
    ?>
</body>
</html>