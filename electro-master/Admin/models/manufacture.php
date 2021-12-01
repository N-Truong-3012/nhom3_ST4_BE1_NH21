<?php
class Manufacture extends Db {
    public function getAllManufactures()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM manufactures ORDER BY `MANU_ID` DESC"
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function AddManu($manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`MANU_NAME`) VALUES (?)");
        $sql->bind_param("s", $manu_name);
        return $sql->execute(); //return
    }
    public function DelManu($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `MANU_ID` = ?");
        $sql->bind_param("i", $manu_id);
        return $sql->execute(); //return
    }
    public function getManuByID($id)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM manufactures
        Where manufactures.MANU_ID = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function EditManu($id, $name)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET 
        `MANU_NAME`=? WHERE `MANU_ID` = ?");
        $sql->bind_param("si", $name, $id);     
        return $sql->execute(); //return
    }
}
?>
