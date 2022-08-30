<?php 

function listar(){

    include './config.php';

    $sql =$pdo->prepare("SELECT * FROM agenda");
    $sql->execute();
    $hi = '08:00';
    $inc = '00:00';

    while($row = $sql->fetch(PDO::FETCH_ASSOC)){

        $hia = $hi+$inc;

        $txtTable = $txtTable.'<tr>
            <td>'.$hia.'</td>
        
        </tr>';
        
        $inc = '00:45';
        $hi = $hia;
    }

    return $txtTable;
}



?>