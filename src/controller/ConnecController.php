<?php
 require_once '../model/BD.php';
 require_once '../model/AdminBD.php';
 
 if (isset($_POST['btnConnect'])) {
    extract($_POST);
      if (SeConnecter($login,$motDepasse)!=null) {
       header('location:/Pointage1/accueil.php');
       }else{
        header('location:/Pointage1/errorConnexion.php');
    }
 }
 ?> 