<?php
require_once('layouts/head.php')
?>
    <div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">
        <form action="control/dangki.php" method="POST" class="form" id="form-2">
          <div class="spacer"></div>
          <h3 class="heading">Thuy Loi Survey System</h3>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="fullname" class="form-label">Name<p>*</p></label>
            <input id="fullname" name="fullname" type="text" placeholder="Enter your name" class="form-control">
            <span class="form-message"></span>
          </div>
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
          <div class="form-group">
            <label for="password_confirmation" class="form-label">Retype password<p>*</p></label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Retype your password" type="password" class="form-control">
            <span class="form-message"></span>
          </div>
          
          <button class="form-submit" type="submit">SIGN UP</button>
          <div class="spacer"></div>
          <p class="desc">Do you have an account? <a href="index.php" style="color: aqua;">Sign in</a></p>
        </form>
      </div>

<?php
require_once('layouts/footer.php')
?>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          Validator({
          form: '#form-2',
          formGroupSelector: '.form-group',
          errorSelector: '.form-message',
          rules: [
            Validator.isRequired('#fullname', 'Please enter your name'),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#password_confirmation'),
            Validator.isConfirmed('#password_confirmation', function () {
              return document.querySelector('#form-2 #password').value;
            }, 'retype password not match')
          ],
        });
        });
      </script>