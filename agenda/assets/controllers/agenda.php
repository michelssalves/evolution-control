<?php 

function listar(){

    include './config.php';

    $sql = $pdo->prepare("SELECT * FROM agenda WHERE data_agendamento = $data_agendamento");
    $sql->execute();
    $hora = '07:15';
    //while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        for($x=0; $x<=13; $x++){
        $hora =  date('H:i', strtotime('+45 minute', strtotime($hora)));
          /* <td>'.$func01 = true ? '2': '0'.'</td> */
        if($hora != '12:30'){    
        $txtTable = $txtTable.'<tr>
            <td>'.$hora.'</td>
            <td>'.$func02.'</td>
            <td>'.$func02.'</td>
            <td>'.$func03.'</td>
            <td>'.$func04.'</td>
            <td>'.$func05.'</td>
            <td>'.$func06.'</td>
            <td>'.$func07.'</td>        
        </tr>';
        }else{
            $txtTable = $txtTable.'<tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>        
        </tr>'; 
        $hora = '12:45';
        }
    } 
    //}
      
    return $txtTable;
}



?>