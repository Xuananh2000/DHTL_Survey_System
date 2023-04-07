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
        <nav class="navbar navbar-light p-0">

            <div class="container">

                <div class="nav_left">

                    <a class="btn_home_page" href="index.php">Trang chủ</a>

                    <a class="btn_toFormpage" href="listforms.php">Các khảo sát</a>
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

        <div class="container container_box">
            <div class="col-md-12">
                


                <div class="home">
                    <div class="container form_active-box">
                        <?php include("./".$page.".php") ?>
                    </div>



                </div>

            </div>


        </div>
        <div class="bottom_search">

        </div>
</body>
<style>
.top_search {
    display: flex;
    justify-content: center;
}
</style>
<script>
$(function() {
    var page = "<?php echo $page ?>";

    $('#nav-menu').find(".nav-item.nav-" + page).addClass("active")
})
</script>

</html>