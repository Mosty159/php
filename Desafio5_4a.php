<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio5 - 4</title>
</head>
<body>
    <?php
        $nome = "Guilherme Tubal";  
        $ano_nascimento = "2005";
        $altura = "1,73";
        $solteiro = "true";

        echo "Opção 1 - Função gettype()";
        echo "<br>", gettype($nome), " ", $nome;
        echo "<br>", gettype($ano_nascimento), " ", $ano_nascimento;
        echo "<br>", gettype($altura), " ", $altura;
        echo "<br>", gettype($solteiro), " ", $solteiro; 

        echo "<br>", "<br>", "<br>" ,"Opção 2 - Função var_dump()";
        echo "<br>", var_dump($nome);
        echo "<br>", var_dump($ano_nascimento);
        echo "<br>", var_dump($altura);
        echo "<br>", var_dump($solteiro);

        $nome = "Guilherme Tubal";  
        $ano_nascimento = 2005;
        $altura = 1.73;
        $solteiro = true;

        echo "<br>", "<br>";
        echo "Opção 1 - Função gettype()";
        echo "<br>", gettype($nome), " ", $nome;
        echo "<br>", gettype($ano_nascimento), " ", $ano_nascimento;
        echo "<br>", gettype($altura), " ", $altura;
        echo "<br>", gettype($solteiro), " ", $solteiro; 

        echo "<br>", "<br>", "<br>" ,"Opção 2 - Função var_dump()";
        echo "<br>", var_dump($nome);
        echo "<br>", var_dump($ano_nascimento);
        echo "<br>", var_dump($altura);
        echo "<br>", var_dump($solteiro);
    ?>
</body>
</html>