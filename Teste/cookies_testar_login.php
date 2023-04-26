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


            $voltar = $_COOKIE['voltar']; 

            if($voltar == 1){
                header('Location: cookies_login.html');
                exit;
            }

            $utilizador = $_POST['utilizador'];
            $pass = $_POST['password'];
            
            if($utilizador == "12tgpsi" and $pass == "rc12"){
                $ligado = 1;
                setcookie("ligado", $ligado, time() + 3600);
                $nome = "12tgpsi";
                setcookie("nome", $nome, time() + 3600);
                header('Location: cookies_principal.php');
                exit;
            }
            else{
                $ligado = 0;
                setcookie("ligado", $ligado, time() + 3600);
                header('Location: cookies_principal.php');
                exit;
            }


        


    ?>
</body>
</html>