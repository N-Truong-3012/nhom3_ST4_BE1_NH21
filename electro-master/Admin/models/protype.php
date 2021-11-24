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
}
?>
