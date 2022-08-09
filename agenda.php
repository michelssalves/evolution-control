<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
</head>
<body>
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
                            <th><center>Horarios</th>
                            <th><center>T.O IS-Fer</th>
                            <th><center>T.O A-Mayumi</th>
                            <th><center>Psico-Raiane</th>
                            <th><center>Fono-Debora</th>
                            <th><center>Fono</th>
                            <th><center>T.O - Aline</th>
                        </thead>
                        <tbody>
                            <?= listarAgenda() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>