<?php
require_once('layouts/header.php')
?>
    <div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">
        <form action="" method="POST" class="form" id="form-2">
          <div class="spacer"></div>
          <h3 class="heading">Hệ Thống Khảo Sát Đại Học Thủy Lợi</h3>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="fullname" class="form-label">Họ tên<p>*</p></label>
            <input id="fullname" name="fullname" type="text" placeholder="Họ Tên" class="form-control">
            <span class="form-message"></span>
          </div>
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
          <div class="form-group">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu<p>*</p></label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
            <span class="form-message"></span>
          </div>
          
          <button class="form-submit" onclick="confimLogin()"><a href="#" style="color: white; text-decoration: none;">Đăng kí</a></button>
          <div class="spacer"></div>
          <p class="desc">Đã có tài khoản? <a href="index.php" style="color: aqua;">Đăng kí</a></p>
        </form>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          Validator({
          form: '#form-2',
          formGroupSelector: '.form-group',
          errorSelector: '.form-message',
          rules: [
            Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#password_confirmation'),
            Validator.isConfirmed('#password_confirmation', function () {
              return document.querySelector('#form-1 #password').value;
            }, 'Mật khẩu nhập lại không chính xác')
          ],
          onSubmit: function (data) {
            // Call API
            console.log(data);
          }
        });
        });
      </script>
<?php
require_once('layouts/footer.php')
?>