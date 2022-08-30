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
           ';
        } 

        $txtTable = $txtTable.'    
            <td>'.$func01.'</td>
            <td>'.$func02.'</td>
            <td>'.$func03.'</td>
            <td>'.$func04.'</td>
            <td>'.$func05.'</td>
            <td>'.$func06.'</td>
            <td>'.$func07.'</td>        
        </tr>';
   
    //}

    return $txtTable;
}



?>