<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE5</title>
</head>
<body>
    <Form action = "<?php echo $_SERVER['PHP_SELF']?>" method="POST">

        <?php

            $turma = array(
                        'Nome' => array('Ana' => 'Ana', 'Bruna' => 'Bruna', 'Catarina' => 'Catarina', 'Matilde' =>'Matilde' , 'Bianca' => 'Bianca', 'Maia' => 'Maia'),
                        'Idade' => array('Ana' => 21, 'Bruna' => 15, 'Catarina' => 18 , 'Matilde' => 17, 'Bianca' => 16, 'Maia' => 20),
                        'Morada' => array('Ana' => 'Tavira', 'Bruna' => 'Cabanas', 'Catarina' => 'Cacela' , 'Matilde' => 'Tavira', 'Bianca' => 'Fuseta', 'Maia' => 'Olhão') );


            if(!isset($_POST['Procurar'])){
            
                    echo '<table border="2" bordercolor="black" align="center" width="10%">';
                        echo "<br>";
                        foreach($turma as $campos => $valores){
                            echo "<tr>";
                            echo "<td align = \center\> <h4>", $campos, "<h4> </td>";
                                foreach($valores as $chave => $conteudo){
                                
                                    echo "<td align = \center\>", $conteudo, "</td>";
                                    
                                }
                    echo "</tr>";  
                    }

                    echo "</table>";

                    echo "<h3> Alunos que são menores de idade: </h3>  ";
                    foreach($turma['Nome'] as $chave => $conteudo){
                        if($turma['Idade'][$chave] < 18){
                            echo $turma['Nome'][$chave], " - ", $turma['Idade'][$chave], " anos <br>";
                        }
                    }

                    echo "<br> <br> ";

                    echo "Selecione o aluno que quer procurar: ";
                    echo '<input type="text" name="nome" required> <br> <br>';
                    echo '<input type="submit" name = "Procurar" value = "Procurar">';
            }
            else{

                $nome = $_POST['nome'];

                foreach($turma['Nome'] as $chave => $conteudo){
                        if($nome == $chave){
                            echo "Nome -  ", $turma['Nome'][$chave] , "<br>";
                            echo "Idade -  ", $turma['Idade'][$chave] , "<br>";
                            echo "Morada -  ", $turma['Morada'][$chave] , "<br> <br> ";
                        }
                }
                
                echo '<input type="submit" name = "Voltar" value="Voltar">';
            }

        ?>
        
    </Form>
</body>
</html>