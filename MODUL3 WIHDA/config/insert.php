<?php

include "..\config\connector.php";
$mobil= $_POST['mobil'];
$milik= $_POST['milik'];
$merk= $_POST['merk'];
$tanggal= $_POST['tanggal'];
$desc= $_POST['desc'];

$query = $mysqli_query($conn, "INSERT INTO showroom_wihda_table VALUES ('','$mobil','$milik','$merk','$tanggal','$desc','','')");

header("location: ..\pages\ListCar-Wihda.php");
?>