<?php
include 'assets/controllers/config.php';

$sql = $pdo->prepare("SELECT id_agenda, titulo, cor, inicio, fim FROM agenda");
$sql->execute();

$eventos = [];

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id_agenda = $row['id_agenda'];
    $titulo = $row['titulo'];
    $cor = $row['cor'];
    $inicio = $row['inicio'];
    $fim = $row['fim'];
    
    $eventos[] = [
        'id_agenda' => $id_agenda, 
        'titulo' => $titulo, 
        'cor' => $cor, 
        'inicio' => $inicio, 
        'fim' => $fim, 
        ];
}

echo json_encode($eventos);