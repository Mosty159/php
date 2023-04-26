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
        session_start();

            $_SESSION['voltar'] = 1;

            if($_SESSION['ligado'] == 1){
                echo "<h1>Bem vindo ", $_SESSION['nome'], "!</h1>";
                echo '<form action = "sessao_testar_login.php" method = "POST">';
                echo '<input type = "submit" value = "Terminar Sessão" name = "terminar">';
                echo '</form>';
            }
            elseif($_SESSION['ligado'] == 0){
                echo '<h1> Dados Incorretos!!! </h1>';
                echo '<form action = "sessao_testar_login.php" method = "POST">';
                echo '<input type = "submit" value = "Voltar" name = "voltar">';
                echo '</form>';
            }
    ?>
</body>
</html>