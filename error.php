<?php
require_once 'header.php';
include_once 'index.php';
require_once 'footer.php';
echo '<div id="error" class="red-text center"><h4>Erreur de pointage Veuillez voir un ADMIN SVP!<i class="material-icons">error</i></h4></div>';
?>
<script type="text/javascript">
  setTimeout(() => {
    $(document).ready(function(){
        $("#error").slideUp();
    });
 }, 4000);
 setTimeout(() => {
    $(document).ready(function(){
        $("#formulaire").slideUp();
    });
 }, 12000);
 $(document).ready(function(){
        $("#formulaire").slideDown();
    });
</script>

