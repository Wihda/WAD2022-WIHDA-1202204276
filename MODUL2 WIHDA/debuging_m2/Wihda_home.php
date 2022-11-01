<?php
$mobil1 = "Toyota Rush";
$harga1 = 200000;
$mobil2 = "Toyota Ayla";
$harga2 = 150000;
$mobil3 = "Honda Brio";
$harga3 = 150000;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styleM2.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="http://localhost:8090/MODUL2/debuging_m2/Wihda_home.php#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="http://localhost:8090/MODUL2/debuging_m2/Wihda_booking.php#">Booking</a>
            </li>
        </ul>
    </nav>
        <p style="text-align:center;font-size: 32px;font-family:segoe UI">WELCOME TO EAD RENT</p>
        <p style="text-align:center;font-size: 16px;font-family:calibri">Find your best deal, here!</p>
        <div class="card-columns">
            <div class ="column">
                <div class="card" style="margin-left:100px">
                    <img src="toyota-rush-terbaru.jpg" style="padding-top:15px" alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $mobil1 ?><br>
                            <small style="font-size:14px;color:grey">Rp <?php echo $harga1 ?>/Day</small>
                        </h5>
                        <p class="card-text">7 Kursi</p><hr>
                        <p class="card-text">1500 CC</p><hr>
                        <p class="card-text">Manual</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="http://localhost:8090/MODUL2/Wihda_booking.php#" class="btn btn-primary stretched-link">Book Now</a>
                    </div>
                </div>
            </div>
            <div class ="column">
                <div class="card" style="margin:50px">
                    <img src="new-ayla-png-1.png" style="width:290px;"alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php echo $mobil2 ?><br>
                            <small style="font-size:14px;color:grey">Rp <?php echo $harga2 ?>/Day</small>
                        </h5>
                        <p class="card-text">5 Kursi</p><hr>
                        <p class="card-text">1200 CC</p><hr>
                        <p class="card-text">Manual</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="http://localhost:8090/MODUL2/Wihdabooking.php#" class="btn btn-primary stretched-link">Book Now</a>
                    </div>
                </div>
            </div>
            <div class ="column">
                <div class="card" style="margin-right:100px">
                    <img src="IMG_20180920_142230.jpg" style="padding-left:20px;width:300px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php echo $mobil3 ?><br>
                            <small style="font-size:14px;color:grey">Rp <?php echo $harga3 ?>/Day</small>
                        </h5>
                        <p class="card-text">5 Kursi</p><hr>
                        <p class="card-text">1200 CC</p><hr>
                        <p class="card-text">Automatic</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="http://localhost:8090/MODUL2/Wihda_booking.php#" class="btn btn-primary stretched-link">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <footer><p>Created by Wihda_1202204276</p></footer>
</body>
</html>

