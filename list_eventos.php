<?php
include 'assets/controllers/config.php';

$sql = $pdo->prepare("SELECT * FROM agenda");
$sql->execute();

$eventos = [];

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $title = $row['title'];
    $color = $row['color'];
    $start = $row['start'];
    $end = $row['end'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $title, 
        'color' => $color, 
        'start' => $start, 
        'end' => $end,
        ];
}

echo json_encode($eventos);