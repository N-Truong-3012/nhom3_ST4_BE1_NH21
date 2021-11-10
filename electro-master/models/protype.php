<?php
    class Protype extends Db{
        public function getAllProtype()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductByType($type_id)
        {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        }
    }
?>