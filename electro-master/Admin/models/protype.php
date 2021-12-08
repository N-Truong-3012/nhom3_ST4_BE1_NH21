<?php
class Protype extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM protypes ORDER BY `TYPE_ID` DESC"
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function AddProtype($type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`TYPE_NAME`) VALUES (?)");
        $sql->bind_param("s", $type_name);
        return $sql->execute(); //return
    }
    public function DelType($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `TYPE_ID` = ?");
        $sql->bind_param("i", $type_id);
        return $sql->execute(); //return
    }
    public function getTypeByID($id)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM protypes
        Where protypes.TYPE_ID = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function EditType($id, $name)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET 
        `TYPE_NAME`=? WHERE `TYPE_ID`=?");
        $sql->bind_param("si", $name, $id);     
        return $sql->execute(); //return
    }

    public function countTypes()
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) FROM `protypes`");
        $sql->execute(); //return an object       
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>
