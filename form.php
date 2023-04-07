<?php 

ob_start();
require_once('./classes/DBConnection.php');
$db = new DBConnection();

$code = isset($_GET['code']) ? $_GET['code'] : "";
if(empty($code)){
    echo "<script> alert('form code is not provided'); location.replace('./')</script>";
    exit;
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<style>

    
    table th,
    table td {
        padding: 3px !important
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Builder</title>
    <?php include('./header.php') ?>
    <script>
        var form_code = "<?php echo $code ?>";
    </script>
    <script src="./js/form-build-display.js"></script>
</head>

<body class='bg-dark'>
    <div class="container pt-4">
        <?php 
        include './forms/'.$code.'.html';
        ?>
        
    </div>
    <div class="container statistical_bottom">

            <div class="statistical_bottom-left">
                <a href="statistical_user.html" class="export-btn">Thống kê người tham gia</a>
            </div>

            <div class="w-100 d-flex justify-content-center">
            <button class="btn btn-primary" form="form-data" id="">Sumbit</button>
        </div>
            <div class="statistical_bottom-right">
                <a href="statistical_answer.html" class="export-btn">Thống kê câu trả lời</a>
               
            </div>

        </div>
</body>

</html>