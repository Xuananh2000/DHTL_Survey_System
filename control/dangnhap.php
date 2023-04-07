<?php
require_once ('../classes/DBConnection.php');
if(isset($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $check = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'")->rowCount();
    echo $check;
}