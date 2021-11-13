<?php
 require_once '../model/BD.php';
 require_once '../model/EmployerBD.php';
 include_once '../../header.php';
 include_once '../../footer.php';
$id=0;
$Nom='';
$Prenom='';
$Email='';
$Adresse='';
$Telephone='';
$Service='';

 if(isset($_POST['btnAjouter'])){
    extract($_POST);
        $reponse=addEmploye($nom,$prenom,$mail,$adresse,$telephone,$service);
        if($reponse!=null)
        {
          echo '<div class="cyan-text center" id="succes"> <h4>Employe Ajouté avec succés</h4></div>';
        }else{
            echo "<div class='red-text center' id='error'> <h4>Erreur d'ajout </h4></div>";
           }
    }
  if(isset($_GET['editer']))
          {
          $idEmp = $_GET['editer'];
          $req="SELECT *FROM employe,service WHERE idServ = idService AND idEmployer = $idEmp";
           $E=$db->query($req)->fetch();
            $id=$E['idEmployer'];
            $Nom=$E['nom'];
            $Prenom=$E['prenom'];
            $Email=$E['mail'];
            $Adresse=$E['adresse'];
            $Telephone=$E['telephone'];
                    //$Service=$E[''];
                     }
          if(isset($_POST['btnModifier']))
        {
              global $db;
               //$idEmp = $_GET['editer'];
              extract($_POST);
              $mySql=$db->exec("UPDATE `employe` SET `nom` = '$nom', `prenom`= '$prenom',
                `mail` = '$mail', `adresse` = '$adresse',`telephone`= $telephone WHERE idEmployer= 23");
                if($mySql!=null)
        {
          echo '<div class="cyan-text center" id="succes"> <h4>Employe Modifier avec succés</h4></div>';
        }else{
            echo "<div class='red-text center' id='error'> <h4>Erreur de Modication </h4></div>";
           }
    }

       
 ?> 
 <br>
 <br>
 <br>
 <br>
 <div class="center">
   <a href="../views/employes/listEmployes.php"
    class="btn cyan pulse">PRECEDENT</a>
</div> 
 <script type="text/javascript">
  setTimeout(() => {
    $(document).ready(function(){
        $("#succes").slideUp();
        $("#error").slideUp();
    });
 }, 4000);
  
// 
</script>
