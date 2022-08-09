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

    <form action="" method="POST">
            <input hidden type="text" name="id_funcionario" value="1">
           <textarea name="comentario" id="" cols="60" rows="4">

           </textarea> 
        <button name="acao" value="evoluir">Enviar</button>
    </form>
    <table id="t1" class="w3-table w3-table-all sortable " border="1">
        <thead class="thead-dark sorttable">
            <th>Funcionario</th>
            <th>Evolucao</th>
        </thead>
        <tbody>
            <?= listar() ?>
        </tbody>
    </table>
</body>
</html>