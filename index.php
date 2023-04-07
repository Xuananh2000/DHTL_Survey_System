<?php
require_once ('layouts/header.php');
?>

<div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">

<form action="control/dangnhap.php" method="POST" class="form" >
  <div class="spacer"></div>
  <h3 class="heading">Hệ Thống Khảo Sát Đại Học Thủy Lợi</h3>

  <div class="spacer"></div>

  <div class="form-group">
    <label for="email" class="form-label">Tài khoản Email<p>*</p></label>
    <input id="email" name="email" type="text" placeholder="Nhập tài khoản email" class="form-control">
    <span class="form-message"></span>
  </div>

  <div class="form-group">
    <label for="password" class="form-label">Mật khẩu<p>*</p></label>
    <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
    <span class="form-message"></span>
  </div>

  <button class="form-submit" type="submit">
    Đăng nhập
  </button>
  <p class="desc"> <a href="confirm-email.html" style="color: aqua;"> Quên mật khẩu?</a></p>
  <p class="desc">Chưa có tài khoản? <a href="signup.php" style="color: aqua;">Đăng kí</a></p>
</form>
<div id="snackbar">Sai tên đăng nhập hoặc mật khẩu</div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {


  Validator({
    form: '#form-2',
    formGroupSelector: '.form-group',
    errorSelector: '.form-message',
    rules: [
      Validator.isEmail('#email'),
      Validator.minLength('#password', 6),
    ],
    onSubmit: function (data) {
      console.log(data);
    }
  });
});

</script>

<?php
require_once ('layouts/footer.php');
?>
