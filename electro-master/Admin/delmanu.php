<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
if(isset($_GET['id'])){
    $manufacture->DelManu($_GET['id']);
}
header('location:manufactures.php');
?>