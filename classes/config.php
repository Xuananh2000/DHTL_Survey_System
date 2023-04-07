<?php
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    set_time_limit(0);
    $dbhost = 'localhost';
    $dbname = 'form_builder_db';
    $dbusername = 'root';
    $dbpassword = '';
    //-- Kết Nối PDO --//

    // Kiểm tra kết nối
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
        $db->exec("set names utf8"); //Set bảng mã
    } catch (PDOException $e) {
        echo 'Loi ket noi';
        exit;
    }
?>