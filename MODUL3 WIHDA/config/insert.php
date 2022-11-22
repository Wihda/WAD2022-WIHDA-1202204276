<?php

// include ("connector.php");
// if(ISSET($_POST['selesai'])){
    $host = "localhost:8090";  
    $username = "root";  
    $password = "";  
    $database = "showroom_wihda_table";  

$conn = mysqli_connect($host, $username, $password, $database);

$mobil= $_POST['mobil'];
$milik= $_POST['milik'];
$merk= $_POST['merk'];
$tanggal= $_POST['tanggal'];
$desc= $_POST['desc'];
$status= $_POST['status'];



$query = mysqli_query($conn, "INSERT INTO modul3(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, status_pembayaran) 
VALUES ('$mobil','$milik','$merk','$tanggal','$desc','$status')");

if($query){
    echo "<script>alert('Data telah ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Wihda.php'>";
} else {
    echo "<script>alert('Gagal ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../pages/Add-Wihda.php'>"; 
}
// }
?>