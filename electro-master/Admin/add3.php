<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
//Xu ly them:
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $protype->AddProtype($name);
}
header('location:protypes.php');
?>