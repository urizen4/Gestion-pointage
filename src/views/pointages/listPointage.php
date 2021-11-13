<?php
require_once '../../../header.php';
require_once '../../../footer.php';
require_once '../../model/PointageBD.php';
$pointage=listPointage();
?>
<div class="container">
<br><br><br>
<br><br><br>
<div class="card">
<span class="card-title" style="padding-left: 10px;">Liste des Pointages</span>
  <table class="table striped responsive-table">
    <thead class="cyan-text"> 
     <th>id</th>
     <th>Email</th>
     <th>Type de pointage</th>
     <th>Date et Heure</th>
    </thead>
    <tbody>
    <?php
     foreach ($pointage as  $p) {
    ?>
     <tr>
      <td><?= $p['idPointage'] ?></td>
      <td><?= $p['amail'] ?></td>
      <td><?= $p['Type'] ?></td>
      <td><?= $p['datePointage'] ?></td>
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
          <a href="../../../accueil.php" class="btn btn-floating transparent tooltipped"
           data-position="bottom" data-tooltip="accueil">
            <i class="material-icons">dashboard</i>
          </a>
        </li>
      </ul>
    </div>


