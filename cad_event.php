<?php
session_start();

include_once 'assets/controllers/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/', '-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));
$data_end = str_replace('/', '-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));


$sql = $pdo->prepare("INSERT INTO agenda (title, color, start, end, id_paciente, id_profissional) VALUES (:title, :color, :start, :end, :id_paciente, :id_profissional)");
$sql->bindParam(':title', $dados['title']);
$sql->bindParam(':color', $dados['color']);
$sql->bindParam(':start', $data_start_conv);
$sql->bindParam(':end', $data_end_conv);
$sql->bindParam(':id_paciente', $dados['id_paciente']);
$sql->bindParam(':id_profissional', $dados['id_profissional']);
$sql->execute();

if ($sql) {
    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro: Evento não foi cadastrado com sucesso!</div>'];
}

header('Content-Type: application/json');
echo json_encode($retorna);
