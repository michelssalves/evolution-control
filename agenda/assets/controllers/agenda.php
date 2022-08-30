<?php 

function listar(){

    include './config.php';

    $sql =$pdo->prepare("SELECT * FROM agenda");
    $sql->execute();
    
    $hi = $hi->format('08:00');
    $inc = $inc->format('01:00');

    echo $n = $hi + $inc;
    echo 'amor';
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