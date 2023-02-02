<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5 - ex6</title>
</head>
<body>
    <?php
    
    $S_iva = 78;
    $iva = $S_iva * 0.23;
    $total = $S_iva + $iva;

    echo "<pre>", "Valor sem IVA = ", $S_iva, "€", "<br>";
    echo "IVA = ", $iva , "€", "<br>";
    echo "Valor final da reparação (Valor sem IVA + IVA) = ", $total, "€";

    ?>
</body>
</html>