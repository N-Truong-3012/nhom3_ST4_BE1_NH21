<?php
class Product extends Db{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures, protypes
        Where products.MANU_ID = manufactures.MANU_ID
        and products.TYPE_ID=protypes.TYPE_ID
        ORDER BY `id` DESC"
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes 
        WHERE `NAME` LIKE ? and products.MANU_ID = manufactures.MANU_ID
        and products.TYPE_ID = protypes.TYPE_ID");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function AddProduct($name, $manu_id, $type_id, $image, $price, $desc, $feature, $slt)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`NAME`, `MANU_ID`, `TYPE_ID`, `PRICE`, `IMAGE`, `DESCRIPTION`, `FEATURE`, `SLTK`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $desc, $feature, $slt);
        return $sql->execute(); //return
    }

    public function DelProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `ID` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return
    }
}