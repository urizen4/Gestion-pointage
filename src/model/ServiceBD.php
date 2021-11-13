<?php
require_once 'BD.php';
function Service()
{
    global $db;
    $req = "SELECT *FROM service ORDER BY nomService";
    return $db->query($req)->fetchAll();
}

?> 