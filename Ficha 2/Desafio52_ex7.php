<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Desafio 5.2 - ex7</title>
</head>
<body>
    <?php
            $num1 = $_POST['num1'];
            $cir = M_PI * $num1 ** 2;

            echo "A área de uma circunferência de raio 8 é ", $cir;
    ?>
</body>
</html>