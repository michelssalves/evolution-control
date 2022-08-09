<?php
include 'assets/controllers/config.php';

$sql = $pdo->prepare("SELECT * FROM agenda AS a 
JOIN pacientes AS pac ON a.id_paciente = pac.id_paciente 
JOIN profissionais AS pro ON pro.id_profissional = a.id_profissional");
$sql->execute();

$eventos = [];

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $title = $row['nome_paciente'];
    $color = $row['color'];
    $start = $row['start'];
    $end = $row['end'];
    $nome_profissional = $row['nome_profissional'];
    
    $eventos[] = [
        'id' => $id, 
        'nome_paciente' => $title, 
        'color' => $color, 
        'start' => $start, 
        'end' => $end,
        'title' => $nome_paciente,
        'nome_profissional' => $nome_profissional,
        ];
}

echo json_encode($eventos);