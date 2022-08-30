<?php 

function listar(){

    include './config.php';

    $sql =$pdo->prepare("SELECT * FROM agenda");
    $sql->execute();
    $hi = strtotime('h:i', '08:00');
    $inc = strtotime('h:i', '01:00');
    echo $n = $hi + $inc;

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