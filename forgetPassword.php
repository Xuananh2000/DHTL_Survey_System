<?php
require_once('layouts/head.php')
?>
<div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">

  <form action="control/quenmatkhau.php" method="POST" class="form" id="form-2">
    <div class="spacer"></div>
    <h3 class="heading">Hệ Thống Khảo Sát Đại Học Thủy Lợi</h3>

    <div class="spacer"></div>

    <div class="form-group">
      <label for="email" class="form-label">Email xác nhận<p>*</p></label>
      <input id="email" name="email" type="text" placeholder="Nhập địa chỉ email của bạn" class="form-control">
      <span class="form-message"></span>
      <?php
      if (isset($_GET['status'])) {
        echo '<span class="form-message" style="color:blue">' . $_GET['status'] . '</span>';
      }
      ?>
    </div>
    <button class="form-submit" type="submit">Xác nhận</button>
    <p class="desc">Quay lại <a href="index.php" style="color: aqua;">Đăng nhập?</a></p>
  </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    Validator({
      form: '#form-2',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isEmail('#email'),
      ],
    });
  });
</script>
<?php
require_once('layouts/footer.php')
?>