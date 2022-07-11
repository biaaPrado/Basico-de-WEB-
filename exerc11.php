<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 11 - PHP </title>
        <link rel="stylesheet" type="text/css" href="exerc11.css" />
        <link rel="icon" href="Imagens/logoEscola.png" >
    </head>
    <body>
        <?php
            $ra = $_POST[dia].$_POST[ano].$_POST[ddd];
            $nome = $_POST[nomeAluno];
            $serie = $_POST[série];
            $turno = $_POST[turno];

            echo "<h1 class ='titulo' > Seu Cadastro foi salvo com sucesso! </h1> <hr>"; 
            echo "<label class = 'conteudo' > Aluno Cadastrado ".$nome." </label>";  
            echo "<label class = 'conteudo' >Cursando o ".$serie. " no período da ".$turno."</label>";
            echo "<label class = 'conteudo' >Registro Escolar do Aluno (RA): " .$ra. "</label>";
        ?>
    </body> 
</html>