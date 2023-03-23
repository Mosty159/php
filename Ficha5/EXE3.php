<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE3</title>
</head>
<?php

    $cores = array('Green' => 'Verde', 'Red' => 'Vermelho', 'Yellow' => 'Amarelo', 'Blue' => 'Azul');   

    if(!$_POST){
        echo '<body>';
            echo '<Form action = "', $_SERVER['PHP_SELF'], '" method="POST">';
                echo '<h3>Cor de fundo: </h3>';
                echo '<select name = "cor">';
                    foreach($cores as $cor_in => $cor_pt){
                        echo '<option value= "' , $cor_in ,'">' , $cor_pt , '</option>';
                    }
                echo '</select><br><br>';

                echo '<input type="submit" value="Aplicar">';
            echo '</Form>';
        echo '</body>';
    }
    else{
        echo'<body bgcolor = "', $_POST['cor'], '">';
        
            echo "<h3>Foi escolhido a cor " ,$cores[$_POST['cor']], "</h3>"  ;

        echo '</body>';
    }
?>
</html>