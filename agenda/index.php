<?php 
include './assets/controllers/config';
include './assets/controllers/agenda.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">T.0 IS - Fer</th>
      <th scope="col">T.0 A - Mayumi</th>
      <th scope="col">Psico - Raiane</th>
      <th scope="col">Fono - Debora</th>
      <th scope="col">Fono</th>
      <th scope="col">T.O - Aline</th>
      <th scope="col">Psico - Raiane</th>
    </tr>
  </thead>
  <tbody>
        <?= listar() ?>
  </tbody>
</table>
</body>
</html>