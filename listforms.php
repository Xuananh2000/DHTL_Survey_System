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
    <hr class="container hr_container">
    <div class="container container_box">
        <div class="container ">
            <?php include("./" . $page . ".php") ?>
        </div>
    </div>
    <div class="bottom_search">
    </div>
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