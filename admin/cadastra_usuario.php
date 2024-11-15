<?php

    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];
    $telefone = $_REQUEST['telefone'];

    $sql = "INSERT INTO usuarios
    (nome, email, usuario, senha, telefone) 
    VALUES 
    ('$nome','$email', '$usuario','$senha', '$telefone')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2> Cadastro realizado com sucesso!.</h2>";
    }else{
        echo "<h2> Não foi possível realizar o cadastro!.</h2>";
    }

    mysqli_close($conexao);