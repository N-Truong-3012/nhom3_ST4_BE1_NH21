<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures, protypes
        Where products.MANU_ID = manufactures.MANU_ID
        and products.TYPE_ID=protypes.TYPE_ID "
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures, protypes
        Where products.MANU_ID = manufactures.MANU_ID and `NAME` LIKE ?
        and products.TYPE_ID=protypes.TYPE_ID "
        );
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}

?>
