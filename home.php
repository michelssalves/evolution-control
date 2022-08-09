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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    
   
    <title>Document</title>
</head>
<body>  
<div class="container-md">
        <div class="container-lg">
            <div class="container-xl">
                <div class="container-xxl">    
    <form action="" method="POST">
        <input hidden type="text" name="id_funcionario" value="1">
        <table class="table table-striped table-bordered table-hoverable">
        <tr>
            <th>

            <textarea name="comentario" id="" cols="40" rows="4">

</textarea> 
            </th>
        </tr>

           </table>
        <button name="acao" value="evoluir">Enviar</button>
    </form>
    <table class="table table-striped table-bordered table-hoverable">
            <thead class="thead-dark">
            <th style="width:50px;">-</th>
            <th>Área</th>
            <th>Evolução</th>
        </thead>
        <tbody>
            <?= listar() ?>
        </tbody>
    </table>
                </div>    </div>   </div>   </div>   
</body>
</html>