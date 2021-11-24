<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
//Xu ly them:
if(isset($_POST['submit'])){
    $manu_name = $_POST['name'];
    $manufacture->AddManu($manu_name);
}
header('location:manufactures.php');
?>