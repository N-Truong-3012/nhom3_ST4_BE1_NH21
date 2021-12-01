<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
require "models/product.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
if(isset($_GET['id'])){
    $tam = 0;
    $_GET['id'] = (int)$_GET['id'];
    foreach($getAllProducts as $value){
        if($value['MANU_ID'] == $_GET['id']){
            $tam = $value['MANU_ID'];
        }
    }
    if ($tam == 0) {
        $manufacture->DelManu($_GET['id']);
    }
}
header('location:manufactures.php');
?>