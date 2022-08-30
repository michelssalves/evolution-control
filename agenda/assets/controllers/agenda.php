<?php 

function listar(){

    include './config.php';

    $sql =$pdo->prepare("SELECT * FROM agenda");
    $sql->execute();
    

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