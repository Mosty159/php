<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE1</title>
</head>
<body>
    <table border="2" bordercolor="red" align="center" width="10%">
        <?php

            if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
    



            $num1 = $_POST['num1'];

            for($i = 1; $i <= 10; $i++){
                echo "<tr>";
                echo "<td align = \center\>", $i, "</td>";
                echo "<td align = \center\>", $num1 + $i, "</td>";
                echo "</tr>";
            }
            }else {
           echo "O valor não é um número"
            }
        ?>
    </table>
    
    <div align="center">
        <p><Form action = "EXE1.html" method="POST">   
            <input type="submit" value = "Continuar" algin="center">
        </Form></p>
    </div>
</body>
</html>