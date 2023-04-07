<?php
require_once('layouts/head.php')
?>
<div class="main" style="background-image: url(img/img_bg.png); background-size: cover;">

  <form action="control/quenmatkhau.php" method="POST" class="form" id="form-2">
    <div class="spacer"></div>
    <h3 class="heading">Thuy Loi Survey System</h3>

    <div class="spacer"></div>

    <div class="form-group">
      <label for="email" class="form-label">Email<p>*</p></label>
      <input id="email" name="email" type="text" placeholder="Enter your email" class="form-control">
      <span class="form-message"></span>
      <?php
      if (isset($_GET['status'])) {
        echo '<span class="form-message" style="color:blue">' . $_GET['status'] . '</span>';
      }
      ?>
    </div>
    <button class="form-submit" type="submit">SUBMIT</button>
    <p class="desc">Back to <a href="index.php" style="color: aqua;">Sign in?</a></p>
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