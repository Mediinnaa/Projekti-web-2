<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/register.css">
    <title> Register </title>
  </head>
</html>

<?php
include '../components/header.php'
?>
<div class="box">
  <div class="page">
    <div class="headerLS">
      <a id="login" class="active" href="#login">login</a>
      <a id="signup" href="#signup">signup</a>
    </div>
    <div id="errorMsg"></div>
    <div class="content">
      <form class="login" name="loginForm" onsubmit="return validateLoginForm()" action="../loginHandler/Login.php" method="post">
        <input type="text" name="name" id="logName" placeholder="Username" />
        <input type="password" name="password" id="logPassword" placeholder="Password" />
        <div id="check">
          <input type="checkbox" id="remember" />
          <label for="remember">Remember me</label>
        </div>
        <br /><br />
        <input type="submit" value="Login" name="loginSubmit" />
        <a href="#">Forgot Password?</a>
      </form>
      <?php
      include '../CRUD/Model.php';
      $model = new Model();
      $model->insertUser();
      ?>
      <form class="signup" name="signupForm" onsubmit="return validateSignupForm()" method="POST">
        <input type="email" name="email" id="signEmail" placeholder="Email" />
        <input type="text" name="name" id="signName" placeholder="Username" />
        <input type="password" name="password" id="signPassword" placeholder="Password" /><br />
        <input type="submit" value="SignUp" name="registerSubmit"  />
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../js/register.js"></script>
</body>

</html>