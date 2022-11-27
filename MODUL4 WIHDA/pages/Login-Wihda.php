<?php
if (!isset($_SESSION)){
    session_start();
}
require '../config/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>
    form{
        width: 80%;
    }
  </style>
  
  <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-success alert-dismissible fade show fade in" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  unset($_SESSION['message']);
  endif; ?>

  <body>
    <div class="row">
      <div class="col-6">
        <img src="..\images\lambor.jpg" style="width:100%">
      </div>
      <div class="col-6" style="padding-top:100px; padding-left:100px">
        <h3>Login</h3><br>
        <form action="../config/message-login.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="Sandi" class="form-label">Password</label>
            <input type="password" class="form-control" name="sandi">
          </div>
            <input type="checkbox" name="remember" value="Remember me"> Remember me
            <br><br>
            <input type="submit" class="btn btn-primary btn-lg btn-sm" name="login" value="Login" style="padding-left:25px; padding-right:25px">
            <p>Anda belum punya akun? <a href="Register-Wihda.php">Daftar</a></a></p>
        </form>
    </div></div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>