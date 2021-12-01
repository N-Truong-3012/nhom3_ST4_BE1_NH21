<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
//Xu ly them:
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $type_name = $_POST['name'];
    $protype->EditType($id, $type_name);
}
header('location:protypes.php');
?>