 <?php 
  include_once 'header.php';
  include_once 'topBar.php';
 ?>
<!-- section des statistiques -->     
  <div class="section section-stats grey lighten-2 center">
    <div class="row">
        <!-- Nos visiteurs------------------------------------------------------------------------------->
        <div class="col s12 m6 l3">
            <div class="card-panel blue-text">
              <i class="material-icons medium indigo-text">insert_emoticon</i>
               <h5 class="indigo-text">visiteurs mensuels</h5>
              <h5 class="count indigo-text">23789</h5>
              <div class="progress grey">
                  <div class="determinate indigo " style="width: 40%;">
                  </div>
              </div>
            </div>
        </div>
        <!-- Nos Message----------------------------------------------- -->
        <div class="col s12 m6 l3">
            <div class="card-panel">
              <i class="material-icons medium green-text text-darken-2">mode_edit</i>
               <h5 class="green-text text-darken-2">Méssages postés</h5>
              <h5 class="count green-text text-darken-2">2378</h5>
              <div class="progress grey">
                  <div class="determinate green darken-2" style="width: 20%;">
                  </div>
              </div>
            </div>
        </div>
        <!--Nos commentaires ------------------------------------------------->
        <div class="col s12 m6 l3">
            <div class="card-panel">
              <i class="material-icons medium yellow-text text-darken-2">mode_comment</i>
               <h5 class="yellow-text text-darken-2">Commentaires</h5>
              <h5 class="count yellow-text text-darken-2">1200</h5>
              <div class="progress grey">
                  <div class="determinate yellow darken-2 " style="width: 35%;">
                  </div>
              </div>
            </div>
        </div>
        <!--Nos utilisateurs -------------------------------------------------------------------->
        <div class="col s12 m6 l3">
            <div class="card-panel">
              <i class="material-icons medium black-text">supervisor_account</i>
               <h5>Utilisateurs</h5>
              <h5 class="count">178</h5>
              <div class="progress grey">
                  <div class="determinate black " style="width: 10%;">
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!--Diagramme des commentaires les plus récentes des visiteurs -------------------------------------->
<section class="section section-visiteur grey lighten-2">
  <div class="row">
     <div class="col s12 m6 l8">
       <div class="card-panel" style="border-radius: 100px;">
         <div id="chartContainer" style="height: 300px; width: 100%; border-radius: 100px;"></div>
       </div>
     </div>
     <!-- les commnetaires recentes -->
       <div class="col s12 m6 l4">
          <ul class="collection with-header commentaires">
            <li class="collection-header">
               <h5>Vos commentaires</h5>
            </li>
             <li class="collection-item avatar">
                <img src="public/image/person3.jpg" alt="" srcset="" class="circle">
                <span class="title" style="font-family: papyrus; font-weight: bold;">Aminata</span>
                <p class="truncate">Lorem, ipsum.</p>
                <a href="" class="approuver green-text" id="app">Approuver</a>|
                <a href="" class="refuser red-text" id="ref">Refuser</a>
             </li>
          </ul>
       </div>
  </div>
</section>
<!-- Les Postes recentes ------------------------------------------------------------------------------------->
 
<!-- Footer -------------------------------------------------------------------->
    <footer class="section  transparent white-text center">
      <p><i class="" style="font-family: papyrus; font-weight: bold;">SenAdmin</i> creat by #D4 &copy; 2021 </p>
    </footer>
    <!-- Les Modals et le buttons fixe -->
    <div class="fixed-action-btn">
      <a href="" class="btn-floating btn-large red">
        <i class="material-icons">add</i>
      </a>
      <ul>
        <li>
          <a href="#modalPoste" class="modal-trigger btn-floating transparent">
            <i class="material-icons green-text">mode_edit</i>
          </a>
        </li>
        <li>
          <a href="#modalCat" class="modal-trigger btn-floating  transparent">
            <i class="material-icons yellow-text">folder</i>
          </a>
        </li>
        <li>
          <a href="#modalUser" class="modal-trigger btn-floating transparent ">
            <i class="material-icons indigo-text">supervisor_account</i>
          </a>
        </li>
      </ul>
    </div>
    <!---------------------les modals formulaire des postes------------------------------------->
       <div id="modalPoste" class="modal">
          <div class="modal-content">
            <div>
              <h6 class="right blue-text text-darken-4 modal-close"><i class="material-icons">close</i></h6>
              <h4 class="blue-text text-darken-4">Ajout  de postes</h4>
          </div>
            <form action="">
              <div class="input-field">
                <input type="text" id="titre">
                <label for="titre">titre</label>
              </div>
                <div class="input-field">
                    <select>
                      <option value="" disabled selected>Faites votre choix</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                   <label for="">Categories</label>
                </div>
                <div class="input-field">
                   <textarea name="" id="poste" class="materialize-textarea">
                   </textarea>
                   <label for="poste">poste</label>
                </div>
                <div class="modal-footer">
                  <a href="#" class="modal-action modal-close btn blue darken-4 white-text">envoyer</a>
                </div>
            </form>
          </div>
       </div>
<!-- section pour le chargement de la page -------------------------------------->
<!-- <div class="preloader-wrapper medium active" id="loading">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div> -->
  <?php 
   include_once 'footer.php';   
 ?>