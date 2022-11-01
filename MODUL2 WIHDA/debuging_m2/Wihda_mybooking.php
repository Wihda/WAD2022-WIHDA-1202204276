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
        <title>My Booking</title>
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
    <p style="text-align:center;font-size: 20px;font-family:segoe UI">Thank You <?php echo $_POST["nama"];?> for Reserving</p>
    <p style="text-align:center;font-size: 16px;font-family:segoe UI">Please double check your reservation details</p>
    <br>
    <table style="width:100%">
        <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Car Type</th>
            <th>Phone Number</th>
            <th>Service(s)</th>
            <th>Total Price</th>
        </tr>
        <tr style="background-color:lightgrey">
            <td><?php echo rand(); ?></td>
            <td><?php echo $_POST["nama"];?></td>
            <td><?php echo $_POST["book_date"], $_POST["start"];?></td>
            <td><?php echo $_POST["bookdate"],$_POST["start"]; ?></td>
            <td><?php echo $_POST["type"];?></td>
            <td><?php echo $_POST["no_hp"];?></td>
            <?php 
            $services =(isset($POST["service"])) ? $_POST["service"] : array();
            ?>
            <td>
                <?php 
                if (count($services) > 0) {
                    foreach ($services as $service) { 
                    echo $service." "; 
                } } 
                elseif (count($services) == 0) {
                echo "No service";}
                ?>
            </td>
            <td><?php 
            if ($_POST["type"] == $mobil1){
                echo "Rp".$harga1;
            } elseif ($_POST["type"] == $mobil2){
                echo "Rp".$harga2;
            } elseif ($_POST["type"] == $mobil3){
                echo "Rp".$harga3;
            }
            ?>
            </td>
        </tr>
    </table><br>
    <footer><p>Created by Wihda_1202204276</p></footer>
</body>
</html>