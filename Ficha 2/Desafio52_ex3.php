<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5.2 - ex3</title>
</head>
<body>

    <?php
        if(!$_GET)
        {
    ?>
        <Form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
            Primeiro nº: <input type="text" name="a"> <br>
            Segundo nº: <input type="text" name="b"> <br>
                        <input type="submit" value = "Calcular">
        </Form>

    <?php
        }
        else{

            $a = $_GET['a'];
            $b = $_GET['b'];

            echo $a ," + ", $b, " = " ,$a + $b;
        }
    ?>
</body>
</html>