<?php
 require_once 'BD.php';

 function Pointage($email,$pointage){
  
    global $db;
    $date=date('d/m/Y à H:i:s');
    $req ="INSERT INTO pointage(idPointage,datePointage,Type,amail) VALUES(null,'$date','$pointage','$email')";
    return $db->exec($req);
 }
 function listPointage(){
  
   global $db;
   
   $req ="SELECT *FROM pointage";
   return $db->query($req)->fetchAll();
}
 
?> 