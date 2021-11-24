<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
if(isset($_GET['id'])){
    $protype->DelType($_GET['id']);
}
header('location:protypes.php');
?>