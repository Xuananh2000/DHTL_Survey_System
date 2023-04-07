<?php
require_once ('../classes/config.php');
if(isset($_POST)){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $check = $db->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'")->rowCount();

    if($check > 0){
        header("Location:../views/home.php");
    }else{
        echo "<script type='text/javascript'>
        alert('Tài khoản hoặc mật khẩu sai');window.location = '../index.php';</script>";
    }
}