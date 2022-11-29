<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>
    form{
        width: 80%;
    }
  </style>

  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'Gagal') {$_SESSION['register']=''; ?>
    <div class="alert alert-warning m-0 p-2 alert-dismissable" role="alert">Email Anda sudah pernah terdaftar!
        <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php } ?>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <div class="row">
            <div class="col-6">
                <img src="..\images\lambor.jpg" style="width:100%">
            </div>
            <div class="col-6" style="padding-top:30px; padding-left:100px">
                <h3>Register</h3><br>
                <form action="../config/message-register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="No_hp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="Sandi" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" name="sandi">
                    </div>
                    <div class="mb-3">
                        <label for="Konfirmasi" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="konfirmasi">
                    </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-sm" value="Daftar" style="padding-left:25px; padding-right:25px">
                        <p>Anda sudah punya akun? <a href="Login-Wihda.php">Login</a></a></p>
                    </form>
    </div></div>
  </body>
</html>