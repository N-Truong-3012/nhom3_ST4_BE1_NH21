<?php
    class User extends Db{
        public function checkLogin($user_name, $pass)
        {
            $sql = self::$connection->prepare("SELECT * FROM users
            WHERE `USER_NAME` = ? AND `PASS` = ?");
            $pass = md5($pass);
            $sql->bind_param("ss", $user_name, $pass);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->num_rows;
            if($items == 1){
                return true;
            }
            else{
                return false;
            }
        }       
    }
?>