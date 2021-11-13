
<?php
require_once 'BD.php';
function SeConnecter($login,$password){
    global $db;
    $req = "SELECT *FROM user WHERE LOGIN='$login' AND motDePasse='$password'";
    return $db->query($req)->fetch();
}
?>