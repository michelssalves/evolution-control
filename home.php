<?php
session_start(); 
include 'assets/controllers/config.php';
include 'assets/controllers/cadastrarComentario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>  
    <form action="" method="get">
            <input type="text" name="id_funcionario" value="1">
           <textarea name="comentario" id="" cols="30" rows="10">

           </textarea> 
        <button name="acao" value="evoluir">Enviar</button>
    </form>
</body>
</html>