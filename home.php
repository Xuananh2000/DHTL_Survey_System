<?php

ob_start();

require_once('./classes/DBConnection.php');
$db = new DBConnection();

$page = isset($_GET['p']) ? $_GET['p'] : "forms";
ob_end_flush();
require_once('./header.php');
require_once('layouts/navbar.php');

?>
    <div class="home">
        <img src="img/trang-chu.png">
        <hr class="container hr_container">

        <div class="container form_active-box">


            <div class="  join_form-box">

                <h4> <a class="nav-link" href="./listforms.php">Take the survey</a></h4>

            </div>

            <div class="  create_form-box">

                <h4><a class="nav-link" href="./listforms.php?p=manage_forms">Create new form </a></h4>

            </div>

        </div>

        <div class="container about-us_box">
            <div class="about-us_box-right">
                <div class="txt_about-us">
                    <h1>About Us</h1>

                </div>

                <div class="container about-us_form">
                    <div class=" content_about-us">

                        <h4>This product is built and contributed by</h4>
                        <ul>
                            <li>Nguyễn Khả Tú</li>
                            <li>Nguyễn Văn Đông</li>
                            <li>Nguyễn Anh XUân</li>
                            <li>Dương Hoàng Yến</li>
                            <li>Phạm Thanh Hải</li>
                            <li>Vũ Văn Chức</li>
                            <li>Đặng Quang Minh</li>
                            <li>Trần Trung Thành</li>
                            <li>Nguyễn Tuấn Dũng</li>
                            <li>Đới Xuân Đạt</li>
                            <li>Nguyễn Hữu Bách</li>
                            <li>Đặng Đức Trường</li>
<?php
require_once('layouts/footer.php');
?>