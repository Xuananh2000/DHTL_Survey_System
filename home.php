<?php

ob_start();
require_once('./classes/DBConnection.php');
$db = new DBConnection();

$page = isset($_GET['p']) ? $_GET['p'] : "forms";
ob_end_flush();

?>
<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Builder</title>
    <?php include('./header.php') ?>
</head>

<body>
    <div class="home">

        <img src="img/trang-chu.png">

        <nav class="navbar navbar-light p-0 ">

            <div class="container">

                <div class="nav_left">

                    <a class="btn_home_page" href="index.html">Trang chủ</a>

                    <a class="btn_toFormpage" href="./listforms.php">Các khảo sát</a>

                </div>

                <div class="nav_right">

                    <div class="logout_btn">
                        <a href="">
                            <h5>Đăng xuất</h5>
                        </a>


                    </div>

                    <div class="profile_btn">

                        <a href="profile.html">
                            <h5>Anh Xuân</h5>
                        </a>


                    </div>

                </div>
            </div>
        </nav>


        <hr class="container hr_container">

        <div class="container form_active-box">


            <div class="  join_form-box">

                <h4> <a class="nav-link" href="./listforms.php">Tham gia khảo sát</a></h4>

            </div>

            <div class="  create_form-box">

                <h4><a class="nav-link" href="./listforms.php?p=manage_forms">Tạo Khảo sát </a></h4>

            </div>

        </div>

        <div class="container about-us_box">
            <div class="about-us_box-right">
                <div class="txt_about-us">
                    <h1>About Us</h1>

                </div>

                <div class="container about-us_form">
                    <div class=" content_about-us">

                        <h4>Sản phẩm này được xây dựng và đóng góp bởi</h4>
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

                        </ul>
                    </div>
                </div>
            </div>

</body>

</html>