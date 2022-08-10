<?php
include 'assets/controllers/config.php';
include 'assets/controllers/functions.php';

$sql = $pdo->prepare("SELECT * FROM agenda AS a 
JOIN pacientes AS pac ON a.id_paciente = pac.id_paciente 
JOIN profissionais AS pro ON pro.id_profissional = a.id_profissional");
$sql->execute();

$eventos = [];

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $title = $row['title'];
    $color = $row['color'];
    $start = dmaHLocal($row['start']);
    $end = dmaHLocal($row['end']);
    $nome_paciente = $row['nome_paciente'];
    $id_paciente = $row['id_paciente'];
    $nome_profissional = $row['nome_profissional'];
    $id_profissional = $row['id_profissional'];

    
    $eventos[] = [
        'id' => $id, 
        'nome_paciente' => $nome_paciente, 
        'id_paciente' => $id_paciente, 
        'nome_profissional' => $nome_profissional,
        'id_profissional' => $id_profissional,
        'color' => $color, 
        'start' => $start, 
        'end' => $end,
        'title' => $title,
        ];
}

echo json_encode($eventos);