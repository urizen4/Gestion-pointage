<?php
require_once '../../../header.php';
require_once '../../../footer.php';
require_once '../../model/ServiceBD.php';
require_once '../../model/EmployerBD.php';
$employe=listEmploye();
$service = Service();
// $Nom='';
// $Prenom='';
// $Email='';
// $Adresse='';
// $Telephone='';
// $Service='';
?>
<div class="container">
<br>
<br>
<br>
<div class="card">
<span class="card-title" style="padding-left: 10px;">Liste des Employes</span>
  <table class="table striped responsive-table">
    <thead class="cyan-text" style="padding-left: 20px;"> 
     <th>NOMS</th>
     <th>PRENOMS</th>
     <th>EMAILS</th>
     <th>ADRESSES</th>
     <th>TELEPHONES</th>
     <th>SERVICES</th>
     <th>ACTIONS</th>
    </thead>
    <?php
     foreach ($employe as  $e) {
    ?>
     <tr>
     <td><?= $e['nom'] ?></td>
     <td><?= $e['prenom']?></td>
     <td><?= $e['mail'] ?></td>
     <td><?= $e['adresse'] ?></td>
     <td><?= $e['telephone'] ?></td>
     <td> <?= $e['nomService'] ?></td>
     <td>
     <a href="ModifierEmployer.php?editer=<?= $e['idEmployer'] ?>" class=" btn btn-floating transparent"><i class="material-icons green-text">mode_edit</i></a> 
     <a href="listEmployes.php?supprimer=<?= $e['idEmployer'] ?>" class="btn btn-floating transparent"><i class="material-icons red-text">delete</i></a>
     </td>
     </tr>
     <?php
     }
    ?>
    </tbody>
  </table>
</div>
</div>

<!-- Les Modals et le buttons fixe -->
<div class="fixed-action-btn">
      <a href="" class="btn-floating btn-large cyan pulse">
        <i class="material-icons">add</i>
      </a>
      <ul>
        <li>
          <a href="#modalEmployer" class="modal-trigger btn btn-floating transparent tooltipped"
           data-position="bottom" data-tooltip="Ajouter un employer">
            <i class="material-icons">supervisor_account</i>
          </a>
        </li>
        <li>
          <a href="../../../accueil.php" class="btn btn-floating transparent tooltipped"
           data-position="bottom" data-tooltip="accueil">
            <i class="material-icons">dashboard</i>
          </a>
        </li>
      </ul>
    </div>

     <!---------------------les modals formulaire des postes------------------------------------->
     <div id="modalEmployer" class="modal">
     <h6 class="right cyan-text modal-close tooltipped" data-tooltip="FERME" data-position="bottom"><i class="material-icons">close</i></h6>
          <div class="modal-content">
            <div>
              <h4 class="cyan-text">Ajout d'employer</h4>
          </div>
            <form action="../../controller/EmpController.php" method="post">
              <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                   <input type="text" id="nom" name="nom" value="<?=$Nom?>">
                   <label for="nom">nom</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                   <input type="text" id="prenom" name="prenom" 
                   value="<?= $Prenom ?>">
                   <label for="prenom">prenom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix">mail</i>
                   <input type="email" id="mail" name="mail" 
                   value="<?= $Email ?>" >
                   <label for="mail">Email</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix">home</i>
                   <input type="text" id="adresse" name="adresse" 
                   value="<?= $Adresse ?>">
                   <label for="adresse">Adresse</label>
                </div>
              </div>
                <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                   <input type="number" id="telephone" name="telephone"
                   value="<?= $Telephone?>">
                   <label for="telephone">Telephone</label>
                </div>
                    <div class="input-field col s6">
                    <i class="material-icons prefix">business</i>
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
                   <button type="submit" class="btn cyan waves-effect waves-cyan" name="btnAjouter">AJOUTER</button>
                  </div>
                </div>
            </form>
          </div>
       </div>
       <?php
        if(isset($_GET['supprimer']))
         {
          $id=$_GET['supprimer'];
          $req="DELETE FROM employe WHERE idEmployer=$id";
          $db->exec($req);
           header('location:listEmployes.php');
          }
          // if(isset($_GET['editer'])){
          // $idEmp = $_GET['editer'];
          // $req="SELECT *FROM employe,service WHERE idServ = idService AND idEmployer = $idEmp";
          //  $E=$db->query($req)->fetch();
          //   $Nom=$E['nom'];
          //   $Prenom=$E['prenom'];
          //   $Email=$E['mail'];
          //   $Adresse=$E['adresse'];
          //   $Telephone=$E['telephone'];
          //   //$Service=$E[''];
          //    if (isset($_POST['btnAjouter'])) {
          //     extract($_POST);
          //     $req="UPDATE employe SET nom='$nom',prenom='$prenom',mail ='$mail',adresse='$adresse',telephone=$telephone
          //      WHERE idEmployer=$id";
          //     $db->exec($req);
          // }
          // }

       ?>