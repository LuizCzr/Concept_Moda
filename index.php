<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept Moda</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
 
<?php

    include_once("paginas/topo.php");
    include_once("paginas/menu.php");

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "conteudo.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("paginas/rodape.php");

?>

</body>
</html>