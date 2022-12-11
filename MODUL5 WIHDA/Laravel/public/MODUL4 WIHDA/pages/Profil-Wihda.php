<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>
    form{
        width: 100%;
    }
  </style>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark p-3">
        <div class="container-fluid">
            <ul class="navbar-nav pl-3">
                <li class="nav-item"><a class="nav-link active" href="HomeAfter-Wihda.php" style="margin-left:50px">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="ListCar-Wihda.php" style="margin-left:50px">MyCar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="Add-Wihda.php" class="btn btn-light btn-outline-primary" style="margin-right:50px">Add Car</a></li>
            <div class="dropdown">
                <button class="btn btn-light btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px">
                    Wihda
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                </ul>
                </div>
            </ul>
        </div>
    </nav>
    <div class="container pt-5">
        <h1 style="text-align:center">Profile</h1><br>
        <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="No_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="No_hp">
                </div>
            </div>
            <hr>
            <div class="mb-3 row">
                <label for="Sandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Sandi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Konfirmasi" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Konfirmasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Warna" class="col-sm-2 col-form-label">Warna Navbar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Warna">
                </div>
            </div> 
            <br>
                        <input type="submit" class="btn btn-primary btn-lg btn-sm position-absolute top-90 start-50 translate-middle" value="Update" style="padding-left:25px; padding-right:25px">

                    </form><br><br><br><br>
            <div class="row">
                <div class="col">
                    <img  class="d-inline" src="../asset/images/logo-ead.png" alt="logo" height="30">
                    <p class="d-inline ps-4">Wihda_1202204276</p>
                </div>
            </div><br><br>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>