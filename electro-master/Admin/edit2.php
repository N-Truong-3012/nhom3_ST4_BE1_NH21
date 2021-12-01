<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
//Xu ly them:
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $manu_name = $_POST['name'];
    $manufacture->EditManu($id, $manu_name);
}
header('location:manufactures.php');
?>