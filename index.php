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
    <div class="statistics">
        <nav
            class=" navbar navbar-expand-lg navbar-dark bg-dark w-100 border-bottom border-light mb-2 navbar navbar-light p-0">

            <div class="container-fluid">

                <a class="navbar-brand" href="./">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu"
                    aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item nav-forms">
                            <a class="nav-link" href="./index.php?p=forms"><i class="fa fa-th-list"></i> Forms</a>
                        </li>
                        <li class="nav-item nav-manage_forms">
                            <a class="nav-link" href="./index.php?p=manage_forms"><i class="fa fa-plus"></i> Create
                                New</a>
                        </li>
                </div>

                <div class="nav_right">

                    <div class="logout_btn">
                        <a href="#">
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


        <div class="home">
            <div class="container form_active-box">
                <?php include("./".$page.".php") ?>
            </div>


            <div class="container about-us_box" >
                <div class="about-us_box-right">
                    <div class="txt_about-us">
                        <h1>About Us</h1>

                    </div>

                    <div class="container-fluid about-us_form">

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


            </div>
        </div>

</body>
<script>
$(function() {
    var page = "<?php echo $page ?>";

    $('#nav-menu').find(".nav-item.nav-" + page).addClass("active")
})
</script>

</html>