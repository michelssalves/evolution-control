<?php
$acao = $_REQUEST['acao'];

if($acao =='evoluir'){

    $id_funcionario = $_REQUEST['id_funcionario'];
    $comentario = $_REQUEST['comentario'];

    registrarComentario($id_funcionario, $comentario);

}
function registrarComentario($id_funcionario, $comentario){

    include 'config.php';

    $id_funcionario = $_POST['id_funcionario'];
    $comentario = $_POST['comentario'];

        $sql = $pdo->prepare("INSERT INTO comentarios (id_funcionario, comentario) VALUES (:id_funcionario, :comentario)");
        $sql->bindValue(':id_funcionario', $id_funcionario);
        $sql->bindValue(':comentario', $comentario);

} 