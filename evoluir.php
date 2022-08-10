<?php
session_start();
$id_paciente = $_REQUEST['id_paciente'];
include 'assets/controllers/cadastrarComentario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/block.js"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Evolução</title>
</head>
<body>
    <div class="container-md">
        <div class="container-lg">
            <div class="container-xl">
                <div class="container-xxl">
                    <div class="container">
                    <table class="table table-striped table-bordered table-hoverable">
                            <?= listarCabecalho($id_paciente) ?>
                    </table>
                    <form action="" method="POST">
                        <input hidden type="text" name="id_paciente" value="<?=$id_paciente?>">
                        <input hidden type="text" name="id_profissional" value="1">
                        <div class="span9">
                            <textarea required name="comentario" id="" cols="40" rows="4"></textarea>
                        </div>
                        <button name="acao" value="evoluir" class="btn btn-success">Enviar</button>
                        <a href="index.php" class="btn btn-info">Voltar</a>
                    </form>
                    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.min.js"></script>

<button class='btn' >Clique</button>
                    <table class="table table-striped table-bordered table-hoverable">
                        <thead class="thead-dark">
                            <th style="width:50px;">-</th>
                            <th><center>Área</th>
                            <th><center>Evolução</th>
                        </thead>
                        <tbody>
                            <?= listar($id_paciente) ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>