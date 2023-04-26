<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo I - Sessões</title>
</head>
<body>
    <?php
            $ligado = $_COOKIE['ligado'];

            $voltar = 1;
            setcookie("volar", $voltar, time() + 3600);

            if(isset($_COOKIE['nvisitas'])) {
                $nvisitas = $_COOKIE['nvisitas'] + 1;
            }
            else{
                $nvisitas = 1;
            }

            setcookie("nvisitas", $nvisitas, time() + 3600);

            if($ligado == 1){
                $nome = $_COOKIE['nome'];
                echo "<h1>Bem vindo ", $nome, "!</h1>";
                echo "Visita Nº", $nvisitas;
                echo '<form action = "cookies_testar_login.php" method = "POST">';
                echo '<input type = "submit" value = "Terminar Sessão" name = "terminar">';
                echo '</form>';
            }
            elseif($ligado == 0){
                echo '<h1> Dados Incorretos!!! </h1>';
                echo '<form action = "cookies_testar_login.php" method = "POST">';
                echo '<input type = "submit" value = "Voltar" name = "voltar">';
                echo '</form>';
            }
    ?>
</body>
</html>