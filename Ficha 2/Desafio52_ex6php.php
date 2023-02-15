<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5.2 - ex6</title>
</head>
<body>
    <?php
    
            $S_iva = $_POST['S_iva'];
            $iva = $S_iva * 0.23;
            $total = $S_iva + $iva;

            echo "<pre>", "Valor sem IVA = ", $S_iva, "€", "<br>";
            echo "IVA = ", $iva , "€", "<br>";
            echo "Valor final da reparação (Valor sem IVA + IVA) = ", $total, "€";

    ?>
</body>
</html>