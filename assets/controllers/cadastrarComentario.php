<?php

$acao = $_REQUEST['acao'];

if($acao =='evoluir'){

    $id_profissional = $_REQUEST['id_profissional'];
    $comentario = $_REQUEST['comentario'];

        $sql = $pdo->prepare("INSERT INTO comentarios (id_profissional, comentario, data_hora) VALUES (:id_profissional, :comentario, NOW())");
        $sql->bindValue(':id_profissional', $id_profissional);
        $sql->bindValue(':comentario', $comentario);
        var_dump($sql);
        $sql->execute();

}

function listar(){

    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM comentarios AS c
    JOIN profissionais AS p
    ON p.id_profissional = c.id_profissional
    ORDER BY c.data_hora DESC
    ");
    $sql->execute();
    
    if ($sql->rowCount() > 0) {

        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       
         foreach($lista as $row){
            $txtTable = $txtTable.'<tr>
            <td><img src="assets/img/'.$row['id_profissional'].'.jpg" style="width:50px; height:50px"></td>
            <td><center> '.$row['funcao'].'</td>
            <td><center> '.$row['comentario'].' </td>
            <tr>';
            
        }
    }
        return $txtTable;   

        

}