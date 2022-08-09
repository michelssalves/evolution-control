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