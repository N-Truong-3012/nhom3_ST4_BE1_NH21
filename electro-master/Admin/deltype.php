<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
require "models/product.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
if(isset($_GET['id'])){
    $tam = 0;
    $_GET['id'] = (int)$_GET['id'];
    foreach($getAllProducts as $value){
        if($value['TYPE_ID'] == $_GET['id']){
            $tam = $value['TYPE_ID'];
        }
    }
    if ($tam == 0) {
        $protype->DelType($_GET['id']);
    }
}
header('location:protypes.php');
?>