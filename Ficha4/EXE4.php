<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE4</title>
</head>
<body>


    <form action="" method = "POST">

        <?php
            if (!isset($_POST['Mostrar'])) {

                $dia = 1;
                $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                $ano = 1980;


                echo 'Dia: <select name="dia">';
                for ($a1 = 0; $a1 < 31; $a1++){ 
                echo '<option value="', $dia, '">', $dia, '</option>';
                $dia++;
                }
                echo '</select><br><br>';


                echo 'Mês: <select name="meses">';
                for ($a2 = 0; $a2 < count($meses); $a2++){
                echo '<option value="', $meses[$a2], '">', $meses[$a2], '</option>';
                }
                echo '</select><br><br>';


                echo 'Ano: <select name="ano">';
                for ($a3 = 1980; $a3 <= 2023; $a3++){
                echo '<option value="', $ano, '">', $ano, '</option>';
                $ano++;
                }
                echo '</select><br><br>';
                echo '<input type="submit" name ="Mostrar" value ="Mostrar">';
            }
            else{

                $diaa = $_POST['dia'];
                $mes = $_POST['meses'];
                $anoo = $_POST['ano'];
                echo "Foi escolhido o dia $diaa do mês de $mes do ano de $anoo <br><br>";
                echo '<input type="submit" name ="Voltar" value ="Voltar">';
            }
        ?>


    </form>

</body>
</html>