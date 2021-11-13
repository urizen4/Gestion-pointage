<?php 
  include_once 'header.php';
 ?>

 <div class="container">
    <h1 class="center cyan-text" style="font-family: papyrus; font-weight: bold;">Plateforme de pointages</h1>
    <div class="center">
        <h4 class="center cyan-text" style="font-family: papyrus; font-weight: bold;">ADMIN</h4>
        <a href="connexion.php" class="btn cyan waves-effect waves-light">SE CONNECTER</a>
    </div>
     <div class="row">
     <div class="card col s8 offset-s2">
      <form action="src/controller/PointageController.php" method="post" id="form1" class="col s12">
       <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input type="email" name="email" required>
         <label for="">Email</label>
       </div>
       <div class="row">
          <div class="input-field col s12">
          <i class="material-icons prefix">assignment_ind</i>
          <select name="pointage" id="pointage">
            <option value="" disabled selected>Veuillez vous pointez svp!</option> 
            <option value="ENTRE">ENTRE</option>
            <option value="SORTIE">SORTIE</option>
          </select>
          </div>
       </div>
       <div class="center">
         <button type="submit" name="btnValider" class="btn cyan waves-effect waves-light pulse" 
          style="margin-bottom:10px;">VALIDER</button>
       </div>
      </form>
      </div>
      </div>
    </div>
 <?php 
  include_once 'footer.php';
 ?>