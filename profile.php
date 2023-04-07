<?php
require_once ('layouts/head.php');
require_once ('layouts/navbar.php');
?>
    <div class="statistics">
        <hr class="container hr_container">
        <div class="container-fluid ">
            <section class="form_user">
                <form id="myForm">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <form action="" method="post" id="avata-admin" name="avata-admin"
                                        class="form-horizontal" enctype="multipart/form-data" action="" role="form">
                                        <div class='img_avata'><img src="img/temp.png" alt=""></div>
                                        <h5 class="my-3">
                                        </h5>
                                        <p class="text-muted mb-1 user-name" style="font-weight: 600; font-size: 24px;">
                                            <?php echo $_SESSION['user']['name'] ?>
                                        </p>
                                        <div class="row pt-1">
                                            <div class="col-12 mb-6 change_password">
                                                <a id="myBtn" style="color:#000;">Change password</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0 email_address">
                                                <?php echo $_SESSION['user']['email'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Name</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0 full_name">
                                                <?php echo $_SESSION['user']['name'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </section>
        </div>
    </div>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form action="control/doimk.php" method="POST">
                <label for="old-password">Your password:</label>
                <input type="password" id="old-password" name="old-password" required> 
                <label for="new-password">New password:</label>
                <input type="password" id="new-password" name="new-password" required>
                <label for="confirm-password">Retype new password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <div class="clearfix">
                    <span class="close"><button type="button" class="btn btn-secondary cancel">Cancel</button></span>
                    <button type="submit" class="btn btn-primary">Change </button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
   
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var cancel = document.getElementsByClassName("cancel");
    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    cancel.onclick = function () {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</html>