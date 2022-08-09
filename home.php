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
    <script src="assets/js/block.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <title>Evolução</title>
</head>
<body>
    <div class="container-md">
        <div class="container-lg">
            <div class="container-xl">
                <div class="container-xxl">
                    <table class="table table-striped table-bordered table-hoverable">
                        <thead class="thead-dark">
                            <th rowspan="2"><center><img style="width:150px; height:150px" src="assets/img/4.jpg" alt=""></th>
                            <tr>
                            <th><center>Paciente</th>
                            </tr>
                            <tr>
                            <th><center>REFAELE YAEDA SCABIA ALVES</th>
                            </tr>
                        </thead>
                    </table>
                    <form action="" method="POST">
                        <input hidden type="text" name="id_profissional" value="1">
                        <div class="span9">
                            <textarea name="comentario" id="" cols="40" rows="4"></textarea>
                        </div>
                        <button name="acao" value="evoluir">Enviar</button>
                    </form>
                    <table class="table table-striped table-bordered table-hoverable">
                        <thead class="thead-dark">
                            <th style="width:50px;">-</th>
                            <th><center>Área</th>
                            <th><center>Evolução</th>
                        </thead>
                        <tbody>
                            <?= listar() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>