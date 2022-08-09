<?php

$acao = $_REQUEST['acao'];

if($acao =='evoluir'){


    $id_funcionario = $_REQUEST['id_funcionario'];
    $comentario = $_REQUEST['comentario'];


        $sql = $pdo->prepare("INSERT INTO comentarios (id_funcionario, comentario) VALUES (:id_funcionario, :comentario)");
        $sql->bindValue(':id_funcionario', $id_funcionario);
        $sql->bindValue(':comentario', $comentario);
        $sql->execute();

}


function listar(){

    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM comentarios");
    $sql->execute();
    
    if ($sql->rowCount() > 0) {

        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       
         foreach($lista as $row){
            $txtTable = $txtTable.'<tr>
            <td class="w3-left-align" > '.$row['id_funcionario'].'</td>
            <td> '.$row['comentario'].' </td>
            <tr>';
            
        }
    }
        return $txtTable;   

}