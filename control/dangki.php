<?php
require_once ("../classes/config.php");
if(isset($_POST)){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = $db->query("SELECT * FROM `users` WHERE `email`='$email'")->rowCount();
    if($check > 0){
        echo "<script type='text/javascript'>alert('Tài khoản đã có trên hệ thống.Vui lòng thử lại');window.location = '../signup.php';</script>";
    }else{
        $db->exec("INSERT INTO `users` (`email`, `password`, `name`) VALUES ('$email','$password','$name')");
        echo "<script type='text/javascript'>alert('Đăng kí tài khoản thành công');window.location = '../index.php';</script>";
    }
}