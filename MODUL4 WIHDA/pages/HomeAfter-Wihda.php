<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark p-3">
        <div class="container-fluid">
            <ul class="navbar-nav">
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
                    <li><a class="dropdown-item" href="Profil-Wihda.php">Profil</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                </ul>
                </div>
            </ul>
        </li>
        </div>
    </nav>
    <div class="container">
    <div class="row align-items-center" style="padding-top: 100px">
        <div class="col">
            <h1 >Selamat Datang Di<br>Show Room Wihda</h1>
            <p style="color:grey"> At Lacus vitae nulla sagittis scelerisque nisl. Pallentesque duis curcus vestibulum, facilisi ac, sed faucibus.</p>
            <br>
            <a class="btn btn-primary btn-sm" href="ListCar-Wihda.php" role="button" style="width: 20%">MyCar</a> 
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <img  class="d-inline" src="../asset/images/logo-ead.png" alt="logo" height="30">
                    <p class="d-inline ps-4">Wihda_1202204276</p>
                </div>
            </div>
        </div>
        <div class="col"> 
            <img src="..\images\dodge-viper-car-road-1.jpg" class="rounded" alt="car" style="width: 100%">
        </div>
    </div>
    </div>

  </body>
</html>