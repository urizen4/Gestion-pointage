<?php
require_once '../../../header.php';
//require_once '../../../footer.php';
require_once '../../model/ServiceBD.php';
require_once '../../model/EmployerBD.php';
$employe=listEmploye();
$service = Service();
 $id=0;
 $Nom='';
 $Prenom='';
 $Email='';
 $Adresse='';
 $Telephone='';
 $Service='';
  if(isset($_GET['editer']))
          {
          $idEmp = $_GET['editer'];
          $req="SELECT *FROM employe,service WHERE idServ = idService AND idEmployer = $idEmp";
           $E=$db->query($req)->fetch();
            $Nom=$E['nom'];
            $Prenom=$E['prenom'];
            $Email=$E['mail'];
            $Adresse=$E['adresse'];
            $Telephone=$E['telephone'];
            //$Service=$E[''];
          //    if (isset($_POST['btnModifier'])) {
          //     extract($_POST);
          //     $req="UPDATE employe SET nom='$nom',prenom='$prenom',mail ='$mail',adresse='$adresse',telephone=$telephone
          //      WHERE idEmployer=$id";
          //     $db->exec($req);
          // }
          }
?>
<br>
<br>
<br>
<div class="container">
	 <form action="../../controller/EmpController.php" method="post" class="white-text">
     <input type="hidden"   name="idEmploi" value="<?= $id ?>" >
              <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix cyan-text">person</i>
                   <input type="text" id="nom" name="nom" value="<?=$Nom?>">
                   <label for="nom">nom</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix cyan-text">person</i>
                   <input type="text" id="prenom" name="prenom" 
                   value="<?= $Prenom ?>">
                   <label for="prenom">prenom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix cyan-text">mail</i>
                   <input type="email" id="mail" name="mail" 
                   value="<?= $Email ?>" >
                   <label for="mail">Email</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix cyan-text">home</i>
                   <input type="text" id="adresse" name="adresse" 
                   value="<?= $Adresse ?>">
                   <label for="adresse">Adresse</label>
                </div>
              </div>
                <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix cyan-text">phone</i>
                   <input type="number" id="telephone" name="telephone"
                   value="<?= $Telephone?>">
                   <label for="telephone">Telephone</label>
                </div>
                    <div class="input-field col s6">
                    <i class="material-icons prefix cyan-text">business</i>
                     <select name="service" id="service">
                     <option value="" disabled selected>Choisissez un service</option>
                     <?php
                       foreach ($service as $s) {
                       ?> 
                       <option value="<?= $s['idService'] ?>"><?= $s['nomService'] ?></option>
                      <?php   
                      }
                      ?> 
                     </select>
                    </div>
                 </div>
                <div class="modal-footer">
                  <div class="center">
                   <button type="reset" class="btn red waves-effect waves-red">ANNULER</button>
                   <button type="submit" class="btn cyan waves-effect waves-cyan" name="btnModifier">Modifier</button>
                  </div>
                </div>
            </form>
</div>
 <?php
   require_once '../../../footer.php';
       ?>
        <?php
         

       ?>