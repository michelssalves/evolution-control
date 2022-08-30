<?php 

function listar(){

    include './config.php';

    //$sql =$pdo->prepare("SELECT * FROM agenda");
   // $sql->execute();
    $hora = '07:15';

    //while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        for($x=0; $x<5; $x++){
        $hora =  date('H:i', strtotime('+45 minute', strtotime($hora)));

        $txtTable = $txtTable.'<tr>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>
            <td>'.$hora.'</td>        
        </tr>';
    } 
    //}

    return $txtTable;
}



?>