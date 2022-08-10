<?php

$acao = $_REQUEST['acao'];

include 'config.php';

if($acao =='evoluir'){

        $id_profissional = $_REQUEST['id_profissional'];
        $comentario = $_REQUEST['comentario'];
        $id_paciente = $_REQUEST['id_paciente'];

        $sql = $pdo->prepare("INSERT INTO comentarios (id_profissional, id_paciente, comentario, data_hora) VALUES (:id_profissional, :id_paciente, :comentario, NOW())");
        $sql->bindValue(':id_profissional', $id_profissional);
        $sql->bindValue(':comentario', $comentario);
        $sql->bindValue(':id_paciente', $id_paciente);
        $sql->execute();

}

function listar($id_paciente){

   // $id_paciente = $_REQUEST['id_paciente'];

    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM comentarios AS c
    JOIN profissionais AS p
    ON p.id_profissional = c.id_profissional
    WHERE id_paciente = :id_paciente
    ORDER BY c.data_hora DESC
    ");
    $sql->bindValue(':id_paciente', $id_paciente);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {

        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       
         foreach($lista as $row){
            $txtTable = $txtTable.'<tr>
            <td><img src="assets/img/profissionais/'.$row['id_profissional'].'.jpg" style="width:50px; height:50px"></td>
            <td><center> '.$row['funcao'].'</td>
            <td><center> '.$row['comentario'].' </td>
            <tr>';
            
        }
    }
        return $txtTable;   
}
function listarCabecalho($id_paciente){

    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM pacientes WHERE id_paciente = :id_paciente");
    $sql->bindValue(':id_paciente', $id_paciente);
    $sql->execute();

    if ($sql->rowCount() > 0) {

        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       
         foreach($lista as $row){

            $txtTable = $txtTable.'<tr>
            <th rowspan="8"><center><img style="width:150px; height:150px" src="assets/img/pacientes/'.$row['id_paciente'].'.jpg" alt=""></th>
            <th><center>PACIENTE</th>
            <th><center>TIPO</th>
            <th><center>IDADE</th>
            </tr>
            <th><center>'.$row['nome_paciente'].'</th>
            <th><center>Espectro Altista</th>
            <th><center>5</th>
            ';
        }
    }
    return $txtTable; 
   
}
function listarAgenda(){

    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM horarios AS h");
    $sql->execute();

if ($sql->rowCount() > 0) {

    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
   
     foreach($lista as $row){
        $txtTable = $txtTable.'<tr>
        <td><center>'.$row['horarios'].'</td>
        <tr>';
        
    }
}
    return $txtTable; 


}