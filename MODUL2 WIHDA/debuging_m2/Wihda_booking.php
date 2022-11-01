<?php
$mobil1 = "Toyota Rush";
$harga1 = 200000;
$mobil2 = "Toyota Ayla";
$harga2 = 150000;
$mobil3 = "Honda Brio";
$harga3 = 150000;
$service1 = 25000;
$service2 = 100000;
$service3 = 250000;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styleM2.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="http://localhost:8090/MODUL2/Wihda_home.php#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="http://localhost:8090/MODUL2/Wihda_booking.php#">Booking</a>
            </li>
        </ul>
    </nav>
    <p style="text-align:center;font-size: 24px;font-family:segoe UI">Rent Your Car Now!</p>
    <div class="card" style="margin:10px">
        <div class="card-body">
        <img src="toyota-rush-terbaru.jpg" style="float:left;padding-right:30px;padding-top:10%;width:550px">
            <form action="Wihda_mybooking.php" method="post">
        <label for="nama">Name</label><br>
        <input type="text" name="nama" value="WIHDA_1202204276" readonly>
        <br>
        <label for="book_date">Book Date</label><br>
        <input type="date" name="book_date">
        <br>
        <label for="start">Start Time</label><br>
        <input type="time" name="start">
        <br>
        <label for="duration">Duration (Days)</label><br>
        <input type="text" name="duration">
        <br>
        <label for="type">Car Type</label><br>
        <select name="type">
        <option value="Toyota Rush"><?php echo $mobil1 ?></option>
        <option value="Toyota Ayla"><?php echo $mobil2 ?></option>
        <option value="Honda Brio"><?php echo $mobil3 ?></option>
        </select><br>
        <label for="no_hp">Phone Number</label><br>
        <input type="text" name="no_hp">     
        
        <div> 
           <p>Add Service(s)</p> 
        <input type="checkbox" name="service[]" value="Health Protocol"> Health protocol/Rp<?php echo $service1 ?><br>
        <input type="checkbox" name="service[]" value="Driver"> Driver/Rp<?php echo $service2 ?><br>
        <input type="checkbox" name="service[]" value="Fuel Filled"> Fuel filled/Rp<?php echo $service3 ?><br>
        </div> <br>
        <button type="submit" class="btn btn-success" style="color:white">Book</button>
        </form></div></div>
    <footer><p>Created by Wihda_1202204276</p></footer>
</body>
</html>