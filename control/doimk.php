<?php
require_once ("../classes/config.php");

if(isset($_POST)){
    $old_pass = $_POST["old-password"];
    $new_pass = $_POST["new-password"];
    $confirm_pass  = $_POST["confirm-password"];
    $id = $_SESSION['user']['id'];

if($new_pass == $confirm_pass){
    $check = $db->query("SELECT * FROM `users` WHERE `id` = '$id' AND `password` = '$old_pass'")->rowCount();
    if($check > 0){
        $db->exec("UPDATE `users` SET `password` = '$new_pass' WHERE `id` = '$id'");
        echo "<script type='text/javascript'>
        alert('Password is updated');window.location = '../profile.php';</script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Password is wrong. Please try again');window.location = '../profile.php';</script>";
    }
}else{
    echo "<script type='text/javascript'>
    alert('Password not match. Please try again');window.location = '../profile.php';</script>";
}
}