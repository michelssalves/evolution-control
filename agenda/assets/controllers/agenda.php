<?php 
    include 'config.php';

    $sql = $pdo->prepare("SELECT * FROM agenda2");
    
    $sql->execute();
    $hora = '07:15';
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    var_dump($row);
        for($x=0; $x<=13; $x++){

        $hora =  date('H:i', strtotime('+45 minute', strtotime($hora)));
          
        if($hora != '12:30'){    
        $txtTable = $txtTable.'<tr>
            <td>'.$hora.'</td>
            <td>'.$row[$x] = true ? $row['f1'] : '' .'</td>
            <td>'.$row[$x] = true ? $row['f2'] : ''.'</td>
            <td>'.$row[$x] = true ? $row['f3'] : ''.'</td>
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

      





?>