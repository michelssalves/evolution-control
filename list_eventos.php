<?php
include 'assets/controllers/config.php';

$sql = $pdo->prepare("SELECT * FROM agenda");
$sql->execute();

$eventos = [];

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id_agenda = $row['id'];
    $titulo = $row['title'];
    $cor = $row['color'];
    $inicio = $row['start'];
    $fim = $row['end'];
    
    $eventos[] = [
        'id_agenda' => $id_agenda, 
        'titulo' => $titulo, 
        'cor' => $cor, 
        'inicio' => $inicio, 
        'fim' => $fim, 
        ];
}

echo json_encode($eventos);