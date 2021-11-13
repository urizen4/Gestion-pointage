<?php
require_once 'BD.php';
function addEmploye($nom,$prenom,$mail,$adresse,$telephone,$service){
  
    global $db;
    $req ="INSERT INTO employe(idEmployer,nom,prenom,mail,adresse,telephone,idServ) VALUES(null,'$nom','$prenom','$mail','$adresse','$telephone','$service')";
    return $db->exec($req);
 }

 function listEmploye()
 {
     global $db;
     $req = "SELECT *FROM employe,service WHERE idServ = idService";
     return $db->query($req)->fetchAll();
 }
 
?> 