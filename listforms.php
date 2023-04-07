<?php

ob_start();
require_once('./classes/DBConnection.php');
$db = new DBConnection();

$page = isset($_GET['p']) ? $_GET['p'] : "forms";
ob_end_flush();
include('./header.php');
require_once('layouts/navbar.php');
?>
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
                    <i class="far fa-user"></i>
                        <a href="profile.html">
                            <h5>Anh Xuân</h5>
                        </a>


                    </div>

                </div>
            </div>
        </nav>

        <hr class="container hr_container">

        <div class="container container_box">

            <div class="container ">
                <?php include("./".$page.".php") ?>
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