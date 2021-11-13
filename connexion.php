<?php 
  include_once 'header.php';
 ?>
  <div class="container">
    <div class="center">
      <h2 class="cyan-text" style="font-family: papyrus; font-weight: bold;">WELCOME TO MY APP</h2>
    </div>
  	<div class="center">
  		<button class="btn indigo waves-effect waves-light" id="Afficher">Afficher</button>
  		<button class="btn red waves-effect waves-light" id="cacher">cacher</button>
  	</div>
  	<br>
  	<br>
    <div class="row">
  	    <div class="card-panel col s6 offset-l3" id="formulaire">
  	    	<span class="card-title"><h5 class="blue-text center">CONNECTEZ VOUS</h5></span>
  	    	<form method="post"  action="src/controller/ConnecController.php" id="formulaire">
	  	        <div class="input-field">
              <i class="material-icons prefix">login</i> 
	  	 	      <label>LOGIN</label>
	  	 	      <input type="text" name="login">
	  	        </div>
	  	        <div class="input-field">
              <i class="material-icons prefix">lock</i>
	  	 	      <label>PASSWORD</label>
	  	 	      <input type="password" name="motDepasse" >
	  	        </div>
	  	        <div class="center">
	  	           <button type="submit" class="btn cyan waves-effect waves-light" name="btnConnect" style="margin-bottom:10px;">
                 <i class="material-icons">supervisor_account</i>
                 SE CONNECTEZ
              </button>
	  	        </div>
  	        </form>
        </div>
      </div>
   </div>
   <?php 
   include_once 'footer.php';  
 ?>
 

     <script>
   	  $(document).ready(function(){
   	  	$('#formulaire').hide();
   	  	$('#Afficher').on('click',function(){
        $('#formulaire').slideDown();
   	  	});
   	  	$('#cacher').on('click',function(){
        $('#formulaire').slideUp();
   	  	});
   	  });
   </script>
 