<?php
 require_once '../model/BD.php';
 require_once '../model/PointageBD.php';
 include_once '../../header.php';
 include_once '../../footer.php';

 if(isset($_POST['btnValider'])){
    extract($_POST);
    $req = "SELECT *FROM employe  WHERE mail = '$email'";
    $reponse=$db->query($req)->fetch();
    //Pointage($email,$poinatge);
    //var_dump(Pointage($email,$poinatge));
     //Pointage($email,$pointage);
    if($reponse!=null){
        $reponse=Pointage($email,$pointage);
        if($reponse!=null)
        {
          echo '<div class="cyan-text center" id="succes"> <h4>Employe pointé avec succés</h4></div>';
        }else{
           header('location:/Pointage1/error.php');
           }
        }
        else{
           header('location:/Pointage1/error.php');
        }  
    }
 ?> 
 <br>
 <br>
<div class="center">
   <a href="../../index.php" class="btn cyan pulse">PRECEDENT</a>
</div> 

 <script type="text/javascript">
  setTimeout(() => {
    $(document).ready(function(){
        $("#succes").slideUp();
    });
 }, 4000);
  
</script>