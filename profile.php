<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tu.css" />
    <link rel="stylesheet" href="./fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <i class="far fa-user"></i>
                        <a href="profile.html">
                            <h5>Anh Xuân</h5>
                        </a>


                    </div>

                </div>
            </div>
        </nav>

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
                                            Anh xuan</p>
                                        <div class="row pt-1">
                                            <div class="col-12 mb-6 change_password">
                                                <a id="myBtn" style="color:#000;">Đổi Mật Khẩu</a>
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
                                            <p class="text-muted mb-0 email_address">AnhXuan@gmail.com</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Họ Tên</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0 full_name">Nguyen Anh Xuan</p>
                                            <div class="box_edit_fullname">
                                                <input type="text" id="full_name" name="edt_full_name" required>
                                                <button type="submit" id="submit_edt_fullname">Lưu</button>
                                            </div>
                                        </div>
                                        <div class="pen-to-square col-sm-2 edit_fullname-btn">
                                            <i class="fa fa-pencil"></i>
                                            <i class="fa fa-square-o"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tên người dùng</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0 txt_user_name">Anh Xuan</p>
                                            <div class="box_edit_username">
                                                <input type="text" id="user_name" name="edt_user_name" required>
                                                <button type="submit" id="submit_edt_username">Lưu</button>
                                            </div>
                                        </div>
                                        <div class="pen-to-square col-sm-2 edit_username-btn">
                                            <i class="fa fa-pencil"></i>
                                            <i class="fa fa-square-o"></i>
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
            <form>
                <label for="old-password">Mật khẩu cũ:</label>
                <input type="password" id="old-password" name="old-password">
                <label for="new-password">Mật khẩu mới:</label>
                <input type="password" id="new-password" name="new-password">
                <label for="confirm-password">Xác nhận lại mật khẩu:</label>
                <input type="password" id="confirm-password" name="confirm-password">
                <div class="clearfix">
                    <span class="close"><button type="button" class="btn cancel">Hủy bỏ</button></span>
                    <button type="submit" class="btn">Đổi mật khẩu </button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>

    document.getElementById("submit_edt_fullname").addEventListener("click", function (event) {
        var name = document.getElementById("full_name").value;
        alert(name);
        $.ajax({
            type : "POST",  //type of method
            url  : "./control/update.php",  //your page
            data : { name : name},// passing the values
        });
    }
    );

    document.getElementById("submit_edt_username").addEventListener("click", function (event) {
        var username = document.getElementById("user_name").value;
        alert(username);
        $.ajax({
            type : "POST",  //type of method
            url  : "./control/update.php",  //your page
            data : { username : username},// passing the values
        });
    }
    );


    const editFullNameBtn = document.querySelector('.edit_fullname-btn');
    const editUserNameBtn = document.querySelector('.edit_username-btn');
    const editGenderBtn = document.querySelector('.edit_gender-btn');

    const fullname = document.querySelector('.full_name');
    const username = document.querySelector('.txt_user_name');
    const boxFullname = document.querySelector('.box_edit_fullname');
    const boxusername = document.querySelector('.box_edit_username');

    editFullNameBtn.addEventListener('click', () => {
        fullname.style.display = 'none';
        boxFullname.style.display = 'block';
    })

    editUserNameBtn.addEventListener('click', () => {
        username.style.display = 'none';
        boxusername.style.display = 'block';
    })

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