<?php
    session_start();
    require "../config.php";
	require "../models/db.php";
	require "../models/user.php";
    $user = new User;
    if(isset($_POST['submit'])){
        $user_name = $_POST['username'];
        $pass = $_POST['pass'];
        if($user->checkLogin($user_name, $pass)){
            $_SESSION['username'] = $username;
            header('location:../Admin/index.php');
        }
        else{
            header('location:index.php');
        }
    }
?>