<?php
    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO contatos
    (nome, email, assunto, mensagem) 
    VALUES 
    ('$nome','$email','$assunto','$mensagem')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<script>
                alert('Mensagem enviada com sucesso!');
                window.location.href='index.php?pg=faleconosco';
              </script>";
    }else{
        echo "<script>
                alert('Erro ao enviar mensagem.');
                window.location.href='index.php?pg=faleconosco';
              </script>";
    }

    mysqli_close($conexao);
?>