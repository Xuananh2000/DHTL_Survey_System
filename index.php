<?php
require_once('layouts/head.php');
?>

<div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">
  <form action="control/dangnhap.php" method="POST" class="form" id="form-2">
    <div class="spacer"></div>
    <h3 class="heading">Thuy Loi Survey System</h3>
    <div class="spacer"></div>
    <div class="form-group">
      <label for="email" class="form-label">Email<p>*</p></label>
      <input id="email" name="email" type="text" placeholder="Enter your email" class="form-control">
      <span class="form-message"></span>
    </div>
    <div class="form-group">
      <label for="password" class="form-label">Password<p>*</p></label>
      <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control">
      <span class="form-message"></span>
    </div>
    <button class="form-submit" type="submit">LOG IN</button>
    <p class="desc"> <a href="forgetPassword.php" style="color: aqua;"> Forgot password?</a></p>
    <p class="desc">Do you have an account? <a href="signup.php" style="color: aqua;">Sign up</a></p>
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
        Validator.minLength('#password', 6),
      ],
    });
  });
</script>

<?php
require_once('layouts/footer.php');
?>