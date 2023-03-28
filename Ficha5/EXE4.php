<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE4</title>
</head>
<body>
    <?php
            $aux = 1;
            $notas = array(10.5, 14, 13.5, 7, 16.33);
            $i = 0;
            $cnt = 0;
            $ct = 0;

            echo "<h2> As minha classificações 2019/2020: </h2>";
            foreach($notas as $i){
                echo $i ,"&nbsp&nbsp ";
            }
            
            $aux = array_sum($notas) / count($notas);
            
            echo "<br><br>";
            echo "A média é ", $aux;

            echo "<br><br>";

            foreach($notas as $i){
                if($i >= 10){
                    $cnt++;
                }
            }

            echo "Tive ", $cnt, " nota(s) positiva(s): ";

            foreach($notas as $i){
                if($i >= 10){
                    echo $i, " &nbsp ";
                }
            }
            
            echo "<br><br>";

            foreach($notas as $i){
                if($i < 10){
                    $ct++;
                }
            }

            echo "Tive ", $ct, " nota(s) positiva(s): ";

            foreach($notas as $i){
                if($i < 10){
                    echo $i, " &nbsp ";
                }
            }
    ?>
</body>
</html>