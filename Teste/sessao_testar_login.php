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

            if($_SESSION['voltar'] == 1){
                session_destroy();
                header('Location: sessao_login.html');
                exit;
            }

            $utilizador = $_POST['utilizador'];
            $pass = $_POST['password'];
            
            if($utilizador == "12tgpsi" and $pass == "rc12"){
                $_SESSION['ligado'] = 1;
                $_SESSION['nome'] = "12tgpsi";
                header('Location: sessao_principal.php');
                exit;
            }
            else{
                $_SESSION['ligado'] = 0;
                header('Location: sessao_principal.php');
                exit;
            }


        


    ?>
</body>
</html>