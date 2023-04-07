<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:index.php");
}
?>
<nav class="navbar navbar-light p-0 ">
<div class="container">
    <div class="nav_left">
        <a class="btn_home_page" href="home.php">Home</a>
        <a class="btn_toFormpage" href="./listforms.php">Survey List</a>
    </div>
    <div class="nav_right">
        <div class="logout_btn">
            <a href="logout.php">
                <h5>Log out</h5>
            </a>
        </div>
        <div class="profile_btn">
            <a href="profile.html">
                <h5>
                    <?php
                    echo $_SESSION['user']['name'];
                    ?>
                </h5>
            </a>
        </div>
    </div>
</div>
</nav>