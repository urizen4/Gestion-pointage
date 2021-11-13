 <?php 
  include_once 'header.php';
 ?>
 <!--menu du projet SenAdmin --------------------------------------------------->
   <nav class="transparent">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.html" class="brand-logo center"><i class="" style="font-family: papyrus; font-weight: bold; font-size: larger;">SenAdmin</i></a>
                <a href="" data-activates="side-nav" class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
            </a>
            <div class="row">
              <div class="input-field col s3">
                <i class="material-icons prefix">search</i>
                <input type="text" name="search" id="search" class="white black-text" style="border-radius: 80px;" placeholder="Faites vos recherches">
              </div>
              <div class="btn transparent btn-floating waves-effect waves-light tooltipped" 
              style="margin-bottom:10px ;" data-tooltip="recherche" data-position="bottom">
                <i class="material-icons" style="margin-bottom:30px;">search</i>
              </div>
            </div>
            <!-- Sidenav menu du projet SenAdmin -------------------------------------------------------------->
            <ul id="side-nav" class="side-nav grey lighten-1">
             <li>
               <div class="user-view">
                   <div class="background">
                       <img src="public/image/slide-3.jpg" alt="">
                   </div>
                   <a href="#">
                    <img src="public/image/person3.jpg" alt="" class="circle">
                    </a>
                    <a href="">
                        <span class="name">
                            HexaDec4
                        </span>
                    </a>
                    <a href="">
                        <span class="email">  
                            HD4@gmail.com
                        </span>
                    </a>
               </div>
              </li>
              <li>
                <a href="accueil.php" class="black-text hoverable">
                   <i class="material-icons blue-text ">dashboard</i>
                   Tableau de bord
                 </a>
               </li>
              <li>
                <a href="src/views/employes/listEmployes.php" class="black-text">
                  <i class="material-icons green-text">send</i>
                    Employes
                </a>
                </li>
              <li>
                  <a href="src/views/pointages/listPointage.php" class="black-text">
                      <i class="material-icons yellow-text">filter_hdr</i>
                      Pointages
                 </a>
              </li>
              <li>
                  <a href="" class="black-text">
                      <i class="material-icons black-text">person_identity</i>
                      Utilisateurs
                  </a>
                </li>
              <li>
                <div class="divider grey"></div>
             </li>
             <li>
                <a class="supheader black-text">
                    <i class="material-icons indigo-text">https</i>
                    Controles de comptes
                </a>
             </li>
             <li>
                <a href="index.php"  class="waves-effect black-text">
                    <i class="material-icons indigo-text">logout</i>
                     Déconnexion
                </a>
             </li>
            </ul>
        </div>
    </div>
</nav> 
<?php 
   include_once 'footer.php';   
  ?>